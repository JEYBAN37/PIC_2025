<?php
App::import('Vendor', 'JWT', array('file' => 'firebase/php-jwt-main/src/JWT.php'));
App::uses('Hash', 'Utility');

use Firebase\JWT\JWT;

class UsersController extends AppController
{

    public $name = 'Users';

    var $uses = array("User", "Usuario");
    var $helpers = array("Html", "Form");
    var $paginate = array("order" => "username", "limit" => 10);
    var $nivs = array("A" => "Administrador", "U" => "Investigador", "D" => "Digitador");


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('loginApi'); // Permite acceder sin estar autenticado
    }


    public function home()
    {/* solo es una pagina*/
        // Si quieres proteger esta vista, verificamos la sesión
        // En cualquier acción protegida
        $user = $this->request->getSession()->read('Auth.User');
        debug($user);

        if (!$this->request->getSession()->read('Auth.User')) {
            return $this->redirect('/login'); // redirigir si no está autenticado
        }

        $this->set('user', $this->request->getSession()->read('Auth.User'));
    }

    public function isAuthorized($user = null)
    {
        return true;
    }

    public function add()
    {
        $this->autoRender = false;
        $this->response->type('json');

        if ($this->request->is('post')) {
            $data = json_decode(file_get_contents('php://input'), true);

            if (!$data) {
                $this->response->statusCode(400);
                echo json_encode(['status' => 'error', 'message' => 'Datos JSON inválidos']);
                return;
            }

            if (empty($data['password'])) {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'El campo "password" es obligatorio'
                ]);
                return;
            }

            // Validar si ya existe el usuario con el mismo nombre
            $existingUser = $this->User->find('first', [
                'conditions' => ['User.username' => $data['username']]
            ]);

            if ($existingUser) {
                $this->response->statusCode(409); // 409 Conflict
                echo json_encode([
                    'status' => 'error',
                    'message' => 'El nombre de usuario ya existe'
                ]);
                return;
            }

            $this->User->create();
            if ($this->User->save($data)) {
                $this->response->statusCode(201);
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Usuario guardado exitosamente',
                    'user' => $this->User->read(null, $this->User->id)
                ]);
            } else {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Errores de validación',
                    'errors' => $this->User->validationErrors
                ]);
            }
        } else {
            $this->response->statusCode(405);
            echo json_encode([
                'status' => 'error',
                'message' => 'Método no permitido'
            ]);
        }
    }

    public function loginApi()
    {
        $this->autoRender = false;
        $this->response->type('json');

        if ($this->request->is('post')) {
            $data = $this->request->input('json_decode', true);
            $username = isset($data['username']) ? $data['username'] : null;
            $password = isset($data['password']) ? $data['password'] : null;


            $user = $this->User->find("first", array(
                "conditions" => array(
                    "username" => $username,
                    "password" => $password
                )
            ));
        }


        if (!empty($this->data)) {
            $username = $this->data["username"];
            $password = md5($this->data["password"]);

            $user = $this->User->find("first", array(
                "conditions" => array(
                    "username" => $username,
                    "password" => $password
                )
            ));

            if ($user) {
                echo json_encode([
                    'success' => true,
                    'message' => 'Login exitoso',
                    'user' => [
                        'id' => $user['User']['id'],
                        'username' => $user['User']['username']
                    ],
                    'redirect' => Router::url(['controller' => 'Users', 'action' => 'home'])
                ]);
            } else {
                $this->response->statusCode(401);
                return json_encode(['error' => 'Usuario o contraseña incorrectos']);
            }
        } else {
            $this->response->statusCode(405);
            return json_encode(['error' => 'Método no permitido']);
        }
    }




    function salir()
    {
        $token = $this->Session->read('Auth.Token');

        if (!empty($token)) {
            $this->loadModel('RevokedToken');
            $this->RevokedToken->create();
            $this->RevokedToken->save(['token' => $token]);
        }

        $this->Session->delete('Auth');
        $this->Session->delete('Auth.Token');
        $this->Session->destroy();
        $this->Auth->logout();
        $this->redirect("login");
    }

    public function userList()
    {
        $this->autoRender = false;
        $this->response->type('json');

        $this->User->Behaviors->load('Containable');

        $conditions = [];

        // Parámetros GET o POST
        $page = $this->request->data('page') ?: $this->request->query('page');
        $limit = $this->request->data('limit') ?: $this->request->query('limit');
        $nombre = $this->request->data('nombre') ?: $this->request->query('nombre');
        $username = $this->request->data('username') ?: $this->request->query('username');
        $nivel = $this->request->data('nivel') ?: $this->request->query('nivel');

        $page = max(1, (int)$page);
        $limit = max(1, (int)$limit ?: 10);
        $offset = ($page - 1) * $limit;

        // Filtros con AND y LIKE
        if (!empty($nombre)) {
            $conditions['User.nombre_usuario LIKE'] = "%$nombre%";
        }

        if (!empty($username)) {
            $conditions['User.username LIKE'] = "%$username%";
        }

        if (!empty($nivel)) {
            $conditions['User.nivel LIKE'] = "%$nivel%";
        }

        $rawUsers = $this->User->find('all', [
            'conditions' => $conditions,
            'contain' => ['Group' => ['fields' => ['Group.id']]],
            'limit' => $limit,
            'offset' => $offset,
            'order' => ['User.username' => 'ASC']
        ]);

        $users = array_map(function ($item) {
            return [
                'id' => $item['User']['id'],
                'username' => $item['User']['username'],
                'nombre' => $item['User']['nombre_usuario'],
                'nivel' => $item['User']['nivel'],
                'group' => isset($item['Group']) ? $item['Group'] : null
            ];
        }, $rawUsers);

        echo json_encode([
            'page' => $page,
            'limit' => $limit,
            'data' => $users
        ]);
    }


    public function edit($id = null)
    {
        $this->autoRender = false;
        $this->response->type('json');

        if (!$id) {
            $this->response->statusCode(400);
            echo json_encode(['status' => 'error', 'message' => 'ID requerido']);
            return;
        }

        if ($this->request->is(['put', 'post'])) {
            $this->User->id = $id;

            if (!$this->User->exists()) {
                $this->response->statusCode(404);
                echo json_encode(['status' => 'error', 'message' => 'Usuario no encontrado']);
                return;
            }

            $data = $this->request->input('json_decode', true);

            // Si quieres encriptar la contraseña
            if (!empty($data['User']['password'])) {
                $data['User']['password'] = md5($data['User']['password']);
            }

            if ($this->User->save($data)) {
                echo json_encode(['status' => 'success', 'message' => 'Usuario actualizado']);
            } else {
                $this->response->statusCode(400);
                echo json_encode(['status' => 'error', 'message' => 'No se pudo actualizar el usuario']);
            }
        } else {
            $this->response->statusCode(405); // Method Not Allowed
            echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
        }
    }



    public function delete($id = null)
    {
        $this->autoRender = false;
        $this->response->type('json');

        if (!$id) {
            $this->response->statusCode(400);
            echo json_encode(['status' => 'error', 'message' => 'ID requerido']);
            return;
        }


        if ($this->request->is('delete')) {
            $this->User->id = $id;

            if (!$this->User->exists()) {
                $this->response->statusCode(404);
                echo json_encode(['status' => 'error', 'message' => 'Usuario no encontrado']);
                return;
            }

            if ($this->User->delete($id)) {
                echo json_encode(['status' => 'success', 'message' => 'Usuario eliminado']);
            } else {
                $this->response->statusCode(500);
                echo json_encode(['status' => 'error', 'message' => 'Error al eliminar el usuario']);
            }
        } else {
            $this->response->statusCode(405);
            echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
        }
    }
}
