<!-- Botonera -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav"><li><a class="navbar-brand" href="index.php">Inicio</a></li></ul>
          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"   aria-expanded="false">Recintos<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/condor">Condor Rojas Norte</a></li>
            <li><a href="<?php echo base_url();?>index.php/phelps">El Phelps</a></li>
            <li><a href="<?php echo base_url();?>index.php/massu">Massu</a></li>
            <li><a href="<?php echo base_url();?>index.php/nba">NBA</a></li>

            </ul>
            <li><a href="<?php echo base_url();?>index.php/contacto">Contacto</a></li>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->userdata('logueado')){?>
                  <a class="btn btn-default navbar-btn" href="<?php echo base_url();?>index.php/reserva">Reservas</a>
                  <a href="<?php echo base_url();?>index.php/logout">Cerrar Sesion</a>
                  <?php }
                      else {
                   ?>
                   <a class="btn btn-default navbar-btn" href="<?php echo base_url();?>index.php/login">Iniciar sesion</a>    
              <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--Fin Botonera-->