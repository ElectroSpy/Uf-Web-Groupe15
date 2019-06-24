<?php
function getPdo() {
    $pdo = new PDO("mysql:host=localhost;dbname=uf_web", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
?>
