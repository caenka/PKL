<?php
class Admin_model extends CI_Model
{

    public function getdataUser()
    {
        return $this->db->get_where('tb_users', ['role_id' => 2])->result();
    }
}
