<x-app>
    <x-slot name="title">Customizing BladewindUI</x-slot>
    <h1 class="page-title">Customizing BladewindUI</h1>
    <p>
        BladewindUI has been designed to not interfere with the existing components in your project. 
        Probably you just want to take this for a spin before deciding if BladewindUI components will be the only components you use in your project. 
        All BladewindUI components exist in your project's <code class="inline">resources > views > components > <span class="text-red-400">bladewind</span></code> directory. 
        Per Laravel convention, this results in you having to type the <code class="inline text-red-400">&lt;x-bladewind</code> prefix everytime you want to use a BladewindUI component.
    </p>
    <p>
        <pre class="language-markup">
            <code>
                &lt;<b>x-bladewind</b>.button&gt;Save User&lt;/x-bladewind.button&gt;
            </code>
        </pre>
    </p>
    <br/>
    <h2>Getting rid of the <b class="font-bold">bladewind</b> prefix </h2>
    <p>
        Using any of the BladewindUI components can be without the bladewind prefix like so <code class="inline text-red-400">&lt;x-button&gt;Save User&lt;/x-button&gt;</code>. Achieving this is actually quite easy. 
        Simply move all the blade files in <code class="inline">resources > views > components > bladewind</code> into <code class="inline">resources > views > components</code>. 
        You can then delete the <span>bladewind</span> folder from your <code class="inline">resources > views > components</code> folder since it's technically empty at this point.
    </p>
    <p>
        <x-bladewind::alert type="warning" show_close_icon="false">
            Please note that this will overwrite any files you have in your <code class="text-sm">resources > views > components</code> directory with the same names as what you are copying over from <code class="text-sm">resources > views > components > bladewind</code>
        </x-bladewind::alert>
    </p>
    <br />
    <h2>If you are not into the Blues...</h2>
    <p>The primary precompiled color theme used for the BladewindUI components is blue. If your primary theme is not blue, you can change this in a few steps. This assumes you have some knowledge of Tailwind CSS and how to compile changes made to Laravel's app.css file.</p>
    <p>From your command line, while at the root of your Laravel project, type the following command to publish the uncompiled css files for the BladewindUI components.</p>
    <p>
        <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=raw-css --force</code></pre>
    </p>
    <p>You should now have in your <code class="inline">resources</code> directory, a <code class="inline text-red-400">bladewind</code> folder containing all the uncompiled tailwind css files. <a href="https://laravel.com/docs/9.x/mix" target="_blank">Refer to this article</a> if you are not familiar with compiling assets in Laravel.</p>
    <br />
    <h2>You can change everything</h2>
    <p>Truely, you can! These components are in essence just Laravel blade templates that sit right there in your project. If there are any implementations you are unhappy with, simply locate the particular blade template and dissect it at will.</p>
    <p>
        Something to keep in mind though. Most Bladewind updates we roll out may affect the blade files, css and js files. Updates that touch the css and js files require the library's assets to be republished. This is done automatically.
        If you wish to manually publish the assets just to be sure, run the command below.
    </p>
     <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=laravel-assets --force</code></pre><br />
     <p>
        To prevent any changes you made earlier from being overwritten by updates, we advise you to make all changes that overwrite Bladewind classes in your project's css file instead of editing the Bladewind css file directly.
     </p>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.customization');
        </script>
    </x-slot>
</x-app>