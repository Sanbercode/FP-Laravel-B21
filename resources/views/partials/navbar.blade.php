<header>
    <!-- header inner -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 logo_section">
                <div class="full">
                    <div class="center-desk">
                        <h1 class="display-1 font-weight-bold mt-5">Revibook</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="menu-area">
                    <div class="limit-box ml-auto">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                @yield('navbar')
{{--                                <li>--}}
{{--                                    <a href="#"><img src="{{asset('/images/search_icon.png')}}" alt="#" /></a>--}}
{{--                                </li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
