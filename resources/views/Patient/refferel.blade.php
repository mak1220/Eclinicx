
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
                  <b style="color:white">Refferel</b>
        
                 </div>
              
             <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="Modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Past Medicine Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">                   
          <form action="PastMedics" method="POST" enctype="multipart/form-data"> 
          @csrf  
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Reason For Refere</label >
    <div class="col-sm-8">
      <input type="text" class="form-control" name="reason" placeholder="Reason " required>
    </div>
  </div>
  
  
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary saveEvent">Save </button>
      </div>  
         </form>
         
           </div>
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#Modal">
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ New Refferel</button> </a> 
 
                    
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
                      <th style="text-align: center;font-size: 13px">ID</th>
                      <th style="text-align: center;font-size: 13px">Name</th>
                      <th style="text-align: center;font-size: 13px">Dose</th>
                      <th style="text-align: center;font-size: 13px">Frequency</th>
                      <th style="text-align: center;font-size: 13px">Duration</th>
                      <th style="text-align: center;font-size: 13px">Date</th>
                      <th style="text-align: center;font-size: 13px">Origin Date</th>
                      <th style="text-align: center;font-size: 13px">Description</th>
                      <th style="text-align: center;font-size: 13px">Doctor</th>
                      <th style="text-align: center;font-size: 13px">Fle</th>
                      <th style="text-align: center;font-size: 13px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      <td style="text-align: center;font-size: 13px"></td>
                      
                      <td style="text-align: center;font-size: 13px"><a href="Pastupdated" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="PastDelete/" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
                       </td>
                    </tr>
                   
                     
                    
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