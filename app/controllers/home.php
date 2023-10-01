<?php
use App\core\controller;
use App\core\utility;
class home extends controller
{   
    protected $a;
    public function __construct(){
        $this->a = new utility;
    }
    public function index()
    {   
        // $data2[0] = $this->a->liveSearch();
        $data2[1] = $this->a->alert();
        $data2[2] = $this->a->flash();
        $data = $this->loadModel('m_rawatjalan')->index('*');
        $this->view('tamplate/header');
        $this->view('sidebar/sidebar');
        $this->view('content/rawatjalan/2nd_line');
        $this->view('content/rawatjalan/rawatjalan', $data, $data2);
        $this->view('tamplate/footer');
    }
}
?>