<?php
namespace App\core;

use App\core\controller;

class utility
{
    public function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }
    public static function setFlash($type, $message, $action)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message,
            'action' => $action
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            print '<div id="alert" class="position-absolute offset-5 mt-3 col-3 alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">' .
                '<strong>' . $_SESSION['flash']['message'] . ' </strong>' . $_SESSION['flash']['action'] .
                '<button type="button" class="btn-close" id="closeAlert" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
            unset($_SESSION['flash']);
        }
    }
    public function alert()
    {
        $a = new controller();
        if (isset($_POST["nm_pasien"])) {
            if ($a->loadModel('m_rawatjalan')->addReservasi($_POST) > 0) {
                // Cek 
                utility::setFlash("success", "Tambahan Reservasi ", "Success");
            } else {
                utility::setFlash("danger", "Tambahan Reservasi ", "Error");
            }

        }

        if (isset($_POST["status"]) == "selesai" || isset($_POST["status"]) == "registrasi") {
            if ($a->loadModel('m_rawatjalan')->update($_POST) > 0) {
                // Cek 
                utility::setFlash("success", "Perubahan Status ", "Success");
            } else {
                utility::setFlash("danger", "Perubahan Status ", "Error");
            }
        }
    }
}
?>