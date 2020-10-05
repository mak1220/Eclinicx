@extends('layouts.admin')
@section('content')


</style>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left;">Users</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header" style="margin-left: 30px">
                     <a href="{{url('user')}}" class="btn btn-primary">Back</a>
                         <label style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 40%">USER PROFILE</label>
                          <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body" style="margin-left: 110px">                  
         
         <div class="container">
  <div class="list-group">
    <a class="list-group-item list-group-item-action">
      <strong>IP Address:</strong>
      <span style="margin-left: 150px">127.0.0.1</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>First Name:</strong>
      <span style="margin-left: 150px">{{$data->FirstName}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Last Name:</strong>
      <span style="margin-left: 150px">{{$data->LastName}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>User Name/Pseudo:</strong>
      <span style="margin-left: 85px">administrator</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Email:</strong>
      <span style="margin-left: 190px">{{$data->email}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Created On:</strong>
      <span style="margin-left: 145px">{{$data->created_at}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Last Login:</strong>
      <span style="margin-left: 150px">{{$data->updated_at->now()->subDays()}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Status:</strong>
      <span style="margin-left: 180px" class="btn btn-success">Active</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Company:</strong>
      <span style="margin-left: 160px">{{$data->company}}</span>
    </a>
    
    <a class="list-group-item list-group-item-action ">
      <strong>Phone:</strong>
      <span style="margin-left: 180px">{{$data->phone}}</span>
    </a>
    <a class="list-group-item list-group-item-action ">
      <strong>Group:</strong>
      <span style="margin-left: 180px" class="btn btn-danger">{{$data->company}}</span>
    </a>
    
  </div>
</div>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    
              
            

    
@endsection