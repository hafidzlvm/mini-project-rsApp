<?php
use App\core\controller;
use App\core\utility;

class home extends controller
{
    protected $a;
    public function __construct()
    {
        $this->a = new utility;
    }
    public function index()
    {
        $data2[1] = $this->a->alert();
        $data2[2] = $this->a->flash();
        $data = $this->loadModel('m_rawatjalan')->index('*');
        $this->view('tamplate/header');
        $this->view('sidebar/sidebar');
        $this->view('content/rawatjalan/2nd_line');
        $this->view('content/rawatjalan/rawatjalan', $data, $data2);
        $this->view('tamplate/footer');
    }
    public function liveSearch($data)
{
    $searchOne = (isset($data['searchOne']))?$data['searchOne']:null;
    $searchTwo = (isset($data['searchTwo']))?$data['searchTwo']:null;
    $searchThree = (isset($data['searchThree']))?$data['searchThree']:null;
    if ($searchOne != null or $searchTwo != null or $searchThree != null){
        return $this->loadModel('m_rawatjalan')->search($searchOne, $searchTwo, $searchThree);
    } else {
     return $this->loadModel('m_rawatjalan')->index('*');
    }   
}



    public function search()
    {
        $data = $this->liveSearch($_POST);
        $this->view("search", $data);
    }
}
?>