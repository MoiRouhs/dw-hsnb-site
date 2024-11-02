<?php


include(__DIR__ ."/../../database/connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($name) && !empty($lastname) && !empty($username) && !empty($password) && !empty($email)){
    $sql = "INSERT INTO users_crud_php.users (name, lastname, username, password, email) VALUES('$name','$lastname','$username','$password','$email')";
    $query = mysqli_query($con, $sql);
}
if($query){
    Header("Location: /panel?inser_user=true");
    exit();
}else{
    Header("Location: /panel?inser_user=false");
    exit();
}

?>
