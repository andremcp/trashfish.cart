<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hme01a_mainpage extends Trashfish_GNC_Controller {
	
	public function index($renderData=""){
                $this->pageName         = "HOME";
                $this->stylePageHeader  = "01";
                $this->title            = "Home";
                $this->description      = "Stats and Graphs";
                $this->keywords         = "arny, arnodo";
                
                $this->_renderFrontend('hme01a_mainpage',$renderData);
	}
	
}