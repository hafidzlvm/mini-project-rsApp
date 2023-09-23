<?php 
use App\core\database;
use App\core\utility;
class m_rawatjalan {
    private $table = 'rawat_jalan';
    private $db;
    private $utility;
    public function __construct(){
        $this->db = new database;
        $this->utility = new utility;
    }
    public function index($obj){
        $tanggal_kunjungan = date("Y\-m\-j");
        $query = "SELECT $obj FROM $this->table WHERE '$tanggal_kunjungan' = '$tanggal_kunjungan'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->fetchAll();
        // harus di execute dulu baru fetchALL;
    }
    public function addReservasi($data){
        $tgl_konsul = date("Y\-m\-j");
        ################################
        $waktu_konsul1 = date("h:i");
        $waktu_konsul2 = explode(":",date("H:i"));
        $waktu_konsul2 = $waktu_konsul2[0]+"1".":".$waktu_konsul2[1];
        ################################
        $waktu_status = date("Y\-m\-j h:i");
        ################################
        $nama = $this->utility->checkInput($data['nm_pasien']);
        $bpjs = $this->utility->checkInput($data['no_bpjs']);
        $poli =  $this->utility->checkInput($data['poli']);
        $dokter = $this->utility->checkInput($data['dokter']);
        ################################
        $query = "INSERT INTO $this->table (`tgl_konsul`,`waktu_konsul1`, `waktu_konsul2`, `pasien`, `no_bpjs`, `poli`, `dokter`, `status`, `waktu_status`) VALUES (:tgl_konsul, :waktu_konsul1, :waktu_konsul2, :nama, :bpjs, :poli, :dokter, 'registrasi', :waktu);";
        ################################
        $this->db->query($query);
        $this->db->bind(':tgl_konsul', $tgl_konsul);
        $this->db->bind(':waktu_konsul1', $waktu_konsul1);
        $this->db->bind(':waktu_konsul2', $waktu_konsul2);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':bpjs', $bpjs);
        $this->db->bind(':poli', $poli);
        $this->db->bind(':dokter', $dokter);
        $this->db->bind(':waktu', $waktu_status);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function update($data){
        $status = $this->utility->checkInput($data["status"]);
        $id = $this->utility->checkInput($data["id"]);
        $waktu_status = date("Y\-m\-j h:i");
        ################################
        $query = "UPDATE $this->table SET `status` = :status WHERE `id` = :id;";
        $query .= "UPDATE $this->table SET `waktu_status` = :ws WHERE `id` = :id;";
        $this->db->query($query);
        $this->db->bind(':status', $status);
        $this->db->bind(':ws', $waktu_status);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>