<?php

class Documentation extends MX_Controller {

	public function index(){
		$data['title'] = 'ANDS Developer Toolbox';
		$this->load->view('landing', $data);
	}

	public function services($service){
		if($service=='grants'){
			$data['title'] = 'Grants API Documentation - ANDS Developer Toolbox';
			$this->load->view('grants_api', $data);
		}else{
			//TODO:XXX
		}
	}

	public function widgets($widget){
		if($widget=='orcid_widget'){
			$data['title'] = 'ORCID Widget';
			$data['scripts'] = array('orcid_widget_documentation');
			$data['js_lib'] = array('orcid_widget');
			$this->load->view('orcid_widget', $data);
		}
	}
}