<x-app>
    <x-slot name="title">Customizing BladewindUI</x-slot>
    <h1 class="page-title">Customizing BladewindUI</h1>
    <p>
        BladewindUI has been designed to not interfere with the existing components in your project.
        Probably you just want to take this for a spin before deciding if BladewindUI components will be the only components you use in your project.
        Once installed, all BladewindUI components are invoked from the <code class="inline">vendor > mkocansey > bladewind</code> directory unless published.
        Per Laravel convention, this results in you having to type the <code class="inline text-red-400">&lt;x-bladewind</code> prefix everytime you want to use a BladewindUI component.
    </p>
    <p>
        <pre class="language-markup">
            <code>
                &lt;<b>x-bladewind</b>::button&gt;Save User&lt;/x-bladewind::button&gt;
            </code>
        </pre>
    </p>
    <p>
        Once you publish the BladewindUI components, the files get moved to the <code class="inline">resources > views > components > <span class="text-red-400">bladewind</span></code> directory.
        You can then use the dot, instead of colon syntax to access a component.
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
        Using any of the BladewindUI components can be without the bladewind prefix. This <code class="inline text-red-400">&lt;x-bladewind.button&gt;Save User&lt;/x-bladewind.button&gt;</code> becomes <code class="inline text-red-400">&lt;x-button&gt;Save User&lt;/x-button&gt;</code>.
        Achieving this is quite easy. This requires that you have run the command to <a href="/#publishing">publish Bladewind components</a> .
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
    <p>The primary precompiled colour theme used for the BladewindUI components is blue. If your primary theme is not blue, you can change this in a few steps. This assumes you have some knowledge of <a href="https://tailwindcss.com" target="_blank">Tailwind CSS</a>
        and how to compile changes made to Laravel's <code class="inline">app.css</code> file.</p>
    <p>From your command line, while at the root of your Laravel project, type the following command to publish the uncompiled css files for the BladewindUI components.</p>
    <p>
        <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-assets --force</code></pre>
    </p>
    <p>
        You should now have in your <code class="inline">public</code> directory, a <code class="inline">vendor > bladewind > <span class=" text-red-400">assets</span></code> folder containing all the uncompiled tailwind css files.
        You can modify these files to suit your theme specification.
        <a href="https://laravel.com/docs/9.x/mix" target="_blank">Refer to this article</a> if you are not familiar with compiling assets in Laravel.</p>
    <br />
    <h2>You can change everything</h2>
    <p>Truely, you can! These components are in essence just Laravel blade templates that sit right in your project. If there are any implementations you are unhappy with, simply locate the particular blade template and dissect it at will.
        At the end of every component documentation page, you will find the name of the blade file that defines that component.
    </p>
    <p>
        <x-bladewind::alert type="info" show_close_icon="false">
        Something to keep in mind though. Most Bladewind updates we roll out may affect the blade files, css and js files.
        </x-bladewind::alert>
    </p>
    <p>
        Updates that touch the css and js files require the library's assets to be republished. Run the command below to republish the library's css and js files.
    </p>
     <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-public --force</code></pre><br />
     <p>
         <x-bladewind::alert type="info" show_close_icon="false">
             To prevent any changes you made earlier from being overwritten by updates, we advise you to make all changes that overwrite Bladewind css classes in your project's css file instead of editing the Bladewind css file directly. Your project's css file should always be included <b>after</b> the Bladewind css file.
         </x-bladewind::alert>
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
