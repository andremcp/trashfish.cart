<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfishformBL
 *
 * @author Sopar Sihotang
 */
class trashfishformBL extends Trashfish_GNC_Model{
    
    function __construct()
    {
        parent::__construct();
        $this->model_name = 'TRASHFISHFORM MODEL';
    }
    
    function get_list_ddl($entity, $filter=array()){
        switch($entity){
            case 'A-Z':
                $this->table_name = 'STMVARB';
                return $this->select_data_ddl('SMVBCODE', 'SMVBNAME', $filter);
                break;
        }
    }
}

?>
