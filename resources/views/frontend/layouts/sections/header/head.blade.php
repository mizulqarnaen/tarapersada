<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<style id="tb_inline_styles" data-no-optimize="1">
  .tb_animation_on {
    overflow-x: hidden;
  }

  .themify_builder .wow {
    visibility: hidden;
    animation-fill-mode: both;
  }

  [data-tf-animation] {
    will-change: transform, opacity, visibility;
  }

  .themify_builder .tf_lax_done {
    transition-duration: 0.8s;
    transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  [data-sticky-active].tb_sticky_scroll_active {
    z-index: 1;
  }

  [data-sticky-active].tb_sticky_scroll_active .hide-on-stick {
    display: none;
  }

  @media (min-width: 1025px) {
    .hide-desktop {
      width: 0 !important;
      height: 0 !important;
      padding: 0 !important;
      visibility: hidden !important;
      margin: 0 !important;
      display: table-column !important;
      background: 0 !important;
    }
  }

  @media (min-width: 769px) and (max-width: 1024px) {
    .hide-tablet_landscape {
      width: 0 !important;
      height: 0 !important;
      padding: 0 !important;
      visibility: hidden !important;
      margin: 0 !important;
      display: table-column !important;
      background: 0 !important;
    }
  }

  @media (min-width: 481px) and (max-width: 768px) {
    .hide-tablet {
      width: 0 !important;
      height: 0 !important;
      padding: 0 !important;
      visibility: hidden !important;
      margin: 0 !important;
      display: table-column !important;
      background: 0 !important;
    }
  }

  @media (max-width: 480px) {
    .hide-mobile {
      width: 0 !important;
      height: 0 !important;
      padding: 0 !important;
      visibility: hidden !important;
      margin: 0 !important;
      display: table-column !important;
      background: 0 !important;
    }
  }

  @media (max-width: 480px) {
    .themify_map.tf_map_loaded {
      width: 100% !important;
    }

    .ui.builder_button,
    .ui.nav li a {
      padding: 0.525em 1.15em;
    }

    .fullheight>.row_inner:not(.tb_col_count_1) {
      min-height: 0;
    }
  }

  .floatwa {
    position: fixed;
    bottom: 40px;
    left: 15px;
    z-index: 1000;
    margin: auto;
    float: none;
    }

    .tombolwa {
        margin-top: 10px;
        background-color: #25D366; /* WhatsApp green */
        color: white;
        padding: 12px 20px;
        border-radius: 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .tombolwa a {
        color: white;
        text-decoration: none;
        display: inline-block;
        width: 100%;
    }

    .tombolwa:hover {
        background-color: #128C7E; /* Darker green */
        transform: scale(1.05);
    }

    .floatwa a {
    color: white;
    }

    .tombolcal {
    text-align: center;
    float: none;
    }

    .floatcal a {
    color: white;
    }
</style>
<noscript>
  <style>
    .themify_builder .wow,
    .wow .tf_lazy {
      visibility: visible !important;
    }
  </style>
</noscript>
<style id="tf_lazy_style" data-no-optimize="1">
  [data-tf-src] {
    opacity: 0;
  }

  .tf_svg_lazy {
    content-visibility: auto;
    transition: filter 0.3s linear !important;
    filter: blur(25px);
    opacity: 1;
    transform: translateZ(0);
  }

  .tf_svg_lazy_loaded {
    filter: blur(0);
  }

  .module[data-lazy],
  .module[data-lazy] .ui,
  .module_row[data-lazy]:not(.tb_first),
  .module_row[data-lazy]:not(.tb_first)>.row_inner,
  .module_row:not(.tb_first) .module_column[data-lazy],
  .module_row:not(.tb_first) .module_subrow[data-lazy],
  .module_subrow[data-lazy]>.subrow_inner {
    background-image: none !important;
  }
</style>
<noscript>
  <style>
    [data-tf-src] {
      display: none !important;
    }

    .tf_svg_lazy {
      filter: none !important;
      opacity: 1 !important;
    }
  </style>
</noscript>
<style id="tf_lazy_common" data-no-optimize="1">
  img {
    max-width: 100%;
    height: auto;
  }

  .tf_fa {
    display: inline-block;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    overflow: visible;
    fill: currentColor;
    pointer-events: none;
    vertical-align: middle;
    text-rendering: optimizeSpeed;
    buffered-rendering: static;
  }

  #tf_svg symbol {
    overflow: visible;
  }

  .tf_lazy {
    position: relative;
    visibility: visible;
    display: block;
    opacity: 0.3;
  }

  .wow .tf_lazy {
    visibility: hidden;
    opacity: 1;
    position: static;
    display: inline;
  }

  div.tf_audio_lazy audio {
    visibility: hidden;
    height: 0;
    display: inline;
  }

  .mejs-container {
    visibility: visible;
  }

  .tf_iframe_lazy {
    transition: opacity 0.3s ease-in-out;
    min-height: 10px;
  }

  .tf_carousel .tf_swiper-wrapper {
    display: flex;
  }

  .tf_carousel .tf_swiper-slide {
    flex-shrink: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
  }

  .tf_carousel .tf_lazy {
    contain: none;
  }

  .tf_swiper-wrapper>br,
  .tf_lazy.tf_swiper-wrapper .tf_lazy:after,
  .tf_lazy.tf_swiper-wrapper .tf_lazy:before {
    display: none;
  }

  .tf_lazy:after,
  .tf_lazy:before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 10px !important;
    height: 10px !important;
    margin: 0 3px;
    top: 50% !important;
    right: 50% !important;
    left: auto !important;
    border-radius: 100%;
    background-color: currentColor;
    visibility: visible;
    animation: tf-hrz-loader infinite 0.75s cubic-bezier(0.2, 0.68, 0.18, 1.08);
  }

  .tf_lazy:after {
    width: 6px !important;
    height: 6px !important;
    right: auto !important;
    left: 50% !important;
    margin-top: 3px;
    animation-delay: -0.4s;
  }

  @keyframes tf-hrz-loader {
    0% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(0.1);
      opacity: 0.6;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  .tf_lazy_lightbox {
    position: fixed;
    background: rgba(11, 11, 11, 0.8);
    color: #ccc;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
  }

  .tf_lazy_lightbox .tf_lazy:after,
  .tf_lazy_lightbox .tf_lazy:before {
    background: #fff;
  }

  .tf_vd_lazy {
    display: flex;
    flex-wrap: wrap;
  }

  .tf_w.tf_vd_lazy video {
    width: 100%;
    height: auto;
    position: static;
    object-fit: cover;
  }
</style>
<link type="image/png" href="wp-content/uploads/2024/03/BA-Favicon.png" rel="apple-touch-icon" />
<link type="image/png" href="wp-content/uploads/2024/03/BA-Favicon.png" rel="icon" />
<meta name="robots" content="max-image-preview:large" />
<style>
  img:is([sizes="auto"i], [sizes^="auto,"i]) {
    contain-intrinsic-size: 3000px 1500px;
  }
</style>
<link rel="alternate" type="application/rss+xml" title="Baraya Academy &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Baraya Academy &raquo; Umpan Komentar" href="comments/feed/index.html" />
<style id="classic-theme-styles-inline-css">
  /*! This file is auto-generated */
  .wp-block-button__link {
    color: #fff;
    background-color: #32373c;
    border-radius: 9999px;
    box-shadow: none;
    text-decoration: none;
    padding: calc(0.667em + 2px) calc(1.333em + 2px);
    font-size: 1.125em;
  }

  .wp-block-file__button {
    background: #32373c;
    color: #fff;
    text-decoration: none;
  }
</style>
<style id="global-styles-inline-css">
  :root {
    --wp--preset--aspect-ratio--square: 1;
    --wp--preset--aspect-ratio--4-3: 4/3;
    --wp--preset--aspect-ratio--3-4: 3/4;
    --wp--preset--aspect-ratio--3-2: 3/2;
    --wp--preset--aspect-ratio--2-3: 2/3;
    --wp--preset--aspect-ratio--16-9: 16/9;
    --wp--preset--aspect-ratio--9-16: 9/16;
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
        rgba(6, 147, 227, 1) 0%,
        rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
        rgb(122, 220, 180) 0%,
        rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
        rgba(252, 185, 0, 1) 0%,
        rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
        rgba(255, 105, 0, 1) 0%,
        rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
        rgb(238, 238, 238) 0%,
        rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
        rgb(74, 234, 220) 0%,
        rgb(151, 120, 209) 20%,
        rgb(207, 42, 186) 40%,
        rgb(238, 44, 130) 60%,
        rgb(251, 105, 98) 80%,
        rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
        rgb(255, 206, 236) 0%,
        rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
        rgb(254, 205, 165) 0%,
        rgb(254, 45, 45) 50%,
        rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
        rgb(255, 203, 112) 0%,
        rgb(199, 81, 192) 50%,
        rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
        rgb(255, 245, 203) 0%,
        rgb(182, 227, 212) 50%,
        rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg,
        rgb(202, 248, 128) 0%,
        rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg,
        rgb(2, 3, 129) 0%,
        rgb(40, 116, 252) 100%);
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
    --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
    --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
      6px 6px rgba(0, 0, 0, 1);
    --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
  }

  :where(.is-layout-flex) {
    gap: 0.5em;
  }

  :where(.is-layout-grid) {
    gap: 0.5em;
  }

  body .is-layout-flex {
    display: flex;
  }

  .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
  }

  .is-layout-flex> :is(*, div) {
    margin: 0;
  }

  body .is-layout-grid {
    display: grid;
  }

  .is-layout-grid> :is(*, div) {
    margin: 0;
  }

  :where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
  }

  :where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
  }

  :where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
  }

  :where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
  }

  .has-black-color {
    color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-color {
    color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
  }

  .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
  }

  .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
  }

  .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
  }

  .has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
  }

  .has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
  }

  .has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
  }

  .has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
  }

  .has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
  }

  .has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
  }

  .has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
  }

  .has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
  }

  .has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
  }

  .has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
  }

  .has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
  }

  :where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
  }

  :where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
  }

  :where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
  }

  :where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
  }

  :root :where(.wp-block-pullquote) {
    font-size: 1.5em;
    line-height: 1.6;
  }
