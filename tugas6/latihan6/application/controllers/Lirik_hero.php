<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lirik_hero extends CI_Controller {

	
	public function index()
	{
		$this->load->view('hero');
	}
}