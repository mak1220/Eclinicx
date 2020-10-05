@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">MEDS Instruction</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Doctor</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">medsinstruction</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">MEDS instruction Update </h1>
                        
                        </div>
                        
           <div class="modal-body">
          <form action="{{url('MedInstructUpdate')}}" method="POST"> 
          @csrf
          <div class="col-sm-8" style="margin-left: 100px">
          <div class="form-group" >
           
            <input type="hidden"  name="id" value="{{$data->id}}" required> 
          </div>  
           <div class="form-group" >
            <b>MEDS Instruction</b> 
            <input type="text" class="form-control" name="med" value="{{$data->Frequency_Name}}" required> 
          </div>   
          <div class="form-group" > 
            <b>Frequency Instruction Details</b> 
            <input type="text" class="form-control" name="desc" value="{{$data->Frequency_Description}}" required> 
          </div>
    
       <div class="modal-footer">
         <button class="btn btn-primary" type="submit" style="margin-right: 240px;width: 30%">Update</button>
         
      </div> 
      </div> 
            
         </form>
           </div>
             </div>
                    </div>
                    </div>
         
              
        
@endsection
