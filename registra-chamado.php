<?php
    session_start();
    // montagem do texto
    $titulo = str_replace("#", "-", $_POST["titulo"]);
    $categoria = str_replace("#", "-", $_POST["categoria"]);
    $descricao = str_replace("#", "-", $_POST["descricao"]);

    $titulo = str_replace("|", "-", $_POST["titulo"]);
    $categoria = str_replace("|", "-", $_POST["categoria"]);
    $descricao = str_replace("|", "-", $_POST["descricao"]);

    // abrindo arquivo
    $arquivo = fopen("arquivo.hd", "a");
    //implode("#", $_POST);
    $texto = $_SESSION["id"] . "#" . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // escrevendo texto
    fwrite($arquivo, $texto);

    fclose($arquivo);

    header("Location: abrir_chamado.php");
