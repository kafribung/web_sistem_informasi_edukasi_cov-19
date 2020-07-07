<!--::header part start::-->
<header class="main_menu home_menu" id="main-nav">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="{{ asset('asset/img/logo.png') }}" alt="logo"
                            style="height: 70px; padding: 3px;"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="smoothScroll" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Request::segment(1) == '' ? '#informasi' : '/'}} " class="smoothScroll">Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Request::segment(1) == '' ? '#rumahSakit' : '/'}} " class="smoothScroll">RS Rujukan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Request::segment(1) == '' ? '#kasus' : '/'}}" class="smoothScroll">Kasus</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Request::segment(1) == '' ? '#global' : '/'}}" class="smoothScroll">Global</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Request::segment(1) == '' ? '#team' : '/'}}" class="smoothScroll">Team</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->