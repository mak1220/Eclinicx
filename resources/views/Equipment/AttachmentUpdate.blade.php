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
                 <a href="{{url('EquipAttachment')}}" >
                  <div style="margin-bottom: 10px;">
                     <button type="button"  class="btn btn-primary" style="margin-top: 5px;margin-left: 50px;width: 20%;"><i class="far fa-hand-point-left" aria-hidden="true"></i>Back</button>
                  </div>
                </a>
               
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%;margin-left: 30%">Attachment Details</h1>
                        </div>
                        
                   <!-- Add Users form--> 
   
            <div class="modal-body">                  
         <form action="{{url('AttachmentEdit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-8" style="margin-left: 100px">
          <div class="input-group mb-3">
          <input type="hidden" name="id" value="{{$dat->id}}" required>
            
        </div>
          <b>Attachment Details</b>
           <div class="input-group mb-3">
          <input type="text" name="name" class="form-control"value="{{$dat->Attachment_Details}}" required>
            
        </div>
        <b>Attachment File</b>
          <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fa fa-file" aria-hidden="true"></i></span>
            </div>
          </div>
          <input type="file" name="file" class="form-control" value="{{$dat->Attachment_FIle}}" required>
        </div>
        
        </div>
       
            <button type="submit" class="btn btn-primary" style="margin-left: 320px;width: 10%">Update</button>
             
         </form>
                                   
            </div>
            <!-- user form end-->
           
                  
 
                    
                </div>
                </div>
            
            </div>
              
         

    
@endsection
