<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _testing
 *
 * @author Sopar Sihotang
 */
class _testing extends Trashfish_GNC_Controller{
        
    function __construct(){
        parent::__construct();
    }
    
    public function trashfishgrid($renderData=""){
        $this->module       = "Grid";
        $this->title        = "Samples Grid";
        $this->description  = "List Data Table";
        $this->keywords     = "trashfish, cart";
        
        $params = array(
            'id'                    => 'user',
            'name'                  => 'USER',
            'columns'               => array(
                0   => array('header' => 'Username' , 'binding' => 'username'   , 'type' => 'string'    ),
                1   => array('header' => 'Age'      , 'binding' => 'age'        , 'type' => 'integer'   ),
                2   => array('header' => 'Active'   , 'binding' => 'active'     , 'type' => 'boolean'   , 'class' => 'hidden-480' )
            ),
            'allow_pagination'      => TRUE,
            'allow_state'           => TRUE,
            'allow_search'          => TRUE,
            'allow_changerecord'    => TRUE,
            'allow_autowidth'       => TRUE,
            'allow_selection'       => TRUE,
            'allow_sortable'        => TRUE,
            'allow_action'          => TRUE,
            'formdialog'            => array(
                'form_view' => 'sys01b_user'
            )
        );

        $this->load->library('trashfishgrid', $params);
        
        $SYSUSR_select_paging = $this->SYSUSR->select_paging($this->trashfishgrid->key_field, $this->trashfishgrid->columns, NULL);
        
        $this->data['content_fluid'] =  $this->trashfishgrid->render($SYSUSR_select_paging);
        
        $this->_renderBackend('_testing', $renderData);
    }
    
    public function trashfishform($renderData=""){
        switch($renderData){
            case 'textbox':
                $this->_renderBackend('_demos/_demos_trashfishform_textbox', $renderData);
                break;
            case 'combobox':
                $this->data['content_fluid'] =  $this->trashfishform->tffcombobox(
                        array(
                            'id'            => 'test', 
                            'name'          => 'test', 
                            'icon'          => 'envelope-alt',
                            'placeholder'   => 'Choose..',
                            'entity'        => 'A-Z',
                            'mask'          => 'phone',
                            'size'          => 'big'), 
                        array(
                            'allow'         => TRUE, 
                            'text'          => 'test_label')
                );
                break;
        }
        
        
    }
}

?>
