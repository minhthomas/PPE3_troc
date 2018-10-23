<?php

class Model_Deal extends CI_Model
{
    public function getAllDeals($idUser)
    {
        $sql = $this->db->query("");
        return $sql->result();
    }
}

?>