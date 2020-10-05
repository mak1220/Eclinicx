@extends('layouts.admin')
@section('content')

</style>
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
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Update Supplier</h1>
                         
                        </div>
                        
                        <div class="modal-body">                   
          <form action="{{url('supplierUpdate')}}" method="POST"> 
          @csrf  
          <div class="col-sm-8" style="margin-left: 100px">
            <div class="form-group" > 
            
            <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div>
           <div class="form-group" > 
            <b>Supplier Name</b> 
            <input type="text" class="form-control" name="name" value="{{$data->Supplier_Name}}" required> 
          </div>
           <div class="form-group" > 
            <b>Supplier Address</b> 
          <input type="text" class="form-control" name="address" value="{{$data->Supplier_Address}}" required> 
          </div>
          <div class="form-group" > 
            <b>Supplier Phone</b> 
            <input type="tel" class="form-control" name="phone" value="{{$data->Supplier_Phone}}"required > 
          </div>
          <div class="form-group" > 
            <b>Supplier Mobile</b> 
            <input type="tel" class="form-control" name="mobile" value="{{$data->Supplier_Mobile}}" required> 
          </div>
          <div class="form-group" > 
            <b>Supplier Email</b> 
            <input type="email" class="form-control" name="email" value="{{$data->Supplier_Email}}" required> 
          </div>
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit" style="width: 30%;margin-right: 240px" >Update</button>
                
                </div>
              </div>
            
         </form>
           </div>
           </div>
                    </div>
                    </div>
                   
              
            

    
@endsection