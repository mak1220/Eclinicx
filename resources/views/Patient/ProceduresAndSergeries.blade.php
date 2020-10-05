@extends('Patient.EncounterNote')
@section('encounter')



    <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="Modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Procedures/Sergeries Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">                   
          <form action="{{url('ProAndSergeries')}}" method="POST" enctype="multipart/form-data"> 
          @csrf  
          <div class="form-group row">
      @foreach($data as $item)
      @endforeach
      <input type="hidden"  name="patient" value="{{$item->id}}">
    
  </div>
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Name</label req>
    <div class="col-sm-8">
      <select name="name" class="browser-default custom-select" required>
             <option name="name" value="">-No Choose-</option>  
             @foreach(App\proced::all() as $proced)                              
            <option name="name" value="{{$proced->Procedure_Name}}">{{$proced->Procedure_Name}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Doctor</label>
    <div class="col-sm-8">
     <!-- <input type="text" class="form-control date-time"  name="doctor" placeholder="Procedure/Sergeries" required>-->
     <select name="doctor" class="browser-default custom-select" required>
             <option name="doctor" value="">-No Choose-</option>  
             @foreach(App\doct::all() as $proced)                              
            <option name="doctor" value="{{$proced->Doctor_Name}}">{{$proced->Doctor_Name}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Hospital</label>
    <div class="col-sm-8">
      <!--<input type="text" class="form-control" name="hospital" placeholder="Procedure/Sergeries">-->
      <select name="hospital" class="browser-default custom-select" required>
             <option name="hospital" value="">-No Choose-</option>  
             @foreach(App\hospital::all() as $proced)                              
            <option name="hospital" value="{{$proced->Hospital}}">{{$proced->Hospital}}</option>
              @endforeach
              </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="date" id="datepicker">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Origin Date</label>
    <div class="col-sm-8">
       <input type="text" class="form-control" name="origin" id="datepicker1">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Attachment</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" name="file">
    </div>
  </div>
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Procedures/Sergeries<br>Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="desc">
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
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ Add Procedures/Sergery</button> </a> 
 
                    
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
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Name</th>
                      <th style="text-align: center;">Doctor</th>
                      <th style="text-align: center;">Hospital</th>
                      <th style="text-align: center;">Date</th>
                      <th style="text-align: center;">Origin Date</th>
                      <th style="text-align: center;">Description</th>
                      <th style="text-align: center;">File</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(App\ProAndSer::all() as $item)
                    <tr>
                      <td style="text-align: center;">{{$item->id}}</td>
                      <td style="text-align: center;">{{$item->Sergery_Name}}</td>
                      <td style="text-align: center;">{{$item->Sergery_Doctor}}</td>
                      <td style="text-align: center;">{{$item->Sergery_Hospital}}</td>
                      <td style="text-align: center;">{{$item->Sergery_Date}}</td>
                      <td style="text-align: center;">{{$item->Origin_Date}}</td>
                      <td style="text-align: center;">{{$item->Sergery_Description}}</td>
                      <td style="text-align: center;"><img src="{{asset('uploads/equipment/'.$item->Sergery_Attachment)}}" width="60px" height="60px"></td>
                      
                      <td style="text-align: center;"><a href="{{url('ProAndSerUpdate')}}/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="{{url('SerDelete')}}/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
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