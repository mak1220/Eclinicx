@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Procedure</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">procedure</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
    
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 32%">Updata Procedure</h1>
                        </div>
                        
                        <div class="modal-body">
   
                            
          <form action="{{url('procedureUpdate')}}" method="post"> 
          @csrf  

          <div class="col-sm-8" style="margin-left: 100px">
           <div class="form-group" > 
             <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div>
           <div class="form-group" > 
            <b>Procedure Name</b> 
            <input type="text" class="form-control" name="name" value="{{$data->Procedure_Name}}" required> 
          </div>
          <div class="form-group" > 
            <b>Procedure</b> 
            <b>Charges&Fee</b> 

            <input type="number" class="form-control" name="charges" value="{{$data->Prodecure_Charges}}"  required> 
          </div>
          <b >Department</b>
         <select name="head" class="browser-default custom-select" required>
         <option name="head" value="{{$data->Procedure_Department}}" >{{$data->Procedure_Department}}</option> 
         <option name="head" value="Family Medicine">FAMILY MEDICINE</option>
         <option name="head" value="Gynae">GYNAE</option>
         <option name="head" value="Radiology">RADIOLOGY</option>
         </select> 
          <div class="modal-footer">
           <button class="btn btn-primary" type="submit" style="margin-right: 240px;width: 30%">Submit</button>
     
        </div>
      </div>
        </form>
         </div>
         </div>
                    </div>
                    </div>
              

    
@endsection