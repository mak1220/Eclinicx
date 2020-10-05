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
            <div class="row" style="width: 100%">
                <div class="col-md-12">
                  <div class="container-fluid">
                   
                  <h3 class="container p-3 my-3 bg-dark text-white">Attachment For:
     
   </h3>
                
                </div>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Attachment Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button> <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
         <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        @csrf
        
          <b>Attachment Details</b>
           <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Attachment Details" required>
            
        </div>
        @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror 
        <b>Attachment File</b>
          <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fa fa-file" aria-hidden="true"></i></span>
            </div>
          </div>
          <input type="file" name="file" class="form-control" required>
        </div>
        @error('file')
          <span style="color:red">{{$message}}</span>
          @enderror 
        
       
       
            <button type="submit" class="btn btn-primary" style="margin-left: 300px">Save</button>
               <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>  
         </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                    
          <button type="button"  class="btn btn-primary" style="margin-top: 10px;margin-left: 50px;width: 20%;">+ New Attachment</button>
             
                   </a> 
                   <a href="equipment" >
                  <div style="margin-bottom: 10px;">
                     <button type="button"  class="btn btn-primary" style="margin-top: 5px;margin-left: 50px;width: 20%;"><i class="far fa-hand-point-left" aria-hidden="true"></i>Back</button>
                  </div>
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
                 <h3 class="card-title">Attachment Details</h3>
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
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Attachment Details</th>
                      <th style="text-align: center;">File</th>
                      <th style="text-align: center;">Actions</th>
                    </tr>
                  </thead>
                  <tbody> 
                    @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;font-size: 14px">{{$item->id}}</td>
                       <td style="text-align: center;font-size: 14px">{{$item->Attachment_Details}}</td>
                      <td style="text-align: center;font-size: 14px"><img src="{{asset('uploads/equipment/'.$item->Attachment_FIle)}}" width="60px" height="60px"></td>
                      <td style="text-align: center;font-size: 14px" ><a href="Attachmentupdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a>
                      <a href="Attachmentdelete/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i> </a> </td>
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

