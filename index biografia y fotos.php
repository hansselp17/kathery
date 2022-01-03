<?php
include('login.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: profile.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de inicio de sesión con PHP </title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, 


<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>
<!--header start here-->
<h1>blog</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>Iniciar sesión</h3>
			<form action="#" method="post">
				<input type="text" placeholder="iniciar sesion" required="" name="username" required>
				<input type="password" placeholder="Contraseña" name="password" required>
				<input name="submit" type="submit" value="Ingresar">
			</form>
			<div class="clear"> </div>
				<span><?php echo $error; ?></span>
			</div>
			
			
		</div>
	</div>
</div>
<!--header end here-->
<!--copy rights end here-->
<div class="copy-rights ">		 	  Todos los derechos reservados | 2021		 	
</div>
<!--copyrights start here-->
 
</body>
</html>
<?php
$biography=file_get_contents(["biografia.txt")
$arraybiography=explode("l",$biography,3);
$tittle=$arraybiography[0];
$imagepaht=$arraybiography[1];
$container=$arraybiography[2];

echo"<div id="$biography">¨;
echo"<img scr=¨imagepaht¨class=¨rounded mx-auto d-block width=¨200 ¨ height=¨250¨ style=border¨10px solid lightblue¨)¨;
echo"<h1>$tittle</h1>";
echo"<p>$container</p>";
echo"</div>¨;
?>
<div class=container-fluid">
     <div class="row" id= "footer">
     <div class="col-sm-3"> 

     derecho reservados 2021

     </div>
     

     </body>


     </html >  









