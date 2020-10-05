<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!--<div id="message"></div>-->
        <form id="formEvent">
  <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Title</label req>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" name="title" required>
      <input type="hidden" name="id">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Start Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control date-time" id="start" name="start" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">End Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control date-time" id="end" name="end">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Event Color</label>
    <div class="col-sm-8">
      <input type="color" class="form-control" id="color" name="color">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Description</label>
    <div class="col-sm-8">
      <textarea name="description" id="description" row="10" col="40"></textarea>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger deleteEvent">Delete</button>
         <button type="button" class="btn btn-primary saveEvent">Save </button>
      </div>
    </div>
  </div>
</div>
<script>
  $(function(){



    $(".btn-danger").click(function(){

      let id=$("#modalCalendar input[name='id']").val();

      let Event={

         id: id,
         _method: 'DELETE'
        };

      let route = routeEvents('routeEventDelete');
       sendEvent(route,Event);

    });


  $(".btn-primary").click(function(){

    let title= $("#modalCalendar input[name='title']").val();
       
        let id=$("#modalCalendar input[name='id']").val();
        
        let start=moment($("#modalCalendar input[name='start']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

        let end=moment( $("#modalCalendar input[name='end']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss")
       
        let color=$("#modalCalendar input[name='color']").val();
        
        let description= $("#modalCalendar textarea[name='description']").val();

        let Event={

          title:title,
          start: start,
          end: end,
          color:color,
          description:description,
        };

         let route;
        if(id=='')
        {
        route = routeEvents('routeEventStore');

        }
        else
        { 
           route = routeEvents('routeEventUpdate');
           Event.id=id;
           Event._method='PUT';

        }

        sendEvent(route,Event);
       


  });

  });
</script>