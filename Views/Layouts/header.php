<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <title>Inicio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg    navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Control de Stock</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?menu=stock">Consultar Stock</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="?menu=logout">Salir</a>
                        </li>
                    <?php
                    } else {

                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?menu=login">Login</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <!-- <a href="?menu=stock">Consultar Stock</a> -->

    </div>