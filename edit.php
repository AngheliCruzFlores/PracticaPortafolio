<?php
include('controller.php');
$conn = connection();

$id = $_POST['id'];
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];

$sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono= '$telefono', contraseña='$contraseña' WHERE Id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}