<x-meta>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <x-slot name="title">Super simple but elegant Laravel blade-based UI component library using TailwindCSS and vanilla Javascript</x-slot>
</x-meta>
<x-bladewind::notification />
<body class="text-gray-500/80 bg-slate-100 dark:bg-gradient-to-b from-slate-900 to-slate-800 dark:text-slate-400">
<div class="sm:hidden block absolute right-4 -top-2">
    <a href="#" onclick="animateCSS('.navigation','slideInRight');" class="ml-4 text-slate-400 dark:hover:text-slate-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </a>
</div>
<nav class="w-[280px] z-50 py-6 bg-white/95 border-l border-gray-200 fixed right-0 top-0 h-screen shadow-2xl
        hidden sm:hidden dark:bg-dark-900 dark:border-gray-800 shadow-blue-300 dark:shadow-slate-800 overflow-y-scroll navigation">
    <div class="text-right cursor-pointer"
         onclick="animateCSS('.navigation','slideOutRight').then((message) => { hide('.navigation'); });">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline mr-4" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
    @include('docs/nav')
</nav>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58CKRW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="bg-gradient-to-tr from-slate-100 to-slate-200 sm:px-10 pb-10 shadow-sm dark:from-dark-900 dark:to-dark-950">
    <div class="py-10 sm:pt-10 sm:pb-16"><img src="/assets/images/bladewind-logo.png" alt="logo" class="h-4 sm:h-6 mx-auto" /></div>
    <div class="sm:text-6xl text-3xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-200 text-center px-6 sm:px-0">
        The only UI components you'll ever need for your Laravel projects. For real.
    </div>
    <div class="sm:text-xl text-sm font-light sm:max-w-xl mx-auto text-center text-slate-500 dark:text-dark-500 sm:py-8 px-5 pt-3 pb-6">
        A collection of over 30 easy-to-customize but elegantly designed blade UI components for your Laravel projects.
    </div>
    <div class="text-center space-x-2 sm:pb-6 px-6">
        <div class="sm:block hidden">
            <x-bladewind::button tag="a" href="/install" size="big">Get Started Now</x-bladewind::button>
        </div>
        <div class="sm:hidden">
            <x-bladewind::button tag="a" href="/install" class="w-full" size="medium">Get Started Now</x-bladewind::button>
        </div>
    </div>
</div>

