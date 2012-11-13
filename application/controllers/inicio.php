<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$data['datos']='';
		$this->load->view('principal', $data, FALSE);
	}

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
