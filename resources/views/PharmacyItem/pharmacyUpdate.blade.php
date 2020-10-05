@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Pharmacy Items</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">pharmacy items</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Update Pharmacy Items Details</h1>
                         
                        </div>
                        
                        <div class="modal-body">
   
                            
          <form action="{{url('PharmacyUpdate')}}" method="post"> 
          @csrf  
          <div class="col-sm-8" style="margin-left: 100px"> 
            <div class="form-group" >  
            <input type="hidden" name="id" value="{{$data->id}}" required> 
          </div>
           <div class="form-group" > 
            <b>Item Name</b> 
            <input type="text" class="form-control" name="name" value="{{$data->Item_Name}}" required> 
          </div>
          <div class="form-group" > 
          <b >Item Typs</b>
         <select name="type" class="browser-default custom-select" required>
         <option name="type" value="{{$data->Item_Type}}">{{$data->Item_Type}}</option> 
         <option name="type" value="DISPOSIBLES">DISPOSIBLES</option>
         <option name="type" value="MEDICATIONS">MEDICATIONS</option>
         <option name="type" value="SURGICAL ITEMS">SURGICAL ITEMS</option>
         </select>
       </div>
          <div class="form-group" > 
            <b>Starting Count</b> 
            <input type="number" class="form-control" name="count" value="{{$data->Item_Count}}"  required> 
          </div>
           <div class="form-group" > 
            <b>Item Cost Price</b> 
            <input type="number" class="form-control" name="cost" value="{{$data->Item_Cost}}" required> 
          </div>
          <div class="form-group" > 
            <b>Item Description</b> 
            <input type="text" class="form-control" name="desc" value="{{$data->Item_Description}}"required> 
          </div>
           <div class="form-group" > 
            <b>Genaric Name</b> 
            <input type="text" class="form-control" name="gen" value="{{$data->Genaric_Name}}" required> 
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