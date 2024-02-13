<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Sobremesas</title>
</head>
<body>

<h2>Cardápio de Sobremesas</h2>

<?php
// Definindo o cardápio de sobremesas como um array associativo
$sobremesas = array(
    "Pudim de Leite" => 8.00,
    "Mousse de Chocolate" => 10.00,
    "Torta de Limão" => 12.00,
    "Sorvete de Creme" => 6.00,
    "Brigadeiro" => 1.50,
    "Cheesecake de Morango" => 14.00,
    "Tiramisù" => 15.00,
    "Pavê de Chocolate" => 11.00,
    "Banana Split" => 9.00,
    "Creme Brûlée" => 13.00
);

// Exibindo o cardápio de sobremesas
echo "<ul>";
foreach ($sobremesas as $sobremesa => $preco) {
    echo "<li>$sobremesa - R$ $preco</li>";
}
echo "</ul>";
?>

</body>
</html>
