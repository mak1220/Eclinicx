@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Supplier</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
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
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Supplier Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">                   
          <form action="" method="POST" class="was-validated"> 
          @csrf 
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Supplier Name</label>
             <div class="col-sm-8">
              <input type="text" class="form-control" name="name" placeholder="Supplier Name" required> 
           </div>
         </div> 
          @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror
           <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Supplier Address</label>
             <div class="col-sm-8">
              <input type="text" class="form-control" name="address" placeholder="Supplier Address" required> 
           </div>
         </div> 
          @error('address')
          <span style="color:red">{{$message}}</span>
          @enderror
           <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Supplier Phone</label>
             <div class="col-sm-8">
              <input type="tel" class="form-control" name="phone" placeholder="Supplier Phone"required > 
           </div>
         </div>  
          @error('phone')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Supplier Mobile</label>
             <div class="col-sm-8">
               <input type="tel" class="form-control" name="mobile" placeholder="Supplier Mobile" required>
           </div>
         </div> 
          @error('mobile')
          <span style="color:red">{{$message}}</span>
          @enderror 
           <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Supplier Email</label>
             <div class="col-sm-8">
              <input type="email" class="form-control" name="email" placeholder="Supplier Email" required>
           </div>
         </div>
          @error('email')
          <span style="color:red">{{$message}}</span>
          @enderror 
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Submit</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
            
         </form>
           </div>
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ Add New Supplier</button> </a> 
 
                    
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Supplier Details</h3>
                
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
                <table class="table table-hover text-nowrap" id="datatable">
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;font-size: 13px">ID</th>
                      <th style="text-align: center;font-size: 13px">Status</th>
                      <th style="text-align: center;font-size: 13px">Supplier Name</th>
                      <th style="text-align: center;font-size: 13px">Supplier Address</th>
                      <th style="text-align: center;font-size: 13px">Supplier Phone</th>
                      <th style="text-align: center;font-size: 13px">Supplier Mobile</th>
                      <th style="text-align: center;font-size: 13px">Supplier Email</th>
                      <th style="text-align: center;font-size: 13px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td style="text-align: center;font-size: 13px">{{$item->id}}</td>
                      <td style="text-align: center;font-size: 13px"><!--<span class="badge bg-danger">Not Active</span>--><span class="badge bg-success">Active</span></td>
                      <td style="text-align: center;font-size: 13px">{{$item->Supplier_Name}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Supplier_Address}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Supplier_Phone}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Supplier_Mobile}}</td>
                      <td style="text-align: center;font-size: 13px">{{$item->Supplier_Email}}</td>
                      <td style="text-align: center;font-size: 13px"><a href="updated/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="removed/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
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