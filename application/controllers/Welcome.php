<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('view_index');
	}
	public function blog()
	{
		$this->load->helper('url');
		$this->load->view('view_blog');
	}
	public function about()
	{
		$this->load->helper('url');
		$this->load->view('view_about');
	}
	public function menu()
	{
		$this->load->model('models_menu'); //載入models/model_users.php 編寫功能
		$data['menu'] = $this->models_menu->getmenu(); //調用models/model_users.php裏頭指定(getusers)
		$this->load->helper('url');
		$this->load->view('view_menu', $data);
	}
}
