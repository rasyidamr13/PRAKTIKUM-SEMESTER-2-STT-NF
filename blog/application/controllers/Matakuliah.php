<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('matakuliah_model','mkl1');

        $this->mkl1->id=1;
        $this->mkl1->nama='Pemrograman Web 2';
        $this->mkl1->sks='001';
        $this->mkl1->kode='PW2';

        $list_mkl = [$this->mkl1];
        $data['list_mkl'] = $list_mkl;

        $this->load->view('matakuliah/index', $data);
    }
}
?>