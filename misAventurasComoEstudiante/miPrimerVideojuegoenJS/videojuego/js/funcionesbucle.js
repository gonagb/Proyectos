// Función para detectar colisión entre el personaje y el terreno
function colisionpersonajeterreno() {
    // Obtener el píxel del personaje en el mapa
    var pixelpersonaje = contextomapa.getImageData(Math.round(posx / 50) + 1, Math.round(posy / 50) + 1, 1, 1);

    for (var i = 0; i < pixelpersonaje.data.length; i += 4) {
        var cr = pixelpersonaje.data[i];
        var ca = pixelpersonaje.data[i + 3];

        // Calcular la posición vertical del personaje basada en el color del píxel
        posz = cr * alturabloquez;

        // Si el píxel es transparente (ca == 0), el personaje ha caído
        if (ca == 0) {
            console.log("Te has caído");
            velocidadz *= 1.3;
            posz += velocidadz;
        }
    }

    // Si la posición vertical supera cierto límite, reiniciar la ubicación del personaje
    if (posz > 800) {
        window.location = window.location;
    }
}

// Función para calcular el desplazamiento de parallax
function calculodesfase() {
    // Calcular el punto medio del navegador en el eje x e y
    var mediopantallax = anchuranavegador / 2;
    var mediopantallay = alturanavegador / 2;

    // Calcular el desplazamiento en x e y respecto al punto medio
    desfasex = mediopantallax - isox(posx, posy);
    desfasey = mediopantallay - isoy(posx, posy);
}

// Función para dibujar personajes NPC
function pintanpc() {
    for (var i = 0; i < numeropersonajes; i++) {
        var a = posx - arraypersonajes[i].x;
        var b = posy - arraypersonajes[i].y;
        var distancia = Math.sqrt(a * a + b * b);

        // Si el personaje está cerca, persigue al personaje principal
        if (distancia < 400) {
            arraypersonajes[i].persigue();
        } else {
            arraypersonajes[i].mueve();
        }

        // Si el personaje NPC está muy cerca, reduce la energía del personaje principal
        if (distancia < 20) {
            energia--;
        }

        // Obtener el valor de ytemp según la dirección isométrica del personaje NPC
        var ytemp;
        if (arraypersonajes[i].direccionisometrica == 0) {
            ytemp = 0;
        } else if (arraypersonajes[i].direccionisometrica == 1) {
            ytemp = 512;
        } else if (arraypersonajes[i].direccionisometrica == 2) {
            ytemp = 1024;
        } else if (arraypersonajes[i].direccionisometrica == 3) {
            ytemp = 1536;
        }

        // Dibujar al personaje NPC si está dentro de la vista
        if(
            isox(arraypersonajes[i].x,arraypersonajes[i].y)+desfasex > -100
            &&
            isox(arraypersonajes[i].x,arraypersonajes[i].y)+desfasex < anchuranavegador
            &&
            isoy(arraypersonajes[i].x,arraypersonajes[i].y)+desfasey > -100
            &&
            isoy(arraypersonajes[i].x,arraypersonajes[i].y)+desfasey < alturanavegador
        ){ 
            contexto.drawImage(
            imagennpc1,
            arraypersonajes[i].estadoanim*256,
            ytemp+256,
            256,
            256,
            isox(arraypersonajes[i].x,arraypersonajes[i].y)+desfasex,
            isoy(arraypersonajes[i].x,arraypersonajes[i].y)+desfasey - arraypersonajes[i].z * alturabloquez,
            128,
            128
         );
      

            // Dibujar la barra de energía del personaje NPC
            contexto.fillStyle = "black";
            contexto.fillRect(
                isox(arraypersonajes[i].x, arraypersonajes[i].y) + 32 + desfasex,
                isoy(arraypersonajes[i].x, arraypersonajes[i].y) + desfasey - arraypersonajes[i].z * alturabloquez,
                64, 10
            );

            contexto.fillStyle = "green";
            contexto.fillRect(
                isox(arraypersonajes[i].x, arraypersonajes[i].y) + 32 + 2 + desfasex,
                isoy(arraypersonajes[i].x, arraypersonajes[i].y + 2) + desfasey - arraypersonajes[i].z * alturabloquez,
                60 * (arraypersonajes[i].z.energia / 100),
                6
            );
        }
    }
}

