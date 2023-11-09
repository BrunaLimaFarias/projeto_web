
window.onload = async function() {

    var promise = await fetch("get_produtos.php", {

        method: "GET"

    });

    var dados = await promise.json();
    // console.log(dados);
    // for(var i = 0; i < conteudo.length; i++) {

    //     var template =
    //     `<div class="card_produto">
    //             <div class="img_produto" >
    //                 ${dados[i].img } 
    //             </div>
    //             <div class="nome_produto">
    //                 <h3>${dados[i].titulo}</h3>
    //             </div>
    //             <div class="preco_produto">
    //                 <p>${dados[i].preco}</p>
    //             </div>
    //         </div>`;
    
    //         document.getElementById('produtos').innerHTML += template;
    // }

    const total = dados.reduce((total, item) => total + item.preco, 0);
    console.log(total);
    document.getElementById("total").innerHTML = "R$ " + total;
}