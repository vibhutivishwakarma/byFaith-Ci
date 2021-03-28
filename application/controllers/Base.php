<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	//-----homepage function----
	public function index()
	{
		$data['title'] = "Homepage";
		$data['content']= $this->load->view('base/pages/homepage/index', $data, true );
		return $this->load->view('layout_master', $data);
		
	}

	//------error page function---
	public function error()
	{
		$data['title'] = "Page Not Found";
		$data['content'] = $this->load->view('base/pages/homepage/error', $data, true);
 		return $this->load->view('layout_master', $data);
	}
}
