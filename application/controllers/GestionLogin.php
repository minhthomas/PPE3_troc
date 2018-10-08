<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->model('Model_Login');
        $data['LesUser'] = $this->Model_Login->GetAllUser();
        $this->load->view('View_Login',$data);
        $loginname = $this->input->get('loginuser');
        $password = $this->input->get('mdp');       
        

    }
}
?>