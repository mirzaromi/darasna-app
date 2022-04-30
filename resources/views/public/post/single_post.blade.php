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
                                                    <img width="1000" height="668"
                                                        src="{{ asset('storage/' . $post[0]->foto) }}"
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
                                            <div>
                                                <div>
                                                    <button id="like" class="btn-like">Like</button>
                                                    <i class="fa fa-heart-o" style="margin-left: 15px"></i>
                                                    <span id="like_count"> {{ $post[0]->like }}</span>
                                                </div>
                                                <input type="hidden" id="post_id" name="post_id"
                                                    value="{{ $post[0]->id }}">
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


                                        @if ($left != null)
                                            <div class="postnav_left">
                                                <div class="single_post_arrow_content">
                                                    <a href="/post/{{ $left->slug }}" id="prepost">
                                                        {{ $left->judul }} <span class="jl_post_nav_left">
                                                            Previous post</span></a>
                                                </div>
                                            </div>
                                        @endif

                                        @if ($right != null)
                                            <div class="postnav_right">
                                                <div class="single_post_arrow_content">
                                                    <a href="/post/{{ $right->slug }}" id="nextpost">
                                                        {{ $right->judul }}<span class="jl_post_nav_left">
                                                            Next post</span></a>
                                                </div>
                                            </div>
                                        @endif

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

                                                @foreach ($posts as $pst)
                                                    <div class="jl_related_feature_items">
                                                        <div class="jl_related_feature_items_in">
                                                            <div class="image-post-thumb">
                                                                <a href="/post/{{ $pst->slug }}"
                                                                    class="link_image featured-thumbnail"
                                                                    title="{{ $pst->title }}">
                                                                    <img width="780" height="450"
                                                                        src="{{ asset('storage/' . $pst->foto) }}"
                                                                        class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image img_grid_post"
                                                                        alt="" />
                                                                    <div class="background_over_image"></div>
                                                                </a>
                                                            </div>
                                                            <span class="meta-category-small"><a
                                                                    class="post-category-color-text"
                                                                    style="background:#0015ff"
                                                                    href="/category/{{ $pst->kategori }}">{{ $pst->kategori }}</a></span>
                                                            <div class="post-entry-content">
                                                                <h3 class="jl-post-title"><a
                                                                        href="/author/{{ $pst->author->slug }}">
                                                                        {{ $pst->title }}</a></h3>
                                                                <span class="jl_post_meta"><span
                                                                        class="jl_author_img_w"><img
                                                                            src="/assets/disto/img/favicon.jpg"
                                                                            width="30" height="30"
                                                                            alt="{{ $pst->author->slug }}"
                                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                            href="#"
                                                                            title="Posts by {{ $pst->author->slug }}"
                                                                            rel="author">{{ $pst->author->slug }}</a></span><span
                                                                        class="post-date"><i
                                                                            class="fa fa-clock-o">{{ \Carbon\Carbon::parse($pst->created_at)->isoFormat('D MMM Y') }}</i></span></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="clear_2col_related"></div>
                                            </div>

                                        </div>

                                        <!-- Like -->


                                        <!-- comment -->

                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a
                                                        rel="nofollow" id="cancel-comment-reply-link" href="#"
                                                        style="display:none;">Cancel reply</a></small></h3>
                                            @include('public.post.display_comment', [
                                                'comments' => $post[0]->comment,
                                                'post_id' => $post[0]->id,
                                            ])
                                            <form action="{{ route('comment.store') }}" method="post"
                                                id="commentform" class="comment-form">
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
                        @include('public.partial.side')
                        <!-- end sidebar -->
                    </div>
                </div>
            </section>
            <!-- end content -->
            <!-- Start footer -->
            @include('public.partial.footer')
            @include('public.partial.script')

            <script>
                const btn = document.querySelector('#like');
                const post_id = document.querySelector('#post_id');
                const like_count = document.querySelector('#like_count');
                const count = parseInt(like_count.textContent);

                btn.addEventListener('click', function() {

                    // console.log(this.textContent);
                    fetch('/admin/post/like?post_id=' + post_id.value + '&like=' + this.textContent)
                        .then(response => response.json())
                        .then(data => like_count.innerHTML = data.like_count);
                    if (this.textContent == 'Like') {
                        this.textContent = 'liked';
                    } else {
                        this.textContent = 'Like';
                    }
                    this.classList.toggle("liked");
                    // console.log(this.textContent);

                });
            </script>
            <script>
                console.log("{{ $post[0]->judul }}");
                const post = document.querySelector('.post_content');
                console.log(post.children[4].innerHTML);
                const pNode = document.createElement('p');

                const newNode = document.createElement('img');
                newNode.className = "size-full wp-image-4866 alignnone";

                newNode.setAttribute('src', "{{ asset('storage/' . $post[0]->foto_horizontal) }}");


                newNode.setAttribute('width', '1920');
                newNode.setAttribute('height', '1000');

                pNode.appendChild(newNode);

                post.children["{{ $post[0]->before_parag }}"].parentNode.insertBefore(pNode, post.children[
                    "{{ $post[0]->before_parag }}"].nextSibling);

                const img2 = document.createElement('img');
                img2.className = "wp-image-4861 alignleft";
                img2.setAttribute('src', "{{ asset('storage/'.$post[0]->foto_vertical) }}");
                img2.setAttribute('width', '338');
                img2.setAttribute('height', '423');

                const pImg = post.children["{{ $post[0]->on_parag }}"];
                pImg.insertBefore(img2, pImg.firstChild);
            </script>
</body>

</html>
