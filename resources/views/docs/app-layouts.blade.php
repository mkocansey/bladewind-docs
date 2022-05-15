<x-app>
    <x-slot name="title">App Layouts</x-slot>
    <h1 class="page-title">App Layouts</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Content coming soon.
            </p>

            {{-- <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/error.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p> --}}

        </div>
        <div class="w-1/4 grow-0">
            {{-- <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav> --}}
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.extra-layouts');
        </script>
    </x-slot>
</x-app>