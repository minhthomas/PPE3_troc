<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('View_login');   
    }

    public function login()
    {
        $this->load->model('Model_Login');
        
        // Récupérer form
        $loginuser = $this->input->get('loginuser');
        $password = $this->input->get('mdp');

        $data['infosUser'] = $this->Model_Login->GetAllUser($loginuser,$password);
        
        if(count($data['infosUser']) != 0)
        {
            $this->load->library('session');

            $infosUser = array(
                'idUser'  => $data['infosUser'][0]->idUser,
                'login'     => $data['infosUser'][0]->login,
                'mdp' => $data['infosUser'][0]->mdp
            );
        
            $this->session->set_userdata('allInfosUser', $infosUser);

            // var_dump($_SESSION['allInfosUser']);
        
            header("Location:".base_url()."index.php/Ctrl_Acceuil/setAcceuilView/");
        }
        else {
            echo "Identifiants ou mot de passe incorrect.";
            $this->load->view('View_login');
        }
    }
}
?>