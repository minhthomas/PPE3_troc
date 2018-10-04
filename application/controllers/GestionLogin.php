<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Login');
        $data['LesUser'] = $this->Model_Login->GetAllUser();
        $this->load->view('View_Login',$data);
        $id = $this->input->get('loginuser');
        echo $id;

    }
}
?>