<?php
App::uses('Controller', 'AppController');

class WordsController extends AppController {

	var $helpers = array('Js','Example','Form','Html');

	public $components = array('RequestHandler');

	
	public function beforeFilter() {
		parent::beforeFilter();
		
		$this->Auth->allow('profile');
	}




	public function diccionarios() {

	}

	public function repasar($id,$idioma) {

		if($this->request->is('post')) {
			$this->loadModel('Word');

        	$array = array('id_user' =>$id ,'idioma'=>$idioma);
        	//pr($words);
        	$this->set('arreglo',$array);
		}

	}//fin de diccionarios

	public function mi_diccionario($id,$idioma) {

		if($this->request->is('post')) {
			$this->loadModel('Word');

        	$words = $this->Word->find('all', array('conditions'=>array('Word.iduser'=> $id,'Word.language'=>$idioma)));
        	//pr($words);
        	$this->set('palabras',$words);

		}

	}//fin de mi_diccionario


	public function repasarQ(){


        $this->autoRender = false; // No renderiza mediate el fichero .ctp
	
        if($this->RequestHandler->isAjax()){ // Comprobar si es una petición ajax
	
		pr($this->data);
				
            $nombre = $this->request->data['Ejemplo']['nombre'];
	
            $edad = $this->request->data['Ejemplo']['edad'];
	
 
	
            echo "La edad de ".$nombre." es ".$edad;
	
        }

		
	}//fin de repasarQA

	public function index() {
	
	
        $this->autoRender = false; // No renderiza mediate el fichero .ctp
	
        if($this->request->is('ajax')){ // Comprobar si es una petición ajax
	
 
	
            $nombre = $this->request->data['Word']['nombre'];
	
            $edad = $this->request->data['Word']['edad'];
			
			$result = array('edad'=>$edad,'nombre'=>$nombre);
 			
 			$this->set("result", $result);
	
            //echo "La edad de ".$nombre." es ".$edad;
	
        }

	}//fin de index

	public function contact() {
  
  		if ($this->request->is('ajax')) {
    // Use data from serialized form
    // print_r($this->request->data['Contacts']); // name, email, message
    	$this->render('contact-ajax-response', 'ajax'); // Render the contact-ajax-response view in the ajax layout
  		}
	}

   public function helloAjax()
   {
       $this->layout='ajax';
       // result can be anything coming from $this->data
       $result =  'Hello Dolly!';
       $this->set("result", $result);
   }

  public function preguntar($idioma,$id_user) {


  	 //$this->layout='responder';

  	 $this->layout = false;

  	 //pr($id_user);

	if($this->request->is('post')){

		//pr($id_user);
		$this->loadModel('Word');

        $words = $this->Word->find('all', array('conditions'=>array('Word.iduser'=> $id_user,'Word.language'=>$idioma)));

        //pr($words);

        if( count( $words ) > 0 ){

        	//pr('entra');

  		  $indice = rand(0, count($words)-1);

  		  $tipo = rand(1, 100);

  		  $pregunta = null;

  		  $respuesta = null;


  		  if( $tipo < 50 ){

  		  	$palabra = $words[$indice]['Word']['word'];

  		  	$pregunta = '<p>Que significa <u>'.$palabra.'</u>?</p>';

  			//$pregunta = "Que significa ".$palabra."?";

  			$respuesta = $words[$indice]['Word']['traduction'];

  		  }

  		  else{

  		  	$palabra = $words[$indice]['Word']['traduction'];

  		  	$pregunta = '<p>Como se escribe  <u>'.$palabra.'</u> en '.$words[$indice]['Word']['language'].'?</p>';

  			//$pregunta = "Como se escribe ".$words[$indice]['Word']['traduction']." en ".$words[$indice]['Word']['language']." ?";

  			$respuesta = $words[$indice]['Word']['word'];

  		   }

  		    $salida = array('pregunta'=>$pregunta,'respuesta'=>$respuesta);
  		
  		   $this->set('content', $salida); 

  		   //$this->render('/elements/otro');

  		   //$this->element('otro');

  		   //$this->renderElement('otro');

           $this->render('responder', 'ajax');
           

        }//fin de if


	}//fin de if


  	}//fin de funcion pregunntar


  public function responder() {


	//pr(" hola");

	if($this->request->is('post')){

		//pr(" hola");

		//$modelo = $this->loadModel('Word');

		//$hilera = 'nada';

        //$tupla = $this->Word->find('all', array('conditions'=>array('Word.id'=> $id_word)));

        //if( count( $tupla ) > 1 ){


  		 //  if( $tupla[] ){

  			// $hilera = "muy bien!";

  		 //  }

  		 //  else{

  			// $hilera = "NO!";

  		 //   }

  		    //$salida = array('hilera'=>$hilera);
  		
  		   $this->set('content', $hilera); 

           $this->render('responder', 'ajax');
           

        //}//fin de if


	}//fin de if


  	}//fin de funcion pregunntar

	public function verhora($idioma, $user) {

			if($this->request->is('post')){

					 pr($idioma." ".$user);

			}
		  

            //create current date in chosen format
            $current_date = date('d/m/Y H:i:s');
           
            //set current date as content to show in view
            $this->set('content', $current_date); 
          
            //render spacial view for ajax
            $this->render('ajax_response', 'ajax');	


	}//fin de index

	
	public function profile($id=null) {
		
	}
	
	public function login() {
		if($this->request->is('post')) {
            //pr($this->data);
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect(array('controller' =>'users', 'action'=>'profile')));
			} else {
				$this->Session->setFlash(__('nombre de usuario y/o password invalido(s)'));
			}
		}
	}

	public function add(){

        if ($this->request->is('post')) {

        	pr($this->data);
        	//$this->loadModel('User');
            $this->Word->create();

            if ($this->Word->save($this->request->data)) {
            	
                $this->Session->setFlash(__('Palabra guardada exitosamente!!'), 'exitos');
				        $this->redirect(array('controller'=>'users','action' => 'profile'));

            }else{
            	$this->Session->setFlash(__('La palabra no fue guardada.'));
            }
            
        }
         
	}//fin de add
	
	public function logout() {
	
	  //$this->redirect($this->Auth->logout());
	  $this->Auth->logout();
      $this->redirect('/');
	}
}
