<?php 

$cliente = array (
        'Nome' => 'Thiago Planchart',
        'email' => 'thiago.planchart@gmail.com',
        'Celular' => '11962623527',
        'Rua' => 'Rua Brigadeiro Galvão',
        'Número' => '198',
        'Complemento' => 'ap. 45' ,
        'CEP' => '01151000',
);


$nomeCliente = $cliente["Nome"];
$emailCliente = $cliente["email"];
$celularCliente = $cliente["Celular"];
$ruaCliente = $cliente["Rua"];
$numeroCliente = $cliente["Número"];
$complementoCliente = $cliente["Complemento"];
$cepCliente = $cliente["CEP"];


echo "Nome: $nomeCliente".PHP_EOL;
echo "E-mail: $emailCliente".PHP_EOL;
echo "Celular: $celularCliente".PHP_EOL;
echo "Endereço: $ruaCliente, $numeroCliente, $complementoCliente".PHP_EOL;  
echo "CEP: $cepCliente".PHP_EOL;