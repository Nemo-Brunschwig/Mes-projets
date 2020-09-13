<?php
$chal = $_GET['chal'];
switch($chal){
    case '2':
        include_once 'passerelles/Pdo_connexion.php';
        include_once 'passerelles/Pdo_chal2.php';
        $check = Pdo_chal2::connexion($_POST['login'], $_POST['password']);
        if (isset($check[0])){
            echo "<div class=\"container mt-5\"><div class=\"alert alert-success\" role=\"alert\">Bien joué! voici le flag : 0s1r1s</div></div>";
        } else {
            include 'challenges/chal2.php';
            echo "<div class='container mt-5'><div class=\"alert alert-danger\" role=\"alert\">raté 😋</div></div>";
        }
        break;
}
?>