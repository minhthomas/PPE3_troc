<?php
class Model_Login extends CI_Model
{
    public function GetAllUser($loginuser,$password)
    {
        $sql = $this->db->query("select idUser,login,mdp from user where login ='".$loginuser."' and mdp = '".$password."'");
        return $sql->result();

    }
    
}
?>