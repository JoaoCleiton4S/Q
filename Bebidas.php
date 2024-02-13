<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Bebidas</title>
</head>
<body>

<h2>Cardápio de Bebidas</h2>

<?php
    $bebidas = array(
      "Refrigerante" => 5.00,
      "Suco Natural" => 6.00,
      "Água Mineral" => 3.00,
     "Cerveja Nacional" => 7.00,
     "Cerveja Importada" => 10.00
);

// Exibindo o cardápio de bebidas
echo "<ul>";
foreach ($bebidas as $bebida => $preco) {
    echo "<li>$bebida - R$ $preco</li>";
}
echo "</ul>";
?>

</body>
</html>
