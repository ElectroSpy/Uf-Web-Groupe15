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
    <link rel="stylesheet" href="Css/CV-bruno.css">
    <title>SuperCv.Com/Bruno Dehon</title>
</head>
    <body>
        <main>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="bruno-profil.php">Profil</a>
                    </li>
                </ul>
            </nav>
        <div class="contact">
            <img src="Img/Bruno.jpg" alt="" height= 28%>
            <?php $sql =  'SELECT Prenom, Nom, Metier, Tel, Age, Permis, Linkedin, Github, Mail FROM utilisateur, contact WHERE contact.ID_User=utilisateur.ID_User AND utilisateur.ID_User = 1';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <H2><?php echo $row['0'];?> <?php echo $row['1'];?></H2>
            <h3><?php echo $row['2'];?></h3>
            <p>+33<?php echo $row['3'];?></p>
            <p><?php echo $row['4'];?></p>
            <p>Permis <?php echo $row['5'];?></p>
            <p><a href="<?php echo $row['6'];?>"><i class="fab fa-linkedin"></i></a></p>
            <p><a href="<?php echo $row['7'];?>"><i class="fab fa-github"></i></a></p>
            <p><a href="<?php echo $row['8'];?>"><i class="fas fa-paper-plane"> <?php echo $row['8'];}?></i></a></p>
            <p></p>
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