
window.onload = async function() {

    var promise = await fetch("get_produtos.php", {

        method: "GET"

    });

    var dados = await promise.json();

    const total = dados.reduce((total, item) => total + item.preco, 0);
    console.log(total);
    document.getElementById("total").innerHTML = "R$ " + total;
}