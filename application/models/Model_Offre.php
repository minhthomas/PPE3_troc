<?php
class Model_Offre extends CI_Model
{
    public function GetAllIdOffre()
    {
        $sql = $this->db->query("select max(idOffre) as idoffre from offre");
        return $sql->result();
    }
}

?>