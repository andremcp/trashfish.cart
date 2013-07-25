<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @desc Simple function to check if current page is equal to nav list element.
 *       This case return "active" as class name for the list element.
 * @param String $inpID
 * @param String $outID
 * @return String/Null
 */
function isActive($inpID,$outID){
    if($inpID == $outID){
        return "active";
    }
    else
    {
        return "";
    }
}

/**
 * @desc Simple function to check if current page is equal to nav list element.
 *       This case return "current" as class name for the list element.
 * @param String $inpID
 * @param String $outID
 * @return String/Null
 */
function isCurrent($inpID,$outID){
    if($inpID == $outID){
        return "current";
    }
    else
    {
        return "";
    }
}
?>