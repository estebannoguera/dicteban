<?php echo $this->element('barra-usuario'); ?>
   <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Acciones <span class="caret"></span>
  </button>
  <ul class="dropdown-menu multi-level" role="menu">
                <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Repasar</a>
                <ul class="dropdown-menu">             
                  <li class="dropdown-submenu"></li>
                  
                  <li> <?php echo $this->Form->postLink(
    				'Chino',
    				array('controller' => 'words', 'action' => 'repasar',$this->Session->read('Auth.User.id'),'Chino'));?></li>
     			  <li> <?php echo $this->Form->postLink(
    				'Ingles',
    				array('controller' => 'words', 'action' => 'repasar',$this->Session->read('Auth.User.id'),'Ingles'));?></li>
    			  <li> <?php echo $this->Form->postLink(
    				'Frances',
    				array('controller' => 'words', 'action' => 'repasar',$this->Session->read('Auth.User.id'),'Frances'));?></li>
    			  <li> <?php echo $this->Form->postLink(
    				'Aleman',
    				array('controller' => 'words', 'action' => 'repasar',$this->Session->read('Auth.User.id'),'Aleman'));?></li>
     			  <li> <?php echo $this->Form->postLink(
    				'Portuges',
    				array('controller' => 'words', 'action' => 'repasar',$this->Session->read('Auth.User.id'),'Portugues'));?></li>
                </ul>
              </li>

                <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Mis Diccionarios</a>
                <ul class="dropdown-menu">             
                  <li class="dropdown-submenu"></li>
                  
                  <li> <?php echo $this->Form->postLink(
    				'Chino',
    				array('controller' => 'words', 'action' => 'mi_diccionario',$this->Session->read('Auth.User.id'),'Chino'));?></li>
     			  <li> <?php echo $this->Form->postLink(
    				'Ingles',
    				array('controller' => 'words', 'action' => 'mi_diccionario',$this->Session->read('Auth.User.id'),'Ingles'));?></li>
    			  <li> <?php echo $this->Form->postLink(
    				'Frances',
    				array('controller' => 'words', 'action' => 'mi_diccionario',$this->Session->read('Auth.User.id'),'Frances'));?></li>
    			  <li> <?php echo $this->Form->postLink(
    				'Aleman',
    				array('controller' => 'words', 'action' => 'mi_diccionario',$this->Session->read('Auth.User.id'),'Aleman'));?></li>
     			  <li> <?php echo $this->Form->postLink(
    				'Portuges',
    				array('controller' => 'words', 'action' => 'mi_diccionario',$this->Session->read('Auth.User.id'),'Portugues'));?></li>
                </ul>
              </li>

    <li><a data-toggle="modal" href="#insertWord">Insertar Palabra</a></li>
    <li class="divider"></li>
    <li><a href="#">Eliminar Diccionario</a></li>
  </ul>
</div>





<!-- MODALS-->

    <div class="modal fade" id="insertWord">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Insertar palabra</h4>
          </div>
          <div class="modal-body">


                 <?php echo $this->Form->create('Word',array('action' => 'add','class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
                  <div class="form-group">                         
                    <?php echo $this->Form->input('iduser',array('class'=>'form-control','type'=>'hidden','value'=>$this->Session->read('Auth.User.id')));?>          
                  </div>
                  <div class="form-group"> 
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Palabra</label>
    					<div class="col-lg-10">                            
                    		<?php echo $this->Form->input('word',array('class'=>'form-control',"placeholder"=>'palabra','style'=>"width: 180px"));?>               
                  		</div> 
                  </div> 
                   <div class="form-group"> 
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Libro o Nota</label>
    					<div class="col-lg-10">                            
                    		<?php echo $this->Form->input('book',array('class'=>'form-control',"placeholder"=>'Libro o Nota','style'=>"width: 180px"));?>               
                  		</div> 
                  </div> 
                   <div class="form-group"> 
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Nivel Dificultad</label>
    					<div class="col-lg-10">                            
                    		<?php echo $this->Form->input('level',array('class'=>'form-control',"placeholder"=>'Nivel  Dificultad','style'=>"width: 180px"));?>               
                  		</div> 

                  </div>

                   <div class="form-group">                   		
    					  <div class="col-lg-10">                                 
                    		<?php echo $this->Form->input('language' ,array('class'=>'form-control','style'=>"width: 167px",'empty'=>false,'label'=>array('Idioma','class' =>'col-sm-3 control-label'),'options' => array('Chino'=>"Chino",'Ingles'=>"Ingles",'Frances'=>"Frances",'Aleman'=>"Aleman",'Portuges'=>"Portuges")));?>                    
                  		  </div> 
                  	</div> 

                   <div class="form-group">
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Traduccion</label>
    					<div class="col-lg-10">                              
                    	<?php echo $this->Form->input('traduction',array('class'=>'form-control',"placeholder"=>'Traduccion','style'=>"width: 180px"));?>               
                  		</div> 
                  	</div> 

                    <div class="form-group">
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Orden</label>
    					<div class="col-lg-10">                              
                    	<?php echo $this->Form->input('order',array('class'=>'form-control',"placeholder"=>'Orden','style'=>"width: 180px"));?>               
                  		</div> 
                  	</div>     

                   <div class="form-group">  
                      <label for="ejemplo_password_3" class="col-lg-2 control-label">Notas</label>
    					<div class="col-lg-10">                                              
                    	<?php echo $this->Form->input('note',array('class'=>'form-control',"placeholder"=>'Notas','style'=>"width: 180px"));?>               
                  		</div>
                  	</div>

                  <div class="form-group">                  
    					<div class="col-lg-10">                                   
                    	<?php echo $this->Form->submit('Insertar',array('class'=>'btn btn-success'))?>                
                  		</div>
                  </div>
                <?php echo $this->Form->end();?>
         

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- FIN DE MODALS-->



