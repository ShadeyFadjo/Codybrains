<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Utilisateur extends CI_Model
{
    public function getUtilisateursActifs()
    {
        $this->load->database();
        $query=$this->db->query("select * from vutilisateursactifs");
        
        foreach($query->result_array() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }

    public function getUtilisateursInactifs()
    {
        $this->load->database();
        $query=$this->db->query("select * from vutilisateursinactifs");
        
        foreach($query->result_array() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }

    public function desactiver($id)
    {
        $this->load->database();
        $sql="update utilisateur set suppr=true where idutilisateur=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }

    public function reactiver($id)
    {
        $this->load->database();
        $sql="update utilisateur set suppr=false where idutilisateur=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }

    public function insertutilisateur($matricule,$nom,$prenom,$dateembauche,$idposte,$email,$code)
    {
    	$suppr=false;
    	$co=false;
        $this->load->database();
        $sql="insert into utilisateur (matricule,nom,prenoms,dateembauche,idposte,email,code) values ('%s','%s','%s','%s',%s,'%s','%s')";
        $sql=sprintf($sql,$matricule,$nom,$prenom,$dateembauche,$idposte,$email,$code);
        $this->db->query($sql);
    }

    public function getUtilisateursConnectes()
    {
        $this->load->database();
        $query=$this->db->query("select * from vutilisateursconnectes");
        
        foreach($query->result_array() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }

    public function connecte($id)
    {
        $this->load->database();
        $sql="update utilisateur set co=true where idutilisateur=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }

    public function deconnecte($id)
    {
        $this->load->database();
        $sql="update utilisateur set co=false where idutilisateur=%s";
        $sql=sprintf($sql,$id);
        $this->db->query($sql);
    }
   
}

?>