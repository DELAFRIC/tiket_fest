<?php 
$dsn = 'mysql:host=localhost;dbname=tiket_de_la_charite;charset=utf8';
$user = 'root';
$pass = '';

try {

    $cnx = new PDO($dsn, $user, $pass);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie à la base de données : tiket_de_la_charité";
    
} catch (PDOException $e) {
    die('Erreur connexion : ' . $e->getMessage());
}
?>
