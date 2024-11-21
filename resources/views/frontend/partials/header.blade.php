<header id="header" data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 h-auto box-shadow-none">
        <div class="container-fluid px-3 px-lg-5 p-static">
            <div class="row align-items-center py-3">
                <div class="col-auto col-lg-2 col-xxl-3 me-auto me-lg-0">
                    <div class="header-logo" data-clone-element-to="#offCanvasLogo">
                        <a href="demo-accounting-1.html">
                            <img alt="Porto" width="110" height="110" src="img/source/logo_diskominfo_kaltim.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-auto col-lg-8 col-xxl-6 justify-content-lg-center">
                    <div class="header-nav header-nav-links justify-content-lg-center">
                        <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-arrows header-nav-main-effect-2">
                            <nav class="collapse">
                                <ul class="nav nav-pills" id="mainNav">
                                    <li>
                                        <a href="/beranda" class="nav-link {{ Request::is('beranda') ? 'active' : '' }}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/about-front" class="nav-link {{ Request::is('about-front') ? 'active' : '' }}">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/service-front" class="nav-link {{ Request::is('service-front') ? 'active' : '' }}">
                                            Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/stats-front" class="nav-link {{ Request::is('stats-front') ? 'active' : '' }}">
                                            Stats
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/team-front" class="nav-link {{ Request::is('team-front') ? 'active' : '' }}">
                                            Team
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/artikel-front" class="nav-link {{ Request::is('artikel-front') ? 'active' : '' }}">
                                            Artikel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact-front" class="nav-link {{ Request::is('contact-front') ? 'active' : '' }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-lg-2 col-xxl-3">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-none d-sm-flex d-lg-none d-xxl-flex">
                            <img src="img/icons/phone-2.svg" width="24" height="24" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary pe-1'}" />
                            <a href="tel:1234567890" class="text-decoration-none font-secondary text-4 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap">800 123 4567</a>
                        </div>
                        <a href="demo-accounting-1-contact.html" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium px-3 py-2 text-2-5 btn-swap-1 ms-3 d-none d-md-flex" data-clone-element="1">
                            <span>Get Free Quote <i class="fa-solid fa-arrow-right ms-2"></i></span>
                        </a>
                        <button class="btn header-btn-collapse-nav rounded-pill" data-bs-toggle="offcanvas" href="#offcanvasMain" role="button" aria-controls="offcanvasMain">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>