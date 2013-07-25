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
class dsb01a_dashboard extends Trashfish_GNC_Controller{
        
        public function index($renderData=""){
                $this->module       = "DASHBOARD";
                $this->title        = "Dashboard";
                $this->description  = "Stats and Graphs";
                $this->keywords     = "arny, arnodo";
                $this->javascript   = array(
                    'jquery.easy-pie-chart.min.js',
                    'jquery.sparkline.min.js',
                    'flot/jquery.flot.min.js',
                    'flot/jquery.flot.pie.min.js',
                    'flot/jquery.flot.resize.min.js',
                    'trashfish-script-back/script_dsb01a_dashboard.js');
                
                $this->_renderBackend('dsb01a_dashboard',$renderData);
	}
}

?>
