<x-app>
    <x-slot name="title">Bell Component</x-slot>
    <h1 class="page-title">Bell</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                The bell component displays a bell icon with an optional 'pending notifications' dot indicator. This is a
                visually pleasing way of telling your app users where to find notifications and if they have anything unread.
                By default, the bell displays the dot indicator, meaning there are notifications to be read.
            </p>

            <div class="text-center">
                <x-bladewind::bell />
            </div>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell /&gt;
                </code>
            </pre>
            <br />
            <p><h3>No Dot Indicator</h3></p>
            <p>
                To display the bell with no dot indicator, set <code class="inline text-red-500">show_dot="false"</code>. This hides the dot indicator. This should usually be the case if all notifications have been read.
            </p>

            <div class="text-center">
                <x-bladewind::bell show_dot="true" />
            </div>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell show_dot="false" /&gt;
                </code>
            </pre>
            <br />
            <p><h3>Animated Dot Indicator</h3></p>
            <p>
                The dot indicator can have a 'ping' animation to draw attention to the bell. To animate the dot set <code class="inline text-red-500">animate_dot="true"</code>. By default, the dot is not animated.
            </p>

            <div class="text-center">
                <x-bladewind::bell animate_dot="true" />
            </div>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell show_dot="false" /&gt;
                </code>
            </pre>
            <br />
            <p><h3>Inverted Bell</h3></p>
            <p>
                By default, the bell is designed to sit on a white background. When using the bell on a dark background, set the attribute <code class="inline text-red-500">invert="true"</code>. This will display the bell as white.
            </p>

            <div class="text-center bg-gray-500 p-6">
                <x-bladewind::bell invert="true" />
            </div>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell invert="true" /&gt;
                </code><a name="sizes"></a>
            </pre>

            <p>&nbsp;</p>
            <h2>Different Sizes</h2>
            <p>The bell component exists in two sizes. <code class="inline">small</code> and <code class="inline">big</code>. The default size is <code class="inline text-red-500">small</code>.</p>
            <div class="text-center p-6">
                <x-bladewind::bell />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <x-bladewind::bell size="big" />
            </div>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    // size="small" can be omitted since it is the default
                    &lt;x-bladewind.bell size="small" /&gt;
                </code>
            </pre>
            <br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell size="big" /&gt;
                </code>
            </pre><a name="colors"></a>
            <br />
            <p>&nbsp;</p>
            <h2>Different Colours</h2>
            <p>
                The default dot indicator displayed next to the bell is blue. This may not match your app's theme, so it is possible to display the dot indicator in nine different colours by setting the color attribute on the component, like this, <code class="inline text-red-500">color="red"</code>.
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
            </div>
            <br><br />
            <pre class="language-markup line-numbers">
                <code>
                &lt;x-bladewind::bell color="blue" /&gt;

                &lt;x-bladewind::bell color="red" /&gt;

                &lt;x-bladewind::bell color="yellow" /&gt;

                &lt;x-bladewind::bell color="green" /&gt;

                &lt;x-bladewind::bell color="pink" /&gt;

                &lt;x-bladewind::bell color="cyan" /&gt;

                &lt;x-bladewind::bell color="black" /&gt;

                &lt;x-bladewind::bell color="purple" /&gt;

                &lt;x-bladewind::bell color="orange" /&gt;

                </code><a name="attributes"></a>
            </pre>


            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
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
                        <br> <code class="inline">blue</code> <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">pink</code> <code class="inline">cyan</code> <code class="inline">black</code> <code class="inline">purple</code> <code class="inline">orange</code></td>
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
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Bell with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.bell
                        color="pink"
                        show_dot="false"
                        animate_dot="true"
                        invert="true"
                        size="big" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <p>
                <x-bladewind::alert show_close_icon="false">
                    The source file for this component is available in <code class="inline">resources > views > components > bladewind > bell.blade.php</code>
                </x-bladewind::alert>
            </p>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#colors">Different colours</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-bell');
        </script>
    </x-slot>
</x-app>
