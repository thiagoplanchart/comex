<?php 

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

//------- Função adicionar produto
function adicionarProduto (array $dadosProduto, float $valorRemover): array  
{
        $dadosProduto['Estoque'] += $valorRemover;
    return $dadosProduto;
}
//-------

//------- Função remover produto
function removerProduto (array $dadosProduto, float $valorRemover): array  
{
    if ($valorRemover > $dadosProduto['Estoque']) {
     exibeMensagem('Você não pode remover tantos produtos');} 
    
     else {
        $dadosProduto['Estoque'] -= $valorRemover;
    }

    return $dadosProduto;
}
//-------


//------- Função mostrar mensagem
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}
//-------


//------- Função verificar disponibilidade
function verificarDisponibilidade($estoque, $produto) {
    if (isset($estoque[$produto])) {
        return $estoque[$produto]["Estoque"];
    } else {
        return 0;
    }
}
//------- 

$estoque['produto1'] = adicionarProduto(
    $estoque['produto1'], 
     
);

$estoque['produto3'] = removerProduto(
    $estoque['produto3'], 
    600
);


$disponibilidade = verificarDisponibilidade($estoque, "produto3");


foreach ($estoque as $produto => $dadosProduto) {
    exibeMensagem('Produto: ' . $dadosProduto['Nome'] .' | Preço: '.$dadosProduto['Preco'].' | Estoque: '.$dadosProduto['Estoque']);
}



