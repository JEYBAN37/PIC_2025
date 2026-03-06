<?php

App::uses('AppController', 'Controller');
App::uses('ClassRegistry', 'Utility');
class UsersController extends AppController
{

    var $uses = array("User", "Referente", "Responsable");
    public $components = array('Acl');

    var $helpers = array("Html", "Form");
    var $paginate = array("order" => "username", "limit" => 5);
    var $nivs = array("A" => "Administrador", "U" => "Investigador", "D" => "Digitador");



    public function login()
    {
        if ($this->request->is('post')) {

            if (empty($this->request->data['g-recaptcha-response'])) {
                $this->Session->setFlash('Debe completar el CAPTCHA', 'flash_custom', array('class' => 'error', 'title' => 'Error al iniciar sesión'));
                return;
            }


            // Obtener datos del body

            if ((isset($this->data)) && (!empty($this->data))) {
                $r = $this->User->find("first", array(
                    "conditions" => array(
                        "username" => $this->data["User"]["username"],
                        "password" => md5($this->data["User"]["password"])
                    )
                ));

                if (isset($r) && !empty($r)) {
                    $this->Session->write("usr", $r["User"]["nombre_usuario"]);
                    $this->Session->write("nvl", $r["User"]["nivel"]);

                    $rolUsuario = null;

                    if ($r["User"]["group_id"] === "3") {

                        $rolUsuario = $this->Responsable->find('first', [
                            'conditions' => ['Responsable.numero' => $r['User']['numero']],
                            'fields' => ['Responsable.id, Responsable.proyecto']
                        ]);

                        // Autenticar con AuthComponent
                        $this->Auth->login([
                            'id' => $r['User']['id'],
                            'username' => $r['User']['username'],
                            'group_id' => $r['User']['group_id'],
                            'nombre' => $r['User']['nombre_usuario'],
                            'id_responsable' => isset($rolUsuario['Responsable']['id']) ? $rolUsuario['Responsable']['id'] : null,
                            'proyecto' => isset($rolUsuario['Responsable']['proyecto']) ? $rolUsuario['Responsable']['proyecto'] : null,
                            'rol' => $rolUsuario ? $rolUsuario['Responsable']['id'] : null
                        ]);

                        if ($this->Session->read('Auth.User')) {
                        $this->Session->setFlash('Acceso exitoso, bienvenido', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
                        return $this->redirect( array('controller' => 'productos', 'action' => 'index'));
                        }

                    } elseif ($r["User"]["group_id"] === "2") {

                        $rolUsuario = $this->Referente->find('first', [
                            'conditions' => ['Referente.numero' => $r['User']['numero']],
                            'fields' => ['Referente.id, Referente.proyecto']
                        ]);

                        // Autenticar con AuthComponent
                        $this->Auth->login([
                            'id' => $r['User']['id'],
                            'username' => $r['User']['username'],
                            'group_id' => $r['User']['group_id'],
                            'nombre' => $r['User']['nombre_usuario'],
                            'id_responsable' => isset($rolUsuario['Referente']['id']) ? $rolUsuario['Referente']['id'] : null,
                            'proyecto' => isset($rolUsuario['Referente']['proyecto']) ? $rolUsuario['Referente']['proyecto'] : null,
                            'rol' => $rolUsuario ? $rolUsuario['Referente']['id'] : null

                        ]);

                        if ($this->Session->read('Auth.User')) {
                        $this->Session->setFlash('Acceso exitoso, bienvenido', 'flash_custom', array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
                        return $this->redirect( array('controller' => 'productos', 'action' => 'index'));
                        }

                    } elseif ($r["User"]["group_id"] === "1") {
                        // Autenticar con AuthComponent
                        $this->Auth->login([
                            'id' => $r['User']['id'],
                            'username' => $r['User']['username'],
                            'group_id' => $r['User']['group_id'],
                            'nombre' => $r['User']['nombre_usuario']

                        ]);

                        if ($this->Session->read('Auth.User')) {
                            $this->Session->setFlash('Acceso exitoso, bienvenido', 'flash_custom',array('class' => 'success', 'title' => 'El registro se ha completado correctamente'));
                             $this->redirect( array('controller' => 'productos', 'action' => 'index'));
                        }
                    }
                } else {
                    $this->Session->setFlash('Por favor verifique sus credenciales', 'flash_custom', array('class' => 'error', 'title' => 'Error al iniciar sesión'));
                }
                }
            $this->layout = 'login';
        }
    }

    function salir()
    {
        $this->Session->destroy();
        $this->Auth->logout();
        $this->redirect("login");
    }


    public function check()
    {
        $this->autoRender = false;
        $this->response->type('json');

        if ($this->Auth->user()) {
            echo json_encode([
                'authenticated' => true,
                'user' => $this->Auth->user()
            ]);
        } else {
            echo json_encode([
                'authenticated' => false
            ]);
        }
    }

    public function home() {}

    public function adminStadistics()
    {
        $this->autoRender = false;
        $this->response->type('json');
        if ($this->request->is('get')) {
            // Contar usuarios agrupados por group_id
            $result = $this->User->find('all', [
                'fields' => ['User.group_id', 'COUNT(User.id) AS total'],
                'group' => ['User.group_id'],
                'recursive' => -1
            ]);
            $counts = [];
            foreach ($result as $row) {
                $groupId = $row['User']['group_id'];
                $counts["grupo_$groupId"] = (int)$row[0]['total'];
            }
            echo json_encode(['counts' => $counts]);
        }
    }


    public function usersList()
    {
        $this->autoRender = false;
        $this->response->type('json');

        if ($this->request->is('post')) {
            $data = $this->request->input('json_decode', true);

            $page = !empty($data['page']) ? (int)$data['page'] : 1;
            $limit = !empty($data['limit']) ? (int)$data['limit'] : 5;

            $conditions = [];

            // 🔍 Búsqueda unificada (nombre o username/correo)
            if (!empty($data['search'])) {
                $conditions['OR'] = [
                    'User.nombre_usuario LIKE' => '%' . $data['search'] . '%',
                    'User.username LIKE' => '%' . $data['search'] . '%'
                ];
            }

            // Filtro adicional por grupo si lo envías
            if (!empty($data['group_id'])) {
                $conditions['User.group_id'] = (int)$data['group_id'];
            }

            $users = $this->User->find('all', [
                'conditions' => $conditions,
                'fields' => ['id', 'username', 'nombre_usuario', 'nivel', 'group_id', 'password'],
                'limit' => $limit,
                'offset' => ($page - 1) * $limit,
                'order' => ['User.username' => 'asc'],
                'group' => ['User.id']
            ]);

            // Contar usuarios únicos por group_id (sin duplicados)
            $total = $this->User->find('count', [
                'conditions' => $conditions,
                'group' => ['User.id']
            ]);

            $totalPages = ceil($total / 10);

            echo json_encode([
                'users' => $users,
                'total' => $total,
                'page' => $page,
                'limit' => $limit,
                'totalPages' => $totalPages
            ]);
        } else {
            $this->response->statusCode(405);
            echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
        }
    }

    public function getOne($id = null)
    {
        $this->autoRender = false;
        $this->response->type('json');

        if ($this->request->is('get')) {
            if (!$id) {
                $this->response->statusCode(400);
                echo json_encode(['status' => 'error', 'message' => 'ID requerido']);
                return;
            }

            $user = $this->User->find('first', [
                'conditions' => ['User.id' => $id],
                'fields' => ['id', 'username', 'nombre_usuario', 'nivel', 'group_id']
            ]);

            if ($user) {
                // Buscar si el usuario es Responsable o Referente por username/correo
                $referente = $this->Referente->find('first', [
                    'conditions' => ['Referente.correo' => $user['User']['username']]
                ]);
                $responsable = null;
                $tipo = null;
                $extraData = [];

                if ($referente) {
                    $tipo = 'referente';
                    $extraData = [
                        'cedula' => $referente['Referente']['numero'],
                        'celular' => $referente['Referente']['celular'],
                        'correo' => $referente['Referente']['correo'],
                        'fecha_nacimiento' => $referente['Referente']['fecha_nac'],
                        'profesion' => $referente['Referente']['profesion'],
                        'cargo' => $referente['Referente']['cargo'],
                        'telefono' => $referente['Referente']['telefono'],
                        'tipodoc' => $referente['Referente']['tipodoc']
                    ];
                } else {
                    $responsable = $this->Responsable->find('first', [
                        'conditions' => ['Responsable.correo' => $user['User']['username']]
                    ]);
                    if ($responsable) {
                        $tipo = 'responsable';
                        $extraData = [
                            'cedula' => $responsable['Responsable']['numero'],
                            'celular' => $responsable['Responsable']['celular'],
                            'correo' => $responsable['Responsable']['correo'],
                            'fecha_nacimiento' => $responsable['Responsable']['fecha_nac'],
                            'profesion' => $responsable['Responsable']['profesion'],
                            'cargo' => $responsable['Responsable']['cargo'],
                            'telefono' => $responsable['Responsable']['telefono'],
                            'tipodoc' => $responsable['Responsable']['tipodoc']
                        ];
                    }
                }

                // Personalizar los nombres de los campos del usuario
                $flatUser = [
                    'id' => $user['User']['id'],
                    'username' => $user['User']['username'],
                    'nombre_usuario' => $user['User']['nombre_usuario'],
                    'nivel' => $user['User']['nivel'],
                    'grupo' => $user['User']['group_id'],
                    'tipo' => $tipo
                ] + $extraData;

                echo json_encode([
                    'status' => 'success',
                    'user' => $flatUser
                ]);
            } else {
                $this->response->statusCode(404);
                echo json_encode(['status' => 'error', 'message' => 'Usuario no encontrado']);
            }
        } else {
            $this->response->statusCode(405);
            echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
        }
    }

    private function validateUserData($data, $model, $id, $message)
    {
        // Preparar datos para guardar
        $model->create();

        if ($model->save($data)) {
            $data[$id] = $model->id;
            return $data; // devolver datos actualizados
        } else {
            $this->response->statusCode(400);
            echo json_encode([
                'status' => 'error',
                'message' => $message,
                'errors' => $model->validationErrors
            ]);
            return false; // indicar que falló
        }
    }


    public function add()
    {
        $this->autoRender = false;
        $this->response->type('json');

        try {
            if (!$this->request->is('post')) {
                $this->response->statusCode(405);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Método no permitido'
                ]);
                return;
            }

            $data = $this->request->input('json_decode', true);
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

            if (empty($data['username'])) {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'El campo "username" es obligatorio'
                ]);
                return;
            }

