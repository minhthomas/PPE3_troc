<?php

class Ctrl_Acceuil extends CI_Controller
{
    public function index()
    {
        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->getAllOffre(1);

        $this->load->model("Model_Demande");
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande(1);

        $this->load->model("Model_Deal");
        $data['lesDeals'] = $this->Model_Deal->getAllDeals(1);

        $this->load->view("view_acceuil", $data);
    }

    public function addInformationOffre()
    {
        $this->load->model("Model_Offre");
        $data['lesServices'] = $this->Model_Offre->getAllService();

        $this->load->view("view_updateOffre", $data);
    }

    public function setInformationOffre()
    {
        $idOffre = $_GET['idOffre'];
        $descOffre = $_GET['descOffre'];
        $dateOffre = $_GET['dateOffre'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->setOffre($idOffre, $descOffre, $dateOffre);

        $this->load->view("view_acceuil", $data);
    }

    public function addInformationDemande()
    {
        $this->load->model("Model_Demande");
        $data['lesServices'] = $this->Model_Demande->getAllService();

        $this->load->view("view_updateDemande", $data);
    }

    public function setInformationDemande()
    {
        $idDemande = $_GET['idDemande'];
        $descDemande = $_GET['descDemande'];
        $dateDemande = $_GET['dateDemande'];

        $this->load->model("Model_Demande");
        $data['lesOffres'] = $this->Model_Demande->setOffre($idDemande, $descDemande, $dateDemande);

        $this->load->view("view_acceuil", $data);
    }
}

?>