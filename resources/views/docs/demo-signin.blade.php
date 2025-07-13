<div class="demo-signin animate-slideInUp hidden">
    <div class="h-[700px] flex items-center justify-center flex-col">
        <x-bladewind::card no-padding="true" class="w-3/5" has-shadow="true">
            <div class="grid grid-cols-2">
                <div class="relative">
                    <img src="/assets/images/photo-1651277167651-9d31e995dd4a.avif" class="absolute inset-0 w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="px-5 py-4 rounded-r-lg">
                    <h2 class="text-2xl font-bold mb-5">Sign In</h2>
                    <div class="mb-4">
                        <x-bladewind::input label="Email" required="true" />
                        <x-bladewind::input label="Password" required="true" />
                        <div class="mb-8"><x-bladewind::toggle label="Remember me for 2 weeks" label-position="right" /></div>
                        <x-bladewind::button class="w-full" size="medium">Sign In</x-bladewind::button>
                        <div class="flex justify-between mt-10 text-sm">
                            <div><a href="javascript:showPage('demo-signup')" class="text-indigo-500 hover:text-indigo-700">Sign Up</a> instead</div>
                            <div><a href="javascript:showPage('demo-dashboard')" class="text-indigo-500 hover:text-indigo-700">Cancel</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </x-bladewind::card>
        <div class="text-xs opacity-80 text-center pt-6">
            The image is from Unsplash and by <a href="https://unsplash.com/@thevisualchef007" target="_blank">Akindele Ibukun</a>
        </div>
    </div>
</div>
