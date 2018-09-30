<?php
class Model_Login extends CI_Model
{
    public function getAllLogin()
    {
        $sql = $this->db->get('user');
    }
}

?>