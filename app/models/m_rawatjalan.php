<?php
use App\core\database;
use App\core\utility;

class m_rawatjalan
{
    private $table = 'rawat_jalan';
    private $db;
    private $utility;
    public function __construct()
    {
        $this->db = new database;
        $this->utility = new utility;
    }
    public function index($obj)
    {
        $tanggal_kunjungan = date("Y\-m\-j");
        $query = "SELECT $obj FROM $this->table WHERE '$tanggal_kunjungan' = '$tanggal_kunjungan'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->fetchAll();
        // harus di execute dulu baru fetchALL;
    }
    public function addReservasi($data)
    {
        $tgl_konsul = date("Y\-m\-j");
        ################################
        $waktu_konsul1 = date("h:i");
        $waktu_konsul2 = explode(":", date("H:i"));
        $waktu_konsul2 = $waktu_konsul2[0] + "1" . ":" . $waktu_konsul2[1];
        ################################
        $waktu_status = date("Y\-m\-j h:i");
        ################################
        $nama = $this->utility->checkInput($data['nm_pasien']);
        $bpjs = $this->utility->checkInput($data['no_bpjs']);
        $poli = $this->utility->checkInput($data['poli']);
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
    public function update($data)
    {
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

    // Live Search
    public function searchTgl($data)
    {
        $searchOne = $data['searchOne'];
        $query = "SELECT * FROM " . $this->table . " WHERE 
                    `tgl_konsul`
                  LIKE 
                    :tgl";
        ################################
        $this->db->query($query);
        $this->db->bind(':tgl', "%$searchOne%");
        $this->db->execute();
        return $this->db->fetchAll();
    }
    public function searchName($data)
    {
        $searchTwo = $data['searchTwo'];
        $query = "SELECT * FROM " . $this->table . " WHERE 
                    `pasien`,
                    `dokter`,
                    `poli`
                  LIKE 
                    :pasien,
                    :dokter,
                    :kd_poli";
        ################################
        $this->db->query($query);
        $this->db->bind(':pasien', "%$searchTwo%");
        $this->db->bind(':dokter', "%$searchTwo%");
        $this->db->bind(':kd_poli', "%$searchTwo%");
        $this->db->execute();
        return $this->db->fetchAll();
    }
    public function searchNo($data)
    {
        $searchThree = $data['searchThree'];
        $query = "SELECT * FROM " . $this->table . " WHERE 
                    `no_bpjs`
                  LIKE 
                    :no_bpjs";
        ################################
        $this->db->query($query);
        $this->db->bind(':no_bpjs', "%$searchThree%");
        $this->db->execute();
        return $this->db->fetchAll();
    }
    public function search($searchOne, $searchTwo, $searchThree)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ";

        // Menambahkan klausa LIKE berdasarkan input yang diberikan
        $query1 = "`tgl_konsul` LIKE :tgl ";
        $query2 = "`pasien` LIKE :searchTwo1 OR `dokter` LIKE :searchTwo2 OR `poli` LIKE :searchTwo3 ";
        $query3 = "`no_bpjs` LIKE :no_bpjs ";
        if (isset($searchOne)) {
            $query .= " $query1";
            if (isset($searchOne) && isset($searchTwo) || isset($searchThree)){
                $query .= " AND ";
                $queryOne = $query;
            }           
        } 
        if (isset($searchTwo) || isset($searchThree)){
            if (isset($searchTwo) && isset($searchOne)){
                $query .= " $query2";
                if (isset($searchThree)){
                    $query .= " AND ";
                    $query .= " $query3";
                }
            }
            if (isset($searchTwo) && !isset($searchOne) && !isset($searchThree)){
                $query .= " $query2";
            }
            if (isset($searchThree) && isset($searchOne)){
                $queryOne .= " $query3";
                $query = $queryOne;
                if (isset($searchTwo)){
                    $query .= " AND ";
                    $query .= " $query2";
                }
            }
            if (isset($searchThree) && !isset($searchOne)){
                $query .= " $query3";
                if (isset($searchTwo)){
                    $query .= " AND ";
                    $query .= " $query2";
                }
            }
        }
        

        // var_dump($query);
        $this->db->query($query);
        if (!is_null($searchOne)) {
            $this->db->bind(':tgl', "%$searchOne%");
        }

        if (!is_null($searchTwo)) {
            $this->db->bind(':searchTwo1', "%$searchTwo%");
            $this->db->bind(':searchTwo2', "%$searchTwo%");
            $this->db->bind(':searchTwo3', "%$searchTwo%");
        }

        if (!is_null($searchThree)) {
                $this->db->bind(':no_bpjs', "%$searchThree%");
        }

        $this->db->execute();
        return $this->db->fetchAll();
    }

}
?>