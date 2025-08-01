<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Controller', 'Controller');
App::import('Vendor', 'JWT', array('file' => 'firebase/php-jwt-main/src/JWT.php'));

use Firebase\JWT\JWT;

class AppController extends Controller
{
    public $components = array(
        'RequestHandler',
        'Session',
        'Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Acl.Actions' => array(
                    'actionPath' => 'controllers',
                    'userModel' => 'User' // corregido a singular
                )
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'md5' // o un array si deseas más control
                )
            )
        )
    );

    public function beforeRender()
    {
        parent::beforeRender();
        $this->set('user', $this->Auth->user());
    }

    public function isAuthorized($user = null)
    {
        return false; // Solo permitirá si se autoriza en controladores específicos
    }

    function beforeFilter()
    {
        parent::beforeFilter();

        $isApiRequest = $this->request->is('json') ||
            $this->RequestHandler->prefers('json') ||
            $this->request->is('ajax');

        if ($isApiRequest) {
            $this->handleApiAuthentication();
        } else {
            $this->configureAuthComponent();
        }
    }

    private function handleApiAuthentication()
    {
        // Peticiones tipo API: desactivar AuthComponent y usar JWT
        $this->Auth->allow();
        $this->autoRender = false;

        $token = null;

        // Obtener token del header Authorization
        if (method_exists($this->request, 'header')) {
            $token = $this->request->header('Authorization');
        }

        // Alternativas si no funcionó
        if (!$token) {
            if (!empty($_SERVER['HTTP_AUTHORIZATION'])) {
                $token = $_SERVER['HTTP_AUTHORIZATION'];
            } elseif (!empty($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
                $token = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
            } elseif (!empty($_SERVER['REDIRECT_REDIRECT_HTTP_AUTHORIZATION'])) {
                $token = $_SERVER['REDIRECT_REDIRECT_HTTP_AUTHORIZATION'];
            }
        }

        if (!$token) {
            throw new BadRequestException('Falta el token');
        }

        $token = str_replace('Bearer ', '', $token);

                $this->loadModel('RevokedToken');

        $revoked = $this->RevokedToken->find('first', [
            'conditions' => ['RevokedToken.token' => $token]
        ]);

        if (!empty($revoked)) {
            throw new UnauthorizedException('Este token ha sido revocado.');
        }


        try {
            $decoded = JWT::decode($token, Configure::read('Security.jwt_key'), array('HS256'));
            $this->request->data['AuthUser'] = (array)$decoded;
        } catch (Exception $e) {
            throw new UnauthorizedException('Token inválido: ' . $e->getMessage());
        }
    }

    private function configureAuthComponent()
    {
        $this->Auth->fields = array(
            "username" => "username",
            "password" => "password"
        );

        $this->Auth->authorize = array(
            'Controller',
            'Actions' => array('actionPath' => 'controllers')
        );

        $this->Auth->authenticate = array(
            'Form' => array(
                'fields' => array('username' => 'name', 'password' => 'password')
            )
        );

        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login'
        );

        $this->Auth->logoutRedirect = array(
            'controller' => 'users',
            'action' => 'logout'
        );
    }
}
