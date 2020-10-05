
@extends('layouts.admin')
@section('content')
<div id="mainDiv">
              
            
             <!---popup start--->
            
            
            <div ><!---unnecessary div--->
            <div class="row"  >
                <div class="col-md-12"  >
               
                    <div class="modal-header">
                        <h1>Vitals</h1>
                        
                        </div>
                        
                        <div class="modal-body">
                            
                             <div class="container" style="background-color:white">
      
        <h6 style="color:blue">Weight and Height</h6>
        <form action="vitaaal" method="post">
             <div style="border:2px solid red;height:100px;border-radius:5px" >
                  <br>
        
    <div class="row" >
        
      
        <div class="col-sm-12" style="margin-top: -10px">
            
            <div style="float:left;margin-left:30px">
                
            <input type="button" value="Weight" style="width:65px" id="but">
            <input type="number" name="weight" style="margin-left:-7px;width:340px" id="inp">
            <input type="button" value="KG" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            <div style="float:left;margin-left:70px">
                
            <input type="button" value="Height" style="width:65px" id="but">
            <input type="number" name="height" style="margin-left:-7px;width:340px" id="inp">
            <input type="button" value="CM" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            </div>
        
        
        
        
        </div>
            
             <div class="row" style="margin-top:10px">
        
        <div class="col-lg-12">
            
        
            <div style="float:left;margin-left:30px">
            <input type="button" value="BMI"  id="but">
            <input type="number" name="bmi" style="margin-left:-6px;width:350px" id="inp" readonly>
            <input type="button" value="KG\m2" style="margin-left:-7px;width:60px" id="but">
            </div>
            
            <div style="float:left;margin-left:50px">
            <input type="button" value="Target weight" style="margin-left:20px" id="but">
            <input type="number" name="target" style="margin-left:-6px;width:285px" id="inp" readonly>
            <input type="button" value="KG" style="margin-left:-7px;width:60px" id="but">
            </div>
            
            </div>
        
        
        
        
        </div>
    </div>
            
            
            <h6 style="color:blue">Temperature</h6>
            <div id="div2" style="border:2px solid red;height:70px;border-radius:5px">
                
             <div class="row" style="margin-top:-5px" >
        
        <div class="col-lg-6" >
            
        
            <div style="float:left;margin-left:30px;">
                <br>
            <input type="button" value="Temperature" id="but">
            <input type="number" name="temp" style="margin-left:-6px;width:313px;"  id="inp">
            <input type="button" value="F" style="margin-left:-6px;width:30px" id="but">
            </div>
            
            
            
            </div>
        
                 
                 
         <div class="col-lg-6" style="margin-top: 20px" >
            
             <div style="float:left" >
             <label style="font-weight:bold;font-size:18px;margin-left: 5px">Source:</label>
             <input type="radio" id="male" name="oral" value="oral" style="margin-left: 5px">
             <label for="male" style="margin-left: 5px">Oral</label>
             <input type="radio" id="female" name="aux" value="aux" style="margin-left: 5px">
             <label for="male" style="font-size:14px;margin-left: 5px">Auxillary</label>
              <input type="radio" id="other" name="head" value="head" style="margin-left: 5px">
             <label for="female" style="font-size:14px;margin-left: 5px">Forhead</label>
            
             </div>
        </div>
                 
                 
                 
        
        </div> 
          </div>  
            
            
            
            
            <h6 style="color:blue">Blood Pressure</h6>
            <div id="div3" style="border:2px solid red;height:70px;border-radius:5px">
                
             <div class="row" style="margin-top:-5px" >
        
        <div class="col-lg-12" >
            
               <br>
            <div style="float:left;margin-left:30px;">
            <input type="button" value="BP" id="but">
            <input type="number" name="bp" style="margin-left:-6px;width:870px" id="inp">
            <input type="button" value="mm[HG]" style="margin-left:-7px" id="but">
            </div>
           
            </div>
        
        </div> 
          </div>  
            
            
            
             <h6 style="color:blue">Pulse</h6>
            <div id="div4" style="border:2px solid red;height:140px;border-radius:5px">
                
             <div class="row" style="margin-top:-5px" >
        
        <div class="col-lg-12" >
            
               <br>
            <div style="float:left;margin-left:30px;">
            <input type="button" value="Pulse Rate"  id="but">
            <input type="number" name="pulse" style="margin-left:-7px;width:850px" id="inp">
            <input type="button" value="Min" style="margin-left:-7px" id="but">
            </div>
            
            
            
            </div>
        
        </div> 
                
                
                  <label style="margin-left:30px;margin-top: 5px">Rythum:</label>   
             <div class="row"  >
        
        <div class="col-lg-12" >
            
              
            <div style="float:left;margin-left:30px;">
            

                <select name="ryth" id="inp" style="width:975px;height:32px" >
                  <option name="ryth" value="irregular">irregular</option>
                  <option name="ryth" value="regular">regular</option>

                </select>
            </div>
            </div>
        </div> 
                
          
          </div>  
            
            
            
            <label style="color:blue">Respiration:</label>  
          <div style="border:2px solid red;height:70px;border-radius:5px" id="div5">
                  <br>
        
    <div class="row" >
        
      
        <div class="col-lg-12" style="margin-top: -5px">
            

            <div style="float:left;margin-left:30px">
                
            <input type="button" value="RR" style="width:65px" >
            <input type="number" name="rr" style="margin-left:-7px;width:340px" id="inp">
            <input type="button" value="Min" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            <div style="float:left;margin-left:70px">
                
            <input type="button" value="SOP2" style="width:65px" id="but">
            <input type="number" name="sop" style="margin-left:-7px;width:340px" id="inp">
            <input type="button" value="%" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            </div>
        
        </div>
            
           
    </div>  
            
            
            
            
            
            
              <label style="color:blue">Alergies And Reactions:</label>  
          <div style="border:2px solid red;height:120px;border-radius:5px" id="div5">
                  <br>
        
    <div class="row" >
        
      
        <div class="col-lg-12">
            
            <div style="margin-left:30px;margin-top: -10px">
                
            <input type="button" value="Allergies" style="width:72px;margin-top: 2px" id="but">
            <input type="text" name="allerg" style="margin-left:-4px;width:302px;height:30px" id="inp">
           
            </div>
            
            <br>
            <div style="margin-left:30px">
                
            <input type="button" value="Reaction" style="width:72px;margin-top: 2px" id="but">
            <input type="text" name="react" style="margin-left:-4px;width:302px;height:30px" id="inp">
           
            </div>
            
            </div>
        
        </div>
            
           
    </div>  
            
            
     
            
            
            
             <br>
