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
                    <div data-lazy="1" class="module_row themify_builder_row tb_x8d3408 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_2 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col4-2 tb_jfw7270 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module image -->
                            <div class="module module-image tb_wbt5270 image-center auto_fullwidth tf_mw wow" data-tf-animation="fadeInLeft" data-lazy="1">
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
                    <div data-lazy="1" class="module_row themify_builder_row tb_x8d3408 tf_w tf_clearfix">
                    <div class="row_inner col_align_top tb_col_count_1 tf_box tf_rel">
                        <div data-lazy="1" class="module_column tb-column col-full tb_8x9n937 first">
                        <div class="tb-column-inner tf_box tf_w">
                            <!-- module text -->
                            <div class="module module-text tb_kd2i683 wow" data-tf-animation="fadeInLeft" data-lazy="1">
                            <div class="tb_text_wrap">
                                <p style="text-align: left;font-weight:bold;font-size:25px"> Legalitas </p>
                            </div>
                            </div>
                            <!-- /module text -->
                            <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_tucb953 tf_w tf_clearfix">
                            <div class="subrow_inner col_align_top tb_col_count_2 tf_box tf_w">
                                @foreach ($legalities as $legality)
                                <div data-lazy="1" class="module_column sub_column col4-2 tb_tyfp954 first">
                                    <div class="tb-column-inner tf_box tf_w">
                                        
                                        <!-- module image -->
                                        <div class="module module-image tb_x6ao812 rounded drop-shadow bordered image-center auto_fullwidth tf_mw" data-lazy="1">
                                        <div class="image-wrap tf_rel tf_mw">
                                            <img loading="lazy" decoding="async" width="382" height="567" src="{{ asset('storage/' . $legality->image) }}"
                                            class="wp-post-image wp-image-485" title="{{ $legality->name }}" alt="{{ $legality->name }}" sizes="(max-width: 382px) 100vw, 382px" />
                                        </div>
                                        <!-- /image-wrap -->
                                        </div>
                                        <!-- /module image -->
                                        
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            </div>
                            <!-- /themify_builder_sub_row -->
                        </div>
                        </div>
                    </div>
                    <!-- /row_inner -->
                    </div>
                    <!-- /module_row -->
                </div>
            </div>
        </div>
    </main>
</div>

@endsection