<?php

class Model_Demande extends CI_Model
{
    public function getAllDemande($idUser)
    {
        $sql = $this->db->query("SELECT idDemande, descriptionDemande, dateDemande, nomService, service.idService, region.idRegion, region.LibelleRegion
        FROM demande, service, region
        WHERE demande.idService = service.idService
        AND region.idRegion = demande.idRegion
        AND idUser = ".$idUser);
        return $sql->result();
    }

    public function getInformationDemandeById($idUser, $idDemande)
    {
        $sql = $this->db->query("SELECT idDemande, descriptionDemande, dateDemande, nomService
        FROM demande, service
        WHERE demande.idService = service.idService
        AND idUser = ".$idUser."
        AND idDemande = ".$idDemande);
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

    public function addIdDemande()
    {
        $sql = $this->db->query("select max(idDemande) + 1 as iddemande from demande");
        return $sql->result();
    }

    public function insertDemande($txtnextdemande, $txtadddescDemande, $idservice, $idUser)
    {
        $data = array(
            'idDemande' => $txtnextdemande,
            'descriptionDemande' => $txtadddescDemande,
            'dateDemande' => date('y-m-d'),
            'idService' => $idservice,
            'idUser' => $idUser,
        );
        $this->db->insert('demande',$data);
    }
}

?>