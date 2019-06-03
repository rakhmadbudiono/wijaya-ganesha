<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $data['title']; ?>
    </title>
    <link rel="shortcut icon" href="<?= BASEURL; ?>/img/logo.png" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand mr-5" href="<?= BASEURL; ?>/home">
            <img src="<?= BASEURL; ?>/img/logo.png" width="30" height="30" class="d-inline-block align-top mx-2" alt="">
            Wijaya Ganesha
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active mr-4">
                <a class="nav-link" href="<?= BASEURL; ?>/home">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active mr-4">
                <a class="nav-link" href="<?= BASEURL; ?>/articles">Articles</a>
            </li>
            <li class="nav-item active mr-4">
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>