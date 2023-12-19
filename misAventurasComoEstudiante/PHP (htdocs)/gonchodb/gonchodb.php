<?php

class Gonchodb{
    public function __construct($basededatos){
        $this->db = $basededatos; 
        echo "La base de datos seleccionada es: ".$this->db."<br>";      
    
    }
    public function peticion($consulta){
        echo "A continuación vamos a procesar la siguiente consulta: ".$consulta."<br>";

        $primerapalabra = explode(" ",$consulta)[0];
        $segundapalabra = explode(" ",$consulta)[1];
        $tercerapalabra = explode(" ",$consulta)[2];
        echo "La primera palabra es: ".$primerapalabra."<br>";
        switch($primerapalabra){
            case "CREATE":
                echo "Voy a crear algo<br>";
                if($segundapalabra == "TABLE"){
                    $myfile = fopen("db/".$this->db."/".$tercerapalabra.".csv","a") or die("Unable to open file!");
                    $text = $consulta;
                    preg_match('#\((.*?)\)#',$text, $match);
                    print $match[1];
                    $txt = $match[1];
                    $campos = explode (",",$txt);
                    $cadenacampos = "";
                    for($i = 0;$i<count($campos);$i++){
                        $cadenacampos .= '"'.$campos[$i].'",';
                    }
                    $recortado = substr($cadenacampos, 0, -1);
                    fwrite($myfile,$recortado."\n");

                    fclose($myfile); 
                }
                break;
                // INSERT
            case "INSERT":
                $tabla = explode (" ",$consulta)[2];
                $myfile = fopen("db/".$this->db."/".$tabla.".csv","a") or die("Unable to open file!");
                $text = $consulta;
                preg_match('#\((.*?)\)#',$text, $match);
                print $match[1];
                $txt = $match[1];
                fwrite($myfile,$txt."\n");
            break;
                // SELECT
            case "SELECT":
                $piezas = explode(" ",$consulta);
                foreach( $piezas as $key => $value ){
                    if($piezas[$key] == 'FROM' ){
                        $tabla = $piezas[$key+1];
                        break;
                    }
                }
            
                echo "La tabla es: ".$tabla."<br>";
                $array = [];
                $contador = 0;
                $file = fopen("db/".$this->db."/".$tabla.".csv", "r");
                $line = fgetcsv($file);
                $nombrescampo = $line;
               
                $file = fopen("db/".$this->db."/".$tabla.".csv", "r");
                while (($line = fgetcsv($file)) !== FALSE) {

                    $array[$contador] = $line;
                    for($i = 0; $i<count($line);$i++){
                    //    echo "Al campo".$nombrescampo[$i]." le voy a asignar el valor: ".$line[$i]."<br>";
                        $array[$contador][$nombrescampo[$i]] = $line[$i];
                    }
                    $contador++;
                }

                fclose($file);
                return $array;
                break;
                // DELETE
                case "DELETE":
                    $piezas = explode(" ",$consulta);
                    foreach( $piezas as $key => $value )
                    {
                        if($piezas[$key] == 'FROM' ){
                            $tabla = $piezas[$key+1];
                            break;
                        }
                    }
                    foreach( $piezas as $key => $value )
                    {
                        if($piezas[$key] == 'WHERE' )
                        {
                            $campo = $piezas[$key+1];
                            $valor = str_replace("'","",$piezas[$key+3]);
                            break;
                        }
                    }
                
                    echo "De la tabla ".$tabla." voy a borrar el campo ".$campo." cuyo valor sea ".$valor."<br>";
                    $array = [];
                    $contador = 0;
                    $file = fopen("db/".$this->db."/".$tabla.".csv", "r");
                    $line = fgetcsv($file);
                    $nombrescampo = $line;
                    $file = fopen("db/".$this->db."/".$tabla.".csv", "r");
                    $file2 = fopen("db/".$this->db."/".$tabla."2.csv", "w"); // Modo de apertura en escritura
                
                    while (($line = fgetcsv($file)) !== FALSE) {
                        $array[$contador] = $line;
                
                        $borra = "no"; // Inicializar la variable
                
                        for($i = 0; $i<count($line);$i++){
                            //    echo "Al campo".$nombrescampo[$i]." le voy a asignar el valor: ".$line[$i]."<br>";
                            $array[$contador][$nombrescampo[$i]] = $line[$i];
                            if($line[$i] == $valor && $nombrescampo[$i] == $campo){ // Comparar valores de fila
                                $borra = "si";
                            }else{

                            }
                        }
                        $contador++;
                        if($borra == "si"){
                            echo "He encontrado una coincidencia<br>";
                        }else{
                            echo "No he encontrado una coincidencia<br>";
                            // var_dump( $line);
                            /*
                            foreach($line as $a){
                                 fwrite($file2,'"'.$a.'",'); 
                            }
                            */
                            for($i = 0;$i<count($line)-1;$i++){
                                fwrite($file2,'"'.$line[$i].'",');
                            }
                        }
                        fwrite($file2, PHP_EOL); 
                    }
                    
                
                    fclose($file);
                    fclose($file2);
                
                    unlink("db/".$this->db."/".$tabla.".csv");
                    rename("db/".$this->db."/".$tabla."2.csv","db/".$this->db."/".$tabla.".csv");

                    break;
                
        } 
    }
}

?>