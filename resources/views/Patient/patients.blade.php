@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patients</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">patients</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <a href="patientLogin" >
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;">+ Add New Patient</button>
                 </a>
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Patients Details</h3>
                
              </div>
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
                
                <table class="table table-hover text-nowrap" id="datatable" >
                  

                  <thead class="text-white-50 bg-dark">

                    <tr>
                      <th style="text-align: center;">MRN</th>
                      <th style="text-align: center;">MRN-X</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Name</th>
                      <th style="text-align: center;">Age</th>
                      <th style="text-align: center;">Created At</th>
                      <th style="text-align: center;">Visits</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($data as $v=>$item)
                     @foreach(App\visit4::all() as $k=>$count) 
                     @if($count->pat_id==$item->id)
                       
                      @else
                        
                      @endif
                    @endforeach
                    
                    <tr>
                      
                      <td style="text-align: center;">HPN-{{$item->id}}</td>
                      <td style="text-align: center;">HP-{{$item->MRNX}}</td>
                      <td style="text-align: center;"><!--<span class="badge bg-danger">Not Active</span>--><span class="badge bg-success">SignedOff</span></td>
                      <td style="text-align: center;">{{$item->Name}}</td>
                      <td style="text-align: center;">{{$item->Age}}</td>
                      <td style="text-align: center;">{{$item->created_at}}</td>
                    
                        <td style="text-align: center;">{{$k+1}}</td>
                      
                      
                      
                      <td style="text-align: right;">
                        <a href="patientupdate/{{$item->id}}" class="btn btn-success">
                          <i class=" fas fa-pencil-alt"> </i>
                       </a>
                      <a href="patientdelete/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger">
                        <i class="fas fa-trash-alt" ></i>
                      </a>
                      <a href="AddUpdateEncounter/{{$item->id}}" class="btn btn-primary">
                        <i class="far fa-clock" aria-hidden="true"></i>
                      </a>
                      <a href="patientEncounter/{{$item->id}}"  class="btn btn-dark">
                        <i class="fas fa-list-ul" ></i>
                      </a>
                      <a href="appointment"  class="btn btn-warning">
                        <i class="fas fa-calendar-alt" ></i>
                      </a>
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
@section('scripts')
 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();

} );

  </script>
@endsection

