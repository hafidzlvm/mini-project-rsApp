<?php
use App\core\database;

class m_pasien
{
    private $table = "pasien";
    private $db;
    public function __construct()
    {
        $this->db = new database;
    }
    public function index()
    {
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->fetchAll();
        // harus di execute dulu baru fetchALL;
    }
    public function addPasien($data)
    {
        $nm_rkm_medis = $data['no_rkm_medis'];
        $tgl_daftar = $data['tgl_daftar'];
        $nm_pasien = $data['nm_pasien'];
        $jk = $data['jk'];
        $tgl_lahir = $data['tgl_lahir'];
        $kd_pj = $data['kd_pj'];
        $no_peserta = $data['no_peserta'];
        $kd_kel = 1;
        $kd_kec = 1;
        $kd_kab = 1;
        $kd_prop = 1;
        $suku_bangsa = 1;
        $bahasa_pasien = 1;
        $cacat_fisik = 1;
        $nm_ibu = "-";
        $umur = "-";
        $namakeluarga = "-";
        $pekerjaanpj = "-";
        $alamatpj = "-";
        $kelurahanpj = "-";
        $kecamatanpj = "-";
        $kabupatenpj = "-";
        $propinsipj = "-";
        $perusahaan_pasien = "-";
        $email = "-";
        $nip = "-";


        $query = "INSERT INTO $this->table (no_rkm_medis, tgl_daftar, nm_pasien, jk, tgl_lahir, kd_pj, no_peserta, kd_kel, kd_kec, kd_kab, kd_prop, suku_bangsa, bahasa_pasien, cacat_fisik, nm_ibu, umur, namakeluarga, pekerjaanpj, alamatpj, kelurahanpj, kecamatanpj, kabupatenpj, perusahaan_pasien, email, nip, propinsipj) VALUES ('$nm_rkm_medis', '$tgl_daftar', '$nm_pasien', '$jk', '$tgl_lahir', '$kd_pj', '$no_peserta', '$kd_kel', '$kd_kec', '$kd_kab', '$kd_prop', '$suku_bangsa', '$bahasa_pasien', '$cacat_fisik', '$nm_ibu', '$umur', '$namakeluarga', '$pekerjaanpj', '$alamatpj', '$kelurahanpj', '$kecamatanpj', '$kabupatenpj', '$perusahaan_pasien', '$email', '$nip', '$propinsipj')";
        $this->db->query($query);
        return $this->db->execute();

    }
}
?>