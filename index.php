<?php 
include ("librerias/class_base_sql.php");

if(isset($_POST['iniciar'])){

	$Objeto=new Basedatos();
	$Objeto->conectar() or die("Error de conexi�n");


	$password=md5($_POST["password"]);
	$login=$_POST["user"];
	$sql="SELECT * FROM usuarios_intranet WHERE login='".$login."' ";
	$Resultado=$Objeto->sentencia($sql) or die("Error en la operacion");
	if($Objeto->numfilas($Resultado)>0){
		$sql="SELECT * FROM usuarios_intranet WHERE login='".$login."' AND password='".$password."'";
		$Resultado=$Objeto->sentencia($sql) or die("Error en la operacion");
		if($Objeto->numfilas($Resultado)>0){
			$Filas=$Objeto->filas($Resultado);
			$usuario=$Filas['login'];
				echo '<script language="javascript1.2">alert("'.$usuario.'");</script>';
				echo "<meta http-equiv='refresh' content='0;URL=validarformulario.php'>";
		}else{
			echo '<script language="javascript1.2">alert("Error: Contrase�a incorrecta.");</script>';
			echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
		}
	}else{
		echo '<script language="javascript1.2">alert("Error: El Usuario no existe.");</script>';
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";	
	}
	
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Prueba Bootstrap Hero</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		height:100%;
      }
	  #footer{
	  	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size: 14px;
	  	height:45px;
		
		background-color: #00CCFF;
		background-image: -moz-linear-gradient(top, #00CCFF, #0066FF);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#00CCFF), to(#0066FF));
		background-image: -webkit-linear-gradient(top, #00CCFF, #0066FF);
		background-image: -o-linear-gradient(top, #00CCFF, #0033FF);
		background-image: linear-gradient(to bottom, #00CCFF, #0033FF);
		background-repeat: repeat-x;
		border-color: #0033FF;


  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);

	  }
	  #footer .container{
	  	
		color:#FFFFFF;
	  }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

</head>


<body>
	 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Practica JRPV</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right" id="form1" target="_self" method="post">
              <input class="span2" type="text" placeholder="Usuario" id="user" name='user'>
              <input class="span2" type="password" placeholder="Password" id="password" name="password">
              <button type="submit" id="iniciar" name="iniciar" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      

    </div> <!-- /container -->
	<div id="footer">
      <div class="container" style="padding-top: 12px;">
        <p> Footer Example - Todos los derechos reservados </p>
      </div>
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
</body>
</html>
