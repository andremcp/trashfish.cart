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
class sys01a_user extends Trashfish_GNC_Controller{
        
        public function index($renderData="")
        {
                $this->module       = "SYSTEM";
                $this->progID       = "sys01a_user";
                $this->title        = "User";
                $this->description  = "List Data User";
                $this->keywords     = "trashfish, cart";
                $this->javascript   = array(
                    'trashfish-script-back/script_sys01a_user.js');
                
                $this->data["data"] = array(
                    array('USRCODE' => '131001', 'USRNAME' => 'munic',      'USRMAIL' => 'munic@webmaster.com',     'USRINDT' => 'January 2013', 'USRTYPE' => 'Administrator',  'USRSTAT' => '1'),
                    array('USRCODE' => '131002', 'USRNAME' => 'vander',     'USRMAIL' => 'vander@webmaster.com',    'USRINDT' => 'February 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '1'),
                    array('USRCODE' => '131003', 'USRNAME' => 'kimonk',     'USRMAIL' => 'kimonk@webmaster.com',    'USRINDT' => 'February 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '1'),
                    array('USRCODE' => '131004', 'USRNAME' => 'alpiant',    'USRMAIL' => 'alpiant@webmaster.com',   'USRINDT' => 'February 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '1'),
                    array('USRCODE' => '131005', 'USRNAME' => 'splash',     'USRMAIL' => 'splash@webmaster.com',    'USRINDT' => 'March 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '1'),
                    array('USRCODE' => '131006', 'USRNAME' => 'taniwan',    'USRMAIL' => 'taniwan@webmaster.com',   'USRINDT' => 'March 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '1'),
                    array('USRCODE' => '131007', 'USRNAME' => 'bojak',      'USRMAIL' => 'bojak@webmaster.com',     'USRINDT' => 'April 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '0'),
                    array('USRCODE' => '131008', 'USRNAME' => 'zanneta',    'USRMAIL' => 'zanneta@webmaster.com',   'USRINDT' => 'April 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '2'),
                    array('USRCODE' => '131009', 'USRNAME' => 'mopeng',     'USRMAIL' => 'mopeng@webmaster.com',    'USRINDT' => 'April 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '2'),
                    array('USRCODE' => '131010', 'USRNAME' => 'billok',     'USRMAIL' => 'billok@webmaster.com',    'USRINDT' => 'April 2013', 'USRTYPE' => 'Customer',       'USRSTAT' => '2')
                );
                
                $this->data["param_form_user"] = array(
                    'title'         => 'User',
                    'description'   => 'Create/Edit User'
                );
                
                $this->_renderBackend('sys01a_user',$renderData);
	}
}

?>
