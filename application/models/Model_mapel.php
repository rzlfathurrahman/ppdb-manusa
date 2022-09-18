<?php 
class Model_mapel extends CI_Model{
    public $id = 'id';
    public $table = 'mapel';
    
    public function tampil_data($table){
        return $this->db->get($table); 
    }
}