<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta - Phelps</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap-social.css">
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
	</script>
</head>

<body style="background-image: url('<?php echo base_url();?>images/CANCHA.png'); background-attachment: fixed; background-position: center;">
  <header>
    <div class="container">
    	<h1>Gimnasio Polideportivo Recoleta: Phelps</h1>
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
      <div class="main row">
      <div class="text-center col-md-12">
        <h2>Phelps</h2>
        <div class="col-md-offset-3 col-md-6" align="left">
        <p>

          Recinto dedicado a la practica de la Natacion enfocado para toda la comuna de Recoleta, con actividades para todos nuestras habitantes.
                <h4>Encargo: Pedro Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee de piscinas olimpicas de 25 x 50 mts </li>
                    <li>Capacidad 3.456 personas sentadas </li>
                    <li>2 camarines para los asistentes</li>
                    <li>Temperatura del agua 25-28 Grados Celsius </li>
                </ul>

                <h4>Informaciones: +56 9 3487 7643</h4>

        </p>

        </div>
      </div>
       <!--Imagen-->
       <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <img src="<?php echo base_url();?>images/natacion.jpg">
      </div>
      <!-- Canchas -->

      <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p><br>
        <h2>Piscina</h2>
          <h3>Horario</h3>
          Lunes-Martes: 10:00-16:30hrs<br>
          Miercoles-Viernes: 11:00-19:30hrs<br>
          Sabado: 10:30-20:00hrs
        </p>
      </div>

      </div>



      <!--Fin Contenido-->
      <!--Footer-->
      <div class="footer text-center col-lg-12">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>
  </div>

<div id="reservas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Reservas</h4>
        </div>
        <div class="modal-body">
          <div class="row col-md-12">
            <form>
              <div class="form-group">
                <label>*Nombre Completo</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">*Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
            </form>
          </div>
          <div class="row col-md-12">
            <label>*Recinto</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>Condor Rojas Norte</option>
               <option>El Phelps</option>
               <option>Massu</option>
               <option>NBA</option>
            </select><br>
          </div>
          <div class="row col-md-4">
            <label>*Dia</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>Lunes</option>
               <option>Martes</option>
               <option>Miercoles</option>
               <option>Jueves</option>
               <option>Viernes</option>
               <option>Sabado</option>
            </select><br>
          </div>
          <div class="row col-md-offset-1 col-md-4">
            <label>*Hora</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>10:00hrs</option>
               <option>11:00hrs</option>
               <option>12:00hrs</option>
               <option>13:00hrs</option>
               <option>14:00hrs</option>
               <option>15:00hrs</option>
               <option>16:00hrs</option>
               <option>17:00hrs</option>
               <option>18:00hrs</option>
               <option>19:00hrs</option>
            </select><br>
          </div>
        </div>
        <div class="modal-footer">
        <div class="col-sm-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
