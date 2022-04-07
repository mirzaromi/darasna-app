<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en-US">
   <![endif]-->
<html lang="en-US">

@include('public.partial.head')

<body class="mobile_nav_class jl-has-sidebar">
    <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
        <div class="options_layout_container full_layout_enable_front">
            @include('public.partial.navbar')
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
                                                    @foreach ($posts as $post)
                                                        <div class="item">
                                                            <div class="banner-carousel-item"> <span
                                                                    class="image_grid_header_absolute"
                                                                    style="background-image: url('img/1920x982.png')"></span>
                                                                <a href="/assets/disto/#"
                                                                    class="link_grid_header_absolute"></a>
                                                                <div class="banner-container">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="banner-inside-wrapper">
                                                                                    <span class="meta-category-small"><a
                                                                                            class="post-category-color-text"
                                                                                            style="background:#0015ff"
                                                                                            href="/assets/disto/#">{{ $post->kategori }}</a></span>
                                                                                    <h5><a
                                                                                            href="/assets/disto/#">{{ $post->judul }}</a>
                                                                                    </h5>
                                                                                    <span class="jl_post_meta"><span
                                                                                            class="jl_author_img_w">
                                                                                            <img src="/assets/disto/img/favicon.jpg"
                                                                                                width="30" height="30"
                                                                                                alt="Anna Nikova"
                                                                                                class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                                                href="/assets/disto/#"
                                                                                                title="Posts by Anna Nikova"
                                                                                                rel="author">Anna
                                                                                                Nikova</a></span><span
                                                                                            class="post-date"><i
                                                                                                class="fa fa-clock-o"></i>{{ $post->created_at }}</span></span>
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
                                                            @foreach ($posts as $post)
                                                                <div class="item">
                                                                    <div class="banner-carousel-item"> <span
                                                                            class="image_small_nav"
                                                                            style="background-image: url('img/120x120.png')"></span>
                                                                        <h5>
                                                                            {{ $post->judul }}
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
                                            Editor&#039;s Choice
                                        </h2>
                                        <span class="jl_hsubt"></span>
                                    </div>
                                    <div class="jl_wrapper_row">
                                        <div class="row">
                                            <div class="col-md-4 blog_grid_post_style  jl_row_1">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="This is a great photo and nice for shooting">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#d66300"
                                                                href="/assets/disto/#">Science</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                This is a great photo and nice for shooting</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                                24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style  jl_row_2">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="This big boss is work hard and also play hard">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#36c942"
                                                                href="/assets/disto/#">Sports</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                This big boss is work hard and also play hard</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                                24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style  jl_row_3">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="Enjoy a great view of flower before the sunset">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#36c942"
                                                                href="/assets/disto/#">Sports</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                Enjoy a great view of flower before the sunset</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                                24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear_line_3col_home"></div>
                                            <div class="col-md-4 blog_grid_post_style  jl_row_4">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="We are best friends and we been every where">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#6b34ba"
                                                                href="/assets/disto/#">Gaming</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                We are best friends and we been every where</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style  jl_row_5">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="This thing is strong and make your job good">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#ed1c1c"
                                                                href="/assets/disto/#">Active</a></span>
                                                        <span class="jl_post_type_icon"><i
                                                                class="la la-camera"></i></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                This thing is strong and make your job good</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style  jl_row_6">
                                                <div class="jl_grid_box_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/assets/disto/#" class="link_image featured-thumbnail"
                                                            title="Nice photo shooting with hand classic style">
                                                            <img width="780" height="450"
                                                                src="/assets/disto/img/780x450.png"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff"
                                                                href="/assets/disto/#">Business</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                Nice photo shooting with hand classic style</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                        <div class="content_post_grid">
                                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                                imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula
                                                                luctus nunc in...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div
                                    class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_cus_grid_overlay jl_fontsize20 jl_cus_grid3    ">
                                    <div class="jl_wrapper_row jl-post-block-314983">
                                        <div class="row">
                                            <div class="col-md-4 blog_grid_post_style jl_row_1">
                                                <div class="jl_grid_box_wrapper"> <span
                                                        class="image_grid_header_absolute"
                                                        style="background-image: url('img/780x450.png')"></span>
                                                    <a href="/assets/disto/#" class="link_grid_header_absolute"
                                                        title="This is a great toy and beautiful for short"></a> <span
                                                        class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#7fbc1e"
                                                            href="/assets/disto/#">Health</a></span>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                This is a great toy and beautiful for short</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style jl_row_2">
                                                <div class="jl_grid_box_wrapper"> <span
                                                        class="image_grid_header_absolute"
                                                        style="background-image: url('img/780x450.png')"></span>
                                                    <a href="/assets/disto/#" class="link_grid_header_absolute"
                                                        title="This is my favourite fashion that i watching"></a> <span
                                                        class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#ed1c1c"
                                                            href="/assets/disto/#">Active</a></span>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                This is my favourite fashion that i watching</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 blog_grid_post_style jl_row_3">
                                                <div class="jl_grid_box_wrapper"> <span
                                                        class="image_grid_header_absolute"
                                                        style="background-image: url('img/780x450.png')"></span>
                                                    <a href="/assets/disto/#" class="link_grid_header_absolute"
                                                        title="Nice Photo, nice colors and i can&#8217;t wait to try"></a>
                                                    <span class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#ed1c1c"
                                                            href="/assets/disto/#">Active</a></span>
                                                    <div class="post-entry-content">
                                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                                Nice Photo, nice colors and i can&#8217;t wait to
                                                                try</a>
                                                        </h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">
                                                                <img src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="Anna Nikova"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/assets/disto/#" title="Posts by Anna Nikova"
                                                                    rel="author">Anna Nikova</a></span><span
                                                                class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear_line_3col_home"></div>
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
                    <div class="row">
                        <div class="col-md-8" id="content">
                            <div
                                class="post_list_medium_widget jl_nonav_margin page_builder_listpost jelly_homepage_builder jl-post-block-725291">
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#ed1c1c"
                                                href="/assets/disto/#">Active</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                Outdoor photo shooting with sexy and beautiful</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#d66300"
                                                href="/assets/disto/#">Science</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                Hiding face is great way make you unique</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#d66300"
                                                href="/assets/disto/#">Science</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                Music will be more attractive if have guitar</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a> <span
                                                class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#36c942"
                                                href="/assets/disto/#">Sports</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                10 best place for your travel around the world</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a> <span
                                                class="jl_post_type_icon"><i class="la la-play-circle"></i></span>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#36c942"
                                                href="/assets/disto/#">Sports</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                Enjoy your work and do what ever you want</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_list_post_style">
                                    <div class="image-post-thumb featured-thumbnail home_page_builder_thumbnial">
                                        <div class="jl_img_container"> <span class="image_grid_header_absolute"
                                                style="background-image: url('img/780x450.png')"></span>
                                            <a href="/assets/disto/#" class="link_grid_header_absolute"></a> <span
                                                class="jl_post_type_icon"><i class="la la-volume-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="post-entry-content"> <span class="meta-category-small"><a
                                                class="post-category-color-text" style="background:#36c942"
                                                href="/assets/disto/#">Sports</a></span> <span
                                            class="post-meta meta-main-img auto_image_with_date"><span
                                                class="post-date"><i class="fa fa-clock-o"></i>Dec 24,
                                                2016</span><span class="meta-comment"><a href="/assets/disto/#"><i
                                                        class="fa fa-comment"></i>0</a></span></span>
                                        <h3 class="image-post-title"><a href="/assets/disto/#">
                                                This is all i need for my vocation in this week</a>
                                        </h3>
                                        <div class="large_post_content">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                                                Aliquam erat volutpat....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start sidebar -->
                        <div class="col-md-4" id="sidebar">
                            <div id="socialcountplus-2" class="widget widget_socialcountplus">
                                <div class="social-count-plus">
                                    <ul class="default">
                                        <li class="count-facebook">
                                            <a class="icon" href="/assets/disto/https://www.facebook.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">likes</span></span>
                                        </li>
                                        <li class="count-instagram">
                                            <a class="icon" href="/assets/disto/https://instagram.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-pinterest">
                                            <a class="icon" href="/assets/disto/https://www.pinterest.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-twitch">
                                            <a class="icon"
                                                href="/assets/disto/http://www.twitch.tv//profile"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-twitter">
                                            <a class="icon" href="/assets/disto/https://twitter.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-vimeo">
                                            <a class="icon" href="/assets/disto/https://vimeo.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                        <li class="count-youtube">
                                            <a class="icon" href="/assets/disto/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">subscribers</span></span>
                                        </li>
                                        <li class="count-linkedin">
                                            <a class="icon"
                                                href="/assets/disto/https://www.linkedin.com/company/"
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
                                                class="category_image_link" id="category_color_2"
                                                href="/assets/disto/#"><span class="jl_cm_overlay"><span
                                                        class="jl_cm_name">Active</span><span
                                                        class="jl_cm_count">11</span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #ed1c1c;"></div>
                                        </div>
                                        <div class="category_image_bg_image"
                                            style="background-image: url('img/400x280.png');"><a
                                                class="category_image_link" id="category_color_3"
                                                href="/assets/disto/#"><span class="jl_cm_overlay"><span
                                                        class="jl_cm_name">Business</span><span
                                                        class="jl_cm_count">10</span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #0015ff;"></div>
                                        </div>
                                        <div class="category_image_bg_image"
                                            style="background-image: url('img/400x280.png');"><a
                                                class="category_image_link" id="category_color_4"
                                                href="/assets/disto/#"><span class="jl_cm_overlay"><span
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
                                                <a href="/assets/disto/#"
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
                                                            href="/assets/disto/#">Techno</a></span>
                                                    <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                            Sitting right here waiting for you come to me</a></h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                            class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                            24, 2016</span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="/assets/disto/#"
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
                                                            href="/assets/disto/#">Active</a></span>
                                                    <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                            Before breakfast we have a great photo shoot</a></h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date"> <span
                                                            class="post-date"><i class="fa fa-clock-o"></i>Dec
                                                            23, 2016</span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="/assets/disto/#"
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
                                                            href="/assets/disto/#">Active</a></span>
                                                    <h3 class="feature-post-title"><a href="/assets/disto/#">
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
                                        <a href="/assets/disto/#" class="link_grid_header_absolute"
                                            title="Standing right here and singing until the mid"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#ed1c1c" href="/assets/disto/#">Active</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    Standing right here and singing until the mid</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                        </div>
                                    </div>
                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('img/380x350.png')"></span>
                                        <a href="/assets/disto/#" class="link_grid_header_absolute"
                                            title="You can make your art with canyon color"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#6b34ba" href="/assets/disto/#">Gaming</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    You can make your art with canyon color</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
                                                        Nikova</a></span><span class="post-date"><i
                                                        class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                        </div>
                                    </div>
                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('img/380x350.png')"></span>
                                        <a href="/assets/disto/#" class="link_grid_header_absolute"
                                            title="Makeup it really important things to do"></a> <span
                                            class="meta-category-small"><a class="post-category-color-text"
                                                style="background:#6b34ba" href="/assets/disto/#">Gaming</a></span>
                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="/assets/disto/#">
                                                    Makeup it really important things to do</a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="/assets/disto/#" title="Posts by Anna Nikova"
                                                        rel="author">Anna
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
            <footer id="footer-container" class=" enable_footer_columns_dark">
                <div class="footer-columns">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"> <span class="jl_none_space"></span>
                                <div id="disto_about_us_widget-3" class="widget jellywp_about_us_widget">
                                    <div class="widget_jl_wrapper about_widget_content"> <span
                                            class="jl_none_space"></span>
                                        <div class="widget-title">
                                            <h2>About us</h2>
                                        </div>
                                        <div class="jellywp_about_us_widget_wrapper">
                                            <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                                imperdiet eu, iaculis a sem imperdiet ut imperdiet.</p>
                                            <div class="social_icons_widget">
                                                <ul class="social-icons-list-widget icons_about_widget_display">
                                                    <li><a href="/assets/disto/#" class="facebook"
                                                            target="_blank"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="youtube"
                                                            target="_blank"><i class="fa fa-youtube"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="behance"
                                                            target="_blank"><i class="fa fa-behance"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="vimeo"
                                                            target="_blank"><i class="fa fa-vimeo-square"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="youtube"
                                                            target="_blank"><i class="fa fa-youtube"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="tumblr"
                                                            target="_blank"><i class="fa fa-tumblr"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="instagram"
                                                            target="_blank"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="linkedin"
                                                            target="_blank"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="pinterest"
                                                            target="_blank"><i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="twitter"
                                                            target="_blank"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="deviantart"
                                                            target="_blank"><i class="fa fa-deviantart"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="dribble"
                                                            target="_blank"><i class="fa fa-dribbble"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="dropbox"
                                                            target="_blank"><i class="fa fa-dropbox"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="rss"
                                                            target="_blank"><i class="fa fa-rss"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="skype"
                                                            target="_blank"><i class="fa fa-skype"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="stumbleupon"
                                                            target="_blank"><i class="fa fa-stumbleupon"></i></a>
                                                    </li>
                                                    <li><a href="/assets/disto/#" class="wordpress"
                                                            target="_blank"><i class="fa fa-wordpress"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <span class="jl_none_space"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> <span class="jl_none_space"></span>
                                <div id="disto_recent_post_widget-3" class="widget post_list_widget">
                                    <div class="widget_jl_wrapper"> <span class="jl_none_space"></span>
                                        <div class="widget-title">
                                            <h2>Recent Posts</h2>
                                        </div>
                                        <div>
                                            <ul class="feature-post-list recent-post-widget">
                                                <li>
                                                    <a href="/assets/disto/#"
                                                        class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                        title="Round white dining table on brown hardwood">
                                                        <img width="120" height="120"
                                                            src="/assets/disto/img/120x120.png"
                                                            class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                            alt="" />
                                                        <div class="background_over_image"></div>
                                                    </a>
                                                    <div class="item-details"> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#36c942"
                                                                href="/assets/disto/#">Sports</a></span>
                                                        <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                                Round white dining table on brown hardwood</a>
                                                        </h3>
                                                        <span class="post-meta meta-main-img auto_image_with_date">
                                                            <span class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Mar 10,
                                                                2019</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="/assets/disto/#"
                                                        class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                        title="People are enjoy the job that they love">
                                                        <img width="120" height="120"
                                                            src="/assets/disto/img/120x120.png"
                                                            class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                            alt="" />
                                                        <div class="background_over_image"></div>
                                                    </a>
                                                    <div class="item-details"> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff"
                                                                href="/assets/disto/#">Business</a></span>
                                                        <h3 class="feature-post-title"><a href="/assets/disto/#">
                                                                People are enjoy the job that they love</a>
                                                        </h3>
                                                        <span class="post-meta meta-main-img auto_image_with_date">
                                                            <span class="post-date"><i
                                                                    class="fa fa-clock-o"></i>Dec 24,
                                                                2016</span></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <span class="jl_none_space"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="categories-4" class="widget widget_categories">
                                    <div class="widget-title">
                                        <h2>Categories</h2>
                                    </div>
                                    <ul>
                                        <li class="cat-item cat-item-2"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Active</a> <span>11</span>
                                        </li>
                                        <li class="cat-item cat-item-3"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Business</a>
                                            <span>10</span>
                                        </li>
                                        <li class="cat-item cat-item-4"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Crazy</a> <span>5</span>
                                        </li>
                                        <li class="cat-item cat-item-5"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Gaming</a> <span>10</span>
                                        </li>
                                        <li class="cat-item cat-item-6"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Health</a> <span>6</span>
                                        </li>
                                        <li class="cat-item cat-item-7"><a href="/assets/disto/#"
                                                title="Sample category description goes here">Science</a> <span>4</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom enable_footer_copyright_dark">
                    <div class="container">
                        <div class="row bottom_footer_menu_text">
                            <div class="col-md-6 footer-left-copyright">© Copyright 2019 Jellywp. All Rights Reserved
                                Powered by Jellywp</div>
                            <div class="col-md-6 footer-menu-bottom">
                                <ul id="menu-footer-menu" class="menu-footer">
                                    <li class="menu-item menu-item-10"><a href="/assets/disto/#">About Us</a>
                                    </li>
                                    <li class="menu-item menu-item-11"><a href="/assets/disto/#">Private policy</a>
                                    </li>
                                    <li class="menu-item menu-item-12"><a href="/assets/disto/#">Forums</a>
                                    </li>
                                    <li class="menu-item menu-item-13"><a href="/assets/disto/#">Community</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <div id="go-top"><a href="/assets/disto/#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="/assets/disto/js/jquery.js"></script>
    <script src="/assets/disto/js/fluidvids.js"></script>
    <script src="/assets/disto/js/infinitescroll.js"></script>
    <script src="/assets/disto/js/justified.js"></script>
    <script src="/assets/disto/js/slick.js"></script>
    <script src="/assets/disto/js/theia-sticky-sidebar.js"></script>
    <script src="/assets/disto/js/aos.js"></script>
    <script src="/assets/disto/js/custom.js"></script>
</body>

</html>
