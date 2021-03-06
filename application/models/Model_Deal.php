<?php

class Model_Deal extends CI_Model
{
    public function getAllDealsCreator($idUser)
    {
        $sql = $this->db->query("select service.nomService, deal.idDeal, deal.dateDeal,deal.noteUser1, deal.noteUser2, deal.idEtat
        from user, offre, deal, service
        where user.idUser = offre.idUser
        AND offre.idOffre = deal.idOffreUser1
        AND offre.idService = service.idService
        AND idCreateur = ".$idUser);

        return $sql->result();
    }
    
    public function getAllInfoUser2($idUser)
    {
        $sql = $this->db->query("select service.nomService, deal.idDeal, user.idUser, user.nomUser, user.photoUser
        from user, offre, deal, service
        where user.idUser = offre.idUser
        AND offre.idOffre = deal.idOffreUser2
        AND offre.idService = service.idService
        AND idCreateur = ".$idUser);
        
        return $sql->result();
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

    public function setNoteUserAndIdEtat($idDeal, $noteUser1, $noteUser2)
    {
        $sql = $this->db->query("UPDATE deal
        SET noteUser1=".$noteUser1.", noteUser2=".$noteUser2.", idEtat = 2
        WHERE deal.idDeal = ".$idDeal);
    }

    public function getUsersByOffre($offre)
    {
        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $sql = $this->db->query("SELECT user.idUser, user.nomUser, user.photoUser
        FROM user
        INNER JOIN offre on offre.idUser = user.idUser
        INNER JOIN service on service.idService = offre.idService
        WHERE offre.idUser!= ".$idOfConnectUser." 
        AND service.nomService like '%".$offre."%' 
        GROUP BY user.nomUser");
        return $sql->result();
    }

    public function insertDeal($idOffreUser1, $idOffreUser2)
    {
        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $sql = $this->db->query("INSERT INTO deal (dateDeal, noteUser1, noteUser2, idOffreUser1, idOffreUser2, idEtat, idCreateur)
        VALUES (CURRENT_DATE(), 0, 0, ".$idOffreUser1.", ".$idOffreUser2.", 1, ".$idOfConnectUser.")");
    }
}

?>