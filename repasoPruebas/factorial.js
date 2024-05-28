function calcularFact(){

    var numero = document.getElementById("f1").value;
    var respuesta = 1;
 
    for(let i= 1; i<= numero; i++){
        respuesta *= i;
    }
    window.alert("El factorial es: "+respuesta);
    document.getElementById("acum").innerHTML="El factorial es: "+respuesta;
}