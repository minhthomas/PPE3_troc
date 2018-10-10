<?php
class GestionIncription extends CI_Controller
{
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