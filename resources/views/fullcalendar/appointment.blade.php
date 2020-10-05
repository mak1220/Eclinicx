@extends('layouts.admin')
@section('content')

<script>

  document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      navLinks: true,
      selectable: true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
        

      },
      eventDrop: function(element){
        let start=moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        let end=moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        let newEvent={
          _method:'PUT',
          title:element.event.title,
          id:element.event.id,
          start:start,
          end:end
        };
        sendEvent(routeEvents('routeEventUpdate'),newEvent);
      },
       eventClick: function(element){

        resetForm("#formEvent");
       
        $("#modalCalendar").modal('show');
        $("#modalCalendar #titleModal").text('Change Event');
        $("#modalCalendar button.deleteEvent").css("display","flex");

        let title=element.event.title;
        $("#modalCalendar input[name='title']").val(title);
        let id=element.event.id;
        $("#modalCalendar input[name='id']").val(id);
        let start=moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='start']").val(start);
        let end=moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='end']").val(end);
        let color=element.event.backgroundColor;
        $("#modalCalendar input[name='color']").val(color);
        let description=element.event.extendedProps.description;
        $("#modalCalendar textarea[name='description']").val(description);

      },
       eventResize: function(element){
         let start=moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        let end=moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        let newEvent={
          _method:'PUT',
          title:element.event.title,
          id:element.event.id,
          start:start,
          end:end
        };
        sendEvent(routeEvents('routeEventUpdate'),newEvent);
      },
       select: function(element){
        resetForm("#formEvent");
        $("#modalCalendar").modal('show');
        $("#modalCalendar #titleModal").text('Add Event');
        $("#modalCalendar button.deleteEvent").css("display","none");

         let start=moment(element.start).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='start']").val(start);
        let end=moment(element.end).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='end']").val(end);
        
        $("#modalCalendar input[name='color']").val("#3788D8");

        calendar.unselect();
      },
      events: routeEvents('routeLoadEvents'),
    });
    calendar.render();

  });

</script>

@include('fullcalendar.modal-calendar')
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main' >Dr.Anser</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 2</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 3</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 4</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 5</div>
        </div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar-wrap'>
      <div id='calendar'
      data-route-load-events="{{route('routeLoadEvents')}}"
      data-route-event-update="{{route('routeEventUpdate')}}"
      data-route-event-store="{{route('routeEventStore')}}"
      data-route-event-delete="{{route('routeEventDelete')}}"
      ></div>
    </div>

  </div>
  

@endsection
