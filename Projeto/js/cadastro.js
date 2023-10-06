function cadastrar() {

    var nome = document.getElementById("nome").value;
    var usuario = document.getElementById("usuario").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var confirmar_senha = document.getElementById("confirmar_senha").value;
  
    if (!nome || !usuario || !email || !senha || !confirmar_senha) {
      alert("Por favor, preencha todos os campos.");
      return;
    }
  
    if (senha !== confirmar_senha) {
      alert("As senhas não coincidem.");
      return;
    }

    var form = document.getElementById('informacoes_cadastro');
    var dados = new FormData(form);

    fetch("cadastro.php", {
        method: "POST",
        body: dados
    });

    window.location.href = "../paginas/login.html";
}

function redirecionar() {
  window.location.href = "../paginas/login.html";
}
