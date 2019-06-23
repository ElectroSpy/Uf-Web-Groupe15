<?php
    $pdo = new PDO("mysql:host=localhost:3306;dbname=UF_Web", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Styler.css">
</head>
<body>
    
    <nav>
        <ul>
            <li class="Connect"><a href="">Connexion</a>
                <div class="login">
                    <form action="index.html" method="POST">
                        <input type="email" name="email" placeholder="Adresse mail">
                        <input type="password" name="password" placeholder="Mot de passe">
                        <button type="submit" name="submit">Se connecter</button>
                    </form>
                </div>
            </li>
            <li class="titre">
            Nos profils :
            </li>
        </ul>
    </nav>
    <Main>
        <div class="profils">
            <div class="profil">
                <a href="bruno-profil.php">
                    <img src="Img/Bruno.jpg" alt="Bruno DEHON" width="100%" height = "100%">
                    <?php $sql =  'SELECT Prenom, Nom, Metier FROM utilisateur WHERE utilisateur.ID_User = 1';
                        $requete = $pdo->query($sql);
                        while($row=$requete->fetch()){?>
                    <div class="txt">
                        <p class="Nom"><?php echo $row['0'];?> <?php echo $row['1'];?></p>
                        <br>
                        <p class="Metier"><?php echo $row['2'];}?></p>
                    </div>
                </a>
            </div>
            <div class="profil">
                <a href="rafael-profil.php">
                    <img src="Img/Rafael.jpg" alt="Rafael METAYER" width="100%" height = "100%" >
                    <?php $sql =  'SELECT Prenom, Nom, Metier FROM utilisateur WHERE utilisateur.ID_User = 2';
                        $requete = $pdo->query($sql);
                        while($row=$requete->fetch()){?>
                    <div class="txt">
                            <p class="Nom"><?php echo $row['0'];?> <?php echo $row['1'];?></p>
                        <br> <br>
                        <p class="Metier"><?php echo $row['2'];}?></p>
                    </div>
                </a>
            </div>
            <div class="profil">
                <a href="marie-profil.php">
                    <img src="Img/Marie.jpg" alt="Marie Darvigny" width="100%" height = "100%">
                    <?php $sql =  'SELECT Prenom, Nom, Metier FROM utilisateur WHERE utilisateur.ID_User = 3';
                        $requete = $pdo->query($sql);
                        while($row=$requete->fetch()){?>
                    <div class="txt">
                        <p class="Nom"><?php echo $row['0'];?> <?php echo $row['1'];?></p>
                        <br> <br>
                        <p class="Metier"><?php echo $row['2'];}?></p>
                    </div>
                </a>
            </div>
        </div>
    </Main>
    <footer>
        <ul>
        </ul>
    </footer>
</body>
</html>

