<?php

class Model_Deal extends CI_Model
{
    public function getAllDealsAndServiceUser1($idUser)
    {
        $sql = $this->db->query("SELECT deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.nomUser, service.nomService, user.photoUser
        FROM deal, user, offre, etat, service
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idService = service.idService
        AND deal.idEtat = etat.idEtat
        AND deal.idCreateur = user.idUser
        AND user.idUser = ".$idUser);
        return $sql->result();
    }

    public function getServiceUser2($idUser)
    {
        $sql = $this->db->query("SELECT service.nomService
        FROM deal, user, offre, etat, service
        WHERE deal.idOffreUser2 = offre.idOffre
        AND offre.idService = service.idService
        AND deal.idEtat = etat.idEtat
        AND deal.idCreateur = user.idUser
        AND user.idUser = ".$idUser);
        return $sql->result();
    }
}

?>