<?php

//------- Lista produtos
$estoque = array (
    'produto1' => array (
        'Nome' => 'Camiseta',
        'Preco' => 25.90,
        'Estoque' => 5097,
    ),
    
    'produto2' => array (
        'Nome' => 'Calça',
        'Preco' => 80.00,
        'Estoque' => 8981,
    ),
    
    'produto3' => array (
        'Nome' => 'Tenis',
        'Preco' => 130.60,
        'Estoque' => 6498,
    ),
);


//------- Função para encontrar o produto mais caro e o mais barato
function encontraProdutos($estoque) {
    $produtoCaro = null;
    $produtoBarato = null;

    foreach ($estoque as $produto) {
        if ($produtoCaro === null || $produto['Preco'] > $produtoCaro['Preco']) {
            $produtoCaro = $produto;
        }
        
        if ($produtoBarato === null || $produto['Preco'] < $produtoBarato['Preco']) {
            $produtoBarato = $produto;
        }
    }

    return array("maisCaro" => $produtoCaro, "maisBarato" => $produtoBarato);
}

// Chame a função para encontrar os produtos mais caros e mais baratos
$resultados = encontraProdutos($estoque);

// Exiba os resultados
echo "Produto mais caro: {$resultados['maisCaro']['Nome']} - R$ {$resultados['maisCaro']['Preco']}<br>";
echo "Produto mais barato: {$resultados['maisBarato']['Nome']} - R$ {$resultados['maisBarato']['Preco']}<br>";
?>