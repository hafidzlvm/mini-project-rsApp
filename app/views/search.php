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
                                <input name="id" class="btn btn-primary" type="hidden" value="<?= $a->id; ?>">
                                <?php if ($a->status == "registrasi"): ?>
                                    <select class="form-select shadow-sm text-start opacity-75 col-12"
                                        aria-label="Default select example" name="status" onchange="this.form.submit();">
                                        <option value="registrasi" selected>
                                            <button type="submit" class="btn btn-primary">Registrasi</button>
                                        </option>
                                        <option value="selesai">
                                            <button type="submit" class="btn btn-primary">Selesai</button>
                                        </option>
                                    </select>
                                <?php elseif ($a->status == "selesai"): ?>
                                    <select class="form-select shadow-sm text-start opacity-75 col-12"
                                        aria-label="Default select example" name="status" onchange="this.form.submit();">
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