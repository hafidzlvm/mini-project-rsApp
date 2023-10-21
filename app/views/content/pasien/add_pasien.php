<!-- Modal -->
<div class="modal fade" id="addPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Pasien</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="contactForm" action="" method="post">
                    <div class="row mb-3">
                        <div class="col-6 my-1">
                            <div>
                                <label class="form-label" for="nomorRm">Nomor RM</label>
                                <input name="no_rkm_medis" class="form-control" id="nomorRm" type="text" placeholder="Nomor RM"
                                    data-sb-validations="required">
                                <div class="invalid-feedback" data-sb-feedback="nomorRm:required">Nomor RM is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-6 my-1">
                            <div>
                                <label class="form-label" for="tglDaftar">Tgl. Daftar</label>
                                <input name="tgl_daftar" id="tglDaftar" class="form-control" type="date"
                                    data-sb-validations="required">
                                <div class="invalid-feedback" data-sb-feedback="tglDaftar:required">Tanggal Daftar
                                    is required.</div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input name="nm_pasien" class="form-control" id="nama" type="text" placeholder="Nama"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label" for="sex">Sex</label>
                            <select name="jk" class="form-select" id="sex" aria-label="Sex">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-6">
                        <div>
                            <label class="form-label" for="tglLahir">Tgl. Lahir</label>
                            <input name="tgl_lahir" id="tglLahir" class="form-control" type="date"
                                data-sb-validations="required">
                            <div class="invalid-feedback" data-sb-feedback="tglLahir:required">Tanggal Daftar
                                is required.</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="form-label" for="penjamin">Penjamin</label>
                            <select name="kd_pj" class="form-select" id="penjamin" aria-label="Penjamin">
                                <option value="-">-</option>
                                <option value="BPJ">BPJS Kesehatan</option>
                                <option value="UMU">Umum</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="noKartu">No. Kartu</label>
                            <input name="no_peserta" class="form-control" id="noKartu" type="text" placeholder="No. Kartu"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="noKartu:required">No. Kartu is required.
                            </div>
                        </div>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>