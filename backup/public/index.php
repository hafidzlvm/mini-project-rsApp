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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">

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
    border: 1px solid black;
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
  <main>
    <div class="container-fluid min-vh-100 max-vh-100">
      <div class="row ">

        <div
          class="bordered col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-light-subtle bgDrop p-2 min-vh-100 max-vh-100">

          <a href="#" class="d-flex text-decoration-none mt-1 align-items-center text-dark col-10">
            <i class="fs-5 fa fa-hospital mx-3 Biru"></i>
            <i class="fs-1 fa me-3 mb-3 opacity-75">|</i>
            <span class="fs-6 d-none d-sm-inline opacity-75">Klinik Berkah<br>Bermanfaat</span>
          </a>

          <hr class="start-0" style="width: 285px;">

          <ul class="list-unstyled text-dark col-12">
            <li class="nav-item">
              <a href="#" class="nav-link col-12">
                <i class="fs-5 fa fa-gauge Biru col-2"></i><div class="fs-6 d-none d-sm-inline col-10">Dashboard</div>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">

            <p>
              <li class="nav-item col-12">
                <btn class="nav-link" type="button" data-bs-target="#collapseExample" data-bs-toggle="collapse"
                  aria-expanded="false">
                  <i class="fs-5 fa fa-house Biru col-2"></i>
                  <div class="fs-6 d-none d-sm-inline">Rawat Jalan</div>
                  <i class="dropdown-toggle offset-5"></i>
                </btn>

                <div class="collapse my-3" id="collapseExample">
                  <span class="mx-4"></span>
                  <a class="text-decoration-none text-dark" href="#"><span>Semua Status</span></a>
                </div>
                <div class="collapse my-3" id="collapseExample">
                  <span class="mx-4"></span>
                  <a class="text-decoration-none text-dark" href="#">Reservasi</a>
                </div>
                <div class="collapse my-3" id="collapseExample">
                  <span class="mx-4"></span>
                  <a class="text-decoration-none text-dark" href="#">Registrasi</a>
                </div>
              </li>
            </p>

            <hr class="start-0" style="width: 285px;">
            <li class="nav-item d-flex">
              <a href="#" class="nav-link col-12">
                <i class="fs-5 fa fa-notes-medical Biru"></i><span class="fs-6 ms-3 me-3 d-none d-sm-inline">Rekam
                  Medis</span><i class="offset-5 dropdown-toggle"></i>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-credit-card Biru"></i><span class="fs-6 ms-3 d-none d-sm-inline">Pembayaran</span>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-server Biru"></i>
                <sp=an class="fs-6 ms-3 me-4 d-none d-sm-inline">Master Data</sp=an><i
                  class="offset-5 dropdown-toggle"></i>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-calendar-days Biru"></i><span class="fs-6 ms-3 d-none d-sm-inline"
                  style="margin-right: 57px">Jadwal Dokter</span><i class="offset-3 dropdown-toggle"></i>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-user Biru"></i><span class="fs-6 ms-3 d-none d-sm-inline">Pasien</span>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-box Biru"></i><span class="fs-6 ms-3 d-none d-sm-inline">Inventori</span>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-clipboard-check Biru"></i><span class="fs-6 ms-3 me-2 d-none d-sm-inline">Closing &
                  Laporan</span><i class="offset-4 dropdown-toggle"></i>
              </a>
            </li>
            <hr class="start-0" style="width: 285px;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fs-5 fa fa-circle-nodes Biru"></i><span
                  class="fs-6 ms-3 me-5 d-none d-sm-inline">Integrasi</span><i class="offset-5 dropdown-toggle"></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Offcanvas -->
        <div class="col-sm-8 col-md-8 col-lg-9 col-xl-9 col-xxl-9 p-2 min-vh-100 max-vh-100"></div>

      </div>
    </div>


  </main>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>