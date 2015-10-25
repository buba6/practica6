<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
echo "Nombre:".$_SESSION['nombre'];
echo "<br><br>";
echo "apellido paterno:".$_SESSION['ap'];
echo "<br><br>";
echo "apellido materno:".$_SESSION['am'];
?>
<br/><br/>
<?php 
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
?></body>
</html>