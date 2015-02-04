
<div class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>             
           <?php echo $this->Html->link(__('Juegos WorldT'),'/',array('class'=>'navbar-brand'));?>    
        </div>
        <div  style="height:86px;" class="navbar-collapse collapse" >
          <ul class="nav navbar-nav navbar-right" >
          
            <?php if(!$this->Session->check('Auth.User')):?>
            <?php echo $this->Session->flash(); ?>
            
                <?php echo $this->Form->create('User',array('action' => 'login','class'=>'navbar-form navbar-right','inputDefaults'=>array('label'=>false)));?>
                  <div class="form-group">                         
                    <?php echo $this->Form->input('username',array('class'=>'form-control',"placeholder"=>'Username','style'=>"width: 180px"));?>          
                  </div>
                  <div class="form-group">                             
                    <?php echo $this->Form->input('password',array('class'=>'form-control',"placeholder"=>'Password','style'=>"width: 180px"));?>               
                  </div>             
                  <div class="form-group">                
                    <?php echo $this->Form->submit('Login',array('class'=>'btn btn-success'))?>                
                  </div>
                <?php echo $this->Form->end();?>

            <?php else: ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.username');?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
              	 <li>
              	 	<?php echo $this->Html->link(__('Mi perfil'),array('controller'=>'users','action'=>'profile'))?>
              	 </li>
                 <li>
                 	<?php echo $this->Html->link(__('Salir'),array('controller'=>'users','action'=>'logout'))?>
                 </li>
              </ul>

            </li>

            <?php endif;?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>










