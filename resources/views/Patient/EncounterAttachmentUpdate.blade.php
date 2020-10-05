@extends('Patient.EncounterNote')
@section('encounter')

 <div class="container">
    <div ><!---unnecessary div--->
             @foreach($data as $item)
             @endforeach
             <div class="from-control" style="width: 95%;border: 1px solid silver;background: white;border-radius: 4px;margin-left:2%">
                 <div class="col-sm-12" >
                <a href="{{url('NoteEncounter')}}/{{$item->id}}" >
                <button type="button"  class="btn btn-default" id="note" style="margin-left: 15%;">NOTE</button>
                   </a>
                      <a href="{{url('OrderEncounter')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="order" >ORDERS</button>
                   </a>
                    <a href="{{url('NurseOrder')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="nure" >NURSING ORDERS</button>
                   </a>
                      <a href="{{url('EncounterAttach')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="attach" >ATTACHMENTS</button>
                   </a>
                    <a href="{{url('image')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="image" >IMAGES</button>
                   </a>
                      <a href="{{url('refferel')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default"id="ref">REFFEREL</button>
                   </a>
                    <a href="{{url('Sign')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="sign" >SIGN</button>
                   </a>
                      
                 
                </div>


              <div class="row" style="background-color:orange;width:100%;font-size:20px;margin-left: 1px">
                  <b style="color:white">Attachment</b>
        
                 </div>
        


       <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
               
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;text-align: center">Attachment Details</h1>
                        
                        </div>
                         
                         @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif 
                        <div class="modal-body">  

          <form action="{{url('AttachmentEdit')}}" method="post" enctype="multipart/form-data"> 
          @csrf
          @foreach($data as $itemm)
            @endforeach
            <div class="col-sm-8" style="margin-left: 20%"> 
          <div class="form-group" > 
           
            <input type="hidden"  name="id" value="{{$itemm->iD}}" required> 
          </div>  
           <div class="form-group" > 
            <b>Attachment Name</b> 
            <input type="text" class="form-control" name="name" value="{{$itemm->PName}}" required> 
          </div>
           <div class="form-group" > 
            <b>Attachment Type</b> 
          <input type="text" class="form-control" name="type" value="{{$itemm->Type}}" required> 
          </div>
          <div class="form-group" > 
            <b>Attachment Description</b> 
            <input type="text" class="form-control" name="desc" value="{{$itemm->desc}}"required > 
          </div>
          <div class="form-group" > 
            <b>Attachment File</b> 
            <input type="file" class="form-control" name="file" value="{{$itemm->File}}" required> 
          </div>
       
             <div class="modal-footer" >
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            
         </form>
           </div>
           </div>
                    </div>
                    </div>
                   
              
              
            
    















</div>
</div>
</div>

@endsection
