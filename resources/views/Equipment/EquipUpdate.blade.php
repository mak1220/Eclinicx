@extends('layouts.admin')
@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left;">Equipments</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">equipments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Update Equipments Details</h1>
                        
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
         <form action="{{url('updateEquipment')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-8" style="margin-left: 100px">
          <div class="input-group mb-3">
          <input type="hidden" name="id" value="{{$data->id}}"  required> 
        </div>
          <b>Equipment Name</b>
           <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" value="{{$data->Equipment_Name}}" required> 
        </div>
        <b>Purchase Date</b>
        <div class="form-group dates"> 
         <input type="text" class="form-control" name="purchas"  value="{{$data->Purchase_Date}}" id="datepicker"  >
           </div>
         <b>Maintinence Date</b>
        
         <div class="form-group dates"> 
         <input type="text" class="form-control" name="maintinence"  value="{{$data->Purchase_Maintinence}}" id="datepicker1"  >
           </div>
          
        
          <b>Equipment Supplier</b>
          <div class="input-group mb-3">
             <select name="sup" class="browser-default custom-select" required>
             <option name="sup" value="{{$data->Equipment_Supplier}}">{{$data->Equipment_Supplier}}</option>                     
             <option name="sup" value="Fazal Din">Fazal Din</option>
             <option name="sup" value="Pakistan Medical Store">Pakistan Medical Store</option> 
             <option name="sup" value="Alharam">Alharam</option> 
             </select>  
        </div>
        <b>Purchase Proof</b>
          <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fa fa-file" aria-hidden="true"></i></span>
            </div>
          </div>
          <input type="file" name="proof" class="form-control" value="{{$data->Purchase_File}}" required>

        </div>
        
        </div>
       
            <button type="submit" class="btn btn-primary" style="margin-left: 300px;width: 30%">Update</button>
               
         </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                   
              

    
@endsection

@section('time1')
<script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
@endsection

@section('time2')
             <script type="text/javascript">
                $(function () {
                    $('#datetimepicker2').datetimepicker();
                });
            </script>
@endsection
