<div class="floatwa">
    @foreach ($whatsapps as $whatsapp )
        <div class="tombolwa">
            <a href="{{ $whatsapp->link }}" target="_blank"><em class="fa-brands fa-whatsapp"></em> &nbsp;{{ $whatsapp->name }}</a>
        </div>
    @endforeach
</div>
<div id="headerwrap" class="tf_box tf_w">
    <div class="header-icons tf_hide">
        <a id="menu-icon" class="tf_inline_b tf_text_dec" href="#mobile-menu" aria-label="Menu">
        <span class="menu-icon-inner tf_inline_b tf_vmiddle tf_overflow"></span>
        <span class="screen-reader-text">Menu</span>
        </a>
    </div>
    <header id="header" class="tf_box pagewidth tf_clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <div class="header-bar tf_box">
        <div id="site-logo">
            <a href="index.html" title="{{ $company->name }}">
            <img src="{{ asset('storage/' . $logo->image) }}" alt="{{ $company->name }}" title="{{ $company->name }}" width="100" height="" class="site-logo-image" data-tf-not-load="1" importance="high" />
            </a>
        </div>
        </div>
        <!-- /.header-bar -->
        <div id="mobile-menu" class="sidemenu sidemenu-off tf_scrollbar">
        <div class="navbar-wrapper tf_clearfix">
            <nav id="main-nav-wrap" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
            <ul id="main-nav" class="main-nav tf_clearfix tf_box">
                <li class="{{ Route::currentRouteName() == 'index' ? 'current_page_item' : '' }} menu-item-page-235 menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-261">
                <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'about-us' ? 'current_page_item' : '' }} menu-item-page-232 menu-item menu-item-type-post_type menu-item-object-page menu-item-260">
                <a href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="menu-item-custom-444 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub-menu menu-item-444" aria-haspopup="true">
                <a href="#daftartraining">Daftar Training <span class="child-arrow"></span>
                </a>
                <ul class="sub-menu">
                    @foreach ($categories as $category)
                    <li class="menu-item-page-234 menu-item menu-item-type-post_type menu-item-object-page menu-item-445 menu-page-234-parent-444">
                        <a href="">{{ $category->title }}</a>
                    </li>
                    @endforeach
                </ul>
                </li>
                <li class="menu-item-page-447 menu-item menu-item-type-post_type menu-item-object-page menu-item-452">
                <a href="{{ route('schedules') }}">Schedule</a>
                </li>
                <li class="menu-item-page-446 menu-item menu-item-type-post_type menu-item-object-page menu-item-451">
                <a href="{{ route('testimonials') }}">Dokumentasi &amp; Testimoni</a>
                </li>
                <li class="menu-item-page-233 menu-item menu-item-type-post_type menu-item-object-page menu-item-259">
                <a href="{{ route('articles') }}">Artikel</a>
                </li>
                <li class="menu-item-page-243 menu-item menu-item-type-post_type menu-item-object-page menu-item-254">
                <a href="{{ route('contacts') }}">Kontak</a>
                </li>
            </ul>
            </nav>
            <!-- /#main-nav-wrap -->
        </div>
        <a id="menu-icon-close" aria-label="Close menu" class="tf_close tf_hide" href="#">
            <span class="screen-reader-text">Close Menu</span>
        </a>
        </div>
        <!-- #mobile-menu -->
        <!-- /#mobile-menu -->
    </header>
    <!-- /#header -->
</div>