<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span data-i18n="nav.category.general">انتخابات</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                         data-placement="right" data-original-title="General"></i>
            </li>
            <li id="allbrokers" ><a href="{{route('brokers.index')}}"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.changelog.main">الأفراد</span></a>
            </li>
            <li id="notelected" ><a href="{{route('notElected')}}"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.changelog.main">الأفراد الغير مقترعين</span></a>
            </li>


            <li ><a href="{{route('logout')}}"><i class="la la-power-off"></i><span class="menu-title" data-i18n="nav.changelog.main">خروج</span></a>
            </li>

        </ul>
    </div>
</div>

