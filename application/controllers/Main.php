<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	
	public function index()
	{
            $data['title'] = 'База';
            $data['content'] = 'main/index';
            $this->load->view($this->layout, $data);
	}
        
  public function about()
  {
      $data['title'] = 'О нас';
      $data['content'] = 'main/about';
      $this->load->view($this->layout, $data);
  }

	public function works()
  {
    $data['title'] = 'Наши успехи';
    $data['content'] = 'main/works';
    $this->load->view($this->layout, $data);
  }
}