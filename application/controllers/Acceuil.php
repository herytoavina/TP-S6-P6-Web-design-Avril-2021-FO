<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	require_once 'BaseController.php';
class Acceuil extends BaseController {

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
		$data['types'] = $this->AcceuilModel->findAllType();
		$this->load->view('acceuil', $data);
	}

	public function addInfo(){
		$insert = [
			'IDtype' => $this->input->post('type'),
			'nombre' =>$this->input->post('nombre'),
			'dateInfo' => mdate('%Y-%m-%d %H:%i:%s', now()),
		];

		$this->InfoModel->addInfo($insert);
		$data['info'] = $this->InfoModel->findAllInfo();

		$this->index();
	}
}
