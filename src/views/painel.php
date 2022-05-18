<?php 
  include("php/protect.php");
  protect();
?>
  
    <div class="flex flex-col items-center gap-3 container m-auto justify-center sm:flex-row sm:items-center sm:justify-center">
      <div class=" text-center flex flex-row gap-2 justify-center  p-2 items-baseline rounded shadow-md container relative">
        
      <div class="flex flex-row gap-2 ">
        <div class="flex flex-col ">
          <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-between" type="button">Nosso Estoque<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow  dark:bg-gray-700" active="0">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 flex flex-col"  aria-labelledby="dropdownDefault">
                  <li class="flex">
                    <button href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Entrada</button>
                  </li>
                  <li class="flex">
                    <button href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Contas a Pagar</button>
                  </li>
                  
                </ul>
          </div>
        </div>

        <div class="flex flex-col">
          <button id="dropdownVenda" data-dropdown-toggle="dropdownVenda" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-between" type="button">Efetuar Venda<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <div id="dropdownVendas" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow  dark:bg-gray-700" active="0">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownVenda">
                  <li class="flex">
                    <button href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Entrada</button>
                  </li>
                  <li class="flex">
                    <button href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Contas a Pagar</button>
                  </li>
                  
                </ul>
          </div>
        </div>
      </div>


      <div class="flex flex-col sm:absolute sm:right-0">
        <button id="dropdownUser" data-dropdown-toggle="dropdownUser" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  text-center inline-flex justify-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 px-3 py-[18px]" type="button"><i class="fa-solid fa-user fa-xl"></i></button>
        <div id="dropdownUsers" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow  dark:bg-gray-700" active="0">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUser">
                <li class="flex">
                  <button href="?pagina=alterasenha"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Alterar Senha</button>
                </li>
                <li>
                  <a href="php/logout.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex-1">Logout</a>
                </li>
                
              </ul>
        </div>
      </div>
      
          
         

      </div>
    
    </div>

            
   

    

    





    
            

    <!-- ESSE ARQUIVO É O PROXIMO DEPOIS DO LOGIN SER APROVADO -->

