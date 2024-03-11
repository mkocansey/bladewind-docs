<x-meta>
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <x-slot name="title">Super simple but elegant Laravel blade-based UI component library using TailwindCSS and vanilla Javascript</x-slot>
</x-meta>
<body class="text-gray-500/80 bg-slate-100 dark:bg-gradient-to-b from-slate-900 to-slate-800 dark:text-slate-400">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T58CKRW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="bg-gradient-to-tr from-slate-100 to-slate-200 sm:px-10 px-4 sm:pb-20 pb-10 shadow-sm dark:from-dark-900 dark:to-dark-950">
    <div class="py-10 sm:pt-10 sm:pb-16"><img src="/assets/images/bladewind-logo.png" alt="logo" class="h-6 sm:h-8 mx-auto" /></div>
    <div class="sm:text-6xl text-4xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-200 text-center">
        The only UI components you'll ever need for your Laravel projects. Truly.
    </div>
    <div class="sm:text-xl text-base font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-500 dark:text-dark-500 px-4">
        A collection of over 30 easy-to-customize but elegantly designed blade UI components for your Laravel projects.
    </div>
    <div class="text-center sm:pt-10 pt-6 space-x-2">
        <x-bladewind::button color="black" tag="a" href="/install" size="huge" radius="small" class="!bg-indigo-600 !inline-block">Get Started</x-bladewind::button>
        <x-bladewind::button type="secondary" tag="a" href="/install" size="huge" radius="small" class="!inline-block">Documentation</x-bladewind::button>
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
                        $countries = [
                            [ 'label' => 'Archery', 'value' => 'bj' ],
                            [ 'label' => 'Basketball', 'value' => 'bb' ],
                            [ 'label' => 'Baseball', 'value' => 'bb' ],
                            [ 'label' => 'Dog Walking', 'value' => 'dw' ],
                            [ 'label' => 'Swimming', 'value' => 'sw' ],
                        ];
                    ?>
                        <x-bladewind::select  name="country-multi" searchable="true" multiple="true" max_selectable="3" :data="$countries" placeholder="Pick your hobbies" />
                    </div>
                    <div><x-bladewind::rating name="star-rating" size="medium"  color="cyan"/></div>

                </div>
            </div>
        </div>
        <div>
            <div class="sm:grid sm:grid-cols-2 sm:gap-3 divide-y-8 md:divide-y-0">
                <x-bladewind::card reduce_padding="true">
                    <div class="flex items-center">
                        <div><x-bladewind::avatar image="/assets/images/audrey.jpeg" /></div>
                        <div class="grow pl-2 pt-1">
                            <b>Lady Salome</b>
                            <div class="text-sm">Senior Developer</div>
                            <div class="text-sm">Tech Team</div>
                        </div>
                        <div>
                            <x-bladewind::icon name="trash" class="h-6 w-6 text-red-600 p-1 rounded-full bg-red-200 hover:bg-red-500 hover:text-red-100" />
                        </div>
                    </div>
                </x-bladewind::card>
                <x-bladewind::card reduce_padding="true">
                    <div class="flex items-center">
                        <div><x-bladewind::avatar image="data:image/jpeg;base64,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" /></div>
                        <div class="grow pl-2 pt-1">
                            <b>Grace Adjoa Sedinam</b>
                            <div class="text-sm">Senior Medical Officer</div>
                            <div class="text-sm">Health & Safety Dept.</div>
                        </div>
                        <div>
                            <x-bladewind::icon name="pencil" class="h-6 w-6 text-blue-600 p-1 rounded-full bg-blue-200 hover:bg-blue-500 hover:text-blue-100" />
                        </div>
                    </div>
                </x-bladewind::card>
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

            <div class="pt-3">
                <x-bladewind::card title="Mobile Network Penetration" has_shaodw="false">
                    <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" />
                    <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" class="py-3" />
                    <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="65" color="blue" />
                    <x-bladewind::horizontal-line-graph label="Telecel: " percentage="33" color="cyan" class="py-3"  />
                    <x-bladewind::horizontal-line-graph label="Safaricom: " percentage="83" color="green" />
                    <x-bladewind::horizontal-line-graph label="Magic Telkom: " percentage="44" color="purple" class="py-3" />
                </x-bladewind::card>
            </div>

        </div>
    </div>
