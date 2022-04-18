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
                                                        <a href="/post/{{ $p->slug }}"
                                                            class="link_image featured-thumbnail"
                                                            title="{{ $p->judul }}">
                                                            <img width="780" height="450"
                                                                src="{{ asset('storage/' . $p->foto) }}"
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
                                                                style="background:#1232b1" @endswitch
                                                                href="/category/{{ $p->kategori }}">{{ $p->kategori }}</a></span></i></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <div class="post-entry-content-wrapper">
                                                            <div class="large_post_content">
                                                                <h3 class="image-post-title"><a
                                                                        href="/post/{{ $p->slug }}">
                                                                        {{ $p->judul }}</a></h3>
                                                                <span class="jl_post_meta"><span
                                                                        class="jl_author_img_w"><img
                                                                            src="/assets/disto/img/favicon.jpg"
                                                                            width="30" height="30"
                                                                            alt="{{ $p->author->nama }}"
                                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                            href="/author/{{ $p->author->slug }}"
                                                                            title="Posts by {{ $p->author->nama }}"
                                                                            rel="author">{{ $p->author->nama }}</a></span><span
                                                                        class="post-date"><i
                                                                            class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($p->created_at)->isoFormat('D MMM Y') }}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{ $posts->links('vendor.pagination.default') }}
                                </div>
                            </div>
                            <!-- start sidebar -->
                            @include('public.partial.side', [
                                'kategori' => App\Models\Post::select('kategori')->distinct()->get(),
                                'posts' => App\Models\Post::latest()->take(4)->get(),
                                'favs' => App\Models\Post::orderBy('like')->take(4)->get(),
                            ])
                            <!-- end sidebar -->
                        </div>
                    </div>
                </div>
                <!-- end content -->
                <!-- Start footer -->
                @include('public.partial.footer', [
                    'kategori' => ($kategori = App\Models\Post::select('kategori')->distinct()->get()),
                ])
                <!-- End footer -->
        </div>
    </div>
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    @include('public.partial.script')
</body>

</html>
