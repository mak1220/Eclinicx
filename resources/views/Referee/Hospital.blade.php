
  @extends('layouts.admin')
@section('content')
 


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left;">Hospital</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">hospital</li>
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
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Create Hospital</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button> <!-- for modal dismiss-->
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
    <form action="{{url('/Hospital')}}" method="post" class="was-validated"> 
          @csrf  
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Hospital</label>
    <div class="col-sm-8">
      <input type="text" name="hospital" class="form-control" placeholder="Hospital" required>
    </div>
  </div>
         
 
 
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
            </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                    
          <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;" > Create Hospital</button>
             
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
                <h3 class="card-title">All Hospitals</h3>
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
                <table class="table table-hover text-nowrap" id="datatable" >
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Hosptal</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;">{{$item->id}}</td>
                        <td style="text-align: center;">{{$item->Hospital}}</td>
                        <td style="text-align: center;"><a href="hospitalupdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a> <a href="hospitaldelete/{{$item->id}}" class="btn btn-danger" onclick="return checkdelete()"><i class="fas fa-trash-alt"></i></a>
                      </td>
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




