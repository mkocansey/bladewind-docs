<x-app>
    <x-slot:title>Customizing Theme Colours</x-slot:title>
    <x-slot:page_title>Theme Colours</x-slot:page_title>

    <p>BladewindUI ships with twelve colours from the TailwindCSS palette. The default colour used for the BladewindUI components is blue.</p>

    <div class="sm:grid-cols-6 grid grid-cols-3 gap-6">
        <div class="space-y-1">
            <div>Blue</div>
            <div class="w-24 bg-blue-500 h-10 rounded-md"></div>
            <div class="w-24 bg-blue-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Red</div>
            <div class="w-24 bg-red-600 h-10 rounded-md"></div>
            <div class="w-24 bg-red-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Amber</div>
            <div class="w-24 bg-amber-500 h-10 rounded-md"></div>
            <div class="w-24 bg-amber-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Emerald</div>
            <div class="w-24 bg-emerald-500 h-10 rounded-md"></div>
            <div class="w-24 bg-emerald-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Purple</div>
            <div class="w-24 bg-purple-500 h-10 rounded-md"></div>
            <div class="w-24 bg-purple-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Orange</div>
            <div class="w-24 bg-orange-500 h-10 rounded-md"></div>
            <div class="w-24 bg-orange-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Slate</div>
            <div class="w-24 bg-slate-500 h-10 rounded-md"></div>
            <div class="w-24 bg-slate-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Pink</div>
            <div class="w-24 bg-pink-500 h-10 rounded-md"></div>
            <div class="w-24 bg-pink-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Cyan</div>
            <div class="w-24 bg-cyan-500 h-10 rounded-md"></div>
            <div class="w-24 bg-cyan-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Violet</div>
            <div class="w-24 bg-violet-500 h-10 rounded-md"></div>
            <div class="w-24 bg-violet-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Indigo</div>
            <div class="w-24 bg-indigo-500 h-10 rounded-md"></div>
            <div class="w-24 bg-indigo-100 h-10 rounded-md"></div>
        </div>
        <div class="space-y-1">
            <div>Fuchsia</div>
            <div class="w-24 bg-fuchsia-500 h-10 rounded-md"></div>
            <div class="w-24 bg-fuchsia-100 h-10 rounded-md"></div>
        </div>
    </div>
    <p>&nbsp;</p>
    <p>You can tell from the palette above that BladewindUI uses <strong>Emerald</strong> for its green and <strong>Amber</strong> for its yellow.
    As stated earlier, the default colour used for the BladewindUI components is blue. If your primary theme is not blue, you can change this in a few steps. This assumes you have some basic knowledge of <a href="https://tailwindcss.com" target="_blank">Tailwind CSS</a>.</p>

    <p>Below is the tailwind.config.js file that ships with the library.</p>
<pre class="language-js line-numbers" data-line="7">
    <code>
// your-project/vendor/mkocansey/bladewind/tailwind.config.js
  theme: {
    extend: {
      colors: {
        primary: colors.blue,
        secondary: colors.slate,
        dark: {
            100: '#f0f1f2',
            200: '#d2d4d7',
            300: '#a7aaad',
            400: '#6c7075',
            500: '#4a4e53',
            600: '#33373c',
            700: '#262a2f',
            800: '#1C1F24',
            900: '#101114',
            950: '#0a0b0d'
        },
        green: colors.emerald,
      }
},
</code>
</pre>
    <br />
<p>
    If the default colours used in the library fit your project's colour theme you don't need to perform this next step. To change the colours used above, simply define overwriting values in your project's <code class="inline">tailwind.config.js</code>.
    This documentation website uses indigo as its primary colour.
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
        green: colors.emerald,
      }
},
    </code>
    </pre>
    <br />
    <pre class="language-js line-numbers" data-line="5">
    <code>
        // your-project/tailwind.config.js
  theme: {
    extend: {
      colors: {
        primary: {
            100: '#f3e8ff',
            200: '#e9d5ff',
            300: '#d8b4fe',
            400: '#c084fc',
            500: '#a855f7',
            600: '#9333ea',
            700: '#7e22ce',
            800: '#6d28d9',
            900: '#4c1d95',
        },
        secondary: colors.zinc,
        dark: colors.gray,
        green: colors.emerald,
      }
},
    </code>
    </pre>
    <br />
    <p>
        All components use the colour defined in the <code class="inline">primary</code> key above to display their background colour. This makes it easy for all components to quickly blend in to your preferred theme.
        From the example above, now all components will use shades of <strong>indigo</strong> as their background colour instead of blue.
    </p>

    <h3>If you are feeling geeky</h3>
    <p>The changes to the Tailwind config should be enough to get you your right colours. If however, for some reason you are in your geeky elements and prefer to access all the uncompiled BladewindUI CSS files, you can run the command below.</p>
    <pre class="lang-bash command-line">
        <code>
            php artisan vendor:publish --tag=bladewind-assets --force
        </code></pre>
    <p>
        You should now have in your <code class="inline">public</code> directory, a <code class="inline">vendor > bladewind > <span class=" text-red-400">assets</span></code> folder containing all the uncompiled tailwind css files.
        You can modify these files to suit your theme specification.
        <a href="https://laravel.com/docs/11.x/vite" target="_blank">Refer to this article</a> if you are not familiar with compiling assets in Laravel.
    </p>
    <h2 id="debug">Debug Compilation Issues</h2>
    <p>
    <x-bladewind::alert show_close_icon="false">
        Consider the information below if your styles don't seem to be compiling or components appear transparent.
    </x-bladewind::alert>
    </p>
    <p>
        As explained earlier, BladewindUI allows you to define your own colour theme in your project's <code class="inline">tailwind.config.js</code> file.
        The BladewindUI styles will get compiled once you build your assets. Since <a href="/install#publishing">publishing</a> the
        BladewindUI assets is completely optional, your components will still exist in <code class="inline">vendor/mkocansey/bladewind</code> if you have not published the Bladewind components.
        In that case you will need to tell Tailwind to also compile the CSS classes in <code class="inline">vendor/mkocansey/bladewind</code> as shown in the code below.
    </p>
    <pre class="language-js line-numbers" data-line="8">
    <code>
        // your-project/tailwind.config.js
        ...
        module.exports = {
          darkMode: 'class',
          content: [
              "./resources/**/*.blade.php",
              "./resources/**/*.js",
              "./vendor/mkocansey/bladewind/resources/views/**/*.blade.php",
          ],
        ...
    </code>
    </pre>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#debug">Debug compile issues</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.colours');
        </script>
    </x-slot>
</x-app>
