<x-app>
    <x-slot:title>Customizing Dark Mode</x-slot:title>
    <x-slot:page_title>Dark Mode Support</x-slot:page_title>

    <p>
        BladewindUI ships with support for dark mode for all components. The <code class="inline">colors.gray</code>
        palette is used for BladewindUI's dark mode as defined in its <code class="inline">tailwind.config.js</code> file.
    </p>
    <p>

    </p>
    <pre class="language-js line-numbers">
    <code>
        // your-project/vendor/mkocansey/bladewind/tailwind.config.js
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
    To change the colour used for dark mode, simply define an overwriting value in your project's <code class="inline">tailwind.config.js</code>.
</p>
    <pre class="language-js line-numbers" data-line="6">
    <code>
        // your-project/tailwind.config.js
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
        BladewindUI does not use specific colours for its dark mode definitions, instead, it uses the <code class="inline">dark</code> alias, thus, any colour defined for the <code class="inline">dark</code> key in the config file will be used.
    </p>
    <p>From the example above, dark mode will now use the slate palette instead of gray.</p>

    <h2 id="selector">Base Colour and DarkMode Selector</h2>
    <h3>Base Colour</h3>
    <p>
        Considering every user can have their own base colour when building for dark mode support, the BladewindUI components had to make an assumption
        of a base dark mode colour and build on top of that. We built on top the colour scale of <code class="inline">bg-dark-700</code>.
        This means, in dark mode, we assume your main container has a background colour of <code class="inline">bg-dark-700</code>.
        Where <code class="inline">dark</code> is replaced with the colour defined in your <code class="inline">tailwind.config.js</code>
        for <code class="inline">dark: colors.gray</code>. The background colour of this documentation website is <code class="inline">bg-gray-700</code>.
    </p>
    <h3>darkMode Selector</h3>
    <p>
        The dark mode classes in BladewindUI are compiled using <code class="inline">darkMode: 'class'</code> in the tailwind.config.js.
        It is important to use the same in your project's <code class="inline">tailwind.config.js</code> to ensure the styles take effect.
        The styles will likely not work if you compile with <code class="inline">darkMode: 'media'</code>.
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#selector">Base colour and darkMode selector</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.darkmode');
        </script>
    </x-slot>
</x-app>
