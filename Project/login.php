<?php

require_once("config.php");

if(isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

    // login role users
    if($role='users'){
    $sql = "SELECT * FROM users WHERE email=:email";
    $stmt = $db->prepare($sql);

    $params = array(
        ":email" => $username
    );

    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: home.php");
            }
        }
    }

    //login role dokter
    if($role='dokter'){
        $sql = "SELECT * FROM dokter WHERE email=:email";
        $stmt = $db->prepare($sql);
    
        $params = array(
            ":email" => $username
        );
    
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //bagian untuk encrypt password yang diinput manual dalam database
        if ($password == $user["password"]) {
            session_start();
            $_SESSION["user"] = $user;
            header("Location: home.php");   
            $password_hash = password_hash($user["password"], PASSWORD_DEFAULT);
            $sql = "UPDATE dokter SET password =:password WHERE email=:email";
            $stmt = $db->prepare($sql);
            $params = array(
                ":email" => $username,
                ":password" => $password_hash,
            );
            $stmt->execute($params);        
        } elseif(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: home.php");
        } // else password salah 
    }
}
?>