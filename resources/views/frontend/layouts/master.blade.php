<!DOCTYPE html>
<html lang="id">
  <head>
    @include('frontend/layouts/sections/header/head')
    <title>Tarapersada</title>
  </head>
    <body class="home wp-singular page-template-default page page-id-235 wp-theme-themify-ultra skin-music2 sidebar-none full_width tb_animation_on ready-view header-top-widgets fixed-header-enabled footer-left-col tagline-off social-widget-off search-off header-widgets-off filter-hover-none filter-featured-only sidemenu-active">
        <a class="screen-reader-text skip-to-content" href="#content">Skip to content</a>

        <div id="pagewrap" class="tf_box hfeed site">
            @include('frontend/layouts/sections/header/header')

            <div id="body" class="tf_box tf_clear tf_mw tf_clearfix">
                @yield('content')
            </div>

            @include('frontend/layouts/sections/footer/footer')
        </div>

        @include('frontend/layouts/sections/footer/script')
    </body>
</html>
