<?php

include(__DIR__ ."/../../database/connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tipo_cliente = $_POST['tipo_cliente'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE users SET name='$name', lastname='$lastname', tipocliente='$tipo_cliente', username='$username', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: /panel?edit_user=true");
    exit();
}else{
    Header("Location: /panel?edit_user=false");
    exit();
}

?>