</style>
<link rel="preload" href="{{ asset('assets/vendor/libs/contact-form-7/css/styles.css') }}" as="style" />
<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('assets/vendor/libs/contact-form-7/css/styles.css') }}" media="all" />
<link rel="preload" href="{{ asset('assets/vendor/libs/revslider/css/settings.css') }}" as="style" />
<link rel="stylesheet" id="rs-plugin-settings-css" href="{{ asset('assets/vendor/libs/revslider/css/settings.css') }}" media="all" />
<style id="rs-plugin-settings-inline-css">
  #rs-demo-id {}
</style>
<script src="{{ asset('assets/js/jquery.min.js') }}" id="jquery-core-js"></script>
<script src="{{ asset('assets/vendor/libs/revslider/js/jquery.themepunch.tools.min.js') }}" id="tp-tools-js"></script>
<script src="{{ asset('assets/vendor/libs/revslider/js/jquery.themepunch.revolution.min.js') }}" id="revmin-js"></script>
<link rel="https://api.w.org/" href="wp-json/index.html" />
<link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/235.json" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<meta name="generator" content="WordPress 6.8.2" />
<link rel="canonical" href="index.html" />
<link rel="shortlink" href="index.html" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed1b60.json?url=https%3A%2F%2Fwww.barayaacademy.com%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed59a6?url=https%3A%2F%2Fwww.barayaacademy.com%2F&amp;format=xml" />
<style>
  @keyframes themifyAnimatedBG {
    0% {
      background-color: #33baab;
    }

    100% {
      background-color: #e33b9e;
    }

    50% {
      background-color: #4961d7;
    }

    33.3% {
      background-color: #2ea85c;
    }

    25% {
      background-color: #2bb8ed;
    }

    20% {
      background-color: #dd5135;
    }
  }

  .module_row.animated-bg {
    animation: themifyAnimatedBG 30000ms infinite alternate;
  }
