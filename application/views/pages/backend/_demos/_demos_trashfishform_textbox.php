<div class="row-fluid">
    <!--PAGE CONTENT BEGINS HERE-->

    <div class="row-fluid">
        <form class="form-horizontal">
            <?php 
            echo $this->trashfishform->tfftextbox(
                    array(
                        'id'    => 'default', 
                        'name'  => 'default'),
                    array(
                        'allow' => TRUE, 
                        'text'  => 'default')
            );
            echo $this->trashfishform->tfftextbox(
                    array(
                        'id'    => 'test', 
                        'name'  => 'test',
                        'icon'  => 'envelope-alt', 
                        'mask'  => 'phone',
                        'size'  => 'big'),
                    array(
                        'allow' => TRUE, 
                        'text'  => 'test')
            );
            ?>
        </form>
    </div><!--/row-->
    <!--PAGE CONTENT ENDS HERE-->
</div><!--/row-->