<?php
class Pengajuan_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('pengajuan')->result();
    }
}
