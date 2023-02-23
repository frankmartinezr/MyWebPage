<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
        $this->load->model('page_model');
        
        $data['users'] = $this->page_model->get_about_data();
		
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('about/about_view');
		$this->load->view('about/about_script');
		$this->load->view('templates/footer');
	}
}
