<x-app>
    <x-slot:title>Customizing BladewindUI</x-slot:title>
    <x-slot:page_title>Customizing BladewindUI</x-slot:page_title>
    <p>
        BladewindUI has been designed to not interfere with the existing components in your project.
        Probably you just want to take this for a spin before deciding if BladewindUI components will be the only components you use in your project.
        Once installed, all BladewindUI components are invoked by default from your project's <code class="inline">vendor > mkocansey > bladewind</code> directory.
        Per Laravel convention, this results in you having to type the <code class="inline text-red-400">&lt;x-bladewind</code> prefix everytime you want to use a BladewindUI component.
    </p>
    <pre class="language-markup">
        <code>
            &lt;<b>x-bladewind</b>::button&gt;Save User&lt;/x-bladewind::button&gt;
        </code>
    </pre>
    <p>
        Once you <a href="/#publishing">publish</a> the BladewindUI components, the files get moved to your project's <code class="inline">resources > views > components > <span class="text-red-400">bladewind</span></code> directory.
        You can then use the dot, instead of the colon syntax to access a component.
    </p>
    <pre class="language-markup">
        <code>
            &lt;<b>x-bladewind</b>.button&gt;Save User&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <h2 id="noprefix">Getting rid of the <b class="font-bold">bladewind</b> prefix </h2>
    <p>
        It is possible to get rid of the bladewind prefix entirely. <code class="inline text-red-400">&lt;x-bladewind.button&gt;Save User&lt;/x-bladewind.button&gt;</code> becomes <code class="inline text-red-400">&lt;x-button&gt;Save User&lt;/x-button&gt;</code>.
        To achieve this, you should have already <a href="/#publishing">published the Bladewind components</a>. Next you will move all the blade files in <code class="inline">resources > views > components > bladewind</code> into <code class="inline">resources > views > components</code>.
        You can then delete the <span>bladewind</span> folder from your <code class="inline">resources > views > components</code> folder since it should technically be empty at this point.
    </p>
    <p>
        <x-bladewind::alert type="warning" show_close_icon="false">
            Please note that any existing components in your <code class="text-sm">resources > views > components</code> directory with the same name as what you are moving from the <code class="text-sm">resources > views > components > bladewind</code> directory, will be overwritten.
        </x-bladewind::alert>
    </p>

    <h2 id="change-it-all">You can change everything</h2>
    <p>Truly, you can! These components are in essence just Laravel blade templates that sit right in your project. If there are any implementations you are unhappy with, simply locate the particular blade template and dissect it at will.
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
     <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-public --force</code></pre>
     <p>
         <x-bladewind::alert type="info" show_close_icon="false">
             To prevent any changes you made earlier from being overwritten by updates, we advise you to make all changes that overwrite Bladewind css classes in your project's css file instead of editing the Bladewind css file directly. Your project's css file should always be included <b>after</b> the Bladewind css file.
         </x-bladewind::alert>
     </p>
    <h2 id="datepicker-translations">Changing Datepicker Translations</h2>
    <p>
        The <a href="/component/datepicker">Datepicker component</a> is wired to speak a couple of languages. The language files are served from BladewindUI's vendor directory,
        <code class="inline">
            vendor > mkocansey > bladewind > lang
        </code>. Currently the available languages contributed by the community are English, French, Italian, Arabic, German, Chinese, Spanish and Indonesian. You can add more languages as you see fit or even modify the existing translations. If you want to do this for just your project you will first need to publish the language files by running the command below from the root of your project.
        You can <a href="/contribute">contribute</a> a new language translation.
    </p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-lang --force</code></pre><br />
    <p>
        The language files will now be available in your project's <code class="inline">lang > vendor > bladewind</code> directory. You can now add more languages or edit the language files that were published.
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#noprefix">Remove bladewind prefix</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#change-it-all">Change everything</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#datepicker-translations">Translating the Datepicker</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.customization');
        </script>
    </x-slot>
</x-app>
