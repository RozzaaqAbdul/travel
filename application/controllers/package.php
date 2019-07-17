<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->data['include'] = "v_package.php";
		$this->load->view('v_index', $this->data);
	}
}
