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
$poema = 'Bilhete, de Mario Quintana
Se tu me amas, ama-me baixinho
Não o grites de cima dos telhados
Deixa em paz os passarinhos
Deixa em paz a mim!
Se me queres,
enfim,
tem de ser bem devagarinho, Amada,
que a vida é breve, e o amor mais breve ainda…';

echo $twig->render('testeTwig.html', [
    'nome'=> $nome,
    'legal' => true,
    'disciplinas'=> $disciplinas,
    'poema'=> $poema
]);
