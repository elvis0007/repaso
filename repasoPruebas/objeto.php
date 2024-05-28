<?php
    class Auto{

        public $marca;  //hay que decir de que tipo es mi atributo
        public $modelo;
        public $color;

        function __construct($marca, $modelo, $color) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
        }

        function mostrar(){
            echo($this->marca." ".$this->modelo." ".$this->color);
        }

         //METODO DE INSTANCIACION implicita 
        static function mensaje(){
            echo ("Gracias por visitar el concesonario");
            print_r("<br>");
            print_r("<br>");
        }
    }

    
        //ocupa el constructor
        $auto3 = new Auto("Hynday","gt", "rojo");
        $auto3->mostrar();
        print_r("<br>");
        print_r("<br>");
/*
        //no ocupan el constructor
        $auto1 = new Auto(); 
        $auto1->marca="Chevbrolet";//la flechita es para llamar a los atributos y metods
        $auto1->modelo="aveo";
        $auto1->color="negro";
        $auto1->mostrar();
        print_r("<br>");

        $auto2 = new Auto(); 
        $auto2->marca="toyota";//la flechita es para llamar a los atributos y metods
        $auto2->modelo="f150";
        $auto2->color="blanco";
        $auto2->mostrar();
        */

        //METODO DE INSTANCIACION para aceder direcatamente al metodo
        //acccedo con el nombre de la clase y los 4 puntos a continuacion el metodo
        Auto::mensaje();
?>