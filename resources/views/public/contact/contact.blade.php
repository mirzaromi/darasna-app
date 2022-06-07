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
                                    <h1 class="crew-heading">Contact Us</h1>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="map-wrapper">
                                                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.4547886045098!2d112.55021901546344!3d-7.634141177620122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7876e6f4177eb9%3A0x4775678632a1abfa!2sINSTITUT%20KH.%20ABDUL%20CHALIM!5e0!3m2!1sid!2sid!4v1651159150674!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 32px">
                                        <div class="col-md-6">
                                            <h4 class="contact-heading">Kontak</h4>
                                            <div class="contact-wrapper">
                                                <h6>Alamat</h6>
                                                <p>Jalan Raya Tirtowening No.17, Bendunganjati, Pacet, Bendorejo, Bendunganjati, Kec. Pacet, Kabupaten Mojokerto, Jawa Timur 61374</p>
                                                <h6>Nomor Telp</h6>
                                                <a href="https://wa.me/6281359495248"><p>+62 813-5949-5248</p></a>
                                                
                                                <h6>Email</h6>
                                                <p>darasna@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="display: flex; justify-content:center">
                                            <img src="/assets/image/LOGO DARASNA NETWORK BY HERI AULIA R .png"
                                                alt="logo darasna" width="50%" >
                                        </div>>
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
