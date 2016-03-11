<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function generate()
	{
		
		$this->load->view('password/generate.php');
	}
}
