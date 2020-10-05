@extends('Patient.EncounterNote')
@section('encounter')



    <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
               
                    <div class="modal-header" style="margin-left: 2%">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;text-align: center">Past Medicine Details</h1>
                         
                        </div>
                       
                        <div class="modal-body">                   
          <form action="{{url('PastMedicsUpdate')}}" method="POST" enctype="multipart/form-data"> 
          @csrf 
           @foreach($data as $itemm)
            @endforeach
          <div class="col-sm-8" style="margin-left: 20%"> 
              <div class="form-group row">
    <div class="col-sm-8">
      <input type="hidden"  name="id" value="{{$itemm->iD}}">
    </div>
  </div>
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Medicine Name</label >
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" value="{{$itemm->PName}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Medicine Dose</label>
    <div class="col-sm-8">
      <input type="text" class="form-control date-time"  name="dose" value="{{$itemm->Dose}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Medicine Frequency</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="frequency" value="{{$itemm->Freq}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Duration</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="duration" value="{{$itemm->Dura}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Medicine Doctor</label>
    <div class="col-sm-8">
       
       <select name="doctor" id="host" style="width: 100%;">
             <option name="doctor" value="{{$itemm->Doctor}}">{{$itemm->Doctor}}</option>  
              <option name="doctor" value="">-no choose-</option>  
             @foreach(App\doct::all() as $d)                             
            <option name="doctor" value="{{$d->Doctor_Name}}">{{$d->Doctor_Name}}</option>
             @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Medicine Date</label>
    <div class="col-sm-8">
       <input type="text" class="form-control datepicker2" name="date" placeholder="Medicine Date" value="{{$itemm->Date}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Origin Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control datepicker2" name="origin" placeholder="Origin Date" value="{{$itemm->OrigDate}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Attachment</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" name="attach" value="{{$itemm->Attach}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="desc" value="{{$itemm->Desc}}">
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