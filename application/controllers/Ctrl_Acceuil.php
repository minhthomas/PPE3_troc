<?php
class Ctrl_Acceuil extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->getAllOffre($idOfConnectUser);

        $this->load->model("Model_Demande");
        $data['lesDemandes'] = $this->Model_Demande->getAllDemande($idOfConnectUser);

        $this->load->model("Model_Deal");
        $data['lesDeals'] = $this->Model_Deal->getAllDealsCreator($idOfConnectUser);
        $data['lesInfosUser2'] = $this->Model_Deal->getAllInfoUser2($idOfConnectUser);

        $this->load->view("View_Acceuil", $data);
    }

    public function addInformationOffre()
    {
        $this->load->model("Model_Offre");

        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $data['lesInfosOffre'] = $this->Model_Offre->getInformationOffreById($idOfConnectUser, $_GET['idOffre']);

        $this->load->view("View_UpdateOffre", $data);
    }

    public function setInformationOffre()
    {
        $idOffre = $_GET['idOffre'];
        $descOffre = $_GET['descOffre'];
        $dateOffre = $_GET['dateOffre'];

        $this->load->model("Model_Offre");
        $data['lesOffres'] = $this->Model_Offre->setOffre($idOffre, $descOffre, $dateOffre);
    }

    public function addInformationDemande()
    {
        $this->load->model("Model_Demande");

        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];

        $data['lesInfosDemande'] = $this->Model_Demande->getInformationDemandeById($idOfConnectUser, $_GET['idDemande']);

        $this->load->view("View_UpdateDemande", $data);
    }

    public function setInformationDemande()
    {
        $idDemande = $_GET['idDemande'];
        $descDemande = $_GET['descDemande'];
        $dateDemande = $_GET['dateDemande'];

        $this->load->model("Model_Demande");
        $data['lesOffres'] = $this->Model_Demande->setOffre($idDemande, $descDemande, $dateDemande);

        // $this->load->view("View_Acceuil", $data);
        redirect('Ctrl_Acceuil/', 'refresh');
    }
    
    public function AddOffre()
    {
        $this->load->model('Model_Offre');
        $data['LesOffres'] = $this->Model_Offre->addIdOffre();
        $this->load->model("Model_Offre");
        $data['lesServices'] = $this->Model_Offre->getAllService();
        $this->load->view('view_insertOffre',$data);
    }

    public function insertOffre()
    {
        $txtnextidoffre = $_GET['txtnextidoffre'];
        $txtadddescOffre = $_GET['txtadddescOffre'];
        $idservice = $_GET['idservice'];


        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];
        $this->load->model('Model_Offre');
        $data['LesOffres'] = $this->Model_Offre->insertOffre($txtnextidoffre, $txtadddescOffre, $idservice, $idOfConnectUser);
        $this->load->view('view_insertOffre');
    
    }

    public function AddDemande()
    {
        $this->load->model('Model_Demande');
        $data['LesDemandes'] = $this->Model_Demande->addIdDemande();
        $this->load->model("Model_Demande");
        $data['lesServices'] = $this->Model_Demande->getAllService();
        $this->load->view('view_insertdemande',$data);
    }

    public function insertDemande()
    {
        $txtnextdemande = $_GET['txtnextdemande'];
        $txtadddescDemande = $_GET['txtadddescDemande'];
        $idservice = $_GET['idservice'];

        $this->load->library('session');
        $idOfConnectUser = $_SESSION['allInfosUser']['idUser'];
        $this->load->model('Model_Demande');
        $data['LesDemandes'] = $this->Model_Demande->insertDemande($txtnextdemande, $txtadddescDemande, $idservice, $idOfConnectUser);
        $this->load->view('view_insertdemande');
    }

    public function addInformationDeals()
    {
        $this->load->model("Model_Deal");

        $data['lesInfosDeal'] = $this->Model_Deal->getInformationsByIdDeal($_GET['idDeal']);
        $data['nomUser1'] = $this->Model_Deal->getNameUserOffre1($_GET['idDeal']);
        $data['nomUser2'] = $this->Model_Deal->getNameUserOffre2($_GET['idDeal']);
        $data['nomServiceUser1'] = $this->Model_Deal->getNameServiceUserOffre1($_GET['idDeal']);
        $data['nomServiceUser2'] = $this->Model_Deal->getNameServiceUserOffre2($_GET['idDeal']);

        $this->load->view("View_UpdateDeal", $data);
    }

    public function setNoteDeal()
    {
        $this->load->model("Model_Deal");

        $data['lesNotesUser'] = $this->Model_Deal->setNoteUser($_GET['idDeal'], $_GET['noteUser1'], $_GET['noteUser2']);
    }

    public function setNoteDealAndIdEtat()
    {
        $this->load->model("Model_Deal");

        $data['lesNotesUser'] = $this->Model_Deal->setNoteUserAndIdEtat($_GET['idDeal'], $_GET['noteUser1'], $_GET['noteUser2']);
    }
}

?>