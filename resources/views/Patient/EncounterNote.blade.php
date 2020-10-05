<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-clinic</title>
  <link rel = "icon" href =  "/public/dist/img/mobii.jpg" type = "image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/public/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('dist/css/dataTables.min.css') }}">

   
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.3/select2.min.css" rel="stylesheet" />
<!-- for Date picker-->

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--end date picker -->
<style>
  #note:hover{
    border: 2px solid black;

  }
   #note{
    font-size: 100%;

  }
  #order:hover{
    border: 2px solid black;

  }
  #order{
     font-size: 100%;

  }
  #nure:hover{
    border: 2px solid black;

  }
  #nure{
    font-size: 100%;

  }
  #attach:hover{
    border: 2px solid black;

  }
  #attach{
    font-size: 100%;

  }
  #image:hover{
    border: 2px solid black;

  }
  #image{
     font-size: 100%;

  }
  #ref:hover{
    border: 2px solid black;

  }
   #ref{
    font-size: 100%;

  }
  #sign:hover{
    border: 2px solid black;

  }
  #sign{
   font-size: 100%;

  }

</style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Home</a>
      </li>
    </ul>
   
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="{{ asset('dist/img/mob.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">E-clinic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="info">
       @foreach($data as $send)
       @endforeach
       <h3 style="color: white">MRN:HPN-{{$send->ID}}</h3>
        </div>
      <div>
        <h3 style="color: white">Name:{{$send->Name}}</h3>
      </div>
      <div>
        <h3 style="color: white">Age:{{$send->Age}} year</h3>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @foreach($data as $it)
               @endforeach
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="" class="nav-link active">
                  <p>Encounter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal"  data-target="#myModal" class="nav-link">
                  <i class="fas fa-calculator nav-icon "></i>
                  <p>Vitals</p>
                </a>
                
              </li>
              
              <li class="nav-item">
                <a href="{{url('NoteEncounter')}}/{{$it->id}}" class="nav-link">
                  <i class="fas fa-user-md nav-icon "></i>
                  <p>Current Counter</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active ">
                  <p>History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Encounter')}}/{{$it->id}}" class="nav-link">
                  <i class="fas fa-circle-notch nav-icon "></i>
                  <p>Encounters</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('ProceduresAndSergeries')}}/{{$it->id}}" class="nav-link">
                  <i class="far fa-life-ring nav-icon "></i>
                  <p>Procedures and Surgeries</p>
                </a>
              </li> 
               <li class="nav-item">
                <a href="{{url('PastMedication')}}/{{$it->id}}" class="nav-link">
                  <i class="fas fa-server nav-icon "></i>
                  <p>Past Medication</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('PastVites')}}/{{$it->id}}" class="nav-link">
                  <i class="fas fa-calculator nav-icon "></i>
                  <p>Past Vitals</p>
                </a>
              </li> 
               <li class="nav-item">
                <a href="{{url('PastNotes')}}/{{$it->id}}" class="nav-link">
                  <i class="far fa-sticky-note nav-icon "></i>
                  <p>Past Notes</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('LabReports')}}/{{$it->id}}" class="nav-link">
                  <i class="fas fa-flask nav-icon "></i>
                  <p>Lab Reports</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{url('Imaging')}}/{{$it->id}}" class="nav-link">
                  <i class="far fa-file-image nav-icon "></i>
                  <p>Imaging</p>
                </a>
              </li>
             
            </ul>
          </li>
            
          
         <li class="nav-header">ACTION</li>
          <li class="nav-item">
             <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                      <i class="nav-icon fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
           
          </li>
          
        </ul>
      </nav>
   
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patient Encounter</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Details</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="Patients">Patient</a></li>
              <li class="breadcrumb-item active">current Counter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div id="mainDiv">
              
            
             <!---popup start--->
            
            
            <div ><!---unnecessary div--->
            <div class="row"  >
                <div class="col-md-12"  >
                <div class="modal fade" id="myModal" >
                    <div class="modal-dialog"   >
                        <div class="modal-content" >
                    <div class="modal-header">
                        <h1>Vitals</h1>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">
                            
                            
                            
                            
                            
                            
                             <div class="container" style="background-color:white">
      
        
        
        
        <h6 style="color:blue">Weight and Height</h6>
        <form action="{{url('vitaaal')}}" method="post">
             <div style="border:2px solid red;height:100px;border-radius:5px" >
                  <br>
        
    <div class="row" >
        
      
        <div class="col-sm-12" style="margin-top: -10px">
            <div style="float:left;margin-left:10px">
            <input type="button" value="weight" >
            <input type="number" name="weight" style="margin-left:-7px;width:100px;height:30px"  >
            <input type="button" value="KG" style="margin-left:-7px;" >
            </div>
            
            <div style="float:left;margin-left:30px">
                
            <input type="button" value="Height" style="width:65px" id="but">
            <input type="number" name="height" style="margin-left:-7px;width:100px" id="inp">
            <input type="button" value="CM" style="margin-left:-6px;width:50px" id="but">
            </div>
            
            </div>
        
        
        
        
        </div>
            
             <div class="row" style="margin-top:10px">
        
        <div class="col-lg-12">
            
        
            <div style="float:left;margin-left:10px;">
            <input type="button" value="BMI" id="but" >
            <input type="number" name="bmi" style="margin-left:-7px;width:95px;height:30px" id="inp">
            <input type="button" value="KG\m2" style="margin-left:-8px" id="but">
            </div>
            
            <div style="float:left;margin-left:10px">
            <input type="button" value="Target weight" style="margin-left:20px" id="but">
            <input type="number" name="target" style="margin-left:-6px;width:50px" id="inp">
            <input type="button" value="KG" style="margin-left:-7px;width:60px" id="but">
            </div>
            
            </div>
        
        
        
        
        </div>
    </div>
            
            
            <h6 style="color:blue">Temperature</h6>
            <div id="div2" style="border:2px solid red;height:70px;border-radius:5px">
                
             <div class="row" style="margin-top:-5px" >
        
        <div class="col-lg-6" >
            
        
            <div style="float:left;margin-left:10px;">
                <br>
            <input type="button" value="Temperature" id="but">
            <input type="number" name="temp" style="margin-left:-6px;width:60px;"  id="inp">
            <input type="button" value="F" style="margin-left:-6px;width:30px" id="but">
            </div>
            
            
            
            </div>
        
                 
                 
         <div class="col-lg-6" style="margin-top: 10px" >
            
             <div style="float:left" >
             <label style="font-weight:bold;font-size:14px;margin-left: 5px">Source:</label>
             <label for="male" style="margin-left: 5px">Oral</label>
             <input type="radio" id="male" name="oral" value="oral" style="margin-left: 5px">
             <label for="male" style="font-size:14px;margin-left: 5px">Auxillary</label>
             <input type="radio" id="female" name="aux" value="aux" style="margin-left: 5px">
             <label for="female" style="font-size:14px">Forhead</label>
             <input type="radio" id="other" name="head" value="head" style="margin-left: 5px">
             </div>
        </div>
                 
                 
                 
        
        </div> 
          </div>  
            
            
            
            
            <h6 style="color:blue">Blood Pressure</h6>
            <div id="div3" style="border:2px solid red;height:70px;border-radius:5px">
                
             <div class="row" style="margin-top:-5px" >
        
        <div class="col-lg-12" >
            
               <br>
            <div style="float:left;margin-left:20px;">
            <input type="button" value="BP" id="but">
            <input type="number" name="bp" style="margin-left:-6px;width:300px" id="inp">
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
            <div style="float:left;margin-left:20px;">
            <input type="button" value="Pulse Rate"  id="but">
            <input type="number" name="pulse" style="margin-left:-7px;width:283px" id="inp">
            <input type="button" value="Min" style="margin-left:-7px" id="but">
            </div>
            
            
            
            </div>
        
        </div> 
                
                
                  <label style="margin-left:20px;margin-top: 5px">Rythum:</label>   
             <div class="row"  >
        
        <div class="col-lg-12" >
            
              
            <div style="float:left;margin-left:20px;">
            

                <select name="ryth" id="inp" style="width:400px;height:32px" >
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
            <div style="float:left;margin-left:20px">
            <input type="button" value="RR" id="but" style="width:40px">
            <input type="number" name="rr" style="margin-left:-7px;height:30px;width: 120px" id="inp">
            <input type="button" value="Min" style="margin-left:-7px;width:49px" id="but">
            </div>
            
            <div style="float:left;margin-left:20px">
                
            <input type="button" value="SOP2" style="width:50px" id="but">
            <input type="number" name="sop" style="margin-left:-6px;width:120px;height:30px" id="inp">
            <input type="button" value="%" style="margin-left:-10px;width:30px" id="but">
            </div>
            
            </div>
        
        </div>
            
           
    </div>  
            
            
            
            
            
            
              <label style="color:blue">Alergies And Reactions:</label>  
          <div style="border:2px solid red;height:120px;border-radius:5px" id="div5">
                  <br>
        
    <div class="row" >
        
      
        <div class="col-lg-12">
            <div style="margin-left:20px" >
            <input type="button" value="Allergies" id="but" >
            <input type="text" name="allerg" style="margin-left:-7px;width:300px;height:30px" id="inp">
            
            </div>
            <br>
            <div style="margin-left:20px">
                
            <input type="button" value="Reaction" style="width:70px" id="but">
            <input type="text" name="react" style="margin-left:-4px;width:300px;height:30px" id="inp">
           
            </div>
            
            </div>
        
        </div>
            
           
    </div>  
            
            
     
            
            
            
             <br>
