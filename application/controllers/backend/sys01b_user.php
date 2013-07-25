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
class sys01b_user extends Trashfish_GNC_Controller{
        
        public function index($renderData=""){
                $this->module       = "SYSTEM";
                $this->progID       = "sys01a_user";
                $this->title        = "User";
                $this->description  = "Create/Edit Data User";
                $this->keywords     = "trashfish, cart";
                $this->javascript   = array(
                    'trashfish-script-back/script_sys01b_user.js');
                
                $this->data['form_title'] = 'Form User';
                
                $this->_renderBackend('sys01b_user',$renderData);
	}
    //put your code here
}

?>
