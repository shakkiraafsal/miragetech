<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('backend/assets/img/logo.png')}}" rel="icon">
  <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  
 <link href="{{asset('backend/assets/css/datatable/jquery.dataTables.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/css/datatable/buttons.dataTables.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('backend/assets/css/styledashboard.css')}}" rel="stylesheet">
  <script src="{{asset('backend/assets/js/function.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/selectize.min.js')}}"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="{{asset('backend/assets/js/datatable/jquery-3.5.1.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/jszip.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/pdfmake.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/vfs_fonts.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/buttons.html5.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/buttons.print.min.js')}}"></script>

 <script>
      $(document).ready(function() {
          $('body').bind('cut copy', function(e) {
              e.preventDefault();
            });
        });
    </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

   <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center" style="color: white;">
        <img src="{{asset('backend/assets/img/headerlogo.png')}}" alt="" id="responsive">
        
      </a>
     <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
 
    


        <li class="nav-item dropdown pe-3">
@if (Auth::check())
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
         <span class="d-none d-md-block dropdown-toggle ps-2"><i class="bi bi-person-circle"> </i>

 {{ Auth::user()->email ?? ""}}

@endif</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>@if (Auth::check())

 {{ Auth::user()->name ?? ""}}

@endif</h6>
             
           
            </li>

           
            

       

           
               <li class="nav-item d-none d-sm-inline-block">
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                              <i class="bi bi-box-arrow-right"></i> 
                               <span class="menu-title"> {{ __('Logout') }}</span>
              
         
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
       <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-pgm" data-bs-toggle="collapse" href="#">
         <i class="bi bi-book"></i><span>Programmes</span>
        </a>
     <ul  id="tables-pgm" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('admin.programme-list')}}">
              <i class="bi bi-circle"></i><span>Programme List</span>
            </a>
          </li>
            <li>
            <a href="{{route('admin.course-list')}}">
              <i class="bi bi-circle"></i><span>Course List</span>
            </a>
          </li>
       
       
        </ul>   
      </li><!-- End Dashboard Nav -->

<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-centre" data-bs-toggle="collapse" href="#">
         <i class="bi bi-bank"></i><span>Centres</span>
        </a>
     <ul  id="tables-centre" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('admin.rc-list')}}">
              <i class="bi bi-circle"></i><span>RC List</span>
            </a>
          </li>
            <li>
            <a href="{{route('admin.lsc-list')}}">
              <i class="bi bi-circle"></i><span>LSC List</span>
            </a>
          </li>
       
       
        </ul>   
      </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span>
        </a>
             <ul  id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.userslist')}}">
              <i class="bi bi-circle"></i><span>User List</span>
            </a>
          </li>
          
       </ul>   

        
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-fine" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Fine</span>
        </a>
             <ul  id="tables-fine" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.fine-list')}}">
              <i class="bi bi-circle"></i><span>Fine List</span>
            </a>
          </li>
          
       </ul>   

        
      </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-navs" data-bs-toggle="collapse" href="#">
          <i class="bi bi-diagram-3"></i><span>Mappings</span>
        </a>
     <ul  id="tables-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('admin.lsccoordinatorlist')}}">
              <i class="bi bi-circle"></i><span>LSC Co-ordinator Mapping</span>
            </a>
          </li>
            <li>
            <a href="{{route('admin.academiccounsellor-list')}}">
              <i class="bi bi-circle"></i><span>Academic Counsellor Mapping</span>
            </a>
          </li>
          <li>
          <a href="{{route('admin.rcdirector-list')}}">
              <i class="bi bi-circle"></i><span>RC Director Mapping</span>
            </a>
          </li>
          <li>
          <a href="{{route('admin.qps-list')}}">
              <i class="bi bi-circle"></i><span>QP Setter Mapping</span>
            </a>
          </li>
       
        </ul>   
      </li><!-- End Dashboard Nav -->




<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-stu" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-video"></i><span>Students</span>
        </a>
     <ul  id="tables-stu" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('admin.student-list')}}">
              <i class="bi bi-circle"></i><span>Students List</span>
            </a>
          </li>
           
      
       
        </ul>   
      </li><!-- End Dashboard Nav -->


   
      

     


   

<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-fac" data-bs-toggle="collapse" href="#">
         <i class="bi bi-person"></i><span>Faculty</span>
        </a>
     <ul  id="tables-fac" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
           <li>
            <a href="{{route('admin.create-subject')}}">
              <i class="bi bi-circle"></i><span>Subject</span>
            </a>
          </li>
       
          <li>
            <a href="{{route('admin.facultyEnrolllist')}}">
              <i class="bi bi-circle"></i><span>Faculty Enrolled</span>
            </a>
          </li>
            <li>
            <a href="{{route('admin.facultyApproved')}}">
              <i class="bi bi-circle"></i><span>Faculty Approved</span>
            </a>
          </li>
       
       
        </ul>   
      </li><!-- End Dashboard Nav -->
<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-marks" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Marks</span>
        </a>
             <ul  id="tables-marks" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.search-consolidated-mark')}}">
              <i class="bi bi-circle"></i><span>Consolidated Mark List</span>
            </a>
          </li>
          
       </ul>   

        
      </li><!-- End Dashboard Nav -->


<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-qp" data-bs-toggle="collapse" href="#">
         <i class="bi bi-book"></i><span>Question Paper Settings</span>
        </a>
     <ul  id="tables-qp" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="{{route('admin.instruction-list')}}">
              <i class="bi bi-circle"></i><span>Instruction</span>
            </a>
          </li>
            
       
       
        </ul>   
      </li><!-- End Dashboard Nav -->







         <!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
 

     @yield("maincontent")

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CYBER CENTRE-SGOU</span></strong>. All Rights Reserved|   Designed by <a href="https://sgou.ac.in" target="_blank">CYBER CENTRE-SGOU</a>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
   
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
    <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>

  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>
