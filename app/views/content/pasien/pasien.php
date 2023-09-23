<div class="row">
    <div class="col-2"></div>
    <!-- Table content -->
    <div class="col-10 py-3 pt-5 shadow-left">

        <!-- 1nd line -->
        <div class="row">
            <div class="col-10 align-items-center justify-content-center">
                <!-- Rawat Jalan > Semua Status -->
                <a name="pasien" id="pasien" class="fs-5 px-4 text-decoration-none Biru" href="pasien"
                    role="button">Pasien</a>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-light bg-gradient text-dark float-end shadow-sm"><i class="fa fa-circle-info pe-2"></i> Lihat Panduan</button>
            </div>
        </div>
        <!-- End of 1nd line -->

        <!-- 2nd line -->
        <div class="row py-3">
            <div class="col-10">                
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-info bg-gradient text-light float-end shadow-sm" data-bs-toggle="modal" data-bs-target="#addPasien">
                    <i class="fa fa-plus pe-2"></i>Pasien
                </button>
            </div>


        </div>
        <!-- End of 2nd line -->

        <!-- Table line -->
        <div class="row">
            <div class="col-12 px-4 py-3 ms-2">
                <div class="table-responsive">

                    <table class="table table-bordered shadow-sm text-center align-items-center justify-content-center">
                        <thead>
                            <tr>
                                <th>No. RM</th>
                                <th>Nama Pasien</th>
                                <th>Tgl. Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Tgl. Daftar</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($data as $a): ?>
                            <tbody>
                                <tr>
                                    <td class="col-1" id="No. RM">
                                        <?= $a->no_rkm_medis; ?>
                                    </td>
                                    <td class="col-2" id="Nama">
                                        <?= $a->nm_pasien; ?>
                                    </td>
                                    <td class="col-2" id="Tgl. Lahir">
                                        <?= $a->tgl_lahir; ?>
                                    </td>
                                    <td class="col-1" id="Jenis Kelamin">
                                        <?= ($a->jk == "L") ? "Laki-laki" : "Perempuan"; ?><br>
                                    </td>
                                    <td class="col-2" id="Alamat">
                                        <?= $a->alamat; ?><br>
                                    </td>
                                    <td class="col-1" id="Telepon">
                                        <?= $a->no_tlp; ?><br>
                                    </td>
                                    <td class="col-1" id="Tgl. Daftar">
                                        <?= $a->tgl_daftar; ?><br>
                                    </td>
                                    <td class="col-1" id="Email">
                                        <?= $a->email; ?><br>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>
        <!-- End of Table line -->
        <div class="row">
            <div class="col-12 py-5">
                <?php var_dump($_GET) ?>
                <br>
                <?= date("l jS \of F Y h:i:s A") ?>
                <br>
                <?= date("j\-m\-Y") ?>
            </div>
        </div>

    </div>
    <!-- End of Table content -->
</div>
