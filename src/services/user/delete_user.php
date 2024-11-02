<?php

include(__DIR__ ."/../../database/connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: /panel?delete_user=true");
    exit();
}else{
    Header("Location: /panel?delete_user=false");
    exit();
}

?>
