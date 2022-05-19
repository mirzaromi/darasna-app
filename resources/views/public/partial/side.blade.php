<div class="col-md-4" id="sidebar">
    <div id="disto_category_image_widget_register-5" class="widget jellywp_cat_image">
        <div class="wrapper_category_image">
            <div class="category_image_wrapper_main">
                @foreach ($kategori as $k)
                    <div class="category_image_bg_image"
                        style="background-image: url('img/400x280.png');"><a
                            class="category_image_link" id="category_color_2"
                            href="/category/{{ $k->kategori }}"><span
                                class="jl_cm_overlay"><span
                                    class="jl_cm_name">{{ $k->kategori }}</span><span
                                    class="jl_cm_count">{{ App\Models\Post::where('kategori', $k->kategori)->count() }}</span></span></a>
                        <div class="category_image_bg_overlay" style="background: #ed1c1c;">
                        </div>
                    </div>
                @endforeach
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
                    @foreach ($posts as $p)
                        <li>
                            <a href="/post/{{ $p->slug }}"
                                class="jl_small_format feature-image-link image_post featured-thumbnail"
                                title="{{ $p->judul }}">
                                <img width="120" height="120" src="{{ asset('storage/'.$p->foto) }}"
                                    class="attachment-disto_small_feature size-disto_small_feature wp-post-image img_pop"
                                    alt="" />
                                <div class="background_over_image"></div>
                            </a>
                            <div class="item-details">
                                <span class="meta-category-small"><a
                                        class="post-category-color-text"
                                        style="background:#d800f9"
                                        href="/category/{{ $p->kategori }}">{{ $p->kategori }}</a></span>
                                <h3 class="feature-post-title"><a
                                        href="/post/{{ $p->slug }}">
                                        {{ $p->judul }}</a></h3>
                                <span class="post-meta meta-main-img auto_image_with_date">
                                    <span class="post-date"><i
                                            class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($p->created_at)->isoFormat('D MMM Y') }}</span></span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <span class="jl_none_space"></span>
        </div>
    </div><span class="jl_none_space"></span>
    <div id="disto_recent_large_slider_widgets-5" class="widget jl_widget_slider">
        <div class="slider_widget_post jelly_loading_pro">
            @foreach ($favs as $f)
                <div class="recent_post_large_widget"> <span
                        class="image_grid_header_absolute"
                        style="background-image: url('{{ asset('storage/'.$f->foto) }}')"></span>
                    <a href="/post/{{ $f->slug }}" class="link_grid_header_absolute"
                        title="{{ $f->judul }}"></a> <span class="meta-category-small"><a
                            class="post-category-color-text" style="background:#ed1c1c"
                            href="/category/{{ $f->kategori }}">{{ $f->kategori }}</a></span>
                    <div class="wrap_box_style_main image-post-title">
                        <h3 class="image-post-title"><a href="/post/{{ $f->slug }}">
                                {{ $f->judul }}</a></h3>
                        <span class="jl_post_meta"><span class="jl_author_img_w"><img
                                    src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                    alt="{{ $f->author->nama }}"
                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                    href="#" title="Posts by {{ $f->author->nama }}"
                                    rel="author">{{ $f->author->nama }}</a></span><span
                                class="post-date"><i
                                    class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($f->created_at)->isoFormat('D MMM Y') }}</span></span>
                    </div>
                </div>
            @endforeach
        </div>
        <span class="jl_none_space"></span>
    </div>
</div>