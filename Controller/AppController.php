

<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Controller', 'Controller');

/**

 * Application level Controller

 *

 * This file is application-wide controller file. You can put all

 * application-wide controller-related methods here.

 *

 * PHP 5

 *

 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)

 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 *

 * Licensed under The MIT License

 * For full copyright and license information, please see the LICENSE.txt

 * Redistributions of files must retain the above copyright notice.

 *

 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 * @link          http://cakephp.org CakePHP(tm) Project

 * @package       app.Controller

 * @since         CakePHP(tm) v 0.2.9

 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)

 */
App::uses('Controller', 'Controller');

/**

 * Application Controller

 *

 * Add your application-wide methods in the class below, your controllers

 * will inherit them.

 *

 * @package		app.Controller

 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller

 */
class AppController extends Controller
{
    // protected $externalRedirectUrl = 'http://localhost:5173/colectivaspasto/';

    public $components = array(
        'RequestHandler',
        'Session',
        'Paginator',
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Acl.Actions' => array('actionPath' => 'controllers', 'userModel' => 'Users')
            ),
            array(
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'md5'
                        //'passwordHasher' => array(
                        //    'className' => 'Simple',
                        //    'hashType' => 'md5'
                        //)
                    )
                )
            )
        ),
    );

    function beforeFilter()
    {
        parent::beforeFilter();

        $this->Auth->authenticate = array(
            'Form' => array(
                'fields' => array(
                    'username' => 'username',
                    'password' => 'password'
                )
            )
        );

        $this->Auth->authorize = array('Controller');

        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');

        $this->Auth->logoutRedirect = array(
            'controller' => 'users',
            'action' => 'login'
        );

        $this->Auth->allow('login', 'logout');

        $this->_checkInactivity();
    }
    public function isAuthorized($user)
    {
        return true;
    }

    protected function _checkInactivity()
    {
        if (
            $this->request->controller === 'users' &&
            $this->request->action === 'login'
        ) {
            return;
        }


        $user = $this->Auth->user();

        if (!$user) {
            return;
        }

        $now = time();
        $lastActivity = $this->Session->read('Auth.lastActivity');

        if ($lastActivity) {
            $limit = Configure::read('Session.inactivityLimit');

            if (($now - $lastActivity) > $limit) {
                // sesión expirada por inactividad
                $this->Auth->logout();
                $this->Session->destroy();

                $this->Session->setFlash(
                    'Tu sesión expiró por inactividad',
                    'default',
                    array('class' => 'alert alert-warning')
                );

                return $this->redirect($this->Auth->loginAction);
            }
        }

        // actualizar actividad
        $this->Session->write('Auth.lastActivity', $now);
    }


    public function cargarProductosSelect()
    {
        $cacheKey = 'productos_select';
        $productos = Cache::read($cacheKey, 'selects');
        if ($productos === false) {
            $this->loadModel('Producto');
            $productos = $this->Producto->find('list', [
                'fields' => ['Producto.id', 'Producto.nombreproducto'],
                'order' => ['Producto.modified' => 'DESC'],
                'recursive' => -1
            ]);
            Cache::write($cacheKey, $productos, 'selects');
        }
        return $productos;
    }

    public function cargarUbicacionesSelect()
    {   
        $cacheKey = 'ubicaciones_select';
        $ubicaciones = Cache::read($cacheKey, 'selects');
        if ($ubicaciones === false) {
            $this->loadModel('Ubicacion');
            $ubicaciones = $this->Ubicacion->find('list', [
                'fields' => ['Ubicacion.id', 'Ubicacion.sitio'],
                'recursive' => -1
            ]);
            Cache::write($cacheKey, $ubicaciones, 'selects');
        }
        return $ubicaciones;
    }
}
