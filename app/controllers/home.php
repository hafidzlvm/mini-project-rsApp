<?php
use App\core\controller;
use App\core\utility;
use App\config\config;
class home extends controller
{   
    public function index()
    {  
        $data = $this->loadModel('m_rawatjalan')->index('*');
        $this->view('tamplate/header');
        $this->view('sidebar/sidebar');
        $this->view('content/rawatjalan/2nd_line');
        $this->view('content/rawatjalan/rawatjalan', $data);
        $this->view('tamplate/footer');
    }
}
?>