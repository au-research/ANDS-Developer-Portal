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

	public function widgets($widget=''){
		if($widget=='orcid_widget'){
			$data['title'] = 'ORCID Widget';
			$data['scripts'] = array('orcid_widget_documentation');
			$data['js_lib'] = array('orcid_widget');
			$this->load->view('orcid_widget', $data);
		}elseif($widget=='registry_widget'){
			$data['title'] = 'Registry Widget';
			$data['scripts'] = array('registry_widget_doc');
			$data['js_lib'] = array('registry_widget');
			$this->load->view('registry_widget', $data);
		}elseif($widget=='vocab_widget'){
			$data['title'] = 'Vocab Widget';
			$data['scripts'] = array('vocab_widget_doc');
			$data['js_lib'] = array('vocab_widget');
			$this->load->view('vocab_widget', $data);
		}elseif($widget=='location_widget'){
			$data['title'] = 'location Widget';
			$data['scripts'] = array('location_widget_doc');
			$data['js_lib'] = array('location_widget');
			$this->load->view('location_widget', $data);
		}else{
			$data['title'] = 'Widget';
			// $data['scripts'] = array('vocab_widget_doc');
			// $data['js_lib'] = array('vocab_widget');
			$this->load->view('widget_index', $data);
		}
	}
}