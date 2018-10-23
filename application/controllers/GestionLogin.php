<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
<<<<<<< HEAD
        $this->load->view('View_login');   
=======

        $this->load->model('Model_Offre');
        $data['Lesoffres'] = $this->Model_Offre->GetAllIdOffre();
        $this->load->view('View_CreationOffre', $data);
        
>>>>>>> 10f7f4d4dc6758ef0e957e0873713c3a2b929f3d
    }

    public function login()
    {
        $this->load->model('Model_Login');
<<<<<<< HEAD
        
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
=======
        // Récupérer form
        $loginuser = $this->input->get('loginuser');
        $password = $this->input->get('mdp');
        $data['LesUser'] = $this->Model_Login->GetAllUser($loginuser,$password);
        if(count($data) != 0)
        {
            $this->load->view('View_Test');
>>>>>>> 10f7f4d4dc6758ef0e957e0873713c3a2b929f3d
        }
    }
}
?>