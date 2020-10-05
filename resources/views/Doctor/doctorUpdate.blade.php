@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Doctors</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">doctors</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Update Doctors Details</h1>
                
                        </div>
                        
           <div class="modal-body">
          <form action="{{url('doctorUpdate')}}" method="post"> 
          @csrf  
          <div class="col-sm-8" style="margin-left: 100px">
          <div class="form-group" >
            <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div>
           <div class="form-group" >
            <b>Doctor Name</b> 
            <input type="text" class="form-control" name="name" value="{{$data->Doctor_Name}}" required> 
          </div> 
          <div class="form-group" >
           <b>Phone Number</b> 
           <input type="tel" class="form-control" name="phone" value="{{$data->Phone_Number}}" required> 
         </div> 
         <div class="form-group" >
           <b>Licence Number</b> 
           <input type="text" class="form-control" name="licence" value="{{$data->Doctor_Licence}}" required> 
         </div> 
         <div class="form-group" >
         <b >Doctor Status</b>
    <select name="status" id="host" style="width: 650px" required>
    <option name="status" value="{{$data->Status}}">{{$data->Status}}</option>   
    @foreach(App\status::all() as $item)                          
    <option name="status" value="{{$item->Status}}">{{$item->Status}}</option>
    @endforeach
   </select>  
 </div>
 <div class="form-group" >
   <b >Doctor Department</b>
    <select name="depart" class="browser-default custom-select" required>
    <option name="depart" value="{{$data->id}}">{{$data->Doctor_Department}}</option>
    <option name="depart" value="FAMILIY MEDICINE">FAMILIY MEDICINE</option>
    <option name="depart" value="GYNEA">GYNEA</option>
    <option name="depart" value="RADIOLOGY">RADIOLOGY</option>
   </select>
 </div>
          <div class="form-group" > 
            <b>Doctor Email</b> 
            <input type="email" class="form-control" name="email" value="{{$data->email}}" required> 
          </div>
    
   <div class="modal-footer">
       <button class="btn btn-primary" type="submit" style="width: 30%;margin-right: 240px">Update</button>
      
      </div>  
            </div>
         </form>
           </div>
             </div>
                    </div>
                    </div>
              

@endsection