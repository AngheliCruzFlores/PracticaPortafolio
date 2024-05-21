<?php

function connection(){
    $host = "localhost";
    $user = "id22193929_admin";
    $pass = "Admin123@";
    
    
    $bd = "id22193929_formulario";
    $connect=mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);
    return $connect;
}