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
                <div class="modal fade" id="Modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Attachment Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                         
                        
                        <div class="modal-body">  

          <form action="{{url('EncounterAttachment')}}" method="POST" enctype="multipart/form-data"> 
          @csrf 
           <div class="form-group row">
    
                @foreach($data as $item)
              @endforeach
             <input type="hidden"  name="patient" value="{{$item->id}}">
    
          </div> 
           <div class="form-group" > 
            <b>Attachment Name</b> 
            <input type="text" class="form-control" name="name" placeholder="Attachment Name" required> 
          </div>
           <div class="form-group" > 
            <b>Attachment Type</b> 
          <input type="text" class="form-control" name="type" placeholder="Attachment Type" required> 
          </div>
          <div class="form-group" > 
            <b>Attachment Description</b> 
            <input type="text" class="form-control" name="desc" placeholder="Attachment Description"required > 
          </div>
          <div class="form-group" > 
            <b>Attachment File</b> 
            <input type="file" class="form-control" name="file" placeholder="Attachment File" required> 
          </div>
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
            
         </form>
           </div>
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#Modal">
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ Add Attachment</button> </a> 
 
                    
                </div>
                </div>
            
            </div>

              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-sm-12">
            <div class="card">
               @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif 
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="datatable">
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;font-size: 17px">ID</th>
                      <th style="text-align: center;font-size: 17px">Name</th>
                      <th style="text-align: center;font-size: 17px">Description</th>
                      <th style="text-align: center;font-size: 17px">Type</th>
                      <th style="text-align: center;font-size: 17px">File</th>
                      <th style="text-align: center;font-size: 17px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(App\Attachment::all() as $item)
                    <tr>
                      <td style="text-align: center;font-size: 17px">{{$item->id}}</td>
  
                      <td style="text-align: center;font-size: 17px">{{$item->PName}}</td>
                      <td style="text-align: center;font-size: 17px">{{$item->desc}}</td>
                      <td style="text-align: center;font-size: 17px">{{$item->Type}}</td>
                      <td style="text-align: center;font-size: 17px"><img src="{{asset('uploads/equipment/'.$item->File)}}" width="60px" height="60px"></td>
                    
                      <td style="text-align: center;font-size: 17px"><a href="{{url('EncounterAttachmentUpdate')}}/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="{{url('removedAttachment')}}/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
                       </td>
                    </tr>
                   
                     @endforeach
                    
                  </tbody>
                </table>
                <script>
              function checkdelete()
              {
                 return confirm("Are you sure you want to delete this data");

                }
             </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
            <!-- /.card-body -->
         
  </section>

    













 

</div>
</div>
</div>

@endsection
@section('code')

 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
  </script>

@endsection
