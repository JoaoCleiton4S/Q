<?php
session_start();

// Verifica se o usuário e senha estão corretos (simulação)
$username = "admin";
$password = "senha123";

if ($_POST['username'] === $username && $_POST['password'] === $password) {
    $_SESSION['logged_in'] = true;
    header("Location: admin.php");
    exit;
} else {
    echo "Usuário ou senha incorretos. <a href='index.php'>Tente novamente</a>.";
}
?>
