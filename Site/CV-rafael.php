<?php
    $pdo = new PDO("mysql:host=localhost:3306;dbname=UF_Web", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/CV-rafael.css">
    <title>SuperCv.Com/Rafael METAYER</title>
</head>
    <body>
        <main>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="rafael-profil.php">Profil</a>
                    </li>
                </ul>
            </nav>
        <div class="contact">
            <img src="Img/Rafael.jpg" alt="" height= 28%>
            <H2>Nom Prenom</H2>
            <h3>Poste</h3>
            <p>Numero de tel</p>
            <p>age</p>
            <p>permis</p>
            <p><a href="">linked in</a></p>
            <p><a href="">github</a></p>
            <p>Adresse </p>
        </div>
        <div class="formation">
            <h3>formation</h3>
            <p>DATE:ecole</p>
            <p>nom de la formation</p>
            <p>description</p>
            <br>
            <p>DATE:ecole</p>
            <p>nom de la formation</p>
            <p>description</p>
            <br>
            <p>DATE:ecole</p>
            <p>nom de la formation</p>
            <p>description</p>
        </div>
        <div class="exp">
            <h3>Experiences</h3>
            <p>DATE:Entreprise</p>
            <p>nom du poste</p>
            <p>description</p>
            <br>
            <p>DATE:Entreprise</p>
            <p>nom du poste</p>
            <p>description</p>
            <br>
            <p>DATE:Entreprise</p>
            <p>nom du poste</p>
            <p>description</p>
        </div>
        <div class="comp">
            <h3>Competences</h3>
            <p>Comp</p>
            <p>note</p>
            <br>
            <p>Comp</p>
            <p>note</p>
            <br>
            <p>Comp</p>
            <p>note</p>
            <br>
            <p>Comp</p>
            <p>note</p>
            <br>
        </div>
        </main>
        <footer>

        </footer>
</body>