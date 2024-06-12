<x-meta>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
<body class="body text-gray-500/80 bg-white dark:bg-dark-700 dark:text-dark-400">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58CKRW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="w-[280px] z-50 py-6 bg-white/95 border-l border-gray-200 fixed right-0 top-0 h-screen shadow-2xl
        hidden sm:hidden dark:bg-dark-900 dark:border-gray-800 shadow-blue-300 dark:shadow-slate-800 overflow-y-scroll navigation">
        <div class="text-right cursor-pointer"
             onclick="animateCSS('.navigation','slideOutRight').then((message) => { hide('.navigation'); });">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline mr-4" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        @include('docs/nav')
    </nav>
    <x-topbar />

    <div class="h-16"></div>
    <div class="sm:max-w-7xl mx-auto sm:pt-4 pt-5 sm:flex sm:flex-row sm:rtl:flex-row-reverse bg-white dark:bg-dark-700 doc-layout">
        <nav class="sm:w-56 sm:fixed h-0 sm:h-screen sm:overflow-y-scroll main-nav sm:pb-44 invisible sm:visible">
            @include('docs/nav')
            <div class="h-3"></div>
            <iframe src="https://github.com/sponsors/mkocansey/button" title="Sponsor mkocansey" height="32" width="92%" style="border: 0; border-radius: 6px;"></iframe>
        </nav>

        <div class="content-area grow sm:ml-60 pb-16">
                <div class="flex flex-col-reverse sm:flex-row sm:rtl:flex-row-reverse">
                    <div class="grow sm:w-3/4 sm:py-5 sm:px-5 p-5 rounded-md adoc">
                        <h1 class="page-title">{{$page_title??''}}</h1>
                        {{ $slot ?? '' }}
                    </div>
                    <div class="sm:w-1/4 sm:block hidden grow-0 mb-8">
                        <nav class="side-nav sm:pl-8 sm:rtl:pr-8 sm:fixed sm:h-screen sm:overflow-y-scroll border-dashed border-l border-l-slate-200 dark:border-l-slate-700 pt-8">
                            <h5 class="text-slate-500 dark:text-slate-300 uppercase font-light text-xs tracking-wider !m-0">Sections</h5>
                            <div class="space-y-2.5 pt-4 -ml-3.5 pr-4">
                                {{ $side_nav ?? '' }}
                            </div>
                            @include('docs/ads')
                        </nav>
                    </div>
                </div>
        </div>
    </div>

    <div class="footer"></div>

    {{ $scripts ?? '' }}
    <script>
        switchDirection = (el) => {
            changeCss('.bw-tgl-sp-rtltr', 'rtl:flex-row-reverse');
            (el.checked) ? domEl('html').setAttribute('dir', 'rtl') : domEl('html').setAttribute('dir', 'ltr');
        }
    </script>
</body>
</html>
