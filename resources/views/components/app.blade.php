<x-meta>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
<body class="text-gray-500/80 bg-gray-100/80 dark:bg-gradient-to-b from-slate-900 to-slate-800 dark:text-slate-400">
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
    <div class="fixed w-full z-40 py-4 px-6 bg-white/95 dark:bg-slate-900 shadow-2xl shadow-blue-200/40 border-b
        border-blue-100/80 dark:border-0 dark:shadow-slate-800 dark:shadow-sm">
        <div class="max-w-7xl mx-auto">
            <div class="">
                <div class="flex items-center justify-between">
                    <div onclick="location.href='/'" class="cursor-pointer flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 bg-purple-500 text-white p-2 rounded-full
                            inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <p class="text-2xl tracking-widest font-normal text-gray-600/80 dark:text-gray-400 ml-2">bladewind<span class="text-purple-500 font-normal tracking-widest">UI</span></p>
                    </div>
                    <div class="flex justify-end items-center space-x-5">
                        <a href="javascript:toggleThemeMode('c')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg></a>
                        <a href="https://github.com/mkocansey/bladewind" target="_blank" class="hidden ml-6 sm:block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">BladewindUI on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg></a>
                        <a href="#" onclick="animateCSS('.navigation','slideInRight');" class="ml-6 block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 md:hidden"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg></a>
                        <span class="bg-purple-200 opacity-60 rounded-md tracking-wider text-xs py-1 px-2 font-semibold text-black">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-20"></div>
    <div class="md:max-w-7xl mx-auto pt-10">
        <nav class="md:w-64 md:fixed h-0 md:h-screen md:overflow-y-scroll main-nav md:pb-44 invisible md:visible md:pl-6">
            @include('docs/nav')
        </nav>

        <div class="content-area grow sm:ml-64 pb-16">
            <div class="px-6">
                <div class="flex flex-col-reverse sm:flex-row">
                    <div class="grow sm:w-3/4">
                        <h1 class="page-title">{{$page_title??''}}</h1>
                        {{ $slot ?? '' }}
                    </div>
                    <div class="sm:w-1/4 sm:block hidden grow-0 mb-8">
                        <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
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
            current_theme = (current_theme == 'light') ? 'dark' : 'light';
            document.documentElement.removeAttribute('class');
            addToStorage('theme', current_theme);
            changeCss(document.documentElement, current_theme, 'add', true);
        }
        (getFromStorage('theme') == null) ? addToStorage('theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark':'light')) : '';
        changeCss(document.documentElement, getFromStorage('theme'), 'add', true);
    </script>
</body>
</html>
