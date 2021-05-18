<?php
session_start();
if (!isset($_SESSION['id'])) {
    //Als de gebruiker rechtstreeks naar deze pagina kwam
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
    <title>Todo app</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- JQUERRY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="./styles/style.css"> -->


</head>

<body class="bg-light bg-gradient">

    <p style="display: none;" id="session-id"><?php echo $_SESSION["id"] ?></p>

    <!-- Navbar -->
    <nav role="navigation" class="navbar navbar-light bg-warning navbar-expand-lg border-dark border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/icon.png" width="30" height="30" class="mx-2 d-inline-block align-center" alt="" />
                TODO applicatie
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav container-fluid mb-3 mb-lg-0">
                    <li class="nav-item ms-lg-auto my-3 mt-lg-0 me-lg-2 mb-lg-0">
                        <a href="../phpscripts/logout.php">
                            <button class="btn btn-danger border border-dark" type="submit">Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <main class="container">
        <!-- add todo container -->
        <div class="row pt-5 gy-4 justify-content-center">
            <div class="col-md-10 rounded bg-white  shadow p-4">
                <form id="form-add" class="container ">
                    <div class="row">
                        <input placeholder="TODO toevoegen:" class="col-10 col-md-11 px-4" required type="text" name="todo-title" class="form-control" id="todo-title">
                        <button class="col-1 btn-success d-flex align-items-center justify-content-center" type="submit" class="btn btn-success">
                            <span class="material-icons">add</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row py-5 gy-4 justify-content-center">
            <div class="col-md-10 rounded bg-white  shadow p-4">
                <div id="todo-container" class="row container-fluid gy-4">


                    <!-- <div class="card mx-auto col-lg-5">
                        <div class="card-body d-flex align-items-center">
                            <h5 class="card-title m-0">Take trash outside</h5>
                            <button class="btn ms-auto d-flex align-items-center justify-content-center border border-success">
                                <span class="material-icons text-success">done_outline</span>
                            </button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">18/05/2021 01:49</small>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>




    </main>

    <!-- Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Eigen javascript -->
    <script src="../scipts/todos.js"></script>
</body>

</html>