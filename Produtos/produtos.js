/*
var conteudo = [
    {id: 1, img: "<img src=../Img/biscoito_be_nature.png>",titulo: "Be Nature Maracuja", preco: "9.99"},
    {id: 2, img: "<img src=../Img/biscoito_dog_biscuits.png>",titulo: "Biscoito Dog Biscuits", preco: "9.99"},
    {id: 3, img: "<img src=../Img/sache_adulto.png>",titulo: "Sache Adulto", preco: "9.99"},
    {id: 4, img: "<img src=../Img/sache_filhote.png>",titulo: "Sache Filhote", preco: "9.99"},
    {id: 5, img: "<img src=../Img/racao_vittamax.png>",titulo: "Ração Vittamax", preco: "9.99"},
    {id: 6, img: "<img src=../Img/racao_pedigree.png>",titulo: "Ração Pedigree", preco: "9.99"},
    {id: 7, img: "<img src=../Img/sache_filhote.png>",titulo: "Sache Filhote", preco: "9.99"},
    {id: 8, img: "<img src=../Img/petisco_dental.png>",titulo: "Petisco Dental", preco: "9.99"}
];
*/
/*
window.onload = async function() {

    var produtos = await promise.json();

    for(var i = 0; i < produtos.length; i++) {

        var template =
        `<div class="card_produto">
                <div class="img_produto" >
                    ${produtos[i].img }
                </div>
                <div class="nome_produto">
                    <h3>${produtos[i].titulo}</h3>
                </div>
                <div class="preco_produto">
                    <p>${produtos[i].preco}</p>
                </div>
                <div class="adicionar_carrinho">
                <button onclick="comprar(${produtos[i].id})">Adicionar ao Carrinho</button>
                </div>
            </div>`;

            document.getElementById('produtos').innerHTML += template;
    }
}
*/


async function comprar(id) {
    var dados = new FormData();
    dados.append("id_produto", id);
    alert("comprando " + id); // remover
  
    const response = await fetch("/Produtos/comprar.php", {
      method: "POST",
      body: dados,
    });
  
    if (response.ok) {
      alert("deu boa!");
    } else {
      alert("deu ruim");
    }
  }

