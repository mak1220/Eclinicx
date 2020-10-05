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
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 36%">UPDATE USER</h1>
                          <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
         <form action="{{url('edit')}}" method="post">
        @csrf
        <div class="col-sm-8" style="margin-left: 100px">
          <div class="input-group mb-3">
          <input type="hidden" name="id" value="{{$data->id}}" required>
        </div>
           <h1 style="font-size:25px ">First Name:</h1>
           <div class="input-group mb-3">
          <input type="text" name="first" class="form-control" value="{{$data->FirstName}}" placeholder="First name" required>
            
        </div>
         <h1 style="font-size:25px ">Last Name:</h1>
         <div class="input-group mb-3">
          <input type="text" name="last" class="form-control" value="{{$data->LastName}}" placeholder="Last name" required>
          
        </div>
         <h1 style="font-size:25px ">Company:</h1>
        <div class="input-group mb-3">
          <select name="company" style="width: 700px;" id="host" required>
             <option name="company" value="{{$data->company}}">{{$data->company}}</option>   
             @foreach(App\group::all() as $group)                              
            <option name="company" value="{{$group->Group}}">{{$group->Group}}</option>
              @endforeach
              </select> 
          
        </div>
         <h1 style="font-size:25px ">Email:</h1>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Email" required>
          
        </div>
          <h1 style="font-size:25px ">Phone Number:</h1>
        <div class="input-group mb-3">
          <input type="tel" name="phone" class="form-control" value="{{$data->phone}}" placeholder="Phone" required>
          
        </div>
         <h1 style="font-size:25px ">Password:</h1>
        <div class="input-group mb-3">
          <input type="text" name="password" class="form-control" value="{{$data->password}}" placeholder="Password" required>
          
        </div>
        <h1 style="font-size:25px ">Confirm Password:</h1>
        <div class="input-group mb-3">
          <input type="text" name="cpassword" class="form-control" value="{{$data->confirm_password}}" placeholder="confirm_Password" required>
        
        </div>
        </div>
       
          
            <button type="submit" class="btn btn-primary" style="margin-left: 320px;width: 30%">Update</button>  
         </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    
              
            

    
@endsection
