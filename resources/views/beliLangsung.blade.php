<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Beli Langsung</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../user/assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="../user/css/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../user/css/styles.css" rel="stylesheet" />
  <link href="../user/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
        <a href="#!"> <img src="../user/img/keranjangFix.png" style="width: 20px;" alt="" srcset=""></a> &nbsp;&nbsp; |
        &nbsp;&nbsp;
        <span class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="../user.png" width="50px" alt=""><span class="text-success"> <b> {{ auth()->user()->nama }}</b></span>
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
        <div class="col-sm-4 mb-5">
          <form action="/tambahPembelian" method="post" enctype="multipart/form-data">
            @csrf
            <p> <b> Barang yang dibeli</b></p>
            <div class="card " style="font-size: 13px;">
              <!-- Product image-->
              <img class="card-img-top" src="../storage/{{ $foto }}" alt="..." />
            </div>
        </div>
        <div class="col-sm-4 mb-5">
          <input type="hidden" name="stock" value="{{$stock_barang}}" id="stockBarang">
          <div class="card" style="font-size: 13px; height:100%">

            <!-- Product details-->
            <div class="card-body">
              <div class="">
                <!-- Product name--> <b>
                  <p class="" style="font-family: Duru Sans, Verdana, sans-serif;"> {{$nama}}</p>
                  <input type="hidden" name="nama_barang" value="{{$nama}}">
                </b>
                <!-- Product price-->
                <h5 style="margin-top: -10px;"><span uang="{{$harga}}" id="harga"> Rp{{$harga}}</span></h5>
                <img src="../user/img/contoh.png" style="width: 20px; margin-left:0px" alt=""> Kab. Toraja
                Utara <br>
                <div class="">
                  Stock Barang : <span id="ansel"> {{$stock_barang}}</span>
                </div>
                <div class="mt-2">
                  <span href="" style="width:10%" class="btn btn-sm btn-success" id="kurang">-</span>
                  <span class="btn btn-sm btn-outline-success" style="width:75%; text-decoration:none" class="" id="jumlah">Jumlah : <span id="nilai"> 0</span></span>
                  <span style="width:10%" href="" class="btn btn-sm btn-success" id="tambah">+</span>
                </div>
                <div class="mt-2">
                  <textarea name="" class="form-control" id="" placeholder="Tulis Catatan" cols="30" rows="2"></textarea>
                </div>
                <div class="mt-2">
                  <p><b>Pengiriman dan Pembayaran</b>
                    <input type="text" class="form-control" name="alamat_pengiriman" placeholder="Alamat Pengiriman" required>
                  </p>
                  <img src="../user/img/bri.png" style="width: 50px; margin-left:0px" alt=""> <span class="badge bg-success">
                    <h6> No. Rek: 100-078-3254</h6>
                  </span>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-5">

          <div class="card" style="font-size: 13px;">

            <!-- Product details-->
            <div class="card-body">
              <div class="">
                <label for="cars">Pilih tipe pembayaran:</label>

                <select onchange="price()" class="form-control mb-3" name="tipe_bayaran" id="tipe_bayaran">
                  <option value="viaBank">Transfer Via Bank</option>
                  <option value="cod">COD</option>
                </select>
                <label for="cars">Upload Bukti Pembayaran</label>

                <input required class="form-control mb-3" type="file" name="bukti_pembayaran" id="bukti">
                <script>
                  function price() {
                    var tes = document.getElementById("tipe_bayaran").value;
                    if (tes == "viaBank") {
                      // alert('via bank');
                      document.getElementById('bukti').setAttribute("required", true);
                    } else if (tes == "cod") {
                      // alert('cod');
                      document.getElementById('bukti').removeAttribute("required");
                    }
                  }
                </script>

                <!-- Product name-->
                <table>
                  <tr>
                    <td>Harga Barang</td>
                    <td>:</td>
                    <td>Rp{{$harga}}</td>
                  </tr>
                  <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><span id="nilai2">0</span></td>
                  </tr>
                </table>
                <b>
                  <p class="mt-3" style="font-family: Duru Sans, Verdana, sans-serif;">Total Bayar : <span id="total"> 800000</span></p>
                  <input type="hidden" name="total_bayar" value="" id="valueBayar">
                </b>

                <div class="">
                  <input type="hidden" name="nama_pembeli" value="{{ auth()->user()->nama }}">
                  <input type="hidden" name="nomor_hp_pembelian" value="{{ auth()->user()->username }}">
                  <input type="hidden" name="status_bayar" value="belum_lunas">
                  <input type="hidden" name="status_pengiriman" value="belum_kirim">
                  <input type="hidden" name="tanggal_pembelian" value="<?= date('Y-m-d') ?>">

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
                    document.getElementById('valueBayar').setAttribute('value', int_nilai_1 * hargaBarang);
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
                      document.getElementById('valueBayar').setAttribute('value', int_nilai_1 * hargaBarang);

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
                      document.getElementById('valueBayar').setAttribute('value', int_nilai_1 * hargaBarang);

                    })
                  </script>

                  <button type="submit" class="btn btn-success" href="/bayar"> Bayar Sekarang</button>
                  <a href="/userLogin" class="btn btn-secondary" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini? Informasi pembayaran tidak akan disimpan!')">Batal</a>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
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
              <img src="../user/img/keamanan.jpg" width="200px" alt="">
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
  <script src="../user/js/scripts.js"></script>
  <script src="../user/script.js"></script>
</body>

</html>