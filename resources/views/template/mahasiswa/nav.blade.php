<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="user-details">
        <div class="pull-left">
            <img src="{{asset("/images/users/avatar-1.jpg")}}" alt="" class="thumb-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="#">{{ Auth::user()->name }}</a>
            <p class="text-muted m-0">{{ Auth::user()->nim }}</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">M E N U</li>
            <li>
                <a href="index.html">
                    <i class="ti-home"></i><span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-light-bulb"></i> <span> Kerja Praktek </span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="/kerja-praktek">Daftar Kerja Praktek</a></li>
                    <li><a href="/bimbingan">Bimbingan</a></li>
                </ul>
            </li>


        </ul>

    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

</div>