<?php echo $this->element('barra-usuario'); ?>



		
      <div class="row">

        <div class="col-md-5">
          <h3>Instrucciones</h3>
          <p>
          El juego es muy sencillo solamente debes contestar, presiona Preguntar y luego Responder!
			
			<br><br>

		

<div >
    <button class="btn btn-primary" id="time-button" onclick="getInput()">Preguntar</button>
    <br><br>
    <div id="time" ></div> <!-- div para el ajax_response -->



    <?php

    //debug($arreglo);

    //on button click sands request to controller and displays response data in chosen field
    $this->Js->get('#time-button')->event(
            'click', $this->Js->request(
                     array('controller' => 'words', 'action' => 'preguntar',$arreglo['idioma'], $this->Session->read('Auth.User.id')), array(
                	 'update' => '#time',             
                	 'method' => 'post',
                     'async' => true,
                    )
            )
    );

    ?>