            if (empty($data['group_id'])) {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'El campo "group_id" es obligatorio'
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

            // Preparar datos para guardar
            $this->User->create();
            if (!$this->User->save($data)) {
                $this->response->statusCode(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Errores de validación en el usuario',
                    'errors' => $this->User->validationErrors
                ]);
                return;
            }

            $role = [
                'numero' => isset($data['cedula']) ? $data['cedula'] : null,
                'nombres' => $data['nombre_usuario'],
                'celular' => isset($data['celular']) ? $data['celular'] : null,
                'correo' => $data['username'],
                'fecha_nac' => isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null,
                'profesion' => isset($data['profesion']) ? $data['profesion'] : null,
                'cargo' => isset($data['cargo']) ? $data['cargo'] : null,
                'telefono' => isset($data['telefono']) ? $data['telefono'] : null,
                'proyecto' => isset($data['proyecto']) ? $data['proyecto'] : null,
                'tipodoc' => "CC",
            ];

            $result = true;
            if ($data['group_id'] == "2") {
                $result = $this->validateUserData($role, $this->Referente, 'referente_id', 'id', 'Errores de validación en el referente');
            } elseif ($data['group_id'] == "3") {
                $result = $this->validateUserData($role, $this->Responsable, 'responsable_id', 'id', 'Errores de validación en el responsable');
            }

