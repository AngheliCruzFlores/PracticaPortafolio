<?php
include("controller.php");
$conn = connection();

$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuarios (Nombre,Email,Telefono,Contraseña) VALUES('$nombre','$email','$telefono','$contraseña')";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");}