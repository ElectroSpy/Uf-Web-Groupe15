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
    <link rel="stylesheet" href="Css/CV-marie.css">
    <title>SuperCv.Com/Marie DRAVIGNY</title>
</head>
    <body>
        <main>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="marie-profil.php">Profil</a>
                    </li>
                </ul>
            </nav>
        <div class="contact">
            <img src="Img/Marie.jpg" alt="Marie DRAVIGNY" height= 28%>
            <?php $sql =  'SELECT Prenom, Nom, Metier, Tel, Age, Permis, Linkedin, Github, Mail, No_rue, Nom_rue, CodePostal, Ville FROM utilisateur, contact WHERE contact.ID_User=utilisateur.ID_User AND utilisateur.ID_User = 3';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <H2><?php echo $row['0'];?> <?php echo $row['1'];?></H2>
            <h3><?php echo $row['2'];?></h3>
            <p>+33<?php echo $row['3'];?></p>
            <p><?php echo $row['4'];?> ans</p>
            <p>Permis <?php echo $row['5'];?></p>
            <p><a href="<?php echo $row['6'];?>"><i class="fab fa-linkedin">LinkedIn</i></a>
            <a href="<?php echo $row['7'];?>"><i class="fab fa-github">GitHub</i> </a></p>
            <p><a href="<?php echo $row['8'];?>"><i class="fas fa-paper-plane"><?php echo $row['8'];?></i></a> </p>
            <p><?php echo $row['9'];?> <?php echo $row['10'];?> <br><?php echo $row['11'];?> <?php echo $row['12'];}?> </p>        
        </div>
        <div class="formation">
            <h3>Formation</h3>
            <?php $sql =  'SELECT Date_debut, Nom_ecole, Ville_ecole, Diplome FROM Formation WHERE ID_formation = 3';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?></p>
            <p><?php echo $row['1'];?> <?php echo $row['2'];?></p>
            <p><?php echo $row['3'];}?></p>
            <br>
            <?php $sql =  'SELECT Date_debut, Date_fin, Nom_ecole, Ville_ecole, Diplome FROM Formation WHERE ID_formation = 2';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?>-<?php echo $row['1'];?></p>
            <p><?php echo $row['2'];?> <?php echo $row['3'];?></p>
            <p><?php echo $row['4'];}?></p>
            <br>
            <?php $sql =  'SELECT Date_debut, Date_fin, Nom_ecole, Ville_ecole, Diplome FROM Formation WHERE ID_formation = 1';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?>-<?php echo $row['1'];?></p>
            <p><?php echo $row['2'];?> <?php echo $row['3'];?></p>
            <p><?php echo $row['4'];}?></p>
        </div>
        <div class="exp">
            <h3>Experiences</h3>
            <?php $sql =  'SELECT Date_debut, Entreprise, Poste FROM exp_pro WHERE ID_xp = 3';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?></p>
            <p><?php echo $row['1'];?></p>
            <p><?php echo $row['2'];}?></p>
            <br>
            <?php $sql =  'SELECT Date_debut, Date_fin, Entreprise, Poste FROM exp_pro WHERE ID_xp = 2';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?>-<?php echo $row['1'];?></p>
            <p><?php echo $row['2'];?></p>
            <p><?php echo $row['3'];}?></p>
            <br>
            <?php $sql =  'SELECT Date_debut, Date_fin, Entreprise, Poste FROM exp_pro WHERE ID_xp = 1';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){
            ?>
            <p><?php echo $row['0'];?>-<?php echo $row['1'];?></p>
            <p><?php echo $row['2'];?></p>
            <p><?php echo $row['3'];}?></p>
            
        </div>
        <div class="comp">
            <h3>Competences</h3>
            <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 1';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){?> 
                <p id="s4"><?php echo $row['0'];?> : <br> <?php echo $row['1'];}?> /10</p> <br>
                <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 2';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){?>
                <p id="s5"><?php echo $row['0'];?> : <br> <?php echo $row['1'];}?> /10</p> <br>
                <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 3';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){?>
                <p id="s6"><?php echo $row['0'];?> : <br> <?php echo $row['1'];}?> /10</p> <br>
                <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 4';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){?>
                <p id="s7"><?php echo $row['0'];?> : <br> <?php echo $row['1'];}?> /10</p>
            <br>
        </div>
        </main>
        <footer>

        </footer>
</body>