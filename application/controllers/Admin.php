<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  $this->layout = "admin";
	
	public function index()
	{
      $data['content'] = 'admin/index';
      $this->load->view($this->layout, $data);
	}
        
  
}