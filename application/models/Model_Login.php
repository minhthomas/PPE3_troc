<?php
class Model_Login extends CI_Model
{
    public function can_login($username, $password)
    {
        $this->db->where('id',$username);
        $this->db->where('mdp',$password);
        $query = $this->db->get('user');

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>