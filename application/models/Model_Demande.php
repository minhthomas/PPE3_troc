<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande($idUser)
    {
        $sql = $this->db->query("SELECT idDemande, descriptionDemande, dateDemande, nomService
        FROM demande, service
        WHERE demande.idService = service.idService
        AND idUser = ".$idUser);
        return $sql->result();
    }

    public function getAllService()
    {
        $sql = $this->db->query("SELECT idService, nomService FROM service");
        return $sql->result();
    }

    public function setOffre($idDemande, $descDemande, $dateDemande)
    {
        $sql = $this->db->query("UPDATE demande 
        SET descriptionDemande = '".$descDemande."', 
        dateDemande = '".$dateDemande."' 
        WHERE idDemande = ".$idDemande);
    }
}

?>