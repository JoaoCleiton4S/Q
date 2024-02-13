<?php
session_start();

// Inicializar o carrinho
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Adicionar item ao carrinho
if (isset($_GET['acao']) && $_GET['acao'] == 'add' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$id] = array(
            'quantidade' => 1,
            // Você pode adicionar mais informações do produto aqui, como nome, preço, etc.
        );
    }
    header('Location: carrinho.php');
    exit;
}

// Remover item do carrinho
if (isset($_GET['acao']) && $_GET['acao'] == 'remover' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
    header('Location: carrinho.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>

<h2>Carrinho de Compras</h2>

<!-- Exibir itens do carrinho -->
<ul>
    <?php foreach ($_SESSION['carrinho'] as $id => $item): ?>
        <li>Produto <?php echo $id; ?> - Quantidade: <?php echo $item['quantidade']; ?> <a href="carrinho.php?acao=remover&id=<?php echo $id; ?>">Remover do Carrinho</a></li>
    <?php endforeach; ?>
</ul>

<!-- Link para voltar à página de produtos -->
<p><a href="index.php">Continuar Comprando</a></p>

</body>
</html>
