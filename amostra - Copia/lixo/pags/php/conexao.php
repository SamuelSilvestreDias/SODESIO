<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "Gabriel" && $senha == "gabriel123"){
        header("Location: pagsHtml\homePagPessoa_gabriel.html");
    } elseif ($nome == "Samuel" && $senha == "samuel123") {
        header("Location: pagsHtml\homePagPessoa_samuel.html");
    }
    else {
        header("Location: index.php?res=Senha ou úsuario incorretos");
    }