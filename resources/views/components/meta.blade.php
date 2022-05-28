<html>
    <head>
            <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T58CKRW');</script>
        <!-- End Google Tag Manager -->
        <title>BladewindUI: {{ $title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="tailwindcss, laravel, ui components, blade templates, ui elements, html, css" />
        <meta name="description" content="Super simple but elegant Laravel blade-based UI components using TailwindCSS and vanilla Javascript. All for free!" />
        <link rel="apple-touch-icon" href="{{ asset('assets/images/icon.png') }}" />
        <link rel="icon" href="{{ asset('assets/images/icon.png') }}" />
        <link href="{{ asset('bladewind/css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('bladewind/css/bladewind-ui.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/js/app.js') }}"></script>
        {{ $slot }}
    </head>