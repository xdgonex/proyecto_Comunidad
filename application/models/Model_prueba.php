<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_prueba extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_admin()
    {
        $sql = $this->db->select('*');
        $sql = $this->db->from('persona');
        $sql = $this->db->get();
        return $sql->result();
    }
}
