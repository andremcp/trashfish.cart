<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sys01a_user
 *
 * @author Dell
 */
class sys02a_usergroup extends Trashfish_GNC_Controller{
        
        public function index($renderData="")
        {
                $this->module       = "SYSTEM";
                $this->progID       = "sys02a_usergroup";
                $this->title        = "User Group";
                $this->description  = "List Data User";
                $this->keywords     = "trashfish, cart";
                $this->javascript   = array(
                    'trashfish-script-back/script_sys02a_usergroup.js');
                
                $this->data["data"] = array(
                    array('UGPCODE' => '989801', 'UGPNAME' => 'sysadmin',   'UGPTYPE' => 'Administrator',   'UGPSTAT' => '1'),
                    array('UGPCODE' => '989802', 'UGPNAME' => 'masteradmin','UGPTYPE' => 'Administrator',   'UGPSTAT' => '1'),
                    array('UGPCODE' => '989803', 'UGPNAME' => 'customer',   'UGPTYPE' => 'Customer',        'UGPSTAT' => '1'),
                );
                
                $this->data["param_form_sys02b_usergroup"] = array(
                    'title'         => 'User Group',
                    'description'   => 'Create/Edit User Group'
                );
                
                $this->_renderBackend('sys02a_usergroup',$renderData);
	}
}

?>
