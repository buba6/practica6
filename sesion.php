<?php


$name=$_POST["name"];
$pass=$_POST["pass"];

if($name=="root" && $pass=="1234"){
	
//echo "bienvenido".$name;

	
	
	
	
}
else if($name==!"" && $pass==!"" )

{
	header("location:error.php");
	
	//echo '<br/><a href="newfile.php">regresar<a/>';
	echo "datos incorrectos";
	
}
else if($name=="" && $pass=="" )

{
	header("location:error.php");

	//echo '<br/><a href="newfile.php">regresar<a/>';
	echo "datos incorrectos";

}
else if($name==!"" && $pass=="" )

{
	header("location:error.php");

	//echo '<br/><a href="newfile.php">regresar<a/>';
	echo "datos incorrectos";

}
else if($name=="" && $pass==!"" )

{
	header("location:error.php");

	//echo '<br/><a href="newfile.php">regresar<a/>';
	echo "datos incorrectos";

}
?>

	<p align="right"><a href="logout.php"> cerrar sesion</a>;
<br/>
<br/>
<p align="right"><a href="ver.php">ver datos<a/>;
<br/>
<br/>

<form action="registro.php" method="post">
<p align="left">

<label>nombre<label/><br/><br/>
<input type="text" name="nombre" >
<br/>
<br/>
<label>apellido paterno<label/><br/><br/>
<input type="text" name="ap" >
<br/>
<br/>
<label>apellido materno<label/><br/><br/>
<input type="text" name="am" >
<br/>
<br/>

<input name="enviar"  type="submit" value="guardar">
 
<form/>




