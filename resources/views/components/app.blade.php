<x-meta>
    <script src="{{ asset('bladewind/js/helpers.js') }}" type="text/javascript"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
    <body class="text-gray-500/80 dark:bg-gray-800 dark:text-slate-400">

        <div class="fixed w-full z-40 py-4 px-6 bg-white/95 dark:bg-slate-900 shadow-2xl shadow-blue-200/40 border-b border-blue-100/80 dark:border-0 dark:shadow-slate-800">
            <div class="max-w-7xl mx-auto">
                <div class="">
                    <div class="flex items-center justify-between">
                        <div onclick="location.href='/'" class="cursor-pointer flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 bg-purple-500 text-white p-2 rounded-full inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <p class="text-2xl tracking-widest font-normal text-gray-600/80 dark:text-gray-400 ml-2">bladewind<span class="text-purple-500 font-normal tracking-widest">UI</span></p>
                        </div>
                        <div class="flex justify-end items-center space-x-5">
                            <a href="javascript:toggleThemeMode('c')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg></a>
                            <a href="https://github.com/mkocansey/bladewind" target="_blank" class="ml-6 block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">BladewindUI on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="h-20"></div>
        <div class="max-w-7xl mx-auto pt-14">
            <nav class="w-64 fixed h-screen overflow-y-scroll main-nav pb-44">
                <h5 class="mb-3 font-semibold text-slate-900 dark:text-slate-600/90">Getting Started</h5></li>
                <div class="space-y-3">
                <div class="flex items-center installation"><div class="dot"></div><a href="/">Installation</a></div>
                    <div class="flex items-center customization"><div class="dot"></div><a href="/customization">Customization</a></div>
                </div>
                
                <h5 class="mb-3 mt-10 font-semibold text-slate-800 dark:text-slate-600/90">Components</h5></li>
                <div class="space-y-3">
                    <div class="flex items-center component-alert"><div class="dot"></div><a href="/component/alert">Alert</a></div>
                    <div class="flex items-center component-avatar"><div class="dot"></div><a href="/component/avatar">Avatar</a></div>
                    <div class="flex items-center component-button"><div class="dot"></div><a href="/component/button">Button</a></div>
                    <div class="flex items-center component-card"><div class="dot"></div><a href="/component/card">Card</a></div>
                    <div class="flex items-center component-centered-content"><div class="dot"></div><a href="/component/centered-content">Centered Content</a></div>
                    <div class="flex items-center component-checkbox"><div class="dot"></div><a href="/component/checkbox">Checkbox</a></div>
                    <div class="flex items-center component-datepicker"><div class="dot"></div><a href="/component/datepicker">Datepicker</a></div>
                    <div class="flex items-center component-dropdown"><div class="dot"></div><a href="/component/dropdown">Dropdown</a></div>
                    <div class="flex items-center component-empty-state"><div class="dot"></div><a href="/component/empty-state">Empty State</a></div>
                    <div class="flex items-center component-filepicker"><div class="dot"></div><a href="/component/filepicker">Filepicker</a></div>
                    <div class="flex items-center component-hlg"><div class="dot"></div><a href="/component/horizontal-line-graph">Horizontal Line Graph</a></div>
                    <div class="flex items-center component-list"><div class="dot"></div><a href="/component/list-view">List View</a></div>
                    <div class="flex items-center component-modal"><div class="dot"></div><a href="/component/modal">Modal</a></div>
                    <div class="flex items-center component-notification"><div class="dot"></div><a href="/component/notification">Notification</a></div>
                    <div class="flex items-center component-pagination hidden"><div class="dot"></div><a href="/component/pagination" class="opacity-40">Pagination</a></div>
                    <div class="flex items-center component-process-indicator"><div class="dot"></div><a href="/component/process-indicator">Process Indicator</a></div>
                    <div class="flex items-center component-progress-bar"><div class="dot"></div><a href="/component/progress-bar">Progress Bar</a></div>
                    <div class="flex items-center component-radio-button"><div class="dot"></div><a href="/component/radio-button">Radio Button</a></div>
                    <div class="flex items-center component-rating"><div class="dot"></div><a href="/component/rating">Rating</a></div>
                    <div class="flex items-center component-statistic"><div class="dot"></div><a href="/component/statistic">Statistic</a></div>
                    <div class="flex items-center component-spinner"><div class="dot"></div><a href="/component/spinner">Spinner</a></div>
                    <div class="flex items-center component-tab"><div class="dot"></div><a href="/component/tab">Tab</a></div>
                    <div class="flex items-center component-table"><div class="dot"></div><a href="/component/table">Table</a></div>
                    <div class="flex items-center component-tag"><div class="dot"></div><a href="/component/tag">Tag</a></div>
                    <div class="flex items-center component-textbox"><div class="dot"></div><a href="/component/textbox">Textbox</a></div>
                    <div class="flex items-center component-textarea"><div class="dot"></div><a href="/component/textarea">Textarea</a></div>
                    <div class="flex items-center component-tooltip hidden"><div class="dot"></div><a href="/component/tooltip">Tooltip</a></div>
                    <div class="flex items-center component-toggle"><div class="dot"></div><a href="/component/toggle">Toggle</a></div>
                </div>

                <h5 class="mb-3 my-10 font-semibold text-slate-900 dark:text-slate-600/90">Extras</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="/extra/app-layout">App Layouts</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="/extra/error-pages">Error Pages</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="/extra/spa">Single Page Technique</a></div>
                    {{-- <div class="flex items-center"><div class="dot"></div><a href="/layout/slideout-panel">Slideout Panel</a></div> --}}
                </div>
            </nav>

            <div class="content-area grow ml-64"> 
                <div class="px-10 pt-2">
                    {{ $slot ?? '' }}
                </div>
            </div>

        </div>

    <div class="footer">
        
    </div>
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
            changeCss(document.documentElement, current_theme, 'add', true);
            addToStorage('theme', current_theme);
        }
        (getFromStorage('theme') == null) ? addToStorage('theme', 'light') : changeCss(document.documentElement, getFromStorage('theme'), 'add', true);
    </script>
</body>
</html>