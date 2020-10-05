@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Referee</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">referee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Update Referee Details</h1>
                        </div>
                        
           <div class="modal-body">
          <form action="{{url('refUpdate')}}" method="post"> 
          @csrf  
          <div class="col-sm-8" style="margin-left: 100px">
          <div class="form-group" >
             
            <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div> 
           <div class="form-group" >
            <b>Referee Name</b> 
            <input type="text" class="form-control" name="name" value="{{$data->Referee_Name}}" required> 
          </div> 
          <div class="form-group" >
           <b>Referee Phone</b> 
           <input type="tel" class="form-control" name="phone" value="{{$data->Referee_Phone}}" required> 
         </div>  
          <div class="form-group" > 
            <b>Referee Email</b> 
            <input type="email" class="form-control" name="email" value="{{$data->email}}" required> 
          </div>
           <div class="form-group" > 
            <b>Referee Hospital</b> 
            
             <select name="hospital" style="width: 100%" id="host" required>
             <option name="hospital" value="{{$data->Referee_Hospital}}">{{$data->Referee_Hospital}}</option>  
             @foreach(App\hospital::all() as $hospital)                              
            <option name="hospital" value="{{$hospital->Hospital}}">{{$hospital->Hospital}}</option>
              @endforeach
              </select>
          </div>
    <b >Referee share</b>
    <select name="discount" class="browser-default custom-select">
     <option name="discount" value="{{$data->Referee_Share}}">{{$data->Referee_Share}}</option>
     <option name="discount" value="">No Discount</option>                                
    <option name="discount" value="10%">10%</option>
    <option name="discount" value="20%">20%</option>
    <option name="discount" value="30%">30%</option>
    <option name="discount" value="50%">50%</option>
    <option name="discount" value="70%">70%</option>
    <option name="discount" value="100%">100%</option>
   </select> 
   <div class="modal-footer">
       <button class="btn btn-primary" type="submit" style="width: 30%;margin-right: 40%" >Update</button>
      
      </div>  
            </div>
         </form>
           </div>
             </div>
                    </div>
                    </div>
         
              
           
@endsection
