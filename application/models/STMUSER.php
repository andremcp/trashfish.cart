<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of STMUSER
 *
 * @author Sopar Sihotang
 */
class STMUSER extends Trashfish_GNC_Model{
    function __construct()
    {
        parent::__construct();
        
        $this->model_name = 'SYSUSR MODEL';
        $this->table_name = 'user';
    }
}

?>
