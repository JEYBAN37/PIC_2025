

<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

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

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => '/login',
            'loginRedirect' => '/dashboard',
            'logoutRedirect' => '/login',
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array('username' => 'email', 'password' => 'password')
                ),
            ),
            'storage' => 'Session',
            'authorize' => array('Controller')
        )
    );

    public function beforeFilter()
    {
        parent::beforeFilter();

        header("Access-Control-Allow-Origin: http://localhost:5173");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            exit; // Terminar la solicitud preflight
        }

        // Permitir acceso público a las acciones indicadas
        $this->Auth->allow('login', 'isAuthenticated', 'logout', 'viewAnalitic');
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
