<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'config/config.php';
?>

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title><?=titre?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=css?>/style.css">
</head>

<body>
  <!-- Navbar -->
   <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" class="navbar-brand" href="acceuil.php"><img src="<?=img?>/logorhumsuga.jpg" class="img-circle"  alt="logo" width="100px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="acceuil.php?page=acceuil">ACCUEIL</a>
                    </li>
                    <li>
                        <a href="produit.php?page=produit">NOS PRODUITS</a>
                    </li>
                    <li>
                        <a href="about.php?page=about"><?=ABOUT?></a>
                    </li>
                    <li>
                        <a href="contact.php?page=contact">CONTACT</a>
                    </li>
                    <li>
                        <a href="connexion.php?page=connexion"><img src="<?=img?>/log-in.png" class="login" width="50px;"></a>
                    </li>   
                </ul>
            </div>
        </div>
    </nav>