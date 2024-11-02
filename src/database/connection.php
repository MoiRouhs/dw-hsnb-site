<?php


function connection(){
    $host = 'localhost';
    $user = 'games';
    $pass = 'Games';
    $bd = 'users_crud_php';
    
    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
