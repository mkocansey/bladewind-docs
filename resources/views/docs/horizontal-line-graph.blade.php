<x-app>
    <x-slot:title>Horizontal Line Graph Component</x-slot:title>
    <x-slot:page_title>Horizontal Line Graph</x-slot:page_title>

    <p>
       This component is structurally similar to the <a href="">Progress Bar</a> component. In fact, it is rendered using the progress bar component.
       The default colour used for the horizontal line graph is blue.
    </p>
    <p>
        <x-bladewind::horizontal-line-graph label="Women Farmers: " percentage="55.8" />
    </p>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="55.8" /&gt;
        </code>
    </pre>

    <p>
        That’s the basic syntax for displaying a horizontal line graph but let’s look at more practical examples of how to use this component in your applications.
    </p>
    <div class="grid grid-cols-2 gap-6">
        <x-bladewind::card title="Mobile Money Penetration">
            <x-bladewind::horizontal-line-graph label="MTN: " percentage="55" color="yellow" />
            <x-bladewind::horizontal-line-graph label="Vodafone: " percentage="30" color="red" class="py-3" />
            <x-bladewind::horizontal-line-graph label="AirtelTigo: " percentage="15" color="blue" />
        </x-bladewind::card>
        <x-bladewind::card title="Farmer age ratio">
            <x-bladewind::horizontal-line-graph label="Above 60: " percentage="33" color="cyan" />
            <x-bladewind::horizontal-line-graph label="Between 40 - 60: " percentage="43" color="purple" class="py-3" />
            <x-bladewind::horizontal-line-graph label="Under 40: " percentage="24" color="gray" />
        </x-bladewind::card>
    </div>
    <pre class="language-markup line-numbers" data-line="5,10,16,25,30,36">
        <code>
            &lt;div class="grid grid-cols-2 gap-6"&gt;

                &lt;x-bladewind.card title="Mobile Money Penetration"&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="MTN: "
                        percentage="55"
                        color="yellow" /&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="Vodafone: "
                        percentage="30"
                        color="red"
                        class="py-3" /&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="AirtelTigo: "
                        percentage="15"
                        color="blue" /&gt;

                &lt;/x-bladewind.card&gt;

                &lt;x-bladewind.card title="Farmer age ratio"&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="Above 60: "
                        percentage="33"
                        color="cyan" /&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="Between 40 - 60: "
                        percentage="43"
                        color="purple"
                        class="py-3" /&gt;

                    &lt;x-bladewind.horizontal-line-graph
                        label="Under 40: "
                        percentage="24"
                        color="gray" /&gt;

                &lt;/x-bladewind.card&gt;

            &lt;/div>
        </code>
    </pre>

    <h2 id="colours">Different Colours</h2>
    <p>
        You can display a horizontal line graph in nine different colours by setting the color attribute on the component, like this, <code class="inline text-red-500">color="red"</code>.
        Like most BladewindUI components that have colour options, there are two shades, <code class="inline">faint</code>, and <code class="inline">dark</code>. The default shade is <code class="inline">faint</code>.
        You can switch between shades by setting <code class="inline text-red-500">shade="dark"</code> or <code class="inline text-red-500">shade="faint"</code>
    </p>
   <h3>Faint Colours</h3>
    <x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="10"
        color="red" />

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="10"
                color="red" /&gt;
        </code>
    </pre>

    <x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="20"
        color="yellow" />

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="20"
                color="yellow"/&gt;
        </code>
    </pre>

    <x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="30"
        color="green" />

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="30"
                color="green" /&gt;
        </code>
    </pre>

    <x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="40"
        color="pink" />
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="40"
                color="pink" /&gt;
        </code>
    </pre>

    <x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="50"
        color="cyan" />

        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="50"
                    color="cyan" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="60"
        color="gray" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="60"
                    color="gray" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="70"
        color="purple" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="70"
                    color="purple" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="80"
        color="orange" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="80"
                    color="orange" /&gt;
            </code>
        </pre>
    </p>
    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="80"
        color="violet" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="80"
                    color="violet" /&gt;
            </code>
        </pre>
    </p>
    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="80"
        color="indigo" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="80"
                    color="indigo" /&gt;
            </code>
        </pre>
    </p>
    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="80"
        color="fuchsia" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="80"
                    color="fuchsia" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="90"
        /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="90" /&gt;
            </code>
        </pre>
    </p>

    <p>
        <h3>Dark Colours</h3>
    </p>
    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="10"
        color="red" shade="dark" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="10"
                    shade="dark" color="red" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="20"
        shade="dark" color="yellow" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="20"
                    shade="dark" color="yellow" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="30"
        shade="dark" color="green" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="30"
                    shade="dark" color="green" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="40"
        shade="dark" color="pink" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="40"
                    shade="dark" color="pink" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="40"
        shade="dark" color="fuchsia" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="40"
                    shade="dark" color="fuchsia" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="40"
        shade="dark" color="indigo" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="40"
                    shade="dark" color="indigo" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="40"
        shade="dark" color="violet" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="40"
                    shade="dark" color="violet" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="50"
        shade="dark" color="cyan" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="50"
                    shade="dark" color="cyan" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="60"
        shade="dark" color="gray" /></p>
    <p>
        <pre class="language-markup line-numbers" data-line="4">
            <code>
                &lt;x-bladewind.horizontal-line-graph
                    label="Women Farmers: "
                    percentage="60"
                    shade="dark" color="gray" /&gt;
            </code>
        </pre>
    </p>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="70"
        shade="dark" color="purple" /></p>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="70"
                shade="dark" color="purple" /&gt;
        </code>
    </pre>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="80"
        shade="dark" color="orange" /></p>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="80"
                shade="dark" color="orange" /&gt;
        </code>
    </pre>

    <p><x-bladewind::horizontal-line-graph
        label="Women Farmers: "
        percentage="90"
        shade="dark" /></p>

    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage="90"
                shade="dark" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Horizontal Line Graph component.</p>
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
            <td>There are twelve colors to choose from. <br /><br /><code class="inline">primary</code> <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>shade</td>
            <td>faint</td>
            <td>Works with <code class="inline">color</code> to determine how faint or dark the horizontal line graph colours are. <code class="inline">faint</code> <code class="inline">dark</code></td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Label to display above the horizontal line graph.</td>
        </tr>
        <tr>
            <td>percentage_label_opacity</td>
            <td>50</td>
            <td>Specifies the opacity of the percentage label. In case you want the percentage label to be displayed a shade less than the label. Available values are what's been defined in the <a href="https://tailwindcss.com/docs/opacity" target="_blank">TailwindCSS docs for opacity</a> without the 'opacity-' prefix.<br/>
            <code class="inline">0</code> <code class="inline">5</code> <code class="inline">10</code> <code class="inline">20</code> <code class="inline">25</code> <code class="inline">30</code> <code class="inline">40</code> <code class="inline">50</code> <code class="inline">60</code> <code class="inline">70</code> <code class="inline">75</code> <code class="inline">80</code> <code class="inline">90</code> <code class="inline">95</code> <code class="inline">100</code>
            </td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-horizontal-line-graph</td>
            <td>Any additional CSS you wish to add.</td>
        </tr>
    </x-bladewind::table>

    <h3>Horizontal Line Graph with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.horizontal-line-graph
                label="Women Farmers: "
                percentage = "50"
                color = "red",
                shade = "faint",
                percentage_label_opacity = "75",
                class="py-4" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > horizontal-line-graph.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-hlg');
        </script>
    </x-slot>
</x-app>
