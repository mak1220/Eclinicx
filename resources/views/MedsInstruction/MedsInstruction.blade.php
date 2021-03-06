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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">MEDS Instruction Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
           <div class="modal-body">
          <form action="" method="POST" class="was-validated"> 
          @csrf  
           <div class="form-group" >
            <b>MEDS Instruction</b> 
            <input type="text" class="form-control" name="med" placeholder="MEDS Instruction" required> 
          </div> 
          @error('med')
          <span style="color:red">{{$message}}</span>
          @enderror   
          <div class="form-group" > 
            <b>Frequency Instruction Details</b> 
            <input type="text" class="form-control" name="desc" placeholder="Frequency Instruction Details" required> 
          </div>
          @error('desc')
          <span style="color:red">{{$message}}</span>
          @enderror 
    
       <div class="modal-footer">
         <button class="btn btn-primary" type="submit" >Save</button>
         <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
      </div>  
            
         </form>
           </div>
             </div>
                    </div>
                    </div>
         <a href="#" data-toggle="modal"  data-target="#myModal">
           <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;"><b>+</b> New MEDS Instruction</button>
           </a> 
 
                    
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-12">
            <div class="card">
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
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Frequency Name</th>
                      <th style="text-align: center;">Frequency Description</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;">{{$item->id}}</td>
                        <td style="text-align: center;">{{$item->Frequency_Name}}</td>
                        <td style="text-align: center;">{{$item->Frequency_Description}}</td>
                        <td style="text-align: center;"><a href="instructionUpdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a> 
                        <a href="instructiondelete/{{$item->id}}" class="btn btn-danger" onclick="return checkdelete()"><i class="fas fa-trash-alt"></i> </a></td>
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