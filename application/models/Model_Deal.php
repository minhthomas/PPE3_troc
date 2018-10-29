<?php

class Model_Deal extends CI_Model
{
    public function getAllDeals($idUser)
    {
        $sql = $this->db->query("SELECT idDemande, descriptionDemande, dateDemande, nomService
        FROM demande, service
        WHERE demande.idService = service.idService
        AND idUser = ".$idUser);
        return $sql->result();
    }
}

?>