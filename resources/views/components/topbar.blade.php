<div class="fixed w-full z-40 py-4 px-6 bg-white/95 dark:bg-slate-900 shadow-2xl shadow-blue-200/40 border-b
    border-blue-200 dark:border-0 dark:shadow-slate-800 dark:shadow-sm">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between">
            <div onclick="location.href='/'" class="cursor-pointer flex">
                <img src="/assets/images/bladewind-logo.png" alt="logo" class="h-6" />
                <div class="sm:hidden bg-indigo-200 opacity-60 rounded-sm tracking-wider text-[10px] font-semibold text-black absolute left-[174px] top-10 px-1">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</div>
            </div>
            <div class="text-xs sm:rtl:flex-row-reverse sm:flex sm:items-center sm:space-x-2 hidden">
                <span>LTR</span> <x-bladewind::toggle color="gray" name="rtltr" onclick="switchDirection(dom_el('input[name=rtltr]'))" class="rtl:peer-checked:after:!translate-x-full" /> <span>RTL</span>
            </div>
            <div class="flex justify-end items-center space-x-5">
{{--                    <a href="javascript:toggleThemeMode('c')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg></a>--}}
                <a href="https://github.com/mkocansey/bladewind" target="_blank" class="hidden ltr:ml-6 sm:block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 rtl:!ml-4"><span class="sr-only">BladewindUI on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg></a>
                <a href="#" onclick="animateCSS('.navigation','slideInRight');" class="ml-6 block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 md:hidden"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg></a>
                <span class="sm:block hidden bg-indigo-200 opacity-60 rounded-md tracking-wider text-xs py-1 px-2 font-semibold text-black">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</span>
            </div>
        </div>
    </div>
</div>
