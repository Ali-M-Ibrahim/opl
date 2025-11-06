<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header">
                <span data-i18n="nav.category.general"> الإعدادات</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                         data-placement="right" data-original-title="General"></i>
            </li>
            <li id="users" class=" nav-item "><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.project.main">الحسابات</span></a>
                <ul class="menu-content">
                    <li id="adduser" ><a class="menu-item" href="{{route('users.create')}}" data-i18n="nav.project.project_summary">إنشاء حساب</a>
                    </li>
                    <li id="listusers" ><a class="menu-item" href="{{route('users.index')}}" data-i18n="nav.project.project_tasks">كل الحسابات</a>
                    </li>

                </ul>
            </li>

            <li class=" navigation-header">
                <span data-i18n="nav.category.general">انتخابات</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="General"></i>
            </li>

            <li id="dash2" class=" nav-item"><a href="{{route('dashboard2')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">  لوحة القيادة الانتخابات</span></a>
            </li>




            <li id="searchcode" ><a href="{{route('admin')}}"><i class="la la-copy"></i><span class="menu-title" >بحث عن دكتور</span></a>
            </li>



            <li id="stat" class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.dash.main">الإحصاءات</span></a>
                <ul class="menu-content">

                    <li id="mazhabelection"><a class="menu-item" href="{{route('mazhabInElection')}}" data-i18n="nav.dash.ecommerce">المذاهب في الانتخابات</a>
                    </li>

                    <li id="kadaaelection"><a class="menu-item" href="{{route('kadaaInElection')}}" data-i18n="nav.dash.ecommerce">الأقضية  في الانتخابات</a>
                    </li>

                </ul>
            </li>



            <li id="stat" class=" nav-item"><a href="#"><i class="la la-file-photo-o"></i><span class="menu-title" data-i18n="nav.dash.main">التقارير مع خاصية التصدير</span></a>
                <ul class="menu-content">
                    <li id="amelhatef"><a class="menu-item" href="{{route('FilterNames')}}" data-i18n="nav.dash.ecommerce">عامل الهاتف</a>
                    </li>
                    <li id="noelected"><a class="menu-item" href="{{route('NoelectedNames')}}" data-i18n="nav.dash.ecommerce">غير المنتخبين</a>
                    </li>
                </ul>
            </li>

            <li ><a href="{{route('logout')}}"><i class="la la-power-off"></i><span class="menu-title" data-i18n="nav.changelog.main">خروج</span></a>
            </li>

        </ul>
    </div>
</div>

