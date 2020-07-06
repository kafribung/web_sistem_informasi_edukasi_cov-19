<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                    <a href="/dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">Manajemen</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'admin' ? 'active' : ''}}">
                    <a href="/admin"> <i class="menu-icon ti-user"></i>Admin</a>
                </li>

                <li class="menu-title">Artikel</li>
                <!-- /.menu-title -->
                <li class="{{ Request()->is('artikel')  ? 'active' : '' }}">
                    <a href="/artikel"> <i class="menu-icon ti-write"></i>All Artikel</a>
                </li>

                <li class="{{ Request()->is('artikel/create') ? 'active' : ''}}">
                    <a href="/artikel/create"> <i class="menu-icon ti-marker-alt"></i>Add Artikel</a>
                </li>

                <li class="menu-title">Video</li>
                <!-- /.menu-title -->
                <li class="{{ Request()->is('video')  ? 'active' : '' }}">
                    <a href="/video"> <i class="menu-icon ti-video-clapper"></i>All Video</a>
                </li>

                <li class="{{ Request()->is('video/create')  ? 'active' : '' }}">
                    <a href="/video/create"> <i class="menu-icon ti-pencil-alt "></i>Add Video</a>
                </li>

                <li class="menu-title">Motivasi</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'motivasi' ? 'active' : ''}}">
                    <a href="/motivasi"> <i class="menu-icon ti-pencil"></i>All Motivasi</a>
                </li>

                <li class="menu-title">Develop</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'team' ? 'active' : ''}}">
                    <a href="/team"> <i class="menu-icon ti-bookmark"></i>Team</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->