<?php
class GestionLogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('View_login');
    }

    public function login()
    {
        $this->load->model('Model_Login');
        
        // Récupérer form
        $loginuser = $this->input->get('loginuser');
        $password = $this->input->get('mdp');

        $data['infosUser'] = $this->Model_Login->GetAllUser($loginuser,$password);
        
        if(count($data['infosUser']) != 0)
        {
            $this->load->library('session');

            $infosUser = array(
                'idUser'  => $data['infosUser'][0]->idUser,
                'nomUser'     => $data['infosUser'][0]->nomUser,
                'photoUser'     => $data['infosUser'][0]->photoUser,
            );
        
            $this->session->set_userdata('allInfosUser', $infosUser);

            // var_dump($_SESSION['allInfosUser']);
        
            header("Location:".base_url()."index.php/Ctrl_Acceuil/");
        }
        else {
            echo "Identifiants ou mot de passe incorrect.";
            $this->load->view('View_login');
        }
    }
    
    public function Logout()
    {
        $this->load->library("session");
        $this->session->sess_destroy();

        $this->load->view('View_login');
    }

    public function openinscription()
    {
        $this->load->view('View_Inscription');
    }

    public function inscription()
    {
        if(isset($_GET['btnInscription']))
        {
        $txtnom = $this->input->get('txtnom');
        $txtprenom = $this->input->get('txtprenom');
        $txtlogin = $this->input->get('txtlogin');
        $txtmdp = $this->input->get('txtmdp');
        $txtmdpconfirmer = $this->input->get('txtmdpconfirmer');
        // var_dump($txtnom , $txtprenom, $txtlogin, $txtmdp);
            if($txtnom == "")
            {
                echo "Nom n'existe";
            }
            else
            {
                if($txtprenom == "")
                {
                    echo "Prenom n'existe";
                }
                else
                {
                    if($txtlogin == "")
                    {
                        echo "Login n'existe";
                    }
                    else
                    {
                        if($txtmdp == "")
                        {
                            echo "Mdp n'existe";
                        }
                        else
                        {
                            if($txtmdp != $txtmdpconfirmer)
                            {
                                echo "Votre mdp n'est pas correct";
                            }
                            else
                            {
                                $nomUser = $txtnom. " " .$txtprenom;
                                $this->load->model('Model_Inscription');
                                $this->Model_Inscription->AddAllUser($nomUser,$txtlogin,$txtmdp);
                            }
                        }
                    }
                }
            }
            $this->load->view('View_Inscription');
        }
    }
}

?>