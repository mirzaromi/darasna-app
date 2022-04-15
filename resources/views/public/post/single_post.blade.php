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
            <div class="mobile_menu_overlay"></div><!-- begin content -->
            <section id="content_main" class="clearfix jl_spost">
                <div class="container">
                    <div class="row main_content">
                        <div class="col-md-8  loop-large-post" id="content">
                            <div class="widget_container content_page">
                                <!-- start post -->
                                <div class="post-2808 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-gaming tag-morning tag-relaxing"
                                    id="post-2808">
                                    <div class="single_section_content box blog_large_post_style">
                                        <div class="jl_single_style2">
                                            <div
                                                class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                                <span class="meta-category-small single_meta_category"><a
                                                        class="post-category-color-text" style="background:#0015ff"
                                                        href="#">{{ $post[0]->kategori }}</a></span>
                                                <h1 class="single_post_title_main">
                                                    {{ $post[0]->judul }} </h1>
                                                <span class="single-post-meta-wrapper"><span
                                                        class="post-author"><span><img
                                                                src="/assets/disto/img/favicon.jpg" width="50"
                                                                height="50" alt="{{ $post[0]->author->nama }}"
                                                                class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo" /><a
                                                                href="#" title="Posts by {{ $post[0]->author->nama }}"
                                                                rel="author">{{ $post[0]->author->nama }}</a></span></span><span
                                                        class="post-date updated"><i class="fa fa-clock-o"></i>Dec
                                                        23, 2016</span><span class="meta-comment"><i
                                                            class="fa fa-comment"></i><a href="#">0
                                                            Comment</a></span><a href="#" class="jm-post-like"
                                                        data-post_id="2808" title="Like"><i
                                                            class="fa fa-heart-o"></i>4</a><span
                                                        class="view_options"><i
                                                            class="fa fa-eye"></i>4.8k</span></span>
                                            </div>
                                            <div class="single_content_header jl_single_feature_below">
                                                <div class="image-post-thumb jlsingle-title-above">
                                                    <img width="1000" height="668" src="{{ $post[0]->foto }}"
                                                        class="attachment-disto_justify_feature size-disto_justify_feature wp-post-image"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            {!! $post[0]->isi !!}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="single_tag_share">
                                            <div class="tag-cat">
                                                <ul class="single_post_tag_layout">
                                                    <li><a href="#" rel="tag">Gaming</a></li>
                                                    <li><a href="#" rel="tag">morning</a></li>
                                                    <li><a href="#" rel="tag">Relaxing</a></li>
                                                </ul>
                                            </div>

                                            <div class="single_post_share_icons">
                                                Share<i class="fa fa-share-alt"></i></div>
                                        </div>
                                        <div class="single_post_share_wrapper">
                                            <div class="single_post_share_icons social_popup_close"><i
                                                    class="fa fa-close"></i></div>
                                            <ul class="single_post_share_icon_post">
                                                <li class="single_post_share_facebook"><a href="#" target="_blank"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li class="single_post_share_twitter"><a href="#" target="_blank"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="single_post_share_pinterest"><a href="#" target="_blank"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                                <li class="single_post_share_linkedin"><a href="#" target="_blank"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                                <li class="single_post_share_ftumblr"><a href="#" target="_blank"><i
                                                            class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>



                                        <div class="postnav_left">
                                            <div class="single_post_arrow_content">
                                                <a href="#" id="prepost">
                                                    Your job will be perfect if you concentrate <span
                                                        class="jl_post_nav_left">
                                                        Previous post</span></a>
                                            </div>
                                        </div>


                                        <div class="postnav_right">
                                            <div class="single_post_arrow_content">
                                                <a href="#" id="nextpost">
                                                    The most popular photoshop styles of the year <span
                                                        class="jl_post_nav_left">
                                                        Next post</span></a>
                                            </div>
                                        </div>


                                        <div class="auth">
                                            <div class="author-info">
                                                <div class="author-avatar">
                                                    <img src="/assets/disto/img/favicon.jpg" width="165" height="165"
                                                        alt="{{ $post[0]->author->nama }}"
                                                        class="avatar avatar-165 wp-user-avatar wp-user-avatar-165 alignnone photo" />
                                                </div>
                                                <div class="author-description">
                                                    <h5><a href="/author/{{ $post[0]->author->slug }}">
                                                            {{ $post[0]->author->nama }}</a></h5>
                                                    <p>
                                                        welcome Mauris mattis auctor cursus. Phasellus tellus tellus,
                                                        imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus
                                                        nunc in laoreet. Aliquam erat volutpat. Suspendisse vulputate
                                                        porttitor condimentum. </p>

                                                </div>
                                            </div>
                                        </div>



                                        <div class="related-posts">

                                            <h4>
                                                Related Articles </h4>

                                            <div class="single_related_post">


                                                <div class="jl_related_feature_items">
                                                    <div class="jl_related_feature_items_in">
                                                        <div class="image-post-thumb">
                                                            <a href="#" class="link_image featured-thumbnail"
                                                                title="People are enjoy the job that they love">
                                                                <img width="780" height="450"
                                                                    src="/assets/disto/img/780x450.png"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a>
                                                        </div>
                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff"
                                                                href="#">Business</a></span><span
                                                            class="jl_post_type_icon"><i
                                                                class="la la-camera"></i></span>
                                                        <div class="post-entry-content">
                                                            <h3 class="jl-post-title"><a href="#">
                                                                    People are enjoy the job that they love</a></h3>
                                                            <span class="jl_post_meta"><span
                                                                    class="jl_author_img_w"><img
                                                                        src="/assets/disto/img/favicon.jpg" width="30"
                                                                        height="30" alt="Anna Nikova"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="#" title="Posts by Anna Nikova"
                                                                        rel="author">Anna Nikova</a></span><span
                                                                    class="post-date"><i
                                                                        class="fa fa-clock-o"></i>Dec 24,
                                                                    2016</span></span>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="jl_related_feature_items">
                                                    <div class="jl_related_feature_items_in">
                                                        <div class="image-post-thumb">
                                                            <a href="#" class="link_image featured-thumbnail"
                                                                title="Nice photo shooting with hand classic style">
                                                                <img width="780" height="450"
                                                                    src="/assets/disto/img/780x450.png"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a>
                                                        </div>
                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff" href="#">Business</a></span>
                                                        <div class="post-entry-content">
                                                            <h3 class="jl-post-title"><a href="#">
                                                                    Nice photo shooting with hand classic style</a></h3>
                                                            <span class="jl_post_meta"><span
                                                                    class="jl_author_img_w"><img
                                                                        src="/assets/disto/img/favicon.jpg" width="30"
                                                                        height="30" alt="Anna Nikova"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="#" title="Posts by Anna Nikova"
                                                                        rel="author">Anna Nikova</a></span><span
                                                                    class="post-date"><i
                                                                        class="fa fa-clock-o"></i>Dec 24,
                                                                    2016</span></span>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="clear_2col_related"></div>
                                                <div class="jl_related_feature_items">
                                                    <div class="jl_related_feature_items_in">
                                                        <div class="image-post-thumb">
                                                            <a href="#" class="link_image featured-thumbnail"
                                                                title="It’s always fun time and smile in the summer">
                                                                <img width="780" height="450"
                                                                    src="/assets/disto/img/780x450.png"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a>
                                                        </div>
                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff" href="#">Business</a></span>
                                                        <div class="post-entry-content">
                                                            <h3 class="jl-post-title"><a href="#">
                                                                    It’s always fun time and smile in the summer</a>
                                                            </h3>
                                                            <span class="jl_post_meta"><span
                                                                    class="jl_author_img_w"><img
                                                                        src="/assets/disto/img/favicon.jpg" width="30"
                                                                        height="30" alt="Anna Nikova"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="#" title="Posts by Anna Nikova"
                                                                        rel="author">Anna Nikova</a></span><span
                                                                    class="post-date"><i
                                                                        class="fa fa-clock-o"></i>Dec 24,
                                                                    2016</span></span>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="clear_3col_related"></div>
                                                <div class="jl_related_feature_items">
                                                    <div class="jl_related_feature_items_in">
                                                        <div class="image-post-thumb">
                                                            <a href="#" class="link_image featured-thumbnail"
                                                                title="Your job will be perfect if you concentrate">
                                                                <img width="780" height="450"
                                                                    src="/assets/disto/img/780x450.png"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a>
                                                        </div>
                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff" href="#">Business</a></span>
                                                        <div class="post-entry-content">
                                                            <h3 class="jl-post-title"><a href="#">
                                                                    Your job will be perfect if you concentrate</a></h3>
                                                            <span class="jl_post_meta"><span
                                                                    class="jl_author_img_w"><img
                                                                        src="/assets/disto/img/favicon.jpg" width="30"
                                                                        height="30" alt="Anna Nikova"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="#" title="Posts by Anna Nikova"
                                                                        rel="author">Anna Nikova</a></span><span
                                                                    class="post-date"><i
                                                                        class="fa fa-clock-o"></i>Dec 23,
                                                                    2016</span></span>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="clear_2col_related"></div>
                                            </div>

                                        </div>
                                        <!-- comment -->

                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a
                                                        rel="nofollow" id="cancel-comment-reply-link" href="#"
                                                        style="display:none;">Cancel reply</a></small></h3>
                                            @include('public.post.display_comment', [
                                                'comments' => $post[0]->comment,
                                                'post_id' => $post[0]->id,
                                            ])
                                            <form action="{{ route('comment.store') }}" method="post" id="commentform"
                                                class="comment-form">
                                                @csrf
                                                <p class="comment-notes"><span id="email-notes">Your email address
                                                        will not be published.</span> Required fields are marked <span
                                                        class="required">*</span>
                                                </p>
                                                <div class="form-fields row"><span
                                                        class="comment-form-author col-md-4"><input id="author"
                                                            name="user" type="text" value="" size="30"
                                                            placeholder="Fullname"></span>
                                                </div>
                                                <br>
                                                <p class="comment-form-comment">
                                                    <textarea class="u-full-width" id="comment" name="isi" cols="45" rows="8" aria-required="true"
                                                        placeholder="Comment"></textarea>
                                                </p>
                                                <input type="hidden" name="post_id" value="{{ $post[0]->id }}">

                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit"
                                                        class="submit" value="Post Comment">
                                                </p>
                                            </form>
                                        </div><!-- #respond -->

                                    </div>
                                </div>
                                <!-- end post -->
                                <div class="brack_space"></div>
                            </div>
                        </div>

                        <!-- start sidebar -->
                        <div class="col-md-4" id="sidebar">
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
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
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
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
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
                                                        src="/assets/disto/img/favicon.jpg" width="30" height="30"
                                                        alt="Anna Nikova"
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
            </section>
            <!-- end content -->
            <!-- Start footer -->
            @include('public.partial.footer')
</body>

</html>
