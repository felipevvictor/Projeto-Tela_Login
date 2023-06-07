<?php

    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //fopen("arquivo.txt", "a");
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php');


?>