<?php

class Documentation extends MX_Controller {

	public function index(){
		$data['title'] = 'ANDS Developer Toolbox';
		$this->load->view('landing', $data);
	}

	public function services($service=''){
		$data['scripts'] = array('services_doc');
		$data['js_lib'] = array('colorbox');
		switch($service)
		{
			case 'getRIFCS':
			default:
				$data['title'] = 'getRIFCS API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/getrifcs_api', $data);
			break;		

			case 'getMetadata':
			default:
				$data['title'] = 'getMetadata API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/getmetadata_api', $data);
			break;	

			case 'getExtRif':
			default:
				$data['title'] = 'getExtRif API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/getextrif_api', $data);
			break;

			case 'getGrants':
				$data['title'] = 'Grants API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/grants_api', $data);
			break;

			case 'oai':
				$data['title'] = 'OAI-PMH provider API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/oai_api', $data);
			break;

			case 'vocabulary_api':
				$data['title'] = 'Vocabulary Service API Documentation - ANDS Developer Toolbox';
				$this->load->view('services/vocab_api', $data);
			break;

			case 'indexed_fields':
				$data['title'] = 'ANDS Indexed Fields - ANDS Developer Toolbox';
				$this->load->view('services/indexed_fields', $data);
			break;
			
			case 'registry_apis':
			default:
				$data['title'] = 'ANDS Collections Registry APIs - ANDS Developer Toolbox';
				$this->load->view('registry_apis', $data);
			break;
		}
	}

	public function widgets($widget=''){
		switch($widget){
			case 'orcid_widget':
				$data['title'] = 'ORCID Researcher Lookup Widget';
				$data['scripts'] = array('orcid_widget_documentation');
				$data['js_lib'] = array('orcid_widget');
				$this->load->view('widgets/orcid_widget', $data);
			break;

			case 'registry_widget':
				$data['title'] = 'ANDS Collection Registry Search Widget';
				$data['scripts'] = array('registry_widget_doc');
				$data['js_lib'] = array('registry_widget');
				$this->load->view('widgets/registry_widget', $data);
			break;

			case 'vocab_widget':
				$data['title'] = 'ANDS Controlled Vocabulary Widget';
				$data['scripts'] = array('vocab_widget_doc');
				$data['js_lib'] = array('vocab_widget');
				$this->load->view('widgets/vocab_widget', $data);
			break;

			case 'location_widget':
				$data['title'] = 'ANDS Location Capture Widget';
				$data['scripts'] = array('location_widget_doc');
				$data['js_lib'] = array('location_capture_widget');
				$this->load->view('widgets/location_widget', $data);
			break;

			default: 
				$data['title'] = 'Widget';
				// $data['scripts'] = array('vocab_widget_doc');
				$this->load->view('widget_index', $data);
			break;

		}
	}

	public function registry($service=''){
			$data['title'] = 'Registry';
			$this->load->view('registry_index', $data);
	}
}