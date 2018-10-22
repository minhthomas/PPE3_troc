<?php
class Model_Offre extends CI_Model
{
    public function GetAllModel1()
    {
        $sql = $this->db->query("select max(idOffre) from offre");
        return $sql->result();
    }
}

?>