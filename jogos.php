<?php
require('carregarTwig.php');
require('carregarPDO.php');

$jogos = $pdo->query('SELECT * FROM jogos');
$todosJogos = $jogos->fetchAll(PDO::FETCH_ASSOC);
echo $twig->render('jogos.html',[
    'jogos' => $todosJogos,   
]);