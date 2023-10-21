<!-- Modal Panduan -->
<div class="modal fade" id="panduan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Panduan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                Contoh panduan
            </div>
        </div>
    </div>
</div>



<!-- Modal Reservasi -->
<form action="" method="post">
    <div class="modal fade" id="addReservasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Reservasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <input name="nm_pasien" class="form-control" id="nama" type="text" placeholder="Nama" required>
                        <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
                    </div>
                    <div>
                        <label class="form-label" for="noBPJS">No. BPJS</label>
                        <input name="no_bpjs" class="form-control" id="noBPJS" type="text" placeholder="Nomor RM"
                            required>
                        <div class="invalid-feedback" data-sb-feedback="noBPJS:required">Nomor RM is required.
                        </div>
                    </div>



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
                </div>



            </div>
        </div>
    </div>