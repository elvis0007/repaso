<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <form action="get">
        <input type="number" id="n1" name="n2" placeholder="Ingrese n1">
        <input type="text" id="n2" name="n2" placeholder="Ingrese n2">
        <input type="button" id="buscar" name="buscar" value="Sumar" onclick="Sumar()"><br>
    </form>
    <p id="resultado"></p>
    <script src="operaciones.js"></script>
    <form action="">
        <input type="number" id="f1" name="f1" placeholder="Ingrese un numero">
        <input type="button" name="b1" id="b1" onclick="calcularFact()" value="Factorial"><br>
        <p id="acum"></p>
        <script src="factorial.js"></script>
    </form>
    <form action="get">
        <input type="text" id="fib" name="fib" placeholder="Ingrese el numero">
        <input type="button" id="Fibo" name="Fibo" value="FIBONACCI" onclick="calcularFibonacci()">
        <p id="fib2"></p>
        <script src="fibonaci.js"></script>

    </form>
    <form action="">
    <input type="text" id="nombre" placeholder="Ingrese el nombre">
       <input type="text" id="apellido" placeholder="Ingrese el apellido">
       <input type="text" id="telefono" placeholder="Ingrese el # telefonico"> 
       <input type="button" id="btnMostrar" value="Mostrar" onclick="ObtenerEstudiante()">
       <p id="printEstudiante"></p>

       <script src="Estudiantes.js"></script>
    </form>
    
</body>
</html>