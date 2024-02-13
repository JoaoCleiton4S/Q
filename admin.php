<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração do Cardápio - Restaurante</title>
</head>
<body>

<h2>Administração do Cardápio</h2>
<p>Aqui você pode alterar o cardápio do restaurante.</p>

<!-- Coloque aqui os formulários e funcionalidades para alteração do cardápio -->

<br>
<a href="logout.php">Sair</a>

</body>
</html>
