<?php
require_once "connect.php";
 if(strtolower($_SERVER["REQUEST_METHOD"])==="post"){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password != $confirm_password){
        $_SESSION['error']= 'passwords do not match';
        header('location:register.php');
    }
    else{
        $password= password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(fullname, email, password,) VALUES(?,?,?)";
    }
        try {
            $cmd = $DBH ->prepare($sql);
            $cmd -> execute([$fullname, $email, $password]);
            $_SESSION ['succsess'] = "registration successful";
         } catch (PDOException $e) {
             $_SESSION['error'] = "sorry an error occured";
             file_put_contents("pdoerrors.txt", $e->getMessage());
         
         }
     
        }


?>