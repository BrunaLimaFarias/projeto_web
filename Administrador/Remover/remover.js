async function remove(id){
  const dados = new FormData();
  dados.append('id', id);

  console.log(dados);

  await fetch("remove.php", {
      method: "POST",
      body: dados
  });
}