<div class="control-group">
    <?php if ($trashfishform->label->allow):?>
    <label class="control-label" for="<?echo $trashfishform->properties_tfftextbox->id?>"><?php echo $trashfishform->label->text;?></label>
    <?php endif;?>

    <div class="controls">
        <span class="input-prepend">
            <?php if($trashfishform->properties_tfftextbox->icon != ''):?>
            <span class="add-on"><i class="<?php echo get_icon($trashfishform->properties_tfftextbox->icon);?>"></i></span>
            <?php endif;?>
            <?php 
            echo '<input type       ="text" '.
                    'id             ="'.$trashfishform->properties_tfftextbox->id.'" '.
                    'name           ="'.$trashfishform->properties_tfftextbox->name.'" '.
                    'class          ="'.get_size($trashfishform->properties_tfftextbox->size).' '. 
                                    get_mask($trashfishform->properties_tfftextbox->mask).'" '.
                    'placeholder    ="'.$trashfishform->properties_tfftextbox->placeholder.'" '.
                    ($trashfishform->properties_tfftextbox->readonly ? 'readonly ' : '').
                    '/>';
            ?>
        </span>
        <?php if ($trashfishform->mandatory == TRUE): ?>
        <script type="text/javascript">
            $('#validation-form').validate({
                errorElement: 'span',
                errorClass: 'help-inline',
                focusInvalid: false,
                rules:{
                    email:{
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlrngth: 5
                    }
                }
            });
        </script>
        <?php endif;?>
    </div>
</div>