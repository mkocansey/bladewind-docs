<div class="demo-signup animate-slideInUp hidden relative">
    <div class="h-[700px] flex items-center justify-center flex-col">
        <x-bladewind::card no-padding="true" class="w-3/5 signup-form" has-shadow="true">
            <div class="grid grid-cols-2">
                <div class="relative">
                    <img src="/assets/images/photo-1651277167651-9d31e995dd4a.avif" class="absolute inset-0 w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="px-5 py-4 rounded-r-lg">
                    <h2 class="text-2xl font-bold mb-1">Sign Up</h2>
                    <div class="text-xs text-gray-500 dark:text-dark-300 pb-10 leading-5">You can enjoy all the benefits of our tech space by filling out the form below. Just just a minute.</div>
                    <div class="mb-4">
                        <x-bladewind::input label="Full name" required="true" />
                        <x-bladewind::input label="Email" required="true" />
                        <x-bladewind::input label="Password" required="true" />
                        <x-bladewind::button class="w-full" size="medium" name="reg-btn" onclick="showButtonSpinner('.reg-btn'); setTimeout(()=>{hide('.signup-form');unhide('.otp-form');},2000)" has-spinner="true">Register Now</x-bladewind::button>
                        <div class="flex justify-between mt-10 text-sm">
                            <div><a href="javascript:showPage('demo-signin')" class="text-indigo-500 hover:text-indigo-700">Login</a> instead</div>
                            <div><a href="javascript:showPage('demo-dashboard')" class="text-indigo-500 hover:text-indigo-700">Cancel</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </x-bladewind::card>
        <x-bladewind::card class="otp-form hidden w-1/3" has-shadow="true">
            <h2 class="text-2xl font-bold mb-1">Verify Your Email</h2>
            <div class="text-xs text-gray-500 dark:text-dark-300 pb-10 leading-5">You can enjoy all the benefits of our tech space by filling out the form below. Takes just a minute.</div>
            <x-bladewind::code size="big" on-verify="validatePin" name="otp"/>
            <x-bladewind::button class="w-full" size="medium" disabled="true">Verify Code</x-bladewind::button>
        </x-bladewind::card>
        <x-bladewind::card class="welcome hidden w-1/3" has-shadow="true">
            <x-bladewind::empty-state
                message="Awesome! Your account has been verified successfully. Enjoy BladewindUI."
                button_label="Go to Dashboard"
                heading="Account Verified"
                image="/assets/images/ss-welcome.svg"
                onclick="showPage('demo-dashboard')">
            </x-bladewind::empty-state>
        </x-bladewind::card>

        <div class="text-xs opacity-80 text-center pt-6 credit">
            The image is from Unsplash and by <a href="https://unsplash.com/@thevisualchef007" target="_blank">Akindele Ibukun</a>
        </div>
    </div>
</div>
<script>
    validatePin = (code, name) => {
        showSpinner(name);
        setTimeout( () => {
            showPinSuccess(name);
            setTimeout( () => { hide('.otp-form');unhide('.welcome'); }, 2000);
            }, 3000
        );
    }
</script>
