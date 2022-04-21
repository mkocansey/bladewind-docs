<html>
    <head>
        <title>BladewindUI: {{ $title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="tailwindcss, laravel, ui components, blade templates, ui elements, html, css" />
        <meta name="description" content="Super simple but elegant Laravel blade-based UI components using TailwindCSS and vanilla Javascript. All for free!" />
        <link rel="apple-touch-icon" href="{{ asset('assets/images/icon.png') }}" />
        <link rel="icon" href="{{ asset('assets/images/icon.png') }}" />
        <link href="{{ asset('bladewind/css/bladewind-ui.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
        <script>var notification_timeout,user_function,el_name,momo_obj,delete_obj;var dropdownIsOpen = false;</script>
    {{ $slot }}
    </head>