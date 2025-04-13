{{--<div class="fixed w-full z-40 py-4 px-6 bg-gradient-to-r from-indigo-700 to-indigo-900 border-b border-b-violet-900 dark:border-0 dark:shadow-slate-800 dark:shadow-sm shadow-lg dark:bg-dark-900 dark:bg-gradient-to-r dark:from-dark-900 dark:to-dark-950">--}}
<div class="fixed w-full z-40 py-4 px-6 bg-white/90 shadow-2xl shadow-indigo-100 dark:shadow-dark-800/30 border-b border-slate-300/70 dark:border-dark-600/70 dark:bg-dark-700/80">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between">
            <div onclick="location.href='/'" class="cursor-pointer flex">
                <img src="/assets/images/bladewind-logo.png" alt="logo" class="h-6 dark:grayscale dark:invert dark:contrast-125 dark:brightness-75" />
                <div class="sm:hidden bg-indigo-200 opacity-60 rounded-sm tracking-wider text-[10px] font-semibold text-black absolute left-[174px] top-10 px-1">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</div>
            </div>
            <div class="text-xs sm:rtl:flex-row-reverse sm:flex sm:items-center sm:space-x-2 hidden">
                <span>LTR</span> <x-bladewind::toggle name="rtltr" onclick="switchDirection(dom_el('input[name=rtltr]'))" class="rtl:peer-checked:after:!translate-x-full" /> <span>RTL</span>
            </div>
            <div class="flex justify-end items-center space-x-5">
                <x-bladewind::theme-switcher modular="true" />
                <a href="https://github.com/mkocansey/bladewind" target="_blank" class="hidden ltr:ml-6 sm:block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300 rtl:!ml-4"><span class="sr-only">BladewindUI on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg></a>
                <a href="#" onclick="animateCSS('.navigation','slideInRight');" class="ml-4 block text-slate-400 hover:text-slate-100 dark:hover:text-slate-300 sm:hidden"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg></a>
                <span class="sm:hidden opacity-80 rounded-md tracking-wider text-xs py-1 px-2">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</span>
                <div>
                    <x-bladewind::dropmenu modular="true">
                        <x-slot:trigger>
                            <span class="text-sm bg-slate-100/80 hover:bg-slate-200/80 p-2 rounded-md">{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}
                            <x-bladewind::icon name="chevron-down" class="!size-4" />
                            </span>
                        </x-slot:trigger>
                        <x-bladewind::dropmenu.item>{{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}</x-bladewind::dropmenu.item>
                        <x-bladewind::dropmenu.item onclick="location.href='https://v2.bladewindui.com/install'">2.x</x-bladewind::dropmenu.item>
                    </x-bladewind::dropmenu>
                </div>
            </div>
        </div>
    </div>
</div>