<div class="container" id="ped" style="background-color:forestgreen ;width:100%;height:3px;margin-top: -10px"></div>
            
            
             <div class="container" id="dest" style="width: 100%;height: 20px;">
                 <div style="font-size:20px;float: left"><b>Pediatrics</b></div>
                 <div style="float: left;margin-left: 870px"><a id="show"><i  class="fas fa-plus" aria-hidden="true"></i></a>
                 <a id="delete"> <i class="fas fa-times" aria-hidden="true" style="margin-left: 5px"></i></a></div>

                </div>
                <hr>
            
           
            <div id="div1" style="width: 100%;height: 110px;margin-top:-5px">
            <h6 style="color:blue;margin-top: 1px">Pediatrics</h6>
            <div id="div2" style="border:2px solid red;height:100px;border-radius:5px" id="box">
                
             <div class="row" style="margin-top:1px" >
        

        <div class="col-lg-6" >
            
        
            <div style="float:left;margin-left:30px;">
                <br>
            <input type="button" value="BR" id="but">
            <input type="number" name="br1" style="margin-left:-6px;width:350px;"  id="inp">
            <input type="button" value="Min" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            
            
            </div>
        
                 
                 
         <div class="col-lg-6" >
             <br>
             <div style="float:left;margin-top: -5px">
             <label style="font-weight:bold">Immunization:</label>
             <input type="radio" name="yes" value="yes" style="margin-left: 5px">
             <label for="male" style="margin-left: 5px">Yes</label>
             <input type="radio" name="no" value="no" style="margin-left: 5px">
             <label for="male" style="margin-left: 5px">No</label>
             <input type="radio" id="other" name="unknown" value="unknown" style="margin-left: 5px">
             <label for="female" style="margin-left: 5px">Unknown</label>
             
             </div>
        </div>
                 
                 
                 
        
        </div> 
          </div>  
            
           </div> 
            
            
            <br>
