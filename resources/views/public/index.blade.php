<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en-US">
   <![endif]-->
<html lang="en-US">
@include('public.partial.head')

<head>

</head>

<body class="mobile_nav_class jl-has-sidebar">
    <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
        <div class="options_layout_container full_layout_enable_front">
            @include('public.partial.navbar')
            <div class="search_form_menu_personal">
                <div class="menu_mobile_large_close"><span class="jl_close_wapper search_form_menu_personal_click"><span
                            class="jl_close_1"></span><span class="jl_close_2"></span></span>
                </div>
                <form method="get" class="searchform_theme" action="#">
                    <input type="text" placeholder="Search..." value="" name="s" class="search_btn" />
                    <button type="submit" class="button"><i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="mobile_menu_overlay"></div>
            <!-- slider section -->
            <div class="jl_home_section jl_home_slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 jl_mid_main_3col">
                            <div class="page_builder_slider jelly_homepage_builder">
                                <div class="jl_slider_nav_tab large_center_slider_container">
                                    <div class="row header-main-slider-large">
                                        <div class="col-md-12">
                                            <div class="large_center_slider_wrapper">
                                                <div class="home_slider_header_tab jelly_loading_pro">
                                                    @foreach ($carousel_posts as $c)
                                                        <div class="item">
                                                            <div class="banner-carousel-item"> <span
                                                                    class="image_grid_header_absolute"
                                                                    style="background-image: url('{{ $c->foto }}')"></span>
                                                                <a href="/post/{{ $c->slug }}"
                                                                    class="link_grid_header_absolute"></a>
                                                                <div class="banner-container">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="banner-inside-wrapper">
                                                                                    <span class="meta-category-small"><a
                                                                                            class="post-category-color-text"
                                                                                            @switch($c->kategori) @case('AKIDAH')
                                                                                                    style="background:#12b12c"
                                                                                                    @break
                                                                                                @case('HUKUM')
                                                                                                    style="background:#b11212"
                                                                                                    @break
                                                                                                @case('SEJARAH')
                                                                                                    style="background:#b1a212"
                                                                                                    @break
                                                                                                @default
                                                                                                    style="background:#1232b1" @endswitch
                                                                                            href="/assets/disto/#">{{ $c->kategori }}</a></span>
                                                                                    <h5><a
                                                                                            href="/post/{{ $c->slug }}">{{ $c->judul }}</a>
                                                                                    </h5>
                                                                                    <span class="jl_post_meta"><span
                                                                                            class="jl_author_img_w">
                                                                                            <img src="/assets/disto/img/favicon.jpg"
                                                                                                width="30" height="30"
                                                                                                alt="{{ $c->author->nama }}"
                                                                                                class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                                                href="/author/{{ $c->author->slug }}"
                                                                                                title="Posts by {{ $c->author->nama }}"
                                                                                                rel="author">{{ $c->author->nama }}</a></span><span
                                                                                            class="post-date"><i
                                                                                                class="fa fa-clock-o"></i>Dec
                                                                                            24, 2016</span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="jlslide_tab_nav_container">
                                                    <div class="jlslide_tab_nav_row">
                                                        <div class="home_slider_header_tab_nav news_tiker_loading_pro">
                                                            @foreach ($carousel_posts as $c)
                                                                <div class="item">
                                                                    <div class="banner-carousel-item"> <span
                                                                            class="image_small_nav"
                                                                            style="background-image: url('{{ $c->foto }}')"></span>
                                                                        <h5>
                                                                            {{ $c->judul }}
                                                                        </h5>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home grid section -->
            <div class="jl_home_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 jl_mid_main_3col">
                            <div class="jl_3col_wrapin">

                                <div
                                    class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize22 jl_cus_grid3 colstyle1">
                                    <div class="homepage_builder_title">
                                        <h2>
                                            Postingan Terbaru
                                        </h2>
                                        <span class="jl_hsubt"></span>
                                    </div>
                                    <div class="jl_wrapper_row">
                                        <div class="row">
                                            @foreach ($posts_latest as $p)
                                                <div class="col-md-4 blog_grid_post_style  jl_row_1">
                                                    <div class="jl_grid_box_wrapper">
                                                        <div class="image-post-thumb">
                                                            <a href="/post/{{ $p->slug }}"
                                                                class="link_image featured-thumbnail"
                                                                title="{{ $p->judul }}">
                                                                <img width="780" height="450" src="{{ $p->foto }}"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a> <span class="meta-category-small"><a
                                                                    class="post-category-color-text"
                                                                    @switch($p->kategori) 
                                                                        @case('AKIDAH')
                                                                            style="background:#12b12c"
                                                                            @break
                                                                        @case('HUKUM')
                                                                            style="background:#b11212"
                                                                            @break
                                                                        @case('SEJARAH')
                                                                            style="background:#b1a212"
                                                                            @break
                                                                        @default
                                                                            style="background:#1232b1" 
                                                                    @endswitch
                                                                    href="/assets/disto/#">{{ $p->kategori }}</a></span>
                                                        </div>
                                                        <div class="post-entry-content">
                                                            <h3 class="image-post-title"><a
                                                                    href="/post/{{ $p->slug }}">
                                                                    {{ $p->judul }}</a>
                                                            </h3>
                                                            <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                    <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                        height="30" alt="{{ $p->author->nama }}"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="/author/{{ $p->author->slug }}"
                                                                        title="Posts by {{ $p->author->nama }}"
                                                                        rel="author">{{ $p->author->nama }}</a></span><span
                                                                    class="post-date"><i
                                                                        class="fa fa-clock-o"></i>Dec
                                                                    24,
                                                                    2016</span></span>
                                                            <div class="content_post_grid">
                                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                    imperdiet ut imperdiet eu, iaculis a sem. Donec
                                                                    vehicula
                                                                    luctus nunc in...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="clear_line_3col_home"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Home main right -->
            <div class="jl_home_section jl_home_mbg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 jl_mid_main_3col">
                            <div class="jl_3col_wrapin">
                                <div class="jl_main_with_right_post jelly_homepage_builder">
                                    <div class="homepage_builder_title">
                                        <h2 class="builder_title_home_page">
                                            Top Of the week
                                        </h2>
                                    </div>
                                    <div class="jl_main_post_style_padding">
                                        <div class="jl_main_post_style"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/1920x982.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"
                                                title="It’s always fun time and smile in the summer"></a>
                                            <div class="post-entry-content"> <span class="meta-category-small"><a
                                                        class="post-category-color-text" style="background:#0015ff"
                                                        href="/assets/disto/#">Business</a></span>
                                                <h3 class="image-post-title"><a href="/assets/disto/#">
                                                        It’s always fun time and smile in the summer</a>
                                                </h3>
                                                <span class="jl_post_meta"><span class="jl_author_img_w"> <img
                                                            src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                            alt="Anna Nikova"
                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                            href="/assets/disto/#" title="Posts by Anna Nikova"
                                                            rel="author">Anna
                                                            Nikova</a></span><span class="post-date"><i
                                                            class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jl_list_post_wrapper">
                                        <a href="/assets/disto/#"
                                            class="jl_small_format feature-image-link image_post featured-thumbnail">
                                            <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                alt="" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details"> <span class="meta-category-small"><a
                                                    class="post-category-color-text" style="background:#d1783c"
                                                    href="/assets/disto/#">Crazy</a></span>
                                            <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                    The great time for enjoy city view on mountain</a>
                                            </h3>
                                            <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                    class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                    2016</span></span>
                                        </div>
                                    </div>
                                    <div class="jl_list_post_wrapper">
                                        <a href="/assets/disto/#"
                                            class="jl_small_format feature-image-link image_post featured-thumbnail">
                                            <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                alt="" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details"> <span class="meta-category-small"><a
                                                    class="post-category-color-text" style="background:#ed1c1c"
                                                    href="/assets/disto/#">Active</a></span>
                                            <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                    Your phone can take the best photo style</a>
                                            </h3>
                                            <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                    class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                    2016</span></span>
                                        </div>
                                    </div>
                                    <div class="jl_list_post_wrapper">
                                        <a href="/assets/disto/#"
                                            class="jl_small_format feature-image-link image_post featured-thumbnail">
                                            <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                alt="" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details"> <span class="meta-category-small"><a
                                                    class="post-category-color-text" style="background:#6b34ba"
                                                    href="/assets/disto/#">Gaming</a></span>
                                            <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                    Top 10 Best photo hunt of ice Rugby</a>
                                            </h3>
                                            <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                    class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                    2016</span></span>
                                        </div>
                                    </div>
                                    <div class="jl_list_post_wrapper">
                                        <a href="/assets/disto/#"
                                            class="jl_small_format feature-image-link image_post featured-thumbnail">
                                            <img width="120" height="120" src="/assets/disto/img/favicon.jpg"
                                                class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                alt="" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details"> <span class="meta-category-small"><a
                                                    class="post-category-color-text" style="background:#d66300"
                                                    href="/assets/disto/#">Science</a></span>
                                            <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                    It really great holiday and enjoy with the sea</a>
                                            </h3>
                                            <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                    class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                    2016</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="jl_home_section">
                <div class="container">

                    <div
                        class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize18 jl_cus_grid4   colstyle1    ">
                        <div class="jl_wrapper_row jl-post-block-111621">
                            <div class="row">
                                <div class="col-md-4 blog_grid_post_style  jl_row_1">
                                    <div class="jl_grid_box_wrapper">
                                        <div class="image-post-thumb">
                                            <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                title="This place really good place for reading">
                                                <img width="400" height="280" src="/assets/disto/img/400x280.png"
                                                    class="attachment-disto_slider_grid_small size-disto_slider_grid_small wp-post-image"
                                                    alt="" />
                                                <div class="background_over_image"></div>
                                            </a> <span class="meta-category-small"><a class="post-category-color-text"
                                                    style="background:#36c942" href="/assets/disto/#">Sports</a></span>
                                        </div>
                                        <div class="post-entry-content">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    This place really good place for reading</a>
                                            </h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"> <img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 blog_grid_post_style  jl_row_2">
                                    <div class="jl_grid_box_wrapper">
                                        <div class="image-post-thumb">
                                            <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                title="Having fun with DJ and the best music drop">
                                                <img width="400" height="280" src="/assets/disto/img/400x280.png"
                                                    class="attachment-disto_slider_grid_small size-disto_slider_grid_small wp-post-image"
                                                    alt="" />
                                                <div class="background_over_image"></div>
                                            </a> <span class="meta-category-small"><a class="post-category-color-text"
                                                    style="background:#36c942" href="/assets/disto/#">Sports</a></span>
                                            <span class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                        </div>
                                        <div class="post-entry-content">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    Having fun with DJ and the best music drop</a>
                                            </h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"> <img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 blog_grid_post_style  jl_row_3">
                                    <div class="jl_grid_box_wrapper">
                                        <div class="image-post-thumb">
                                            <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                title="This guitar sound is so good and i need it more">
                                                <img width="400" height="280" src="/assets/disto/img/400x280.png"
                                                    class="attachment-disto_slider_grid_small size-disto_slider_grid_small wp-post-image"
                                                    alt="" />
                                                <div class="background_over_image"></div>
                                            </a> <span class="meta-category-small"><a class="post-category-color-text"
                                                    style="background:#d800f9" href="/assets/disto/#">Techno</a></span>
                                        </div>
                                        <div class="post-entry-content">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    This guitar sound is so good and i need it more</a>
                                            </h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"> <img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 blog_grid_post_style  jl_row_4">
                                    <div class="jl_grid_box_wrapper">
                                        <div class="image-post-thumb">
                                            <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                title="Technology can make your live easy and fast">
                                                <img width="400" height="280" src="/assets/disto/img/400x280.png"
                                                    class="attachment-disto_slider_grid_small size-disto_slider_grid_small wp-post-image"
                                                    alt="" />
                                                <div class="background_over_image"></div>
                                            </a> <span class="meta-category-small"><a class="post-category-color-text"
                                                    style="background:#d800f9" href="/assets/disto/#">Techno</a></span>
                                        </div>
                                        <div class="post-entry-content">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    Technology can make your live easy and fast</a>
                                            </h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"> <img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear_line_3col_home"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->
            <!-- Start footer -->
            @include('public.partial.footer')
            <!-- End footer -->
        </div>
    </div>
    <div id="go-top"><a href="/assets/disto/#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    @include('public.partial.script')
</body>

</html>
