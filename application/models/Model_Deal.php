<?php

class Model_Deal extends CI_Model
{
    public function getAllDealsCreator($idUser)
    {
        $sql1 = $this->db->query("SELECT deal.idCreateur, deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.idUser, user.nomUser, user.photoUser
        FROM deal
        INNER JOIN offre ON offre.idOffre = deal.idOffreUser1
        INNER JOIN user ON user.idUser = offre.idUser
        INNER JOIN service ON service.idService = offre.idService
        WHERE deal.idCreateur = ".$idUser);
        
        $sql2 = $this->db->query("SELECT service.nomService
        FROM deal
        INNER JOIN offre ON offre.idOffre = deal.idOffreUser2
        INNER JOIN user ON user.idUser = offre.idUser
        INNER JOIN service ON service.idService = offre.idService
        WHERE deal.idDeal IN (SELECT idDeal FROM deal INNER JOIN offre ON offre.idOffre = deal.idOffreUser2 INNER JOIN user ON user.idUser = offre.idUser WHERE user.idUser = ".$idUser.")");

        return array_merge($sql1->result(), $sql2->result());
    }

    public function getAllDealsNoneCreator($idUser)
    {
        $sql3 = $this->db->query("SELECT deal.idCreateur, deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.idUser, user.nomUser, user.photoUser
        FROM deal
        INNER JOIN offre ON offre.idOffre = deal.idOffreUser2
        INNER JOIN user ON user.idUser = offre.idUser
        INNER JOIN service ON service.idService = offre.idService
        WHERE deal.idCreateur = ".$idUser);

        $sql4 = $this->db->query("SELECT service.nomService
        FROM deal
        INNER JOIN offre ON offre.idOffre = deal.idOffreUser1
        INNER JOIN user ON user.idUser = offre.idUser
        INNER JOIN service ON service.idService = offre.idService
        WHERE deal.idDeal IN (SELECT idDeal FROM deal INNER JOIN offre ON offre.idOffre = deal.idOffreUser2 INNER JOIN user ON user.idUser = offre.idUser WHERE user.idUser = ".$idUser.")");
        
        return array_merge($sql3->result(), $sql4->result());
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