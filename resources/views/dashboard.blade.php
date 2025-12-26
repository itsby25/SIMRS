<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Hospitasl</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body onload="startup()">
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search pasien">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                @session('username'){{ $value }}@endsession
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModal">
                  <i class="mdi mdi-account-circle-outline me-2 text-primary"></i> Profile </a>
                <a class="dropdown-item" href="login">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            

            <!--<li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
             
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>-->
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <!--<li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                </div>
                <div class="nav-profile-text d-flex flex-column"> 
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>-->
            <li class="nav-item">          
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="/tindakan_igd" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Data Norm Terakhir</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
            <div class="row table-responsive">
                        <table class="table table-striped table-bordered table-hover order-column" border="1" width="100%">
                                <thead class="btn-success">
                                    <tr>
                                        <th><center> Norm </center></th>    
                                        <th><center> Nama </center></th>                                 
                                    </tr>
                                </thead>
                                <tbody id="navdatatable">
                                   @foreach ($latest_norm as $latest)
                                    <tr>
                                       <!-- <td colspan="1">
                                            <center><b>Tidak ada data</b></center>
                                        </td>-->
                                       
                                          
                                             <td><center><b> {{ $latest->norm }} </b></center></td> 
                                             <td><center><b> {{ $latest->nama }} </b></center></td>                                            
                                        
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
            </li>

            <!--<li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/icons/font-awesome.html">Font Awesome</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/forms/basic_elements.html">Form Elements</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lock menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <span class="menu-title">SETTING SETUP</span>
                <i class="mdi mdi-cog menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- main content-->
          <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                <a href="main" class="text-white nav-link" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">REGISTRATION <br><i class="mdi mdi-account-supervisor-circle-outline mdi-48px float-start"></i>
                    </h4>{{$total_pasien}} <sup>terdaftar</sup>                
                  </div>
                </a> 
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                   <a href="igd" class="text-white nav-link"> 
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">EMERGENCY <br><i class="mdi mdi-heart-pulse mdi-48px float-start"></i>
                    </h4>               
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <a href="rajal" class="text-white nav-link"> 
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">OUT PATIENT <i class="mdi mdi-walk mdi-48px float-start"></i>
                    </h4>    
                  </div>
                  </a>
                </div>
              </div>

              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-secondary card-img-holder text-white">
                <a href="rawin" class="text-white nav-link">  
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">IN PATIENT <i class="mdi mdi-bed mdi-48px float-start"></i>
                    </h4>   
                  </div>
                </a>
                </div>
              </div>
            </div>

            <!-- Second Row -->
             
                <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                <a href="lims" class="text-white nav-link">    
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">LABORAT | LIMS <i class="mdi mdi-microscope mdi-48px float-start"></i>
                    </h4>                      
                  </div>
                </a> 
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                <a href="pharmacy" class="text-white nav-link">    
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">PHARMACY<i class="mdi mdi-pill mdi-48px float-start"></i>
                    </h4>        
                  </div>
                </a>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                <a href="ris" class="text-white nav-link">    
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">RADIOLOGY | RIS <i class="mdi mdi-radioactive mdi-48px float-start"></i>
                    </h4>
                  </div>
                </a>
                </div>
              </div>

              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-secondary card-img-holder text-white">
                <a href="mcu" class="text-white nav-link"> 
                <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">MCU <i class="mdi mdi-stethoscope mdi-48px float-start"></i>
                    </h4>
                   
                  </div>
                </a> 
                </div>
              </div>
            </div>
          <!--Three Rows-->
           <!-- Second Row -->
             
                <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <a href="erm" class="text-white nav-link">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">E-MR <i class="mdi mdi-medication mdi-48px float-start"></i>
                    </h4>                           
                  </div>
                </a>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                   <a href="fisio" class="text-white nav-link">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">FISIOTERAPI<i class="mdi mdi-human-walker mdi-48px float-start"></i>
                    </h4>  
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <a href="surgery" class="text-white nav-link">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">SURGERY | OK <i class="mdi mdi-heart-pulse mdi-48px float-start"></i>
                    </h4>  
                  </div>
                  </a>
                </div>
              </div>

              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-secondary card-img-holder text-white">
                  <a href="darah" class="text-white nav-link">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">BANK DARAH <i class="mdi mdi-stethoscope mdi-48px float-start"></i>
                    </h4>
                  </div>
                </a> 
                </div>
              </div>
            </div>
