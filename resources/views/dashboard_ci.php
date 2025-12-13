<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>.: SIMRS :.</title>
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
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
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
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  
                </div>
                <div class="nav-profile-text">
                  
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
				<a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Profile </a>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url()?>">
                  <i class="mdi mdi-login me-2 text-primary"></i> Signin </a>
              </div>
            </li>
            
          </ul>
          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pelayanan Rawat Jalan</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Pelayanan </th>
						  <th> Jam Pelayanan </th>
                          <th> Total Antrian </th>
                          <th> Kuota</th>
                          <th> Terlayani </th>
						  <th> Status </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> IGD </td>
						  <td>00:00-24:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>3 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td>KLINIK SPESIALIS PENYAKIT DALAM</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>16 dari 20</td>
						  <td><button class="btn btn-gradient-danger btn-sm font-weight-medium auth-form-btn">Close</button></td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td>KLINIK SPESIALIS ANAK</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>19 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td>KLINIK BEDAH ANAK</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>10 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td>KLINIK BEDAH DIGESTIF</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>6 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td>KLINIK BEDAH ONKOLOGI</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>12 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td>KLINIK BEDAH PLASTIK</td>
						  <td>00:60-21:00</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>2 dari 20</td>
						  <td><button class="btn btn-gradient-info btn-sm font-weight-medium auth-form-btn">Open</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


			 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pelayanan Rawat Inap</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Ruangan </th>
						  <th> Prosentase </th>
                          <th> Total Bed </th>
                          <th> Kuota</th>
                          <th> Terpakai </th>
						  <th> Status </th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> VVIP </td>
						  <td>100%</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>20 dari 20</td>
						  <td><button class="btn btn-gradient-danger btn-sm font-weight-medium auth-form-btn">Penuh</button></td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td>VIP</td>
						  <td>75%</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>16 dari 20</td>
						  <td><button class="btn btn-gradient-success btn-sm font-weight-medium auth-form-btn">Tersedia</button></td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td>Kelas 1</td>
						  <td>90%</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>19 dari 20</td>
						   <td><button class="btn btn-gradient-success btn-sm font-weight-medium auth-form-btn">Tersedia</button></td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td>Kelas 2</td>
						  <td>50%</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>10 dari 20</td>
						   <td><button class="btn btn-gradient-success btn-sm font-weight-medium auth-form-btn">Tersedia</button></td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td>Kelas 3</td>
						  <td>35%</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>20</td>
                          <td>6 dari 20</td>
						  <td><button class="btn btn-gradient-success btn-sm font-weight-medium auth-form-btn">Tersedia</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>	



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
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