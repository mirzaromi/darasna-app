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

                                <h1 class="crew-heading">Crew Darasna Network</h1>
                                <div class="row crew-grid">
                                    <div class="col">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row crew-grid">
                                    <div class="col">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row crew-grid">
                                    <div class="col-md-3">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row crew-grid">
                                    <div class="col-md-4">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="crew-flex">
                                            <div class="crew-circle"></div>
                                            <h2 class="crew-heading-name">Gus Muhib</h2>
                                            <h6 class="crew-heading-position">Direktur Utama</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
