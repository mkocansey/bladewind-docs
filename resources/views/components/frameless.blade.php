<x-meta>
    <script src="{{ asset('bladewind/js/helpers.js') }}" type="text/javascript"></script>
    <x-slot name="title">{{$title}}</x-slot>
</x-meta>
    <body class="text-gray-500/80 dark:bg-gray-800 dark:text-slate-400">

    <x-topbar />


        <div class="h-20"></div>
        <div class="max-w-7xl mx-auto pt-14">
            <div>
                {{ $slot ?? '' }}
            </div>

        </div>

</body>
</html>
