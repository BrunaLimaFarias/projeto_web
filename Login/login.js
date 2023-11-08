async function login() {


    //window.location.href = "../Produtos/produtos.html"
}


function redirecionar() {
    window.location.href = "../Cadastro/cadastro.html";
}


function gravar() {
    
    var form = document.getElementById('informacoes_login');
    var dados = new FormData(form);

    var senha = document.getElementById("senha").value;
    var email=document.getElementById("email").value.length;
    

    if (email>=7) {
        
    fetch("Login/gravar.php",{
        method: "POST",
        body: dados
    })
        alert("Enviado com sucesso")
    }
    else if(email<=7){
        alert("O campo email deve ser preenchido com 7 ou mais digitos")
    }
}