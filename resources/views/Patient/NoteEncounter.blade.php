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




                <!--Notes-->
                 <div class="row" style="background-color:orange;width:100%;font-size:20px;margin-left: 1px">
                  <b style="color:white">NOTE</b>
        
                 </div>
        
        
        
        <div class="d-inline-flex p-2">
        <div class="row" style="margin-top:20px" >
            
        <div class="col-sm-12" style="margin-left: 20%">
            
             <div class="form-group " style="width:80%;float:left;">
  <label for="comment"><b>Complaint:</b></label>
  <textarea class="form-control" rows="1" id="comment" style="height:150px"></textarea>
</div> 
            
            <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>PERS.HX:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
   <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>PLAN:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
  </div>    
      
        
        </div>
        
         <div class="row" style="margin-top:20px" >
            
        <div class="col-sm-12" style="margin-left: 10%">
            
             <div class="form-group" style="width:80%;float:left;" >
  <label for="comment"><b>HOPI:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
            <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>EXAM:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
             <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>FOR NURSE:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
            </div>    
            
            
            
            
          
        
        </div>
        
        
        
        
         <div class="row" style="margin-top:20px">
            
        <div class="col-sm-12" >
            
             <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>PAST HX:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
            <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>CURRENT DIAGNOSIS:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
             <div class="form-group" style="width:80%;float:left;">
  <label for="comment"><b>PAST DX:</b></label>
  <textarea class="form-control" rows="1" id="comment"  style="height:150px"></textarea>
</div> 
            
            </div>    
            </div>
             </div>







</div>
</div>
</div>

           

@endsection




