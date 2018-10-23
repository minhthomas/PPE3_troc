<?php
class Model_Inscription extends CI_Model
{
    public function AddAllUser($nomUser,$txtlogin,$txtmdp)
    {
        // $sql = $this->db->query('select max(idUser) as num from user');
        // $query = $this->db->query('insert into user(nomUser,login,mdp) values ("'.$nomUser.'","'.$txtlogin.'","'.$txtmdp.'")');
        $data = array
        (
            'nomUser' => $nomUser,
            'login' => $txtlogin,
            'mdp' => $txtmdp
        );

        $this->db->insert('user',$data);

    }
}



?>