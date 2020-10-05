@extends('Patient.EncounterNote')
@section('encounter')



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
          <form action="{{url('PastMedics')}}" method="POST" enctype="multipart/form-data"> 
          @csrf 
          <div class="form-group row">
    
       @foreach($data as $item)
      @endforeach
      <input type="hidden"  name="patient" value="{{$item->id}}">
    
  </div> 
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Medicine Name</label >
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="Medicine " required>
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Medicine Dose</label>
    <div class="col-sm-8">
      <input type="text" class="form-control date-time"  name="dose" placeholder="Medicine " required>
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Medicine Frequency</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="frequency" placeholder="Medicine ">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Duration</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="duration" placeholder="Medicine ">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Medicine Doctor</label>
    <select name="doctor" id="host" style="width: 63%;margin-left: 2%">
             <option name="doctor" value=""></option>   
             @foreach(App\doct::all() as $d)                             
            <option name="doctor" value="{{$d->Doctor_Name}}">{{$d->Doctor_Name}}</option>
             @endforeach
      </select> 
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Medicine Date</label>
    <div class="col-sm-8">
       <input type="test" class="form-control datepicker2" placeholder="Medicine Date" name="date" >
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Origin Date</label>
    <div class="col-sm-8">
      <input type="test" class="form-control datepicker3" placeholder="Origin Date" name="origin">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Attachment</label>
    <div class="col-sm-8">
      <input type="file" class="form-control " name="attach" >
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Medicine Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="desc" placeholder="Medicine Description" >
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
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ New Detial</button> </a> 
 
                    
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
                      <th style="text-align: center;font-size: 13px">File</th>
                      <th style="text-align: center;font-size: 13px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(App\PastMedic::all() as $item)
                    <tr>
                      <td style="text-align: center;font-size: 13px">{{$item->id}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->PName}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Dose}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Freq}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Dura}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Date}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->OrigDate}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Desc}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Doctor}}</td>
                      <td style="text-align: center;font-size: 13px"><img src="{{asset('uploads/equipment/'.$item->Attach)}}" width="60px" height="60px"></td>
                      
                      <td style="text-align: center;font-size: 13px"><a href="{{url('Pastupdated')}}/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="{{url('PastDelete')}}/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
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





@endsection

@section('code')

 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
  </script>

@endsection