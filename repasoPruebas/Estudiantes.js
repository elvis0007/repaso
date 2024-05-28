class Estudiantes{
    constructor(nombre, apellido, telefono){
        this.nombre = nombre;
        this.apellido = apellido;
        this.telefono = telefono;
    }
    devEstudiante(){
        return "Nombre: "+this.nombre+"\nApellido: "+this.apellido+"\nTelefono: "+this.telefono;
    }
}

function ObtenerEstudiante(){
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var telefono = document.getElementById("telefono").value;
    var estudiante = new Estudiantes(nombre, apellido, telefono);
    window.alert(estudiante.devEstudiante());
    document.getElementById("printEstudiante").innerHTML = estudiante.devEstudiante();
} 