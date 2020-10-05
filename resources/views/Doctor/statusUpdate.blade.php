
  @extends('layouts.admin')
@section('content')
 


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left;">Status</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Status</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Create Status</h1>
                       
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
    <form action="{{url('statusEdit')}}" method="post" class="was-validated"> 
          @csrf  
          <div class="col-sm-8" style="margin-left: 100px">
           <div class="form-group row">
         <div class="col-sm-8">
      <input type="hidden" name="id" value="{{$data->id}}">
        </div>
  </div>
           <div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label">Status</label>
    <div class="col-sm-8">
      <input type="text" name="status" class="form-control" value="{{$data->Status}}" required>
    </div>
  </div>
         
 
 
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
                </div>
            </form>
                                   
            </div>
            <!-- user form end-->
           </div>
                    </div>
                    </div>
                  
              
            
@endsection




