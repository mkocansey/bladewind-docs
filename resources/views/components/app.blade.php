<x-meta>
    <script src="{{ asset('bladewind/js/helpers.js') }}" type="text/javascript"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
    <body class="text-gray-500/80 bg-gray-200/30">

        <div class="fixed w-full z-40 py-4 px-6 bg-white/95 shadow-2xl shadow-blue-200/40 border-b border-blue-100/80">
            <div class="max-w-7xl mx-auto">
                <div class="">
                    <div class="flex items-center justify-between">
                        <div onclick="location.href='/'" class="cursor-pointer flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 bg-purple-500 text-white p-2 rounded-full inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                            <p class="text-2xl tracking-wider font-semibold text-gray-600/80 ml-2">bladewind<span class="text-purple-500 font-bold">UI</span></p>
                        </div>
                        <div class="flex justify-end items-center space-x-5 text-gray-400">
                            <span class="h-10 h-9 h-8 h-7 h-6 h-5 h-4 h-3 h-2 h-1"></span>
                            <a href="javascript:showModal('change-language')" data-tooltip="{{ __('copy.CHANGE_LANGUAGE') }}" data-inverted="" data-position="left center">
                                @if(App::getLocale() == 'en') <i class="uk flag"></i> @else <i class="fr flag"></i> @endif 
                            </a>
                            
                            <a href=""><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="stroke-slate-400 dark:stroke-slate-500"></path><path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-slate-400 dark:stroke-slate-500"></path></svg></a>
                            <a href="https://github.com/mkocansey/bladewind" target="_blank" class="ml-6 block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">BladewindUI on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="h-20"></div>
        <div class="max-w-7xl mx-auto pt-14">
            <nav class="w-64 fixed h-screen overflow-y-scroll main-nav pb-44">
                <h5 class="mb-3 font-semibold text-slate-900 dark:text-slate-200">Getting Started</h5></li>
                <div class="space-y-3">
                <div class="flex items-center installation"><div class="dot"></div><a href="/">Installation</a></div>
                    <div class="flex items-center customization"><div class="dot"></div><a href="/customization">Customization</a></div>
                </div>
                
                <h5 class="mb-3 mt-7 font-semibold text-slate-800 dark:text-slate-200">Components</h5></li>
                <div class="space-y-3">
                    <div class="flex items-center component-alert"><div class="dot"></div><a href="/component/alert">Alert</a></div>
                    <div class="flex items-center component-avatar"><div class="dot"></div><a href="/component/avatar">Avatar</a></div>
                    <div class="flex items-center component-button"><div class="dot"></div><a href="/component/button">Button</a></div>
                    <div class="flex items-center component-card"><div class="dot"></div><a href="/component/card">Card</a></div>
                    <div class="flex items-center component-checkbox"><div class="dot"></div><a href="/component/checkbox">Checkbox</a></div>
                    <div class="flex items-center component-datepicker"><div class="dot"></div><a href="/component/datepicker">Datepicker</a></div>
                    <div class="flex items-center component-dropdown"><div class="dot"></div><a href="/component/dropdown">Dropdown</a></div>
                    <div class="flex items-center component-empty-state"><div class="dot"></div><a href="/component/empty-state">Empty State</a></div>
                    <div class="flex items-center component-filepicker"><div class="dot"></div><a href="/component/filepicker">Filepicker</a></div>
                    <div class="flex items-center component-list"><div class="dot"></div><a href="/component/list">List</a></div>
                    <div class="flex items-center component-modal"><div class="dot"></div><a href="/component/modal">Modal</a></div>
                    <div class="flex items-center component-notification"><div class="dot"></div><a href="/component/notification">Notification</a></div>
                    <div class="flex items-center component-pagination"><div class="dot"></div><a href="/component/pagination" class="opacity-40">Pagination</a></div>
                    <div class="flex items-center component-process-indicator"><div class="dot"></div><a href="/component/process-indicator">Process Indicator</a></div>
                    <div class="flex items-center componentprogress-bar-"><div class="dot"></div><a href="/component/progress-bar">Progress Bar</a></div>
                    <div class="flex items-center component-radio-button"><div class="dot"></div><a href="/component/radio-button">Radio Button</a></div>
                    <div class="flex items-center component-rating"><div class="dot"></div><a href="/component/rating" class="opacity-40">Rating</a></div>
                    <div class="flex items-center component-statistic"><div class="dot"></div><a href="/component/statistic">Statistic</a></div>
                    <div class="flex items-center component-spinner"><div class="dot"></div><a href="/component/spinner">Spinner</a></div>
                    <div class="flex items-center component-tab"><div class="dot"></div><a href="/component/tab">Tab</a></div>
                    <div class="flex items-center component-table"><div class="dot"></div><a href="/component/table">Table</a></div>
                    <div class="flex items-center component-tag"><div class="dot"></div><a href="/component/tag">Tag</a></div>
                    <div class="flex items-center component-textbox"><div class="dot"></div><a href="/component/textbox">Textbox</a></div>
                    <div class="flex items-center component-textarea"><div class="dot"></div><a href="/component/textarea">Textarea</a></div>
                    <div class="flex items-center component-tooltip"><div class="dot"></div><a href="/component/tooltip">Tooltip</a></div>
                    <div class="flex items-center component-toggle"><div class="dot"></div><a href="/component/toggle" class="opacity-40">Toggle</a></div>
                </div>

                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Layouts</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="/layout/app">App</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="/layout/centered-content">Centered Content</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="/layout/error-pages">Error Pages</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="/layout/slideout-panel">Slideout Panel</a></div>
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
</body>
</html>