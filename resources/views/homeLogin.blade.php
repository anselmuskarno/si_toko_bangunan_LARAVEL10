<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Shop Homepage</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="user/assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="user/css/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="user/css/styles.css" rel="stylesheet" />
  <link href="user/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg ">
    <div class="container" style="margin-left: 20px;">
      <a class="text-success navbar-brand" href="/userLogin"><b> Toko Mulia Jaya</b></a>
      kategori
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">
              <small>
                <form class="d-flex">
                  <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                  <input style="width: 600px;" class="form-control input-sm" type="search" placeholder=" Cari di Toko Mulia Jaya" aria-label="Search">
                </form>
              </small>
            </a>
          </li>
        </ul>
        <a href="/keranjang"> <img src="user/img/keranjangFix.png" style="width: 20px;" alt="" srcset=""> <span class="badge bg-success"> <?= $total ?> </span> </a> &nbsp;&nbsp; |
        &nbsp;&nbsp;
        <span class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="user.png" width="50px" alt=""><span class="text-success"> <b> {{ auth()->user()->nama }}</b></span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <a class="dropdown-item preview-item" href="/logout">
              <div class="preview-item-content">
                <p class="preview-subject mb-1"> Keluar</p>
              </div>
            </a>

          </div>
        </span>
        <!-- Modal Login -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Username (Ho. HP)</label>
                      <input type="text" name="username" id="username" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" id="password">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                  <button type="submit" class="btn btn-success">Login <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Daftar -->
        <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="DaftarModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DaftarModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  Barang Berhasil ditambahkan di keranjang!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <hr style="
     height: 10px;
     border: none;
     box-shadow: 0 10px 10px -10px #8c8c8c inset;">
  <!-- Section-->
  <section class="py-2">
    <div class="container px-4 px-lg-5">
      <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5">
        @foreach ($barang as $b)
        <div class="col-sm-2 mb-5">

          <div class="card h-100 " style="font-size: 13px;">
            <!-- Product image-->
            <img class="card-img-top" style="height:200px" src="storage/{{$b->foto_barang}}" alt="..." />

            <!-- Product details-->
            <div class="card-body">
              <div class="">
                <!-- Product name--> <b>
                  <p class="" style="font-family: Duru Sans, Verdana, sans-serif;"> {{$b->nama_barang}}</p>
                </b>
                <!-- Product price-->
                <h5 style="margin-top: -10px;">Rp{{$b->harga}}</h5>
                <img src="user/img/contoh.png" style="width: 20px; margin-left:0px" alt=""> Kab. Toraja
                Utara <br>
                <div class="">
                  <div class="bi-star-fill text-warning">
                    <span class="text-muted">{{$b->rating}} | Terjual {{$b->terjual}}</span>
                  </div>
                </div>
                <div class="">
                  <div class="">
                    <span class="text-muted"> Stok : {{$b->stock_barang}}</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="">
                <form action="/tambahKeranjang" method="post">
                  @csrf
                  <input type="hidden" name="nama_pembeli" value="{{ auth()->user()->nama }}">
                  <input type="hidden" name="nama_barang" value="{{$b->nama_barang}}">
                  <a class="btn btn-sm btn-outline-success mt-auto" href="/beliLangsung/{{$b->id}}"> Beli</a>
                  <button type="submit" data-bs-toggle="modal" data-bs-target="#daftarModal" class="btn btn-sm btn-success mt-auto" href="">+keranjang</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class=" text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-lg-between p-4 border-bottom">

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="" style="text-align: left;">
      <div class="container mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
            <!-- Content -->
            <h6 class=" text-dark fw-bold mb-4">
              Toko Mulia Jaya
            </h6>
            <p>
              Tentang Toko Mulia Jaya
            <p> Hak Kekayaan Intelektual </p>
            <p> Karir </p>
            <p> blog </p>
            <p>Bridestory </p>
            <p>Toko Mulia Jaya Parents </p>
            <p>Mitra Blog </p>
            <p>Toko Mulia Jaya Affiliate Program</p>
            <p>Toko Mulia Jaya B2B Digital</p>
            </p>
            <h6 class=" text-dark fw-bold" style="margin-top: 30px;">
              Beli
            </h6>
            <p>
              Tagihan & Top Up
            <p> Tukar Tambah Handphone </p>
            <p> Toko Mulia Jaya COD </p>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->

            <h6 class=" text-dark fw-bold mb-3">
              Jual
            </h6>
            <p>
              Pusat Edukasi Seller
            <p> Mitra Toppers </p>
            <p> Daftar Official Store </p>
            </p>
            <h6 class=" text-dark fw-bold" style="margin-top: 30px;">
              Bantuan dan Panduan
            </h6>
            <p>
              Toko Mulia Jaya Care
            <p> Syarat dan Ketentuan </p>
            <p> Kebijakan Privasi </p>
            <p> Mitra </p>
            </p>
            <h6 class=" text-dark fw-bold" style="margin-top: 30px;">
              Keamanan dan Privasi
            </h6>
            <p>
              <img src="user/img/keamanan.jpg" width="200px" alt="">
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4 ">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <hr style="
     height: 10px;
     border: none;
     box-shadow: 0 10px 10px -10px #8c8c8c inset;">
  </footer>
  <!-- Footer -->
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="user/js/scripts.js"></script>
</body>

</html>