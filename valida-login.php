<?php
session_start();

//identifica a autenticação
$usuario_autenticado = false;
//usuários do sistema
$usuarios_app = array(
    array("email" => "adm@teste.com.br", "password" => "123456"),
    array("email" => "user@teste.com.br", "password" => "abcd"),
);

// echo "<pre>";
//     print_r($usuarios_app);
// echo "<pre/>";

foreach($usuarios_app as $user){
    if($user["email"] == $_POST["email"] && $user["password"] == $_POST["password"]){
        $usuario_autenticado = true;
    }
    if($usuario_autenticado){
        echo "Usuário autenticado";
        $_SESSION["autenticado"] = "SIM";
        // $_SESSION["x"] = "Um valor";
        // $_SESSION["y"] = "Outro valor";
        header("Location: home.php");
    }else {
        
        $_SESSION["autenticado"] = "NÃO";
        header("Location: index.php?login=erro");
    }
    echo "<hr/>";
}

// echo "<pre>";
//     print_r($_GET);
// echo "<pre/>";
//     $_GET["email"];
//     echo "<br/>";
//     $_GET["password"];

    // echo "<pre>";
    //     print_r($_POST);
    // echo "<pre/>";
    // echo "<br/>";


?>