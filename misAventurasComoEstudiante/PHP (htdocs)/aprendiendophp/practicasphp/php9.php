<?php 

    class Persona{
   //   Propiedades
            private $edad = 0;
            private $pelo = "no mucho";
            private $nombre = "JV";
    //  Metodos 
        public function diHola(){
            echo "Te estoy diciendo Hola <br>";
        }  
        public function dimeNombre(){
            echo "Me llamo ".$this->nombre."<br>";
        } 
        public function setNombre($nuevonombre){
            $this->nombre = $nuevonombre;
        }
    }

    $jv = new Persona();
    /*
    echo "La edad de JV es ".$jv->edad."<br>";
    echo "El pelo de JV es ".$jv->pelo."<br>";
    echo "El nombre de JV es ".$jv->nombre."<br>";

    $jv->nombre = "Jose Vicente";
    echo "El nombre de JV es ".$jv->nombre."<br>";
    */
    $jv->diHola();
    $jv->dimeNombre();
    $jv->setNombre("Goncho");
    $jv->dimeNombre();


?>