<div class="sm:max-w-7xl mx-auto py-20 sm:block hidden px-4">
    <div class="grid grid-cols-2 gap-6">
        <div>
            <div class="grid grid-cols-2 gap-6">
                <div class="space-y-3">
                    <div>
                        <x-bladewind::avatar show_dot="true" image="/assets/images/francis.png" stacked="true" size="huge" />
                        <x-bladewind::avatar show_dot="true" image="/assets/images/doc.png" stacked="true" size="huge" />
                        <x-bladewind::avatar show_dot="true" image="/assets/images/me.jpeg" stacked="true" size="huge" />
                        <x-bladewind::avatar show_dot="true" image="/assets/images/issah.jpg" stacked="true" size="huge" />
                    </div>
                    <x-bladewind::card reduce_padding="true" class="!mt-0">
                        <x-bladewind::toggle label="Send me updates" justified="true" bar="thicker"  />
                    </x-bladewind::card>
                    <div>
                        <x-bladewind::statistic  show_spinner="true" label="Total payments" number="34,500,100" />
                    </div>
                </div>
                <div class="space-y-3">
                    <x-bladewind::alert show_close_icon="false">Yoh! <a href="/install">download BladewindUI</a></x-bladewind::alert>
                    <x-bladewind::alert type="success" show_close_icon="false">Transfer was all good</x-bladewind::alert>
                    <x-bladewind::alert type="error">You can dismiss this alert by clicking on the X icon. </x-bladewind::alert>
                    <x-bladewind::alert type="warning" show_icon="false">Our components look awesome even without the icons on the left</x-bladewind::alert>
                </div>
            </div>
            <div class="pt-6"></div>
            <div>
                <x-bladewind::input
                    name="fullname"
                    placeholder="John T. Doe"
                    prefix="user"
                    prefix_is_icon="true" />

                <x-bladewind::input
                    name="emailic"
                    placeholder="me@bladewindui.com"
                    prefix="envelope"
                    prefix_is_icon="true" />

                <div class="flex gap-4">
                    <x-bladewind::input
                        name="fon"
                        placeholder="0000.000.00"
                        prefix="phone"
                        prefix_is_icon="true" />

                    <x-bladewind::input
                        name="passw" type="password"
                        placeholder="Password"
                        prefix="key"
                        prefix_is_icon="true"
                        viewable="true" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                    <?php
                        $hobbies = [
                            [ 'label' => 'Archery', 'value' => 'bj' ],
                            [ 'label' => 'Basketball', 'value' => 'bk' ],
                            [ 'label' => 'Baseball', 'value' => 'bb' ],
                            [ 'label' => 'Dog Walking', 'value' => 'dw' ],
                            [ 'label' => 'Swimming', 'value' => 'sw' ],
                        ];
                    ?>
                        <x-bladewind::select  name="hobbies" searchable="true" multiple="true" max_selectable="3" :data="$hobbies" placeholder="Pick your hobbies" />
                    </div>
                    <div><x-bladewind::rating name="star-rating" size="medium"  color="cyan"/></div>

                </div>
            </div>
        </div>
        <div>
            <div class="sm:grid sm:grid-cols-2 sm:gap-3 divide-y-8 md:divide-y-0">
                <x-bladewind::card reduce_padding="true">
                    <div class="flex items-center">
                        <div><x-bladewind::avatar image="data:image/jpeg;base64,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" /></div>
                        <div class="grow pl-2 pt-1">
                            <b>Alfred Rowe</b>
                            <div class="text-sm">Senior Developer</div>
                            <div class="text-sm">Tech Team</div>
                        </div>
                        <div>
                            <x-bladewind::icon name="eye" class="h-6 w-6 text-slate-600 p-1 rounded-full bg-slate-200 hover:bg-slate-500 hover:text-slate-100" />
                        </div>
                    </div>
                </x-bladewind::card>
                <x-bladewind::card reduce_padding="true">
                    <div class="flex items-center">
                        <div><x-bladewind::avatar image="https://pbs.twimg.com/profile_images/1388977302583775237/z5uvkwkT_400x400.jpg" /></div>
                        <div class="grow pl-2 pt-1">
                            <b>Judith Kabukie</b>
                            <div class="text-sm">Senior Attorney</div>
                            <div class="text-sm">Legal Team</div>
                        </div>
                        <div>
                            <x-bladewind::icon name="eye" class="h-6 w-6 text-green-600 p-1 rounded-full bg-green-200 hover:bg-green-500 hover:text-green-100" />
                        </div>
                    </div>
                </x-bladewind::card>
            </div>

            <div class="py-4">
                <x-bladewind::card has_shaodw="false">
                    <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" />
                    <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" class="py-3" />
                    <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="65" color="blue" />
                </x-bladewind::card>
            </div>
            <x-bladewind::card title="Verify your account">
                <div class="pb-6 text-sm">We sent a code to the number you signed up with (****87). Pleasse enter the code in the boxes below. You can request another code after 3 failed attempts.</div>
                <x-bladewind::code size="big" total-digits="5" />
            </x-bladewind::card>

        </div>
    </div>
</div>

<div class="bg-white sm:px-10 sm:py-16 px-6 py-8 shadow-sm dark:bg-dark-800">
    <div class="text-3xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-200 text-center px-10">
        There's no Pro or Pro Max. Just <span class="underline">free</span> everything.
    </div>
    <div class="text-sm sm:text-xl font-light sm:max-w-xl mx-auto sm:py-8 pt-4 pb-6 text-center text-slate-500 dark:text-dark-400 px-4">
        All current and future UI components plus their frequent updates remain free forever. <a href="/contribute" class="text-indigo-500 hover:text-indigo-700">Contributions</a> are welcome.
    </div>

    <div class="sm:max-w-7xl home-nav mx-auto pt-4 pb-6 sm:grid-cols-5 grid grid-cols-2 sm:gap-6 gap-3">
        @include('docs.components-list', [ 'class' => 'home'])
    </div>
</div>

