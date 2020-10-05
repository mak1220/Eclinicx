<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Supplier</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div ><!---unnecessary div--->
                 <div class="card-header">
                <h3 class="card-title">All Patients Details</h3>
                  </div>

  

       <div class="col-sm-10">

          <div class="modal-body"> 

      <form action="{{url('sms')}}" method="post">  
            @csrf
            <div class="row">
            <div class="col-md-6" >
           <div class="col-sm-8">
          <div class="modal-body"> 
             <div class="form-group">
             <label for="email">MRN</label> 
             <input type="text" class="form-control" name="mrn"  placeholder="MRN" style="background-color:#eeeeee"> 
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
             <input type="radio" name="Male" >Male</label>         
            <label class="radio-inline"><input type="radio" name="Female" >Female</label>
            <label class="radio-inline"><input type="radio" name="Others" >Others</label>
            </div>
            
            <label> 
           <label style="font-family: 'Source Sans Pro',sans-serif;margin-top:20px;" >Date Of Birth</label>
             <div class="form-group" style="width:370px">
             <input type="date" name="date"  placeholder="Select Date" class="form-control"  >
           </div>
             
            </label>        
             
           <div class="form-group"> 
           <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Age</label>
             <input type="text" class="form-control" name="age" placeholder="Patient Age" style="background-color:#ffcccb"> 
             </div>
            
            
             <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Address</label>
               <input type="text" class="form-control" name="address" placeholder="Patient Address" > 
             </div>
            
            
            <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Phone1</label> 
              <input type="text" class="form-control" name="phone" placeholder="Patient Phone1" >
               </div>
            
            
            <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >Patient Phone2</label>
               <input type="text" class="form-control" name="phone2" placeholder="Patient Phone2" >
                </div>
            
            
            
            
            
              <div class="form-group"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >    
               Patient Discount</label>
             <select name="discount" class="browser-default custom-select">
              <option name="discount" value="">No discount</option>                                
              <option name="discount" value="10%">10%</option>
              <option name="discount" value="20%">20%</option>
               <option name="discount" value="30%">30%</option>
               <option name="discount" value="50%">50%</option>
               <option name="discount" value="70%">70%</option>
              <option name="discount" value="100%">100%</option>
                </select> 
          
               </div>
            
               <div class="form-group">
              <label style=" font-family: 'Source Sans Pro',sans-serif;" >    
                 Patient Discount Cash  </label> 
                 <input type="number" class="form-control" placeholder="Patient Discount Cash" >
                 </div>
            
       
                   <div> <h1 style="font-size:18px; font-family: 'Source Sans Pro',sans-serif;"><b>SMS</b></h1><label class="radio-inline">
                  <input type="radio" name="English" >Enlish</label>         
                 <label class="radio-inline"><input type="radio" name="Urdu">Urdu</label>
                  <label class="radio-inline"><input type="radio" name="Nosms">No-SMS</label>
                  </div>
                  
                  
                   </div>
                       </div>
                           </div>
      
      
                       <div class="col-md-6">
                        <div class="col-sm-8">
                            <div class="modal-body">                   
                        
                         <label style="font-family: 'Source Sans Pro',sans-serif;" >Register Date</label>
                           <div class="form-group" style="width:370px">
                               <input type="date" name="reg" class="form-control" placeholder="Register Date"  >
                 </div>
        
                    <div class="form-group"> 
                     <label for="email">NIC</label> 
                     <input type="number" class="form-control" name="nic" placeholder="NIC" >
                    </div>
                    <div class="form-group"> 
                    <label >Patient Internal Reference</label> 

                 <select name="ref" class="browser-default custom-select">
                 <option name="ref" value="admin@admin.com">admin@admin.com</option>                                
                  <option name="ref" value="doctor@doctor.com">doctor@doctor.com</option>
                  </select> 
                   </div> 
            
                  <div class="form-group"> 
                  <label style=" font-family: 'Source Sans Pro',sans-serif;" >Occupation</label> 
                 <input type="text" class="form-control" name="occu" placeholder="Occupation">
                  </div>
            
                <h3 style=" font-family: 'Source Sans Pro',sans-serif;" >Other Details</h3>
                <div class="form-control" rows="5" style="height: 650px">
                   <div class="form-group"> 
                    <label >Tags</label> 

                    <select name="tag" class="browser-default custom-select">
                     <option name="tag" value="Diabatic">Diabatic</option>                                
                    <option name="tag" value="Alergy">Alergy</option>
                     <option name="tag" value="Heart">Heart</option>
                    <option name="tag" value="Peads">Peads</option>
                    <option name="tag" value="Pregnency">Pregnency</option>
                      <option name="tag" value="Low Blood Pressure">Low Blood Pressure</option>
                     <option name="tag" value="High Blood Pressure">High Blood Pressure</option>
                      </select> 
                     </div>
            
            
                    <div class="form-group">
                     <label style=" font-family: 'Source Sans Pro',sans-serif;" >Remarks:</label>
                      <div class="form-group"> <textarea class="form-control" name="mark" placeholder="Enter your remarks" rows="5"></textarea></div>
               </div>
              
                <div class="row">
                <div class="col-sm-6" style="height: 250px"> 
              <canvas id="canvas" style="width: 300%;height: 300px"></canvas>
                 </div>
                   <div class="col-sm-6" style="height: 250px"> 
              <label style=" font-family: 'Source Sans Pro',sans-serif;margin-left: 10px" >Image</label> 
              <div class="media" >
              <img src="{{ asset('dist/img/mobi.jpg') }}" alt="User Avatar" style="width: 98%;height: 200px">
               </div>
              </div>
                 </div>
                  <div class="row" style="margin-bottom: 10px">
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
                <button class="btn btn-warning" type="submit" style="width: 25%;height:35px;margin-bottom: 5px;margin-left: 75%;margin-top: 2%">Update</button>
               </div>
    
                <div class="col-sm-12">
               <a href="patients"> <button class="btn btn-primary" style="width: 25%;height:35px;margin-left: 75%">Cancle</button></a>
               </div>   
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
</script>
</body>
</html>
