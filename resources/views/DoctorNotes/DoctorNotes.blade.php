@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">DoctorNotes</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Doctor</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">doctornotes</li>
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
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">DoctorNotes Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
           <div class="modal-body">
          <form action="" method="POST" class="was-validated"> 
          @csrf  
           <div class="form-group" >
            <b>Note Name</b> 
            <input type="text" class="form-control" name="name" placeholder="Note Name" required> 
          </div>
           @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror  
          <div class="form-group" >
          <b >Show On Prescription</b>
         <select name="pers" class="browser-default custom-select" required>
         <option name="pers" value="NO">NO</option>                                
         <option name="pers" value="YES">YES</option>
         </select>  
         </div>
          @error('pers')
          <span style="color:red">{{$message}}</span>
          @enderror   
          <div class="form-group" > 
            <b>Note Description</b> 
            <input type="text" class="form-control" name="desc" placeholder="Note Description" required> 
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
           <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;"><b>+</b> New DoctorNotes</button>
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
                      <th style="text-align: center;">Note Name</th>
                      <th style="text-align: center;">Note Description</th>
                      <th style="text-align: center;">Show On Prescription</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;">{{$item->id}}</td>
                        <td style="text-align: center;">{{$item->Note_Name}}</td>
                        <td style="text-align: center;">{{$item->Note_Description}}</td>
                        <td style="text-align: center;">{{$item->Show_On_Prescription}}</td>
                        <td style="text-align: center;"><a href="NoteUpdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a> 
                        <a href="Notedelete/{{$item->id}}" class="btn btn-danger" onclick="return checkdelete()"><i class="fas fa-trash-alt"></i> </a></td>
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