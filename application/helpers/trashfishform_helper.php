<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function get_mask($mask = ''){
    if ($mask == 'email' || $mask == 'phone'){
        return 'input-mask-'.$mask;
    }else{
        return '';
    }
}

function get_size($size = ''){
    if ($size == 'big' || $size == 'medium' || $size == 'small'){
        return 'input-'.$size;
    }else{
        return 'input-big';
    }
}

function get_icon($icon = ''){
    if (!is_null($icon) || $icon != ''){
        return 'icon-'.$icon;
    }else{
        return '';
    }
}

function type_combobox($type){
    switch($type){
        case 'dropdown':
            return 'chzn-select';
            break;
        default:
            return 'chzn-select';
            break;
    }
}

?>
