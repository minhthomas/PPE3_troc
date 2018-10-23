<?php
class GestionOffre extends CI_Controller
{
    public function AddOffre()
    {

        $this->load->model('Model_Offre');
        $data['Lesoffres'] = $this->Model_Offre->GetAllIdOffre();
        $this->load->view('View_CreationOffre', $data);
    }
}

?>