<div class="container" style="background-color:forestgreen ;width:100%;height:3px;margin-top: -10px"></div>
            
            
             <div class="container" id="dest" style="width: 100%;height: 40px;">
                 <div style="font-size:20px;float: left"><b>Pediatrics</b></div>
                 <div style="float: left;margin-left: 300px"><a id="show"><i  class="fas fa-plus" aria-hidden="true"></i></a>
                 <a id="delete"> <i class="fas fa-times" aria-hidden="true" style="margin-left: 5px"></i></a></div>

                </div>
            
           
            <div id="div1" style="width: 100%;height: 110px;margin-top:-5px">
            <h6 style="color:blue;margin-top: 1px">Pediatrics</h6>
            <div id="div2" style="border:2px solid red;height:100px;border-radius:5px" id="box">
                
             <div class="row" style="margin-top:10px" >
        
        <div class="col-lg-6" >
            
        
            <div style="float:left;margin-left:20px;margin-top: 10px">
            <input type="button" value="BR" id="but" style="width:40px">
            <input type="number" name="br1" style="margin-left:-7px;height:30px;width: 90px" id="inp">
            <input type="button" value="Min" style="margin-left:-7px;width:49px" id="but">
            </div>
            
            
            
            </div>
        
                 
                 
         <div class="col-lg-6" >
             <br>
             <div style="float:left;margin-top: -15px">
             <label style="font-weight:bold">Immunization:</label>
             <label for="male" style="margin-left: 5px">Yes</label>
             <input type="radio" name="yes" value="yes" style="margin-left: 5px">
             <label for="male" style="margin-left: 5px">No</label>
             <input type="radio" name="no" value="no" style="margin-left: 5px">
             <label for="female" style="margin-left: 5px">Unknown</label>
             <input type="radio" id="other" name="unknown" value="unknown" style="margin-left: 5px">
             </div>
        </div>
                 
                 
                 
        
        </div> 
          </div>  
            
           </div> 
            <hr>
            
            <br>
