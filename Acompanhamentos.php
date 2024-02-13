<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Acompanhamentos</title>
</head>
<body>

<h2>Cardápio de Acompanhamentos</h2>

<?php
// Definindo o cardápio de acompanhamentos como um array associativo
$acompanhamentos = array(
    "Arroz Branco" => 5.00,
    "Feijão Preto" => 4.00,
    "Batata Frita" => 8.00,
    "Salada Mista" => 7.00,
    "Legumes Grelhados" => 6.00
);

// Exibindo o cardápio de acompanhamentos
echo "<ul>";
foreach ($acompanhamentos as $acompanhamento => $preco) {
    echo "<li>$acompanhamento - R$ $preco</li>";
}
echo "</ul>";
?>

</body>
</html>
