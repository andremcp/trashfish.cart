<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trashfish_GNC_Controller extends CI_Controller
{
        #generic response
	protected $response;
        
	//Page info
	protected $data                 = Array();
	protected $module               = FALSE;
        protected $progID               = FALSE;
        protected $pageName             = FALSE;
        protected $stylePageHeader      = FALSE;
        protected $stylePageFooter      = FALSE;
	protected $template             = "main";
        
	protected $hasNav               = TRUE;
        protected $hasNavCategory       = TRUE;
        
        /*contents*/
	protected $javascript           = array();
	protected $css                  = array();
	protected $fonts                = array();
	
        //metadata
	protected $title                = FALSE;
	protected $description          = FALSE;
	protected $keywords             = FALSE;
	protected $author               = FALSE;
        
        
	function __construct()
	{
		parent::__construct();
                
                $this->load->helper("trashfishnav");
                
                $this->load->library("trashfishform");
                
                $this->data["uri_segment_1"]    = $this->uri->segment(1);
		$this->data["uri_segment_2"]    = $this->uri->segment(2);
		
                $this->title                    = $this->config->item('site_title');
		$this->description              = $this->config->item('site_description');
		$this->keywords                 = $this->config->item('site_keywords');
		$this->author                   = $this->config->item('site_author');
		
		$this->pageName                 = strToLower(get_class($this));
	}
	
	function set_client_failure($detail = '', $kode = 1)
	{
		$this->response = array(
			'status'    => 'failure',
			'kode'      => $kode,
			'msg'       => 'Invalid response',
			'detail'    => $detail
		);
	}
	
	function set_action_denied($detail = '', $kode = 3){
		$this->response = array(
			'status'    => 'failure',
			'kode'      => $kode,
			'msg'       => 'Permission denied',
			'detail'    => $detail
		);
	}
	
	function set_system_failure($detail = '', $kode = 2){
		$this->response = array(
			'status'    => 'failure',
			'kode'      => $kode,
			'msg'       => 'System failure',
			'detail'    => $detail
		);
	}
	
	function set_failure($detail = '', $kode = 4)
	{
		$this->response =  array(
			'status'    => 'failure',
			'kode'      => $kode,
			'msg'       => 'Failure on processing request',
			'detail'    => $detail
		);
	}
	
	function set_success($detail = '', $kode = 0){
		$this->response =  array(
			'status'    => 'success',
			'kode'      => $kode,
			'msg'       => 'Request has been successfully processed',
			'detail'    => $detail
		);
	}
	
	function set_detail_msg($fields = array())
	{
		$result = array();
		
		for ($i=0; $i<count($fields); $i++)
		{
			$error = form_error($fields[$i], '', '');
			if ($error){
				array_push($result, $error);
			}
		}
		$this->response['detail'] = $result;
	}
	
	function to_json()
	{
		header('Content-Type: application/json');
		return json_encode($this->response);
	}
	
	function send_response()
	{
		echo $this->to_json();
	}
	
	function is_authenticated(){
		//return $this->session->userdata('nama') === false ? false : true;
		return true;
	}
	
	function is_authorized(){
		$authenticated = $this->is_authenticated();
		$authorized = true;
		return $authenticated && $authorized;
	}
	
	function template($stuff, $flag = false)
	{
		if ($this->is_authorized())
		{
			if ($this->form_validation->run() || $flag)
			{
				// everything looks fine, do stuff
				$stuff();
			}
			else
			{
				$this->set_client_failure();
				$this->set_detail_msg();
			}
		}
		else
		{
			$this->set_action_denied();
		}
		$this->send_response();
	}
        
        protected function _renderBackend($view,$renderData="FULLPAGE") 
        {
                $temp_view = "pages/backend/".$view;
                
                switch ($renderData) 
                {
                    case "AJAX"     :
                            $this->load->view($view,$this->data);
                            break;
                    case "JSON"     :
                            echo json_encode($this->data);
                            break;
                    case "FULLPAGE" :
                    default         : 
                            //static
                            $toTpl["javascript"]    = $this->javascript;
                            $toTpl["css"]           = $this->css;
                            $toTpl["fonts"]         = $this->fonts;

                            //meta
                            $toTpl["title"]         = $this->title;
                            $toTpl["description"]   = $this->description;
                            $toTpl["keywords"]      = $this->keywords;
                            $toTpl["author"]        = $this->author;

                            //data
                            $toBody["content_body"] = $this->load->view($temp_view,array_merge($this->data,$toTpl),true);

                            //nav menu
                            if($this->hasNav){
                                    $toMenu["module"]       = $this->module;
                                    $toMenu["progID"]       = $this->progID;
                                    $toSidebar["nav"]       = $this->load->view("templates/backend/nav",$toMenu,true);
                            }
                            $toHeader["basejs"]     = $this->load->view("templates/backend/basejs",$this->data,true);

                            $toBody["header"]       = $this->load->view("templates/backend/header",$toHeader,true);
                            $toBody["sidebar"]      = $this->load->view("templates/backend/sidebar",$toSidebar,true);
                            $toBody["footer"]       = $this->load->view("templates/backend/footer",'',true);

                            $toTpl["body"]          = $this->load->view("templates/backend/".$this->template,$toBody,true);


                            //render view
                            $this->load->view("templates/backend/skeleton",$toTpl);
                            break;
                }
	}
        
        protected function _renderFrontend($view,$renderData="FULLPAGE") 
        {
                $temp_view = "pages/frontend/".$view;
                
                switch ($renderData) 
                {
                    case "AJAX"     :
                            $this->load->view($view,$this->data);
                            break;
                    case "JSON"     :
                            echo json_encode($this->data);
                            break;
                    case "FULLPAGE" :
                    default         : 
                            //static
                            $toTpl["javascript"]    = $this->javascript;
                            $toTpl["css"]           = $this->css;
                            $toTpl["fonts"]         = $this->fonts;

                            //meta
                            $toTpl["title"]         = $this->title;
                            $toTpl["description"]   = $this->description;
                            $toTpl["keywords"]      = $this->keywords;
                            $toTpl["author"]        = $this->author;

                            //data
                            $toBody["content_body"] = $this->load->view($temp_view,array_merge($this->data,$toTpl),true);

                            //nav menu
                            if($this->hasNav)
                            {
                                    $toMenu["pageName"]     = $this->pageName;
                                    $toHeader["nav"]        = $this->load->view("templates/frontend/nav",$toMenu,true);
                            }
                            
                            $toHeader["basejs"]     = $this->load->view("templates/frontend/basejs",$this->data,true);

                            $toBody["headerMenu"]   = $this->load->view("templates/frontend/headerMenu",$toHeader,true);
                            $stylePageHeader = $this->stylePageHeader;
                            switch ($stylePageHeader)
                            {
                                    case "01"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_01",'',true);
                                            break;
                                    case "02"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_02",'',true);
                                            break;
                                    case "03"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_03",'',true);
                                            break;
                                    case "04"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_04",'',true);
                                            break;
                                    case "05"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_05",'',true);
                                            break;
                                    case "06"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_06",'',true);
                                            break;
                                    case "07"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_07",'',true);
                                            break;
                                    case "08"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_08",'',true);
                                            break;
                                    case "09"   :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_09",'',true);
                                            break;
                                    default     :
                                            $toBody["headerPage"]   = $this->load->view("templates/frontend/headerPage_01",'',true);
                                            break;
                            }
                            $stylePageFooter = $this->stylePageFooter;
                            switch ($stylePageFooter)
                            {
                                    case "01"   :
                                            $toBody["footer"]   = $this->load->view("templates/frontend/footer_01",'',true);
                                            break;
                                    case "02"   :
                                            $toBody["footer"]   = $this->load->view("templates/frontend/footer_02",'',true);
                                            break;
                                    case "03"   :
                                            $toBody["footer"]   = $this->load->view("templates/frontend/footer_03",'',true);
                                            break;
                                    case "04"   :
                                            $toBody["footer"]   = $this->load->view("templates/frontend/footer_04",'',true);
                                            break;
                                    default     :
                                            $toBody["footer"]   = $this->load->view("templates/frontend/footer_01",'',true);
                                            break;
                            }

                            $toTpl["body"]          = $this->load->view("templates/frontend/".$this->template,$toBody,true);

                            //render view
                            $this->load->view("templates/frontend/skeleton",$toTpl);
                            break;
                }
	}
}

/* End of file gnc_controller.php */
/* Location: ./application/core/gnc_controller.php */