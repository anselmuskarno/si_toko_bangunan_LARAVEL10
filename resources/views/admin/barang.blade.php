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
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:white;">
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
        <li class="nav-item menu-items ">
          <a class="nav-link" href="/dashboardAdmin">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items active">
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
        <div class="content-wrapper" style="background-color:white;">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="background-color:white;">
                  <h4 class="card-title text-dark">Daftar Barang</h4>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Data</button>
                  <!-- Modal -->
                  <div class="modal fade bg-primary" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <form action="/tambahBarang" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control text-white" id="nama_barang">
                              </div>
                              <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control text-white" id="harga">
                              </div>
                              <div class="mb-3">
                                <label for="stock_barang" class="form-label">Jumlah Stock</label>
                                <input type="text" name="stock_barang" class="form-control text-white" id="stock_barang">
                              </div>
                              <input type="hidden" name="terjual" value="0">
                              <input type="hidden" name="rating" value="0">
                              <div class="mb-3">
                                <label for="foto_barang" class="form-label">Foto Barang</label>
                                <input type="file" name="foto_barang" class="form-control text-white" id="foto_barang">
                              </div>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Tambah Data</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama Barang </th>
                          <th> Harga </th>
                          <th> Jumlah Stock </th>
                          <th> Terjual </th>
                          <th> Ratting </th>
                          <th> Foto </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($barang as $b)
                        <tr>
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $b->nama_barang }} </td>
                          <td> {{ $b->harga }} </td>
                          <td> {{ $b->stock_barang }} </td>
                          <td> {{ $b->terjual }} </td>
                          <td> {{ $b->rating }} </td>
                          <td><img src="storage/{{ $b->foto_barang  }}" style="width:50px; height:50px" alt=""> </td>
                          <td>
                            <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $b->id }}"> <i class="mdi mdi-table-edit"></i>Edit</a>
                            <a href="/hapusBarang/{{$b->id}}" onclick="return confirm('Apakah anda yakin data ini akan dihapus?');" class="btn btn-sm btn-danger"> <i class="mdi mdi-delete-forever"></i> Hapus</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        @foreach ($barang as $b)
        <div class="modal fade bg-warning" id="editModal{{ $b->id }}" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form action="/editBarang/{{ $b->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="gambarLama" value="{{ $b->foto_barang  }}">
                    <div class="mb-3">
                      <label for="nama_barang" class="form-label">Nama Barang</label>
                      <input type="text" name="nama_barang" value="{{ $b->nama_barang }}" class="form-control text-white" id="nama_barang">
                    </div>
                    <div class="mb-3">
                      <label for="harga" class="form-label">Harga</label>
                      <input type="text" name="harga" value="{{ $b->harga }}" class="form-control text-white" id="harga">
                    </div>
                    <div class="mb-3">
                      <label for="stock_barang" class="form-label">Jumlah Stock</label>
                      <input type="text" name="stock_barang" value="{{ $b->stock_barang }}" class="form-control text-white" id="stock_barang">
                    </div>
                    <div class="mb-3">
                      <label for="terjual" class="form-label">Terjual</label>
                      <input type="text" name="terjual" value="{{ $b->terjual }}" class="form-control text-white" id="terjual">
                    </div>
                    <input type="hidden" name="rating" value="0">
                    <div class="mb-3">
                      <label for="foto_barang" class="form-label">Foto Barang</label><br>
                      <img src="storage/{{ $b->foto_barang  }}" style="width:100px; height:100px" alt="">
                      <small class="text-danger"> <i> *Klik tombol di bawah untuk mengganti foto</i></small>
                      <input type="file" name="foto_barang" class="form-control" id="foto_barang">
                    </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-light">Simpan Perubahan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style="background-color: white;">
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