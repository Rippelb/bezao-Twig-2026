<?php

// testeTwig.php

require('carregarTwig.php');
$nome = "Fulaninho";

$disciplinas = [
    'programação',
    'banco de dados',
    'interface web',
    'desenvolvimento de sistemas'

];

echo $twig->render('testeTwig.html', [
    'nome'=> $nome,
    'legal' => true,
    'disciplinas'=> $disciplinas
]);
