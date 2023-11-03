<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{
		$this->load->view('member/join_view');
	}
}
