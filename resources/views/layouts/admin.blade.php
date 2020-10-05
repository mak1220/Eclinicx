<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-clinic</title>
  <link rel = "icon" href =  "{{ asset('dist/img/mobii.jpg') }}" type = "image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css ') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('dist/css/dataTables.min.css') }}">

   

<!-- for Date picker-->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--<link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datetimepicker-standalone.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datetimepicker.min.css') }}">-->
<!-- -->


<!--select 2-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.3/select2.min.css" rel="stylesheet" />


<!--Calendar-->
<link href="{{asset('assets/FullCalendar/lib/main.css')}}" rel='stylesheet' />
<link href="{{asset('assets/FullCalendar/css/style.css')}}" rel='stylesheet' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{asset('assets/FullCalendar/lib/main.js')}}" ></script>

<script src="{{asset('assets/FullCalendar/lib/locales-all.js')}}" ></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="{{asset('dist/js/jquery.maskedinput.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<script src="{{asset('assets/FullCalendar/js/script.js')}}" ></script>















</head>
<body class="hold-transition sidebar-mini layout-fixed" >
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="{{ asset('dist/img/mob.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">E-clinic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
         <a  href="home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="{{url('home')}}" class="nav-link active">
                  <i class="fas fa-tachometer-alt nav-icon text-dark"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('user')}}" class="nav-link">
                  <i class="fa fa-user nav-icon "></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('referee')}}" class="nav-link">
                  <i class="fa fa-fax nav-icon "></i>
                  <p>Referee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('patients')}}" class="nav-link">
                  <i class="fa fa-wheelchair nav-icon"></i>
                  <p>Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('DoctorStatus')}}" class="nav-link">
                  <i class="  fas fa-graduation-cap nav-icon "></i>
                  <p>Doctor Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('doctor')}}" class="nav-link">
                  <i class="fa fa-user-md nav-icon "></i>
                  <p>Doctors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('department')}}" class="nav-link">
                  <i class="fa fa-building nav-icon "></i>
                  <p>Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('procedure')}}" class="nav-link">
                  <i class="fa fa-heartbeat nav-icon "></i>
                  <p>Procedures</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('supplier')}}" class="nav-link">
                  <i class="fa fa-truck nav-icon "></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('equipment')}}" class="nav-link">
                  <i class="fa fa-tv nav-icon "></i>
                  <p>Equipments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('itemType')}}" class="nav-link">
                  <i class="fas fa-notes-medical nav-icon "></i>
                  <p>Item Types</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('pharmacyItem')}}" class="nav-link">
                  <i class="fas fa-first-aid nav-icon "></i>
                  <p>Pharmecy Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('purchaseList')}}" class="nav-link">
                  <i class="fa fa-shopping-cart nav-icon "></i>
                  <p>Purchase Lists</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-tv"></i>
              <p>
                Reception
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('ReceptionDashboard')}}" class="nav-link active ">
                  <i class="fas fa-tachometer-alt nav-icon text-dark"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('patients')}}" class="nav-link">
                  <i class="fa fa-wheelchair nav-icon "></i>
                  <p>Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('appointment')}}" class="nav-link">
                  <i class="fas fa-clipboard nav-icon "></i>
                  <p>Appointment</p>
                </a>
              </li>  
             
            </ul>
            <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-heartbeat"></i>
              <p>
                Nursing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('NurseDashboard')}}" class="nav-link active ">
                  <i class="fas fa-tachometer-alt nav-icon text-dark"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
             <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user-md"></i>
              <p>
                Doctor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('DoctorDashboard')}}" class="nav-link active">
                  <i class="fas fa-tachometer-alt nav-icon text-dark"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('patients')}}" class="nav-link">
                  <i class="fa fa-wheelchair nav-icon "></i>
                  <p>Patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('appointment')}}" class="nav-link">
                  <i class="fas fa-clipboard nav-icon "></i>
                  <p>Appointment</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="{{url('DoctorNotes')}}" class="nav-link">
                  <i class="fa fa-book nav-icon "></i>
                  <p>Doctor Notes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('MedsFrequency')}}" class="nav-link">
                  <i class="fa fa-assistive-listening-systems nav-icon "></i>
                  <p>MEDS Frequency</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('MedsInstruction')}}" class="nav-link">
                  <i class="fa fa-indent nav-icon "></i>
                  <p>MEDS Instructions</p>
                </a>
              </li>      
             
            </ul>
          </li>



          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Others
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('group')}}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>

                  <p>Group(User)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('Hospital')}}" class="nav-link">
                  <i class="fas fa-hospital-alt nav-icon "></i>
                  <p>Hospital(Referee)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('tag')}}" class="nav-link">
                  <i class="fas fa-disease nav-icon "></i>
                  <p>Tags(Patient)</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="DoctorNotes" class="nav-link">
                  <i class="fas fa-university nav-icon "></i>
                  <p>Bank Name(Patient)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="MedsFrequency" class="nav-link">
                  <i class="fas fa-link nav-icon "></i>
                  <p>Attachment Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="MedsInstruction " class="nav-link">
                  <i class="fas fa-pills nav-icon "></i>
                  <p>Medicine Name</p>
                </a>
              </li> 
                <li class="nav-item">
                <a href="MedsInstruction " class="nav-link">
                  <i class="  fas fa-clock nav-icon "></i>
                  <p>Medicine Duration</p>
                </a>
              </li> 
                <li class="nav-item">
                <a href="{{url('status')}}" class="nav-link">
                  <i class="fa fa-indent nav-icon "></i>
                  <p>Doctor Status</p>
                </a>
              </li>  
               <li class="nav-item">
                <a href="MedsInstruction " class="nav-link">
                  <i class="fa fa-indent nav-icon "></i>
                  <p>Department Head</p>
                </a>
              </li> 
               <li class="nav-item">
                <a href="MedsInstruction " class="nav-link">
                  <i class="fa fa-indent nav-icon "></i>
                  <p>Procedure Department</p>
                </a>
              </li> 
               <li class="nav-item">
                <a href="MedsInstruction " class="nav-link">
                  <i class="fa fa-indent nav-icon "></i>
                  <p>Equipment Supplier</p>
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

   @yield('content')
   

   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">E-clinic</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Developed by Mubashar&Fahad</b> 
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

<script src="{{ asset('dist/js/moment.min.js') }}"></script>

<!--Calender-->
<script src="{{asset('dist/js/MindFusion.Scheduling.js')}}" ></script>

<!--select 2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.3/select2.min.js"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
    $( ".datepicker2" ).datepicker();
    $( ".datepicker3" ).datepicker();


  } );

    $(document).ready( function () {
   
    $('#host').select2({
     placeholder:'Please select',
     allowClear:true,
      matcher:function(term, text) 
      { 
        return text.toUpperCase().indexOf(term.toUpperCase())==0;
       }
    });

    

});
    


  </script>


<!--Fullcalendar-->



@yield('code')


@yield('scripts')

@yield('time1')
@yield('time2')



</body>
</html>