// Función para dibujar recogibles
function pintarecogibles(){    
     for(var i = 0;i<numerorecogibles;i++){
          var a = posx - arrayrecogibles[i].x;
            var b = posy - arrayrecogibles[i].y;
            var distancia = Math.sqrt( a*a + b*b )
            if(distancia < 50){
                console.log("Hay una poción cerca, recogela!")
                arrayrecogibles.splice(i, 1);
                numerorecogibles--;
                energia += 20;
            }
        //console.log("el tipo es: "+arrayrecogibles[i].tipo)
        if(arrayrecogibles[i].tipo == 1){
             contexto.drawImage(
                imagenrecogible1,
                isox(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasex,
                isoy(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasey-arrayrecogibles[i].z*alturabloquez,
                128,
                128
            );
        }
        if(arrayrecogibles[i].tipo == 2){
             contexto.drawImage(
                imagenrecogible2,
                isox(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasex,
                isoy(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasey-arrayrecogibles[i].z*alturabloquez,
                128,
                128
            );
        }
        if(arrayrecogibles[i].tipo == 3){
             contexto.drawImage(
                imagenrecogible3,
                isox(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasex,
                isoy(arrayrecogibles[i].x,arrayrecogibles[i].y)+desfasey-arrayrecogibles[i].z*alturabloquez,
                128,
                128
            );
        }          
    }
}

// Función para dibujar props
function pintaprops() {
    for (var i = 0; i < numeroprops; i++) {
        // Dibuja props
        contexto.drawImage(
            imagenprop1, 
            isox(arrayprops[i].x, arrayprops[i].y) + desfasex, 
            isoy(arrayprops[i].x, arrayprops[i].y) + desfasey - arrayprops[i].z * alturabloquez, 128, 128);
    }
}

// Función para dibujar al personaje principal
function pintapersonaje() {
    if (saltando == true) {
        saltopersonaje += velocidadz;
        velocidadz -= 5;
        if (saltopersonaje < 0) {
            saltando = 0;
        }
    }

    // Actualizar la animación del personaje
    if ((moviendo == true && accion == false) || accion == true) {
        estadoanimacion++;
        if (estadoanimacion > 7) {
            estadoanimacion = 0;
            accion = false;
        }
    } else {
        estadoanimacion = 1;
    }

    // Dibujar el personaje principal con o sin acción
    if (accion == true) {
        contexto.drawImage(
            imagenpersonajeaccion,
            estadoanimacion * 256,
            angulo + 256,
            256,
            256,
            isox(posx, posy) + desfasex,
            isoy(posx, posy) + desfasey - posz - saltopersonaje,
            128,
            128
        );
    } else {
        contexto.drawImage(
            imagenpersonaje,
            estadoanimacion * 256,
            angulo + 256,
            256,
            256,
            isox(posx, posy) + desfasex,
            isoy(posx, posy) + desfasey - posz - saltopersonaje,
            128,
            128
        );
    }

    // Dibujar la barra de energía del personaje principal
    contexto.fillStyle = "black";
    contexto.fillRect(
        isox(posx, posy) + 32 + desfasex,
        isoy(posx, posy) + desfasey - posz - saltopersonaje,
        64, 10
    );

    contexto.fillStyle = "green";
    contexto.fillRect(
        isox(posx, posy) + 32 + 2 + desfasex,
        isoy(posx, posy + 2) + desfasey - posz - saltopersonaje,
        60 * (energia / 100),
        6
    );
}

// Función para manejar colisiones con accesorios
function colisionprops() {
    // Determinar la dirección del personaje y verificar la solidez del píxel correspondiente
    if (direccion == 1) {
        var solido = contextomapaarquitectura.getImageData(Math.floor((posx) / 50) + 1, Math.floor((posy - velocidad) / 50) + 1, 1, 1).data[3];
        // console.log("solido es:" + solido);

        // Mover hacia arriba si no hay solidez
        posy -= velocidad;
        angulo = 512;
    } else if (direccion == 2) {
        var solido = contextomapaarquitectura.getImageData(Math.floor((posx) / 50) + 1, Math.floor((posy + velocidad) / 50) + 1, 1, 1).data[3];

        // Mover hacia abajo si no hay solidez
        posy += velocidad;
        angulo = 1536;
    } else if (direccion == 3) {
        var solido = contextomapaarquitectura.getImageData(Math.floor((posx - velocidad) / 50) + 1, Math.floor((posy) / 50) + 1, 1, 1).data[3];

        // Mover hacia la izquierda si no hay solidez
        posx -= velocidad;
        angulo = 0;
    } else if (direccion == 4) {
        var solido = contextomapaarquitectura.getImageData(Math.floor((posx + velocidad) / 50) + 1, Math.floor((posy) / 50) + 1, 1, 1).data[3];

        // Mover hacia la derecha si no hay solidez
        posx += velocidad;
        angulo = 1024;
    }
}

// Función para dibujar la recompensa
function pintopremio() {
    contexto.drawImage(imagenpremio, isox(premiox, premioy) + desfasex, isoy(premiox, premioy) + desfasey);

    // Calcular la distancia entre el personaje principal y la recompensa
    var a = posx - premiox;
    var b = posy - premioy;
    var distancia = Math.sqrt(a * a + b * b);

    // Si el personaje principal está lo suficientemente cerca, subir de nivel
    if (distancia < 30) {
        console.log("¡Premio!");
        subirnivel();
    }
}

// Función para manejar la muerte del personaje principal
function muere() {
    if (energia < 0) {
        // Mostrar pantalla inicial, reiniciar y pausar el juego
        $("#pantallainicial").fadeIn("slow");
        reiniciar();
        contexto.clearRect(0, 0, anchuranavegador, alturanavegador);
        pausa = true;
    }
}