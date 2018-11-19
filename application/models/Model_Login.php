<?php
class Model_Login extends CI_Model
{
        // public function GetAllUser($loginuser)
        // {
        //     $sql = $this->db-->query("select idUser, nomUser, statutUser from user where nomUser=".$loginuser);
        //     return $sql ->result();
        // }
        public function GetAllRegionAdmin()
        {
            $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region");
            return $sql -> result();
        }

        public function GetAllVilles($idRegion)
        {
            $sql = $this->db->query("select idVille, nomVille, scoreVille, numRegion from ville where numRegion=" .$idRegion);
            return $sql ->result();
        }
        public function GetAllRegionUser()
        {
            $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region where nomRegion='Bourgogne'");
            return $sql -> result();
        }
        public function SetAllScore($idRegion)
        {
            $sql = $this->db->query("update ville set scoreVille = scoreVille + 5 where numRegion = '".$idRegion."'");
            // $sql = $this->db->query("update region set scoreRegion = scoreRegion+(select idRegion, count(ville) as lesvilles from region, ville where idRegion =" .$idRegion.);
        }
}
?>