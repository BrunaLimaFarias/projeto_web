
function gravar(){

    var form = document.getElementById("adc_item");
    var dados = new FormData(form);

    fetch("Adicionar/gravar.php", {
        method: "POST",
        body: dados
    });
    
}