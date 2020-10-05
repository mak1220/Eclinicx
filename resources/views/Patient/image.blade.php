@extends('Patient.EncounterNote')
@section('encounter')


<div class="container">
    <div ><!---unnecessary div--->
              @foreach($data as $item)
          @endforeach
             <div class="from-control" style="width: 95%;border: 1px solid silver;background: white;border-radius: 4px;margin-left:2%">
                 <div class="col-sm-12" >
                <a href="{{url('NoteEncounter')}}/{{$item->id}}" >
                <button type="button"  class="btn btn-default" id="note" style="margin-left: 15%;">NOTE</button>
                   </a>
                      <a href="{{url('OrderEncounter')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="order" >ORDERS</button>
                   </a>
                    <a href="{{url('NurseOrder')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="nure" >NURSING ORDERS</button>
                   </a>
                      <a href="{{url('EncounterAttach')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="attach" >ATTACHMENTS</button>
                   </a>
                    <a href="{{url('image')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="image" >IMAGES</button>
                   </a>
                      <a href="{{url('refferel')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default"id="ref">REFFEREL</button>
                   </a>
                    <a href="{{url('Sign')}}/{{$item->id}}" >
                     <button type="button"  class="btn btn-default" id="sign" >SIGN</button>
                   </a>
                      
                 
                </div>



              <div class="row" style="background-color:orange;width:100%;font-size:20px;margin-left: 1px">
                  <b style="color:white">Image</b>
        
                 </div>
        


       <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="Modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Image Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">                   
          <form action="{{url('imagee')}}" method="POST" enctype="multipart/form-data"> 
          @csrf  
          <div class="form-group row">
    
       @foreach($data as $item)
      @endforeach
      <input type="hidden"  name="patient" value="{{$item->id}}">
    
  </div>  
          <div class="form-group" > 
            <b>Description</b> 
            <input type="text" class="form-control" name="desc" placeholder="Description" required > 
          </div>
          <div class="form-group" > 
            <b>File</b> 
            <input type="file" class="form-control" name="file" placeholder="File">
          </div>
          <div>
            



          <div class="row">
           <div class="col-sm-6" >
           <div class="col-sm-9" style="border: 1px solid black;width: 100%;height: 120px" >
            <canvas id="canvas"  style="width: 330%;height: 178px;margin-top: -18px;margin-left: -5%"></canvas>
         </div>
         </div> 

           <div class="col-sm-6" >
           <div class="col-sm-9" style="border: 1px solid black;width: 100%;height: 120px" >
            <img src="" alt="Image not found" width="150" height="119">
         </div>
       </div>
       </div> 

     <a href="#" data-toggle="modal"  data-target="#my">
            <div class="form-group">
           <div class="col-sm-12">
               <button class="btn btn-danger" id="camera" style="width:49%;margin-left: 50%;margin-top: 20px">Camera Load</button>
              </div>
             </div>
              </a>

          </div>
             <div class="modal-footer">
              <button class="btn btn-primary" type="submit"  >Save</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" >Cancel</button>
                </div>
            
         </form>
           </div>
           </div>
                    </div>
                    </div>
                       <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="my">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Web Cam</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
           <div class="modal-body">
          <div class="video-wrap">
            <video id="video" playsinline autoplay></video>
          </div> 
             
         <div class="modal-footer">
       <button  type="submit" class="btn btn-success" class="close" data-dismiss="modal" id="snap" style="width: 100%;height:35px;">Take Snapshot</button>
      <button type="button" class="btn btn-danger"  style="width: 100%;height:35px;" class="close" data-dismiss="modal" >Cancel</button>
      </div>  
            
         
           </div>
             </div>
                    </div>
                    </div>
 
                    
                </div>
                </div>
            
            </div>
                    <a href="#" data-toggle="modal"  data-target="#Modal">
                     <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;">+ Attach Image</button> </a> 
 
                    
                </div>
                </div>
            
            </div>
               @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif 
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-sm-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="datatable">
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Description</th>
                      <th style="text-align: center;">Image</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(App\image::all() as $item)
                    <tr>
                      <td style="text-align: center;">{{$item->id}}</td>
                      <td style="text-align: center;">{{$item->Description}}</td>
                      <td style="text-align: center;"><img src="{{asset('uploads/equipment/'.$item->File)}}" width="60px" height="60px"></td>
                      <td style="text-align: center;"><a href="{{url('updateimage')}}/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="{{url('removedimage')}}/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a>
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
</div>
</div>
</div>
   <script type="text/javascript">
     'use strict';


   const video=document.getElementById('video');
    const snap=document.getElementById('snap');
     const canvas=document.getElementById('canvas');
      const errorMsgElement=document.getElementById('spanErrorMsg');

      const constraints={
        audio:true,
        video:{
         width:460,height:300

        }

      };
      async function init(){
        try{

        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
        }
        catch(e){

            errorMsgElement.innerHTML='navigator.getUserMedia.error:${e.toString()}';

        }
      }
       function handleSuccess(stream){
        window.stream=stream;
        video.srcObject=stream;
       }

       init();
       var context = canvas.getContext('2d');
       snap.addEventListener("click",function(){
        context.drawImage(video,0,15,100,100);
       })
   </script> 

@endsection

@section('code')
 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
  </script>
@endsection

