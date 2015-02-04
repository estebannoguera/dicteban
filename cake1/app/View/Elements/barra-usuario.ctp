<div id="wrapper" >
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="/cake1/Users/diccionarios">mis diccionarios<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <!--<li><a href="/cake1/Users/edit/">informacion personal<span class="sub_icon glyphicon glyphicon-link"></span></a></li> -->

          <li><?php 
                echo $this->Html->link(
                'informacion personal<span class="sub_icon glyphicon glyphicon-link"></span>',
                array('controller'=>'Users', 'action'=>'edit',$this->Session->read('Auth.User.id')),
                array('escape' => FALSE));

 ?></li>
        </ul>
      </div>

</div>

      <!-- Noticias -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead">hola aca va a recibir noticias sobre los avances de la pagina</p>
              <p class="well lead">haga click en el menu para ver detalles. que disfrute!</p> 
            </div>
          </div>
        </div>
      </div>