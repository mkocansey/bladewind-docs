<x-app>
    <x-slot:title>Spinner Component</x-slot:title>
    <x-slot:page_title>Spinner</x-slot:page_title>

    <p>
        Display a spinning icon
    </p>
<div class="space-x-2">
    <x-bladewind::spinner  />
    <x-bladewind::spinner color="primary"  />
    <x-bladewind::spinner color="red"  />
    <x-bladewind::spinner color="yellow"  />
    <x-bladewind::spinner color="green"  />
    <x-bladewind::spinner color="purple"  />
    <x-bladewind::spinner color="pink"  />
    <x-bladewind::spinner color="orange"  />
    <x-bladewind::spinner color="cyan"  />
    <x-bladewind::spinner color="violet"  />
    <x-bladewind::spinner color="indigo"  />
    <x-bladewind::spinner color="fuchsia"  />
</div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner  /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner color="purple"  /&gt;
        </code>
    </pre>


    <x-bladewind::spinner size="medium"  />

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner size="medium"  /&gt;
        </code>
    </pre>

    <x-bladewind::spinner size="big"  />

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner size="big"  /&gt;
        </code>
    </pre>

    <x-bladewind::spinner size="xl"  />

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner size="xl"  /&gt;
        </code>
    </pre>

    <x-bladewind::spinner size="omg"  />

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::spinner size="omg"  /&gt;
        </code>
    </pre>


    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Spinner component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>size</td>
            <td>small</td>
            <td><code class="inline">small</code> <code class="inline">medium</code> <code class="inline">big</code> <code class="inline">xl</code> <code class="inline">omg</code></td>
        </tr>
        <tr>
            <td>color</td>
            <td>gray</td>
            <td>Set the colour of the spinner.<br><br /> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code>
                <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
                <code class="inline">orange</code> <code class="inline">gray</code> <code class="inline">cyan</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-spinner</td>
            <td>Any additional css you wish to add.</td>
        </tr>
    </x-bladewind::table>

    <h3>Spinner with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::spinner
                size="medium"
                class="m-0" /&gt;
        </code>
    </pre>


    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > spinner.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-spinner');
        </script>
    </x-slot>
</x-app>
