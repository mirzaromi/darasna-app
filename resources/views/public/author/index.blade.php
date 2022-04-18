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
            @include('public.partial.navbar')
            <div class="mobile_menu_overlay"></div>
            <div class="main_title_wrapper jl_na_bg_title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 main_title_col">
                            <div class="jl_cat_mid_title">
                                <h1 class="categories-title title">{{ $authors[0]->nama }}</h1>
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
                                    
                                        @foreach ($posts as $a)
                                            <div class="box jl_grid_layout1 blog_grid_post_style post-4761 post type-post status-publish format-standard has-post-thumbnail hentry category-sports"
                                                data-aos="fade-up">
                                                <div class="post_grid_content_wrapper">
                                                    <div class="image-post-thumb">
                                                        <a href="/post/{{ $a->slug }}" class="link_image featured-thumbnail"
                                                            title="Round white dining table on brown hardwood">
                                                            <img width="780" height="450"
                                                                src="{{ asset('storage/'.$a->foto) }}"
                                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                alt="" />
                                                            <div class="background_over_image"></div>
                                                        </a> <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#36c942" href="#">{{ $a->kategori }}</a></span>
                                                    </div>
                                                    <div class="post-entry-content">
                                                        <div class="post-entry-content-wrapper">
                                                            <div class="large_post_content">
                                                                <h3 class="image-post-title"><a href="/post/{{ $a->slug }}">
                                                                        {{ $a->judul }}</a>
                                                                </h3>
                                                                <span class="jl_post_meta"><span
                                                                        class="jl_author_img_w"><img
                                                                            src="/assets/disto/img/favicon.jpg"
                                                                            width="30" height="30" alt="Anna Nikova"
                                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                            href="#" title="Posts by Anna Nikova"
                                                                            rel="author">{{ $a->nama }}</a></span><span
                                                                        class="post-date"><i
                                                                            class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($a->created_at)->isoFormat('D MMM Y')}}</span></span>
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
            @include('public.partial.footer', ['kategori' => $kategori = App\Models\Post::select('kategori')->distinct()->get()])
        </div>
    </div>
    <div id="go-top"><a href="/assets/disto/#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    @include('public.partial.script')
</body>

</html>