</div>

<div class="bg-white sm:px-10 sm:py-20 py-10 px-4 shadow-sm dark:bg-dark-800">
    <div class="text-4xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-200 text-center px-10">
        There's no Pro or Pro Max. Just <span class="underline">free</span> everything.
    </div>
    <div class="text-base sm:text-xl font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-500 dark:text-dark-400 px-4">
        All current and future UI components plus their frequent updates remain free forever. <a href="/contribute" class="text-indigo-500 hover:text-indigo-700">Contributions</a> are welcome.
    </div>

    <div class="sm:max-w-7xl home-nav mx-auto py-10 sm:grid-cols-5 sm:grid sm:gap-x-6 sm:gap-y-3 space-y-2 space-x-1.5">
        <div class="hidden"></div>
        <div class="hidden"></div>
        <div class="hidden"></div>
        <div class="hidden"></div>
        <div class="hidden"></div>
        @include('docs.components-list', [ 'class' => 'home'])
    </div>
</div>

<div class="bg-slate-900 sm:px-10 sm:py-20 py-10 px-4">
    <div class="text-4xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-200 text-center px-10">
        BladewindUI components shine even in dark mode.
    </div>
    <div class="text-base sm:text-xl font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-300 px-3 sm:px-0">
        Every BladewinUI component is designed with support for dark mode and they are easy to <a href="/customize/darkmode" class="text-yellow-500 hover:text-yellow-700">customize</a>.
    </div>

    <div class="sm:max-w-7xl home-nav mx-auto pt-10">
        <div class="grid sm:grid-cols-3 grid-cols-1 gap-6">
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800 !shadow-none" title="Your profile">
                    <div class="flex">
                        <div> <x-bladewind::avatar image="/assets/images/francis.png" stacked="true" size="huge" class="!mx-auto" /></div>
                        <div class="grow pl-10">
                            <h1 class="text-slate-400 text-2xl tracking-wider">John C. Doe</h1>
                            <h2 class="text-slate-400 text-sm tracking-wider">john.doe@bladewindui.com</h2>
                            <div class="-mt-1.5 -ml-1"> <x-bladewind::rating :rating="4" color="purple" /></div>
                            <x-bladewind::button size="small" radius="small" color="purple" icon="pencil-square" class="my-6">Edit Profile</x-bladewind::button>
                        </div>
                    </div>
                </x-bladewind::card>
            </div>
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800 !shadow-none mnos" title="Mobile Network Penetration">
                    <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" shade="dark" class="text-slate-400" />
                    <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" shade="dark" class="text-slate-400 py-3" />
                    <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="65" color="blue" shade="dark" class="text-slate-400" />
                    <x-bladewind::horizontal-line-graph label="Telecel: " percentage="33" color="green" class="py-3 text-slate-400" shade="dark"  />
                </x-bladewind::card>
            </div>
            <div>
                <x-bladewind::card has_shaodw="false" class="!bg-slate-800 !shadow-none" reduce_padding>
                    <x-bladewind::empty-state show_image="false">
                        <div class="pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                        </div>
                        <p class="py-7 text-slate-500">You have no biometric data uploaded</p>
                        <x-bladewind::button color="red" size="small">
                            Add biometric info
                        </x-bladewind::button>
                    </x-bladewind::empty-state>
                </x-bladewind::card>
            </div>
        </div>
    </div>
</div>


