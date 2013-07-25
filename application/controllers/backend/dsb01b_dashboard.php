<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dsb01a_dashboard
 *
 * @author Sopar Sihotang
 */
class dsb01b_dashboard extends Trashfish_GNC_Controller{
        
        public function index($renderData=""){
                $this->module       = "DASHBOARD";
                $this->title        = "Dashboard";
                $this->description  = "Setting Widget";
                $this->keywords     = "arny, arnodo";
                $this->javascript   = array(
                    'trashfish-script-back/script_dsb01b_dashboard.js');
                
                $this->_renderBackend('dsb01b_dashboard',$renderData);
	}
}

?>
