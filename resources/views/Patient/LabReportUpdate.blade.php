@extends('Patient.EncounterNote')
@section('encounter')





    <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;text-align: center">Report Details</h1>
                         
                        </div>
                        
                        <div class="modal-body">                   
          <form action="{{url('LabUpdate')}}" method="POST" enctype="multipart/form-data"> 
          @csrf  
       @foreach($data as $itemm)
           @endforeach
           <div class="col-sm-8" style="margin-left: 20%"> 
          <div class="form-group row">
    
    <div class="col-sm-8">
      <input type="hidden" name="id" value="{{$itemm->iD}}">
    </div>
  </div>
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Report Type</label req>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="type" value="{{$itemm->Type}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Report Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control date-time"  name="name" value="{{$itemm->PName}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Report Doctor</label>
    <div class="col-sm-8">
      
       <select name="doctor" id="host" style="width: 100%;">
             <option name="doctor" value="{{$itemm->doctor}}">{{$itemm->doctor}}</option> 
             <option name="doctor" value="">-no choose-</option>   
             @foreach(App\doct::all() as $d)                             
            <option name="doctor" value="{{$d->Doctor_Name}}">{{$d->Doctor_Name}}</option>
             @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Report Location</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="location" value="{{$itemm->Location}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Report Date</label>
    <div class="col-sm-8">
       <input type="text" class="form-control datepicker2 " name="date" value="{{$itemm->date}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Origin Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control datepicker2" name="origin" value="{{$itemm->OrigDate}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Report Attachment</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" name="file" value="{{$itemm->Attach}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Report Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="desc" placeholder="Report Description" value="{{$itemm->desc}}">
    </div>
  </div>
            
         
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
              </div>
            </form>
         
           </div>
           </div>
                    </div>
                    </div>
                 
              
           

@endsection