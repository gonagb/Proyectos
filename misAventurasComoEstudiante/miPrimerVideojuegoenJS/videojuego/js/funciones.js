function isox(x, y) {
    return (x - y);
}

function isoy(x, y) {
    return ((x + y) / 2)
}

function reiniciar() {
    nivel = 1;
    numeropersonajes = 5;
    arraypersonajes = new Array();

    posx = 100;
    posy = 20;
    estadoanimacion = 0;
    angulo = 0;
    velocidad = 10;
    direccion = 0;
    energia = 100;

    terrenox1 = 800;
    terrenoy1 = -200;
    terrenox2 = 1000;
    terrenoy2 = 300;

    pausa = false;

    for (var i = 0; i < numeropersonajes; i++) {
        arraypersonajes[i] = new Personaje;
    }
}

function subirnivel() {
    pausa = true;

    nivel++;
    $("#dimenivel").html(nivel);
    $("#pantallanivel").fadeIn("slow");
    contexto.clearRect(0, 0, anchuranavegador, alturanavegador);
    setTimeout(function () {
        $("#pantallanivel").fadeOut("slow");
        pausa = false;
        bucle();
    }, 5000);

    numeropersonajes += 5;
    arraypersonajes = new Array();

    posx = 100;
    posy = 20;
    estadoanimacion = 0;
    angulo = 0;
    velocidad = 10;
    direccion = 0;
    energia = 100;

    terrenox1 = 800;
    terrenoy1 = -200;
    terrenox2 = 1000;
    terrenoy2 = 300;

    for (var i = 0; i < numeropersonajes; i++) {
        arraypersonajes[i] = new Personaje;
    }
    premiox = Math.random() * (terrenox2 - terrenox1) + terrenox1;
    premioy = Math.random() * (terrenoy2 - terrenoy1) + terrenoy1;
}

