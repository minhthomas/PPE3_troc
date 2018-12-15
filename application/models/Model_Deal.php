<?php

class Model_Deal extends CI_Model
{
    public function getAllDealsAndServiceUser1($idUser)
    {
        $sql = $this->db->query("SELECT deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.nomUser, service.nomService, user.photoUser
        FROM deal, offre, service, user
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idUser = user.idUser
        AND offre.idService = service.idService
        AND user.idUser = ".$idUser);
        return $sql->result();
    }

    public function getServiceUser2($idUser)
    {
        $sql = $this->db->query("SELECT service.nomService
        FROM deal, user, offre, etat, service
        WHERE user.idUser = offre.idUser
        AND offre.idOffre = deal.idOffreUser1
        AND offre.idService = service.idService
        AND idCreateur =".$idUser);
        return $sql->result();
    }
}

?>