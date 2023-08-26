<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Bayar</title>
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

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">
              <small>
                <form class="d-flex">
                  Silahkan melalukan pembayaran agar barang bisa diproses!
                  <br>

                </form>
                Halaman ini akan diarahakan otomatis ke halaman Utama dalam<b> <span id="waktu"> sdfd</span> detik </b>
              </small>
            </a>
          </li>
        </ul>
        <a href="#!"> <img src="user/img/keranjangFix.png" style="width: 20px;" alt="" srcset=""></a> &nbsp;&nbsp; |
        &nbsp;&nbsp;

        <!-- Modal Login -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username (Ho. HP)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-success">Login <i class="bi bi-box-arrow-in-right"></i></button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal Daftar -->
        <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="DaftarModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="DaftarModalLabel">Daftar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi
                      Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-success">Daftar <i class="bi bi-box-arrow-in-right"></i></button>
              </div>
              </form>
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
      <div class="row row-cols-5">

        <div class="col-sm-12 mb-5">


          <div class="card" style="height:500px; font-size: 13px; background-image: url(user/img/bayar.gif);">
            <div class="container">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const tambah = document.getElementById('tambah');
    const kurang = document.getElementById('kurang');
    const nilai = document.getElementById('nilai');
    const nilai2 = document.getElementById('nilai2');
    const total = document.getElementById('total');
    const harga = document.getElementById('harga');
    const stock = document.getElementById('stockBarang');
    const ansel = document.getElementById('ansel');
    let jumlahStock = stock.getAttribute('value');
    let int_nilai_1 = 0;
    let totalBayar = 0;
    let hargaBarang = harga.getAttribute('uang');
    let jumlahSekarang = jumlahStock;
    int_nilai_1 += 1;
    jumlahStock -= 1;
    ansel.innerHTML = jumlahStock;
    nilai.innerHTML = int_nilai_1;
    nilai2.innerHTML = int_nilai_1;
    total.innerHTML = int_nilai_1 * hargaBarang;
    tambah.addEventListener('click', function() {
      if (int_nilai_1 == jumlahSekarang) {
        nilai2.innerHTML = PENUH;
        return
      }
      int_nilai_1 += 1;
      jumlahStock -= 1;
      ansel.innerHTML = jumlahStock;
      nilai.innerHTML = int_nilai_1;
      nilai2.innerHTML = int_nilai_1;
      total.innerHTML = int_nilai_1 * hargaBarang;
      console.log(int_nilai_1);

    })
    kurang.addEventListener('click', function() {
      if (int_nilai_1 == 0) {
        return
      }
      int_nilai_1 -= 1;
      jumlahStock += 1;
      ansel.innerHTML = jumlahStock;
      nilai.innerHTML = int_nilai_1;
      nilai2.innerHTML = int_nilai_1;
      total.innerHTML = int_nilai_1 * hargaBarang;
      console.log(int_nilai_1);

    })
  </script>
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
  <script src="user/script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    var url = "http://localhost:8000/userLogin"; // url tujuan
    let waktu = document.getElementById('waktu');
    var count = 10; // dalam detik

    waktu.innerHTML = count;

    function countDown() {
      if (count > 0) {
        count--;
        var waktu = count + 1;
        setTimeout("countDown()", 1000);
      } else {
        window.location.href = url;
      }
    }
    countDown();
  </script>

</body>

</html>