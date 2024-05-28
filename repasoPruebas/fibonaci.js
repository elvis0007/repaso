function calcularFibonacci() {
    var numero = parseInt(document.getElementById("fib").value);
    var fib1 = 0;
    var fib2 = 1;
    var fibonacci = '';

    fibonacci += fib1 + ', ' + fib2;

    for (let i = 2; i < numero; i++) {
        var temp = fib1 + fib2;
        fibonacci += ', ' + temp;
        fib1 = fib2;
        fib2 = temp;
    }

    window.alert("La serie de Fibonacci hasta el número " + numero + " es: " + fibonacci);
    document.getElementById("fib2").innerHTML = "La serie de Fibonacci hasta el número " + numero + " es: " + fibonacci;
}