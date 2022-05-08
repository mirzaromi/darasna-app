<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Generate PDF From View</title>
    <style>
        @font-face {
            font-family: Arial;
            src: url(template/fonts/Arial Regular.ttf);
        }

        body {
            /* background-image: url('/assets/image/LOGO DARASNA NETWORK BY HERI AULIA R .png'); */
            font-family: Arial;
        }

    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>{!! $isi !!}</p>
    
    {{-- <img src="/assets/image/LOGO DARASNA NETWORK BY HERI AULIA R FLAT 1.png" alt=""> --}}
    <img src="" alt="">
</body>

</html>
