<?php

class Ctrl_Acceuil extends CI_Controller
{
    public function setAcceuilView()
    {
        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->getAllOffre($idOfConnectUser);

        $this->load->model("Model_Demande");
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande($idOfConnectUser);

        $this->load->model("Model_Deal");
        $data['lesDeals'] = $this->Model_Deal->getAllDeals($idOfConnectUser);

        $this->load->view("View_acceuil", $data);
    }

    public function addInformationOffre()
    {
        $this->load->model("Model_Offre");
        $data['lesServices'] = $this->Model_Offre->getAllService();

        $this->load->view("View_updateOffre", $data);
    }

    public function setInformationOffre()
    {
        $idOffre = $_GET['idOffre'];
        $descOffre = $_GET['descOffre'];
        $dateOffre = $_GET['dateOffre'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->setOffre($idOffre, $descOffre, $dateOffre);

        $this->load->view("View_acceuil", $data);
    }

    public function addInformationDemande()
    {
        $this->load->model("Model_Demande");
        $data['lesServices'] = $this->Model_Demande->getAllService();

        $this->load->view("View_updateDemande", $data);
    }

    public function setInformationDemande()
    {
        $idDemande = $_GET['idDemande'];
        $descDemande = $_GET['descDemande'];
        $dateDemande = $_GET['dateDemande'];

        $this->load->model("Model_Demande");
        $data['lesOffres'] = $this->Model_Demande->setOffre($idDemande, $descDemande, $dateDemande);

        $this->load->view("View_acceuil", $data);
    }
}

?>