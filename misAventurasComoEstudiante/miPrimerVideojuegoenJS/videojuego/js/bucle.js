/* Esta función representa el bucle principal del juego */
function bucle() {
    /* Al principio de cada bucle, limpiamos el lienzo anterior en el navegador y en el punto de referencia */
    contexto.clearRect(0, 0, anchuranavegador, alturanavegador);
    contextopunto.clearRect(0, 0, 512, 512);
    /* Dibujamos un pequeño punto en el mapa para indicar la posición actual del personaje */
    contextopunto.fillRect(posx / 50, posy / 50, 5, 5);
    /* Dibujamos el terreno del juego */
    dibujaterreno();
    /* Detectamos colisiones entre el personaje y el terreno */
    colisionpersonajeterreno();
    /* Calculamos el desplazamiento de parallax */
    calculodesfase();
    /* Dibujamos a los personajes NPC en la pantalla */
    pintanpc();
    /* Dibujamos los objetos recolectables en la pantalla */
    pintarecogibles();
    /* Dibujamos los accesorios en la pantalla */
    pintaprops();
    /* Dibujamos al personaje principal en la pantalla */
    pintapersonaje();
    /* Manejamos las colisiones con accesorios */
    colisionprops();
    /* Dibujamos la recompensa en la pantalla y comprobamos si el personaje ha muerto */
    pintopremio();
    muere();
    /* Limpiamos el temporizador actual */
    clearTimeout(temporizador);
    /* Si el juego no está en pausa, configuramos un nuevo temporizador para ejecutar el bucle nuevamente */
    if (pausa == false) {
        temporizador = setTimeout("bucle()", 33);
    }
}