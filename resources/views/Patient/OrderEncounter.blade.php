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
                  <b style="color:white">ORDERS</b>
        
                 </div>
        


        <div class="row"> 
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Payment<br>Date</th>
                             <th >Paymwnt<br>Type</th>
                             <th >Bank<br>Name</th>
                             <th >Card/Cheque</th>
                             <th >Amount</th>
                             <th><a href="#" class="addRow"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td><input type="text" name="Date[]" class="form-control" required=""></td>
         <td><input type="text" name="Type[]" class="form-control"></td>  
         <td><input type="text" name="Bank[]" class="form-control quantity" required=""></td>
           <td><input type="text" name="card[]" class="form-control budget"></td>
           <td><input type="text" name="amount[]" class="form-control amount"></td>
         <td><a href="#" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     
                 </table>
</div>
</div>
</div>
</div>

</div>
</div>
</div>



@endsection
