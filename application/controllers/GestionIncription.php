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
        if(empty($_GET['txtnom']))
        {

        }
        else
        {
            echo "ok";
        }
    }
    }


}
?>