</style>
<!-- meta -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="PT. Bara Indo Berjaya, yang dikenal sebagai Baraya Academy, adalah pusat konsultan edukasi pertambangan minerba dan keselamatan kerja (K3) terkemuka di Indonesia. Dengan komitmen kami untuk memberikan layanan berkualitas, kami menyediakan berbagai pelatihan online, offline, dan inhouse untuk memenuhi kebutuhan pelanggan kami di sektor pertambangan. Hubungi kami di 081222818226 (Amanda) atau 081223368166 (Nadya)" />
<meta name="keywords" content="training, pelatihan, diklat, sertifikasi, sertifikat, BNSP, kemnaker RI, tambang, pertambangan, listrik, k3, safety, environment, POP, POM, Juru Ukur,  lingkungan, migas, ESDM, Trainer, scaffolding, Mobile Crane, Mechanic, Keselamatan Kerja, Pengawas tambang, HSE, HRD, Human Resource, konsultan, Investigasi insiden, coal, nickel, tambang nasional " />
<meta name="generator" content="Powered by Slider Revolution 5.4.8.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">
  function setREVStartSize(e) {
    try {
      e.c = jQuery(e.c);
      var i = jQuery(window).width(),
        t = 9999,
        r = 0,
        n = 0,
        l = 0,
        f = 0,
        s = 0,
        h = 0;
      if (
        (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
            f > i && ((t = r = f), (l = e)),
              i > f && f > r && ((r = f), (n = e));
          }), t > r && (l = n)),
          (f = e.gridheight[l] || e.gridheight[0] || e.gridheight),
          (s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth),
          (h = i / s),
          (h = h > 1 ? 1 : h),
          (f = Math.round(h * f)), "fullscreen" == e.sliderLayout)) {
        var u = (e.c.width(), jQuery(window).height());
        if (void 0 != e.fullScreenOffsetContainer) {
          var c = e.fullScreenOffsetContainer.split(",");
          if (c) jQuery.each(c, function(e, i) {
              u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u;
            }),
            e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? (u -= (jQuery(window).height() * parseInt(e.fullScreenOffset, 0)) / 100) : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0));
        }
        f = u;
      } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
      e.c.closest(".rev_slider_wrapper").css({
        height: f
      });
    } catch (d) {
      console.log("Failure at Presize of Slider:" + d);
    }
  }
