<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfishgrid
 *
 * @author Sopar Sihotang
 */
class Trashfishgrid {
    public $id                  = 'trashfishgrid';
    public $name                = 'trashfishgrid';
    
    public $allow_selection     = TRUE;
    public $allow_action        = TRUE;
    public $allow_add           = TRUE;
    public $allow_edit          = TRUE;
    public $allow_delete        = TRUE;
    public $allow_view          = TRUE;
    public $allow_pagination    = TRUE;
    public $allow_state         = TRUE;
    public $allow_search        = TRUE;
    public $allow_changerecord  = TRUE;
    public $allow_autowidth     = TRUE;
    public $allow_sortable      = TRUE;
    
    public $headers             = array();
    public $columns             = array();
    public $rows                = array();
    public $formdialog          = array();
    
    public $key_field           = 'id';
    public $get_data            = '';
    public $render_table        = TRUE;
    
    private $columns_default    = array(
        'type'      => 'string',
        'header'    => '',
        'display'   => '',
        'sortable'  => TRUE,
        'class'     => ''
    );
    
    private $formdialog_default = array(
        'form_title'    => '',
        'form_view'     => '',
        'form_action'   => 'add'
    );
    
    function __construct($params=array()){
        $this->CI = & get_instance();
        
        $this->CI->load->helper('trashfishgrid');
        $this->CI->load->model('trashfishgridBL');
        
        foreach ($params as $key => $value){
            $this->$key = $value;
        }
        
        foreach($this->columns as $key => $column){
            $this->columns[$key] = array_merge($this->columns_default, (array) $column);

            $this->columns[$key]['field_name']        = $this->columns[$key]['binding'];  
            $this->columns[$key]['field_name_as']     = $this->columns[$key]['binding'];

            $this->columns[$key] = (object) $this->columns[$key];
            $this->headers[$key] = $this->columns[$key]->header;
        }
        
        if ($this->allow_action){
            if ($this->allow_add){
                $this->formdialog = array_merge($this->formdialog_default, (array) $this->formdialog);
                
                $this->formdialog['form_title']     = 'Form '.$this->id.' <small><i class="icon-double-angle-right"></i> New</small>';
                $this->formdialog['form_action']    = 'add';
            }
            if ($this->allow_edit){
                $this->formdialog = array_merge($this->formdialog_default, (array) $this->formdialog);
                
                $this->formdialog['form_title']     = 'Form '.$this->id.' <small><i class="icon-double-angle-right"></i> Edit</small>';
                $this->formdialog['form_action']    = 'edit';
            }
            if ($this->allow_view){
                $this->formdialog = array_merge($this->formdialog_default, (array) $this->formdialog);
                
                $this->formdialog['form_title']     = 'Form '.$this->id.' <small><i class="icon-double-angle-right"></i> View</small>';
                $this->formdialog['form_action']    = 'view';
            }
            $this->formdialog = (object) $this->formdialog;
        }
    }
    
    function set_data($data){
        $this->rows = $data;
    }
    
    function get_data(){
        //$this->rows = $this->CI->trashfishgridBL->get_items($this->table, $this->table_id_name, $this->columns, NULL);
        return $this->rows;
    }
    
    function render($data=array()){
        if (is_array($data)){
            $this->set_data($data);
            
            if ($this->render_table){
                if (method_exists($this->CI, $this->get_data)){
                    $this->CI->{$this->get_data}($this);
                }
                else{
                    $this->get_data();
                }
            }
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishgrid_tbl_extender', array('trashfishgrid' => $this), TRUE);
    }
}

?>
