<?php



   require("conecta.php");

  if (isset($_POST["dados"])){
    $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

    $senha = '';
    $dados["senha_nova"] .= 'PalmeirasNaoTemMundial';
    $senha = sha1($dados["senha_nova"]);

    $sql_code_verify = "SELECT * FROM `tb_sys_login` WHERE `codigo` = '$_SESSION[usuario]'";
    $sql_query_verify = $mysqli->query($sql_code_verify) or die($mysqli->error);
    $total = $sql_query_verify->num_rows;

    if($total == 1){
      // $sql_code = "UPDATE tb_sys_login SET pass = $senha WHERE codigo = '$_SESSION[usuario]'";
      // $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
      echo '1x1';
    }else{
      echo '1x0';
    }
    


  
    
    

    


  
  

 
    

    if ($erro != "") {
      echo $erro;
    }

  }

?>