<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en-US">
   <![endif]-->
<html lang="en-US">

<head>
    @include('public.partial.head')
</head>

<body class="mobile_nav_class jl-has-sidebar">
    <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
        <div class="options_layout_container full_layout_enable_front">
            <!-- Start header -->
            <header
                class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cusdate_head">
                <!-- Start Main menu -->
                @include('public.partial.navbar')
            <div class="search_form_menu_personal">
                <div class="menu_mobile_large_close"><span
                        class="jl_close_wapper search_form_menu_personal_click"><span
                            class="jl_close_1"></span><span class="jl_close_2"></span></span>
                </div>
                <form method="get" class="searchform_theme" action="#">
                    <input type="text" placeholder="Search..." value="" name="s" class="search_btn" />
                    <button type="submit" class="button"><i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="mobile_menu_overlay"></div>
            <div class="main_title_wrapper category_title_section jl_cat_img_bg">
                <div class="category_image_bg_image" style="background-image: url('img/1920x982.png');"></div>
                <div class="category_image_bg_ov"></div>
                <div class="jl_cat_title_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main_title_col">
                                <div class="jl_cat_mid_title">
                                    <h3 class="categories-title title">{{ $posts[0]->kategori }}</h3>
                                    <p>Sample category description goes here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jl_post_loop_wrapper">
                <div class="container" id="wrapper_masonry">
                    <div class="row">
                        <div class="col-md-8 grid-sidebar" id="content">
                            <div class="jl_wrapper_cat">
                                <div id="content_masonry" class="pagination_infinite_style_cat ">
                                    @foreach ($posts as $p)
                                    <div class="box jl_grid_layout1 blog_grid_post_style post-2970 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-morning tag-racing post_format-post-format-gallery"
                                        data-aos="fade-up">
                                        <div class="post_grid_content_wrapper">
                                            <div class="image-post-thumb">
                                                <a href="/post/{{ $p->slug }}" class="link_image featured-thumbnail"
                                                    title="{{ $p->judul }}">
                                                    <img width="780" height="450" src="{{ $p->foto }}"
                                                        class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a> <span class="meta-category-small"><a
                                                        class="post-category-color-text" 
                                                        @switch($p->kategori) @case('AKIDAH')
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
                                                        href="/category/{{ $p->kategori }}">{{ $p->kategori }}</a></span></i></span>
                                            </div>
                                            <div class="post-entry-content">
                                                <div class="post-entry-content-wrapper">
                                                    <div class="large_post_content">
                                                        <h3 class="image-post-title"><a href="/post/{{ $p->slug }}">
                                                                {{ $p->judul }}</a></h3>
                                                        <span class="jl_post_meta"><span
                                                                class="jl_author_img_w"><img src="/assets/disto/img/favicon.jpg"
                                                                    width="30" height="30" alt="{{ $p->author->nama }}"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/author/{{ $p->author->slug }}" title="Posts by {{ $p->author->nama }}"
                                                                    rel="author">{{ $p->author->nama }}</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($p->created_at)->isoFormat('D MMM Y')}}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <nav class="jellywp_pagination"></nav>
                            </div>
                        </div>
                        <!-- start sidebar -->
                        <div class="col-md-4" id="sidebar">
                            <div id="socialcountplus-2" class="widget widget_socialcountplus">
                                <div class="social-count-plus">
                                    <ul class="default">
                                        <li class="count-facebook">
                                            <a class="icon" href="https://www.facebook.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">likes</span></span>
                                        </li>
                                        <li class="count-instagram">
                                            <a class="icon" href="https://instagram.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-pinterest">
                                            <a class="icon" href="https://www.pinterest.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-twitch">
                                            <a class="icon" href="http://www.twitch.tv//profile"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-twitter">
                                            <a class="icon" href="https://twitter.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-vimeo">
                                            <a class="icon" href="https://vimeo.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-youtube">
                                            <a class="icon" href="" rel="nofollow noopener noreferrer"
                                                target="_blank"></a><span class="items"><span
                                                    class="count">20.5k</span><span
                                                    class="label">subscribers</span></span>
                                        </li>
                                        <li class="count-linkedin">
                                            <a class="icon" href="https://www.linkedin.com/company/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div><span class="jl_none_space"></span>
                            <div id="disto_category_image_widget_register-5" class="widget jellywp_cat_image">
                                <div class="wrapper_category_image">
                                    <div class="category_image_wrapper_main">
                                        <div class="category_image_bg_image"
                                            style="background-image: url('img/400x280.png');"><a
                                                class="category_image_link" id="category_color_2" href="#"><span
                                                    class="jl_cm_overlay"><span
                                                        class="jl_cm_name">Active</span><span
                                                        class="jl_cm_count">11</span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #ed1c1c;"></div>
                                        </div>
                                        <div class="category_image_bg_image"
                                            style="background-image: url('img/400x280.png');"><a
                                                class="category_image_link" id="category_color_3" href="#"><span
                                                    class="jl_cm_overlay"><span
                                                        class="jl_cm_name">Business</span><span
                                                        class="jl_cm_count">10</span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #0015ff;"></div>
                                        </div>
                                        <div class="category_image_bg_image"
                                            style="background-image: url('img/400x280.png');"><a
                                                class="category_image_link" id="category_color_4" href="#"><span
                                                    class="jl_cm_overlay"><span
                                                        class="jl_cm_name">Crazy</span><span
                                                        class="jl_cm_count">5</span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #d1783c;"></div>
                                        </div>
                                    </div> <span class="jl_none_space"></span>
                                </div>
                            </div><span class="jl_none_space"></span>
                            <div id="disto_recent_post_widget-7" class="widget post_list_widget">
                                <div class="widget_jl_wrapper"><span class="jl_none_space"></span>
                                    <div class="widget-title">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div>
                                        <ul class="feature-post-list recent-post-widget">
                                            <li>
                                                <a href="#"
                                                    class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                    title="Sitting right here waiting for you come to me">
                                                    <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                        class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                                <div class="item-details">
                                                    <span class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#d800f9"
                                                            href="#">Techno</a></span>
                                                    <h3 class="feature-post-title"><a href="#">
                                                            Sitting right here waiting for you come to me</a></h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                            class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                            24, 2016</span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                    title="Before breakfast we have a great photo shoot">
                                                    <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                        class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                                <div class="item-details">
                                                    <span class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#ed1c1c"
                                                            href="#">Active</a></span>
                                                    <h3 class="feature-post-title"><a href="#">
                                                            Before breakfast we have a great photo shoot</a></h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                            class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                            23, 2016</span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                    title="Beautiful flying bikes with simple style but look good">
                                                    <img width="120" height="120" src="/assets/disto/img/120x120.png"
                                                        class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                                <div class="item-details">
                                                    <span class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#ed1c1c"
                                                            href="#">Active</a></span>
                                                    <h3 class="feature-post-title"><a href="#">
                                                            Beautiful flying bikes with simple style but look good</a>
                                                    </h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                            class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                            23, 2016</span></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="jl_none_space"></span>
                                </div>
                            </div><span class="jl_none_space"></span>
                            <div id="disto_recent_large_slider_widgets-5" class="widget jl_widget_slider">
                                <div class="slider_widget_post jelly_loading_pro">
                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('img/380x350.png')"></span>
                                        <a href="#" class="link_grid_header_absolute"
                                            title="Standing right here and singing until the mid"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#ed1c1c" href="#">Active</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="#">
                                                    Standing right here and singing until the mid</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30" alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="#" title="Posts by Anna Nikova" rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                        </div>
                                    </div>
                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('img/380x350.png')"></span>
                                        <a href="#" class="link_grid_header_absolute"
                                            title="You can make your art with canyon color"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#6b34ba" href="#">Gaming</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="#">
                                                    You can make your art with canyon color</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30" alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="#" title="Posts by Anna Nikova" rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                        </div>
                                    </div>
                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('img/380x350.png')"></span>
                                        <a href="#" class="link_grid_header_absolute"
                                            title="Makeup it really important things to do"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#6b34ba" href="#">Gaming</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="#">
                                                    Makeup it really important things to do</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30" alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="#" title="Posts by Anna Nikova" rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                        </div>
                                    </div>
                                </div>
                                <span class="jl_none_space"></span>
                            </div>
                        </div>
                        <!-- end sidebar -->
                    </div>
                </div>
            </div>
            <!-- end content -->
            <!-- Start footer -->
            @include('public.partial.footer')
            <!-- End footer -->
        </div>
    </div>
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    @include('public.partial.script')
</body>

</html>
