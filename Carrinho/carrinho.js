
window.onload = async function() {

    var promise = await fetch("Carrinho/get_produtos.php", {

        method: "GET"

    });

    var dados = await promise.json();

    for(var i = 0; i < conteudo.length; i++) {

        var template =
        `<div class="card_produto">
                <div class="img_produto" >
                    ${dados[i].img } 
                </div>
                <div class="nome_produto">
                    <h3>${dados[i].titulo}</h3>
                </div>
                <div class="preco_produto">
                    <p>${dados[i].preco}</p>
                </div>
            </div>`;
    
            document.getElementById('produtos').innerHTML += template;
    }
}