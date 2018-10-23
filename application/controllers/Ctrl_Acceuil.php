<?php

class Ctrl_Acceuil extends CI_Controller
{
<<<<<<< HEAD
    public function index()
    {
        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->getAllOffre(1);

        $this->load->model("Model_Demande");
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande(1);

        $this->load->model("Model_Deal");
        $data['lesDeals'] = $this->Model_Deal->getAllDeals(1);

        $this->load->view("view_acceuil", $data);
=======
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
>>>>>>> master
    }

    public function addInformationOffre()
    {
        $this->load->model("Model_Offre");
        $data['lesServices'] = $this->Model_Offre->getAllService();

<<<<<<< HEAD
        $this->load->view("view_updateOffre", $data);
=======
        $this->load->view("View_updateOffre", $data);
>>>>>>> master
    }

    public function setInformationOffre()
    {
        $idOffre = $_GET['idOffre'];
        $descOffre = $_GET['descOffre'];
        $dateOffre = $_GET['dateOffre'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->setOffre($idOffre, $descOffre, $dateOffre);

<<<<<<< HEAD
        $this->load->view("view_acceuil", $data);
=======
        $this->load->view("View_acceuil", $data);
>>>>>>> master
    }

    public function addInformationDemande()
    {
        $this->load->model("Model_Demande");
        $data['lesServices'] = $this->Model_Demande->getAllService();

<<<<<<< HEAD
        $this->load->view("view_updateDemande", $data);
=======
        $this->load->view("View_updateDemande", $data);
>>>>>>> master
    }

    public function setInformationDemande()
    {
        $idDemande = $_GET['idDemande'];
        $descDemande = $_GET['descDemande'];
        $dateDemande = $_GET['dateDemande'];

        $this->load->model("Model_Demande");
        $data['lesOffres'] = $this->Model_Demande->setOffre($idDemande, $descDemande, $dateDemande);

<<<<<<< HEAD
        $this->load->view("view_acceuil", $data);
=======
        $this->load->view("View_acceuil", $data);
>>>>>>> master
    }
}

?>