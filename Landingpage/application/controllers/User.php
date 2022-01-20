<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

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

	private function load()
	{
		// $this->output->cache(1);

		$page = array(
			"head" => $this->load->view('website/template/head', false, true),
			"header" => $this->load->view('website/template/header', false, true),
			"main_js" => $this->load->view('website/template/main_js', false, true),
			"preloader" => $this->load->view('website/template/preloader', false, true),
			"footer" => $this->load->view('website/template/footer', false, true)
		);
		return $page;
	}

	public function index()
	{
		// $this->output->cache(1);
		
		$corona = 'https://picodep.depok.go.id/api';
        $corona = json_decode(file_get_contents($corona), true);
        $v['corona'] = $corona;

		$path = "";
		$data = array(
			"page" => $this->load($path),
			"content" => $this->load->view('website/index', $v, true)
		);
		$this->load->view('website/template/default_template', $data);
	}

}
