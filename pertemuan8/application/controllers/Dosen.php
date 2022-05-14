<?php
class Dosen extends CI_Controller{
    public function index(){
        // akses model mahasiswa
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index', $data);
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('dosen_model');
        $siswa = $this->dosen_model->getById($id);
        $data['guru'] = $guru;
        $this->load->view('dosen/detail', $data);
    }
}
?>