</script>
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/js/themify.script.min.js') }}" as="script" fetchpriority="low" />
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/themify/js/modules/themify.sidemenu.min.js') }}" as="script" fetchpriority="low" />
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/themify/css/animate.min.css') }}" as="style" />
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/themify/js/modules/tf_wow.min.js') }}" as="script" fetchpriority="low" />
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/themify/js/modules/isotop.min.js') }}" as="script" fetchpriority="low" />
<link rel="prefetch" href="{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/js/modules/feature.min.js') }}" as="script" fetchpriority="low" />
<link rel="preload" href="{{ asset('assets/vendor/libs/themify-ultra/themify/themify-builder/js/themify.builder.script.min.js') }}" as="script" fetchpriority="low" />
<link rel="preload" href="{{ asset('assets/img/frontend/whatsapp-admin-1.png') }}" as="image" fetchpriority="high" />
<style id="tf_gf_fonts_style">
  @font-face {
    font-family: "Exo";
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/exo/v21/4UaZrEtFpBI4f1ZSIK9d4LjJ4mE3OwtmO24p.woff2) format("woff2");
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
      U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
      U+0323, U+0329, U+1EA0-1EF9, U+20AB;
  }

  @font-face {
    font-family: "Exo";
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/exo/v21/4UaZrEtFpBI4f1ZSIK9d4LjJ4mE3OwpmO24p.woff2) format("woff2");
    unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7,
      U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F,
      U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
      U+A720-A7FF;
  }

  @font-face {
    font-family: "Exo";
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/exo/v21/4UaZrEtFpBI4f1ZSIK9d4LjJ4mE3OwRmOw.woff2) format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
      U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
      U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: "Poppins";
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format("woff2");
    unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7,
      U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F,
      U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
      U+A720-A7FF;
  }

  @font-face {
    font-family: "Poppins";
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiEyp8kv8JHgFVrJJfecg.woff2) format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
      U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
      U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format("woff2");
    unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7,
      U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F,
      U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
      U+A720-A7FF;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 500;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
      U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
      U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 600;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format("woff2");
    unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7,
      U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F,
      U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
      U+A720-A7FF;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 600;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
      U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
      U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format("woff2");
    unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7,
      U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F,
      U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
      U+A720-A7FF;
  }

  @font-face {
    font-family: "Poppins";
    font-weight: 700;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v22/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format("woff2");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
      U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122,
      U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
</style>
<link rel="preload" fetchpriority="high" href="{{ asset('assets/css/themify/themify.min.css') }}" as="style" />
<link fetchpriority="high" id="themify_concate-css" rel="stylesheet" href="{{ asset('assets/css/themify/themify.min.css') }}" />

@if (Route::current()->getName() == 'about-us')
  <link rel="preload" fetchpriority="high" href="{{ asset('assets/css/themify/themify-834399603.min.css') }}" as="style" />
  <link fetchpriority="high" id="themify_concate-css" rel="stylesheet" href="{{ asset('assets/css/themify/themify-834399603.min.css') }}" />
@endif
<script src="https://kit.fontawesome.com/4670674644.js" crossorigin="anonymous"></script>