<div class="bg-slate-900 sm:px-10 sm:py-20 py-10 px-4">
    <div class="text-3xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-200 text-center px-10">
        BladewindUI components shine even in dark mode.
    </div>
    <div class="text-sm sm:text-xl font-light sm:max-w-xl mx-auto pt-4 text-center text-slate-300 px-4 sm:px-0">
        Every BladewinUI component is designed with support for dark mode and they are easy to <a href="/customize/darkmode" class="text-yellow-500 hover:text-yellow-700">customize</a>.
    </div>

    <div class="sm:max-w-7xl home-nav mx-auto pt-10">
        <div class="grid sm:grid-cols-3 grid-cols-1 gap-6">
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800 !shadow-none !border-0" title="Your profile">
                    <div class="flex">
                        <div> <x-bladewind::avatar show_ring="false" image="/assets/images/francis.png" stacked="true" size="huge" class="!mx-auto" /></div>
                        <div class="grow pl-10">
                            <h1 class="text-slate-400 text-2xl tracking-wider">John C. Doe</h1>
                            <h2 class="text-slate-400 text-sm tracking-wider">john.doe@bladewindui.com</h2>
                            <div class="-mt-1.5 -ml-1"> <x-bladewind::rating :rating="4" color="purple" /></div>
                            <x-bladewind::button size="small" radius="small" color="purple" icon="pencil-square" class="mt-6 mb-2">Edit Profile</x-bladewind::button>
                        </div>
                    </div>
                </x-bladewind::card>
            </div>
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800 !shadow-none  !border-0 mnos" title="Mobile Network Penetration">
                    <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" shade="dark" class="text-slate-400" />
                    <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" shade="dark" class="text-slate-400 py-3" />
                    <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="65" color="blue" shade="dark" class="text-slate-400" />
                    <x-bladewind::horizontal-line-graph label="Telecel: " percentage="33" color="green" class="py-3 text-slate-400" shade="dark"  />
                </x-bladewind::card>
            </div>
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800  !border-0 !shadow-none" reduce_padding>
                    <x-bladewind::empty-state show_image="false">
                        <div class="pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                        </div>
                        <p class="py-7 text-slate-500">You have no biometric data uploaded</p>
                        <x-bladewind::button color="red" size="small" class="mb-1.5">
                            Add biometric info
                        </x-bladewind::button>
                    </x-bladewind::empty-state>
                </x-bladewind::card>
            </div>
        </div>
    </div>
</div>

