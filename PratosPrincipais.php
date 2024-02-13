<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Pratos Principais</title>
</head>
<body>

<h2>Cardápio de Pratos Principais</h2>
<?php
$pratos_principais = array(
    "Frango à Parmegiana" => 25.00,
    "Spaghetti Carbonara" => 20.00,
    "Feijoada Completa" => 30.00,
    "Risoto de Funghi" => 22.00,
    "Bife à Milanesa" => 28.00,
    "Salmão Grelhado" => 35.00,
    "Moqueca de Peixe" => 32.00,
    "Tortellini ao Molho Pesto" => 26.00,
    "Filé Mignon ao Molho Madeira" => 40.00,
    "Lasanha à Bolonhesa" => 24.00
);

// Exibindo o cardápio de pratos principais
echo "<ul>";
foreach ($pratos_principais as $prato => $preco) {
    echo "<li>$prato - R$ $preco</li>";
}
echo "</ul>";
?>