<x-app>
    <x-slot:title>Customizing Theme Colours</x-slot:title>
    <x-slot:page_title>Theme Colours</x-slot:page_title>

    <p>BladewindUI ships with nine colours from the TailwindCSS palette. The default colour used for the BladewindUI components is blue.</p>

    <div class="grid-cols-9 grid">
        <div class="space-y-2.5">
            <div>Blue</div>
            <div class="w-16 bg-blue-500 h-10 rounded-md"></div>
            <div class="w-16 bg-blue-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Red</div>
            <div class="w-16 bg-red-600 h-10 rounded-md"></div>
            <div class="w-16 bg-red-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Amber</div>
            <div class="w-16 bg-amber-500 h-10 rounded-md"></div>
            <div class="w-16 bg-amber-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Emerald</div>
            <div class="w-16 bg-emerald-500 h-10 rounded-md"></div>
            <div class="w-16 bg-emerald-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Purple</div>
            <div class="w-16 bg-purple-500 h-10 rounded-md"></div>
            <div class="w-16 bg-purple-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Orange</div>
            <div class="w-16 bg-orange-500 h-10 rounded-md"></div>
            <div class="w-16 bg-orange-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Slate</div>
            <div class="w-16 bg-slate-500 h-10 rounded-md"></div>
            <div class="w-16 bg-slate-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Pink</div>
            <div class="w-16 bg-pink-500 h-10 rounded-md"></div>
            <div class="w-16 bg-pink-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-2.5">
            <div>Cyan</div>
            <div class="w-16 bg-cyan-500 h-10 rounded-md"></div>
            <div class="w-16 bg-cyan-100 h-10 rounded-md"></div>
        </div>
    </div>
    <p>&nbsp;</p>
    <p>You can tell from the palette above that BladewindUI uses <strong>Emerald</strong> for its green and <strong>Amber</strong> for its yellow.
    As stated earlier, the default colour used for the BladewindUI components is blue. If your primary theme is not blue, you can change this in a few steps. This assumes you have some basic knowledge of <a href="https://tailwindcss.com" target="_blank">Tailwind CSS</a>.</p>

    <p>Below if the tailwind.config.js file that ships with the library.</p>
    <pre class="language-js line-numbers">
    <code>
        // your-project/vendor/mkocansey/bladewind/tailwind.config.js
  theme: {
    extend: {
      colors: {
        primary: colors.blue,
        secondary: colors.slate,
        dark: colors.slate,
        success: colors.emerald,
        error: colors.red,
        warning: colors.amber,
        info: colors.blue
      }
},
    </code>
    </pre>
<p>
    To change the colours used above, simply define overwriting values in your project's <code class="inline">tailwind.config.js</code>.
</p>
    <pre class="language-js line-numbers" data-line="5">
    <code>
        // your-project/tailwind.config.js
  theme: {
    extend: {
      colors: {
        primary: colors.indigo,
        secondary: colors.zinc,
        dark: colors.gray,
        success: colors.green,
        error: colors.rose,
        warning: colors.orange,
        info: colors.blue
      }
},
    </code>
    </pre>
    <p>
        All components use the colour defined in the <code class="inline">primary</code> key above to display their background colour. This makes it easy for all components to quickly blend in to your preferred theme.
        From the example above, now all components will use shades of <strong>indigo</strong> as their background colour instead of blue.
    </p>

    <h3>If you are feeling geeky</h3>
    <p>The changes to the Tailwind config should be enough to get you your right colours. If however, for some reason you are in your geeky elements and prefer to access all the uncompiled BladewindUI CSS files, you can run the command below.</p>
    <pre class="lang-bash command-line"><code>php artisan vendor:publish --provider="Mkocansey\Bladewind\BladewindServiceProvider" --tag=bladewind-assets --force</code></pre>
    <p>
        You should now have in your <code class="inline">public</code> directory, a <code class="inline">vendor > bladewind > <span class=" text-red-400">assets</span></code> folder containing all the uncompiled tailwind css files.
        You can modify these files to suit your theme specification.
        <a href="https://laravel.com/docs/9.x/mix" target="_blank">Refer to this article</a> if you are not familiar with compiling assets in Laravel.
    </p>

    <x-slot:side_nav>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.colours');
        </script>
    </x-slot>
</x-app>
