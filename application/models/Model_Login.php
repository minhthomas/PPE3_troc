<?php
class Model_Login extends CI_Model
{
    public function GetAllUser()
    {
        $sql = $this->db->query('select nomUser from user');
        return $sql->result();
    }
}
?>