function dibujaterreno(){
    contextofondo.clearRect(0,0,anchuranavegador, alturanavegador)
    var anchurabloque = 50;
    var anchuradibujo = 120;
    //dibuja el mapa
    contextomapa.drawImage(mapa,0,0);
    //que me de los datos de los pixeles que hay en ese mapa
    var pixeles = contextomapa.getImageData(0,0,512,512);
    //vamos recorriendo la imagen en bloques de 4, ya que cada 4 datos equivale un pixel
    for(var i = 0; i<pixeles.data.length; i+=4){
        //componente rojo
        var cr = pixeles.data[i];
        //componente verde
        var cg = pixeles.data[i+1];
        //componente azul
        var cb = pixeles.data[i+2];
        //componente transparencia-alfa
        var ca = pixeles.data[i+3];
        //variables para saber la posicion de cada pixel
        var x = (((i)%(512))/4);
        var y = Math.floor((i/512)/4);
        //si el pixel que encuentras es opaco, es decir, el componente alfa está en 255
        if(ca == 255){
            if(
                isox(x*anchurabloque,y*anchurabloque)+desfasex > -100
                && 
                isox(x*anchurabloque,y*anchurabloque)+desfasex < anchuranavegador
                &&
                desfasex,isoy(x*anchurabloque,y*anchurabloque)+desfasey > -100
                &&
                desfasex,isoy(x*anchurabloque,y*anchurabloque)+desfasey < alturanavegador
            ){
                var array = contextomapacolores.getImageData(x,y,1,1).data
                
                if(array[0] == 42 && array[1] == 42 && array[2] == 42 ){
                   contextofondo.drawImage(
                       bloqueasfalto,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }
                if(array[0] == 67 && array[1] == 66 && array[2] == 66 ){
                   contextofondo.drawImage(
                       bloqueacera,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }
                if(array[0] == 90 && array[1] == 90 && array[2] == 90 ){
                   contextofondo.drawImage(
                       bloquepavimento,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }
                if(array[0] == 138 && array[1] == 138 && array[2] == 138 ){
                   contextofondo.drawImage(
                       bloquepavimentocasa,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }
                if(array[0] == 65 && array[1] == 96 && array[2] == 54 ){
                   contextofondo.drawImage(
                       bloquejardin,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }
               if(array[0] == 111 && array[1] == 133  && array[2] == 104 ){
                   contextofondo.drawImage(
                       bloquevallajardin,
                       isox(x*anchurabloque,y*anchurabloque)+desfasex,
                       isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez,
                       anchuradibujo,
                       anchuradibujo
                    );
               }

                var centro = contextomapaarquitectura.getImageData(x,y,1,1).data
                var arriba = contextomapaarquitectura.getImageData(x,y-1,1,1).data
                var abajo = contextomapaarquitectura.getImageData(x,y+1,1,1).data
                var derecha = contextomapaarquitectura.getImageData(x+1,y,1,1).data
                var izquierda = contextomapaarquitectura.getImageData(x-1,y,1,1).data

                
                if(centro[3] == 255){
                        if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 255 && derecha[3] == 255){
                       contextofondo.drawImage(
                           bloquearquitecturax,
                           isox(x*anchurabloque,y*anchurabloque)+desfasex,
                           isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                           anchuradibujo,
                           anchuradibujo*3
                    );

                }
                //BLOQUES SIMPLES 
                    
                if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 0 && derecha[3] == 0){
                contextofondo.drawImage(
                bloquearquitecturasimple1,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 0 && abajo[3] == 0 && izquierda[3] == 255 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitecturasimple2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
            
                //PUERTA
                if(centro[0] == 255 && centro[1] == 0 && centro[2] == 0){
              
                }
                    
  
                //VENTANAS 
                    
                if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 0 && derecha[3] == 0 && centro[0] == 0 && centro[1] == 255 && centro[2] == 0 ){
                contextofondo.drawImage(
                bloquearquitecturaventana1,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 0 && abajo[3] == 0 && izquierda[3] == 255 && derecha[3] == 255 && centro[0] == 0 && centro[1] == 255 && centro[2] == 0 ){
                contextofondo.drawImage(
                bloquearquitecturaventana2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }

                    
                if(arriba[3] == 0 && abajo[3] == 0 && izquierda[3] == 255 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitecturasimple2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                    
              //T
                    
                if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 255 && derecha[3] == 0){
                contextofondo.drawImage(
                bloquearquitecturat4,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 255 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitecturat3,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                
                if(arriba[3] == 0 && abajo[3] == 255 && izquierda[3] == 255 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitecturat2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 255 && abajo[3] == 255 && izquierda[3] == 0 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitecturat2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                    
            //L
                    
                if(arriba[3] == 255 && abajo[3] == 0 && izquierda[3] == 255 && derecha[3] == 0){
                contextofondo.drawImage(
                bloquearquitectural4,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 255 && abajo[3] == 0 && izquierda[3] == 0 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitectural3,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                
                if(arriba[3] == 0 && abajo[3] == 255 && izquierda[3] == 255 && derecha[3] == 0){
                contextofondo.drawImage(
                bloquearquitectural2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );

                }
                    
                if(arriba[3] == 0 && abajo[3] == 255 && izquierda[3] == 0 && derecha[3] == 255){
                contextofondo.drawImage(
                bloquearquitectural2,
                isox(x*anchurabloque,y*anchurabloque)+desfasex,
                isoy(x*anchurabloque,y*anchurabloque)+desfasey-pixeles.data[i]*alturabloquez-300,
                anchuradibujo,
                anchuradibujo*3
                    );
                }                 
            }
        }                          
    }                   
}
}


function posinicialjugador(){
    contextomapapersonajes.drawImage(mapapersonajes,0,0)
       var pixeles = contextomapapersonajes.getImageData(0,0,512,512);
    for(var i = 0;i<pixeles.data.length;i+=4){
        var cr = pixeles.data[i];
        var cg = pixeles.data[i+1];
        var cb = pixeles.data[i+2];
        var ca = pixeles.data[i+3];
        var x = (((i)%(512))/4*8);
        var y = Math.floor((i/512)/4*8);
        if(ca == 255){
            if(cr == 0 && cg == 255 && cb == 0 && ca == 255){
                posx = x*4;
                posy = y*4;
            }
        }
    }
}

function creaenemigos(){
     var pixeles = contextomapapersonajes.getImageData(0,0,512,512);
    for(var i = 0;i<pixeles.data.length;i+=4){
        var cr = pixeles.data[i];
        var cg = pixeles.data[i+1];
        var cb = pixeles.data[i+2];
        var ca = pixeles.data[i+3];
        var x = (((i)%(512))/4*8);
        var y = Math.floor((i/512)/4*8);
        if(ca == 255){
            if(cr == 255 && cg == 0 && cb == 0 && ca == 255){
            
            arraypersonajes[numeropersonajes] = new Personaje;
            arraypersonajes[numeropersonajes].x = x*4
            arraypersonajes[numeropersonajes].y = y*4
            numeropersonajes++;
            }
        }
    }
}

function creaprops(){
    contextomapaprops.drawImage(mapaprops,0,0)
    var pixeles = contextomapaprops.getImageData(0,0,512,512);
    for(var i = 0;i<pixeles.data.length;i+=4){
        var cr = pixeles.data[i];
        var cg = pixeles.data[i+1];
        var cb = pixeles.data[i+2];
        var ca = pixeles.data[i+3];
        var x = (((i)%(512))/4*8);
        var y = Math.floor((i/512)/4*8);
        if(ca == 255){
            if(cr == 255 && cg == 0 && cb == 0 && ca == 255){
            arrayprops[numeroprops] = new Props;
            arrayprops[numeroprops].x = x*4-4
            arrayprops[numeroprops].y = y*4-4
            arrayprops[numeroprops].z = contextomapa.getImageData(x,y,1,1).data[0]
            numeroprops++;
            }
        }
    }
}

function crearecogibles(){
    contextomaparecogibles.drawImage(maparecogibles,0,0)
    var pixeles = contextomaparecogibles.getImageData(0,0,512,512);
    for(var i = 0;i<pixeles.data.length;i+=4){
        var cr = pixeles.data[i];
        var cg = pixeles.data[i+1];
        var cb = pixeles.data[i+2];
        var ca = pixeles.data[i+3];
        var x = (((i)%(512))/4*8);
        var y = Math.floor((i/512)/4*8);
        if(ca == 255){
            if(cr == 255 && cg == 0 && cb == 0 && ca == 255){
            arrayrecogibles[numerorecogibles] = new Recogibles;
            arrayrecogibles[numerorecogibles].x = x*4-4
            arrayrecogibles[numerorecogibles].y = y*4-4
            arrayrecogibles[numerorecogibles].z = contextomapa.getImageData(x,y,1,1).data[0]

            numerorecogibles++;
            }
        }
    }
}

function creaobjetivo(){
     var pixeles = contextomapapersonajes.getImageData(0,0,512,512);
    for(var i = 0;i<pixeles.data.length;i+=4){
        var cr = pixeles.data[i];
        var cg = pixeles.data[i+1];
        var cb = pixeles.data[i+2];
        var ca = pixeles.data[i+3];
        var x = (((i)%(512))/4*8);
        var y = Math.floor((i/512)/4*8);
        if(ca == 255){
            if(cr == 0 && cg == 0 && cb == 255 && ca == 255){
                    premiox = x*4
                    premioy = y*4;
            }
        }
    }
}
    