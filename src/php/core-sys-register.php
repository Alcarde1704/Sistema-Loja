<?php

  if (isset($_POST["dados"])) {
    $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

    $erro = '';
    $nome = sha1($dados["nome"]);
    $email = sha1($dados["email"]);
    $usuario = '';
    $dados["usuario"] .= 'FelipeTaCegoPrecisaDeOculista';
    $usuario = sha1($dados["usuario"]);
    $senha = '';
    $dados["senha"] .= 'PalmeirasNaoTemMundial';
    $senha = sha1($dados["senha"]);


    require("conecta.php");
    $query_login = $mysqli->query("SELECT * FROM `tb_sys_login` WHERE `user` = '$usuario'");
    
    

    if ($query_login->num_rows != 1){
      
        $mysqli->query("INSERT INTO `tb_sys_login` VALUES ('','$nome','$email','$usuario','$senha')");
        echo '1x1';
    }else{
        echo '1x0';
        $erro .= $mysqli->error;
    }

    if ($erro != ''){
        echo $erro;
    }

  }

?>