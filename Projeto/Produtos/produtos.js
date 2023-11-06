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

for(var i = 0; i < conteudo.length; i++) {

    var template =
    `<div class="card_produto">
            <div class="img_produto" >
                ${conteudo[i].img } 
            </div>
            <div class="nome_produto">
                <h3>${conteudo[i].titulo}</h3>
            </div>
            <div class="preco_produto">
                <p>${conteudo[i].preco}</p>
            </div>
            <div class="adicionar_carrinho" onclick=(${conteudo[i].id})">
            <button>Adicionar ao Carrinho</button>
            </div>
        </div>`;

        document.getElementById('produtos').innerHTML += template;
}

function comprar(id){

    var dados = new FormData();
    dados.append("id_produto", id);

    fetch("php/comprar.php", {
        method: "POST",
        body: dados
    });

}