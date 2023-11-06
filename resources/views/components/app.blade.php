<x-meta>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
<body class="text-gray-500/80 bg-slate-100/80  dark:bg-gradient-to-b from-slate-900 to-slate-800 dark:text-slate-400">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58CKRW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="w-[280px] z-50 py-6 bg-white/95 border-l border-gray-200 fixed right-0 top-0 h-screen shadow-2xl
        hidden sm:hidden dark:bg-gray-900 dark:border-gray-800 shadow-blue-300 dark:shadow-slate-800 overflow-y-scroll navigation">
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

    <div class="h-20"></div>
    <div class="sm:max-w-7xl mx-auto pt-10">
        <nav class="sm:w-64 sm:fixed h-0 sm:h-screen sm:overflow-y-scroll main-nav sm:pb-44 invisible sm:visible sm:pl-6 sm:rtl:pr-6">
            @include('docs/nav')
        </nav>

        <div class="content-area grow sm:ml-64 pb-16 sm:rtl:mr-64">
            <div class="px-6">
                <div class="flex flex-col-reverse sm:flex-row">
                    <div class="grow sm:w-3/4">
                        <h1 class="page-title">{{$page_title??''}}</h1>
                        {{ $slot ?? '' }}
                    </div>
                    <div class="sm:w-1/4 sm:block hidden grow-0 mb-8">
                        <nav class="sm:pl-8 sm:rtl:pr-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                            <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                            <div class="space-y-2">
                                {{ $side_nav ?? '' }}
                            </div>
                            @include('docs/ads')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer"></div>

    {{ $scripts ?? '' }}
    <script>
        addToStorage = (key, val, storageType = 'localStorage') => {
            if(window.localStorage || window.sessionStorage){
                (storageType === 'localStorage') ?
                    localStorage.setItem(key, val) : sessionStorage.setItem(key, val);
            }
        }

        getFromStorage = (key, storageType = 'localStorage') => {
            if(window.localStorage || window.sessionStorage){
                return (storageType === 'localStorage') ?
                    localStorage.getItem(key) : sessionStorage.getItem(key);
            }
        }

        removeFromStorage = (key, storageType = 'localStorage') => {
            if(window.localStorage || window.sessionStorage){
                (storageType === 'localStorage') ?
                    localStorage.removeItem(key) : sessionStorage.removeItem(key);
            }
        }

        toggleThemeMode = () => {
            let current_theme = getFromStorage('theme');
            current_theme = (current_theme === 'light') ? 'dark' : 'light';
            document.documentElement.removeAttribute('class');
            addToStorage('theme', current_theme);
            changeCss(document.documentElement, current_theme, 'add', true);
        }
        let initial_theme = (getFromStorage('theme') == null) ?
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark':'light') : 'light';
        addToStorage('theme', initial_theme);
        changeCss(document.documentElement, initial_theme, 'add', true);
    </script>
    <script>
        Prism.plugins.toolbar.registerButton('copy-to-clipboard', function (env) {
            var linkCopy = document.createElement('a');
            linkCopy.textContent = 'Copy';
            linkCopy.addEventListener('click', function () {
                Prism.plugins.toolbar.copyToClipboard(env);
            });

            return linkCopy;

        });
    </script>
</body>
</html>
