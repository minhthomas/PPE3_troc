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

    public function getInformationsByIdDeal($idDeal)
    {
        $sql = $this->db->query("SELECT deal.idDeal, deal.noteUser1, deal.noteUser2, service.nomService
        FROM deal, offre, service, user
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idUser = user.idUser
        AND offre.idService = service.idService
        AND deal.idDeal = ".$idDeal);
        return $sql->result();
    }

    public function getNameUserOffre1($idDeal)
    {
        $sql = $this->db->query("SELECT user.nomUser, user.photoUser
        FROM user
        INNER JOIN offre ON user.idUser = offre.idUser
        INNER JOIN deal ON offre.idOffre = deal.idOffreUser1
        AND deal.idDeal = ".$idDeal);
        return $sql->result();
    }

    public function getNameUserOffre2($idDeal)
    {
        $sql = $this->db->query("SELECT user.nomUser, user.photoUser
        FROM user
        INNER JOIN offre ON user.idUser = offre.idUser
        INNER JOIN deal ON offre.idOffre = deal.idOffreUser2
        AND deal.idDeal = ".$idDeal);
        return $sql->result();
    }

    public function getNameServiceUserOffre1($idDeal)
    {
        $sql = $this->db->query("SELECT service.nomService
        FROM service
        INNER JOIN offre ON service.idService = offre.idService
        INNER JOIN deal ON offre.idOffre = deal.idOffreUser1
        AND deal.idDeal = ".$idDeal);
        return $sql->result();
    }

    public function getNameServiceUserOffre2($idDeal)
    {
        $sql = $this->db->query("SELECT service.nomService
        FROM service
        INNER JOIN offre ON service.idService = offre.idService
        INNER JOIN deal ON offre.idOffre = deal.idOffreUser2
        AND deal.idDeal = ".$idDeal);
        return $sql->result();
    }

    public function setNoteUser($idDeal, $noteUser1, $noteUser2)
    {
        $sql = $this->db->query("UPDATE deal
        SET noteUser1=".$noteUser1.", noteUser2=".$noteUser2."
        WHERE deal.idDeal = ".$idDeal);
    }
}

?>