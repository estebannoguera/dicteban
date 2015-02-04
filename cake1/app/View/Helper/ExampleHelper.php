<?php
class ExampleHelper extends AppHelper {

	public $helpers = array('Js');
  
  public function preguntar($tupla) {


  	if( count($tupla) > 1 ){// solo se ejecuta cuando el vector no es vacio
  	
  	$indice = rand(1, count($tupla));

  	$tipo = rand(1, 100);

  		if( $tipo < 50 ){

  			return "Que significa ".$tupla[$indice]['Word']['word']." ?";

  		}

  		else{


  		}

    		return "Como se escribe ".$tupla[$indice]['Word']['traduction']." en ".$tupla[$indice]['Word']['language']." ?";

  		}//fin de if

  	}//fin de funcion 

  public function responder() {

  			pr('emtra');
    		return "entra";

  	}//fin de funcion 


  	public function reuseit() {

  		$b = '"button"';
  		$b2 = '"btn btn-success"';
    	return "<button type=".$b." class=".$b2.">Left</button>";
  
  }//fin de metodo 
}
?>