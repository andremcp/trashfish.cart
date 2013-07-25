<div class="control-group">
    <?php if ($trashfishform->label->allow):?>
    <label class="control-label" for="<?echo $trashfishform->properties_tffpswdbox->id?>"><?php echo $trashfishform->label->text;?></label>
    <?php endif;?>

    <div class="controls">
        <span class="input-prepend">
            <span class="add-on"><i class="<?php echo get_icon($trashfishform->properties_tffpswdbox->icon);?>"></i></span>
            <?php 
            echo '<input type       ="password" '.
                    'id             ="'.$trashfishform->properties_tffpswdbox->id.'" '.
                    'name           ="'.$trashfishform->properties_tffpswdbox->name.'" '.
                    'class          ="'.get_size($trashfishform->properties_tffpswdbox->size).' '. 
                                    get_mask($trashfishform->properties_tffpswdbox->mask).'" '.
                    'placeholder    ="'.$trashfishform->properties_tffpswdbox->placeholder.'" '.
                    ($trashfishform->properties_tffpswdbox->readonly ? 'readonly ' : '').
                    '/>';
            ?>
        </span>
    </div>
</div>