<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toko Bangunan - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/template/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="admin/template/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="admin/template/assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="admin/template/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="admin/template/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas bg-light" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:white">
        <a style="text-decoration:none" class="sidebar-brand brand-logo text-dark" href="index.html">Toko Bangunan</a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/template/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="admin/template/assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal text-dark">Admin</h5>
                <span>Online</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>

          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items active">
          <a class="nav-link" href="/dashboardAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/barangAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Barang</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="userAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Data User</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="keranjangAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Data Keranjang</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="/pembelianAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Pembelian</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color:white; color:black">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/template/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>


          <ul class="navbar-nav navbar-nav-right">

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="admin/template/assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name text-dark">Admin</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="/">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>

              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="background-color:white">
          <div class=" row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-xl-2">
                      <img src="admin/template/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                    </div>
                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                      <h4 class="mb-1 mb-sm-0">Selamat datang Admin</h4>
                      <p class="mb-0 font-weight-normal d-none d-sm-block">Anda bisa melakukan manajemen Perusahaan Anda</p>
                    </div>
                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                      <span>

                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card bg-light">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0 text-dark">{{ $barang }}</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium"> Unit </p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Barang</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card bg-light">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0 text-dark">{{ $user }}</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">Pengguna</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah User</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card bg-light">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0 text-dark">{{ $keranjang }}</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">Item</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Keranjang</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card bg-light">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0 text-dark">{{ $pembelian }}</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">dibeli</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Jumlah Pembelian</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer bg-light">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright tokoBangunan.com 2023</span>

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
  <script src="admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="admin/template/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="admin/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="admin/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="admin/template/assets/js/off-canvas.js"></script>
  <script src="admin/template/assets/js/hoverable-collapse.js"></script>
  <script src="admin/template/assets/js/misc.js"></script>
  <script src="admin/template/assets/js/settings.js"></script>
  <script src="admin/template/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="admin/template/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>