<div class="bg-white sm:px-10 sm:py-20 py-10 px-4 dark:bg-dark-800">
    <div class="text-4xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 text-center px-10 dark:text-dark-300">
        One size and colour doesn't fit all. We know that.
    </div>
    <div class="text-base sm:text-xl font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-500 px-4 sm:px-0 dark:text-dark-300">
        Almost all BladewindUI components come in nine different colours and a couple of sizes, where it makes sense to size things up.
    </div>

    <div class="max-w-7xl mx-auto">
        <div class="sm:grid sm:grid-cols-4 gap-6 pt-10">
            <div class="hidden sm:block">
                <div class="border-2 border-slate-200 dark:border-dark-700 rounded-lg text-center shadow p-3">
                    <div class="space-y-5 pb-4">
                        <x-bladewind::avatar image="/assets/images/doc.png" size="huge" show_ring="false"  />
                        <div class="font-light text-slate-700 text-4xl">Jandel Doe</div>
                        <x-bladewind::icon name="phone" class="bg-red-500 !text-white rounded-full !h-14 !w-14 p-3 rotate-180 mr-4" type="solid" />
                        <x-bladewind::icon name="phone" class="bg-green-500 !text-white rounded-full !h-14 !w-14 p-3" type="solid" />
                    </div>
                </div>
            </div>
            <div>
                <div class="border border-slate-200 dark:border-dark-700 rounded-lg">
                <x-bladewind::list-view compact="true">
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/me.jpeg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Michael K. Ocansey</div>
                            <div class="text-sm text-slate-500 truncate">mike@bladewindui.com</div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Anonymous Jackson</div>
                            <div class="text-sm text-slate-500 truncate">fake@person.com</div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/issah.jpg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Catherine Gerald</div>
                            <div class="text-sm text-slate-500 truncate">kate.gee@gmail.com</div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/audrey.jpeg" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Audrey Munyiva</div>
                            <div class="text-sm text-slate-500 truncate">audrey@munyiva.com</div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/francis.png" />
                        <div class="ml-3">
                            <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Franis Appiah</div>
                            <div class="text-sm text-slate-500 truncate">francis@appiah.com</div>
                        </div>
                    </x-bladewind::list-item>
                </x-bladewind::list-view>
                </div>
            </div>
            <div>
                <div>
                    <x-bladewind::progress-bar percentage="20" color="pink" />
                    <x-bladewind::progress-bar percentage="40" shade="dark" color="pink" />
                    <x-bladewind::progress-bar percentage="60" color="black" />
                    <x-bladewind::progress-bar percentage="80" shade="dark" color="black" />
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
                <div class="border border-slate-300 dark:border-dark-700 rounded-lg text-center p-3">
                    <div class="py-4">Verify your account</div>
                    <x-bladewind::code />
                    <x-bladewind::button size="small">Verify</x-bladewind::button>
                </div>
                <div>
                    <x-bladewind::button size="medium" icon_right="true" color="pink" radius="small" class="w-full mt-5" icon="bell-slash">Unsubscribe</x-bladewind::button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-slate-200 sm:px-10 sm:py-20 py-10 px-4 dark:bg-dark-900">
    <div class="text-4xl sm:text-6xl font-bold sm:max-w-4xl mx-auto text-slate-700 dark:text-dark-300 text-center px-10">
        It's usually one line of code but feature packed.
    </div>
    <div class="text-base sm:text-xl font-light sm:max-w-xl mx-auto pt-6 text-center text-slate-500 px-4 sm:px-0">
        Laravel makes building web apps simple and fun. No need to make a library meant for the framework any less developer friendly.
    </div>
    <div class="max-w-3xl mx-auto sm:pt-10">
        <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27"><code>&lt;x-bladewind::avatar image="/assets/images/edwin.jpeg" /&gt;</code></pre>
        <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27"><code>&lt;x-bladewind::toggle bar="thicker" /&gt;</code></pre>
        <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27"><code>&lt;x-bladewind::alert&gt;Your storage is 80% full&lt;/x:bladewind::alert&gt;</code></pre>
        <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27"><code>&lt;x-bladewind::datepicker type="range" /&gt;</code></pre>
        <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27"><code>&lt;x-bladewind::filepicker accepted_file_types="images/*" /&gt;</code></pre>
        <div class="text-center pt-6">
        <x-bladewind::button tag="a" href="/install" size="huge" radius="small" class="!bg-indigo-600 !inline-block" color="black">Read the Documentation</x-bladewind::button>
        </div>
    </div>
</div>

<div class="w-full py-8 px-5 dark:bg-slate-900 text-slate-400">
    <div class="max-w-7xl mx-auto flex">
        <div class="tracking-wider text-xs grow">
            {{\Composer\InstalledVersions::getPrettyVersion('mkocansey/bladewind')}}
        </div>
        <div class="text-right">
            <a href="https://github.com/mkocansey/bladewind" target="_blank" class="text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">BladewindUI on GitHub</span>
                <svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
            </a>
        </div>
    </div>
</div>


</body>
</html>
