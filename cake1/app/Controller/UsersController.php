<?php
App::uses('Controller', 'AppController');

class UsersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		
		$this->Auth->allow('profile','add','login','logout');
		//$this->Auth->allow('add');
	}

	public function diccionarios() {

	}

	public function index() {


	}
	
	public function edit($iduser) {

		$data = $this->User->findById($iduser);


		if($this->request->is('get') || $this->request->is('put')){

			$this->User->id = $iduser;
			
			//if($this->User->save($this->request->data)){

				//$this->Session->setFlash(__('Usuario editado exitosamente!!'), 'exitos');
				//$this->redirect(array('controller'=>'users','action' => 'profile'));


			//}
		}

		$this->request->data = $data;

		unset($this->request->data['User']['password']);

	}

	public function profile($id=null) {
		
	}

	public function mi_diccionario($id=null) {
		
	}
	
	public function login() {
		
		if($this->request->is('post')) {
            pr($this->data);
            //debug($this->Auth->login()); die();
            //pr(AuthComponent::password($this->data[$this->alias]['password']));
			if ($this->Auth->login()) {

				$this->redirect($this->Auth->redirect(array('controller' =>'users', 'action'=>'profile')));
			} else {
				$this->Session->setFlash(__('nombre de usuario y/o password invalido(s)'), 'fallas');
				$this->redirect(array('controller'=>'forums','action' => 'index'));
			}
		}
	}

	public function add(){

		pr($this->data);

        if ($this->request->is('post')) {

        	 pr($this->data);

            $this->User->create();

            if ($this->User->save($this->request->data)) {

                $this->flash(__('El usuario ha sido guardado exitosamente!!'),'/');

                return $this->redirect(array('controller' => 'forums', 'action' => 'index'));

            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'),array('action' => '/'));
        }
         
	}//fin de add
	
	public function logout() {
	
	  //$this->redirect($this->Auth->logout());
	  $this->Auth->logout();
      $this->redirect('/');
	}
}
