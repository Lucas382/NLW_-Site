var variavel;

variavel = 3 + 3;

//alert(variavel);

var resultadoMultiplicacao = multiplique(10, 50);


var divLocal = document.getElementById("exibe_resultado");

divLocal.innerHTML += resultadoMultiplicacao;

//Alternativa Simplificada e sem Variavel
//document.getElementById("exibe_resultado").innerHTML += resultadoMultiplicacao;


var num = [document.getElementById("num1"),document.getElementById("num2")];


document.getElementById("sub").onclick = function(e){

    if(inteiroEPositivo(num[0].value) == true && inteiroEPositivo(num[1].value) == true)
    {
        mostrarValor();
    }
    else
    {
        alert("O um ou mais dos números informados não são inteiros e positivos !!")
    }
    e.preventDefault();
}

function mostrarValor(){

        alert("O resultado do calculo é : " + dividir(num[0].value, num[1].value));

}

function inteiroEPositivo(num)
{
    //Regra para verificar se o número é inteiro e positivo
    var regra = /^[0-9]+$/;

    inteiro = false
    if (num.match(regra))
    {
        inteiro = true
    }
    return inteiro
}

function dividir(num1,num2){

    var resultado = 0;

    resultado = num1 / num2;

    return resultado;
}


function multiplique(num1, num2){

    var resultado = 0;

    resultado = num1 * num2;

    return resultado;
}
