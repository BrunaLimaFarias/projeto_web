//var valor = document.getElementById("valor").value;

//alert(valor);

function somar(){
    var valor1 = parseInt(document.getElementById('valor1').value);
    var valor2 = parseInt(document.getElementById('valor2').value);

    var soma = valor1 + valor2;

    alert(soma);
}

function maior(){

    var valor1 = document.getElementById('valor1').value;
    var valor2 = document.getElementById('valor2').value;

    if(valor1 > valor2){
        alert(valor1+" é maior!");
    }
    else if(valor1 == valor2){
        alert("São iguais");
    }
    else{
        alert(valor2+" é maior!")
    }
}
