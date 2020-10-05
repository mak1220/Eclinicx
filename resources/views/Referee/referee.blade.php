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
            <div class="row" style="width: 100%">
                <div class="col-md-12">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Referee Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
           <div class="modal-body">
          <form action="" method="POST" class="was-validated"> 
          @csrf 
           <div class="form-group row">
          <label for="title" class="col-sm-4 col-form-label">Referee Name</label>
         <div class="col-sm-8">
         <input type="text" name="name" class="form-control" placeholder="Referee name" required>
         </div>
         </div>  
           @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror
          <div class="form-group row">
          <label for="title" class="col-sm-4 col-form-label">Referee Phone</label>
         <div class="col-sm-8">
         <input type="tel" name="phone" class="form-control" placeholder="Referee phone" required>
         </div>
         </div> 
          @error('phone')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="form-group row">
          <label for="title" class="col-sm-4 col-form-label">Referee Email</label>
         <div class="col-sm-8">
         <input type="text" name="email" class="form-control" placeholder="Referee email" required>
         </div>
         </div>
           @error('email')
          <span style="color:red">{{$message}}</span>
          @enderror
          <div class="form-group row">
          <label for="title" class="col-sm-4 col-form-label">Referee Hospital</label>
         <div class="col-sm-8">
         <select name="hospital" style="width: 300px" id="host" required>
             <option name="hospital" value=""></option>  
             @foreach(App\hospital::all() as $hospital)                              
            <option name="hospital" value="{{$hospital->Hospital}}">{{$hospital->Hospital}}</option>
              @endforeach
              </select>
         </div>
         </div>
           @error('hospital')
          <span style="color:red">{{$message}}</span>
          @enderror

          <div class="form-group row">
          <label for="title" class="col-sm-4 col-form-label">Referee Share</label>
         <div class="col-sm-8">
         <select name="discount" class="browser-default custom-select" required>
     <option name="discount" value="">No discount</option>                                
    <option name="discount" value="10%">10%</option>
    <option name="discount" value="20%">20%</option>
    <option name="discount" value="30%">30%</option>
    <option name="discount" value="50%">50%</option>
    <option name="discount" value="70%">70%</option>
    <option name="discount" value="100%">100%</option>
   </select>
         </div>
         </div>
    @error('discount')
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
           <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">New Referee</button>
           </a> 
 
                    
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px; " >
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Referee Details</h3>
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
                      <th style="text-align: center;font-size: 80%">ID</th>
                      <th style="text-align: center;font-size: 80%">Referee Name</th>
                      <th style="text-align: center;font-size: 80%">Referee phone</th>
                      <th style="text-align: center;font-size: 80%">Referee Email</th>
                      <th style="text-align: center;font-size: 80%">Referee Hospital</th>
                      <th style="text-align: center;font-size: 80%">Referee Share </th>
                      <th style="text-align: center;font-size: 80%">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($data as $item)
                      <tr>
                        <td style="text-align: center;font-size: 80%">{{$item->id}}</td>
                        <td style="text-align: center;font-size: 80%">{{$item->Referee_Name}}</td>
                      <td style="text-align: center;font-size: 80%">{{$item->Referee_Phone}}</td>
                        <td style="text-align: center;font-size: 80%">{{$item->email}}</td>
                         <td style="text-align: center;font-size: 80%">{{$item->Referee_Hospital}}</td>
                      <td style="text-align: center;font-size: 80%">{{$item->Referee_Share}}</td>
                         
                      <td style="text-align: center;font-size: 80%"><a href="updat/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i></a> 
                      <a href="deleted/{{$item->id}}" class="btn btn-danger" onclick="return checkdelete()"><i class="fas fa-trash-alt"></i> </a></td>
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