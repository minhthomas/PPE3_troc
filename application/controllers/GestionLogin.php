<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {

        $this->load->model('Model_Offre');
        $data['Lesoffres'] = $this->Model_Offre->GetAllIdOffre();
        $this->load->view('View_CreationOffre', $data);
        
    }

    public function login()
    {
        $this->load->model('Model_Login');
        // Récupérer form
        $loginuser = $this->input->get('loginuser');
        $password = $this->input->get('mdp');
        $data['LesUser'] = $this->Model_Login->GetAllUser($loginuser,$password);
        if(count($data) != 0)
        {
            $this->load->view('View_Test');
        }
    }
}
?>