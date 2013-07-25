<div class="control-group">
    <?php if ($trashfishform->label->allow):?>
    <label class="control-label" for="<?echo $trashfishform->properties_tffmailbox->id?>"><?php echo $trashfishform->label->text;?></label>
    <?php endif;?>

    <div class="controls">
        <span class="input-prepend">
            <span class="add-on"><i class="<?php echo get_icon($trashfishform->properties_tffmailbox->icon);?>"></i></span>
            <?php 
            echo '<input type       ="email" '.
                    'id             ="'.$trashfishform->properties_tffmailbox->id.'" '.
                    'name           ="'.$trashfishform->properties_tffmailbox->name.'" '.
                    'class          ="'.get_size($trashfishform->properties_tffmailbox->size).' '. 
                                    get_mask($trashfishform->properties_tffmailbox->mask).'" '.
                    'placeholder    ="'.$trashfishform->properties_tffmailbox->placeholder.'" '.
                    ($trashfishform->properties_tffmailbox->readonly ? 'readonly ' : '').
                    '/>';
            ?>
        </span>
    </div>
</div>