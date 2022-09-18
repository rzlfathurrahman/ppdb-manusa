<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jumlah extends CI_Model {

	public function jumlah_peserta()
	{
	    $query = $this->db->query("SELECT COUNT(*) AS total FROM peserta");
	    return $query->result();
	}
	public function jumlah_jurusan()
	{
	    $query = $this->db->query("SELECT jurusan, COUNT(*) AS total FROM peserta group by jurusan order by count(*) ");
	    return $query->result();
	}
	public function jumlah_jk()
	{
	    $query = $this->db->query("SELECT jk, COUNT(*) AS total FROM peserta group by jk order by count(*) ");
	    return $query->result();
	}

}

/* End of file Model_jumlah */
/* Location: ./application/models/Model_jumlah */