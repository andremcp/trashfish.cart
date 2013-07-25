<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trashfishchartBL
 *
 * @author Sopar Sihotang
 */
class TrashfishchartBL extends CI_Model{
    //put your code here
    
    function __construct(){
        parent::__construct();
    }
    
    function get_Percentage($value, $total)
    {
        return $value/$total * 100;
    }
}

?>
