
<div class="flex flex-col gap-3 items-center h-[600px] container m-auto justify-center sm:flex-row sm:items-center bg-[url('img/bg-login2.jpg')] bg-no-repeat bg-cover ">
      <div class="w-60 h-[180px] bg-zinc-600 text-center flex flex-col gap-8 justify-around p-2 rounded shadow-md">
        <h1 class="text-lg text-zinc-100">Recuperar Senha</h1>
        <form action="app_send_pass/processa_envio.php" method="POST" class=" flex-1 flex flex-col justify-between">
        <div class="flex flex-col " >
          <input type="email" id="email" name="email" placeholder="E-mail" required class="text-white p-1 bg-transparent focus:outline-none focus:border-b-2 focus:border-b-blue-500" required>
        </div>
         <button id="recuperasenha-button" name="recuperasenha-btn" type="submit" class=" bg-blue-600 border-2 text-white rounded border-transparent h-10 outline-none">Enviar</button>
         </form>
        </div>
</div>