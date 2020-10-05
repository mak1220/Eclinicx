
  @extends('layouts.admin')
@section('content')
 


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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Create Users</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button> <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
    <form action="{{url('/user')}}" method="post" class="was-validated"> 
          @csrf  
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">First Name</label>
    <div class="col-sm-8">
      <input type="text" name="first" class="form-control" placeholder="First name" required>
    </div>
  </div>
          @error('first')
          <span style="color:red;margin-left: 160px;">{{$message}}</span>
          @enderror
  <div class="form-group row">
    <label for="start" class="col-sm-4 col-form-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text" name="last" class="form-control" placeholder="Last name" required>
    </div>
  </div>
   @error('last')
          <span style="color:red;margin-left: 160px">{{$message}}</span>
          @enderror
  <div class="form-group row">
    <label for="end" class="col-sm-4 col-form-label">Company</label>
    <div class="col-sm-8">
      <select name="company" style="width: 300px;" id="host" required>
            <option name="company" value=""></option>  
             @foreach(App\group::all() as $group)                              
            <option name="company" value="{{$group->Group}}">{{$group->Group}}</option>
              @endforeach
       </select> 
    </div>
  </div>
   @error('company')
     <span style="color:red;margin-left: 160px;">{{$message}}</span>
    @enderror
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
  </div>
   @error('email')
   <span style="color:red">{{$message}}</span>
   @enderror
  <div class="form-group row">
    <label for="description" class="col-sm-4 col-form-label">Phone</label>
    <div class="col-sm-8">
       <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
    </div>
  </div>
   @error('phone')
    <span style="color:red;margin-left: 150px;">{{$message}}</span>
   @enderror
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
  </div>
  @error('password')
  <span style="color:red;margin-left: 150px;">{{$message}}</span>
  @enderror
  <div class="form-group row">
    <label for="color" class="col-sm-4 col-form-label">Confirm password</label>
    <div class="col-sm-8">
      <input type="password" name="cpassword" class="form-control" placeholder="confirm_Password" required>
    </div>
  </div>
  @error('cpassword')
          <span style="color:red;margin-left: 150px;">{{$message}}</span>
          @enderror
 
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
            </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                    
          <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;" > Create User</button>
             
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
                <h3 class="card-title">All Users Details</h3>
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
                      <th style="text-align: center;">First name</th>
                      <th style="text-align: center;">Last name</th>
                      <th style="text-align: center;">Email</th>
                      <th style="text-align: center;">Group</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;">{{$item->FirstName}}</td>
                        <td style="text-align: center;" >{{$item->LastName}}</td>
                        <td style="text-align: center;">{{$item->email}}</td>
                         <td style="text-align: center;">{{$item->company}}</td>
                         @if(Route::has('register'))
                      <td style="text-align: center;"><span class="badge bg-success">Active</span></td>
                      @else
                      <td style="text-align: center;"><span class="badge bg-danger">Not Active</span></td>
                      @endif
                      <td style="text-align: center;"><a href="userupdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a> <a href="userdelete/{{$item->id}}" class="btn btn-danger" onclick="return checkdelete()"><i class="fas fa-trash-alt"></i></a>
                      <a href="userprofile/{{$item->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a></td>
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




