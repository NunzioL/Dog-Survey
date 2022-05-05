<?php
require 'connect.php';
$First_Answer = (int) $_POST["First"];
$Second_Answer = (int) $_POST["Second"];
$Third_Answer = (int) $_POST["Third"];
$sql = "UPDATE answers SET First_Answer=$First_Answer, Second_Answer=$Second_Answer, Third_Answer=$Third_Answer WHERE id=0";
mysqli_query($con,$sql);
?>