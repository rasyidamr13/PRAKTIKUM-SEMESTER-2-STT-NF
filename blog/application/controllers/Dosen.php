<?php
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model','dsn1');

        $this->dsn1->id=1;
        $this->dsn1->nidn='0101';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model','dsn2');

        $this->dsn2->id=2;
        $this->dsn2->nidn='0202';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model','dsn3');

        $this->dsn3->id=3;
        $this->dsn3->nidn='0303';
        $this->dsn3->pendidikan='S3';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('dosen/index', $data);
    }
}
?>