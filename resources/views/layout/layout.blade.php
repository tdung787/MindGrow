<!DOCTYPE html>
<html lang="vi" data-theme="light">

<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
    <meta name="revisit-after" content="1 day">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>
        MindGrow
    </title>
    <meta name="description" content="htx đa ngành nghề Trường Thuận">
    <meta name="keywords" content="htx đa ngành nghề Trường Thuận">
    <meta name="robots" content="index,follow,noodp">
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <meta name="theme-color" content="#fff">
    <meta name="msapplication-navbutton-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">

    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    <meta name="csrf-token" content="gdqJgys6NcFWjgibiAxNUC1BO4u0QXTs8XXjX3iU">
    <!-- ================= Meta ================== -->
    <meta name="keywords" content=", ">
    <meta name="robots" content="noodp,index,follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="HTX">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/logo.png') }}">
    <meta property="og:description" content="htx đa ngành nghề Trường Thuận">
    <meta property="og:url" content="https://htxtruongthuan.com">
    <meta property="og:site_name" content="htx đa ngành nghề Trường Thuận">

    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/bootstrap/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/bootstrap/bootstrap.min.css">

    <style>
        :root {
            --menuWidth: calc(100% - 20px);
            --leftColBackground: #fff;
            --lightLeftColBackground: #F5F7FD;
            /*+5%*/
            --darkLeftColBackground: #22272b;
            /*-5%*/
            /* --mainColor: #2e9f3c;
            --mainColor2: #5ea700; */
            --mainColor: #015c62;
            --mainColor2: #008470;
            --menuHover: #ffc107;
            --accentColor1: #929292;
            --accentColor2: #d80000;
            /*Màu giá*/
            --textColor: #424242;
            --toastSuccessBg: #d1e7dd;
            --toastSuccessCl: #0f5132;
            --toastWarningBg: #fff3cd;
            --toastWarningCl: #664d03;
            --toastErrorBg: #f8d7da;
            --toastErrorCl: #842029;
            --toastSystemBg: #d3d3d4;
            --toastSystemCl: #141619;
        }

        /* vietnamese */

        @font-face {
            font-family: 'Coiny';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/coiny/v16/gyByhwU1K989PUwTGFWfOw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin */

        @font-face {
            font-family: 'Coiny';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/coiny/v16/gyByhwU1K989PUwcGFU.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/swiper-slider/swiper.scss.css"
        type="text/css">
    <link href="https://htxtruongthuan.com/website/css/swiper-slider/swiper.scss.css" rel="stylesheet">

    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/style_gb.scss.css" type="text/css">
    <link href="https://htxtruongthuan.com/website/css/style_gb.scss.css" rel="stylesheet">
    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/meo_style_gb.scss.css"
        type="text/css">
    <link href="https://htxtruongthuan.com/website/css/meo_style_gb.scss.css" rel="stylesheet">

    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/style_index.css" type="text/css">
    <link href="https://htxtruongthuan.com/website/css/style_index.css" rel="stylesheet" type="text/css" media="all">
    <link rel="preload" as="style" href="https://htxtruongthuan.com/website/css/lookbook/lookbook.scss.css"
        type="text/css">
    <link href="https://htxtruongthuan.com/website/css/lookbook/lookbook.scss.css" rel="stylesheet" type="text/css"
        media="all">


    <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/swatch_style.scss.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/swatch_style.scss.css">
    </noscript>

    <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/mew_noti.scss.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/mew_noti.scss.css">
    </noscript>

    <link rel="stylesheet" href="https://htxtruongthuan.com/website/css/pagestyle.scss.css">

    <link href="https://htxtruongthuan.com/website/css/noindex.scss.css" rel="stylesheet" type="text/css"
        media="all">
    <link href="https://htxtruongthuan.com/website/css/collection_style.scss.css" rel="stylesheet" type="text/css"
        media="all">

    <link href="https://htxtruongthuan.com/website/css/product_style.scss.css" rel="stylesheet" type="text/css"
        media="all">


    <script src="https://htxtruongthuan.com/website/js/haravanutil.js" defer=""></script>
    <script src="https://htxtruongthuan.com/website/js/cash.min.js" defer=""></script>


    <script fetchpriority="low" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"
        integrity="sha512-BABFxitBmYt44N6n1NIJkGOsNaVaCs/GpaJwDktrfkWIBFnMD6p5l9m+Kc/4SLJSJ4mYf+cstX98NYrsG/M9ag==" defer=""
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script fetchpriority="low" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"
        defer=""></script>

</head>

<body id="body_m">
    <div class="page-body">
        <div class="hidden-md hidden-lg opacity_menu"></div>
        <div class="opacity_filter"></div>
        <div id="body_overlay" class="position-fixed d-none"></div>
        <div class="w-100 clearfix">


            <div class="menubar w-100 text-right d-flex d-lg-none position-fixed align-items-center scroll_down ">
                <a href="/" title="MindGrow" class="mr-auto ml-3">
                    <img alt="MindGrow"chat src="{{ asset('images/logo.png') }}" class="img-fluid mb_logo">
                </a>

                <a href="/account/login"
                    class="mb_login ml-auto d-flex rounded-circle justify-content-center align-items-center"
                    title="Đăng nhập">
                    <svg width="32" height="32">
                        <use href="#svg-account"></use>
                    </svg>
                </a>

            </div>
            <div class="bg_head position-fixed w-100 scroll_down "></div>
            <div class="col-left position-fixed d-flex flex-column pt-2 pb-2 pc w-100">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-2 d-none d-lg-block alight-content: center">
                            <a href="/" title="HTX" class="logo" style="display: flex">
                                <picture class="position-relative w-100 m-0 ratio1by4 d-block aspect">
                                    <img alt="HTX" src="images/logo.png"
                                        class="img-fluid d-block img position-absolute loaded">
                                </picture>
                                <p
                                    style="width: 400px;font-weight: 700;margin: 0;color: #ffbe1d; align-content: center;">
                                    MindGrow</p>
                            </a>
                        </div>
                        <div class="col-12 col-lg-10">
                            <div class="d-lg-flex align-items-center position-static pr-menu">
                                <div class="search-block mr-3">
                                    <form action="" method="get"
                                        class="js-search-form left-search position-relative mt-4 mt-lg-0 pt-2 pb-2 pt-lg-1 pb-lg-1">
                                        <input type="hidden" name="type" value="product">
                                        <input type="text" id="js-search-form"
                                            placeholder="Bạn muốn tìm thông tin gì?" value="" maxlength="70"
                                            name="q" class="form-control pl-2 pl-lg-3 pr-5 rounded-10"
                                            autocomplete="off" required="">
                                        <input type="submit" class="border-0 position-absolute p-0">
                                        <div class="w-100 position-absolute rounded-10 searchResult d-none modal-open">
                                            <div class="overflow-auto search-result-warpper px-2"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="info-block mr-3">
                                    <a href="tel:0984063567" title="0984063567" class="align-items-center d-flex">
                                        <span class="play0 d-none d-xl-block">
                                            <svg width="32" height="32">
                                                <use href="#svg-phone"></use>
                                            </svg>
                                        </span>
                                        <b><small>Hotline</small> <br>0984063567</b>
                                    </a>
                                </div>
                                <div class="navigation-bottom mt-auto mt-lg-0">
                                    <div class="b_use d-none d-lg-flex align-items-stretch">

                                        <div id="js-login-toggle"
                                            class="btn-account d-none d-lg-flex align-items-center justify-content-center mr-3">
                                            <a href=""
                                                title="Tài khoản">
                                                <svg width="26" height="26" class="mr-2 d-none d-xl-block">
                                                    <use href="#svg-account"></use>
                                                </svg>
                                            </a>

                                            <div id="m_login" class="pop_login">
                                                <!-- Hiển thị khi chưa đăng nhập -->
                                                <a href="" class="item_login d-block font-weight-bold small"
                                                    title="Đăng nhập">Đăng nhập</a>
                                                <a href="" class="item_login d-block font-weight-bold small"
                                                    title="Đăng ký">Đăng ký</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="navigation-block mr-lg-auto d-none d-lg-block">
                <div class="container">
                    <div class="position-relative main_fade">
                        <ul id="menu_pc" class="m-0 list-unstyled position-static d-lg-flex">
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="/" title="Trang chủ"
                                    class="font-weight-bold d-block py-1  pr-lg-3 pr-2 position-relative active">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a title="Giới thiệu"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Giới thiệu
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                                    style="min-width: max-content">
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="{{ url('sumenh') }}"
                                            class="py-1 py-lg-2 position-relative js-checkMenu" title="">
                                            Tầm nhìn, sứ mệnh
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="{{ url('chucnang') }}"
                                            class="py-1 py-lg-2 position-relative js-checkMenu" title="">
                                            Chức năng, nhiệm vụ
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="{{url('doi-ngu')}}" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Đội ngũ sáng lập
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a title="Sản phẩm"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Sản phẩm
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                                    style="min-width: max-content">
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="http://14.225.211.7:8502/"
                                            class="py-1 py-lg-2 position-relative js-checkMenu" title="">
                                            Gia sư MindGrow
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="http://14.225.211.7:8503/"
                                            class="py-1 py-lg-2 position-relative js-checkMenu" title="">
                                            Chăm sóc sức khỏe tinh thần MindGrow
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="/" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Dịch vụ tư vấn chuyên sâu
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="{{ url('phucvu') }}" title=""
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Phục vụ cộng đồng
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                                    style="min-width: max-content">
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Kĩ năng học tập thông minh
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Quản lý cảm xúc và giảm stress
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Đồng hành cùng con - Phụ huynh thông thái
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Đổi mới tư duy giáo dục cho giáo viên
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Hướng nghiệp và định hướng tương lai
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="{{ url('dichvu') }}" title=""
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
                                    Các gói dịch vụ
                                    <i
                                        class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
                                </a>
                                <i
                                    class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                                <ul class="lvdiv lv1 list-group p-0 list-unstyled rounded-10 py-lg-2"
                                    style="min-width: max-content">
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Tài khoản miễn phí
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Tài khoản dùng thử
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Tài khoản Pro
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Tài khoản nhóm
                                        </a>
                                    </li>
                                    <li class="no level1 pr-lg-2 pl-2 position-relative cls">
                                        <a href="" class="py-1 py-lg-2 position-relative js-checkMenu"
                                            title="">
                                            Tài khoản tập thể
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="{{url('tin-tuc')}}" title="Tin tức"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Tin tức
                                </a>
                            </li>
                            <li class="level0 cls pt-1 pt-lg-2 pb-lg-2 pb-1 not-mega">
                                <a href="{{url('lien-he')}}" title="Liên hệ"
                                    class="font-weight-bold d-block py-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
                                    Liên hệ
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-mobile position-fixed d-flex flex-column pt-lg-2 pb-lg-2 pt-0 pb-0 d-lg-none"
                id="col-left-mew">
                <div class="align-items-center menu_mobile position-relative h-100">
                    <ul id="menu-mew"
                        class="d-lg-flex justify-content-lg-center list-unstyled m-0 p-0 rounded-10 no_waring">
                        <div class="d-flex justify-content-center">
                            <li class="level0 d-block w-100 position-static">
                                <a href="/" title="Trang chủ"
                                    class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">

                                    <img class="d-block pb-2 m-auto" src="{{ asset('images/logo.png') }}"
                                        alt="Trang chủ">
                                    <span class="line_1 line_2">Trang chủ</span>
                                </a>
                            </li>
                        </div>
                        <li class="level0 d-block w-100 position-static open">
                            <a href="javascript:;" title="Sản phẩm"
                                class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">

                                <img class="d-block pb-2 m-auto" src="{{ asset('images/ai.png') }}" alt="Sản phẩm">
                                <span class="line_1 line_2">Sản phẩm</span>
                            </a>
                            <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                                <li class="level1 position-relative">
                                    <a href=""
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="MindGrow">
                                        MindGrow
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                        <li class="level2 position-relative">
                                            <a href="http://14.225.211.7:8502/"
                                                class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                                title="Gia sư MindGrow">
                                                Gia sư MindGrow
                                            </a>
                                        </li>
                                        <li class="level2 position-relative">
                                            <a href="http://14.225.211.7:8503/"
                                                class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                                title="Chăm sóc sức khỏe tinh thần MindGrow">
                                                Chăm sóc sức khỏe tinh thần MindGrow
                                            </a>
                                        </li>
                                        <li class="level2 position-relative">
                                            <a href=""
                                                class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                                title="Dịch vụ tư vấn chuyên sâu">
                                                Dịch vụ tư vấn chuyên sâu
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="level0 d-block w-100 position-static">
                            <a href="javascript:;" title="Giới thiệu"
                                class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">

                                <img class="d-block pb-2 m-auto"
                                    src="https://file.hstatic.net/200000830051/file/icon_menu_2_bd6c3beae9734bdb99d942d3addbfc6e.png"
                                    alt="Giới thiệu">
                                <span class="line_1 line_2">Giới thiệu</span>
                            </a>
                            <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                                <li class="level1 position-relative">
                                    <a href="{{ url('sumenh') }}"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Cùng Me vào bếp">
                                        Tầm nhìn, sứ mệnh
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="{{ url('chucnang') }}"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Cùng Me vào bếp">
                                        Chức năng, nhiệm vụ
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="{{url('doi-ngu')}}"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Cùng Me vào bếp">
                                        Đội ngũ sáng lập
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="level0 d-block w-100 position-static">
                            <a href="javascript:;" title="Tin tức"
                                class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">

                                <img class="d-block pb-2 m-auto"
                                    src="https://file.hstatic.net/200000830051/file/icon_menu_4_615f94ed5f3542cbb0da8637ffea4967.png"
                                    alt="Tin tức">
                                <span class="line_1 line_2">Tin tức</span>
                            </a>
                            <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
                                <li class="level1 main position-sticky bg-white">
                                    <a href="{{url('tin-tuc')}}"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main"
                                        title="Xem tất cả">
                                        Xem tất cả
                                    </a>
                                </li>
                                <li class="level1 position-relative">
                                    <a href="/"
                                        class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center"
                                        title="Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!">
                                        Nhóm MindGrow Xuất Sắc Đoạt Giải Nhất Khởi Nghiệp Cấp Trường Năm 2024!
                                    </a>
                                    <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="level0 d-block w-100 position-static">

                            <a href="{{url('lien-he')}}" title="Liên hệ"
                                class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">

                                <img class="d-block pb-2 m-auto"
                                    src="https://file.hstatic.net/200000830051/file/icon_menu_6_f0612043abcc442094295062e44d7bd2.png"
                                    alt="Liên hệ">
                                <span class="line_1 line_2">Liên hệ</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="align-items-center close_menu_mobile d-flex justify-content-center position-absolute d-lg-none"
                    href="javascript:;" title="Đóng">
                    <svg width="18" height="18">
                        <use href="#svg-close"></use>
                    </svg>
                </a>

            </div>


            @yield('content')


            <footer class="mt-5">
                <div class="line_slide w-100 bg-white">
                    <svg viewBox="0 0 1440 120">
                        <defs>
                            <linearGradient id="mew-footer-0" x1="0" x2="0" y1="1"
                                y2="0">
                                <stop stop-color="var(--mainColor)" offset="0%"></stop>
                                <stop stop-color="var(--mainColor2)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path style="transform:translate(0, 0px); opacity:1" fill="url(#mew-footer-0)"
                            d="M0,12L80,10C160,8,320,4,480,10C640,16,800,32,960,44C1120,56,1280,64,1440,56C1600,48,1760,24,1920,20C2080,16,2240,32,2400,42C2560,52,2720,56,2880,56C3040,56,3200,52,3360,54C3520,56,3680,64,3840,70C4000,76,4160,80,4320,72C4480,64,4640,44,4800,40C4960,36,5120,48,5280,46C5440,44,5600,28,5760,30C5920,32,6080,52,6240,62C6400,72,6560,72,6720,64C6880,56,7040,40,7200,34C7360,28,7520,32,7680,44C7840,56,8000,76,8160,86C8320,96,8480,96,8640,90C8800,84,8960,72,9120,56C9280,40,9440,20,9600,24C9760,28,9920,56,10080,58C10240,60,10400,36,10560,38C10720,40,10880,68,11040,70C11200,72,11360,48,11440,36L11520,24L11520,120L11440,120C11360,120,11200,120,11040,120C10880,120,10720,120,10560,120C10400,120,10240,120,10080,120C9920,120,9760,120,9600,120C9440,120,9280,120,9120,120C8960,120,8800,120,8640,120C8480,120,8320,120,8160,120C8000,120,7840,120,7680,120C7520,120,7360,120,7200,120C7040,120,6880,120,6720,120C6560,120,6400,120,6240,120C6080,120,5920,120,5760,120C5600,120,5440,120,5280,120C5120,120,4960,120,4800,120C4640,120,4480,120,4320,120C4160,120,4000,120,3840,120C3680,120,3520,120,3360,120C3200,120,3040,120,2880,120C2720,120,2560,120,2400,120C2240,120,2080,120,1920,120C1760,120,1600,120,1440,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
                        </path>
                        <defs>
                            <linearGradient id="mew-footer-1" x1="0" x2="0" y1="1"
                                y2="0">
                                <stop stop-color="var(--lightLeftColBackground)" offset="0%"></stop>
                                <stop stop-color="var(--lightLeftColBackground)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <path style="transform:translate(0, 50px); opacity:1" fill="url(#mew-footer-1)"
                            d="M0,36L80,34C160,32,320,28,480,32C640,36,800,48,960,50C1120,52,1280,44,1440,38C1600,32,1760,28,1920,24C2080,20,2240,16,2400,24C2560,32,2720,52,2880,52C3040,52,3200,32,3360,26C3520,20,3680,28,3840,44C4000,60,4160,84,4320,88C4480,92,4640,76,4800,74C4960,72,5120,84,5280,90C5440,96,5600,96,5760,84C5920,72,6080,48,6240,50C6400,52,6560,80,6720,94C6880,108,7040,108,7200,106C7360,104,7520,100,7680,82C7840,64,8000,32,8160,24C8320,16,8480,32,8640,38C8800,44,8960,40,9120,44C9280,48,9440,60,9600,58C9760,56,9920,40,10080,28C10240,16,10400,8,10560,14C10720,20,10880,40,11040,40C11200,40,11360,20,11440,10L11520,0L11520,120L11440,120C11360,120,11200,120,11040,120C10880,120,10720,120,10560,120C10400,120,10240,120,10080,120C9920,120,9760,120,9600,120C9440,120,9280,120,9120,120C8960,120,8800,120,8640,120C8480,120,8320,120,8160,120C8000,120,7840,120,7680,120C7520,120,7360,120,7200,120C7040,120,6880,120,6720,120C6560,120,6400,120,6240,120C6080,120,5920,120,5760,120C5600,120,5440,120,5280,120C5120,120,4960,120,4800,120C4640,120,4480,120,4320,120C4160,120,4000,120,3840,120C3680,120,3520,120,3360,120C3200,120,3040,120,2880,120C2720,120,2560,120,2400,120C2240,120,2080,120,1920,120C1760,120,1600,120,1440,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
                        </path>
                    </svg>
                </div>
                <div class="container">
                    <div class="row align-items-stretch">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left mb-2">
                            <h3 class="footer-title mb-2 position-relative font-weight-bold">Giới thiệu</h3>
                            <ul class="links">

                                <li><a href="/search" title="Tìm kiếm">Tìm kiếm</a></li>

                                <li><a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a></li>

                                <li><a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách
                                        bảo mật</a></li>

                                <li><a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản
                                        dịch vụ</a></li>

                                <li><a href="/pages/lien-he" title="Liên hệ">Liên hệ</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 footer-left mb-2">
                            <h3 class="footer-title mb-2 position-relative font-weight-bold">Chính sách</h3>
                            <ul class="links">

                                <li><a href="/search" title="Tìm kiếm">Tìm kiếm</a></li>

                                <li><a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a></li>

                                <li><a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách
                                        bảo mật</a></li>

                                <li><a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản
                                        dịch vụ</a></li>

                                <li><a href="/pages/lien-he" title="Liên hệ">Liên hệ</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 footer-left mb-2">
                            <h3 class="footer-title mb-2 position-relative font-weight-bold">Hướng dẫn</h3>
                            <ul class="links">

                                <li><a href="/search" title="Tìm kiếm">Tìm kiếm</a></li>

                                <li><a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a></li>

                                <li><a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách
                                        bảo mật</a></li>

                                <li><a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản
                                        dịch vụ</a></li>

                                <li><a href="/pages/lien-he" title="Liên hệ">Liên hệ</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 footer-left mb-2">
                            <h3 class="footer-title mb-2 position-relative font-weight-bold">Hỗ trợ khách hàng
                            </h3>
                            <ul class="links ">

                                <li><a href="/search" title="Tìm kiếm">Tìm kiếm</a></li>

                                <li><a href="/pages/about-us" title="Giới thiệu">Giới thiệu</a></li>

                                <li><a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách
                                        bảo mật</a></li>

                                <li><a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản
                                        dịch vụ</a></li>

                                <li><a href="/pages/lien-he" title="Liên hệ">Liên hệ</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="foo_mid mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12 footer-left mb-3 mb-md-0">
                                <a href="/" title="HTX" class="logo_foo d-block mb-3">
                                </a>
                                <address class="vcard mb-2">

                                    <p class="adr"><b>Địa chỉ: </b>Trường THPT Chu Văn An</p>


                                    <p><b>Hotline: </b><a href="tel:0984063567" title="0984063567">0984063567</a></p>
                                    <p><b>Email: </b><a href="doanthanhhai@tnut.edu.vn"
                                            title="doanthanhhai@tnut.edu.vn">doanthanhhai@tnut.edu.vn</a></p>


                                </address>
                                <div class="row align-items-end">
                                    <div class="align-items-center col-8 col-sm-5 col-md-8 col-lg-4 d-flex gap_10">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
                                <h3 class="footer-title mb-3 position-relative font-weight-bold">Kết nối với chúng tôi
                                </h3>
                                <div class="d-flex position-relative social mb-3">
                                    <a href="https://www.facebook.com/share/1HAkWejNQf/" target="_blank"
                                        class="position-relative iso sitdown modal-open d-inline-block facebook mr-1"
                                        title="Facebook">
                                        <img src="https://htxtruongthuan.com/website/images/icon_fb.png"
                                            alt="facebook" width="32" height="32">
                                    </a>

                                    <a href="" target="_blank"
                                        class="position-relative iso sitdown modal-open d-inline-block instagram mr-1"
                                        title="Instagram+">
                                        <img src="https://htxtruongthuan.com/website/images/icon_insta.png"
                                            alt="instagram" width="32" height="32">
                                    </a>
                                    <a href="" target="_blank"
                                        class="position-relative iso sitdown modal-open d-inline-block youtube mr-1"
                                        title="Youtube">
                                        <img src="https://htxtruongthuan.com/website/images/icon_youtube.png"
                                            alt="youtube" width="32" height="32">
                                    </a>
                                    <a href="" target="_blank"
                                        class="position-relative iso sitdown modal-open d-inline-block shopee mr-1"
                                        title="Shopee">
                                        <img src="https://htxtruongthuan.com/website/images/icon_shopee.png"
                                            alt="Shopee" width="32" height="32">
                                    </a>
                                    <a href="" target="_blank"
                                        class="position-relative iso sitdown modal-open d-inline-block lazada mr-1"
                                        title="Lazada">
                                        <img src="https://htxtruongthuan.com/website/images/icon_lazada.png"
                                            alt="Lazada" width="32" height="32">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="foo_bot">
                    <div class="container">
                        <div class="row bgk align-items-center">
                            <div class="col-12 text-center border-top border-main py-2">

                                <div class="coppyright">Đơn vị hỗ trợ, tư vấn kỹ thuật: Viện Nghiên cứu phát triển Công nghệ cao về Kỹ thuật Công nghiệp - <span><a
                                            href="https://tnut.edu.vn/">Trường Đại học Kỹ thuật Công nghiệp, Đại học Thái Nguyên</a></span> </div>
                                <div class="coppyright">Đơn vị hỗ trợ, tư vấn thiết kế: Trung tâm Nghiên cứu Địa tin học - <span><a href="https://tuaf.edu.vn/">Trường Đại học Nông Lâm, Đại học Thái Nguyên</a></span> </div>
                                <div class="coppyright">Đơn vị hỗ trợ, tư vấn chuyên môn: Trung tâm Luyện thi đánh giá năng lực và tư duy 3P Education - <span><a href="">Trường Đại học Ngoại thương</a></span> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div onclick="scrollToTop(100);" class="back_top d-flex position-fixed justify-content-center align-items-center">
        <img alt="Lên đầu trang" src="https://htxtruongthuan.com/website/images/to-top-arrow2.png">
    </div>

    <div class="fix-phone p-1 p-lg-2 pt-lg-3 pb-lg-3 d-none d-lg-block">
        <a href="tel:0339902798" title="Hotline"
            class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 phone-box d-flex align-items-center justify-content-center">
            <svg width="24" height="24" class="play0">
                <use href="#svg-phone"></use>
            </svg>
        </a>
        <a href="https://m.me/" title="Chat Facebook" target="_blank"
            class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 fb-box d-flex align-items-center justify-content-center rounded-circle">
            <svg width="28" height="28">
                <use href="#svg-messenger"></use>
            </svg>
        </a>
        <a href="https://chat.zalo.me/" title="Chat Zalo" target="_blank"
            class="mt-lg-1 ml-1 mb-lg-1 mr-1 ml-lg-0 mr-lg-0 zalo-box d-flex align-items-center justify-content-center">
            <svg width="32" height="32">
                <use href="#svg-zalo"></use>
            </svg>
        </a>
    </div>



    <div class="fix-phone-mb position-fixed d-flex d-lg-none flex-column bg-white p-2 px-lg-3 rounded-10"
        id="mb_bar">
        <a class="align-items-center bg-main close_support d-flex justify-content-center position-absolute"
            href="javascript:;" title="Đóng">
            <svg width="12" height="12">
                <use href="#svg-close"></use>
            </svg>
        </a>
        <div class="font-weight-bold p-2 border-bottom">
            Hỗ trợ 24/7
        </div>
        <div class="item phone">
            <a href="tel:0984063567" rel="nofollow" class="align-items-center border-bottom d-flex gap_5">
                <span class="img">
                    <img alt="Hotline" src="https://theme.hstatic.net/200000830051/1001188866/14/hotline.png?v=502">
                </span>
                <div class="detail">0984063567</div>
            </a>
        </div>
        <div class="item zalo">
            <a target="_blank" href="https://m.me/" rel="nofollow"
                class="align-items-center border-bottom d-flex gap_5">
                <span class="img">
                    <img alt="Chat Messenger"
                        src="https://theme.hstatic.net/200000830051/1001188866/14/icon_mess.png?v=502">
                </span>
                <div class="detail">Chat Mess</div>
            </a>
        </div>
        <div class="item zalo">
            <a target="_blank" href="https://chat.zalo.me/" rel="nofollow"
                class="align-items-center d-flex gap_5">
                <span class="img">
                    <img alt="Chat Zalo"
                        src="https://theme.hstatic.net/200000830051/1001188866/14/icon_zalo.png?v=502">
                </span>
                <div class="detail">Chat Zalo</div>
            </a>
        </div>
    </div>



    <div class="d-flex d-lg-none mew_mobi_bar position-fixed pt-2">

        <a href="/" title="Trang chủ"
            class="active item align-content-center d-flex flex-column h-100 justify-content-center">
            <svg width="22" height="22">
                <use href="#svg-home-bar"></use>
            </svg>
            <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Trang chủ</span>
        </a>

        <a href="{{ url('phucvu') }}" title="Phục vụ cộng đồng"
            class="item align-content-center d-flex flex-column h-100 justify-content-center ">
            <span class="d-inline-block m-auto w-22">
                <picture class="position-relative m-0 ratio1by1 d-block aspect">
                    <img src="https://file.hstatic.net/200000830051/file/flash_8770ee4267b44a06b795c1eaca7cb87c.gif"
                        alt="Phục vụ cộng đồng" class="d-block img position-absolute">
                </picture>
            </span>
            <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Phục vụ cộng
                đồng</span>
        </a>
        <a href="" title="Danh mục"
            class="js-menu-toggle item align-content-center d-flex flex-column h-100 justify-content-center">
            <svg width="22" height="22">
                <use href="#svg-menu"></use>
            </svg>
            <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Danh mục</span>
        </a>
        <a class="item d-flex flex-column align-items-center justify-content-center btn-cart position-relative"
            title="Các gói dịch vụ" href="{{ url('dichvu') }}">
            <span class="position-relative flex-column d-flex">
                <svg width="22" height="22">
                    <use href="#svg-shopping-cart"></use>
                </svg>
                <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Các gói dịch
                    vụ</span>
                <span class="btn-cart-indicator position-absolute d-none text-center"></span>
            </span>
            <div class="js-buy-alert position-absolute"></div>
        </a>
        <a href="javascript:;" title="Liên hệ"
            class="item align-content-center d-flex flex-column h-100 justify-content-center js-contact-toggle">
            <svg width="22" height="22">
                <use href="#svg-support"></use>
            </svg>
            <span class="tit d-block font-weight-bold text-center pr-1 pr-sm-2 pl-1 pl-sm-2 pt-1">Liên hệ</span>
        </a>
    </div>


    <div class="toast-container">
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.querySelector('.toast.active');
            if (toast) {
                // Tự động ẩn sau 5 giây
                setTimeout(() => {
                    toast.classList.remove('active');
                }, 5000);
            }

            // Đóng toast khi nhấn nút close
            document.querySelectorAll('.t-close').forEach(closeButton => {
                closeButton.addEventListener('click', function() {
                    const toast = this.closest('.toast');
                    toast.classList.remove('active');
                });
            });
        });
    </script>


    <style>
        .tudongchat-icon.svelte-3x3xt4.svelte-3x3xt4 {
            padding: 8px;
            background-color: #ffffff !important;
        }

        .tudongchat-icon-logo.svelte-3x3xt4.svelte-3x3xt4 {
            width: 40px;
            height: 40px;
        }
    </style>

    <script src="https://app.tudongchat.com/js/chatbox.js"></script>
    <script>
        const tudong_chatbox = new TuDongChat('_eyUyr4r_GvLn10OhaRSw')
        tudong_chatbox.initial()
    </script>







    <script src="https://htxtruongthuan.com/website/js/classservices.js" defer=""></script>
    <script src="https://htxtruongthuan.com/website/js/classinventory.js" defer=""></script>

    <script defer="" src="https://htxtruongthuan.com/website/js/noti.js" data-mew-status="executed"></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/global.js" defer=""></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/option_selectors.js" defer=""></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/hide_unvaiable_option.js" defer=""></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/papa.js" defer=""></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/swatch_color.js" defer=""></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/wc_lookbook.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/global_speed.js" data-mew-status="executed"></script>
    <script fetchpriority="low" src="https://htxtruongthuan.com/website/js/meo_index.js" defer=""></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/meo_index_speed.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/meotab.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/meo_quickview.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/meo_content.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/table-of-contents.js" data-mew-status="executed"></script>
    <script defer="" src="https://htxtruongthuan.com/website/js/meo_article.js" data-mew-status="executed"></script>
    <script src="https://htxtruongthuan.com/website/js/wc_utils.js" defer=""></script>
    <script src="https://htxtruongthuan.com/website/js/mew_product.js" defer=""></script>
    <svg class="d-none">
        <defs>
            <symbol id="svg-search">
                <path
                    d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5zm-4.5 8h4v-4h1v4h4v1h-4v4h-1v-4h-4v-1z">
                </path>
            </symbol>
            <symbol id="svg-phone" viewBox="0 0 473.806 473.806">
                <path
                    d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z">
                </path>
                <path
                    d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z">
                </path>
                <path
                    d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z">
                </path>
            </symbol>
            <symbol id="svg-home" viewBox="0 0 24 24">
                <path
                    d="M7.119 1.909v5.587c0 .088.002.176.008.262a2.915 2.915 0 0 1-2.915 2.864 2.963 2.963 0 0 1-2.874-3.679l.9-3.598a1.895 1.895 0 0 1 1.839-1.436zm8.622 0-.005 5.59a3.126 3.126 0 0 1-3.126 3.123h-1.234c-1.649 0-3-1.277-3.117-2.896V1.909zm1.132 0h3.05c.87 0 1.628.592 1.839 1.436l.9 3.598a2.963 2.963 0 0 1-2.874 3.679 2.915 2.915 0 0 1-2.915-2.914z">
                </path>
                <path
                    d="M21.75 11.103v7.238a3.75 3.75 0 0 1-3.75 3.75h-2.25v-4.825a3.75 3.75 0 1 0-7.5 0v4.825H6a3.75 3.75 0 0 1-3.75-3.75v-7.238c.59.336 1.265.519 1.962.519A3.915 3.915 0 0 0 7.73 9.428a4.126 4.126 0 0 0 3.646 2.194h1.234a4.127 4.127 0 0 0 3.654-2.207 3.916 3.916 0 0 0 3.524 2.207c.697 0 1.372-.183 1.962-.519zm-7.5 10.988h-4.5v-4.825a2.25 2.25 0 1 1 4.5 0z">
                </path>
            </symbol>
            <symbol id="svg-store" viewBox="0 0 24 24">
                <path
                    d="M18 0c-3.148 0-6 2.553-6 5.702 0 4.682 4.783 5.177 6 12.298 1.217-7.121 6-7.616 6-12.298 0-3.149-2.852-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm-12-3c-2.099 0-4 1.702-4 3.801 0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199 0-2.099-1.901-3.801-4-3.801zm0 5.333c-.737 0-1.333-.597-1.333-1.333s.596-1.333 1.333-1.333 1.333.596 1.333 1.333-.596 1.333-1.333 1.333zm6 5.775l-3.215-1.078c.365-.634.777-1.128 1.246-1.687l1.969.657 1.92-.64c.388.521.754 1.093 1.081 1.75l-3.001.998zm12 7.892l-6.707-2.427-5.293 2.427-5.581-2.427-6.419 2.427 3.62-8.144c.299.76.554 1.776.596 3.583l-.443.996 2.699-1.021 4.809 2.091.751-3.725.718 3.675 4.454-2.042 3.099 1.121-.461-1.055c.026-.392.068-.78.131-1.144.144-.84.345-1.564.585-2.212l3.442 7.877z">
                </path>
            </symbol>
            <symbol id="svg-account" viewBox="0 0 512 512">
                <path
                    d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-325.914062 354.316406c8.453125-72.734375 70.988281-128.890625 144.894531-128.890625 38.960938 0 75.597656 15.179688 103.15625 42.734375 23.28125 23.285156 37.964844 53.6875 41.742188 86.152344-39.257813 32.878906-89.804688 52.707031-144.898438 52.707031s-105.636719-19.824219-144.894531-52.703125zm144.894531-159.789063c-42.871094 0-77.753906-34.882812-77.753906-77.753906 0-42.875 34.882812-77.753906 77.753906-77.753906s77.753906 34.878906 77.753906 77.753906c0 42.871094-34.882812 77.753906-77.753906 77.753906zm170.71875 134.425782c-7.644531-30.820313-23.585938-59.238282-46.351562-82.003906-18.4375-18.4375-40.25-32.269532-64.039063-40.9375 28.597656-19.394532 47.425781-52.160157 47.425781-89.238282 0-59.414062-48.339844-107.753906-107.753906-107.753906s-107.753906 48.339844-107.753906 107.753906c0 37.097656 18.84375 69.875 47.464844 89.265625-21.886719 7.976563-42.140626 20.308594-59.566407 36.542969-25.234375 23.5-42.757812 53.464844-50.882812 86.347656-34.410157-39.667968-55.261719-91.398437-55.261719-147.910156 0-124.617188 101.382812-226 226-226s226 101.382812 226 226c0 56.523438-20.859375 108.265625-55.28125 147.933594zm0 0">
                </path>
            </symbol>
            <symbol id="svg-cart" viewBox="0 0 32 32">
                <path
                    d="M27 25.15 25.28 10.5a2.93 2.93 0 0 0-3-2.5h-1.35c0-.19 0-.38-.06-.57-.22-1.54-.41-2.87-1.59-4a4.51 4.51 0 0 0-6.56 0c-1.18 1.14-1.37 2.47-1.59 4 0 .19 0 .38-.06.57H9.69a2.93 2.93 0 0 0-3 2.5L5 25.15a4.13 4.13 0 0 0 1 3.26A4.87 4.87 0 0 0 9.72 30h12.56a4.87 4.87 0 0 0 3.64-1.59A4.13 4.13 0 0 0 27 25.15zM13.11 7.71c.22-1.52.34-2.21 1-2.85A2.78 2.78 0 0 1 16 4a2.78 2.78 0 0 1 1.89.86c.66.64.78 1.33 1 2.85V8h-5.8c.01-.1.01-.19.02-.29zm11.31 19.37a2.83 2.83 0 0 1-2.14.92H9.72a2.83 2.83 0 0 1-2.14-.92 2.14 2.14 0 0 1-.58-1.7l1.7-14.65a.94.94 0 0 1 1-.73H11c0 .38.05.76.1 1.14a1 1 0 1 0 2-.28c0-.29 0-.57-.06-.86H19c0 .29 0 .57-.06.86a1 1 0 0 0 .8 1.14h.14a1 1 0 0 0 1-.86c.05-.38.08-.76.1-1.14h1.34a.94.94 0 0 1 1 .73L25 25.38a2.14 2.14 0 0 1-.58 1.7z">
                </path>
                <path d="M19 19h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2z">
                </path>
            </symbol>
            <symbol id="svg-variant" viewBox="0 0 32 32">
                <path
                    d="M12 3H6a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zm1 9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM26 3h-6a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zm1 9a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM12 17H6a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3zm1 9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM28 22h-4v-4a1 1 0 0 0-2 0v4h-4a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0v-4h4a1 1 0 0 0 0-2z">
                </path>
            </symbol>
            <symbol id="svg-menu" viewBox="0 0 24 24">
                <path
                    d="M7 10.75H5c-2.42 0-3.75-1.33-3.75-3.75V5c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25V5c0-1.58-.67-2.25-2.25-2.25zM19 10.75h-2c-2.42 0-3.75-1.33-3.75-3.75V5c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25V5c0-1.58-.67-2.25-2.25-2.25zM19 22.75h-2c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25zM7 22.75H5c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25z">
                </path>
            </symbol>
            <symbol id="svg-user" viewBox="0 0 512 512.001">
                <path
                    d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0">
                </path>
                <path
                    d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0">
                </path>
            </symbol>
            <symbol id="svg-minus" viewBox="0 0 409.6 409.6">
                <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467
                     c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"></path>
            </symbol>
            <symbol id="svg-plus" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z">
                </path>
            </symbol>
            <symbol id="svg-tick" viewBox="0 0 12 12">
                <path
                    d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z">
                </path>
            </symbol>
            <symbol id="svg-close" viewBox="0 0 24 24">
                <path
                    d="M18.414 8.414a2 2 0 1 0-2.828-2.828L12 9.172 8.414 5.586a2 2 0 1 0-2.828 2.828L9.172 12l-3.586 3.586a2 2 0 1 0 2.828 2.828L12 14.828l3.586 3.586a2 2 0 1 0 2.828-2.828L14.828 12z">
                </path>
            </symbol>
            <symbol id="quote" viewBox="0 0 475.082 475.081">
                <path d="M164.45,219.27h-63.954c-7.614,0-14.087-2.664-19.417-7.994c-5.327-5.33-7.994-11.801-7.994-19.417v-9.132
                     c0-20.177,7.139-37.401,21.416-51.678c14.276-14.272,31.503-21.411,51.678-21.411h18.271c4.948,0,9.229-1.809,12.847-5.424
                     c3.616-3.617,5.424-7.898,5.424-12.847V54.819c0-4.948-1.809-9.233-5.424-12.85c-3.617-3.612-7.898-5.424-12.847-5.424h-18.271
                     c-19.797,0-38.684,3.858-56.673,11.563c-17.987,7.71-33.545,18.132-46.68,31.267c-13.134,13.129-23.553,28.688-31.262,46.677
                     C3.855,144.039,0,162.931,0,182.726v200.991c0,15.235,5.327,28.171,15.986,38.834c10.66,10.657,23.606,15.985,38.832,15.985
                     h109.639c15.225,0,28.167-5.328,38.828-15.985c10.657-10.663,15.987-23.599,15.987-38.834V274.088
                     c0-15.232-5.33-28.168-15.994-38.832C192.622,224.6,179.675,219.27,164.45,219.27z">
                </path>
                <path
                    d="M459.103,235.256c-10.656-10.656-23.599-15.986-38.828-15.986h-63.953c-7.61,0-14.089-2.664-19.41-7.994
                     c-5.332-5.33-7.994-11.801-7.994-19.417v-9.132c0-20.177,7.139-37.401,21.409-51.678c14.271-14.272,31.497-21.411,51.682-21.411
                     h18.267c4.949,0,9.233-1.809,12.848-5.424c3.613-3.617,5.428-7.898,5.428-12.847V54.819c0-4.948-1.814-9.233-5.428-12.85
                     c-3.614-3.612-7.898-5.424-12.848-5.424h-18.267c-19.808,0-38.691,3.858-56.685,11.563c-17.984,7.71-33.537,18.132-46.672,31.267
                     c-13.135,13.129-23.559,28.688-31.265,46.677c-7.707,17.987-11.567,36.879-11.567,56.674v200.991
                     c0,15.235,5.332,28.171,15.988,38.834c10.657,10.657,23.6,15.985,38.828,15.985h109.633c15.229,0,28.171-5.328,38.827-15.985
                     c10.664-10.663,15.985-23.599,15.985-38.834V274.088C475.082,258.855,469.76,245.92,459.103,235.256z">
                </path>
            </symbol>
            <symbol id="svg-filter" viewBox="0 0 24 24">
                <path
                    d="M18 13H6c-.6 0-1-.4-1-1s.4-1 1-1h12c.6 0 1 .4 1 1s-.4 1-1 1zM15 19H9c-.6 0-1-.4-1-1s.4-1 1-1h6c.6 0 1 .4 1 1s-.4 1-1 1zM21 7H3c-.6 0-1-.4-1-1s.4-1 1-1h18c.6 0 1 .4 1 1s-.4 1-1 1z">
                </path>
            </symbol>
            <symbol id="svg-option" viewBox="0 0 24 24">
                <path
                    d="M24 14.187v-4.374c-2.148-.766-2.726-.802-3.027-1.529-.303-.729.083-1.169 1.059-3.223l-3.093-3.093c-2.026.963-2.488 1.364-3.224 1.059-.727-.302-.768-.889-1.527-3.027h-4.375c-.764 2.144-.8 2.725-1.529 3.027-.752.313-1.203-.1-3.223-1.059l-3.093 3.093c.977 2.055 1.362 2.493 1.059 3.224-.302.727-.881.764-3.027 1.528v4.375c2.139.76 2.725.8 3.027 1.528.304.734-.081 1.167-1.059 3.223l3.093 3.093c1.999-.95 2.47-1.373 3.223-1.059.728.302.764.88 1.529 3.027h4.374c.758-2.131.799-2.723 1.537-3.031.745-.308 1.186.099 3.215 1.062l3.093-3.093c-.975-2.05-1.362-2.492-1.059-3.223.3-.726.88-.763 3.027-1.528zm-4.875.764c-.577 1.394-.068 2.458.488 3.578l-1.084 1.084c-1.093-.543-2.161-1.076-3.573-.49-1.396.581-1.79 1.693-2.188 2.877h-1.534c-.398-1.185-.791-2.297-2.183-2.875-1.419-.588-2.507-.045-3.579.488l-1.083-1.084c.557-1.118 1.066-2.18.487-3.58-.579-1.391-1.691-1.784-2.876-2.182v-1.533c1.185-.398 2.297-.791 2.875-2.184.578-1.394.068-2.459-.488-3.579l1.084-1.084c1.082.538 2.162 1.077 3.58.488 1.392-.577 1.785-1.69 2.183-2.875h1.534c.398 1.185.792 2.297 2.184 2.875 1.419.588 2.506.045 3.579-.488l1.084 1.084c-.556 1.121-1.065 2.187-.488 3.58.577 1.391 1.689 1.784 2.875 2.183v1.534c-1.188.398-2.302.791-2.877 2.183zm-7.125-5.951c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5z">
                </path>
            </symbol>
            <symbol id="svg-right" viewBox="0 0 451.846 451.847">
                <path
                    d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                </path>
            </symbol>
            <symbol id="svg-compare" viewBox="0 0 24 24">
                <path
                    d="m7.46967 1.96967c.29289-.29289.76777-.29289 1.06066 0l4.49997 4.5c.2929.29289.2929.76777 0 1.06066s-.7677.29289-1.0606 0l-3.9697-3.96967-3.96967 3.96967c-.29289.29289-.76777.29289-1.06066 0s-.29289-.76777 0-1.06066z">
                </path>
                <path
                    d="m7.99585 1.75c.41421 0 .75.33579.75.75v13c0 .4142-.33579.75-.75.75s-.75-.3358-.75-.75v-13c0-.41421.33579-.75.75-.75z">
                </path>
                <path
                    d="m11.4697 16.4697c.2929-.2929.7677-.2929 1.0606 0l3.9697 3.9696 3.9697-3.9696c.2929-.2929.7677-.2929 1.0606 0s.2929.7677 0 1.0606l-4.5 4.5c-.2929.2929-.7677.2929-1.0606 0l-4.5-4.5c-.2929-.2929-.2929-.7677 0-1.0606z">
                </path>
                <path
                    d="m16.4958 7.75c.4143 0 .75.33579.75.75v13c0 .4142-.3357.75-.75.75-.4142 0-.75-.3358-.75-.75v-13c0-.41421.3358-.75.75-.75z">
                </path>
            </symbol>
            <symbol id="svg-shareCompare" viewBox="0 0 512 512.00102">
                <path
                    d="m361.824219 344.394531c-24.53125 0-46.632813 10.59375-61.972657 27.445313l-137.972656-85.453125c3.683594-9.429688 5.726563-19.671875 5.726563-30.386719 0-10.71875-2.042969-20.960938-5.726563-30.386719l137.972656-85.457031c15.339844 16.851562 37.441407 27.449219 61.972657 27.449219 46.210937 0 83.804687-37.59375 83.804687-83.804688 0-46.210937-37.59375-83.800781-83.804687-83.800781-46.210938 0-83.804688 37.59375-83.804688 83.804688 0 10.714843 2.046875 20.957031 5.726563 30.386718l-137.96875 85.453125c-15.339844-16.851562-37.441406-27.449219-61.972656-27.449219-46.210938 0-83.804688 37.597657-83.804688 83.804688 0 46.210938 37.59375 83.804688 83.804688 83.804688 24.53125 0 46.632812-10.59375 61.972656-27.449219l137.96875 85.453125c-3.679688 9.429687-5.726563 19.671875-5.726563 30.390625 0 46.207031 37.59375 83.800781 83.804688 83.800781 46.210937 0 83.804687-37.59375 83.804687-83.800781 0-46.210938-37.59375-83.804688-83.804687-83.804688zm-53.246094-260.589843c0-29.359376 23.886719-53.246094 53.246094-53.246094s53.246093 23.886718 53.246093 53.246094c0 29.359374-23.886718 53.246093-53.246093 53.246093s-53.246094-23.886719-53.246094-53.246093zm-224.773437 225.441406c-29.363282 0-53.25-23.886719-53.25-53.246094s23.886718-53.246094 53.25-53.246094c29.359374 0 53.242187 23.886719 53.242187 53.246094s-23.882813 53.246094-53.242187 53.246094zm224.773437 118.949218c0-29.359374 23.886719-53.246093 53.246094-53.246093s53.246093 23.886719 53.246093 53.246093c0 29.359376-23.886718 53.246094-53.246093 53.246094s-53.246094-23.886718-53.246094-53.246094zm0 0">
                </path>
            </symbol>
            <symbol id="svg-messenger" viewBox="0 0 32 32">
                <path
                    d="M 16 4 C 9.410156 4 4 9.136719 4 15.5 C 4 18.890625 5.570313 21.902344 8 24 L 8 28.625 L 12.4375 26.40625 C 13.566406 26.746094 14.746094 27 16 27 C 22.589844 27 28 21.863281 28 15.5 C 28 9.136719 22.589844 4 16 4 Z M 16 6 C 21.558594 6 26 10.265625 26 15.5 C 26 20.734375 21.558594 25 16 25 C 14.804688 25 13.664063 24.773438 12.59375 24.40625 L 12.1875 24.28125 L 10 25.375 L 10 23.125 L 9.625 22.8125 C 7.40625 21.0625 6 18.441406 6 15.5 C 6 10.265625 10.441406 6 16 6 Z M 14.875 12.34375 L 8.84375 18.71875 L 14.25 15.71875 L 17.125 18.8125 L 23.09375 12.34375 L 17.8125 15.3125 Z">
                </path>
            </symbol>
            <symbol id="svg-zalo" viewBox="0 0 44 44">
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                        fill="white"></path>
                    <path
                        d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                        fill="white"></path>
                    <path
                        d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                        fill="white"></path>
                    <path
                        d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                        fill="transparent"></path>
                </g>
            </symbol>
            <symbol id="svg-shopping-cart" viewBox="0 0 24 24">
                <path
                    d="M17 22.75A2.75 2.75 0 1 1 19.75 20 2.752 2.752 0 0 1 17 22.75zm0-4A1.25 1.25 0 1 0 18.25 20 1.252 1.252 0 0 0 17 18.75zM10 22.75A2.75 2.75 0 1 1 12.75 20 2.752 2.752 0 0 1 10 22.75zm0-4A1.25 1.25 0 1 0 11.25 20 1.252 1.252 0 0 0 10 18.75zM16.662 16.75h-6.193a4.773 4.773 0 0 1-4.7-4.078L4.5 3.823A1.254 1.254 0 0 0 3.266 2.75H2a.75.75 0 0 1 0-1.5h1.266a2.764 2.764 0 0 1 2.722 2.361l1.264 8.849a3.266 3.266 0 0 0 3.217 2.79h6.193a3.249 3.249 0 0 0 3.2-2.669l.974-5.357A1.25 1.25 0 0 0 19.6 5.75H8a.75.75 0 0 1 0-1.5h11.6a2.75 2.75 0 0 1 2.705 3.242l-.974 5.358a4.748 4.748 0 0 1-4.669 3.9z">
                </path>
            </symbol>
            <symbol id="svg-store-list" viewBox="0 0 512 512">
                <path
                    d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 469.729c-55.847-66.338-152.035-197.217-152.035-284.301 0-83.834 68.202-152.036 152.035-152.036s152.035 68.202 152.035 152.035C408.034 272.515 311.861 403.37 256 469.729z">
                </path>
                <path
                    d="M256 92.134c-51.442 0-93.292 41.851-93.292 93.293S204.559 278.72 256 278.72s93.291-41.851 93.291-93.293S307.441 92.134 256 92.134zm0 153.194c-33.03 0-59.9-26.871-59.9-59.901s26.871-59.901 59.9-59.901 59.9 26.871 59.9 59.901-26.871 59.901-59.9 59.901z">
                </path>
            </symbol>
            <symbol id="svg-vip" viewBox="0 0 32 32">
                <path
                    d="M16 26.854a5 5 0 0 1-3.8-1.746l-8.042-9.387a3.006 3.006 0 0 1-.327-3.44l2.725-4.769A3.007 3.007 0 0 1 9.161 6h13.678a3.009 3.009 0 0 1 2.605 1.511l2.725 4.769a3.009 3.009 0 0 1-.326 3.441L19.8 25.108a5 5 0 0 1-3.8 1.746zM5.567 13.272a1 1 0 0 0 .11 1.148l8.045 9.386a3 3 0 0 0 4.556 0l8.046-9.387a1 1 0 0 0 .109-1.147L23.708 8.5a1 1 0 0 0-.869-.5H9.161a1 1 0 0 0-.869.5z">
                </path>
            </symbol>
            <symbol id="svg-bell" viewBox="0 0 24 24">
                <path
                    d="M6.56 4.394c1.162-1.497 2.961-2.63 5.436-2.63 2.474 0 4.274 1.133 5.436 2.63 1.143 1.474 1.675 3.305 1.675 4.79a22.397 22.397 0 0 1-.028 1.121c-.01.259-.008.383.012.506.045.28.188.624.76 1.883a.756.756 0 0 1 .016.038c.412 1.063.32 2.04-.17 2.868-.47.79-1.257 1.372-2.108 1.797-1.703.85-3.953 1.215-5.593 1.215-1.64 0-3.891-.366-5.593-1.215-.852-.425-1.64-1.007-2.107-1.797-.491-.828-.583-1.806-.17-2.868a.778.778 0 0 1 .016-.038c.571-1.26.714-1.604.76-1.883.02-.123.021-.247.011-.506l-.005-.138c-.01-.24-.023-.557-.023-.983 0-1.485.532-3.316 1.675-4.79zm1.185.92c-.928 1.197-1.36 2.7-1.36 3.87 0 .393.012.677.021.916l.006.15c.01.265.016.518-.03.8-.084.523-.341 1.089-.855 2.222l-.01.022c-.25.652-.17 1.14.069 1.541.263.444.767.861 1.486 1.22 1.439.718 3.444 1.057 4.924 1.057 1.48 0 3.484-.34 4.923-1.057.72-.359 1.224-.776 1.487-1.22.238-.402.318-.889.07-1.541l-.01-.022c-.515-1.133-.771-1.7-.856-2.222a3.91 3.91 0 0 1-.03-.8l.006-.15c.01-.24.021-.523.021-.916 0-1.17-.432-2.673-1.36-3.87-.911-1.175-2.292-2.05-4.25-2.05-1.96 0-3.341.875-4.252 2.05zM9.186 19.953a.75.75 0 0 1 1.06.06c1.005 1.125 2.502 1.115 3.501-.001a.75.75 0 1 1 1.118 1c-1.59 1.776-4.13 1.8-5.738 0a.75.75 0 0 1 .06-1.06z">
                </path>
            </symbol>
            <symbol id="svg-coupon" viewBox="0 0 24 15">
                <path
                    d="M21.1449 0.523315H2.8556C1.28087 0.523315 0 1.68456 0 3.11198V11.9975C0 13.425 1.28087 14.5862 2.8556 14.5862H21.1447C22.7189 14.5862 24 13.425 24 11.9975V3.11198C24 1.68456 22.7189 0.523315 21.1449 0.523315ZM22.532 11.9975C22.532 12.6153 21.9092 13.1182 21.1447 13.1182H2.8556C2.09048 13.1182 1.46803 12.6153 1.46803 11.9975V3.11198C1.46803 2.49416 2.09048 1.99135 2.8556 1.99135H21.1447C21.9093 1.99135 22.532 2.49416 22.532 3.11198V11.9975Z">
                </path>
                <path
                    d="M7.35971 5.65955H7.15519C6.80628 5.65955 6.52344 5.94239 6.52344 6.2913C6.52344 6.64021 6.80628 6.92305 7.15519 6.92305H7.35971C7.70862 6.92305 7.99147 6.64021 7.99147 6.2913C7.99147 5.94239 7.70862 5.65955 7.35971 5.65955Z">
                </path>
                <path
                    d="M7.35971 10.7133H7.15519C6.80628 10.7133 6.52344 10.9961 6.52344 11.345C6.52344 11.6939 6.80628 11.9768 7.15519 11.9768H7.35971C7.70862 11.9768 7.99147 11.6939 7.99147 11.345C7.99147 10.9961 7.70862 10.7133 7.35971 10.7133Z">
                </path>
                <path
                    d="M7.35971 3.13254H7.15519C6.80628 3.13254 6.52344 3.41538 6.52344 3.76429C6.52344 4.1132 6.80628 4.39605 7.15519 4.39605H7.35971C7.70862 4.39605 7.99147 4.1132 7.99147 3.76429C7.99147 3.41538 7.70862 3.13254 7.35971 3.13254Z">
                </path>
                <path
                    d="M7.35986 8.18655H7.15505C6.80622 8.18655 6.52344 8.46934 6.52344 8.81816C6.52344 9.16699 6.80622 9.44977 7.15505 9.44977H7.35986C7.70869 9.44977 7.99147 9.16699 7.99147 8.81816C7.99147 8.46934 7.70869 8.18655 7.35986 8.18655Z">
                </path>
                <path
                    d="M14.6665 5.54039C14.6665 4.39486 13.7155 3.45551 12.5812 3.45551C11.4356 3.45551 10.4961 4.38358 10.4961 5.54039C10.4961 6.70916 11.4358 7.62546 12.5812 7.62546C13.7155 7.62546 14.6665 6.69768 14.6665 5.54039ZM11.6762 5.54039C11.6762 5.03631 12.0887 4.63556 12.581 4.63556C13.0733 4.63556 13.4858 5.0366 13.4858 5.54039C13.4858 6.04465 13.0733 6.4454 12.581 6.4454C12.0887 6.4454 11.6762 6.04436 11.6762 5.54039Z">
                </path>
                <path
                    d="M17.9623 7.55699C16.8168 7.55284 15.8736 8.47773 15.8692 9.63473C15.8652 10.803 16.8016 11.7233 17.9474 11.7277C19.0819 11.7319 20.0356 10.8068 20.0401 9.64997C20.044 8.50407 19.0967 7.56085 17.9623 7.55699ZM17.9545 10.5474C17.4622 10.5474 17.05 10.1458 17.05 9.64206C17.05 9.1378 17.4625 8.73705 17.9545 8.73705C18.4473 8.73705 18.8595 9.13809 18.8595 9.64206C18.8598 10.1461 18.4473 10.5474 17.9545 10.5474Z">
                </path>
                <path d="M16.7992 3.12782L12.373 11.4495L13.6692 12.1389L18.0953 3.81721L16.7992 3.12782Z"></path>
            </symbol>
            <symbol id="svg-coppy" viewBox="0 0 8 9">
                <path
                    d="M4.84593 1.94297H1.98371C1.79866 1.94297 1.6487 2.09286 1.6487 2.27797C1.6487 2.46307 1.79865 2.61298 1.98371 2.61298H4.84593C5.031 2.61298 5.18095 2.46307 5.18095 2.27797C5.18095 2.09286 5.03099 1.94297 4.84593 1.94297Z">
                </path>
                <path
                    d="M4.84593 2.98378H1.98371C1.79866 2.98378 1.6487 3.13367 1.6487 3.31878C1.6487 3.50386 1.79863 3.65379 1.98371 3.65379H4.84593C5.03101 3.65379 5.18095 3.50386 5.18095 3.31878C5.18095 3.13367 5.03099 2.98378 4.84593 2.98378Z">
                </path>
                <path
                    d="M4.84593 4.02457H1.98371C1.79863 4.02457 1.6487 4.17451 1.6487 4.35959C1.6487 4.54466 1.79863 4.6946 1.98371 4.6946H4.84593C5.03101 4.6946 5.18095 4.54466 5.18095 4.35959C5.18095 4.17451 5.03101 4.02457 4.84593 4.02457Z">
                </path>
                <path
                    d="M3.54493 5.06539H1.98371C1.79863 5.06539 1.6487 5.21532 1.6487 5.4004C1.6487 5.58548 1.79863 5.73541 1.98371 5.73541H3.54493C3.73003 5.73541 3.87993 5.58545 3.87993 5.4004C3.87993 5.21535 3.73003 5.06539 3.54493 5.06539Z">
                </path>
                <path
                    d="M6.81507 1.42256H6.48192V1.09982C6.48192 0.627575 6.09063 0.251648 5.61901 0.251648H1.21057C0.738944 0.251648 0.347656 0.627575 0.347656 1.09982V7.09896C0.347656 7.5712 0.738944 7.94713 1.21057 7.94713H1.77877V8.03266C1.77877 8.4917 2.15824 8.85783 2.61653 8.85783H6.81507C7.27336 8.85783 7.65283 8.4917 7.65283 8.03266V2.24773C7.65283 1.78869 7.27336 1.42256 6.81507 1.42256ZM1.01767 7.09896V1.09982C1.01767 1.00906 1.09708 0.921675 1.21057 0.921675H5.61901C5.7325 0.921675 5.8119 1.00906 5.8119 1.09982V7.09896C5.8119 7.18972 5.73249 7.27711 5.61901 7.27711H1.21057C1.09708 7.27711 1.01767 7.18972 1.01767 7.09896ZM6.98281 8.03266C6.98281 8.11148 6.91407 8.18782 6.81507 8.18782H2.61653C2.51752 8.18782 2.44878 8.11147 2.44878 8.03266V7.94713H5.61901C6.09063 7.94713 6.48192 7.5712 6.48192 7.09896V2.09258H6.81507C6.91407 2.09258 6.98281 2.16892 6.98281 2.24773V8.03266Z">
                </path>
            </symbol>
            <symbol id="svg-next" viewBox="0 0 512 512">
                <path fill-rule="evenodd"
                    d="M383.9 300.8c25.139-25.14 28.977-59.53-.086-89.679L186.083 13.387a45.893 45.893 0 0 0-64.9 64.9L298.889 256 121.18 433.71a45.893 45.893 0 1 0 64.9 64.9z">
                </path>
            </symbol>
            <symbol id="svg-prev" viewBox="0 0 512.783 512.783">
                <path
                    d="m227.68 256.389 164.85-164.85c21.064-20.642 21.405-54.452.763-75.515s-54.452-21.405-75.515-.763a51.81 51.81 0 0 0-.777.778l-194 194.78c-25.028 25.225-25.028 65.915 0 91.14l194 194.79c20.637 21.069 54.446 21.419 75.515.783s21.419-54.446.783-75.515a57.068 57.068 0 0 0-.778-.778z">
                </path>
            </symbol>
            <symbol id="svg-next-mini" viewBox="0 0 8 16" fill="none">
                <path
                    d="M1.35718 1.1427L6.05718 6.05699C6.55718 6.55699 6.85718 7.35699 6.85718 8.15699C6.85718 8.95699 6.55718 9.75699 5.95718 10.257L1.35718 14.857"
                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"></path>
            </symbol>
            <symbol id="svg-support" viewBox="0 0 36 36">
                <path
                    d="M28.67 11.54h-4.06V7.33A5.33 5.33 0 0 0 19.28 2H7.33A5.34 5.34 0 0 0 2 7.33v9.76a4.73 4.73 0 0 0 3.66 4.6v.64a2.12 2.12 0 0 0 1.16 1.9A2.15 2.15 0 0 0 9 24.06l2.36-1.69V26a5.34 5.34 0 0 0 5.33 5.33h7.09L27 33.6a2.15 2.15 0 0 0 2.22.16 2.13 2.13 0 0 0 1.16-1.9v-.64A4.73 4.73 0 0 0 34 26.63v-9.76a5.34 5.34 0 0 0-5.33-5.33zm-17.28 5.33v2.92a1.06 1.06 0 0 0-.17.08l-3.43 2.46c0-2.09 0-2.65-1.07-2.65a2.59 2.59 0 0 1-2.59-2.59V7.33a3.2 3.2 0 0 1 3.2-3.2h11.95a3.2 3.2 0 0 1 3.2 3.2v4.21h-5.75a5.34 5.34 0 0 0-5.34 5.33zm20.48 9.76a2.59 2.59 0 0 1-2.59 2.59 1.07 1.07 0 0 0-1.07 1.07v1.58l-3.43-2.45a1.07 1.07 0 0 0-.62-.2h-7.43a3.2 3.2 0 0 1-3.2-3.2v-9.15a3.2 3.2 0 0 1 3.2-3.2h11.94a3.2 3.2 0 0 1 3.2 3.2z">
                </path>
                <path fill-rule="evenodd" d="M26.53 20.41h-3.2V17.2l-4.26 5.34h3.2v3.2z"></path>
            </symbol>
            <symbol id="svg-home-bar" viewBox="0 0 32 32">
                <path
                    d="M26.43 31.15H5.57A4.59 4.59 0 0 1 1 26.57V11.09a4.58 4.58 0 0 1 2.4-4L13.81 1.4a4.57 4.57 0 0 1 4.37 0l10.44 5.66a4.58 4.58 0 0 1 2.4 4v15.51a4.59 4.59 0 0 1-4.59 4.58zM16 2.84a2.58 2.58 0 0 0-1.23.31L4.33 8.82A2.58 2.58 0 0 0 3 11.09v15.48a2.58 2.58 0 0 0 2.58 2.58h20.85A2.58 2.58 0 0 0 29 26.57V11.09a2.58 2.58 0 0 0-1.35-2.27L17.23 3.16A2.58 2.58 0 0 0 16 2.84z">
                </path>
                <path
                    d="M16 26.76a6 6 0 0 1-5.89-4.85 1 1 0 0 1 1-1.15 1 1 0 0 1 1 .83 4 4 0 0 0 7.83 0 1 1 0 0 1 1-.83 1 1 0 0 1 1 1.15A6 6 0 0 1 16 26.76z">
                </path>
            </symbol>
            <symbol id="svg-news" viewBox="0 0 24 24">
                <path
                    d="M21.75 5v14A3.75 3.75 0 0 1 18 22.75H6A3.75 3.75 0 0 1 2.25 19V5A3.75 3.75 0 0 1 6 1.25h12A3.75 3.75 0 0 1 21.75 5zm-1.5 0A2.25 2.25 0 0 0 18 2.75H6A2.25 2.25 0 0 0 3.75 5v14A2.25 2.25 0 0 0 6 21.25h12A2.25 2.25 0 0 0 20.25 19z">
                </path>
                <path
                    d="M12 5.25a.75.75 0 0 1 0 1.5H7a.75.75 0 0 1 0-1.5zM17 9.25a.75.75 0 0 1 0 1.5H7a.75.75 0 0 1 0-1.5zM17 13.25a.75.75 0 0 1 0 1.5H7a.75.75 0 0 1 0-1.5zM17 17.25a.75.75 0 0 1 0 1.5H7a.75.75 0 0 1 0-1.5z">
                </path>
            </symbol>
            <symbol id="svg-gift" viewBox="0 0 20 21">
                <path
                    d="M18 5.55475H16.791C16.922 5.14375 17 4.65075 17 4.05475C17 2.12475 15.43 0.554749 13.5 0.554749C11.878 0.554749 10.795 2.03675 10.096 3.63975C9.407 2.12475 8.269 0.554749 6.5 0.554749C4.57 0.554749 3 2.12475 3 4.05475C3 4.65075 3.079 5.14375 3.209 5.55475H2C0.897 5.55475 0 6.45175 0 7.55475V9.55475C0 10.6577 0.897 11.5547 2 11.5547V18.5547C2 19.6577 2.897 20.5547 4 20.5547H9H11H16C17.103 20.5547 18 19.6577 18 18.5547V11.5547C19.103 11.5547 20 10.6577 20 9.55475V7.55475C20 6.45175 19.103 5.55475 18 5.55475ZM13.5 2.55475C14.327 2.55475 15 3.22775 15 4.05475C15 5.55475 14.374 5.55475 14 5.55475H11.522C12.033 3.97875 12.775 2.55475 13.5 2.55475ZM5 4.05475C5 3.22775 5.673 2.55475 6.5 2.55475C7.388 2.55475 8.214 4.07975 8.698 5.55475H6C5.626 5.55475 5 5.55475 5 4.05475ZM2 7.55475H9V9.55475H2V7.55475ZM4 18.5547V11.5547H9V18.5547H4ZM16 18.5547H11V11.5547H16V18.5547ZM11 9.55475V7.63975C11.005 7.61175 11.011 7.58275 11.017 7.55475H18L18.001 9.55475H11Z">
                </path>
            </symbol>
            <symbol id="svg-ship" viewBox="0 0 26 19">
                <path
                    d="M26 11.3222C26 10.9433 25.861 10.5778 25.6091 10.2937L21.5535 5.73174C21.2595 5.40081 20.8376 5.21173 20.3957 5.21173H17.1721V3.1379C17.1721 1.72868 16.1879 0.434204 14.8091 0.434204H2.36301C0.98423 0.434204 0 1.72868 0 3.1379V15.1693C0 16.0776 0.65639 16.9381 1.60404 16.9381H4.13195C4.52867 17.9532 5.5158 18.6753 6.67209 18.6753C7.82856 18.6753 8.81525 17.9531 9.21213 16.9381H19.3055C19.7022 17.9532 20.6893 18.6753 21.8456 18.6753C23.0019 18.6753 23.989 17.9532 24.3858 16.9381H24.4509C25.3053 16.9381 26 16.2434 26 15.389V11.3222ZM17.8982 8.32774C17.8982 7.75209 18.228 7.25246 18.7086 7.00771H17.1717V15.1421H19.2413C19.5852 14.0305 20.6198 13.2194 21.8452 13.2194C22.8532 13.2194 23.7323 13.7682 24.204 14.5817V11.9727H19.3785C18.5614 11.9727 17.8982 11.309 17.8982 10.4928V8.32774ZM19.6942 8.64347H21.7389L23.1021 10.1767H19.6942V8.64347ZM6.67209 16.8793C6.15862 16.8793 5.74011 16.4608 5.74011 15.9473C5.74011 15.4337 6.1588 15.015 6.67209 15.015C7.18548 15.015 7.60408 15.4334 7.60408 15.9473C7.60408 16.4608 7.18557 16.8793 6.67209 16.8793ZM15.3761 15.1421H9.27602C8.93209 14.0305 7.89749 13.2194 6.67209 13.2194C5.44669 13.2194 4.4121 14.0305 4.06816 15.1421H1.79599V3.1379C1.79599 2.84923 1.88565 2.60564 2.00738 2.44505C2.12903 2.28456 2.25982 2.23019 2.36301 2.23019H14.8091C14.9125 2.23019 15.0433 2.28461 15.1648 2.445C15.2865 2.60554 15.3761 2.84913 15.3761 3.1379V11.4196H4.84212C4.34661 11.4196 3.94412 11.8211 3.94412 12.3176C3.94412 12.8142 4.34661 13.2156 4.84212 13.2156H15.3761V15.1421ZM20.9132 15.9473C20.9132 15.4337 21.3319 15.015 21.8452 15.015C22.3588 15.015 22.7776 15.4336 22.7776 15.9473C22.7776 16.4607 22.3592 16.8793 21.8452 16.8793C21.3321 16.8793 20.9132 16.4607 20.9132 15.9473Z">
                </path>
                <path
                    d="M3.2117 9.55475V4.69475H5.2637V5.36675H4.2017V6.68075H5.1017V7.37075H4.2017V9.55475H3.2117ZM5.76053 9.55475V4.69475H7.02053C7.34853 4.69475 7.62853 4.73275 7.86053 4.80875C8.09653 4.88075 8.27653 5.01075 8.40053 5.19875C8.52853 5.38675 8.59253 5.64675 8.59253 5.97875C8.59253 6.17875 8.57453 6.35675 8.53853 6.51275C8.50653 6.66475 8.44653 6.79875 8.35853 6.91475C8.27453 7.02675 8.15453 7.11675 7.99853 7.18475L8.67053 9.55475H7.65653L7.09853 7.35275H6.75053V9.55475H5.76053ZM6.75053 6.76475H7.03853C7.19853 6.76475 7.32453 6.73875 7.41653 6.68675C7.50853 6.63475 7.57253 6.55675 7.60853 6.45275C7.64853 6.34475 7.66853 6.21275 7.66853 6.05675C7.66853 5.83275 7.62653 5.66275 7.54253 5.54675C7.46253 5.42675 7.31053 5.36675 7.08653 5.36675H6.75053V6.76475ZM9.25858 9.55475V4.69475H11.3766V5.37875H10.2486V6.66875H11.1186V7.35875H10.2486V8.88275H11.3886V9.55475H9.25858ZM11.8894 9.55475V4.69475H14.0074V5.37875H12.8794V6.66875H13.7494V7.35875H12.8794V8.88275H14.0194V9.55475H11.8894Z">
                </path>
            </symbol>
        </defs>
    </svg>


    </div>
</body>

</html>