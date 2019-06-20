<?php

class Model_Region extends CI_Model
{
    public function getDistance($idRegion1, $idRegion2)
    {
        $sql = $this->db->query("SELECT distanceregion.distance 
        FROM distanceregion 
        WHERE distanceregion.idRegion1 = '".$idRegion2."'
        AND distanceregion.idRegion2 = '".$idRegion1."'");

        return $sql->result();
    }
}

?>