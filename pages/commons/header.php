<?php
include("../../utile/formatage.php");
include("../../utile/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/main.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
</head>
<body>
    <div class='container p-0 mt-2 rounded perso_shadow'>
        <!-- Header du site -->
        <header class='bg-dark text-white rounded-top perso_policeTitre'>
            <div class='row align-items-center m-0'>
                <div class='col-2 p-2 text-center'>
                    <a href='../global/index.php'>
                        <img src='../../sources/images/Autres/monlogo.png' class='rounded-circle img-fluid perso_logoSize' alt='logo du site' />
                    </a>
                </div>
                <div class='col-6 col-lg-8 m-0 p-0'>
                    <?php include("menu.php") ?>
                </div>
                <div class='col-4 col-lg-2 text-right pt-1 pr-4 perso_ColorRouge'>
                    ADOPT <br /> Levallois (92300)
                </div>
            </div>
        </header>
        <!-- Contenu du site -->
        <div class='border p-1 perso_minCorpSize px-5'>