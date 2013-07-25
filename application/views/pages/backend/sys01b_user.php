<div class="row-fluid">
    <!--PAGE CONTENT BEGINS HERE-->
    <form class="form-horizontal" id="validation-form" method="get">
        <div class="widget-box transparent">
            <div class="widget-header">
                <h5 class="bigger lighter"><?php echo $form_title;?></h5>

                <div class="widget-toolbar no-border">
                    <ul class="nav nav-tabs" id="myTab2">
                        <li class="active">
                            <a data-toggle="tab" href="#SYSUSR">User Account</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#CUSCUS">Billing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="tab-content padding-4">
                        <div id="SYSUSR" class="tab-pane in active">
                            <div class="slim-scroll-auto">
                                <div class="content">
                                    <?php
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'USRCODE', 
                                                'name'          => 'USRCODE', 
                                                'icon'          => 'user-md',
                                                'placeholder'   => 'usercode',
                                                'readonly'      => TRUE), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'User Code')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'USRNAME', 
                                                'name'          => 'USRNAME', 
                                                'icon'          => 'user',
                                                'placeholder'   => 'username'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Username')
                                    );
                                    echo $this->trashfishform->tffemailbox(
                                            array(
                                                'id'            => 'USRMAIL', 
                                                'name'          => 'USRMAIL', 
                                                'icon'          => 'envelope-alt',
                                                'placeholder'   => 'email'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Email')
                                    );
                                    echo $this->trashfishform->tffpasswordbox(
                                            array(
                                                'id'            => 'USRPSWD', 
                                                'name'          => 'USRPSWD', 
                                                'icon'          => 'key',
                                                'placeholder'   => 'password',
                                                'readonly'      => TRUE), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Password')
                                    );
                                    echo $this->trashfishform->tffpasswordbox(
                                            array(
                                                'id'            => 'USRPSWD-re', 
                                                'name'          => 'USRPSWD-re', 
                                                'icon'          => 'key',
                                                'placeholder'   => 're-password',
                                                'readonly'      => TRUE), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Retype Password')
                                    );
                                    ?>
                                    <div class="control-group">
                                        <label class="control-label" for="USRTYPE">Type</label>

                                        <div class="controls">
                                            <select name="USRTYPE[]" id="USRTYPE" class="chzn-select" data-placeholder="Choose a User Type..." style="width:350px;">
                                                <option value=""></option>
                                                <option value="AD">Administrator</option>
                                                <option value="CU">Customer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="USRSTAT">Status</label>

                                        <div class="controls">
                                            <span class="input-icon">
                                                <input name="USRSTAT" id="USRSTAT" class="ace-switch ace-switch-5" type="checkbox" checked />
                                                <span class="lbl"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="USRDESC">Description</label>

                                        <div class="controls">
                                            <span class="input-prepend">
                                                <span class="add-on"><i class="icon-edit-sign"></i></span>
                                                <textarea name="USRDESC" id="USRDESC" class="span20 limited" data-maxlength="50" placeholder="description"></textarea>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="CUSCUS" class="tab-pane">
                            <div class="slim-scroll-auto">
                                <div class="content">
                                    <?php 
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSFNME', 
                                                'name'          => 'CUSFNME', 
                                                'icon'          => 'user',
                                                'placeholder'   => 'firstname'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'First Name')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSLNME', 
                                                'name'          => 'CUSLNME', 
                                                'icon'          => 'user',
                                                'placeholder'   => 'lastname'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Last Name')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSPHNE', 
                                                'name'          => 'CUSPHNE', 
                                                'icon'          => 'phone', 
                                                'mask'          => 'phone',
                                                'placeholder'   => '(999) 999-9999'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Phone')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSADR1', 
                                                'name'          => 'CUSADR1', 
                                                'icon'          => 'road',
                                                'placeholder'   => 'address1'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Address1')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSADR2', 
                                                'name'          => 'CUSADR2', 
                                                'icon'          => 'road',
                                                'placeholder'   => 'address2'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'Address2')
                                    );
                                    echo $this->trashfishform->tfftextbox(
                                            array(
                                                'id'            => 'CUSCITY', 
                                                'name'          => 'CUSCITY', 
                                                'icon'          => 'map-marker',
                                                'placeholder'   => 'city'), 
                                            array(
                                                'allow'         => TRUE, 
                                                'text'          => 'City')
                                    );
                                    ?>

                                    <div class="control-group">
                                        <label class="control-label" for="CUSCTRY">Country</label>

                                        <div class="controls">
                                            <select name="CUSCTRY[]" id="CUSCTRY" class="chzn-select" data-placeholder="Choose the Country...">
                                                <option value=""></option>
                                                <option value="IN">Indonesia</option>
                                                <option value="OT">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="CUSPROV">State/Province</label>

                                        <div class="controls">
                                            <select name="CUSPROV[]" id="CUSPROV" class="chzn-select" data-placeholder="Choose the State/Province...">
                                                <option value=""></option>
                                                <option value="SUMUT">Sumatera Utara</option>
                                                <option value="OT">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="CUSPOST">Zip/Postal Code</label>

                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-bullseye"></i></span>

                                                <input name="CUSPOST" class="input-medium input-mask-zipcode" type="text" id="CUSPOST" placeholder="99999"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button class="btn btn-info btn-mini" type="submit">
                <i class="icon-save bigger-110"></i>
                Save
            </button>

            &nbsp;
            <button class="btn btn-inverse btn-mini" type="reset">
                <i class="icon-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </form>
</div>

