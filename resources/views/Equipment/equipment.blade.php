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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Add Equipments Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button> <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
         <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        @csrf
        
          <b>Equipment Name</b>
           <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Equipment Name" required>
            
        </div>
         @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror 
        <b>Purchase Date</b>
         <div class="form-group dates"> 
         <input type="text" class="form-control" name="purchas" id="datepicker" placeholder="Purchase Date" required>
           </div>
         @error('purchase')
          <span style="color:red">{{$message}}</span>
          @enderror 
         <b>Maintinence Date</b>
       <div class="form-group dates"> 
         <input type="text" class="form-control" name="maintinence" id="datepicker1" placeholder="Maintinence Date" required>
           </div>
         @error('main')
          <span style="color:red">{{$message}}</span>
          @enderror 

          <b>Equipment Supplier</b>
          <div class="input-group mb-3">
             <select name="sup" class="browser-default custom-select" required>
             <option name="sup" value="Appolo Surgical">Appolo Surgical</option>                     
             <option name="sup" value="Fazal Din">Fazal Din</option>
             <option name="sup" value="Pakistan Medical Store">Pakistan Medical Store</option> 
             <option name="sup" value="Alharam">Alharam</option> 
             </select>  
        </div>
         @error('sup')
          <span style="color:red">{{$message}}</span>
          @enderror 
        <b>Purchase Proof</b>
          <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fa fa-file" aria-hidden="true"></i></span>
            </div>
          </div>
          <input type="file" name="proof" class="form-control" required>
        </div>
         @error('proof')
          <span style="color:red">{{$message}}</span>
          @enderror


        
     
       
            <button type="submit" class="btn btn-primary" style="margin-left: 300px">Register</button>
               <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>  
         </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                    
          <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">Add Equipment</button>
             
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
                 <h3 class="card-title">Equipment Details</h3>
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
                      <th style="text-align: center;font-size: 13px">code</th>
                      <th style="text-align: center;font-size: 13px">Status</th>
                      <th style="text-align: center;font-size: 13px">Name</th>
                      <th style="text-align: center;font-size: 13px">Equip-Date</th>
                      <th style="text-align: center;font-size: 13px">Purchase</th>
                      <th style="text-align: center;font-size: 13px">Maintinence</th>
                      <th style="text-align: center;font-size: 13px">Purchase File</th>
                      <th style="text-align: center;font-size: 13px">Supplier</th>
                      <th style="text-align: center;font-size: 13px">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;font-size: 13px">HPEQ-00{{$item->id}}</td>
                        <td style="text-align: center;"><span class="badge bg-success">Active</span></td>
                       <td style="text-align: center;font-size: 13px">{{$item->Equipment_Name}}</td>
                       <td style="text-align: center;font-size: 13px">{{$item->created_at}}</td>
                       <td style="text-align: center;font-size: 13px">{{$item->Purchase_Date}}</td>
                       <td style="text-align: center;font-size: 13px">{{$item->Purchase_Maintinence}}</td>
                       <td style="text-align: center;font-size: 13px"><img src="{{asset('uploads/equipment/'.$item->Purchase_File)}}" width="60px" height="60px"></td>
                       <td style="text-align: center;font-size: 13px">{{$item->Equipment_Supplier}}</td>
                      <td style="text-align: center;font-size: 13px" ><a href="equipupdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a>
                      <a href="equipdelete/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i> </a>
                     <a href="EquipAttachment" class="btn btn-primary"> <i class="fa fa-paperclip" aria-hidden="true"></i></a> </td>
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

@section('time1')
<script type="text/javascript">
                 $(document).ready( function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
@endsection
@section('time2')
             <script type="text/javascript">
                $(document).ready( function () {
                    $('#datetimepicker2').datetimepicker();
                });
            </script>
@endsection

