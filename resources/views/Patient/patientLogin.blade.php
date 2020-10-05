@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patient</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div ><!---unnecessary div--->
               @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif

  

       <div class="col-sm-12">

          <div class="modal-body"> 

      <form action="patients" method="POST">  
            @csrf
            <div class="row">
            <div class="col-md-5" style="margin-left: 70px">
          
             <div class="form-group">
             <label for="email">MRN</label> 
             <input type="text" class="form-control" placeholder="MRN" style="background-color:#eeeeee" readonly> 
            </div>  
             <div class="form-group"> 
              <label for="email">MRN-X</label> 
              <input type="text" class="form-control" name="mrnx" placeholder="MRN-X" >
             </div> 
            <div class="form-group">
             <label >Patient Name</label>
              <input type="text" class="form-control"name="name" placeholder="Patient Name" style="background-color:#ffcccb"> 
            </div>  
            
            
            <div> 
              <h1 style="font-size:18px; font-family: 'Source Sans Pro',sans-serif;">
                <b>Gender</b>
              </h1>
             <label class="radio-inline">
             <input type="radio" name="gender" value="Male">Male</label>         
            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
            <label class="radio-inline"><input type="radio" name="gender" value="Others">Others</label>
            </div>        
             
           <div class="form-group"> 
           <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Age</label>
             <input type="text" class="form-control" name="age" placeholder="Patient Age" style="background-color:#ffcccb"> 
             </div>
            
            
             <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Address</label>
               <input type="text" class="form-control" name="address" placeholder="Patient Address" > 
             </div>
            
            
            <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Phone</label> 
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Patient Phone1" >
               </div>
    
            
              <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >    
               Patient Discount</label>
             <select name="disc" class="browser-default custom-select">
              <option name="disc" value="">No discount</option>                                
              <option name="disc" value="10%">10%</option>
              <option name="disc" value="20%">20%</option>
               <option name="disc" value="30%">30%</option>
               <option name="disc" value="50%">50%</option>
               <option name="disc" value="70%">70%</option>
              <option name="disc" value="100%">100%</option>
                </select> 
          
               </div>
            
               <div class="form-group">
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >    
                 Patient Discount Cash  </label> 
                 <input type="number" name="cash" class="form-control" placeholder="Patient Discount Cash" >
                 </div>
            
       
                   <div> <h1 style="font-size:18px; font-family: 'Source Sans Pro',sans-serif;"><b>SMS</b></h1><label class="radio-inline">
                  <input type="radio" name="English" >English</label>         
                 <label class="radio-inline"><input type="radio" name="Urdu">Urdu</label>
                  <label class="radio-inline"><input type="radio" name="Nosms">No-SMS</label>
                  </div>
              
                 
              </div>
            
            <div class="col-md-5">
              <div class="form-group dates"> 
                     <label for="email">Registration date</label> 
                     <input type="text" class="form-control" name="reg" id="datepicker" placeholder="dd-mm-yyyy" >
                    </div>

                  <div class="form-group"> 
                     <label for="email">CNIC</label> 
                     <input type="text" class="form-control" name="nic" id="cnic" placeholder="NIC" >
                    </div>
                    <div class="form-group"> 
                    <label >Patient Internal Reference</label> 

                 <select name="ref"  id="host" style="width: 100%">
                  <option name="ref" value=""></option> 
                  @foreach(App\dash::all() as $item)                          
                  <option name="ref" value="{{$item->FirstName}} {{$item->LastName}}">{{$item->FirstName}} {{$item->LastName}}</option>
                  @endforeach
                  </select> 
                   </div> 
            
                  <div class="form-group"> 
                  <label style=" font-family: 'Source Sans Pro',sans-serif;" >Occupation</label> 
                 <input type="text" class="form-control" placeholder="Occupation">
                  </div>
            
                <h3 style=" font-family: 'Source Sans Pro',sans-serif;" >Other Details</h3>
                <div class="form-control" rows="5" style="height: 620px">
                   <div class="form-group"> 
                    <label >Tags</label> 

                    <select  name="tag" id="tag" style="width: 100%">
                      <option name="tag" value=""></option> 
                      @foreach(App\tag::all() as $tag)
                     <option name="tag" value="{{$tag->Tag}}">{{$tag->Tag}}</option>
                     @endforeach
                      </select> 
                     </div>
            
            
                    <div class="form-group">
                     <label style=" font-family: 'Source Sans Pro',sans-serif;" >Remarks:</label>
                      <div class="form-group"> <textarea class="form-control" name="mark"  placeholder="Enter your remarks" rows="5"></textarea></div>
               </div>
              
                <div class="row">
                <div class="col-sm-6" style="height: 200px"> 
              <canvas id="canvas" style="width: 300%;height: 265px"></canvas>
                 </div>
                   <div class="col-sm-6" style="height: 250px"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;margin-left: 10px" >Image</label> 
              <div class="media" >
              <img src="{{ asset('dist/img/mobi.jpg') }}" alt="User Avatar" style="width: 98%;height: 170px">
               </div>
              </div>
                 </div>
                  <div class="row" style="margin-top: -20px;margin-bottom: 10px">
                <div class="col-sm-12" > 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >FIle Image</label> 
              <input type="file" class="form-control" name="file" style="padding-top: 3px;" > 
             </div>
                 </div>
              
            
            <a href="#" data-toggle="modal"  data-target="#myModal">
            <div class="form-group">
           <div class="col-sm-12">
               <button class="btn btn-danger" id="camera" style="width: 100%;height:35px;">Camera Load</button>
              </div>
             </div>
              </a>
             </div>
      
               <div class="col-sm-12">
                <button class="btn btn-warning" type="submit" style="width: 50%;height:35px;margin-bottom: 5px;margin-left: 55%;margin-top: 2%">Save</button>
               </div>
    
                <div class="col-sm-12">
               <a href="patients"> <button class="btn btn-primary" style="width: 50%;height:35px;margin-left: 55%">Cancle</button></a>
               </div>   
            </div>
          </div>
          
          </form>
                  
                   </div>
                       </div>
                           </div>



                    <div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="myModal">
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

                

       
        
            
<script language="JavaScript">
   
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



       

       $('#cnic').mask("99999-9999999-9");

       
      $(document).ready( function () {
   
    $('#tag').select2({
     placeholder:'Please select',
     allowClear:true,
      matcher:function(term, text) 
      { 
        return text.toUpperCase().indexOf(term.toUpperCase())==0;
       }
    });
} 
);  
         
       



</script>
           
           

    
@endsection

