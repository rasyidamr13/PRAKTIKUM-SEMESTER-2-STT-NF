<?php
class Matakuliah_model extends CI_Model{
    public $id, $nama, $sks, $kode;

    public function getAll(){
        // menampilkan data dengan query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
}
?>