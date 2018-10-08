<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->model('Model_Login');
        $this->load->view('View_Login');
    }

    public function test()
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