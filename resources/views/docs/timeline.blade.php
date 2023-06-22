<x-app>
    <x-slot:title>Timeline Component</x-slot:title>
    <x-slot:page_title>Timeline</x-slot:page_title>

    <p>
        Display date and progress or statuses on a timeline. The date format you display is completely your choice. The timeline just expects a date string. The default colour for the timeline component is blue but you can choose from <a href="#colours">eight additional colour</a> options.
        The timeline component does not centre itself in its parent element. You will need to figure that bit out in your layout. In the example below the timeline has been wrapped in
        <code class="inline">&lt;div class="w-96 mx-auto"&gt;...&lt;/div&gt;</code>
    </p>
    <p>
        Completed events in the BladewindUI Timeline show a checkmark, while upcoming events are denoted with an empty circle. To set a timeline as completed set the attribute <code class="inline text-red-500">completed="true"</code>.
    </p>

    <div class="w-96 mx-auto pb-10">
        <x-bladewind::timeline date="18-JUL" label="You signed up" completed="true" />
        <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" completed="true" />
        <x-bladewind::timeline date="20-JUL" label="Customer rep called" completed="true" />
        <x-bladewind::timeline label="Account is being reviewed" />
        <x-bladewind::timeline label="Account activated" />
    </div>

    <pre class="language-markup line-numbers" data-line="4,9,14">
        <code>
            &lt;x-bladewind.timeline
                date="18-JUL"
                label="You signed up"
                completed="true" /&gt;

            &lt;x-bladewind.timeline
                date="19-JUL"
                label="Customer rep assigned"
                completed="true" /&gt;

            &lt;x-bladewind.timeline
                date="20-JUL"
                label="Customer rep called"
                completed="true" /&gt;

            &lt;x-bladewind.timeline label="Account is being reviewed" /&gt;

            &lt;x-bladewind.timeline label="Account activated" /&gt;
        </code>
    </pre>

    <h2 id="stacked">Stacked Timeline</h2>
    <p>
        By default dates are displayed on the left and the corresponding events on the right. This behaviour can be changed to stack dates on top of events. This can be achieved by setting
        the attribute <code class="inline text-red-500">stacked="true"</code>.
    </p>

    <div class="w-96 mx-auto pb-10">
        <x-bladewind::timeline date="18-JUL" label="You signed up" completed="true" stacked="true" />
        <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" completed="true" stacked="true" />
        <x-bladewind::timeline date="20-JUL" label="Customer rep called" completed="true" stacked="true" />
        <x-bladewind::timeline label="Account is being reviewed" stacked="true" />
        <x-bladewind::timeline label="Account activated" stacked="true" />
    </div>
    <pre class="language-markup line-numbers" data-line="5, 11,17,22,27">
        <code>
            &lt;x-bladewind.timeline
                date="18-JUL"
                label="You signed up"
                completed="true"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline
                date="19-JUL"
                label="Customer rep assigned"
                completed="true"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline
                date="20-JUL"
                label="Customer rep called"
                completed="true"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline
                label="Account is being reviewed"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline
                label="Account activated"
                stacked="true" /&gt;
        </code>
    </pre>

    <h2 id="icons">Different Completed Event Icons</h2>
    <p>
        Thanks to the BladewindUI <a href="/component/icon">Icon component</a>, embedding icons in the Timeline is easy.
        By default, completed events are displayed with a checkmark. It is possible to use any <a href="https://heroicons.com" target="_blank">Heroicons</a> icon for your completed events timeline.
        Just set the attribute <code class="inline text-red-500">icon="name-of-icon"</code>.
    </p>

    <div class="w-96 mx-auto pb-10">
        <x-bladewind::timeline date="18-JUL" label="You signed up" completed="true" stacked="true" icon="envelope" />
        <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" completed="true" stacked="true" icon="user" />
        <x-bladewind::timeline date="20-JUL" label="Customer rep called" completed="true" stacked="true" icon="phone-arrow-down-left" />
        <x-bladewind::timeline label="Account is being reviewed" stacked="true" />
        <x-bladewind::timeline label="Account activated" stacked="true" />
    </div>
    <pre class="language-markup line-numbers" data-line="5, 13,20">
        <code>
            &lt;x-bladewind.timeline
                date="18-JUL"
                label="You signed up"
                completed="true"
                icon="envelope"
                stacked="true"
                icon=""/&gt;

            &lt;x-bladewind.timeline
                date="19-JUL"
                label="Customer rep assigned"
                completed="true"
                icon="user"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline
                date="20-JUL"
                label="Customer rep called"
                completed="true"
                icon="phone-arrow-down-left"
                stacked="true" /&gt;

            &lt;x-bladewind.timeline label="Account is being reviewed" stacked="true" /&gt;

            &lt;x-bladewind.timeline label="Account activated" stacked="true" /&gt;
        </code>
    </pre>

    <h2 id="notail">No Trailing Line</h2>
    <p>
        You may have noticed from the the two examples above there is a trailing line after the last timeline. Some may find it cool. Others may not. For those who cannot stand that trailing line,
        you can get rid of it by applying this atribute to the last timeline.
        <code class="inline text-red-500">last="true"</code>. This tells the timeline component that this is the last item in the timeline list.
    </p>
    <div class="w-96 mx-auto pb-10">
        <x-bladewind::timeline date="18-JUL" label="You signed up" completed="true" />
        <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" completed="true" />
        <x-bladewind::timeline date="20-JUL" label="Customer rep called" completed="true" />
        <x-bladewind::timeline label="Account is being reviewed" />
        <x-bladewind::timeline label="Account activated" last="true" />
    </div>

    <pre class="language-markup line-numbers" data-line="23">
        <code>
            &lt;x-bladewind.timeline
                date="18-JUL"
                label="You signed up"
                completed="true" /&gt;

            &lt;x-bladewind.timeline
                date="19-JUL"
                label="Customer rep assigned"
                completed="true" /&gt;

            &lt;x-bladewind.timeline
                date="20-JUL"
                label="Customer rep called"
                completed="true" /&gt;

            &lt;x-bladewind.timeline
                label="Account is being reviewed" /&gt;

            &lt;x-bladewind.timeline
                label="Account activated"
                last="true" /&gt;
        </code>
    </pre>

    <h2 id="colours">Different Colours</h2>
    <p>
        Like with most of our other components, the timeline component can be displayed in nine different colours. Hopefully, one of these nine colours matches your theme.
        The nice thing about the timeline is, colours are actually applied to each timeline so your timelines can have a colour cocktail. Typically, you will want to use one colour for all timelines but hey, knock yourself out.
    </p>
    <div class="w-96 mx-auto pb-10">
        <x-bladewind::timeline date="18-JUL" label="You signed up" completed="true" color="red" />
        <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" completed="true" color="yellow" />
        <x-bladewind::timeline date="20-JUL" label="Customer rep called" completed="true" color="green" />
        <x-bladewind::timeline label="Account is being reviewed" color="blue" />
        <x-bladewind::timeline label="Account activated" color="pink" />
        <x-bladewind::timeline label="Account deleted" color="black" />
        <x-bladewind::timeline label="User re-activated" color="purple" />
        <x-bladewind::timeline label="Email verified" color="orange" />
        <x-bladewind::timeline label="User goes live" last="true" />
    </div>

    <pre class="language-markup line-numbers" data-line="5,11,17,22,27,32,37,42">
        <code>
            &lt;x-bladewind::timeline
                date="18-JUL"
                label="You signed up"
                completed="true"
                color="red" /&gt;

            &lt;x-bladewind::timeline
                date="19-JUL"
                label="Customer rep assigned"
                completed="true"
                color="yellow" /&gt;

            &lt;x-bladewind::timeline
                date="20-JUL"
                label="Customer rep called"
                completed="true"
                color="green" /&gt;

            &lt;x-bladewind::timeline
                label="Account is being reviewed"
                color="blue" /&gt;

            &lt;x-bladewind::timeline
                label="Account activated"
                color="pink" /&gt;

            &lt;x-bladewind::timeline
                label="Account deleted"
                color="black" /&gt;

            &lt;x-bladewind::timeline
                label="User re-activated"
                color="purple" /&gt;

            &lt;x-bladewind::timeline
                label="Email verified"
                color="orange" /&gt;

            &lt;x-bladewind::timeline
                color="cyan"
                label="User goes live"
                last="true" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Button component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>completed</td>
            <td>true</td>
            <td>This attribute can be omitted if the event has not been completed. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>date</td>
            <td><em>blank</em></td>
            <td>A date to display for the timeline. Preferred format is dd-mmm (18-JUL)</td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Text to display next to or above the date. The activity in the timeline.</td>
        </tr>
        <tr>
            <td>icon</td>
            <td>checkmark</td>
            <td>Accepts any icon name from <a href="https://heroicons.com" target="_blank">Heroicons</a>.</td>
        </tr>
        <tr>
            <td>stacked</td>
            <td>false</td>
            <td>Defines if the date is stacked on top of the label. The value must be a string and not boolean. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>last</td>
            <td>false</td>
            <td>Specifies if the timeline is the last one in the list. This removes or keeps the trailing line. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>color</td>
            <td>blue</td>
            <td>Set the color of the timeline. <br> <code class="inline">blue</code> <code class="inline">red</code>
            <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
            <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code></td>
        </tr>
    </x-bladewind::table>

    <h3>Timeline with all attributes defined</h3>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.timeline
                date="18-JUL"
                label="User signed up"
                stacked="false"
                last="true"
                color="pink"
                icon="checkmark"
                completed="true" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > timeline.blade.php</code>
    </x-bladewind::alert>
    <p>&nbsp;</p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#stacked">Stacked timeline</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">Different icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#notail">No trailing line</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-timeline');
        </script>
    </x-slot>
</x-app>
