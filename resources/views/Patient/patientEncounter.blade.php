@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patients</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Details</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="Patients">Patient</a></li>
              <li class="breadcrumb-item active">Add Update Counter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">   
                  <h3 class="container p-3 my-3 bg-dark text-white">
                    @foreach($data as $nam)  
                    @endforeach
                    Patient:{{$nam->Name}}/HPN-{{$nam->ID}}
                  </h3>
                </div>
                 @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif
                <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <a href="{{url('UpdateEncounter')}}/{{$nam->ID}}" >
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ Add Encounter</button></a>
                      <a href="{{url('patients')}}" >
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;width: 15%;"><i class="fa fa-user nav-icon "></i>Patients</button>
                   </a>
                 
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row"> 
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                <table class="table table-hover text-nowrap" id="datatable" >
                  

                  <thead class="text-white-50 bg-dark">

                    <tr>
                      <th style="text-align: center;font-size: 15px">Encounter ID</th>
                      <th style="text-align: center;font-size: 15px">Date</th>
                      <th style="text-align: center;font-size: 15px">Reason</th>
                      <th style="text-align: center;font-size: 15px">Reffered By</th>
                      <th style="text-align: center;font-size: 15px">Payment</th>
                      <th style="text-align: center;font-size: 15px">Doctor</th>
                      <th style="text-align: center;font-size: 15px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($data as $item)
                    <tr>
                     
                      


                      <td style="text-align: center;font-size: 15px">HPE-{{$item->id}}</td>
                      <td style="text-align: center;font-size: 15px">{{$item->created_at}}</td>
                      <td style="text-align: center;font-size: 15px">{{$item->Rson}}</td>
                      <td style="text-align: center;font-size: 15px">{{$item->Ref}}</td>
                      <td style="text-align: center;font-size: 15px">{{$item->Note}}</td>
                      <td style="text-align: center;font-size: 15px">{{$item->Doct}}</td>
                      
                      <td style="text-align: right;">
                        <a href="{{url('patientEncounterUpdate')}}/{{$item->id}}" class="btn btn-success">
                          <i class=" fas fa-pencil-alt"> </i>
                       </a>
                      <a href="{{url('patientEncounterDelete')}}/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger">
                        <i class="fas fa-trash-alt" ></i>
                      </a>
                      <a href="{{url('patientInvoice')}}/{{$item->id}}" class="btn btn-primary">
                        <i class="far fa-file" aria-hidden="true"></i>
                      </a>
                      <a href="{{url('NoteEncounter')}}/{{$item->id}}"  class="btn btn-dark">
                        <i class="fas fa-file-alt" ></i>
                      </a>
                      <a href="{{url('perscription')}}"  class="btn btn-warning">
                        <i class="fas fa-file" ></i>
                      </a>
                      <a href="{{url('vital')}}"  class="btn btn-warning">
                        <i class="nav-icon fa fa-heartbeat" ></i>
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