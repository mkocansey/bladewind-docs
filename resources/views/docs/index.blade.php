<x-app>
    <x-slot name="title">Getting Started</x-slot>
    <h1 class="page-title">Getting Started</h1>
    <p>
        BladewindUI is a collection of super simple but elegant Laravel blade-based UI components using TailwindCSS and vanilla Javascript.
        When I decided to move away from JQuery, that indirectly meant I had to find an alternative to the lovely Semantic UI components I had gotten so used to. 
        Well, that was how these components were born.
    </p>
    <h2>Prerequisites </h2>
    <p>Bladewind components are purely Laravel blade components with some tailwindcss sweetness. This means you absolutely need to be using Bladewind in a Laravel project. </p>
    <p><x-bladewind::alert show_close_icon="false">The version of Laravel supported with BladewindUI is <b>>=9.x</b>. This libray uses snake cases for naming its props attributes and these for some strange reason don't seem to work on Laravel versions earlier than 9.x</x-bladewind::alert></p>
    <h2>Install</h2>
    <p>At the root of your Laravel project, type the following composer command in your terminal to pull in the package.</p>
    <p>
        <pre class="lang-bash command-line"><code>composer require mkocansey/bladewind</code></pre>
    </p>
    <p>Next you need to <b>publish the package assets</b> by running this command, still at the root of your Laravel project.</p>
    <p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=assets --force</code></pre>
    </p>
    <p>Now include the BladewindUI css file and initialize a few javascript variables in the <code class="inline">&lt;head&gt;</code> of your pages. This should ideally be done in the layouts file your app's pages extend from.</p>
    <p>
    <pre class="lang-markup">
        <code>
            // this is required for animation of notifications and slide out panels
            // you can ignore this if you already have animate.css in your project
            
            &lt;link href="&#123;&#123; asset('bladewind/css/animate.min.css') }}" rel="stylesheet" /&gt;</code></pre>
    </p>
    <p>
    <pre class="lang-markup"><code>&lt;link href="&#123;&#123; asset('bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" /&gt;</code></pre>
    </p>
    <p>
    <pre class="lang-js"><code>&lt;script&gt;var notification_timeout,user_function,el_name,momo_obj,delete_obj;var dropdownIsOpen = false;&lt;/script&gt;</code></pre>
    </p>
    <br>
    <p>Finally, include the BladewindUI javascript file anywhere before the closing of the <code class="inline">&lt;/body&gt;</code> tag of your pages. Again, this should ideally be done in the layouts file your app's pages extend from.</p>
    <p>
    <pre class="lang-markup"><code>&lt;script src="&#123;&#123; asset('bladewind/js/helpers.js') }}" type="text/javascript">&lt;/script&gt;</code></pre>
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
    <br />
    <p>BladewindUI components have been designed to be <b class="text-red-500">non</b> destructive, meaning, they coexist with any other components you may already have in your project. Publishing the assets with the command above did the following:</p>
    <p>
        1. The blade components now exist in <code class="inline">resources > views > components > bladewind</code>
    </p>
    <p>
        2. The supporting CSS and JS files were placed in <code class="inline">public > bladewind</code>
    </p>
    <p>
        3. The language files for the <a href="/component/datepicker">datepicker</a> component were placed in <code class="inline">lang > bladewind</code>. The default comes with just English and French. You can <a href="/customization">add more languages</a>.
    </p>
    <p>&nbsp;</p>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.installation');
        </script>
    </x-slot>

</x-app>