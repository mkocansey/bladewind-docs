<x-app>
    <x-slot name="title">Bell Component</x-slot>
    <x-slot name="page_title">Bell</x-slot>

    <p>
        The bell component displays a bell icon with an optional 'pending notifications' dot indicator. This is a
        visually pleasing way of telling your app users where to find notifications and if they have anything unread.
        By default, the bell displays the dot indicator, meaning there are notifications to be read.
    </p>

    <div class="text-center">
        <x-bladewind::bell />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::bell /&gt;
        </code>
    </pre>

    <h3>No Dot Indicator</h3>
    <p>
        To display the bell with no dot indicator, set <code class="inline text-red-500">show_dot="false"</code>. This hides the dot indicator. This should usually be the case if all notifications have been read.
    </p>

    <div class="text-center">
        <x-bladewind::bell show_dot="false" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::bell show_dot="false" /&gt;
        </code>
    </pre>

    <h3>Animated Dot Indicator</h3>
    <p>
        The dot indicator can have a 'ping' animation to draw attention to the bell. To animate the dot set <code class="inline text-red-500">animate_dot="true"</code>. By default, the dot is not animated.
    </p>

    <div class="text-center">
        <x-bladewind::bell animate_dot="true" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::bell animate_dot="true" /&gt;
        </code>
    </pre>

    <h3>Inverted Bell</h3>
    <p>
        By default, the bell is designed to sit on a white background. When using the bell on a dark background, set the attribute <code class="inline text-red-500">invert="true"</code>. This will display the bell as white.
    </p>

    <div class="text-center bg-slate-700 p-6 rounded-md">
        <x-bladewind::bell invert="true" />
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::bell invert="true" /&gt;
        </code>
    </pre>

    <h2 id="sizes">Different Sizes</h2>
    <p>The bell component exists in two sizes. <code class="inline">small</code> and <code class="inline">big</code>. The default size is <code class="inline text-red-500">small</code>.</p>
    <div class="text-center p-6">
        <x-bladewind::bell />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell size="big" />
    </div>

    <pre class="language-markup">
        <code>
            // size="small" can be omitted since it is the default
            &lt;x-bladewind::bell size="small" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::bell size="big" /&gt;
        </code>
    </pre>

    <h2 id="colors">Different Colours</h2>
    <p>
        The default dot indicator displayed next to the bell is blue. This may not match your app's theme, so it is possible to display the dot indicator in different colours by setting the color attribute on the component, like this, <code class="inline text-red-500">color="red"</code>.
    </p>

    <div class="text-center p-6">
        <x-bladewind::bell />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="red" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="yellow" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="green" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="pink" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="cyan" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="black" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="purple" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="orange" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="violet" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="indigo" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <x-bladewind::bell color="fuchsia" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
        &lt;x-bladewind::bell color="primary" /&gt;

        &lt;x-bladewind::bell color="red" /&gt;

        &lt;x-bladewind::bell color="yellow" /&gt;

        &lt;x-bladewind::bell color="green" /&gt;

        &lt;x-bladewind::bell color="pink" /&gt;

        &lt;x-bladewind::bell color="cyan" /&gt;

        &lt;x-bladewind::bell color="black" /&gt;

        &lt;x-bladewind::bell color="purple" /&gt;

        &lt;x-bladewind::bell color="orange" /&gt;

        </code><a name="events"></a>
    </pre>

    <h2 id="events">Events</h2>
    <p>
        In most apps the bell is accessed either using onclick or onmouseover events. You can add these events to the component as you normally would to any tag.
        Alternatively, you could wrap the bell component in any other HTML tag that accepts click and hover events.
    </p>
    <p>
        The example below wraps the Bell component in the <a href="/component/dropmenu">Dropmenu</a> component. The Dropmenu component then uses the <a href="/component/listmenu">List View</a> component to display a list of notifications.
    </p>

    <div class="text-center p-6">
        <x-bladewind::dropmenu>
            <x-slot name="trigger">
                <x-bladewind::bell />
            </x-slot>
            <x-bladewind::dropmenu.item>
                <x-bladewind::list-view transparent="true">
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/me.jpeg" />
                        <div class="mx-1 pt-1">
                            <div class="text-sm">
                                <span class="font-medium text-slate-900">Michael</span> assigned <a href="#">a task</a> to you
                                <div class="text-xs">3 hours ago</div>
                            </div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="" />
                        <div class="mx-1 pt-1">
                            <div class="text-sm">
                                <span class="font-medium text-slate-900">Client K.</span> <a href="#">commented</a> on a task
                                <div class="text-xs">3 hours ago</div>
                            </div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/issah.jpg" />
                        <div class="mx-1 pt-1">
                            <div class="text-sm">
                                <span class="font-medium text-slate-900">Catherine</span> joined your team. <a href="#">Say hi</a>!!
                                <div class="text-xs">3 hours ago</div>
                            </div>
                        </div>
                    </x-bladewind::list-item>
                    <x-bladewind::list-item>
                        <x-bladewind::avatar size="small" image="/assets/images/audrey.jpeg" />
                        <div class="mx-1 pt-1">
                            <div class="text-sm">
                                <span class="font-medium text-slate-900">Audrey</span> requested your <a href="#">review</a>
                                <div class="text-xs">3 hours ago</div>
                            </div>
                        </div>
                    </x-bladewind::list-item>
                </x-bladewind::list-view>
            </x-bladewind::dropmenu.item>
        </x-bladewind::dropmenu>
    </div>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-bladewind::dropmenu&gt;
                &lt;x-slot name="trigger"&gt;
                    &lt;x-bladewind::bell /&gt;
                &lt;/x-slot&gt;
                &lt;x-bladewind.dropmenu.item&gt;
                    &lt;x-bladewind.list-view transparent="true"&gt;

                        &lt;x-bladewind.list-item&gt;
                            &lt;x-bladewind.avatar size="small" image="..." /&gt;
                            &lt;div class="mx-1 pt-1"&gt;
                                &lt;div class="text-sm"&gt;
                                    &lt;span class="font-medium text-slate-900"&gt;
                                        Michael
                                    &lt;/span&gt;
                                    assigned &lt;a href="#"&gt;a task&lt;/a&gt; to you
                                    &lt;div class="text-xs"&gt;3 hours ago&lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/x-bladewind.list-item&gt;

                        &lt;x-bladewind.list-item&gt;
                            ...
                        &lt;/x-bladewind.list-item&gt;

                        &lt;x-bladewind.list-item&gt;
                            ...
                        &lt;/x-bladewind.list-item&gt;

                    &lt;/x-bladewind.list-view&gt;
                &lt;/x-bladewind.dropmenu.item&gt;
            &lt;/x-bladewind.dropmenu&gt;

        </code>
    </pre>

    <h3>Onclick, Onmouseover, On-anything</h3>
    <p>
        As seen in the example above, the Bell component inherits the default action defined in the <a href="/component/dropmenu">Dropmenu</a> component. If you prefer to design your own notification layout or redirect users to a page that lists their notifications, you can define any HTML event attribute on the Bell.
    </p>
    <div class="grid-cols-2 grid gap-4">
        <div class="text-center">
            <div class="py-4">mouseover</div>
            <x-bladewind::bell onmouseover="alert('the mouse was over me')" />
            <br /><br />
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind::bell
                        onmouseover="alert('..')" /&gt;
                </code>
            </pre>
        </div>
        <div class="text-center">
            <div class="py-4">click</div>
            <x-bladewind::bell onclick="alert('do something on click')" />
            <br /><br />
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind::bell
                        onclick="alert('...')" /&gt;
                </code>
            </pre>
        </div>
    </div>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Bell component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>color</td>
            <td><em>blue</em></td>
            <td>The colour of the dot indicator.
                <br> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">pink</code> <code class="inline">cyan</code> <code class="inline">black</code> <code class="inline">purple</code> <code class="inline">orange</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>animate_dot</td>
            <td>false</td>
            <td>Determines if the dot should be animated or not.</td>
        </tr>
        <tr>
            <td>size</td>
            <td>small</td>
            <td>Defines the size of the bell. <br><code class="inline">small</code> <code class="inline">big</code></td>
        </tr>
        <tr>
            <td>show_dot</td>
            <td>true</td>
            <td>Defines if the dot indicator should be displayed by default.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>invert</td>
            <td>false</td>
            <td>Defines if the bell should be displayed as white.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
    </x-bladewind::table>

    <h3>Bell with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::bell
                color="pink"
                show_dot="false"
                animate_dot="true"
                invert="true"
                size="big" /&gt;
        </code>
    </pre>

    <p>
        <x-bladewind::alert show_close_icon="false">
            The source file for this component is available in <code class="inline">resources > views > components > bladewind > bell.blade.php</code>
        </x-bladewind::alert>
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colors">Different colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#events">Events</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-bell');
        </script>
    </x-slot>
</x-app>
