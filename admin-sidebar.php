<nav>
        <ul class="metismenu" id="menu">
        <li class="<?php if($page=='dashboard') {echo 'active';} ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>الرئيسية</span></a></li>
                            
        <li class="<?php if($page=='employee') {echo 'active';} ?>"><a href="employees.php"><i class="ti-id-badge"></i> <span>قسم الموظفين</span></a></li>
                        
        <li class="<?php if($page=='department') {echo 'active';} ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>الاقسام</span></a></li>

         <li class="<?php if($page=='leave') {echo 'active';} ?>"><a href="leave-section.php"><i class="fa fa-sign-out"></i> <span>الاجازات</span></a></li>

        <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>ادارة الاجازات</span></a>

            <ul class="collapse">
                <li ><a href="pending-history.php"><i class="fa fa-spinner"></i> قيد الانتظار</a></li>
                <li ><a href="approved-history.php"><i class="fa fa-check"></i> المقبولة</a></li>
                <li ><a href="declined-history.php"><i class="fa fa-times-circle"></i> المرفوضة</a></li>
                <li ><a href="leave-history.php"><i class="fa fa-history"></i> جميع الطلبات</a></li>
            </ul>
            
        </li>

        <li class="<?php if($page=='manage-admin') {echo 'active';} ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>ادارة المسؤولين</span></a></li>
                            
    </ul>
</nav>