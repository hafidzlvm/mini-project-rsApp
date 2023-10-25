@extends('layouts.main')
@section('title', 'Rawat Jalan')
@section('content')

    <!-- 1nd line -->
    <div class="row">
        <div class="col-5 align-items-center justify-content-center">
            <!-- Rawat Jalan > Semua Status -->
            <a id="content-rawatjalan" class="fs-5 px-4 text-decoration-none Biru" href="rawatjalan" role="button">Rawat
                Jalan</a><i class="fs-5 fa fa-angle-right opacity-50"></i><span
                class="fs-5 px-4 text-decoration-none text-black opacity-75">Semua Status</span>
        </div>
        <div class="col-5">
            {{-- data2 --}}
        </div>
        <div class="col-2 pe-1">
            <!-- Lihat Panduan -->
            <button type="button" class="btn btn-light bg-gradient text-dark float-end shadow-sm" data-bs-toggle="modal"
                data-bs-target="#panduan"><i class="fa fa-circle-info pe-2"></i> Lihat
                Panduan</button>
        </div>
    </div>
    <!-- End of 1nd line -->

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
    {{-- End of Modal --}}



    <!-- Modal Reservasi -->
    <form action="{{ route('rawat-jalan.store') }}" method="post">
        @csrf
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
                            <input name="nm_pasien" class="form-control" id="nama" type="text" placeholder="Nama"
                                required>
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
        {{-- End of Modal --}}


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
                <select class="form-select shadow-sm text-start col-12" aria-label="Default select example" name="poli" required>
                    <option selected value="">Poliklinik</option>
                    <option value="p_gigi">Poli Gigi</option>
                    <option value="p_umum">Poli Umum</option>
                </select>
            </div>
            <div class="col-3">
                <select class="form-select shadow-sm text-start col-12" aria-label="Default select example" name="dokter" required>
                    <option selected value="">Dokter</option>
                    <option value="VaniaUtami">Dr. Vania Utami</option>
                    <option value="Pitoyo">Dr. Pitoyo</option>
                </select>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2 pe-4">
                <!-- Modal trigger button -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info bg-gradient text-light float-end shadow-sm"
                    data-bs-toggle="modal" data-bs-target="#addReservasi">
                    <i class="fa fa-plus pe-2"></i>Reservasi
                </button>
            </div>
        </div>
    </form>
    <!-- End of 2nd line -->

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
                        @if ($data == null)
                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center shadow-sm">Tidak ada data</td>
                                </tr>
                            </tbody>
                        @else
                            @foreach ($data as $a)
                                <tbody>
                                    <tr>
                                        <td class="col-1" id="Waktu Konsul">
                                            <span class="text-dark">
                                                {{ $a['tgl_konsul'] }}
                                            </span>
                                            <br>
                                            <span class="opacity-50">
                                                {{ $a['waktu_konsul1'] }} -
                                                {{ $a['waktu_konsul2'] }}
                                            </span>
                                        </td>
                                        <td class="col-1" id="Antrian">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="col-2 text-start ps-5" id="Pasien">
                                            <b>
                                                {{ $a['pasien'] }}
                                            </b>
                                            <br>
                                            <span class="opacity-50">
                                                BPJS Kesehatan -
                                                {{ $a['no_bpjs'] }}
                                            </span>
                                        </td>
                                        <td class="col-2" id="Poli">
                                            @if ($a['poli'] == 'p_gigi')
                                                Poli Gigi
                                            @elseif ($a['poli'] == 'p_umum')
                                                Poli Umum
                                            @endif
                                        </td>
                                        <td class="col-2" id="Dokter">
                                            @if ($a['dokter'] == 'vaniautami')
                                                drg. Vania Utami
                                            @elseif ($a['dokter'] == 'pitoyo')
                                                dr. Pitoyo
                                            @endif
                                            {{-- {{ Str::ucfirst($a['dokter']) }} --}}
                                        </td>
                                        <td class="col-1" id="Status">
                                            <form class="m-2" action="/rawat-jalan/update/{{ $a['id_rawat_jalan'] }}" method="post">
                                                @csrf
                                                <input name="id" class="btn btn-primary" type="hidden"
                                                    value="{{ $a['id'] }}">
                                                @if ($a['status'] == 'registrasi')
                                                    <select class="form-select shadow-sm text-start opacity-75 col-12"
                                                        aria-label="Default select example" name="status"
                                                        onchange="this.form.submit();">
                                                        <option value="registrasi" selected>
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrasi</button>
                                                        </option>
                                                        <option value="selesai">
                                                            <button type="submit"
                                                                class="btn btn-primary">Selesai</button>
                                                        </option>
                                                    </select>
                                                @elseif ($a['status'] == 'selesai')
                                                    <select class="form-select shadow-sm text-start opacity-75 col-12"
                                                        aria-label="Default select example" name="status"
                                                        onchange="this.form.submit();">
                                                        <option value="selesai" selected>
                                                            <button type="submit"
                                                                class="btn btn-primary">Selesai</button>
                                                        </option>
                                                        <option value="registrasi">
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrasi</button>
                                                        </option>
                                                    </select>
                                                @elseif ($a['status'] == '-')
                                                    <select class="form-select shadow-sm text-start opacity-75 col-12"
                                                        aria-label="Default select example" name="status"
                                                        onchange="this.form.submit();">
                                                        <option value="-" selected>
                                                            <button type="submit" class="btn btn-primary">-</button>
                                                        </option>
                                                        <option value="selesai">
                                                            <button type="submit"
                                                                class="btn btn-primary">Selesai</button>
                                                        </option>
                                                        <option value="registrasi">
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrasi</button>
                                                        </option>
                                                    </select>
                                                @endif
                                            </form>
                                            <span class="opacity-50">
                                                {{ $a['waktu_status'] }}
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>
                            @endforeach
                        @endif

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Table line -->
    <div class="row">
        <div class="col-12 py-2">

        </div>
    </div>

    {{-- </div> --}}

    <!-- End of Table content -->
    {{-- </div> --}}
@endsection
