<?php

class Model_Offre extends CI_Model
{
    public function getAllOffre($idUser)
    {
        $sql = $this->db->query("SELECT idOffre, descriptionOffre, dateOffre, nomService
        FROM offre, service
        WHERE offre.idService = service.idService
        AND idUser = ".$idUser);
        return $sql->result();
    }

    public function getAllService()
    {
        $sql = $this->db->query("SELECT idService, nomService FROM service");
        return $sql->result();
    }

    public function setOffre($idOffre, $descOffre, $dateOffre)
    {
        $sql = $this->db->query("UPDATE offre SET descriptionOffre = '".$descOffre."', dataOffre = '".$dateOffre."' WHERE idOffre = ".$idOffre);
    }
}

?>