<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rawat Jalan | Klinik <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#Id1" aria-controls="Id1">Enable both scrolling & backdrop</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Id1"
      aria-labelledby="Enable both scrolling & backdrop">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="Enable both scrolling & backdrop">Backdrop with scrolling</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <p>Try scrolling the rest of the page to see this option in action.</p>
      </div>
    </div>
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../public/assets/css/all.css">

</head>

<style>
  .banner {
    height: 80vh;
    /* height ini memberikan batasan sehingga img nya tidak full ke bawah page nya */
    /* untuk memberikan sebuah image jangan lupa url + yang terpenting adalah tanda petik 1 atau 2 */
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('image/StockSnap_46VCPZQ87W.jpg');
    /* di sini kita menambahkan linear gradient agar image menjadi lebih trasnparant jangan lupa di bagian akhir agar menambahkan 0.5 atau zero point five */
    background-size: cover;
    background-position: center;
  }

  .banner-content {
    height: 100%;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .carousel-contain {
    background-color: #212529;
    color: white;
  }

  .bordered {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
  }

  .real-border {
    border-top: 1px solid rgba(0, 0, 0, 0.3);
  }

  /* bordered ini digunakan untuk mengechek saja sudah benar apa belum dan di tempel pada container->container-fluid jika sudah cukup di hapus */

  .nav-tabs .nav-item .nav-link,
  .btnDrop {
    background-color: rgb(252, 252, 253);
    color: black;
  }

  .nav-tabs .nav-item .nav-link .active {
    color: #0080FF;
  }

  .bgDrop {
    background-color: rgb(108, 117, 125);
  }

  .Biru {
    color: rgb(13, 202, 240);
  }
</style>

<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">

      <!-- Sidebar -->
      <div class="col-auto p-0 col-md-3 col-xl-2 bg-light-subtle bordered">

        <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white min-vh-100">

          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black  text-decoration-none">
            <!-- ms-4 -->
            <i class="fs-5 ms-4 fa fa-hospital mx-3 Biru"></i>
            <i class="fs-1 fa d-none d-sm-inline me-3 mb-3 opacity-50">|</i>
            <span class="fs-6 d-none d-sm-inline opacity-50">Klinik Berkah<br>Bermanfaat</span>
          </a>
          <!-- Sidebar -->
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start col-12"
            id="menu">

            <!-- Dashboard -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#" class="nav-link align-middle px-0 text-black ">
                <i class="fs-4 ms-4 Biru fa fa-gauge col-2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
              </a>
            </li>
            <!-- End of Dashboard -->
            <!-- Rawat Jalan -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#rawatJalan" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-house col-2"></i> <span class="dropdown-toggle d-none d-sm-inline ">Rawat
                  Jalan</span>
              </a>
              <ul class="collapse nav flex-column col-12" id="rawatJalan" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">Semua
                      Status</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span
                      class="d-none d-sm-inline">Reservasi</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span
                      class="d-none d-sm-inline">Registrasi</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Rawat Jalan -->
            <!-- Rekam Medis -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#rekamMedis" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-notes-medical col-2"></i> <span
                  class="dropdown-toggle d-none d-sm-inline ">Rekam Medis</span>
              </a>

              <ul class="collapse nav flex-column col-12" id="rekamMedis" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">1</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">2</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">3</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Rekam Medis -->
            <!-- Pembayaran -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 fa fa-credit-card Biru col-2"></i> <span
                  class="d-none d-sm-inline">Pembayaran</span></a>
            </li>
            <!-- Master Data -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#masterData" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-server col-2"></i> <span
                  class="dropdown-toggle d-none d-sm-inline ">Master Data</span>
              </a>
              <ul class="collapse nav flex-column col-12" id="masterData" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">1</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">2</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">3</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Master Data -->
            <!-- Jadwal Dokter -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#jadwalDokter" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-calendar-days col-2"></i> <span
                  class="dropdown-toggle d-none d-sm-inline ">Jadwal Dokter</span>
              </a>
              <ul class="collapse nav flex-column col-12" id="jadwalDokter" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">1</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">2</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">3</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Jadwal Dokter -->
            <!-- Pasien -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 fa fa-user Biru col-2"></i> <span class="d-none d-sm-inline">Pasien</span></a>
            </li>
            <!-- End of Pasien -->
            <!-- Inventori -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 fa fa-box Biru col-2"></i> <span class="d-none d-sm-inline">Inventori</span></a>
            </li>
            <!-- End of Inventori -->
            <!-- Closing & Laporan -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#closingLaporan" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-clipboard-check col-2"></i> <span
                  class="dropdown-toggle d-none d-sm-inline ">Closing & Laporan</span>
              </a>
              <ul class="collapse nav flex-column col-12" id="closingLaporan" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">1</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">2</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">3</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Closing & Laporan -->
            <!-- Integrasi -->
            <li class="nav-item real-border py-1 col-12">
              <a href="#integrasi" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                <i class="fs-4 ms-4 Biru fa fa-circle-nodes col-2"></i> <span
                  class="dropdown-toggle d-none d-sm-inline ">Integrasi</span>
              </a>
              <ul class="collapse nav flex-column col-12" id="integrasi" data-bs-parent="#menu">
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">1</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">2</span></a>
                </li>
                <li class="w-100 offset-3">
                  <a href="#" class="nav-link px-0 ms-1 text-dark"> <span class="d-none d-sm-inline">3</span></a>
                </li>
              </ul>
            </li>
            <!-- End of Integrasi -->


          </ul>

          <div class="real-border dropdown py-3 col-12">
            <a href="#" class="d-flex align-items-center text-black text-decoration-none " id="dropdownUser1"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fs-5 ms-4 Biru fa fa-user-gear col-2"></i>
              <span class="d-none d-sm-inline dropdown-toggle">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider bg-black">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>

        </div>
      </div>
      <!-- End of Sidebar -->

      <!-- Table content -->
      <div class="col py-3 pt-5 shadow-left">
        <div class="row">
          <div class="col-10 align-items-center justify-content-center">
            <!-- Rawat Jalan > Semua Status -->
            <a name="RawatJalan" id="RawatJalan" class="fs-5 px-4 text-decoration-none Biru" href="#"
              role="button">Rawat Jalan</a><i class="fs-5 fa fa-angle-right opacity-50"></i>
          </div>
          <div class="col-2">
            <!-- Lihat Panduan -->
          </div>
        </div>
      </div>
      <!-- End of Table content -->

    </div>
  </div>

  <script src="../../../public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>