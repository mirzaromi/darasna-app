<footer id="footer-container" class=" enable_footer_columns_dark">
    <div class="footer-columns">
        <div class="container">
            <div class="row">
                <div class="col-md-4"> <span class="jl_none_space"></span>
                    <div id="disto_about_us_widget-3" class="widget jellywp_about_us_widget">
                        <div class="widget_jl_wrapper about_widget_content"> <span class="jl_none_space"></span>
                            <div class="widget-title">
                                <h2>About us</h2>
                            </div>
                            <div class="jellywp_about_us_widget_wrapper">
                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                                    imperdiet eu, iaculis a sem imperdiet ut imperdiet.</p>
                                <div class="social_icons_widget">
                                    <ul class="social-icons-list-widget icons_about_widget_display">
                                        <li><a href="https://www.instagram.com/darasna.network/" class="instagram"
                                                target="_blank"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://www.youtube.com/channel/UCGcEdI1XD9xZiH5owTdx2eQ"
                                                class="youtube" target="_blank"><i
                                                    class="fa fa-youtube"></i></a>
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
                                <h2>Location</h2>
                            </div>
                            <div>
                                <ul class="feature-post-list recent-post-widget">
                                    <li>
                                        <p style="color: #999; margin: 0px">Jl. Raya Bendunganjati No 17, Pacet,
                                            Mojokerto, Jawa Timur 61374 • +62 321 6855722 | 085784661611</p>
                                    </li>
                                    <li>
                                        <a href="mailto:darasna@gmail.com" target="_blank">
                                            <p style="color: #999">darasna@gmail.com</p>
                                        </a>
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
                            @foreach ($kategori as $k)
                                <li class="cat-item cat-item-2"><a href="/category/{{ $k->kategori }}"
                                        title="Sample category description goes here">{{ $k->kategori }}</a>
                                    <span>{{ App\Models\Post::where('kategori', $k->kategori)->count() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom enable_footer_copyright_dark">
        <div class="container">
            <div class="row bottom_footer_menu_text">
                <div class="col-md-6 footer-left-copyright">© Copyright 2022 Darasna Network. All Rights Reserved
                    Powered by Darasna Network</div>
                <div class="col-md-6 footer-menu-bottom">
                    <ul id="menu-footer-menu" class="menu-footer">
                        <li class="menu-item menu-item-10"><a href="/profile/about-us">About Us</a>
                        </li>
                        <li class="menu-item menu-item-12"><a href="/profile/crew">Crew</a>
                        </li>
                        <li class="menu-item menu-item-13"><a href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
