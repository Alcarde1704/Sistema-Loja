

<div class="flex flex-col gap-3 items-center h-[600px] container m-auto justify-center sm:flex-row sm:items-center bg-[url('img/bg-login2.jpg')] bg-no-repeat bg-cover ">
      <div class="w-60 h-[350px] bg-zinc-600 text-center flex flex-col justify-around p-2 rounded shadow-md">
        <h1 class="text-lg text-zinc-100">Cadastro Novo Usuário</h1>
        <div class="flex flex-col  gap-3" >
        <input type="text" id="nome" placeholder="Nome Completo" class="p-1 bg-transparent text-white focus:outline-none focus:border-b-2 focus:border-b-red-500" required>
        <input type="email" id="email" placeholder="E-mail" class="p-1 bg-transparent text-white focus:outline-none focus:border-b-2 focus:border-b-red-500" required>
          <input type="text" id="user" placeholder="Username" class="p-1 bg-transparent text-white focus:outline-none focus:border-b-2 focus:border-b-red-500" required>
          <input type="password" id="pass" placeholder="********" class="p-1 bg-transparent text-white focus:outline-none focus:border-b-2 focus:border-b-red-500" required>
        </div>
         
        <button id='register-button'  class="bg-red-600 border-2 text-white rounded border-transparent h-10 outline-none">Cadastrar</button>
        <button class="text-white text-sm" href="?pagina=login">Voltar</button>  
    </div>
</div>