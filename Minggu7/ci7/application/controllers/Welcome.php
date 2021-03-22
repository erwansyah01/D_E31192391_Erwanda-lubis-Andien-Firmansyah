<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function profile()
	{
		//perintah untuk load file dengan nama profile.php
		$this->load->view('profil');
	}

	public function contact()
	{
		//perintah untuk load file view dengan nama contact.php
		$this->load->view('contact');
	}
}
