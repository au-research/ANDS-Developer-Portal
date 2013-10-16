<?php

class Documentation extends MX_Controller {

	public function index(){
		$data['title'] = 'ANDS Developer Toolbox';
		$this->load->view('landing', $data);
	}

	public function services($service=''){
		switch($service)
		{
			case 'getGrants':
				$data['title'] = 'Grants API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/grants_api', $data);
			break;

			case 'oai':
				$data['title'] = 'OAI-PMH provider API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/oai_api', $data);
			break;

			case 'registry_apis':
			default:
				$data['title'] = 'ANDS Web Services - ANDS Developer Toolbox';
				$this->load->view('registry_apis', $data);
			break;
		}
	}

	public function widgets($widget=''){
		if($widget=='orcid_widget'){
			$data['title'] = 'ORCID Researcher Lookup Widget';
			$data['scripts'] = array('orcid_widget_documentation');
			$data['js_lib'] = array('orcid_widget');
			$this->load->view('orcid_widget', $data);
		}elseif($widget=='registry_widget'){
			$data['title'] = 'Registry Widget';
			$data['scripts'] = array('registry_widget_doc');
			$data['js_lib'] = array('registry_widget');
			$this->load->view('registry_widget', $data);
		}elseif($widget=='vocab_widget'){
			$data['title'] = 'Vocabulary Widget';
			$data['scripts'] = array('vocab_widget_doc');
			$data['js_lib'] = array('vocab_widget');
			$this->load->view('vocab_widget', $data);
		}elseif($widget=='location_widget'){
			$data['title'] = 'Location Capture Widget';
			$data['scripts'] = array('location_widget_doc');
			$data['js_lib'] = array('location_capture_widget');
			$this->load->view('location_widget', $data);
		}else{
			$data['title'] = 'Widget';
			// $data['scripts'] = array('vocab_widget_doc');
			// $data['js_lib'] = array('vocab_widget');
			$this->load->view('widget_index', $data);
		}
	}
}