<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo app</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="./styles/style.css">


</head>

<body class="bg-light bg-gradient">

    <!-- Navbar -->
    <nav role="navigation" class="navbar navbar-light bg-warning navbar-expand-lg border-dark border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/icon.png" width="30" height="30" class="mx-2 d-inline-block align-center" alt="" />
                TODO applicatie
            </a>
        </div>
    </nav>

    <main class="container">
        <!-- login container -->
        <div class="row py-5 gy-4 justify-content-center">
            <div class="col-10 rounded bg-white  shadow p-4">
                <form action="./phpscripts/login.php" method="POST">
                    <h2 class="mb-3">Login</h2>
                    <div class="mb-3">
                        <label for="email-login" class="form-label">E-mailadres</label>
                        <input required type="email" name="email-login" class="form-control" id="email-login" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password-login" class="form-label">Wachtwoord</label>
                        <input required type="password" class="form-control" name="password-login" id="password-login">
                    </div>
                    <button type="submit" name="btn-login" class="btn btn-success">Login</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>

        <div class="row py-5 gy-4 justify-content-center">
            <div class="col-10 rounded bg-white shadow p-4">
                <form action="./phpscripts/register.php" method="POST">
                    <h2 class="mb-3">Registreer</h2>
                    <div class="mb-3">
                        <label for="email-register" class="form-label">E-mailadres</label>
                        <input required type="email" name="email-register" class="form-control" id="email-register" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Dit emailadres zal nooit gebruikt worden voor reclame.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password-register-1" class="form-label">Wachtwoord</label>
                        <input required type="password" name="password-register-1" class="form-control" id="password-register-1">

                    </div>

                    <div class="mb-3">
                        <label for="password-register-2" class="form-label">Wachtwoord herhalen</label>
                        <input name="password-register-2" required type="password" class="form-control" id="password-register-2">
                    </div>
                    <button type="submit" name="btn-register" class="btn btn-success">Registreer</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>

        </div>



    </main>

    <!-- Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>