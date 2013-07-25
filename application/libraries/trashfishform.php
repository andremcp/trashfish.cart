<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfishform
 *
 * @author Sopar Sihotang
 */
class Trashfishform {
    /*properties textbox*/
    public $properties_tfftextbox = array();
    public $properties_tffmailbox = array();
    public $properties_tffpswdbox = array();
    public $properties_tffcmbobox = array();
    public $label = array();
    
    public $properties_tfftextbox_default = array(
        'id'            => '',
        'name'          => '',
        'mask'          => '',
        'size'          => 'big',
        'icon'          => '',
        'label'         => '',
        'placeholder'   => '',
        'readonly'      => FALSE,
        'mandatory'     => FALSE
    );
    public $properties_tffmailbox_default = array(
        'id'            => '',
        'name'          => '',
        'mask'          => '',
        'size'          => 'big',
        'icon'          => '',
        'label'         => '',
        'placeholder'   => '',
        'readonly'      => FALSE,
        'mandatory'     => FALSE
    );
    public $properties_tffpswdbox_default = array(
        'id'            => '',
        'name'          => '',
        'mask'          => '',
        'size'          => 'big',
        'icon'          => '',
        'label'         => '',
        'placeholder'   => '',
        'readonly'      => FALSE,
        'mandatory'     => FALSE
    );
    public $properties_tffcmbobox_default = array(
        'id'            => '',
        'name'          => '',
        'label'         => '',
        'type'          => '',
        'placeholder'   => '',
        'entity'        => '',
        'data'          => array(),
        'filter'        => array(),
        'mandatory'     => FALSE
    );
    
    public $label_default = array(
        'allow' => FALSE,
        'text'  => ''
    );
    
    function __construct(){
        $this->CI = & get_instance();
        $this->CI->load->helper('trashfishform');
        $this->CI->load->model('trashfishformBL');
    }
    
    function tfftextbox($properties = array(), $label = array('allow' => FALSE, 'text' => '')){
        if (is_array($properties)){
            $this->properties_tfftextbox    = array_merge($this->properties_tfftextbox_default, (array) $properties);
            $this->properties_tfftextbox    = (object) $this->properties_tfftextbox;
        }
        
        if (is_array($label)){
            $this->label = array_merge($this->label_default, (array) $label);
            $this->label = (object) $this->label;
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishform_txb_extender', array('trashfishform' => $this), TRUE);
    }
    
    function tffemailbox($properties = array(), $label = array('allow' => FALSE, 'text' => '')){
        if (is_array($properties)){
            $this->properties_tffmailbox    = array_merge($this->properties_tffmailbox_default, (array) $properties);
            $this->properties_tffmailbox    = (object) $this->properties_tffmailbox;
        }
        
        if (is_array($label)){
            $this->label = array_merge($this->label_default, (array) $label);
            $this->label = (object) $this->label;
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishform_eml_extender', array('trashfishform' => $this), TRUE);
    }
    
    function tffpasswordbox($properties = array(), $label = array('allow' => FALSE, 'text' => '')){
        if (is_array($properties)){
            $this->properties_tffpswdbox    = array_merge($this->properties_tffpswdbox_default, (array) $properties);
            $this->properties_tffpswdbox    = (object) $this->properties_tffpswdbox;
        }
        
        if (is_array($label)){
            $this->label = array_merge($this->label_default, (array) $label);
            $this->label = (object) $this->label;
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishform_pwd_extender', array('trashfishform' => $this), TRUE);
    }
    
    function tffcombobox($properties = array(), $label = array('allow' => FALSE, 'text' => '')){
        if (is_array($properties)){
            $this->properties_tffcmbobox        = array_merge($this->properties_tffcmbobox_default, (array) $properties);
            $this->properties_tffcmbobox        = (object) $this->properties_tffcmbobox;
            $this->properties_tffcmbobox->data  = $this->CI->trashfishformBL->get_list_ddl(
                    $this->properties_tffcmbobox->entity, 
                    $this->properties_tffcmbobox->filter
                );
        }
        
        if (is_array($label)){
            $this->label = array_merge($this->label_default, (array) $label);
            $this->label = (object) $this->label;
        }
        
        return $this->CI->load->view('usercontrols/backend/trashfishform_cmb_extender', array('trashfishform' => $this), TRUE);
    }
}

?>
