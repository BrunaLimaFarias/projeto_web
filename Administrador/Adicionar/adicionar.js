
function gravar(){

    var arquivo = document.getElementById("arquivo").file;
    var dados = new FormData(arquivo);

    fetch("Adicionar/gravar.php", {
        method: "POST",
        body: dados
    });
}

async function escolher(){

    var arquivo = document.getElementById('arquivo').files;

    dados.append('arquivo', arquivo[0]);

    var promise = await fetch('Adicionar/escolher_img.php',{
        method: "POST",
        body: dados
    });

    var resposta = await promise.json();
    alert(resposta);
}
