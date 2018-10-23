<?php
class Model_Login extends CI_Model
{
    public function GetAllUser($loginuser,$password)
    {
        $sql = $this->db->query("select idUser,login,mdp from user where login ='".$loginuser."' and mdp = '".$password."'");
        return $sql->result();
<<<<<<< HEAD
    } 
=======

    }
    
>>>>>>> 10f7f4d4dc6758ef0e957e0873713c3a2b929f3d
}
?>