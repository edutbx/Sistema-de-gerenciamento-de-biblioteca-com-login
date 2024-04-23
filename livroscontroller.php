<?php
require_once "livrosdao.php";
require_once "estoque.php";

$codigolivro = filter_input(INPUT_POST, 'codigolivro');
$nomelivro = filter_input(INPUT_POST, 'nomelivro');
$autorlivro = filter_input(INPUT_POST, 'autorlivro');
$editoralivro = filter_input(INPUT_POST, 'editoralivro');
$generolivro = filter_input(INPUT_POST, 'generolivro');
$acao = filter_input(INPUT_POST, 'acao');

$johnson_goat = new Estoque();
$livrosdao = new LivrosDao();

$johnson_goat->SetCodigo($codigolivro);
$johnson_goat->SetNome($nomelivro);
$johnson_goat->SetAutor($autorlivro);
$johnson_goat->SetEditora($editoralivro);
$johnson_goat->SetGenero($generolivro);

if ($acao == 'consultar') {
    $livrosdao->consultar();
    foreach ($livrosdao->consultar() as $consult) {
        echo $consult['codigolivro'] . "<br>";
        echo $consult['nomelivro'] . "<br>";
        echo $consult['autorlivro'] . "<br>";
        echo $consult['editoralivro'] . "<br>";
    }
} else if ($acao == 'cadastrar') {
    $livrosdao->cadastrar($johnson_goat);
} else if ($acao == 'apagar') {
    $livrosdao->apagar($johnson_goat);
} else if ($acao == 'atualizar') {
    $livrosdao->atualizar($johnson_goat);
}
