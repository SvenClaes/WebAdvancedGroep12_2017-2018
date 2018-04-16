<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Advanced</title>

    <meta charset="utf-8">
    <meta name="description" content="Web Advanced PE">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <style>
        header {
            padding: 154px 0 100px;
        }

        @media (min-width: 992px) {
            header {
                padding: 156px 0 100px;
            }
        }

        section {
            padding: 150px 0;
        }

        section.footer {
            text-align: center;
            color: white;
            padding: 1% 0;
        }

        section.team img {
            width: 100px;
            margin: 5% 0;
        }

        input {
            margin: 2% 0;
        }

        .codeigniter {
            background-color: #ee4323;
            color: white;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('index.php/pages/view/home') ?>">Web Advanced</a>
        <div id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/pages/view/create') ?>">Nieuws</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/pages/view/locaties') ?>">Locaties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/pages/view/login') ?>">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
