<?php
   require("conecta.php");

  if (isset($_POST["dados"])){
    $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

    if(!isset($_SESSION)){
      session_start();
    }

    $erro = '';

    
    $dados["usuario"] .= 'FelipeTaCegoPrecisaDeOculista';
    $_SESSION['user'] = $mysqli->escape_string(sha1($dados["usuario"]));
    $dados["senha"] .= 'PalmeirasNaoTemMundial';
    $_SESSION['pass'] = sha1($dados["senha"]);




 
    $query_login = $mysqli->query("SELECT codigo FROM tb_sys_login where user = '$_SESSION[user]' AND pass = '$_SESSION[pass]'") or die($mysqli->error);
    $dado = $query_login->fetch_assoc();
    $total = $query_login->num_rows;
    $erro .= $mysqli->error;
    
    

    if ($total == 1){
      echo '1x1';
      $_SESSION['usuario'] = $dado['codigo'];
      
    } else{
        echo '1x0';
    }

    if ($erro != "") {
      echo $erro;
    }

  }

?>