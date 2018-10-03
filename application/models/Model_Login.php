<?php
class Model_Login extends CI_Model
{
    public function getAllLogin()
    {
        $sql = $this->db->query('select idUser, nomUser, login, mdp from user');
        return $sql->result();
        
    }
}

?>