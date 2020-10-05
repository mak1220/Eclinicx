@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Department</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">department</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Department Update</h1>
                        </div>
                        
         <div class="modal-body">
   
   <!--department Form-->
                            
       <form action="{{url('edite')}}" method="POST">
       @csrf  
       <div class="col-sm-8" style="margin-left: 100px">
        <div class="form-group" > 
    
         <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div>
            <b>Department Name</b>
           <div class="form-group" > 
             
         <input type="text" class="form-control" name="name" value="{{$data->Department_Name}}" required> 
          </div> 
          <div class="form-group" >
           <b>Phone Number</b> 
           <input type="tel" class="form-control" name="phone" value="{{$data->Phone_Number}}" required> 
         </div>  
            <b>Department Head</b>
             <select name="head" class="browser-default custom-select" required>
             <option name="head" value="{{$data->Department_Head}}" >{{$data->Department_Head}}</option>                       
             <option name="head" value="Taylor">Taylor</option>
                <option name="head" value="Anser">Anser</option>
             </select>  

            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" style="width: 30%;margin-right: 250px">Update</button>
            </div>
          </div>
         </form>
          <!--Form end-->             
            </div>
                </div>
               </div>
             </div>
                     
 
                    
               
              
            
@endsection