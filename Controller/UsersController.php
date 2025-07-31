<?php



class UsersController extends AppController {

    //put your code here

    var $uses = array("User");

    var $helpers = array("Html", "Form");

    var $paginate = array("order" => "username", "limit" => 5);

    var $nivs = array("A" => "Administrador", "U" => "Investigador","D" => "Digitador");

    

   /*function add($niv=null){

        if(isset($this->data)&&!empty($this->data)){

            $this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);

            if($this->User->save($this->data)){

                $this->Session->setFlash("Usuario registrado exitosamente");

            } else {

                $this->Session->setFlash("Problema en el registro");

            }

            if($niv != null){

                $this->redirect("admin");

            } else {

                $this->redirect("admin");

            }

        } else {

            //if($niv != null){

                $this->set("nivs", $this->nivs);

            //}

        }

    }*/

public function home() {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }



   public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'admin'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    

     function edit($id=null){

        if(isset($this->data) && !empty($this->data)){

            //$this->request->data["User"]["password"]=md5($this->request->data["User"]["password"]);
try {
            $this->User->save($this->data);
}catch(\Exception $e){
        

    }
            $this->redirect("admin");
            //return $this->redirect(array('action' => 'admin'));

        } else {

            $this->set("nivs", $this->nivs);

            $this->set("datos", $this->User->find("first", array("conditions" => array("User.id" => $id))));

            $this->Session->setFlash("ACTUALIZACION DE USUARIOS");

        }

    }

    
    

    function delete($id=null){
try {
    $this->User->delete($id);        
 }catch(\Exception $e){
        

    }
    $this->redirect("admin");
}


   function login() {

        if ((isset($this->data)) && (!empty($this->data))) {

            $r = $this->User->find("first", array(
                "conditions" => array(
                    "username" => $this->data["User"]["username"],
                    "password" => md5($this->data["User"]["password"])
                )
            ));

            if (isset($r) && !empty($r)) {

                $this->Session->write("usr", $r["User"]["nombre"]);

                $this->Session->write("nvl", $r["User"]["nivel"]);
                
                $auxUser = array('username' => $r["User"]["username"], 'password' => $r["User"]["password"], 'group_id' => $r["User"]["group_id"]);
                $this->Auth->login($auxUser);
                //$this->redirect("bienvenida");
                if ($this->Session->read('Auth.User')) {
                    $this->Session->setFlash('You are logged in!');
                   // return $this->redirect('/');
                    $this->redirect("home");
                    
                }                
            } else {

                $this->Session->setFlash("SIN ACCESO AL SISTEMA");
            }
        } else {

            $this->Session->setFlash("SIN ACCESO AL SISTEMA");
        }

        $this->layout = 'login';
    }
    

     function logout() {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }

    

    function bienvenida(){

        $this->Session->setFlash("Bienvenid@s");

    }

    

    function salir(){

        $this->Session->destroy();

        $this->Auth->logout();

        $this->redirect("login");

    }

    

   function admin(){

        $r = $this->paginate("User");

        $this->set("usrs", $r);

        $this->set("nivs", $this->nivs);

        $this->Session->setFlash("ADMINISTRACION DE USUARIOS");

    }


