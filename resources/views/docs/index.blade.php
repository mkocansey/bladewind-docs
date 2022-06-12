<x-app>
    <x-slot name="title">Getting Started</x-slot>
    <h1 class="page-title">Getting Started</h1>
    <p>
        BladewindUI is a collection of super simple but elegant Laravel blade-based UI components using TailwindCSS and vanilla Javascript.
        When I decided to move away from JQuery, that indirectly meant I had to find an alternative to the lovely Semantic UI components I had gotten so used to. 
        Well, that was how these components were born.
    </p>
    <h2>Prerequisites </h2>
    <p>Bladewind components are purely Laravel blade components with some tailwindcss sweetness. This means you absolutely need to be using Bladewind in a Laravel project. The package has the following dependencies:</p>
    <x-bladewind::alert show_close_icon="false" show_icon="false">PHP >= 7.3</x-bladewind::alert>
    <br />
    <br />
    <h2>Install</h2>
    <p>At the root of your Laravel project, type the following composer command in your terminal to pull in the package.</p>
    <p>
        <pre class="lang-bash command-line"><code>composer require mkocansey/bladewind</code></pre>
    </p>
    <p>
        Next you need to <b>publish the package assets</b> by running this command, still at the root of your Laravel project.
        You always need to publish assets when you update to a new version of BladewindUI. See <a href="#update">Update Notes</a> at the bottom of this page.
    </p>
    <p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=laravel-assets --force</code></pre>
    </p>
    <p>Now include the BladewindUI css file and initialize a few javascript variables in the <code class="inline">&lt;head&gt;</code> of your pages. This should ideally be done in the layouts file your app's pages extend from.</p>
    <p>
    <pre class="lang-markup">
        <code>
            // this is required for the animation of notifications and slide out panels
            // you can ignore this if you already have animate.css (https://animate.style/) in your project
            
            &lt;link href="&#123;&#123; asset('bladewind/css/animate.min.css') }}" rel="stylesheet" /&gt;

            &lt;link href="&#123;&#123; asset('bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" /&gt;

            &lt;script src="&#123;&#123; asset('bladewind/js/helpers.js') }}">&lt;/script&gt;</code></pre>
    </p>
    <br />
    <p>
        <pre class="lang-markup">
            <code>
                // The Datepicker and Timepicker components require AlpineJs 3.x to work. 
                // Include this in your &lt;head&gt;. You can ignore this final step if 
                // you are already using AlpineJs in your project

                &lt;script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"&gt;&lt;/script&gt;
            </code>
        </pre>
    </p>
    <br>
    <p>You are now ready to start using any of the BladewindUI components in your application</p> 
    <p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind.button&gt;Save User&lt;/x-bladewind.button&gt;
            </code>
        </pre>
    </p>
    <p>
        <x-bladewind::button>Save User</x-bladewind::button>
    </p>
    <br />
    <p>BladewindUI components have been designed to be <b class="text-red-500">non</b> destructive, meaning, they coexist with any other components you may already have in your project. The following happened when you run the <code class="inline">vendor:publish</code> command earlier on:</p>
    <p>
        1. The blade components now exist in <code class="inline">resources > views > components > bladewind</code>
    </p>
    <p>
        2. The supporting CSS and JS files have been placed in <code class="inline">public > bladewind</code>
    </p>
    <p>
        3. The language files for the <a href="/component/datepicker">Datepicker</a> component have been placed in <code class="inline">lang > bladewind</code>. The default languages shipped with the Datepicker are English, French and Italian. You can <a href="/customization">add more languages</a>.
    </p><br />
    <x-bladewind::alert show_close_icon="false" type="warning" shade="dark">If you intend to use bladewindUI in a Laravel 8.x project, please do well to <a href="/laravel8-users">read this</a>.</x-bladewind::alert><a name="update"></a></p>
        <br />
    <br />
    <h2>Updating Bladewind</h2>
    <p><pre class="lang-bash command-line"><code>composer update</code></pre></p>
    <p>When you update the Bladewind package via <code class="inline">composer update</code>
    the assets are republished since it is possible changes were made to the library's CSS or JS files. 
    If you see output similar to what is below, it means the assets were successfully published. 
    </p>
    <p>
    <pre class="lang-bash command-line">
        <code>
            Copied Directory [/vendor/mkocansey/bladewind/src/resources/views/components] To [/resources/views/components/bladewind]
            Copied Directory [/vendor/mkocansey/bladewind/src/resources/lang] To [/resources/lang]
            Copied Directory [/vendor/mkocansey/bladewind/src/resources/assets/compiled] To [/public/bladewind]
        </code>
    </pre>
    </p>
    <p>
        If you do not see output similar to what is above, you will need to manually republish the assets by running the command below.
    </p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=laravel-assets --force</code></pre>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.installation');
        </script>
    </x-slot>

</x-app>