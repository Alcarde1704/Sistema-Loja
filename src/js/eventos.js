$(document).on("click", "[href]", function () {
  location = this.getAttribute("href")
})




$("#login-button").click(function(){
  
  var dados = new Object();
  

  //recupero usuario e senha informados
  dados["usuario"] = $("#user").val();
  dados["senha"] = $("#pass").val();
  


  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
  form.append(item, pacote[item])
  }
  
  $.ajax({
      url: '../src/php/core-sys-login.php',
      type: 'POST',
  
      success: function (retorno) {
        if (retorno == "1x1") {
          window.location.href = "?pagina=painel";
          
        }else if(retorno == "1x0"){
          alert("Usuário e/ou Senha Inválido(s)");
        }
      },
  
      data: form,
      cache: false,
      contentType: false,
      processData: false
  })

});


$("#register-button").click(function(){
  
  var dados = new Object();
  

  //recupero usuario e senha informados
  dados["nome"] = $("#nome").val();
  dados["email"] = $("#email").val();
  dados["usuario"] = $("#user").val();
  dados["senha"] = $("#pass").val();
  

  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
  form.append(item, pacote[item])
  }
  
  $.ajax({
      url: '../src/php/core-sys-register.php',
      type: 'POST',
  
      success: function (retorno) {
          if (retorno == "1x1") {
            window.location.href = "?pagina=login";
          }else if(retorno == "1x0"){
            alert("Usuário Já Cadastrado no Sistema");
          }else{
            alert("Erro ao cadastrar");
          }
      },
  
      data: form,
      cache: false,
      contentType: false,
      processData: false
  })

});
$("#dropdownDefault").on("click",function() {
  if ($("#dropdown").attr("active") == "0") {
    $("#dropdown").removeClass("hidden");
    $("#dropdown").attr("active","1");
    
  }else{
    $("#dropdown").addClass("hidden");
    $("#dropdown").attr("active","0");
  }
});



$("#dropdownVenda").click(function() {
  if ($("#dropdownVendas").attr("active") == "0") {
    $("#dropdownVendas").removeClass("hidden");
    $("#dropdownVendas").attr("active","1");
    
  }else{
    $("#dropdownVendas").addClass("hidden");
    $("#dropdownVendas").attr("active","0");
  }
});

$("#dropdownUser").click(function() {
  if ($("#dropdownUsers").attr("active") == "0") {
    $("#dropdownUsers").removeClass("hidden");
    $("#dropdownUsers").attr("active","1");
    
  }else{
    $("#dropdownUsers").addClass("hidden");
    $("#dropdownUsers").attr("active","0");
  }
});


$("#alterasenha-btn").click(function(){
  
  var dados = new Object();
  

  dados["senha_nova"] = $("#pass_new").val();
  


  var pacote = { dados: JSON.stringify(dados) }
  var form = new FormData()
  for (item in pacote) {
  form.append(item, pacote[item])
  }
  
  $.ajax({
      url: './src/php/core-sys-alterpass.php',
      type: 'POST',
  
      success: function (retorno) {
        if (retorno == "1x1") {
          alert("ok");
        }else if(retorno == "1x0"){
          alert("Ocorreu algum erro, tente novamente mais tarde");
        }
      },
  
      data: form,
      cache: false,
      contentType: false,
      processData: false
  })

});