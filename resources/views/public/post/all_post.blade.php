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
            <div class="jl_post_loop_wrapper jl_grid_4col_home">
                <div class="container" id="wrapper_masonry">
                    <div class="row">
                        <div class="col-12">
                            <div class="jl_wrapper_cat">
                                <div class="container">
                                    <div class="jl_grid_mian loop-large-post">
                                        <div
                                            class="box jl_grid_layout1 blog_large_post_style appear_animation post-4761 post type-post status-publish format-standard has-post-thumbnail hentry category-sports">
                                            <div class="image-post-thumb">
                                                <a href="/post/{{ $first_post->slug }}" class="link_image featured-thumbnail"
                                                    title="{{ $first_post->judul }}">
                                                    <img width="" height="" src="{{ $first_post->foto }}"
                                                        class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                            </div>
                                            <span class="meta-category-small"><a class="post-category-color-text"
                                                    style="background: #36c942" href="/category/{{ $first_post->kategori }}">{{ $first_post->kategori }}</a></span>
                                            <div class="jl_post_title_top jl_large_format">
                                                <h3 class="image-post-title">
                                                    <a href="/post/{{ $first_post->slug }}">
                                                        {{ $first_post->judul }}</a>
                                                </h3>
                                                <span class="single-post-meta-wrapper"><span
                                                        class="post-author"><span><img src="/assets/disto/img/favicon.jpg"
                                                                width="30" height="30" alt="{{ $first_post->author->nama }}"
                                                                class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                href="/author/{{ $first_post->author->slug }}" title="Posts by {{ $first_post->author->nama }}" rel="author">{{ $first_post->author->nama }}</a></span></span><span
                                                                class="post-date updated"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($first_post->created_at)->isoFormat('D MMM Y')}}</span><span class="meta-comment"><a href="#"><i
                                                                    class="fa fa-comment"></i>0</a></span></span>
                                            </div>
                                            <div class="post-entry-content">
                                                <div class="post-entry-content-wrapper">
                                                    <div class="large_post_content">
                                                        <p>
                                                            {!! Str::of($first_post->isi)->words(50) !!}
                                                            <a href="/post/{{ $first_post->slug }}">Baca lagi...</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-sidebar">
                            <div class="jl_wrapper_cat">
                                <div id="content_masonry">
                                    @foreach ($posts as $p)
                                    <div class="box jl_grid_layout1 blog_grid_post_style post-4761 post type-post status-publish format-standard has-post-thumbnail hentry category-sports"
                                        data-aos="fade-up">
                                        <div class="post_grid_content_wrapper">
                                            <div class="image-post-thumb">
                                                <a href="/post/{{ $p->slug }}" class="link_image featured-thumbnail"
                                                    title="{{ $p->judul }}">
                                                    <img width="780" height="450" src="{{ $p->foto }}"
                                                        class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                        alt="" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                                <span class="meta-category-small"><a class="post-category-color-text"
                                                        style="background:#36c942" href="/category/{{ $p->kategori }}">{{ $p->kategori }}</a></span>
                                            </div>
                                            <div class="post-entry-content">
                                                <div class="post-entry-content-wrapper">
                                                    <div class="large_post_content">
                                                        <h3 class="image-post-title"><a href="/post/{{ $p->slug }}">
                                                                {{ $p->judul }}</a></h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                                                    src="/assets/disto/img/favicon.jpg" width="30"
                                                                    height="30" alt="{{ $p->author->nama }}"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="/author/{{ $p->author->slug }}" title="Posts by {{ $p->author->nama }}"
                                                                    rel="author">{{ $p->author->nama }}</a></span><span
                                                                class="post-date"><i class="fa fa-clock-o"></i>{{\Carbon\Carbon::parse($p->created_at)->isoFormat('D MMM Y')}}9</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>                            
                            {{ $posts->links('vendor.pagination.default') }}
                            {{-- @if($posts->hasPages())
                            <nav class="jellywp_pagination">
                                <ul class="page-numbers">
                                    @if ($posts->onFirstPage())
                                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a class="next page-numbers" href=""><i
                                        class="fa fa-long-arrow-left"></i></a></li>
                                    @else
                                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a class="next page-numbers" href="{{ $posts->previousPageUrl() }}"><i
                                        class="fa fa-long-arrow-left"></i></a></li>
                                    @endif
                                    
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><span class="page-numbers dots">&hellip;</span></li>
                                    <li><a class="page-numbers" href="#">6</a></li>
                                    <li><a class="next page-numbers" href="#"><i
                                                class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                            @endif --}}
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
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
    </div>
    @include('public.partial.script')
</body>

</html>
