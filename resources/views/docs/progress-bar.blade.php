<x-app>
    <x-slot:title>Progress Bar Component</x-slot:title>
    <x-slot:page_title>Progress Bar</x-slot:page_title>

    <p>
         Display progress.
        The progress bar expects a percentage. The bar will then fill up to the percentage specified. There is a subtle animation when the bar is filling up to its desired percentage. The default progress bar color is blue.
    </p>

    <p class="mt-14">
        <x-bladewind::progress-bar percentage="36" />
    </p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="36" /&gt;
        </code>
    </pre>

    <p>
        The progress bar percentage is not displayed by default. To display it, set the attribute <code class="inline text-red-500">show_percentage_label="true"</code>.
        The progress bar percentage will then be displayed but within the bar.
    </p>
    <p class="mt-14">
        <x-bladewind::progress-bar percentage="36" show_percentage_label="true" />
    </p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="36" show_percentage_label="true" /&gt;
        </code>
    </pre>

    <p>
        If you prefer to have the percentage out of the bar, set <code class="inline text-red-500">show_percentage_label_inline="false"</code>.
        With the percentage now out of the bar, you can specify if it
        should be placed above or below the bar. The default is top left. To change the positioning of the  percentage label, you need to set the
        <code class="inline text-red-500">percentage_label_position</code> attribute. The available options are <code class="inline">top left</code>
        <code class="inline">top center</code> <code class="inline">top right</code> <code class="inline">bottom left</code> <code class="inline">bottom center</code>
        <code class="inline">bottom right</code>.
    </p>
    <p class="mt-14">
        <x-bladewind::progress-bar percentage="36" show_percentage_label="true" show_percentage_label_inline="false" />
    </p>
    <p class="mt-14">
        <x-bladewind::progress-bar percentage="53" show_percentage_label="true" show_percentage_label_inline="false" percentage_label_position="top center" />
    </p>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::progress-bar
                percentage="53"
                show_percentage_label_inline="false"
                percentage_label_position="top center"
                show_percentage_label="true" /&gt;
        </code>
    </pre>
    <p class="mt-14">
        <x-bladewind::progress-bar percentage="75" show_percentage_label="true" show_percentage_label_inline="false" percentage_label_position="top right" />
    </p>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::progress-bar
                percentage="75"
                show_percentage_label_inline="false"
                percentage_label_position="top right"
                show_percentage_label="true" /&gt;
        </code>
    </pre>
    <p>
        You may want to append a suffix or prepend a prefix to the percentage label to achieve things like <code class="inline">53% complete</code> or <code class="inline">Upload in progress: 53% complete</code>.
        Depending on your needs you can set <code class="inline text-red-500">percentage_prefix</code> and/or <code class="inline text-red-500">percentage_suffix</code>.
    </p>
    <p class="mt-14">
        <x-bladewind::progress-bar percentage="75" show_percentage_label="true"
            show_percentage_label_inline="false" percentage_suffix="complete" />
    </p>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::progress-bar
                percentage="75"
                show_percentage_label_inline="false"
                percentage_suffix="complete"
                show_percentage_label="true" /&gt;
        </code>
    </pre>

    <h2 id="colours">Different Colours</h2>
    <p>
        You can display a progress bar in nine different colours by setting the color attribute on the progress bar, like this, <code class="inline text-red-500">color="red"</code>.
        Like most BladewindUI components that have colour options, there are two shades, <code class="inline">faint</code>, and <code class="inline">dark</code>. The default shade is <code class="inline">faint</code>
    </p>
    <h3 id="faint">Faint Colours</h3>
    <p><x-bladewind::progress-bar percentage="10" color="red" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="10" color="red" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="20" color="yellow" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="20" color="yellow"/&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="30" color="green" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="30" color="green" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="40" color="pink" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="40" color="pink" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="50" color="cyan" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="50" color="cyan" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="60" color="gray" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="60" color="gray" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="70" color="purple" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="70" color="purple" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" color="orange" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" color="orange" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" color="violet" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" color="violet" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" color="fuchsia" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" color="fuchsia" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" color="indigo" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" color="indigo" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="90" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="90" /&gt;
        </code>
    </pre>
    <h3 id="dark">Dark Colours</h3>
    <p><x-bladewind::progress-bar percentage="10" color="red" shade="dark" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="10" shade="dark" color="red" /&gt;
            </code>
        </pre>
    </p>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="20" shade="dark" color="yellow" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="20" shade="dark" color="yellow" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="30" shade="dark" color="green" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="30" shade="dark" color="green" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="40" shade="dark" color="pink" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="40" shade="dark" color="pink" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="50" shade="dark" color="cyan" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="50" shade="dark" color="cyan" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="60" shade="dark" color="gray" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="60" shade="dark" color="gray" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="70" shade="dark" color="purple" /></p>
        <pre class="language-markup">
            <code>
                &lt;x-bladewind::progress-bar percentage="70" shade="dark" color="purple" /&gt;
            </code>
        </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" shade="dark" color="orange" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" shade="dark" color="orange" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" shade="dark" color="violet" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" shade="dark" color="violet" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" shade="dark" color="indigo" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" shade="dark" color="indigo" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <p><x-bladewind::progress-bar percentage="80" shade="dark" color="fuchsia" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="80" shade="dark" color="fuchsia" /&gt;
        </code>
    </pre>
    <div class="h-3"></div>
    <x-bladewind::progress-bar percentage="90" shade="dark" />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::progress-bar percentage="90" shade="dark" /&gt;
        </code>
    </pre>
    {{-- <p>
    <h2>Dynamic Progression </h2>
    </p>
    <p>
    The percentage of the progress bar can be programmatically updated after the bar has been loaded. This might be useful when displaying file upload progress or even progress of dynamic report generation. The use cases are endless.
    </p> --}}

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Progress Bar component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>percentage</td>
            <td>0</td>
            <td>Any value between 0 and 100.</td>
        </tr>
        <tr>
            <td>color</td>
            <td>primary</td>
            <td>There are twelve colors to choose from. <br /><br /><code class="inline">primary</code><code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code> <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>show_percentage_label</td>
            <td>false</td>
            <td>Should the percentage label be displayed. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>show_percentage_label_inline</td>
            <td>true</td>
            <td>Should the percentage label be displayed within the progress bar. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>percentage_label_position</td>
            <td>top left</td>
            <td>Specifies the placement of the percentage label. <br /><code class="inline">top left</code> <code class="inline">top center</code> <code class="inline">top right</code> <code class="inline">bottom left</code> <code class="inline">bottom center</code> <code class="inline">bottom right</code></td>
        </tr>
        <tr>
            <td>shade</td>
            <td>faint</td>
            <td>Works with <code class="inline">color</code> to determine how faint or dark the progress bar colours are. <br /><code class="inline">faint</code> <code class="inline">dark</code></td>
        </tr>
        <tr>
            <td>percentage_prefix</td>
            <td><em>blank</em></td>
            <td>Specifies what text should be displayed before the percentage label.</td>
        </tr>
        <tr>
            <td>percentage_suffix</td>
            <td><em>blank</em></td>
            <td>Specifies what text should be displayed after the percentage label.</td>
        </tr>
        <tr>
            <td>percentage_label_opacity</td>
            <td>100</td>
            <td>Specifies the opacity of the percentage label. In case you want the percentage label to be displayed a shade less than the prefix or suffix. Available values are what's been defined in the <a href="https://tailwindcss.com/docs/opacity" target="_blank">TailwindCSS docs for opacity</a> without the 'opacity-' prefix.<br/>
            <code class="inline">0</code> <code class="inline">5</code> <code class="inline">10</code> <code class="inline">20</code> <code class="inline">25</code> <code class="inline">30</code> <code class="inline">40</code> <code class="inline">50</code> <code class="inline">60</code> <code class="inline">70</code> <code class="inline">75</code> <code class="inline">80</code> <code class="inline">90</code> <code class="inline">95</code> <code class="inline">100</code>
            </td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-progress-bar</td>
            <td>Any additional css you wish to add.</td>
        </tr>
    </x-bladewind::table>

    <h3>Progress Bar with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::progress-bar
                percentage = "50"
                color = "red",
                show_percentage_label = "false",
                show_percentage_label_inline = "true",
                percentage_label_position = "top left",
                shade = "faint",
                percentage_prefix = "uploading content: ",
                percentage_suffix = "completed",
                class="m-0" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > progress-bar.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
        <div class="flex items-center pl-5"><div class="dot"></div><a href="#faint">Faint shade</a></div>
        <div class="flex items-center pl-5"><div class="dot"></div><a href="#dark">Darker shade</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-progress-bar');
        </script>
    </x-slot>
</x-app>
