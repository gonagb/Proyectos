<?php
require_once('conexionbd.php');
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Estilos CSS-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link id="mainstyle" rel="stylesheet" href="CSS Types/mainstyle.css">
<!-- Estilos CSS-->

<!-- Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
crossorigin="anonymous" referrerpolicy="no-referrer">
<!-- Font Awesome CDN-->

<!-- JQuery CDN-->
 <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
 crossorigin="anonymous"></script>
<!-- JQuery CDN--> 

<!-- Bootstrap CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
<!-- Bootstrap CDN--> 
 
<!-- Libreria FullCalendar-->
<script src='fullcalendar/dist/index.global.js'></script>
<!-- Libreria FullCalendar-->

 <script> document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendario');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: 'prev,next today NewEvButton',
      center: 'title',
      right: 'dayGridMonth timeGridWeek timeGridDay listMonth'
    },
    initialDate: '2023-01-01',
    locale: 'es',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],				 
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: true,
    selectable: true,
    themeSystem: 'bootstrap5',
    customButtons: {
      NewEvButton: {
          text: "Añadir Evento",
          click:function(){
            $("#crearEventos").fadeIn('slow'); // ESTE BOTON DEBERÍA ABRIR LA VENTANA MODAL PARA EL FORMULARIO
          }
        }

    },
    events:  [
      <?php include "eventos.php" ?> {}
                                        /* EJEMPLOS DE EVENTOS
                                        {
                                          title: 'Business Lunch',
                                          start: '2023-09-03T13:00:00',
                                          constraint: 'businessHours'
                                        },

                                        / areas where "Meeting" must be dropped
                                        {groupId: 'availableForMeeting',
                                          start: '2020-09-11T10:00:00',
                                          end: '2020-09-11T16:00:00',
                                          display: 'background'},

                                        / red areas where no events can be dropped
                                        {start: '2020-09-06',
                                          end: '2020-09-08',
                                          overlap: false,
                                          display: 'background',
                                          color: '#ff9f89'} */
                                          
            ]
      });

  calendar.render();
});   
</script>
</head>
<body>
<!-- Desplegable para cambiar el CSS-->

<style>
  .fc-non-business{
    background:orange !important;
  }
</style>
<link rel="Stylesheet" href="" id="micss">
<select id="menucss">
  <option value="Ninguna">Ninguna</option>
  <option value="Deuteranopía">Deuteranopía</option>
  <option value="Protanopía">Protanopía</option>
  <option value="Tritanopía">Tritanopía</option>
</select>
      <!-- Deuteranopía: Alteración de la visión al color rojo. Puede ser total o parcial. 
            Protanopía: Alteración de la visión al color verde. Puede ser total o parcial.
            Tritanopía: Alteración de la visión al color azul. Puede ser total o parcial. -->
    <script>
      $("#menucss").change(function(){
        console.log($(this).val())
        $("#micss").attr("href",$(this).val()+".css")
      })
    
       </script>

<!-- Desplegable para cambiar el CSS-->

          <!-- Formulario crearEventos-->
          <form id="crearEventos" style="display:none;" action="addEventos.php" method="POST">
                  <label for="eventTitle">Título del evento:</label>
                  <input type="text" id="eventTitle" name="eventTitle"><br>
                  
                  <label for="startDate">Fecha de inicio:</label>
                  <input type="datetime-local" id="startDate" name="startDate"><br>
                  
                  <label for="endDate">Fecha de finalización:</label>
                  <input type="datetime-local" id="endDate" name="endDate"><br>

                  <label for="Color">Color:</label>
                  <input type="color" id="color" name="color"><br>
                  
                  <input type="submit" value="Crear evento">
              </form>
              <!-- Formulario crearEventos-->

<!-- El Calendario-->
  <div id='calendario'></div>
<!-- El Calendario-->


</body>
</html>
