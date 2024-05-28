class Operaciones{
    constructor(n1,n2){
        this.n1 = n1;
        this.n2 = n2;

    }
    suma() {
        return n1+this.n2;
    }
}
function Sumar(){
    var numero1 = document.getElementById("n1").value;
    var numero2 = document.getElementById("n2").value;
    var resultado = parseInt(numero1)+parseInt(numero2);
    window.alert("El resultado es: "+resultado);
    document.getElementById("resultado").innerHTML="La suma es: "+resultado;
}