<?php


include(__DIR__ ."/../../database/connection.php");
$con = connection();

$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($password) && !empty($email)){
    try {
    $sql = "SELECT  * FROM  users_crud_php.users WHERE email = '$email' AND password = '$password';";
    $query = mysqli_query($con, $sql);

    }catch (Exception $e) {
        Header("Location: /?login_user=false");
        exit();
    }
}
if($query){
    $cliente = mysqli_fetch_array($query);
    $data = [
      "id" => $cliente['id'],
      "name" => $cliente['name'],
      "tipo-cliente" => $cliente['tipocliente']
    ];
    
    // Convertir el array a JSON y establecer la cookie
    setcookie("cliente_data", json_encode($data), time() + (86400 * 30));
    Header("Location: /?login_user=true");
    exit();
}else{
    Header("Location: /?login_user=false");
    exit();
}

?>
