<?php

require_once("config.php");

if(isset($_POST['register'])){

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
    $tanggallahir = $_POST['tanggallahir'];

    $sql = "INSERT INTO users (name, email, password, jenis_kelamin, tanggallahir)
            VALUES (:name, :email, :password, :jenis_kelamin, :tanggallahir)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":name" => $name,
        ":password" => $password,
        ":email" => $email,
        ":jenis_kelamin" => $jenis_kelamin,
        ":tanggallahir" => $tanggallahir
    );

    $saved = $stmt->execute($params);
    
    if($saved)
    header("Location: index.php");
}
?>