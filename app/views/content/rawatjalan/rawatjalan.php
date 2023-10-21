        <div class="row col-12 mx-1 px-0">
            <div class="col-xl-2 col-md-4 col-sm-4 col-lg-3"></div>
            <!-- Table content -->
            <div class="col-xl-10 py-3 pt-5 shadow-left col-md-7 col-sm-8 col-lg-8">

                <!-- 1nd line -->
                <div class="row">
                    <div class="col-5 align-items-center justify-content-center">
                        <!-- Rawat Jalan > Semua Status -->
                        <a id="content-rawatjalan" class="fs-5 px-4 text-decoration-none Biru" href="rawatjalan"
                            role="button">Rawat Jalan</a><i class="fs-5 fa fa-angle-right opacity-50"></i><span
                            class="fs-5 px-4 text-decoration-none text-black opacity-75">Semua Status</span>
                    </div>
                    <div class="col-5">
                        <?= $data2[2]; ?>
                    </div>
                    <div class="col-2">
                        <!-- Lihat Panduan -->
                        <button type="button" class="btn btn-light bg-gradient text-dark float-end shadow-sm"
                            data-bs-toggle="modal" data-bs-target="#panduan"><i class="fa fa-circle-info pe-2"></i> Lihat
                            Panduan</button>
                    </div>
                </div>
                <!-- End of 1nd line -->


                <!-- 2nd line -->
                <div class="row py-3 ms-2">
                    <div class="col-2 ">
                        <select class="btn form-select bg-info bg-gradient text-light shadow-sm text-start "
                            aria-label="Default select example" name="t-pembayaran">
                            <option selected value="cash"><i value="fa fa-sliders pe-2"></i> Tipe Pembayaran</option>
                            <option value="e_money">e-Money</option>
                            <option value="bank_transfer">Bank Transfer</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-select shadow-sm text-start col-12" aria-label="Default select example" name="poli">
                            <option value="p_gigi">Poli Gigi</option>
                            <option selected value="p_umum">Poliklinik</option>
                            <option value="p_umum">Poli Umum</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-select shadow-sm text-start col-12" aria-label="Default select example"
                            name="dokter">
                            <option selected value="Pitoyo">Dokter</option>
                            <option value="VaniaUtami">Dr. Vania Utami</option>
                            <option value="Pitoyo">Dr. Pitoyo</option>
                        </select>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-2">
                        <!-- Modal trigger button -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info bg-gradient text-light float-end shadow-sm"
                            data-bs-toggle="modal" data-bs-target="#addReservasi">
                            <i class="fa fa-plus pe-2"></i>Reservasi
                        </button>
                    </div>
                </div>
                <!-- End of 2nd line -->
                </form>

                <!-- 3nd line -->

                <!-- End of 3nd line -->

                <!-- Live Search line -->
                <form action="" method="post">
                    <div class="row py-3 ms-2 live">
                        <div class="col-4">
                            <div class="mb-3 shadow-sm">
                                <input type="date" class="form-control searchOne" name="searchOne" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3 shadow-sm input-group">
                                <input type="text" class="form-control" name="seachTwo" id="searchTwo"
                                    placeholder="Cari MRN, pasien, dokter, kode poli">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3 shadow-sm input-group">
                                <input type="text" class="form-control" name="search_three" id="searchThree"
                                    placeholder="Cari no. rujukan, no.voucher ...">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="submit" id="tombol-cari" class="btn btn-primary">Submit</button> -->
                </form>
                <!-- End of Live Search line -->

                <!-- Table line -->
                <div class="row">
                    <div class="col-12 px-4 py-3 ms-2">
                        <div id="hasil">
                            <div class="table-responsive">
                                <table class="text-justify table bx shadow-sm text-center align-middle justify-content-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Waktu Konsul</th>
                                            <th scope="col">Antrian</th>
                                            <th scope="col" class="text-start ps-5">Pasien</th>
                                            <th scope="col">Poli</th>
                                            <th scope="col">Dokter</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>

                                    <?php if ($data == null): ?>
                                        <tbody>
                                            <tr>
                                                <td colspan="6" class="text-center shadow-sm">Tidak ada data</td>
                                            </tr>
                                        </tbody>
                                    <?php else: ?>

                                        <?php $no = 1; ?>
                                        <?php foreach ($data as $a): ?>
                                            <tbody>
                                                <tr>
                                                    <td class="col-1" id="Waktu Konsul">
                                                        <span class="text-dark">
                                                            <?= $a->tgl_konsul; ?>
                                                        </span>
                                                        <br>
                                                        <span class="opacity-50">
                                                            <?= $a->waktu_konsul1; ?> -
                                                            <?= $a->waktu_konsul2; ?>
                                                        </span>
                                                    </td>
                                                    <td class="col-1" id="Antrian">
                                                        <?= $no ?>
                                                    </td>
                                                    <td class="col-2 text-start ps-5" id="Pasien">
                                                        <b>
                                                            <?= $a->pasien; ?>
                                                        </b>
                                                        <br>
                                                        <span class="opacity-50">
                                                            BPJS Kesehatan -
                                                            <?= $a->no_bpjs; ?>
                                                        </span>
                                                    </td>
                                                    <td class="col-2" id="Poli">
                                                        <?php if ($a->poli == "p_gigi"): ?>
                                                            Poli Gigi
                                                        <?php elseif ($a->poli == "p_umum"): ?>
                                                            Poli Umum
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="col-2" id="Dokter">
                                                        <?php if ($a->dokter == "VaniaUtami"): ?>
                                                            drg. Vania Utami
                                                        <?php elseif ($a->dokter == "Pitoyo"): ?>
                                                            dr. Pitoyo
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="col-1" id="Status">
                                                        <form class="m-2" action="" method="post">
                                                            <input name="id" class="btn btn-primary" type="hidden"
                                                                value="<?= $a->id; ?>">
                                                            <?php if ($a->status == "registrasi"): ?>
                                                                <select class="form-select shadow-sm text-start opacity-75 col-12"
                                                                    aria-label="Default select example" name="status"
                                                                    onchange="this.form.submit();">
                                                                    <option value="registrasi" selected>
                                                                        <button type="submit" class="btn btn-primary">Registrasi</button>
                                                                    </option>
                                                                    <option value="selesai">
                                                                        <button type="submit" class="btn btn-primary">Selesai</button>
                                                                    </option>
                                                                </select>
                                                            <?php elseif ($a->status == "selesai"): ?>
                                                                <select class="form-select shadow-sm text-start opacity-75 col-12"
                                                                    aria-label="Default select example" name="status"
                                                                    onchange="this.form.submit();">
                                                                    <option value="selesai" selected>
                                                                        <button type="submit" class="btn btn-primary">Selesai</button>
                                                                    </option>
                                                                    <option value="registrasi">
                                                                        <button type="submit" class="btn btn-primary">Registrasi</button>
                                                                    </option>
                                                                </select>
                                                            <?php endif; ?>
                                                        </form>
                                                        <span class="opacity-50">
                                                            <?= $d = $a->waktu_status; ?>
                                                        </span>
                                                    </td>

                                                </tr>
                                            </tbody>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Table line -->
                <div class="row">
                    <div class="col-12 py-5">
                    </div>
                </div>

            </div>

            <!-- End of Table content -->
        </div>