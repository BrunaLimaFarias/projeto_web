
function gravar(){

    // const titular = document.getElementById("titular").value;
    // const preco=document.getElementById("preco").value.length;
    
    const arquivo = document.getElementById("arquivo").files;
    const produtos = document.getElementById("produtos");
    console.log(arquivo)
    const dados = new FormData(produtos);
    dados.append('arquivo', arquivo[0]);


    fetch("gravar.php", {
        method: "POST",
        body: dados
    });
}

async function escolher(){

    var arquivo = document.getElementById('arquivo').files;

    dados.append('arquivo', arquivo[0]);

    var promise = await fetch('escolher_img.php',{
        method: "POST",
        body: dados
    });

    var resposta = await promise.json();
    alert(resposta);
}
