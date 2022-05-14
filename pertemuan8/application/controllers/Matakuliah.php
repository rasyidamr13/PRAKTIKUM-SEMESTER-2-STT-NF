<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('matakuliah_model');
        $mahasiswa = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;

        $this->load->view('matakuliah/index', $data);
    }
}
?>