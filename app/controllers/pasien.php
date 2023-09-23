<?php 
use App\core\controller;
class pasien extends controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->loadModel('m_pasien')->addPasien($_POST);
        }

        $data = $this->loadModel('m_pasien')->index();
        $this->view('tamplate/header');
        $this->view('sidebar/sidebar');
        $this->view('content/pasien/pasien', $data);
        $this->view('content/pasien/add_pasien',);
        $this->view('tamplate/footer');
    

}
}
?>