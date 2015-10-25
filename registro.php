<?php
session_start();
$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['ap']=$_POST['ap'];
$_SESSION['am']=$_POST['am'];
echo "<br/><br/><input type='button' value='Atras' onClick='history.go(-1);'>";
?>
<?php 



?>