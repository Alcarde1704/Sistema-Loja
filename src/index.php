<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/tailwind.css">
  <script src="https://cdn.tailwindcss.com/"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/ffa4c937c4.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-zinc-900 font-['Poppins'] overflow-hidden">

    <header>
      <?php 
        require("assets/header.php");
      ?>
    </header>
  
    

    
    <main>
        
        <?php 

            

            if (isset($_GET["pagina"])){
               

                if ($_GET["pagina"] == "painel"){
                    require("views/painel.php");
                }

                if ($_GET["pagina"] == "cadastro"){
                    require("views/cadastro.php");
                }

                if ($_GET["pagina"] == "login"){
                    require("views/login.php");
                }

                if ($_GET["pagina"] == "recuperasenha"){
                    require("views/recuperasenha.php");
                }

                if ($_GET["pagina"] == "alterasenha"){
                    require("views/views_painel/alterar_senha.php");
                }

                



            }else{
                require("views/login.php");
            }
        ?>


    </main>

    <script src="js/eventos.js"></script>
</body>
</html>




