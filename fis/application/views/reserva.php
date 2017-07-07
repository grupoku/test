<?php
  if(!$this->session->userdata('logueado')){
    redirect('');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap-social.css">


</head>

<body style="background-image: url('<?php echo base_url();?>images/CANCHA.png'); background-attachment: fixed; background-position: center;">
  <header>
    <div class="container">
    	<h1>Header</h1>
    </div>
  </header>
  <div class="container">
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
            <ul class="nav navbar-nav"><li><a class="navbar-brand" href="<?php echo base_url();?>index.php">Inicio</a></li></ul>
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

      <!--Contenido-->
      <div class="col-md-12 text-center bg-primary"><h4>INFORMACION DE CONTACTO</h4></div>
      <div class="col-md-12 bg-danger text-center">
        
          <p>
          <b>Nombre: </b><?php echo $this->session->userdata('nombre');?><br>
          <b>Telefono: </b><?php echo $this->session->userdata('telefono');?></p>
      </div>
      <div class="col-md-12 text-center bg-primary"><h4>Horarios reservados</h4></div>
      <div class="col-md-12 bg-danger">
           <table class="table col-md-6 ">
    <?php
    foreach ($this->session->horarios_reservados as $row) {
      ?>
     
        <tr>
          <td><?php echo $row['nombre_gym'];?></td>
          <td><?php echo $row['nombre_cancha'];?></td>
          <td><?php echo $row['fecha'];?></td>
          <td><?php echo $row['hora'];?></td>
          <td><a href="<?php echo base_url()."index.php/success?code=false&id_horario=".$row['id_horario'];?>">Cancelar reserva</a></td>
        </tr>
        <?php
    }
    ?>
      </table>

      <?php 
      if ( !$this->session->horarios_reservados ) {
        echo "No hay horarios reservados.";
      }
      ?>

      </div>
      <div class="col-md-12 text-center bg-primary"><h4>Horarios disponibles</h4></div>
      <div class="col-md-12 bg-danger ">

 <table class="table col-md-6 ">
    <?php
    foreach ($this->session->horarios_disponibles as $row) {
      ?>
     
        <tr>
          <td><?php echo $row['nombre_gym'];?></td>
          <td><?php echo $row['nombre_cancha'];?></td>
          <td><?php echo $row['fecha'];?></td>
          <td><?php echo $row['hora'];?></td>
          <td><?php echo $row['precio'];?></td>
          <td><a href="<?php echo base_url()."index.php/success?code=true&id_horario=".$row['id_horario'];?>">Reservar</a></td>
        </tr>
        <?php
    }
    ?>
      </table>
      <div class="col-md-12 text-center">
      <?php 
      if ( !$this->session->horarios_disponibles ) {
        echo "No hay horarios disponibles.";
      }
      ?>
      </div>
      </div>
      <!--Footer-->
      <div class="footer text-center">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>
</div>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>








