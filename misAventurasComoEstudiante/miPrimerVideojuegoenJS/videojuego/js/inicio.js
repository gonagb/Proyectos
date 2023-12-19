            
            /*Cargamos todas las condiciones iniciales del juego*/
                                                 
            function inicio(){
                /*Creo una instancia del objeto o personaje dentro de cada uno de los elementos de la colección*/
              /*    for(var i = 0;i<numeropersonajes;i++){
                arraypersonajes[i] = new Personaje;
                
            }
                */
          
                /*Se lanza la ejecución del bucle*/

                temporizador = setTimeout("bucle()",1000);

            $(document).keydown(function(e){
                if(e.key == "w"){direccion= 1; moviendo=true;}
                if(e.key == "s"){direccion= 2; moviendo=true;}
                if(e.key == "a"){direccion= 3; moviendo=true;}
                if(e.key == "d"){direccion= 4; moviendo=true;}
                if(e.key == "z" && saltando == false){saltando=true;velocidadz = 20;}
                if(e.key == "e" && accion == false){accion=true;}

            })
                 $(document).keyup(function(e){
                if(e.key == "w"){direccion = 0; moviendo=false;}
                else if(e.key == "s"){direccion = 0; moviendo=false;}
                else if(e.key == "a"){direccion = 0; moviendo=false;}
                else if(e.key == "d"){direccion = 0; moviendo=false;}
            })
                
            $(document).keydown(function(e){
               if(e.keyCode == 27){
                    pausa = true;
                    $("#pantallainicialmedio").fadeIn("slow");
                    $("#contenedor").addClass("difuminado")
                }
            });
                
                
            $(window).resize(function(){
                console.log("ok redimensionado")
            anchuranavegador = window.innerWidth;
            alturanavegador = window.innerHeight;
            document.getElementById("lienzo").height = alturanavegador;
            document.getElementById("lienzo").width = anchuranavegador;
            document.getElementById("fondo").height = alturanavegador;
            document.getElementById("fondo").width = anchuranavegador;
            document.getElementById("contenedor").height = alturanavegador;
            document.getElementById("contenedor").width = anchuranavegador;
            })
        
            contextomapacolores.drawImage(mapacolores,0,0) 
                
            contextomapaarquitectura.drawImage(mapaarquitectura,0,0)  

                
            posinicialjugador()
            creaenemigos()
            creaobjetivo()
            creaprops()
            crearecogibles();
    }
            