<div class="container" id="gest" style="background-color:forestgreen ;width:100%;height:3px;margin-top:0px"></div>
            
            
             <div class="container" id="des" style="width: 100%;height: 20px;">
                 <div style="font-size:20px;float: left"><b>Gynogology\Obstertrics</b></div>
                 <div style="float: left;margin-left: 735px"><a id="display"><i  class="fas fa-plus" aria-hidden="true"></i></a>
                 <a id="remove"> <i class="fas fa-times" aria-hidden="true" style="margin-left: 5px"></i></a></div>

                </div>
                <hr>

            
            
            
           
            <div id="jadoo" style="width: 100%;height: 180px;">
            <h6 style="color:blue;margin-top: 5px">Gynogology\Obstertrics</h6>
            <div style="border:2px solid red;height:140px;border-radius:5px" id="div5">
                  <br>
        
         <div class="row"  >
        
      
        <div class="col-lg-12" style="margin-top: -9px">
          

            <div style="float:left;margin-left:30px">
            <input type="button" value="LMP" id="but" style="width:50px;margin-top: 2px">
            <input type="text" name="lmp" style="margin-left:-7px;height:30px;width: 340px" id="inp">
            <input type="button" value="Days" style="margin-left:-7px;width:70px" id="but">
            </div>
            
            <div style="float:left;margin-left:60px">
                
            <input type="button" value="Gravida" style="width:70px;margin-top: 2px" id="but">
            <input type="text" name="grav" style="margin-left:-6px;width:340px;height:30px" id="inp">
            <input type="button" value="Weeks" style="margin-left:-10px;width:65px" id="but">
            </div>
            
            </div>
        

        </div>
        <div class="row" style="margin-top:10px " >
        
      
        <div class="col-lg-12">
            <div style="float:left;margin-left:30px">
            <input type="button" value="Abortion" id="but" style="width:80px;margin-top: 2px">
            <input type="text" name="abort" style="margin-left:-7px;height:30px;width: 310px" id="inp">
            <input type="button" value="Yes/No" style="margin-left:-7px;width:70px" id="but">
            </div>
            
            <div style="float:left;margin-left:60px">
                
            <input type="button" value="PARA" style="width:55px;margin-top: 2px" id="but">
            <input type="text" name="para" style="margin-left:-6px;width:360px;height:30px" id="inp">
            <input type="button" value="Count" style="margin-left:-10px;width:60px" id="but">
            </div>
            
            </div>
        
        </div>
        <div class="row" style="margin-top:10px " >
        
      
        <div class="col-lg-12">
            <div style="float:left;margin-left:30px">
            <input type="button" value="Living" id="but" style="width:60px;margin-top: 2px">
            <input type="text" name="living" style="margin-left:-7px;height:30px;width: 350px" id="inp">
            <input type="button" value="Days" style="margin-left:-7px;width:49px" id="but">
            </div>
            

            
            </div>
        
        </div>

            
           
    </div>   
            
           </div> 
            
            
            <div class="modal-header">
                            
                            
                            <button class="btn btn-primary" type="submit" style="margin-left: 850px">Update</button>
                <button type="button" class="btn btn-danger" style=" background-color:#dd4b39" >Cancel</button>
                            
                            
                        </div>
   
     </form>
    
    
    
    </div>
                                  
                        </div>
                        
                        
                            
                            
                            </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    
                

         </div>

         @endsection
         @section('scripts')
        <script type="text/javascript">
          
            var divi1=document.getElementById("div1");
             var show=document.getElementById("show");
             var hide=document.getElementById("delete");
             var disp=document.getElementById("display");
             var remov=document.getElementById("remove");
             var jadoo=document.getElementById("jadoo");
             $(document).ready(function(){

            $("#div1").hide();
            $("#show").click(function(){
            $("#div1").slideToggle(300);
            });
            $("#delete").click(function(){
            $("#dest").hide();
            $("#ped").hide();
            $("#div1").hide();
            });

             $("#jadoo").hide();
            $("#display").click(function(){
            $("#jadoo").slideToggle(300);
            });

             $("#remove").click(function(){
            $("#des").hide();
            $("#gest").hide();
            $("#jadoo").hide();
            });

             });
        </script>
         @endsection







 
    