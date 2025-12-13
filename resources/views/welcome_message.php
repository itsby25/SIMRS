<!DOCTYPE html>
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
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
<style>
    #jam-digital{overflow:hidden; width:350px}
    #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#FFF; font-size:26px; text-align:center; margin-top:4px}
</style>

  </head>

  <body onLoad="waktu()">
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        
       
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">               
                </div>
                <div class="nav-profile-text d-flex flex-column">
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Dashboard</span>                
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Tindakan IGD </h3>
            </div>
            <div class="row">
               <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tindakan Pasien IGD</h4>
                    <form class="form-sample">
                      <p class="card-description"> Detail </p>
					  <div class="row">
                        <div class="col-md-6">

                       <div class="input-group">
                        <input type="text" class="form-control" placeholder="Norm Pasien" aria-label="Norm Pasien" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-gradient-primary py-3" type="button">Cari No Rm</button>
                          <button class="btn btn-sm btn-gradient-success py-3" type="button">Pasien Baru</button>
                        </div>
                      </div>

                          <!--<div class="form-group row">
                            <label class="col-sm-3 col-form-label">Norm</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>-->
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jam Periksa</label>
                            <div class="col-sm-9">
                              <div id="jam-digital">
                                <div id="hours"><p id="jam"></p></div>
                                <div id="minute"><p id="menit"></p></div>
                                <div id="second"><p id="detik"></p></div>
                              </div>  
                              <!--<input type="text" class="form-control" />-->
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="row">
					  <div class="col-md-18">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-18">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
					  </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Usia</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Golongan Darah</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="row">
					  <div class="col-md-18">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Code Triage</label>
                            <div class="col-sm-8">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Hijau </label>
							</div>	  
							<div class="form-check">
                                <label class="form-check-label">	  
								  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Kuning </label>
							</div>	  
							<div class="form-check">
                                <label class="form-check-label">	  	
							<input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Merah </label>
							</div>	  
							<div class="form-check">
                                <label class="form-check-label">	  
								  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Hitam </label>
							</div>	  

                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Berat Badan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tensi</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alergi</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
					<div class="row">
                        <div class="col-md-18">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Riwayat Penyakit Sebelumnya</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-18">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kondisi Pasien Datang</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>		
					<div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">Diagnosa Awal</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>
          <div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">DPJP</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>
          <div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">Berita Acara Tindakan</label>
								<div class="col-sm-9">
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>

          <div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">Konsul dr.Spesialis 1</label><hr>
								<div class="col-sm-9">
								 <select class="form-select"><option>Nama Dr.Spesialis</option><select/><br> 
                  <button class="btn btn-gradient-success btn-sm me-2 mdi mdi-check">approved</button>
                   <button class="btn btn-gradient-warning btn-sm me-2 mdi mdi-clock-alert-outline">waiting</button>
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>			
          <div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">Konsul dr.Spesialis 1</label><hr>
								<div class="col-sm-9">
								  <select class="form-select"><option>Nama Dr.Spesialis</option><select/><br> 
                  <button class="btn btn-gradient-success btn-sm me-2 mdi mdi-check">approved</button>
                   <button class="btn btn-gradient-warning btn-sm me-2 mdi mdi-clock-alert-outline">waiting</button>
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>					
          <div class="row">
							<div class="col-md-18">
							  <div class="form-group row">
								<label class="col-sm-3 col-form-label">Konsul dr.Spesialis 1</label><hr>
								<div class="col-sm-9">
								  <select class="form-select"><option>Nama Dr.Spesialis</option><select/><br> 
                  <button class="btn btn-gradient-success btn-sm me-2 mdi mdi-check">approved</button>
                   <button class="btn btn-gradient-warning btn-sm me-2 mdi mdi-clock-alert-outline">waiting</button>
								  <input type="text" class="form-control" />
								</div>
							  </div>
							</div>
					</div>				
          <div class="row">
            <label class="col-sm-3 col-form-label">Penunjang Medis</label><hr>
							<div class="col-md-3">
							  <div class="form-group row">
								<button class="btn btn-gradient-primary me-2">Laborat</button>
							  </div>
							</div>
              <div class="col-md-3">
							  <div class="form-group row">
                <button class="btn btn-gradient-primary me-2">Radiologi</button>
							  </div>
							</div>
              <div class="col-md-3">
							  <div class="form-group row">
								<button class="btn btn-gradient-primary me-2">Operasi</button>
							  </div>
							</div>
              <div class="col-md-3">
							  <div class="form-group row">
                <button class="btn btn-gradient-primary me-2">CT SCAN</button>
							  </div>
							</div>
              <div class="col-md-3">
							  <div class="form-group row">
								<button class="btn btn-gradient-primary me-2">Farmasi</button>
							  </div>
							</div>
              <div class="col-md-3">
							  <div class="form-group row">
                <button class="btn btn-gradient-primary me-2">Ambulance</button>
							  </div>
							</div>
					</div>				
                      <!--<div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-select">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Address </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-select">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>-->
                    </form>
                  </div>
                </div>
              </div>
              <!--<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select 2</h4>
                    <div class="form-group">
                      <label>Single select box using select 2</label>
                      <select class="js-example-basic-single" style="width:100%">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Multiple select using select 2</label>
                      <select class="js-example-basic-multiple" multiple="multiple" style="width:100%">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Typeahead</h4>
                    <p class="card-description"> A simple suggestion engine </p>
                    <div class="form-group row">
                      <div class="col">
                        <label>Basic</label>
                        <div id="the-basics">
                          <input class="typeahead" type="text" placeholder="States of USA">
                        </div>
                      </div>
                      <div class="col">
                        <label>Bloodhound</label>
                        <div id="bloodhound">
                          <input class="typeahead" type="text" placeholder="States of USA">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
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
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="../../assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>