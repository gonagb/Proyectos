// Aqui me gustaría incluir todo el codigo de FullCalendar que al final se está haciendo enorme
// El problema es que cuando lo paso a este archivo me da error toda la pagina

document.addEventListener('DOMContentLoaded', function() {
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