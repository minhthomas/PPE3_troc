<?php
class LoginMinh extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Login');
        $data['lesLogin'] = $this->Model_Login->getAllLogin();
        $this->load->view('AfficherLogin',$data);
    }
}


?>