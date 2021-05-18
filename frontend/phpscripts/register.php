<?php

//Als men op de registreer-knop heeft gedrukt
if (isset($_POST['btn-register'])) {

    //Apparte database pagina toevoegen voor variabeles
    require 'db.php';

    //Post van register form opslaan in variabeles
    $email = $_POST['email-register'];
    $password1 = $_POST['password-register-1'];
    $password2 = $_POST['password-register-2'];

    //Debug redenen
    echo  $email . $password1 . $password2;

    //"Error handlers" die kijken of alles correct is.

    //Kijken of alle velden ingevult zijn
    // Dit is eigenlijk redundant door de required fields in de HTML

    if (empty($email) || empty($password1) || empty($password2)) {

        //Als er iets fout is de gebruiker terugsturen met zelfgemaakte GET-request voor informatie
        header("Location: ../index.php?error=emptyfields");
        exit();
    }

    //Kijken of het mailadres "@" en "." bevat (kleine validatie)
    else if (strrpos($email, "@") == false || strrpos($email, ".") == false) {

        //Als er iets fout is de gebruiker terugsturen met zelfgemaakte GET-request voor informatie
        header("Location: ../index.php?error=invalidmail");
        exit();
    }

    // //Kijken of het herhaalde wachtwoord gelijk is aan het wachtwoord
    else if ($password1 != $password2) {
        //Als er iets fout is de gebruiker terugsturen met zelfgemaakte GET-request voor informatie
        header("Location: ../index.php?error=pwdnotequal");
        exit();

        //kijken of er al eenzelfde mail bestaat
    } else {

        $dbArray = mysqli_query($link, "SELECT * FROM users WHERE email = '" . $email . "' ");

        // Als er data in de array zit bestaat er al een user met hetzelfde email
        while ($result = mysqli_fetch_array($dbArray)) {
            header("Location: ../index.php?error=emailexists");
            exit();
            //echo("ik zit in loop");
            //echo(implode(",", $result));
        }
        
        //Inserten in database
        $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

        mysqli_query($link, "INSERT INTO users (email, password)
             VALUES(
            '" . checkInput($email) . "',
            '" . $hashedPassword . "')");

        //Alles correct verlopen
        header("Location: ../index.php?register=succes");
        exit();
    }

    mysqli_close($link);
} else {
    //Als de gebruiker rechtstreeks naar deze pagina kwam
    header("Location: ../index.php");
    exit();
}
