@extends('frontend/layouts/master')

@section('content')

<!-- layout-container -->
<div id="layout" class="pagewidth tf_box tf_clearfix">
    <!-- content -->
    <main id="content" class="tf_box tf_clearfix">
        <div id="page-235" class="type-page">
            <div class="page-content entry-content">
                <!--themify_builder_content-->
                <div id="themify_builder_content-235" data-postid="235" class="themify_builder_content themify_builder_content-235 themify_builder tf_clear">
                    @include('frontend/layouts/sections/header/hero')
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_9cfa705 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_1 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col-full tb_tt5y706 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module text -->
                            <div class="module module-text tb_00pl476 wow" data-tf-animation="fadeInLeft" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: center">Training and Certfication</p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module text -->
                            <div class="module module-text tb_4pkc335" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: center"></p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module divider -->
                            <div class="module tf_mw module-divider tb_wx9o829 solid divider-custom divider-center" style="
                                border-width: 2px;
                                border-color: #2980b9;
                                width: 40px;
                            " data-lazy="1"></div>
                            <!-- /module divider -->
                            <!-- module text -->
                            <div class="module module-text tb_sqe6874" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: center"> Konsultan edukasi yang menyediakan berbagai <span style="font-weight: bold">pelatihan online, offline, dan inhouse</span> untuk memenuhi setiap kebutuhan pelanggan </p>
                            </div>
                            </div>
                            <!-- /module text -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_sv58306 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_4 tf_box tf_rel">
                        @foreach ($categories as $category)
                        <div data-lazy="1" class="module_column tb-column col4-1 tb_vpd8307">
                            <div class="tb-column-inner tf_box tf_w">
                                <!-- module image -->
                                <div class="module module-image tb_sa1e485 drop-shadow image-center auto_fullwidth tf_mw" data-lazy="1">
                                <div class="image-wrap tf_rel tf_mw">
                                    <img loading="lazy" decoding="async" width="400" height="400" src="{{ asset('storage/' . $category->thumbnail) }}" class="wp-post-image wp-image-302" title="{{ $category->title }}" alt="{{ $category->title }}" />
                                </div>
                                <!-- /image-wrap -->
                                </div>
                                <!-- /module image -->
                                <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_oy8d14 tf_w tf_clearfix">
                                <div class="subrow_inner col_align_top tb_col_count_1 tf_box tf_w">
                                    <div data-lazy="1" class="module_column sub_column col-full tb_s5tg15 first">
                                    <div class="tb-column-inner tf_box tf_w">
                                        <!-- module text -->
                                        <div class="module module-text tb_sg51263" data-lazy="1">
                                        <div class="tb_text_wrap">
                                            <p>
                                            <strong>{{ $category->title }}</strong>
                                            </p>
                                        </div>
                                        </div>
                                        <!-- /module text -->
                                        <!-- module text -->
                                        <div class="module module-text tb_wxes468" data-lazy="1">
                                        <div class="tb_text_wrap">
                                            <p>
                                            <span style="font-weight: normal">{{ strip_tags($category->description) }}</span>
                                            </p>
                                        </div>
                                        </div>
                                        <!-- /module text -->
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /themify_builder_sub_row -->
                                <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_9ew5686 tf_w tf_clearfix">
                                <div class="subrow_inner col_align_top tb_col_count_2 tf_box tf_w">
                                    <div data-lazy="1" class="module_column sub_column col3-1 tb_pfgj686 first">
                                    <div class="tb-column-inner tf_box tf_w">
                                        <!-- module icon -->
                                        <div class="module module-icon tb_3y7z687 normal circle icon_horizontal" data-lazy="1">
                                            <div class="module-icon-item">
                                                <em class="fa-solid fa-star" style="color: #e8ba33"></em>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <!-- /module icon -->
                                    </div>
                                    </div>
                                    <div data-lazy="1" class="module_column sub_column col3-2 tb_0et6687 last">
                                    <div class="tb-column-inner tf_box tf_w">
                                        <!-- module icon -->
                                        <div class="module module-icon tb_mfr6687 normal circle icon_horizontal tf_textc" data-lazy="1">
                                            <div class="module-icon-item">
                                                <a href="">
                                                    <em class="fa-solid fa-arrow-right" style="color:#fff"></em>
                                                    <span>Lihat Detail</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /module icon -->
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /themify_builder_sub_row -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_x8d3408 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_2 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col4-2 tb_r42y408 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module image -->
                            <div class="module module-image tb_9pap729 image-center tf_mw wow" data-tf-animation="fadeInLeft" data-lazy="1">
                            <div class="image-wrap tf_rel tf_mw">
                                <img loading="lazy" decoding="async" src="{{ asset('storage/'. $company->image) }}" width="400" height="440" class="wp-post-image wp-image-307" title="{{ $company->name }}" alt="{{ $company->name }}" sizes="(max-width: 400px) 100vw, 400px" />
                            </div>
                            <!-- /image-wrap -->
                            </div>
                            <!-- /module image -->
                        </div>
                        </div>
                        <div data-lazy="1" class="module_column tb-column col4-2 tb_whcw234 last">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module icon -->
                            <div class="module module-icon tb_lzle937 normal circle icon_horizontal" data-lazy="1">
                            <div class="module-icon-item">
                                <em class="fa-solid fa-user" style="color: #2980b9;"></em>
                                <span>About Us</span>
                            </div>
                            </div>
                            <!-- /module icon -->
                            <!-- module text -->
                            <div class="module module-text tb_n07e507 wow" data-tf-animation="fadeInLeft" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: left"> {{ $company->name }} </p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module text -->
                            <div class="module module-text tb_qxgt268 wow" data-tf-animation="fadeInLeft" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: left">
                                <span style="font-weight: normal"></span>
                                </p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module text -->
                            <div class="module module-text tb_6bys532" data-lazy="1">
                            <div class="tb_text_wrap">
                                {!! $company->about !!}
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module icon -->
                            <div class="module module-icon tb_vc5l980 normal circle icon_horizontal tf_textc" data-lazy="1">
                            <div class="module-icon-item">
                                <a href="about-us/index.html">
                                <em class="fa-solid fa-arrow-right" style="color:#fff"></em>
                                <span>Read more</span>
                                </a>
                            </div>
                            </div>
                            <!-- /module icon -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_zqyo367 tf_w tf_clearfix">
                    <div class="builder_row_cover tf_abs"></div>
                    <div class="row_inner col_align_top tb_col_count_4 tf_box tf_rel">
                        @foreach ($services as $service)
                        <div data-lazy="1" class="module_column tb-column col4-1 tb_wwny368 first">
                            <div class="tb-column-inner tf_box tf_w">
                                <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_7wue368 tf_w tf_clearfix" data-tf-animation="fadeInUp">
                                <div class="subrow_inner col_align_top tb_col_count_1 tf_box tf_w">
                                    <div data-lazy="1" class="module_column sub_column col-full tb_kmsj368 first">
                                    <div class="tb-column-inner tf_box tf_w">
                                        <!-- module feature -->
                                        <div class="module module-feature tb_d7xu368 with-chart layout-icon-right size-custom" data-tf-animation="fadeInDown" data-layout-mobile="icon-right" data-layout-desktop="icon-right" data-lazy="1">
                                        <div class="module-feature-image tf_textc tf_rel">
                                            <span class="module-feature-chart-html5 tf_box tf_rel tf_inline_b" style="width: 70px; height: 70px">
                                            <svg class="tf_abs tf_w tf_h">
                                                <circle class="tb_feature_fill" r="calc(50% - 5.00px)" cx="50%" cy="50%" stroke-width="10" />
                                                <circle class="tb_feature_stroke" r="calc(50% - 5.00px)" cx="50%" cy="50%" stroke="#2980b9" stroke-width="10" data-progress="100" stroke-dasharray="0,10000" />
                                                <circle class="tb_feature_bg" r="calc(50% - 9px)" cx="50%" cy="50%" stroke-width="10" fill="#000000" />
                                            </svg>
                                            <span class="chart-html5-circle tf_w tf_h">
                                                <em class="{{ $service->icon }}" style="color: #2980b9;z-index:100"></em>
                                            </span>
                                            </span>
                                        </div>
                                        <div class="module-feature-content tf_textc">
                                            <div class="tb_text_wrap"></div>
                                        </div>
                                        </div>
                                        <!-- /module feature -->
                                        <!-- module text -->
                                        <div class="module module-text tb_dzpd368" data-lazy="1">
                                        <div class="tb_text_wrap">
                                            <p>{{ $service->title }}</p>
                                        </div>
                                        </div>
                                        <!-- /module text -->
                                        <!-- module divider -->
                                        <div class="module tf_mw module-divider tb_vfs1368 solid" style="
                                            border-width: 1px;
                                            border-color: #2980b9;
                                        " data-lazy="1"></div>
                                        <!-- /module divider -->
                                        <!-- module text -->
                                        <div class="module module-text tb_is1j368" data-lazy="1">
                                        <div class="tb_text_wrap">
                                            {!! $service->description !!}
                                        </div>
                                        </div>
                                        <!-- /module text -->
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /themify_builder_sub_row -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_7ksd733 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_1 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col-full tb_apii735 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module text -->
                            <div class="module module-text tb_6ll9209" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p> Kami bangga telah bekerjasama dengan berbagai perusahaan di seluruh Indonesia </p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_xvld649 tf_w tf_clearfix">
                            <div class="subrow_inner col_align_top tb_col_count_1 tf_box tf_w">
                                <div data-lazy="1" class="module_column sub_column col-full tb_r6nd651 first">
                                <div class="tb-column-inner tf_box tf_w">
                                    <div class="module themify_builder_slider_wrap tf_clearfix module-slider tb_aplk372 slider-default" data-lazy="1">
                                        <div class="themify_builder_slider tf_carousel tf_swiper-container tf_rel tf_overflow" data-lazy="1" data-tbreakpoints="1024" data-mbreakpoints="480" data-visible="5" data-tab-visible="3" data-mob-visible="2" data-scroll="1" data-auto="2000" data-controller="0" data-pause_hover="1" data-speed="1" data-wrapvar="1" data-slider_nav="1" data-pager="1" data-effect="scroll" data-height="variable" data-horizontal="0" data-css_url="{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/css/modules/sliders/carousel.css') }},{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/css/modules/sliders/slider.css') }}">
                                            <div class="tf_swiper-wrapper tf_lazy tf_rel tf_w tf_h tf_textc">
                                            <!-- module slider image -->
                                            @foreach ($clients as $client)
                                                <div class="tf_swiper-slide">
                                                    <div class="slide-inner-wrap">
                                                    <div class="tf_rel tf_lazy slide-image">
                                                        <img src="{{ asset('storage/' . $client->logo) }}" loading="lazy" data-lazy="1" decoding="async" width="398" height="169" data-tf-src="{{ asset('storage/' . $client->logo) }}" class="tf_svg_lazy wp-post-image wp-image-458" title="{{ $client->name }}" alt="{{ $client->name }}" data-tf-sizes="(max-width: 398px) 100vw, 398px" />
                                                    </div>
                                                    <!-- /slide-image -->
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- /themify_builder_sub_row -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_4r0g740 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_2 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col4-2 tb_36nr740 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <div class="module themify_builder_slider_wrap tf_clearfix module-slider tb_svly191 slider-default slide-image-fullwidth" data-lazy="1">
                            <div class="themify_builder_slider tf_carousel tf_swiper-container tf_rel tf_overflow" data-lazy="1" data-tbreakpoints="1024" data-mbreakpoints="480" data-visible="2" data-tab-visible="1" data-mob-visible="1" data-scroll="1" data-auto="2000" data-controller="0" data-pause_hover="1" data-speed="1" data-wrapvar="1" data-slider_nav="0" data-pager="1" data-effect="scroll" data-height="variable" data-horizontal="0" data-css_url="{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/css/modules/sliders/carousel.css') }},{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/css/modules/sliders/slider.css') }}">
                                <div class="tf_swiper-wrapper tf_lazy tf_rel tf_w tf_h tf_textc">
                                <!-- module slider image -->
                                @foreach ($marketings as $marketing)
                                    <div class="tf_swiper-slide">
                                        <div class="slide-inner-wrap" style="margin-left: 2px; margin-right: 2px">
                                        <div class="tf_rel tf_lazy slide-image">
                                            <img src="{{ asset('storage/' . $marketing->image) }}" loading="lazy" data-lazy="1" decoding="async" data-tf-src="{{ asset('storage/' . $marketing->image) }}" width="200" height="296" class="tf_svg_lazy wp-post-image wp-image-597" title="{{ $marketing->name }}" alt="{{ $marketing->name }}" data-tf-sizes="(max-width: 200px) 100vw, 200px" style="height:600px" />
                                        </div>
                                        <!-- /slide-image -->
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div data-lazy="1" class="module_column tb-column col4-2 tb_bsy8825 last">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module text -->
                            <div class="module module-text tb_fmyd590" data-lazy="1">
                            <div class="tb_text_wrap">
                                <h2> Tertarik tapi bingung harus mulai dari mana? </h2>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module text -->
                            <div class="module module-text tb_bsym778" data-lazy="1">
                            <div class="tb_text_wrap">
                                <h3> Yuk, Langsung Gabung dengan program pelatihan dari Tarapersada Mandiri Sejahtera dan kami akan membantu Anda memulai dengan langkah yang tepat. </h3>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module text -->
                            <div class="module module-text tb_oq2z96" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p> Temukan segala hal yang perlu anda ketahui dengan mengikuti pelatihan bersama PT. Tarapersada Mandiri Sejahtera </p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <!-- module icon -->
                            <div class="module module-icon tb_5auf583 normal circle icon_horizontal tf_textc" data-lazy="1">
                            <div class="module-icon-item">
                                <a href="https://api.whatsapp.com/send?phone=6281222818226">
                                <em class="tf_box" style="color: #f8f8f8">
                                    <svg class="tf_fa tf-fab-whatsapp" aria-hidden="true">
                                    <use href="#tf-fab-whatsapp"></use>
                                    </svg>
                                </em>
                                <span>Daftar Sekarang</span>
                                </a>
                            </div>
                            </div>
                            <!-- /module icon -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_y6ja4 tf_w tf_clearfix">
                    <div class="row_inner col_align_top gutter-none tb_col_count_3 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col4-1 tb_6r394 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_p6o34 hide-mobile tf_w tf_clearfix">
                            <div class="subrow_inner col_align_top tb_col_count_1 tf_box tf_w">
                                <div data-lazy="1" class="module_column sub_column col-full tb_tzb04 first">
                                <div class="tb-column-inner tf_box tf_w">
                                    <!-- module divider -->
                                    <div class="module tf_mw module-divider tb_ujad4 solid divider-custom divider-center wow" data-tf-animation="fadeInLeft" style="
                                        border-width: 2px;
                                        border-color: #ffffff;
                                        width: 90px;
                                    " data-lazy="1"></div>
                                    <!-- /module divider -->
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- /themify_builder_sub_row -->
                        </div>
                        </div>
                        <div data-lazy="1" class="module_column tb-column col4-3 tb_qa1p638">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module icon -->
                            <div class="module module-icon tb_d2p0638 normal circle icon_horizontal tf_textl wow" data-tf-animation="fadeInRight" data-lazy="1">
                            <div class="module-icon-item">
                                <em class="fa-solid fa-bookmark" style="color: #2980b9"></em>
                                <span>Artikel</span>
                            </div>
                            </div>
                            <!-- /module icon -->
                            <!-- module plain text -->
                            <div class="module module-plain-text tb_xln1638 wow" data-tf-animation="fadeInRight" data-lazy="1">
                            <div class="tb_text_wrap"> Kunjungi terus website kami untuk mendapatkan informasi seputar layanan atau program terbaru&nbsp;dari Tarapersada Mandiri Sejahtera <br />
                            </div>
                            </div>
                            <!-- /module plain text -->
                        </div>
                        </div>
                        <div data-lazy="1" class="module_column tb-column col4-1 tb_9qe6430 last"></div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                    <!-- module_row -->
                    <div data-lazy="1" class="module_row themify_builder_row tb_ip68122 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_1 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col-full tb_rj7a122 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module post -->
                            <div class="module module-post tb_3eq012 wow" data-tf-animation="fadeInUp">
                            <div class="builder-posts-wrap loops-wrapper grid3 masonry boxed tf_rel tf_clear tf_clearfix" data-lazy="1">
                                @foreach ($articles as $article)
                                    <article id="post-207" class="post tf_clearfix post-207 type-post status-publish format-standard has-post-thumbnail hentry category-artikel has-post-title has-post-date no-post-category no-post-tag no-post-comment no-post-author">
                                        <figure class="post-image tf_clearfix">
                                            <a href="">
                                                <img src="{{ asset('storage/' . $article->thumbnail) }}" loading="lazy" data-lazy="1" decoding="async" width="1161" height="561" data-tf-src="{{ asset('storage/' . $article->thumbnail) }}" class="tf_svg_lazy wp-post-image wp-image-201" title="{{ $article->slug }}" alt="{{ $article->slug }}" data-tf-sizes="(max-width: 1161px) 100vw, 1161px" />
                                            </a>
                                        </figure>
                                        <div class="post-content">
                                            <div class="post-content-inner">
                                            <div class="post-date-wrap post-date-inline">
                                                <time class="post-date entry-date updated" datetime="{{ $article->created_at->format('Y-m-d') }}">
                                                <span class="year">{{ $article->created_at->format('Y-m-d') }}</span>
                                                </time>
                                            </div>
                                            <!-- .post-date-wrap -->
                                            <h2 class="post-title entry-title">
                                                <a href="">{{ $article->title }}</a>
                                            </h2>
                                            <p class="post-meta entry-meta"></p>
                                            <!-- /post-meta -->
                                            <div class="entry-content">
                                                <p> {{ Str::limit(strip_tags($article->description), 75) }} [&hellip;] </p>
                                                <p>
                                                <a href="" class="more-link"><em class="fa-solid fa-arrow-right" style="color:#fff"></em> Read More</a>
                                                </p>
                                            </div>
                                            <!-- /.entry-content -->
                                            </div>
                                            <!-- /.post-content-inner -->
                                        </div>
                                    </article>
                                @endforeach
                                
                            </div>
                            <!-- .builder-posts-wrap -->
                            </div>
                            <!-- /module post -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                </div>
                <!--/themify_builder_content-->
                <!-- /comments -->
            </div>
            <!-- /.post-content -->
        </div>
    <!-- /.type-page -->
    </main>
    <!-- /content -->
</div>
<!-- /layout-container -->
@endsection