<div class="container" style="background-color:forestgreen ;width:100%;height:3px;margin-top: -30px"></div>
            
            
             <div class="container" id="des" style="width: 100%;height: 40px;">
                 <div style="font-size:20px;float: left"><b>Gynogology\Obstertrics</b></div>
                 <div style="float: left;margin-left: 180px"><a id="display"><i  class="fas fa-plus" aria-hidden="true"></i></a>
                 <a id="remove"> <i class="fas fa-times" aria-hidden="true" style="margin-left: 5px"></i></a></div>

                </div>
            
            
            
           
            <div id="jadoo" style="width: 100%;height: 110px;">
            <h6 style="color:blue;margin-top: 5px">Gynogology\Obstertrics</h6>
            <div style="border:2px solid red;height:140px;border-radius:5px" id="div5">
                  <br>
        
         <div class="row"  >
        
      
        <div class="col-lg-12" style="margin-top: -9px">
            <div style="float:left;margin-left:10px">
            <input type="button" value="LMP" id="but" style="width:45px">
            <input type="text" name="lmp" style="margin-left:-7px;height:30px;width: 110px" id="inp">
            <input type="button" value="Days" style="margin-left:-7px;width:49px" id="but">
            </div>
            
            <div style="float:left;margin-left:10px">
                
            <input type="button" value="Gravida" style="width:65px" id="but">
            <input type="text" name="grav" style="margin-left:-6px;width:110px;height:30px" id="inp">
            <input type="button" value="Weeks" style="margin-left:-10px;width:60px" id="but">
            </div>
            
            </div>
        

        </div>
        <div class="row" style="margin-top:10px " >
        
      
        <div class="col-lg-12">
            <div style="float:left;margin-left:10px">
            <input type="button" value="Abortion" id="but" style="width:75px">
            <input type="text" name="abort" style="margin-left:-7px;height:30px;width: 70px" id="inp">
            <input type="button" value="Yes/No" style="margin-left:-7px;width:60px" id="but">
            </div>
            
            <div style="float:left;margin-left:10px">
                
            <input type="button" value="PARA" style="width:50px" id="but">
            <input type="text" name="para" style="margin-left:-6px;width:125px;height:30px" id="inp">
            <input type="button" value="Count" style="margin-left:-10px;width:60px" id="but">
            </div>
            
            </div>
        
        </div>
        <div class="row" style="margin-top:10px " >
        
      
        <div class="col-lg-12">
            <div style="float:left;margin-left:10px">
            <input type="button" value="Living" id="but" style="width:60px">
            <input type="text" name="living" style="margin-left:-7px;height:30px;width: 95px" id="inp">
            <input type="button" value="Days" style="margin-left:-7px;width:49px" id="but">
            </div>
            

            
            </div>
        
        </div>

            
           
    </div>   
            
           </div> 
            <hr>
            
            <div class="modal-footer">
                            
                            
                            <button class="btn btn-primary" type="submit" >Update</button>
                <button type="button" class="btn btn-danger" class="close" data-dismiss="modal" style=" background-color:#dd4b39" >Cancel</button>
                            
                            
                        </div>
   
     </form>
    
    
    
    </div>
                                  
                        </div>
                        
                        
                            
                            
                            </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    
                </div>
                </div>
            
            </div>

         </div>


         
