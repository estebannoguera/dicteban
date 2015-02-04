<?php echo $this->element('barra-usuario'); ?>

<div class="jumbotron">
<form class="form-horizontal" action='' method="POST" accept-charset="utf-8" role="form">
  
    <div id="legend">
      <legend class=""></legend>
    </div>
    <div class="control-group">
    <?php echo $this->Form->create('User',array('action' => 'add','method'=>'POST','class'=>'navbar-form navbar-right','inputDefaults'=>array('label'=>false)));?>
    <h2>Editar usuario</h2>
      <!-- Username -->
      <fieldset>
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
       
        <?php echo $this->Form->input('username',array('class'=>'form-control',"placeholder"=>'Username','style'=>"width: 180px"));?> 
        <p class="help-block">nombre de ususario, utilice solamente letras</p>

      </div>
    </div>
    
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        
        <?php echo $this->Form->input('email',array('class'=>'form-control',"placeholder"=>'E-mail','style'=>"width: 180px"));?>  
        <p class="help-block">ingrese su E-mail</p>
      </div>
    </div>
    
    <div class="control-group">

      <!-- New Password-->
      <label class="control-label" for="password">Nuevo Password</label>
      <div class="controls">
        
        <?php echo $this->Form->input('password_update',array('class'=>'form-control',"placeholder"=>'Password','style'=>"width: 180px"));?> 
        <p class="help-block">ingrese un password de la menos 7 caracteres</p>
      </div>


          <div class="control-group">
      <!-- Button -->

  </fieldset>
            <div class="form-group">
             
              <?php echo $this->Form->submit('Editar',array('class'=>'btn btn-success'))?>  
            </div>
    </div>
    <?php echo $this->Form->end();?>
    </div>
    
    

