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
        Next you need to <b>publish the package assets</b> by running this command, still at the root of your Laravel project. This will create a <code class="inline">vendor/bladewind</code> directory in your <code class="inline">public</code> directory.
        You always need to publish assets when you update to a new version of BladewindUI since some css and js might have been updated. See <a href="#update">Update Notes</a> at the bottom of this page.
    </p>
    <p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-public --force</code></pre>
    </p>
    <p>Now include the BladewindUI css and helper javascript files in the <code class="inline">&lt;head&gt;</code> of your pages. This should ideally be done in the layout file your app pages extend from.
        Your app's css and js files should come after the Bladewind files so your customizations (if any) can take effect.
    </p>
    <p>
        <x-bladewind::alert show_close_icon="false">From v2.0.0, the Bladewind assets were moved from <b>public</b> to <b>public/vendor</b> to enable Bladewind sit with any third party libraries you may already have in your project</x-bladewind::alert>
    </p>
    <pre class="lang-markup">
        <code>
            // this is required for the animation of notifications and slide out panels
            // you can ignore this if you already have animate.css (https://animate.style/) in your project

            &lt;link href="&#123;&#123; asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" /&gt;

            &lt;link href="&#123;&#123; asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" /&gt;

            &lt;script src="&#123;&#123; asset('vendor/bladewind/js/helpers.js') }}">&lt;/script&gt;</code></pre>
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
                &lt;x-bladewind::button&gt;Save User&lt;/x-bladewind::button&gt;
            </code>
        </pre>
    </p><a name="publishing"></a>
    <p>
        <x-bladewind::button>Save User</x-bladewind::button>
    </p>
    <br />
    <br />
    <h2>Publishing Components</h2>
    <p>
        You will notice from the example above we had to use two colons after <code class="inline">x-bladewind</code>. This is because we are serving the views from the package's directory in <code class="inline">vendor/mkocansey</code>.
        To use the usual dot syntax when calling Laravel components, you will need to publish the BladewindUI views to your views directory using the command below.
    </p>
    <p>
        <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-components --force</code></pre>
    </p>
    <br>
    <p>The Bladewind components now exist in <code class="inline">resources > views > components > bladewind</code>. You can access any of the Bladewind components using the dot syntax</p>
    <p>
    <pre class="language-markup">
            <code>
                &lt;x-bladewind.button&gt;Save User&lt;/x-bladewind.button&gt;
            </code>
        </pre>
    </p>
    <p>
        <x-bladewind.button>Save User</x-bladewind.button>
    </p>
    <br />
    <br />
    <x-bladewind::alert show_close_icon="false" type="warning">If you intend to use bladewindUI in a Laravel 8.x project, please do well to <a href="/laravel8-users">read this</a>.</x-bladewind::alert><a name="update"></a></p>
        <br />
    <br />
    <h2>Updating Bladewind</h2>
    <p>
        Running <code class="inline">composer update</code> at the root of your project will pull in the latest version of BladewindUI.
    </p>
    <p><pre class="lang-bash command-line"><code>composer update</code></pre></p>
    <p>
        It is important to republish the assets after every update to pull in any new css and js changes. Run the command below to publish the Bladewind assets.
    </p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-public --force</code></pre>
    <br />
    <p>
        If you access the Bladewind components using the dot syntax, you will need to also republish the components view files by running the command below.
    </p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-components --force</code></pre>
    <p>&nbsp;</p>
    <p>
        To automate publishing of the BladewindUI files every time you run  <code class="inline">composer update</code>, you can add the following lines to your <code class="inline">composer.json</code> file under the <code class="inline">scripts</code> key.
    </p>
    <pre class="lang-js line-numbers" data-line="5,8">
        <code>
                "scripts": {
                ...
                    "post-update-cmd": [
                        "@php artisan vendor:publish --tag=laravel-assets --ansi",
                        "@php artisan vendor:publish --provider=\"Mkocansey\\Bladewind\\BladewindServiceProvider\" --tag=bladewind-public --force",
                        // add this next line if you also want to automatically publish
                        // the components to your resources > views > components directory
                        "@php artisan vendor:publish --provider=\"Mkocansey\\Bladewind\\BladewindServiceProvider\" --tag=bladewind-components --force"
                    ],
                    ...
        </code>
    </pre>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.installation');
        </script>
    </x-slot>

</x-app>
