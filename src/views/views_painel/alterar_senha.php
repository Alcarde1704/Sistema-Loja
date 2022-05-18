<?php 
  include("php/protect.php");
  protect();
?>

<div class="flex flex-col gap-3 items-center h-[600px] container m-auto justify-center sm:flex-row sm:items-center bg-[url('img/bg-login2.jpg')] bg-no-repeat bg-cover ">
      <div class="w-60 h-[280px] bg-zinc-600 text-center flex flex-col justify-around p-2 rounded shadow-md">
        <h1 class="text-lg text-zinc-100">Alterar Senha</h1>
        <div class="flex flex-col  gap-3" >
          
          <input type="password" id="pass_new"  placeholder="********" required class="text-white p-1 bg-transparent focus:outline-none focus:border-b-2 focus:border-b-blue-500" required>
        </div>
         <button id="alterasenha-btn" class=" bg-blue-600 border-2 text-white rounded border-transparent h-10 outline-none">Alterar</button>
          <div>
            
          <button class="text-white text-sm" href="?pagina=painel">Voltar</button>  
          </div>
        </div>
</div>