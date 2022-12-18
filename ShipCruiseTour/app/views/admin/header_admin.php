<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT.'/css/style.css' ?>">

    <title><?php echo SITENAME ?></title>
</head>
<body>

<div  class="container">
    <nav  class="navbar navbar-expand-lg navbar-light ">
    <img class="navbar-brand" src="<?= URLROOT.'/img/logo.png'?>" width="100" height="100"></img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item"></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/admin' ?>">Statistique <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/croisiere'?>">Croisière</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/port'?>">Port</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/navire'?>">Navire</a>
            </li>
            <li>
                <div class="btn-group" id="logout">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="<?= URLROOT.'/pages/logout'?>">Log out</a>
                    </div>
                </div>
            </li>
        </ul>
        </form>
    </div>
    </nav>
</div>
