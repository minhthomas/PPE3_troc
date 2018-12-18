<?php
class Model_Offre extends CI_Model
{
    public function addIdOffre()
    {
        $sql = $this->db->query("select max(idOffre) + 1 as idoffre from offre");
        return $sql->result();
    }
    
    public function getAllOffre($idUser)
    {
        $sql = $this->db->query("SELECT idOffre, descriptionOffre, dateOffre, nomService, service.idService
        FROM offre, service
        WHERE offre.idService = service.idService
        AND idUser = ".$idUser);
        return $sql->result();
    }

    public function getInformationOffreById($idUser, $idOffre)
    {
        $sql = $this->db->query("SELECT idOffre, descriptionOffre, dateOffre, nomService
        FROM offre, service
        WHERE offre.idService = service.idService
        AND idUser = ".$idUser."
        AND idOffre = ".$idOffre);
        return $sql->result();
    }

    public function getAllService()
    {
        $sql = $this->db->query("SELECT idService, nomService FROM service");
        return $sql->result();
    }

    public function setOffre($idOffre, $descOffre, $dateOffre)
    {
        $sql = $this->db->query("UPDATE offre 
        SET descriptionOffre = '".$descOffre."', 
        dateOffre = '".$dateOffre."' 
        WHERE idOffre = ".$idOffre);
    }

    public function insertOffre($txtnextidoffre, $txtadddescOffre, $idservice, $idUser)
    {
        $data = array(
            'idOffre' => $txtnextidoffre,
            'descriptionOffre' => $txtadddescOffre,
            'dateOffre' => date('y-m-d'),
            'idService' => $idservice,
            'idUser' => $idUser,
        );
        $this->db->insert('offre',$data);
    }
}

?>