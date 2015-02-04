<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

	
	public $components = array('Auth','Session','DebugKit.Toolbar','Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'profile'
            ),
            'logoutRedirect' => array(
                'controller' => 'forums',
                'action' => 'index',
                'home'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        ));
	//public $components = array('DebugKit.Toolbar');
	
	public function beforeFilter() {
		
	}

    public function isAuthorized($user) {
        // Admin can access every action
        //if (isset($user['role']) && $user['role'] === 'admin') {
            //return true;
        //}
        // Default deny
        //return false;
    }
}
