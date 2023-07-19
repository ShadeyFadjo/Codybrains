<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {	

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function admin()
	{
		$this->load->helper('url');
		$this->load->view('header');

		if($this->input->post('code')=='admin' && $this->input->post('mail')=='admin@gmail.com')
		{
			$this->load->model('utilisateur');
			$data['uactifs']=$this->utilisateur->getUtilisateursActifs();
			$this->load->view('admin',$data);
		}
		else 
		{
			$this->load->view('viewerror');
		}

		$this->load->view('footer');

	}

	public function ajoututilisateur()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('poste');

		$data=array();
		$data['postes']=$this->poste->getpostes();

		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $string = '';
	    $max = strlen($characters) - 1;

	    for ($i = 0; $i < 7; $i++) {
	        $string .= $characters[mt_rand(0, $max)];
	    }

		$data['code']=$string;

		$this->load->view('ajoututilisateur',$data);
		$this->load->view('footer');
	}

	public function confirmajoututilisateur()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('utilisateur');
		$matricule=$this->input->post('matricule');
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenoms');
		$idposte=$this->input->post('poste');
		$embauche=$this->input->post('embauche');
		$mail=$this->input->post('email');
		$code=$this->input->post('code');
		$this->utilisateur->insertutilisateur($matricule,$nom,$prenom,$embauche,$idposte,$mail,$code);
		$this->load->view('succes');

		$this->load->view('footer');
	}

	public function desactiver()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('utilisateur');
		$this->utilisateur->desactiver($this->input->get('id'));

		$this->load->view('succesdesactivation');
		$this->load->view('footer');
	}

	public function inactifs()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('utilisateur');
		$data['uinactifs']=$this->utilisateur->getUtilisateursInactifs();
		$this->load->view('inactifs',$data);

		$this->load->view('footer');
	}

	public function reactiver()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('utilisateur');
		$this->utilisateur->reactiver($this->input->get('id'));

		$this->load->view('succesdesactivation');
		$this->load->view('footer');
	}

	public function utilisateur()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->model('utilisateur');
		$utilisateurs=$this->utilisateur->getUtilisateursActifs();
		$o=1;

		foreach($utilisateurs as $user)
		{
			if($user['matricule']==$this->input->post('matricule') && $user['code']==$this->input->post('code'))
			{
				$this->utilisateur->connecte($user['idUtilisateur']);
				$usersco=$this->utilisateur->getUtilisateursConnectes();
				$data['connectes']=$usersco;
				$data['idutilisateur']=$user['idUtilisateur'];
				$o=0;
				$data['code']=$user['code'];
				$this->load->view('utilisateur',$data);
			}
		}
		if($o==1)
		{
			$this->load->view('viewerror');
		}
		

		$this->load->view('footer');
	}

	public function deconnexion()
	{
		$this->load->model('utilisateur');
		$this->utilisateur->deconnecte($this->input->get('id'));
		redirect('welcome/index');
	}

}