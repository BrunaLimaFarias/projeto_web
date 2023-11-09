
async function comprar(id) {
    var dados = new FormData();
    dados.append("id_produto", id);
  
    const response = await fetch("comprar.php", {
      method: "POST",
      body: dados,
    });
  
    if (response.ok) {
      alert("Adicionado ao carrinho!");
    } else {
      alert("Não foi possível adicionar ao carrinho!");
    }
  }
