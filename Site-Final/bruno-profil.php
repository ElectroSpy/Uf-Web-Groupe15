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
    <link rel="stylesheet" href="Css/Style-bruno.css">
    <title>SuperCv.Com/Bruno DEHON</title>
</head>
<body>
    <main>
        <div id="txt">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="CV-bruno.php">Cv</a></li>
            </ul>
            <?php $sql =  'SELECT Prenom, Nom, Metier, Linkedin, Github, Mail FROM utilisateur, contact WHERE contact.ID_User=utilisateur.ID_User AND utilisateur.ID_User = 1';
                $requete = $pdo->query($sql);
                while($row=$requete->fetch()){?>
                <h1 class="f"><?php echo $row['0'];?><br></h1>
                <h1><?php echo $row['1'];?></h1>
                <h3><?php echo $row['2'];?></h3>
            <ul class="bot">
                <li> <a href="<?php echo $row['3'];?>"><i class="fab fa-linkedin"></i></a> </li>
                <li> <a href="<?php echo $row['4'];?>"><i class="fab fa-github"></i></a> </li>
                <li> <a href="<?php echo $row['5'];}?>"><i class="fas fa-paper-plane"></i></a> </li>
            </ul>
        </div>
        <div id="img">
            
        </div>
        <div id="info">
            <h1>Compétences</h1>
            <div class="containerskills">
                <div id="l1" class="skills">
                    <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 5';
                    $requete = $pdo->query($sql);
                    while($row=$requete->fetch()){?> 
                    <h2 id="s4"><?php echo $row['0'];?> : <?php echo $row['1'];}?> /10</h2> <br>
                    <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 6';
                    $requete = $pdo->query($sql);
                    while($row=$requete->fetch()){?>
                    <h2 id="s5"><?php echo $row['0'];?> : <?php echo $row['1'];}?> /10</h2> <br>
                    <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 7';
                    $requete = $pdo->query($sql);
                    while($row=$requete->fetch()){?>
                    <h2 id="s6"><?php echo $row['0'];?> : <?php echo $row['1'];}?> /10</h2> <br>
                    <?php $sql =  'SELECT Nom_capacite, Note FROM capacite WHERE ID_capacite = 8';
                    $requete = $pdo->query($sql);
                    while($row=$requete->fetch()){?>
                    <h2 id="s7"><?php echo $row['0'];?> : <?php echo $row['1'];}?> /10</h2>
                </div>

            </div>

            </div>
        
        </div>
    </main>
</body>
</html>
