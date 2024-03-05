<x-app>
    <x-slot:title>Customizing Dark Mode</x-slot:title>
    <x-slot:page_title>Dark Mode Support</x-slot:page_title>

    <p>BladewindUI ships with support for dark mode for all components. The <code class="inline">colors.slate</code> palette is used for BladewindUI's dark mode as defined in its <code class="inline">tailwind.config.js</code> file.
    </p>
    <pre class="language-js line-numbers">
    <code>
        // your-project/vendor/mkocansey/bladewind/tailwind.config.js
  theme: {
    extend: {
      colors: {
        ...
        dark: colors.slate,
        ...
      }
},
    </code>
    </pre>
<p>
    To change the colour used for dark mode, simply define an overwriting value in your project's <code class="inline">tailwind.config.js</code>.
</p>
    <pre class="language-js line-numbers" data-line="6">
    <code>
        // your-project/tailwind.config.js
  theme: {
    extend: {
      colors: {
        ...
        dark: colors.gray,
        ...
      }
},
    </code>
    </pre>
    <p>
        BladewindUI does not use specific colours for its dark mode definitions, instead, it uses the <code class="inline">dark</code> alias, thus, any colour defined for the <code class="inline">dark</code> key in the config file will be used.
    </p>
    <p>From the example above, dark mode will now use the gray palette instead of slate.</p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#noprefix">Remove the bladewind prefix</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#change-theme">Change the colour theme</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#change-it-all">Change everything</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#datepicker-translations">Translating the Datepicker</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.darkmode');
        </script>
    </x-slot>
</x-app>