            if ($result === false) {
                return; // Si hubo error, ya se manejó en la función
            }

            $this->response->statusCode(201);
            $user = $this->User->read(null, $this->User->id);
            if (isset($user['User']['password'])) {
                unset($user['User']['password']);
            }
            echo json_encode([
                'status' => 'success',
                'message' => 'Usuario guardado exitosamente',
                'user' => $user
            ]);
        } catch (Exception $e) {
            $this->response->statusCode(500);
            echo json_encode([
                'status' => 'error',
                'message' => 'Error inesperado: ' . $e->getMessage()
            ]);
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
                $this->response->statusCode(400);
                $this->response->body(json_encode([
                    'status' => 'error',
                    'message' => "Usuario no encontrado",
                    'errors' => $this->User->validationErrors
                ]));
                return;
            }

            if ($this->User->delete($id)) {
                $this->response->statusCode(200);
                $this->response->body(json_encode([
                    'status' => 'success',
                    'message' => "Usuario eliminado",
                ]));
                return;
            } else {
                $this->response->statusCode(400);
                $this->response->body(json_encode([
                    'status' => 'error',
                    'message' => "Error al eliminar el usuario",
                    'errors' => $this->User->validationErrors
                ]));
                return;
            }
        } else {
            $this->response->statusCode(405);
            $this->response->body(json_encode([
                'status' => 'error',
                'message' => 'Método no permitido'
            ]));
            return;
        }
    }


    public function edit($id = null)
    {
        $this->autoRender = false;
        $this->response->type('json');

        if (!$id) {
            return $this->response->body(json_encode([
                'status' => 'error',
                'message' => 'ID requerido'
            ]));
        }

        if (!$this->request->is('put')) {
            $this->response->statusCode(405);
            return $this->response->body(json_encode([
                'status' => 'error',
                'message' => 'Método no permitido'
            ]));
        }

        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->response->statusCode(404);
            return $this->response->body(json_encode([
                'status' => 'error',
                'message' => 'Usuario no encontrado'
            ]));
        }

        $data = $this->request->input('json_decode', true);
        if (!$data) {
            $this->response->statusCode(400);
            return $this->response->body(json_encode([
                'status' => 'error',
                'message' => 'Datos inválidos'
            ]));
        }

        $oldUser = $this->User->find('first', [
            'conditions' => ['User.id' => $id],
            'recursive' => -1
        ]);

        $userUpdate = ['User' => array_merge($oldUser['User'], $data)];

        // Manejar password
        if ($userUpdate['User']['password'] === $oldUser['User']['password']) {
            unset($userUpdate['User']['password']);
        }

        // 🔹 Validar correo nuevo no exista en otro usuario
        if (isset($userUpdate['User']['username']) && $userUpdate['User']['username'] !== $oldUser['User']['username']) {
            $exists = $this->User->find('count', [
                'conditions' => ['User.username' => $userUpdate['User']['username'], 'User.id !=' => $id]
            ]);
            if ($exists > 0) {
                $this->response->statusCode(400);
                return $this->response->body(json_encode([
                    'status' => 'error',
                    'message' => 'El correo ya está en uso por otro usuario'
                ]));
            }
        }

        // 🔹 Iniciar transacción
        $dataSource = $this->User->getDataSource();
        $dataSource->begin();

        try {
            // Guardar User
            if (!$this->User->save($userUpdate)) {
                throw new Exception('No se pudo actualizar el usuario');
            }

            $dataModel = [
                'numero' => isset($data['cedula']) ? $data['cedula'] : null,
                'nombres' => $userUpdate['User']['nombre_usuario'],
                'celular' => isset($data['celular']) ? $data['celular'] : null,
                'correo' => $userUpdate['User']['username'],
                'fecha_nac' => isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null,
                'profesion' => isset($data['profesion']) ? $data['profesion'] : null,
                'cargo' => isset($data['cargo']) ? $data['cargo'] : null,
                'telefono' => isset($data['telefono']) ? $data['telefono'] : null,
                'tipodoc' => "CC",
            ];


            // Actualizar Referente
            if ((int)$userUpdate['User']['group_id'] === 2) {


                $referente = $this->Referente->find('first', [
                    'conditions' => ['Referente.correo' => $oldUser['User']['username']]
                ]);


                if ($referente) {
                    $this->Referente->id = $referente['Referente']['id'];
                    if (!$this->Referente->save($dataModel)) {
                        throw new Exception('No se pudo actualizar el Referente' . json_encode($this->Referente->validationErrors));
                    }
                } else {
                    $this->Referente->create();
                    if (!$this->Referente->save($dataModel)) {
                        throw new Exception('No se pudo crear el Referente' . json_encode($this->Referente->validationErrors));
                    }
                }
            }

            // Actualizar Responsable
            if ((int)$userUpdate['User']['group_id'] === 3) {

                $responsable = $this->Responsable->find('first', [
                    'conditions' => ['Responsable.correo' => $oldUser['User']['username']]
                ]);

                if ($responsable) {
                    $this->Responsable->id = $responsable['Responsable']['id'];
                    if (!$this->Responsable->save($dataModel)) {
                        throw new Exception('No se pudo actualizar el Responsable' . json_encode($this->Responsable->validationErrors));
                    }
                } else {
                    $this->Responsable->create();
                    if (!$this->Responsable->save($dataModel)) {
                        throw new Exception('No se pudo crear el Responsable' . json_encode($this->Responsable->validationErrors));
                    }
                }
            }

            // 🔹 Revisar ARO
            $aro = $this->Acl->Aro->find('first', [
                'conditions' => ['Aro.model' => 'User', 'Aro.foreign_key' => $id]
            ]);
            if (!$aro) {
                $parentAro = $this->Acl->Aro->find('first', [
                    'conditions' => [
                        'Aro.model' => 'Group',
                        'Aro.foreign_key' => $userUpdate['User']['group_id']
                    ]
                ]);
                $this->Acl->Aro->create();
                $this->Acl->Aro->save([
                    'model' => 'User',
                    'foreign_key' => $id,
                    'parent_id' => $parentAro ? $parentAro['Aro']['id'] : null
                ]);
            }

            $dataSource->commit();

            return $this->response->body(json_encode([
                'status' => 'success',
                'message' => 'Usuario actualizado correctamente',
                'old_user' => $oldUser['User'],
                'new_user' => $this->User->read(null, $id)['User']
            ]));
        } catch (Exception $e) {
            $dataSource->rollback();
            $this->response->statusCode(400);
            return $this->response->body(json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]));
        }
    }



    public function repairAros()
    {
        $this->autoRender = false;
        $User = ClassRegistry::init('User');
        $Aro = ClassRegistry::init('Aro');

        // Recorremos todos los usuarios
        $users = $User->find('all', array('recursive' => -1));

        foreach ($users as $user) {
            $userId = $user['User']['id'];

            // Verificamos si existe su ARO
            $aro = $Aro->find('first', array(
                'conditions' => array(
                    'Aro.model' => 'User',
                    'Aro.foreign_key' => $userId
                )
            ));

            if (!$aro) {
                // Si no existe, lo creamos
                $Aro->create();
                $Aro->save(array(
                    'model' => 'User',
                    'foreign_key' => $userId,
                    'parent_id' => null, // O asigna al grupo correspondiente si usas grupos
                    'alias' => 'User::' . $userId
                ));
                echo "✔ Se creó el ARO para el usuario con id {$userId}\n";
            } else {
                echo "✔ El usuario {$userId} ya tiene su ARO\n";
            }
        }

        echo "✅ Reparación completada\n";
    }

    
   public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }

}