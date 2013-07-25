<ul class="nav nav-list">
    <li class="<?php echo isActive($module, "DASHBOARD")?>">
        <a href="<?php echo base_url()."index.php/".BACKEND."/dashboard"; ?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="<?php if(isActive($module, "SYSTEM") != ""){ echo isActive($module,"SYSTEM")." open";}?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-cogs"></i>
            <span>System</span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if(isActive($module, "SYSTEM") != ""){ echo isActive($progID,"sys01a_user"); } ?>">
                <a href="<?php echo base_url()."index.php/".BACKEND."/system/"."user"; ?>">
                    <i class="icon-double-angle-right"></i>
                    User
                </a>
            </li>

            <li class="<?php if(isActive($module, "SYSTEM") != ""){ echo isActive($progID,"sys02a_usergroup"); } ?>">
                <a href="<?php echo base_url()."index.php/".BACKEND."/system/"."group"; ?>">
                    <i class="icon-double-angle-right"></i>
                    User Group
                </a>
            </li>
            
            <li class="<?php if(isActive($module, "SYSTEM") != ""){ echo isActive($progID,"sys03a_userauthority"); } ?>">
                <a href="<?php echo base_url()."index.php/".BACKEND."/system/"."auth"; ?>">
                    <i class="icon-double-angle-right"></i>
                    User Authority
                </a>
            </li>
            
            <li class="<?php if(isActive($module, "SYSTEM") != ""){ echo isActive($progID,"sys04a_menu"); } ?>">
                <a href="<?php echo base_url()."index.php/".BACKEND."/system/"."menu"; ?>">
                    <i class="icon-double-angle-right"></i>
                    Menu
                </a>
            </li>
        </ul>
    </li>
    
    <li class="<?php if(isActive($module,"PRODUCT") != ""){ echo isActive($module,"PRODUCT")." open";}?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-gift"></i>
            <span>Products</span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if(isActive($module, "PRODUCT") != ""){ echo isActive($progID,"prd01a_item"); } ?>">
                <a href="<?php echo base_url()."index.php/admin/item";?>">
                    <i class="icon-double-angle-right"></i>
                    Item
                </a>
            </li>

            <li class="<?php if(isActive($module, "PRODUCT") != ""){ echo isActive($progID,"prd02a_categories"); } ?>">
                <a href="<?php echo base_url()."index.php/admin/categories";?>">
                    <i class="icon-double-angle-right"></i>
                    Categories
                </a>
            </li>
        </ul>
    </li>
    
    <li class="<?php if(isActive($module, "CUSTOMER") != ""){ echo isActive($module,"CUSTOMER")." open";}?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-group"></i>
            <span>Customers</span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if(isActive($module, "CUSTOMER") != ""){ echo isActive($progID,"cst01a_datacustomer"); } ?>">
                <a href="<?php echo base_url()."index.php/admin/customer";?>">
                    <i class="icon-double-angle-right"></i>
                    Data Customer
                </a>
            </li>
        </ul>
    </li>
    
    <li class="<?php if(isActive($module,"ORDER") != ""){ echo isActive($module,"ORDER")." open";}?>">
        <a href="#" class="dropdown-toggle">
            <i class="icon-shopping-cart"></i>
            <span>Orders</span>

            <b class="arrow icon-angle-down"></b>
        </a>

        <ul class="submenu">
            <li class="<?php if(isActive($module, "ORDER") != ""){ echo isActive($progID,"ord01a_pendingorder"); } ?>">
                <a href="<?php echo base_url()."index.php/admin/pendingorder";?>">
                    <i class="icon-double-angle-right"></i>
                    Pending Order
                </a>
            </li>
        </ul>
    </li>
</ul><!--/.nav-list-->