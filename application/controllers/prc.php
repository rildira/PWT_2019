<?php 
 
class Prc extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('prc_model');
	}
 
	function index(){
		$data = array(
			'title' => 'PRC 2019'
		);
		$this->load->view('v_prc',$data);
	}
}
?>