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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h1 class="crew-heading">Tentang darasna</h1>
                                            <p style="text-align: justify">Darasna Network dibentuk untuk menyediakan informasi tentang keislaman
                                                yang sumbernya dapat dipercaya, jelas serta akurat. sebab berdirinya
                                                darasna network ini adalah cita-cita dari seorang tokoh yaitu Dr.
                                                Mauhibur Rakhman, Lc, MIRKH yang menginginkan untuk membuat suatu media
                                                keislaman rujukan yang mudah diakses dan mudah dipahami. dari cita-cita
                                                itulah terbentuklah platform ini yang diresmikan pada Sabtu, 2 April
                                                2022. Platform Darasna Network ini sangat luas. Tidak hanya diakses
                                                diindonesia saja melainkan dapat diakses diluar negeri</p>
                                        </div>
                                        <div class="col-md-6" style="display: flex; justify-content:center">
                                            <img src="/assets/image/LOGO DARASNA NETWORK BY HERI AULIA R .png"
                                                alt="logo darasna" width="50%" >
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 5vh">
                                        <div class="col-md-6" style="display: flex; justify-content:center">
                                            <img src="/assets/image/Gus Muhib.png"
                                                alt="logo darasna" width="80%" >
                                        </div>
                                        <div class="col-md-6">
                                            <h1 class="crew-heading">Visi Darasna Network</h1>
                                            <p style="text-align: justify">Kami adalah platform keislaman rujukan yang memiliki sumber terpercaya. Kami memiliki visi "Menjadi platform keislaman rujukan". visi yang akan membawa kami untuk selalu memberikan informasi yang terbaik untuk anda. terbaik dalam sumber maupun penyediaan informasinya. visi tersebut akan kami wujudkan melalui misi kami yang berbunyi "menyediakan konten=konten keislaman yang mudah diakses dan mudah dipahami oleh berbagai kalangan". Kami akan terus mengembangkan diri untuk menjadi yang terbaik. Kami meyakini bahwa untuk menjadi yang terbaik kami harus berkompetisi dengan diri sendiri. Dengan itu kami akan selalu memberikan persembahan konten-konten keislaman yang baik dan lebih baik lagi<p>
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
