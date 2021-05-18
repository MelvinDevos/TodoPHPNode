<?php
if (isset($_POST['btn-login'])) {

    require 'db.php';

    $email = checkInput($_POST['email-login']);
    $password = $_POST['password-login'];

    $dbArray = mysqli_query($link, "SELECT * FROM users WHERE email='$email'");

    while ($result = mysqli_fetch_array($dbArray)) {
        if (password_verify($password, $result['password'])) {
            //Correct

            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];

            header("Location: ../pages/todos.php?login=succes");
            exit();
        } else {
            //Als de gebruiker verkeerd ww ingeeft
            header("Location: ../index.php?error=pwdinvalid");
            exit();
        }
    }

    //Als de er geen dp match is
    header("Location: ../index.php?error=usernotfound");
    exit();
} else {
    //Als de gebruiker rechtstreeks naar deze pagina kwam
    header("Location: ../index.php");
    exit();
}
