<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfishchart
 *
 * @author Sopar Sihotang
 */
class Trashfishchart {
    public $id              = 'trashfishchart_id';
    public $name            = 'trashfishchart_name';
    public $icon            = '';
    
    public $rows            = array();
    public $properties      = array();
    public $orders          = array();
    
    public $render_data     = TRUE;
    
    private $properties_default = array(
        'label' => '',
        'color' => '#ffffff'
    );
    
    private $orders_default = array(
        'key'           => '',
        'value'         => '',
        'selectable'    => TRUE
    );
    
    
    function __construct($params=array()){
        $this->CI =& get_instance();
        
        $this->CI->load->helper('trashfishchart');
        $this->CI->load->model('trashfishchartBL');
        
        foreach ($params as $key => $value){
            $this->$key = $value;
        }
        
        if ($this->auto_count_percentage){
            
        }
    }
    
    function get_data(){
        $default = array(
            'label' => 'label_default',
            'value' => 'value_default'
        );
        
        $this->rows = $this->CI->trashfishchartBL->get_items($this->table, $this->table_id_name, $this->columns, NULL);
    }
    
    function get_percentage($value, $total){
        return ($value/$total * 100)/100;
    }
    
    function render_pie(){
        if ($this->render_data){
            if (method_exists($this->CI, $this->get_data)){
                $this->CI->{$this->get_data}($this);
            }
            else{
                $this->get_data();
            }
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishchart_pie_extender', array('trashfishchart' => $this), TRUE);
    }
    
    function render_line(){
        if ($this->render_data){
            if (method_exists($this->CI, $this->get_data)){
                $this->CI->{$this->get_data}($this);
            }
            else{
                $this->get_data();
            }
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishchart_lne_extender', array('trashfishchart' => $this), TRUE);
    }
    
    function render_task(){
        if ($this->render_data){
            if (method_exists($this->CI, $this->get_data)){
                $this->CI->{$this->get_data}($this);
            }
            else{
                $this->get_data();
            }
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishchart_tsk_extender', array('trashfishchart' => $this), TRUE);
    }
}

?>
