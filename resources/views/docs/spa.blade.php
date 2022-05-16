<x-app>
    <x-slot name="title">Laravel SPA Technique</x-slot>
    <h1 class="page-title">Laravel Single Page Application Technique</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                content coming soon
            </p>
        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            {{-- <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav> --}}
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.extra-spa');
        </script>
    </x-slot>
</x-app>