<div class="container-fluid">   
     <h3 class="container p-3 my-3 bg-dark text-white">Encounter ID:HPEN-{{$it->id}}</h3>
   </div>





   @yield('encounter')
<!--end-->




  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">E-clinic</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Developed by Mobi&Fahad</b> 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
  } );


  </script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/dataTables.min.js') }}"></script>

<!--Datepicker-->
<script src="{{ asset('dist/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('dist/js/moment.min.js') }}"></script>

<!--Calender-->
<script src="{{asset('dist/js/MindFusion.Scheduling.js')}}" ></script>

<!--Fullcalendar-->
<!--select 2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.3/select2.min.js"></script>

@yield('code')


<script type="text/javascript">
             



    $('tbody').delegate('.quantity,.budget','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var budget=tr.find('.budget').val();
        var amount=(quantity*budget);
        tr.find('.amount').val(amount);
        
        total();
    });
    function total(){
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
    
    $('.total').html(total+".00 Rs"); 
     
    }
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="Date[]" class="form-control"></td>'+
        '<td><input type="text" name="Type[]" class="form-control"></td>'+
        '<td><input type="text" name="Bank[]" class="form-control quantity" required=""></td>'+
        '<td><input type="text" name="Card[]" class="form-control budget"></td>'+
        ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>=1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });




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
            });

             $("#jadoo").hide();
            $("#display").click(function(){
            $("#jadoo").slideToggle(300);
            });

             $("#remove").click(function(){
            $("#des").hide();
            });

             });

              $(document).ready( function () {
   
    $('#host').select2({
     placeholder:'Please select',
     allowClear:true,
      matcher:function(term, text) 
      { 
        return text.toUpperCase().indexOf(term.toUpperCase())==0;
       }
    });
} 
);
               $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
    $( ".datepicker2" ).datepicker();
    $( ".datepicker3" ).datepicker();


  } );
</script>





</body>
</html>
