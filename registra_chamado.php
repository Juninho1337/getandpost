<?php

print_r($_POST);

$arquivo=fopen('arquivo.txt', 'a');

$texto= $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

$titulo= str_replace('#', '-', $_POST['titulo'] );
$categoria=str_replace('#', '-', $_POST['categoria'] );
$descricao=str_replace('#', '-', $_POST['descricao'] );

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: home.php');

?>