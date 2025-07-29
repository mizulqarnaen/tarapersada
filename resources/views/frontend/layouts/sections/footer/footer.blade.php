<div id="footerwrap" class="tf_box tf_clear">
        <footer id="footer" class="tf_box pagewidth tf_scrollbar tf_rel tf_clearfix" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
          <div class="main-col first tf_clearfix">
            <div class="footer-left-wrap first"></div>
            <div class="footer-right-wrap">
              <div class="footer-nav-wrap"></div>
              <!-- /.footer-nav-wrap -->
              <div class="footer-text tf_clear tf_clearfix">
                <div class="footer-text-inner"></div>
              </div>
              <!-- /.footer-text -->
            </div>
          </div>
          <div class="section-col tf_clearfix">
            <div class="footer-widgets-wrap">
              <!-- /footer-widgets -->
            </div>
          </div>
          <!-- hook content: themify_footer_end -->
          <div class="tb_layout_part_wrap tf_w">
            <!--themify_builder_content-->
            <div class="themify_builder_content themify_builder_content-251 themify_builder not_editable_builder" data-postid="251">
              <!-- module_row -->
              <div data-lazy="1" class="module_row themify_builder_row tb_21nq209 tf_w tf_clearfix">
                <div class="row_inner col_align_top tb_col_count_1 tf_box tf_rel">
                  <div data-lazy="1" class="module_column tb-column col-full tb_nb9e209 first">
                    <div class="tb-column-inner tf_box tf_w">
                      <!-- /themify_builder_sub_row -->
                      <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_v8dw214 tf_w tf_clearfix">
                        <div class="subrow_inner col_align_top tb_col_count_4 tf_box tf_w">
                          <div data-lazy="1" class="module_column sub_column col4-1 tb_gu33215 first">
                            <div class="tb-column-inner tf_box tf_w">
                              <!-- module text -->
                              <div class="module module-text tb_pcl5216 repeat" data-lazy="1">
                                <div class="tb_text_wrap">
                                  <p>
                                    <span style="font-weight: bold">About Us <br />
                                    </span>
                                  </p>
                                </div>
                              </div>
                              <!-- /module text -->
                              <!-- module divider -->
                              <div class="module tf_mw module-divider tb_t8lx217 solid divider-custom divider-left" style="
                                  border-width: 4px;
                                  border-color: #ee4622;
                                  margin-bottom: 20px;
                                  width: 30px;
                                " data-lazy="1"></div>
                              <!-- /module divider -->
                              <!-- module text -->
                              <div class="module module-text tb_n2nb219" data-lazy="1">
                                <div class="tb_text_wrap">PT. Tarapersada Mandiri Sejahtera adalah lembaga pelatihan kerja dan konsultan tambang yang berfokus pada pengembangan sumber daya manusia dan peningkatan daya saing perusahaan. Kami menyediakan berbagai program pelatihan berbasis kompetensi serta layanan konsultasi profesional untuk membantu individu dan Perusahaan mencapai keunggulan dalam dunia kerja dan bisnis. </div>
                              </div>
                              <!-- /module text -->
                            </div>
                          </div>
                          <div data-lazy="1" class="module_column sub_column col4-1 tb_mkx2221">
                            <div class="tb-column-inner tf_box tf_w">
                              <!-- module text -->
                              <div class="module module-text tb_dd9s221 repeat" data-lazy="1">
                                <div class="tb_text_wrap">
                                  <p>
                                    <span style="font-weight: bold">Contact &amp; Address <br />
                                    </span>
                                  </p>
                                </div>
                              </div>
                              <!-- /module text -->
                              <!-- module divider -->
                              <div class="module tf_mw module-divider tb_qyrb222 solid divider-custom divider-left" style="
                                  border-width: 4px;
                                  border-color: #ee4622;
                                  margin-bottom: 20px;
                                  width: 30px;
                                " data-lazy="1"></div>
                              <!-- /module divider -->
                              <!-- module icon -->
                              <div class="module module-icon tb_b2iq223 normal circle icon_vertical" data-lazy="1">
                                @foreach ($whatsapps as $whatsapp )
                                <div class="module-icon-item" style="margin-bottom:12px">
                                  <a href="{{ $whatsapp->link }}" rel="noopener" target="_blank">
                                    <i class="fa-brands fa-whatsapp" style="color: #2980b9;font-size:2em"></i> &nbsp;
                                    <span>{{ $whatsapp->name }}: {{ $whatsapp->value }}</span>
                                  </a>
                                </div>
                                @endforeach
                                
                                <div class="module-icon-item">
                                  <a href="" rel="noopener" target="_blank">
                                    <i class="fa-solid fa-location-dot" style="color: #2980b9;font-size:2em"></i> &nbsp;
                                    <span>{{ $company->address }}</span>
                                  </a>
                                </div>
                              </div>
                              <!-- /module icon -->
                            </div>
                          </div>
                          <div data-lazy="1" class="module_column sub_column col4-1 tb_skl0223">
                            <div class="tb-column-inner tf_box tf_w">
                              <!-- module text -->
                              <div class="module module-text tb_odt6223 repeat" data-lazy="1">
                                <div class="tb_text_wrap">
                                  <p>
                                    <span style="font-weight: bold">Sosial Media <br />
                                    </span>
                                  </p>
                                </div>
                              </div>
                              <!-- /module text -->
                              <!-- module divider -->
                              <div class="module tf_mw module-divider tb_zk5o224 solid divider-custom divider-left" style="
                                  border-width: 4px;
                                  border-color: #ee4622;
                                  margin-bottom: 20px;
                                  width: 30px;
                                " data-lazy="1"></div>
                              <!-- /module divider -->
                              <!-- module icon -->
                              @foreach ($socialLinks as $socialLink )
                                <div class="module module-icon tb_j7uu225 normal circle icon_vertical" data-lazy="1" style="margin-bottom:12px">
                                    <div class="module-icon-item">
                                    <a href="{{ $socialLink->link }}" rel="noopener" target="_blank">
                                        <i class="fa-brands fa-{{ $socialLink->type }}" style="color: #2980b9;font-size:2em"></i> &nbsp;
                                        <span>{{ $socialLink->value }}</span>
                                    </a>
                                    </div>
                                </div>
                              @endforeach
                              <!-- /module icon -->
                            </div>
                          </div>
                          <div data-lazy="1" class="module_column sub_column col4-1 tb_d7kj226 last">
                            <div class="tb-column-inner tf_box tf_w">
                              <!-- module text -->
                              <div class="module module-text tb_6pnw226 repeat" data-lazy="1">
                                <div class="tb_text_wrap">
                                  <p>
                                    <span style="font-weight: bold">Artikel</span>
                                  </p>
                                </div>
                              </div>
                              <!-- /module text -->
                              <!-- module divider -->
                              <div class="module tf_mw module-divider tb_lwkc227 solid divider-custom divider-left" style="
                                  border-width: 4px;
                                  border-color: #ee4622;
                                  margin-bottom: 20px;
                                  width: 30px;
                                " data-lazy="1"></div>
                              <!-- /module divider -->
                              <!-- module widget -->
                              <div class="module module-widget tb_yi7y228" data-lazy="1">
                                <div class="widget feature-posts">
                                  <ul class="feature-posts-list">
                                    @foreach ($articles as $article)
                                        <li>
                                            <a href="" class="feature-posts-title">{{ $article->title }}</a>
                                            <br />
                                        </li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                              <!-- /module widget -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /themify_builder_sub_row -->
                      <div data-lazy="1" class="module_subrow themify_builder_sub_row tb_wocg246 tf_w tf_clearfix">
                        <div class="subrow_inner col_align_top tb_col_count_1 tf_box tf_w">
                          <div data-lazy="1" class="module_column sub_column col-full tb_ulwx247 first">
                            <div class="tb-column-inner tf_box tf_w">
                              <!-- module plain text -->
                              <div class="module module-plain-text tb_qa5j247" data-lazy="1">
                                <div class="tb_text_wrap"> © 2025&nbsp; {{ $company->name }}. All Rights Reserved</a>
                                </div>
                              </div>
                              <!-- /module plain text -->
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
            </div>
            <!--/themify_builder_content-->
          </div>
          <!-- /hook content: themify_footer_end -->
        </footer>
        <!-- /#footer -->
      </div>