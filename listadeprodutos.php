<?php 

$produto1 = [
        'Nome' => 'Camiseta',
        'Preco' => 25.90,
];

$produto2 = [
        'Nome' => 'Calça',
        'Preco' => 80.00
 
];

$produto3 = [
        'Nome' => 'Tenis',
        'Preco' => 130.60,
];

$todosProdutos = [$produto1, $produto2, $produto3];

for ($i = 0; $i < count($todosProdutos); $i++) {
    echo 'Produto: ' . $todosProdutos[$i]['Nome'] .' | Preço: '.$todosProdutos[$i]['Preco']. PHP_EOL;
}