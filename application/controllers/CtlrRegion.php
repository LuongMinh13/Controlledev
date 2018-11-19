<?php
class CtlrRegion extends CI_Controller{
    public function index()
    {
        $this->load->view('view');
    }


    public function AfficherLesRegions()
    {
        $loginuser = $this->input->get('loginuser');
        if($loginuser == "Girard")
        {
            $this->load->model('Model_Login');
            $data['lesregions'] = $this->Model_Login->GetAllRegionAdmin();
            $this->load->view('viewregion',$data);
        }
            if($loginuser == "Royer")
            {
                $this->load->model('Model_Login');
                $data['lesregions'] = $this->Model_Login->GetAllRegionUser();
                $this->load->view('viewregion',$data);
            }

        
    }

    public function AfficherLesVilles()
    {
        $idRegion = $_GET['idRegion'];
        $this->load->model('Model_Login');
        $data['lesVilles'] = $this->Model_Login->GetAllVilles($idRegion);
        $this->load->view('viewville',$data);
    }

    public function AjouterLesScores()
    {
        $idRegion = $_GET['codeRegion'];
        $idVille = $_GET['idVille'];
        $this->load->model('Model_Login');
        $this->Model_Login->SetAllScore($idRegion,$idVille);
        
    }
}

?>