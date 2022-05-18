<?php



   require("conecta.php");

  if (isset($_POST["dados"])){
    $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

    $senha = '';
    $dados["senha"] .= 'PalmeirasNaoTemMundial';
    $senha = sha1($dados["senha"]);

    require("conecta.php");

  $sql_code = "UPDATE `tb_sys_login` SET `pass` = '$senha' WHERE `codigo` = '$_SESSION[usuario]'";
  $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    
    

    


  
  

 
    

    if ($sql_query){
      echo '1x1';
      
      
    } else{
        echo '1x0';
    }

    if ($erro != "") {
      echo $erro;
    }

  }

?>