@extends('Patient.EncounterNote')
@section('encounter')



    <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;text-align: center">Procedures/Sergeries Details</h1>
                        
                        </div>
                        
                        <div class="modal-body">                   
          <form action="{{url('ProAndSergerUpdate')}}" method="POST" enctype="multipart/form-data"> 
          @csrf  
           <div class="col-sm-8" style="margin-left: 20%">
           <div class="form-group row">
           @foreach($data as $itemm)
           @endforeach
    <div class="col-sm-8">
      <input type="hidden"  name="id" value="{{$itemm->iD}}">
    </div>
  </div>
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Name</label req>
    <div class="col-sm-8">
    
      <select name="name" class="browser-default custom-select" required>
             <option name="name" value="{{$itemm->Sergery_Name}}">{{$itemm->Sergery_Name}}</option>  
             @foreach(App\proced::all() as $proced)                              
            <option name="name" value="{{$proced->Procedure_Name}}">{{$proced->Procedure_Name}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Doctor</label>
    <div class="col-sm-8">
      
      <select name="doctor" class="browser-default custom-select" required>
             <option name="doctor" value="{{$itemm->Sergery_Doctor}}">{{$itemm->Sergery_Doctor}}</option>  
             @foreach(App\doct::all() as $proced)                              
            <option name="doctor" value="{{$proced->Doctor_Name}}">{{$proced->Doctor_Name}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Hospital</label>
    <div class="col-sm-8">
     
     <select name="hospital" class="browser-default custom-select" required>
             <option name="hospital" value="{{$itemm->Sergery_Hospital}}">{{$itemm->Sergery_Hospital}}</option>  
             @foreach(App\hospital::all() as $proced)                              
            <option name="hospital" value="{{$proced->Hospital}}">{{$proced->Hospital}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="date" value="{{$itemm->Sergery_Date}}" id="datepicker">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Origin Date</label>
    <div class="col-sm-8">
       <input type="text" class="form-control" name="origin" value="{{$itemm->Origin_Date}}" id="datepicker1">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Attachment</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" name="file" value="{{$itemm->Sergery_Attachment}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="desc" value="{{$itemm->Sergery_Description}}">
    </div>
  </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary saveEvent">Save </button>
      </div> 
      </div> 
         </form>
         
           </div>
           </div>
                    </div>
                    </div>
                  
              
          

@endsection