      public function beforefilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function initDB() {
        $group = $this->User->Group;

        // Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');
        //$this->Acl->allow($group, 'controllers/users/delete');
       // $this->Acl->allow($group, 'controllers/actas/delete');
      //  $this->Acl->deny($group, 'controllers/Productos/smsedit');
     // $this->Acl->allow($group, 'controllers/productos/index');

        // allow managers to posts and widgets
        $group->id = 2;
       /* $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Actas/view');
        $this->Acl->deny($group, 'controllers/Actas/edit');
        $this->Acl->deny($group, 'controllers/Actas/add');
        $this->Acl->deny($group, 'controllers/Actas/delete');
        $this->Acl->allow($group, 'controllers/Actas/nuebus');
        $this->Acl->deny($group, 'controllers/Actas/editanexo');
        $this->Acl->allow($group, 'controllers/Actividades/view');
        $this->Acl->deny($group, 'controllers/Actividades/delete');
        $this->Acl->deny($group, 'controllers/Actividades/edit');
        $this->Acl->deny($group, 'controllers/Actividades/editanexo');
        $this->Acl->allow($group, 'controllers/Actividades/nuebus');
        $this->Acl->allow($group, 'controllers/Productosactividades/nuebus');
        $this->Acl->allow($group, 'controllers/Productosactividades/checkanexos');
        $this->Acl->deny($group, 'controllers/Productosactividades/edit');
        $this->Acl->deny($group, 'controllers/Productosactividades/add');
        $this->Acl->allow($group, 'controllers/Personas/nuebus');
        $this->Acl->deny($group, 'controllers/Personas/edit8');
        $this->Acl->deny($group, 'controllers/Personas/add2');
        $this->Acl->deny($group, 'controllers/Personas/edit2');
        $this->Acl->deny($group, 'controllers/Personas/add7');
        $this->Acl->allow($group, 'controllers/Productosactividades/view');
        $this->Acl->allow($group, 'controllers/Personas/view');
        $this->Acl->allow($group, 'controllers/Canalizaciones/nuebus');
        $this->Acl->deny($group, 'controllers/Canalizaciones/add');
        $this->Acl->deny($group, 'controllers/Canalizaciones/edit');
        $this->Acl->allow($group, 'controllers/Canalizaciones/view');
        $this->Acl->allow($group, 'controllers/Productosactividades/tarearevisada');
        $this->Acl->allow($group, 'controllers/Planes/view');
        $this->Acl->deny($group, 'controllers/Planes/edit');
        $this->Acl->deny($group, 'controllers/Planes/add');
        $this->Acl->allow($group, 'controllers/Planes/nuebus');
         $this->Acl->allow($group, 'controllers/ActaViewTests/nuebus');
        $this->Acl->allow($group, 'controllers/actividadesviewtests/nuebus');
        $this->Acl->allow($group, 'controllers/Plsesiones/nuebus');
        $this->Acl->allow($group, 'controllers/Plsesiones/view');*/
       // $this->Acl->allow($group, 'controllers/eventosviewtests/nuebus');       
       // $this->Acl->allow($group, 'controllers/infoeventos/view');

     /* $this->Acl->allow($group, 'controllers/productos/index');
      $this->Acl->allow($group, 'controllers/Planes/nuebus');
      $this->Acl->allow($group, 'controllers/Actas/index');
      $this->Acl->allow($group, 'controllers/actividadesviewtests/nuebus');
      $this->Acl->allow($group, 'controllers/Plsesiones/nuebus');
      $this->Acl->allow($group, 'controllers/Plsesiones/view');
      $this->Acl->allow($group, 'controllers/eventosviewtests/nuebus');       
      $this->Acl->allow($group, 'controllers/infoeventos/view');
      $this->Acl->allow($group, 'controllers/ActaViewTests/nuebus');
      $this->Acl->allow($group, 'controllers/actividadesviewtests/nuebus');
      $this->Acl->allow($group, 'controllers/Plsesiones/nuebus');
      $this->Acl->allow($group, 'controllers/Plsesiones/view');
      $this->Acl->allow($group, 'controllers/eventosviewtests/nuebus');       
      $this->Acl->allow($group, 'controllers/infoeventos/view');
      $this->Acl->allow($group, 'controllers/Actividades/view');
      $this->Acl->allow($group, 'controllers/productos/view');*/
      //$this->Acl->allow($group, 'controllers/Productos/smsedit');
      //$this->Acl->allow($group, 'controllers/Plsesiones/view');
      //$this->Acl->allow($group, 'controllers/Proactividades/view');
      //$this->Acl->allow($group, 'controllers/procesoregistros/view');



        // allow users to only add and edit on posts and widgets
        $group->id = 3;
       /* $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Actas/view');
        $this->Acl->allow($group, 'controllers/Actas/edit');
        $this->Acl->allow($group, 'controllers/Actas/add');
        $this->Acl->deny($group, 'controllers/Actas/delete');
        $this->Acl->allow($group, 'controllers/Actividades/nuebus');
        $this->Acl->allow($group, 'controllers/Actas/nuebus');
        $this->Acl->allow($group, 'controllers/Actas/editanexo');        
        $this->Acl->deny($group, 'controllers/Actividades/delete');
        $this->Acl->allow($group, 'controllers/Actividades/edit');        
        //$this->Acl->allow($group, 'controllers/Actividades/nuebus');
        $this->Acl->allow($group, 'controllers/Productosactividades/nuebus');
        //$this->Acl->deny($group, 'controllers/Productosactividades/checkanexos');
        $this->Acl->allow($group, 'controllers/Productosactividades/edit');
        $this->Acl->allow($group, 'controllers/Productosactividades/add');
        $this->Acl->allow($group, 'controllers/Personas/nuebus');
        $this->Acl->allow($group, 'controllers/Personas/edit8');
        $this->Acl->allow($group, 'controllers/Personas/add2');
        $this->Acl->allow($group, 'controllers/Personas/edit2');
        $this->Acl->allow($group, 'controllers/Personas/add7');
        $this->Acl->allow($group, 'controllers/Personas/view');
        $this->Acl->allow($group, 'controllers/Productosactividades/view');
        $this->Acl->allow($group, 'controllers/Actividades/add');
        $this->Acl->allow($group, 'controllers/Actividades/view');
        $this->Acl->allow($group, 'controllers/Actividades/editanexo');
        $this->Acl->allow($group, 'controllers/Personas/add');
        $this->Acl->allow($group, 'controllers/Canalizaciones/nuebus');
        $this->Acl->allow($group, 'controllers/Canalizaciones/add');
        $this->Acl->allow($group, 'controllers/Canalizaciones/edit');
        $this->Acl->allow($group, 'controllers/Canalizaciones/view');
        $this->Acl->allow($group, 'controllers/Planes/view');
        $this->Acl->allow($group, 'controllers/Planes/edit');
        $this->Acl->allow($group, 'controllers/Planes/add');
        $this->Acl->allow($group, 'controllers/Planes/nuebus');        
        $this->Acl->allow($group, 'controllers/Planes/edit2');
        $this->Acl->allow($group, 'controllers/Planes/addplaneshistoricos');
        $this->Acl->allow($group, 'controllers/Planes/editanexo');        
        $this->Acl->allow($group, 'controllers/Plsesiones/nuebus');
        $this->Acl->allow($group, 'controllers/Plsesiones/add');
        $this->Acl->allow($group, 'controllers/Plsesiones/edit');
        $this->Acl->allow($group, 'controllers/Plsesiones/nuebus');
        $this->Acl->allow($group, 'controllers/Plsesiones/view');
        $this->Acl->allow($group, 'controllers/Plsmomentos/edit');
        $this->Acl->allow($group, 'controllers/Plsmomentos/add');
        $this->Acl->allow($group, 'controllers/Plsmomentos/view');
        $this->Acl->allow($group, 'controllers/planes/addplaneshistoricos');  
        $this->Acl->allow($group, 'controllers/ActaViewTests/nuebus');
        $this->Acl->allow($group, 'controllers/Actas/editanexo');
        $this->Acl->allow($group, 'controllers/ActaViewTests/nuebus');
        $this->Acl->deny($group, 'controllers/Actividades/add');
        $this->Acl->deny($group, 'controllers/Personas/add');
        $this->Acl->allow($group, 'controllers/actividadesviewtests/nuebus');
        $this->Acl->allow($group, 'controllers/eventosviewtests/nuebus');
        $this->Acl->allow($group, 'controllers/infoeventos/add');
        $this->Acl->allow($group, 'controllers/infoeventos/view');
        $this->Acl->allow($group, 'controllers/infoeventos/edit');  
        $this->Acl->allow($group, 'controllers/infoeventos/editanexo');    */   
    
       /* $this->Acl->allow($group, 'controllers/Productos/editanexo');
        $this->Acl->deny($group, 'controllers/infoeventos/delete');
        $this->Acl->allow($group, 'controllers/Actas/edit');
        $this->Acl->allow($group, 'controllers/Actas/add');*/

        //$this->Acl->allow($group, 'controllers/productos/index');

        /*$this->Acl->allow($group, 'controllers/proactividades/index');
        $this->Acl->allow($group, 'controllers/proactividades/add');
        $this->Acl->allow($group, 'controllers/proactividades/edit');
        $this->Acl->allow($group, 'controllers/proactividades/editanexo');*/
        /*$this->Acl->allow($group, 'controllers/sistematizacionprocesosviewtests/nuebus');
        $this->Acl->allow($group, 'controllers/procesoregistros/add');
        $this->Acl->allow($group, 'controllers/procesoregistros/edit');
        
        $this->Acl->allow($group, 'controllers/procesoregistros/editanexo');*/
      //  $this->Acl->allow($group, 'controllers/Actas/index');

       // $this->Acl->allow($group, 'controllers/Productos/editpic');
      // $this->Acl->allow($group, 'controllers/Productos/editanexo');
      //$this->Acl->allow($group, 'controllers/productos/view');
      //$this->Acl->allow($group, 'controllers/Plsesiones/editanexo');
      //$this->Acl->allow($group, 'controllers/Plsesiones/view');
      //$this->Acl->allow($group, 'controllers/Proactividades/view');

      //$this->Acl->allow($group, 'controllers/procesoregistros/view');
      $this->Acl->allow($group, 'controllers/Actas/view');
      $this->Acl->allow($group, 'controllers/Actas/edit');
      $this->Acl->allow($group, 'controllers/Actas/add');



        // allow basic users to log out
        //$this->Acl->allow($group, 'controllers/users/logout');

        // we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }

}