</div>

<!--Modal-->

<!-- Modal registrasi-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrasi Popup</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
                            <div class="input-group">
                              <input type="text" id="cari" class="form-control" placeholder="Cari Pasien" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-sm btn-gradient-primary py-3" type="button" onclick="get_nama()">Cari | Search</button>
                              </div>
        </div>
        <a href="main"><button type="button" class="btn btn-info" data-bs-dismiss="modal">New</button></a>
        <a href="igd"><button type="button" class="btn btn-success">IGD</button></a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">RAWAT JALAN</button>
        <button type="button" class="btn btn-primary">RAWAT INAP</button>
      </div> 

      <div class="modal-body">
      <div id="card_pendaftaran" class="col-18 grid-margin">
                <div class="card">
                  <div class="card-body">
                  
                      <p class="card-description"> Pendaftaran IGD | Emergency </p>
                      <div class="row table-responsive">
                        <table class="table table-striped table-bordered table-hover order-column" border="1" width="100%">
                                <thead class="btn-success">
                                    <tr>
                                        <th>
                                            <center> NO. RM </center>
                                        </th>
                                        <th>
                                            <center> NIK </center>
                                        </th>
                                        <th>
                                            <center> NOKA.BPJS </center>
                                        </th>
                                        <th>
                                            <center> NAMA PASIEN </center>
                                        </th>
                                        <th>
                                            <center> TANGGAL LAHIR / USIA </center>
                                        </th>
                                        <th>
                                            <center> ALAMAT </center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="datatable">
                                    <tr>
                                        <td colspan="5">
                                            <center><b>Tidak ada data</b></center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <div class="page-footer">
                          
                          <button class="btn btn-sm btn-gradient-success py-3" onclick="daftar()">Daftar</button>
                            <button class="btn btn-sm btn-gradient-secondary py-3" onclick="tampil()">View</button>
                          <button class="btn btn-sm btn-gradient-danger py-3" onclick="startup()">Batal</button>
                          
                        </div>   
                      </div>
                    </div>    
                  </div>
                </div>
              </div>
      
    </div>
  </div>
</div>
<!--Modal Profile-->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">User Info</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                   <div class="card-body">
                    <h4 class="card-title">Photo Profile</h4>
                    <img data-src="holder.js/200x200" class="rounded float-left" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_19aa5c0bd9d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_19aa5c0bd9d%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
                    <hr>
                    <h4 class="card-title">Profile</h4>
                    
                      <p class="card-description"> User info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Name</label>  
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Real Name</label> 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit</label>                            
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Akses Level</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start At</label>
                          </div>
                        </div>
                      </div>    
                      
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <button  class="col-sm-4 btn btn-success">Update</button>
                            <button class="col-sm-4 btn btn-danger">Upload Photo</button>
                            <button class="col-sm-4 btn btn-primary">HRM</button>
                          </div>
                        </div>
                      </div>   
                  </div>
                </div>
              </div>
      </div> 
    </div>
  </div>
</div>

<!--END modal-->
          <!-- End Of Content-->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 All rights reserved.</span>
             <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>-->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <script>
       $(document).ready(function() { 
    	view_norm();
      view_nama();
      view_all();
      });

       function startup()
      {      
            document.getElementById("card_pendaftaran").style.visibility = "hidden";
           
      }

      function get_nama(){
         var a = document.getElementById("cari").value;
        const myElement = document.getElementById('datatable');

        
        $.ajax({
          type:"GET",
          url:"http://127.0.0.1:8000/pasien_get?nama="+a+"",
          dataType:"JSON",
          success:function(response){
            console.log(response);
             document.getElementById("card_pendaftaran").style.visibility = "visible";
            //const jsonData = JSON.stringify(response);
            myElement.innerHTML ="<td><center>"+response[0].norm+"</td><td><center>"+response[0].no_id+"</center></td><td><center>"+response[0].noka_BPJS+"</center></td><td><center>"+response[0].nama+"</center></td><td><center>"+response[0].tgl_lahir+"</center></td><td><center>"+response[0].alamat_domisili+"</center></td>";
          }  
          })
      }

    </script>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>