<div class="bg-white sm:px-10 sm:py-20 py-10 px-4 dark:bg-dark-800">
    <div class="text-3xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 text-center px-10 dark:text-dark-300">
        One size and colour doesn't fit all. We know that.
    </div>
    <div class="text-sm sm:text-xl font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-500 px-4 sm:px-0 dark:text-dark-300">
        Almost all BladewindUI components come in nine different colours and a couple of sizes, where it makes sense to size things up.
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="grid sm:grid-cols-4 grid-cols-1 gap-6 pt-10 pb-6">
            <div class=" sm:block">
                <div class="border-2 border-slate-200 dark:border-dark-700 rounded-lg text-center shadow p-3">
                    <div class="space-y-5 pb-7">
                        <x-bladewind::avatar image="/assets/images/doc.png" size="huge" show_ring="false"  />
                        <div class="font-light text-slate-700 text-4xl">Jandel Doe</div>
                        <x-bladewind::icon name="phone" class="bg-red-500 !text-white rounded-full !h-14 !w-14 p-3 rotate-180 mr-4" type="solid" />
                        <x-bladewind::icon name="phone" class="bg-green-500 !text-white rounded-full !h-14 !w-14 p-3" type="solid" />
                    </div>
                </div>
            </div>
            <div>
                <div class="border border-slate-200 dark:border-dark-700 rounded-lg">
                <x-bladewind::listview compact="true">
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar size="small" image="/assets/images/me.jpeg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Michael K. Ocansey</div>
                            <div class="text-sm text-slate-500 truncate">mike@bladewindui.com</div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar size="small" image="" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Anonymous Jackson</div>
                            <div class="text-sm text-slate-500 truncate">fake@person.com</div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar size="small" image="/assets/images/issah.jpg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Catherine Gerald</div>
                            <div class="text-sm text-slate-500 truncate">kate.gee@gmail.com</div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar size="small" image="/assets/images/audrey.jpeg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Carolyn Velociti</div>
                            <div class="text-sm text-slate-500 truncate">carolyn@velociti.com</div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar size="small" image="/assets/images/francis.png" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Franis Appiah</div>
                            <div class="text-sm text-slate-500 truncate">francis@appiah.com</div>
                        </div>
                    </x-bladewind::listview.item>
                </x-bladewind::listview>
                </div>
            </div>
            <div>
                <div>
                    <x-bladewind::progress-bar percentage="20" color="pink" />
                    <x-bladewind::progress-bar percentage="40" shade="dark" color="pink" />
                    <x-bladewind::progress-bar percentage="60" color="gray" />
                    <x-bladewind::progress-bar percentage="80" shade="dark" color="gray" />
                    <x-bladewind::progress-bar percentage="90" color="purple" />
                    <x-bladewind::progress-bar percentage="60" shade="dark" color="yellow" />
                    <x-bladewind::progress-bar percentage="40" color="green" />
                    <x-bladewind::progress-bar percentage="60" shade="dark" color="green" />
                    <x-bladewind::progress-bar percentage="30" color="orange" />
                    <x-bladewind::progress-bar percentage="70" shade="dark" color="orange" />
                </div>
                <div class="border border-slate-200 dark:border-dark-700 rounded-lg mt-4 p-4">
                    <h1 class="mb-4">What is your preferred theme?</h1>
                    <div class="space-x-3">
                        <x-bladewind::toggle color="gray" bar="thicker" checked="true" />
                        <x-bladewind::toggle color="yellow" bar="thicker" checked="true" />
                        <x-bladewind::toggle color="cyan" bar="thicker" checked="true" />
                    </div>
                </div>
            </div>
            <div>
                <div class="border border-slate-300 dark:border-dark-700 rounded-lg text-center px-3 pt-3 pb-7">
                    <div class="py-6">Verify your account</div>
                    <x-bladewind::code timer="1000" />
                    <x-bladewind::button size="small" disabled="true" type="secondary">Resend Code</x-bladewind::button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-slate-200 sm:px-10 sm:py-20 py-10 px-4 dark:bg-dark-900">
    <div class="text-3xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-300 text-center px-10">
        It's usually one line of code but feature packed.
    </div>
    <div class="text-sm sm:text-xl font-light sm:max-w-xl mx-auto sm:pt-6 pt-2 text-center text-slate-500 px-4 sm:px-0">
        Laravel makes building web apps simple and fun. No need to make a library meant for the framework any less developer friendly.
    </div>
    <div class="max-w-3xl mx-auto sm:pt-10 pt-4">
        <pre class="language-markup"><code>&lt;x-bladewind::avatar image="/assets/images/edwin.jpeg" /&gt;</code></pre>
        <pre class="language-markup"><code>&lt;x-bladewind::toggle bar="thicker" /&gt;</code></pre>
        <pre class="language-markup"><code>&lt;x-bladewind::alert&gt;Your storage is 80% full&lt;/x:bladewind::alert&gt;</code></pre>
        <pre class="language-markup"><code>&lt;x-bladewind::datepicker type="range" /&gt;</code></pre>
        <pre class="language-markup"><code>&lt;x-bladewind::filepicker accepted_file_types="images/*" /&gt;</code></pre>
        <div class="text-center sm:pt-6">
            <div class="sm:block hidden">
                <x-bladewind::button tag="a" href="/install" size="big">Get Started Now</x-bladewind::button>
            </div>
            <div class="sm:hidden">
                <x-bladewind::button tag="a" href="/install" class="w-full" size="medium">Get Started Now</x-bladewind::button>
            </div>
        </div>
    </div>
</div>

<div class="w-full py-8 px-5 dark:bg-slate-900 text-slate-400">
    <div class="max-w-7xl mx-auto flex">
        <div class="tracking-wider text-xs grow">
            {{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}
        </div>
        <div class="text-right flex gap-4">
{{--            <iframe src="https://github.com/sponsors/mkocansey/button" title="Sponsor mkocansey" height="32" width="114" style="border: 0; border-radius: 6px;" class="inline-block"></iframe>--}}
            <a href="https://github.com/mkocansey/bladewind" target="_blank" class="text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">BladewindUI on GitHub</span>
                <svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
            </a>
        </div>
    </div>
</div>
</body>
</html>
