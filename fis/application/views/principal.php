<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap-social.css">
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
	</script>
  <script type="text/javascript">
    $('#datetimepicker').data("DateTimePicker").FUNCTION()
  </script>
</head>

<body style="background-image: url('<?php echo base_url();?>images/CANCHA.png'); background-attachment: fixed; background-position: center;">
  <header>
    <div class="container">
    	<h1>Gimnasio Polideportivo Recoleta</h1>
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
      <!--Slider-->
      <div class="main">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div align="center" class="item active">
              <img src="<?php echo base_url();?>images/banner1.jpg" alt="Responsive image">
              <div class="carousel-caption">
                <h1>Condor Rojas</h1>
              </div>
            </div>
            <div align="center" class="item">
              <img src="<?php echo base_url();?>images/banner2.jpg" alt="Responsive image">
              <div class="carousel-caption">
                <h1>NBA</h1>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!--Fin Slider-->
      <div class="col-md-offset-1 col-md-10 text-left">
        <h1>Gimnasio Polideportivo Recoleta</h1>
        <p>
        El Gimnasio Polideportivo de la comuna de Recoleta fundado en el año 3000 AC. por el Alcalde Perico de los Palotes, cuenta con recintos  para distintas disciplinas deportivas completamente equipado. Ubicado en la Avenida Null 777.
        </p>
        <p>
        Este gimnasio posee 4 recintos:
        <ul>
         <li>Condor Rojas: Cuenta con 2 canchas techadas de futbol-sala </li>
         <li>Piscina Olimpica Phelps</li>
         <li>Massu: Con un conjunto de 4 canchas de Tenis </li>
         <li>NBA: Equipado con 2 canchas de Baloncesto y 2 de Volleyball</li>
        </ul>
        </p>
      </div>
      <div class="main row">
        <div class="main">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <img src="<?php echo base_url();?>images/condor.jpg">
              <div class="caption">
                <h3>Condor Rojas Norte</h3>
                <h4>Encargo: Juan Soto</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li> Posee canchas de superficie sintetica con dimensiones de 20 x 40 mts </li>
                    <li>Capacidad 23.456 personas sentadas </li>
                    <li>6 camarines para los equipos </li>
                    <li>4 camarines para los arbitros</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <img src="<?php echo base_url();?>images/natacion.jpg">
              <div class="caption">
                <h3>El Phelps</h3>
                <h4>Encargo: Pedro Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee piscinas olimpicas de 25 x 50 mts </li>
                    <li>Capacidad 3.456 personas sentadas </li>
                    <li>2 camarines para los asistentes</li>
                    <li>Temperatura del agua 25-28 Grados Celsius </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <!--<img src="images/linux.jpg" alt="..."> -->
              <img src="<?php echo base_url();?>images/tenis4.jpg">
              <div class="caption">
                <h3>Massu</h3>
                <h4>Encargo: Luis Gonzales</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee 4 canchas de superficie sintetica con dimensiones de 23 x 8 mts </li>
                    <li>Cada una con una capacidad 456 personas sentadas </li>
                    <li>2 camarines por cancha </li>
                  </ul>


              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <!--<img src="images/linux.jpg" alt="..."> -->
              <img src="<?php echo base_url();?>images/volley.jpg">
              <div class="caption">
                <h3>NBA</h3>
                <h4>Encargo: José Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li> Posee dos canchas baloncesto con dimensiones de 15 x 28 mts </li>
                    <li> Posee dos canchas voleyball con dimensiones de 18 x 9 mts </li>
                    <li> Capacidad 4.678 personas sentadas </li>
                    <li>8 camarines para los equipos </li>
                    <li>4 camarines para los arbitros</li>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer-->
      <div class="footer text-center">
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

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
