
<div class="flex flex-col gap-3 items-center h-[600px] container m-auto justify-center sm:flex-row sm:items-center bg-[url('img/bg-login2.jpg')] bg-no-repeat bg-cover ">
      <div class="w-60 h-[280px] bg-zinc-600 text-center flex flex-col justify-around p-2 rounded shadow-md">
        <h1 class="text-lg text-zinc-100">Recuperar Senha</h1>
        <form action="app_send_pass/processa_envio.php" method="POST">
        <div class="flex flex-col  gap-3" >
          <input type="email" id="email" name="email" placeholder="E-mail" required class="text-white p-1 bg-transparent focus:outline-none focus:border-b-2 focus:border-b-red-500" required>
        </div>
         <button id="recuperasenha-button" name="recuperasenha-btn" type="submit" class=" bg-red-600 border-2 text-white rounded border-transparent h-10 outline-none">Enviar</button>
         </form>
        </div>
</div>