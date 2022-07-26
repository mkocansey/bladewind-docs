<x-app>
    <x-slot name="title">Timeline Component</x-slot>
    <h1 class="page-title">Timeline</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Display date and progress or statuses on a timeline. The default colour for the timeline component is cyan but you can choose from eight additional colour options. 
                The timeline component does not centre itself in its parent element. You will need to figure that bit out in your layout. In the example below the timeline has been wrapped in 
                <code class="inline">&lt;div class="w-96 mx-auto"&gt;...&lt;/div&gt;</code>
            </p>
            <br />
            <div class="w-96 mx-auto pb-10">
                <x-bladewind::timeline date="18-JUL" label="You signed up" status="completed" />
                <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" status="completed" />
                <x-bladewind::timeline date="20-JUL" label="Customer rep called" status="completed" />
                <x-bladewind::timeline date="" label="Account is being reviewed" />
                <x-bladewind::timeline date="" label="Account activated" />
            </div>
            <p>
                Most timelines have two types of circles. One that is filled to denote the event has occurred or been completed. The other circle is empty to denote an upcoming event. 
                For a timeline to be filled set the attribute <code class="inline text-red-500">status="completed"</code>
            </p>
            <div class="h-2"></div>
            <pre class="language-markup">
                <code>
                    &lt;x-bladewind.timeline 
                        date="18-JUL" 
                        label="You signed up" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="19-JUL" 
                        label="Customer rep assigned" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="20-JUL" 
                        label="Customer rep called" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account is being reviewed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account activated" /&gt;
                </code><a name="stacked"></a>
            </pre>
            <br />
            <p><h2>Stacked Timeline</h2></p>
            <p>
                By default dates are displayed on the left and the corresponding events on the right. This behaviour can be changed to stack dates on top of events. This can be achieved by setting 
                the attribute <code class="inline text-red-500">stacked="true"</code>.
            </p>

            <div class="w-96 mx-auto pb-10">
                <x-bladewind::timeline date="18-JUL" label="You signed up" status="completed" stacked="true" />
                <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" status="completed" stacked="true" />
                <x-bladewind::timeline date="20-JUL" label="Customer rep called" status="completed" stacked="true" />
                <x-bladewind::timeline date="" label="Account is being reviewed" stacked="true" />
                <x-bladewind::timeline date="" label="Account activated" stacked="true" />
            </div>
            <div class="h-2"></div>
            <pre class="language-markup line-numbers" data-line="5, 11,17,22,27">
                <code>
                    &lt;x-bladewind.timeline 
                        date="18-JUL" 
                        label="You signed up" 
                        status="completed"
                        stacked="true" /&gt;

                    &lt;x-bladewind.timeline 
                        date="19-JUL" 
                        label="Customer rep assigned" 
                        status="completed"
                        stacked="true" /&gt;

                    &lt;x-bladewind.timeline 
                        date="20-JUL" 
                        label="Customer rep called" 
                        status="completed"
                        stacked="true" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account is being reviewed"
                        stacked="true" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account activated"
                        stacked="true" /&gt;
                </code><a name="notail"></a>
            </pre>
            <p>&nbsp</p>
            <h2>No Trailing Line</h2>
            <p>
                You may have noticed from the the two examples above there is a trailing line after the last timeline. Some may find it cool. Others may not. For those who cannot stand that trailing line, 
                you can get rid of it by applying this atribute to the last timeline. 
                <code class="inline text-red-500">last="true"</code>. This tells the timeline component that this is the last item in the timeline list.
            </p>
            <br />
            <div class="w-96 mx-auto pb-10">
                <x-bladewind::timeline date="18-JUL" label="You signed up" status="completed" />
                <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" status="completed" />
                <x-bladewind::timeline date="20-JUL" label="Customer rep called" status="completed" />
                <x-bladewind::timeline date="" label="Account is being reviewed" />
                <x-bladewind::timeline date="" label="Account activated" last="true" />
            </div>
            <br />
            <pre class="language-markup line-numbers" data-line="23">
                <code>
                    &lt;x-bladewind.timeline 
                        date="18-JUL" 
                        label="You signed up" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="19-JUL" 
                        label="Customer rep assigned" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="20-JUL" 
                        label="Customer rep called" 
                        status="completed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account is being reviewed" /&gt;

                    &lt;x-bladewind.timeline 
                        date="" 
                        label="Account activated" 
                        last="true" /&gt;
                </code><a name="colours"></a>
            </pre>
            
            <p>&nbsp;</p>
            <h2>Different Colours</h2>
            <p>
                Like with most of our other components, the timeline component can be displayed in nine different colours. One of these nine colours should definitely match your theme. 
                The nice thing about the timeline is, colours are actually applied to each timeline so you can have a rainbow timeline. Typically, you will want to use one colour for all timelines but hey, knock yourself out.
            </p>
            <div class="w-96 mx-auto pb-10">
                <x-bladewind::timeline date="18-JUL" label="You signed up" status="completed" color="red" />
                <x-bladewind::timeline date="19-JUL" label="Customer rep assigned" status="completed" color="yellow" />
                <x-bladewind::timeline date="20-JUL" label="Customer rep called" status="completed" color="green" />
                <x-bladewind::timeline date="" label="Account is being reviewed" color="blue" />
                <x-bladewind::timeline date="" label="Account activated" color="pink" />
                <x-bladewind::timeline date="" label="Account deleted" color="black" />
                <x-bladewind::timeline date="" label="User re-activated" color="purple" />
                <x-bladewind::timeline date="" label="Email verified" color="orange" />
                <x-bladewind::timeline date="" label="User goes live" last="true" />
            </div>

            <pre class="language-markup line-numbers" data-line="5,11,17,22,27,32,37,42">
                <code>
                    &lt;x-bladewind::timeline 
                        date="18-JUL" 
                        label="You signed up" 
                        status="completed" 
                        color="red" /&gt;

                    &lt;x-bladewind::timeline 
                        date="19-JUL" 
                        label="Customer rep assigned" 
                        status="completed" 
                        color="yellow" /&gt;

                    &lt;x-bladewind::timeline 
                        date="20-JUL" 
                        label="Customer rep called" 
                        status="completed" 
                        color="green" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="Account is being reviewed" 
                        color="blue" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="Account activated" 
                        color="pink" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="Account deleted" 
                        color="black" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="User re-activated" 
                        color="purple" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="Email verified" 
                        color="orange" /&gt;

                    &lt;x-bladewind::timeline 
                        date="" 
                        label="User goes live" 
                        last="true" /&gt;
                </code><a name="attributes"></a>
            </pre>

            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Button component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>status</td>
                    <td>pending</td>
                    <td><code class="inline">pending</code> <code class="inline">completed</code></td>
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
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Timeline with all attributes defined</h3>
            <pre class="language-markup">
                <code>
                    &lt;x-bladewind.timeline 
                        date="18-JUL"
                        label="User signed up"
                        stacked="false"
                        last="true"
                        color="pink"
                        status="completed" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > timeline.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#stacked">Stacked timeline</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#notail">No trailing line</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-timeline');
        </script>
    </x-slot>
</x-app>