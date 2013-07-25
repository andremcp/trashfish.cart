<div class="control-group">
    <?php if ($trashfishform->label->allow):?>
    <label class="control-label" for="<?echo $trashfishform->properties_tffcmbobox->id?>"><?php echo $trashfishform->label->text;?></label>
    <?php endif;?>

    <div class="controls">
        <?php
        echo '<select name              ="'.$trashfishform->properties_tffcmbobox->name.'[]" '.
                    'id                 ="'.$trashfishform->properties_tffcmbobox->id.'" '.
                    'class              ="'.type_combobox($trashfishform->properties_tffcmbobox->type).'" '.
                    'data-placeholder   ="'.$trashfishform->properties_tffcmbobox->placeholder.'" '.
                    'style="width: 350px"'.
                    '>';
        echo '<option value=""></option>';
        foreach($trashfishform->properties_tffcmbobox->data as $key => $property){
            echo '<option value="'.$property->CODE.'">'.$property->TEXT.'</option>';
        }
        echo "</select>";
        ?>
    </div>
</div>