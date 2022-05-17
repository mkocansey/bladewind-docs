<x-app>
    <x-slot name="title">Tag Component</x-slot>
    <h1 class="page-title">Tag</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>Tags, sometimes referred to as labels allow you to logically group items or indicate statuses of items.  You can also use tags to list selections. They are very simple to use.</p>
            <p><x-bladewind::tag label="pending" /></p>
            <a name="faint"></a>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.tag label="pending"  /&gt;
                    </code>
                </pre>
            </p><br />
            <p>
                <h2>Faint Coloured</h2>
            </p>
            <p>The BladewindUI tag component allows you to specify different colours. The tags by default are faint in colour with blue being the default colour.
            There are nine colour options to pick from.</p>
            <p>
                <x-bladewind::tag label="pending" color="red" /> &nbsp;
                <x-bladewind::tag label="pending" color="yellow" /> &nbsp;
                <x-bladewind::tag label="pending" color="green" /> &nbsp;
                <x-bladewind::tag label="pending" color="blue" /> &nbsp;
                <x-bladewind::tag label="pending" color="pink" /> &nbsp;
                <x-bladewind::tag label="pending" color="cyan" /> &nbsp;
                <x-bladewind::tag label="pending" color="orange" /> &nbsp;
                <x-bladewind::tag label="pending" color="gray" /> &nbsp;
                <x-bladewind::tag label="pending" color="purple" /> &nbsp;
            </p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.tag label="pending" color="red" /&gt;

                        &lt;x-bladewind.tag label="pending" color="yellow" /&gt;

                        &lt;x-bladewind.tag label="pending" color="green" /&gt;

                        &lt;x-bladewind.tag label="pending" color="blue" /&gt;

                        &lt;x-bladewind.tag label="pending" color="pink" /&gt;

                        &lt;x-bladewind.tag label="pending" color="cyan" /&gt;

                        &lt;x-bladewind.tag label="pending" color="orange" /&gt;

                        &lt;x-bladewind.tag label="pending" color="gray" /&gt;

                        &lt;x-bladewind.tag label="pending" color="purple" /&gt;

                    </code>
                </pre>
            <a name="dark"></a><br/>
            </p>
            <br />
            <p>
                <h2>Dark Coloured</h2>
            </p>
            <p>Dark colours in this case have nothing to do with dark mode. These are just a deeper shade of the tag colours. You can get darker shaded tags by setting <code class="inline text-red-500">shade="dark"</code> </p>
            <p>
                <x-bladewind::tag label="pending" shade="dark" color="red" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="yellow" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="green" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="blue" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="pink" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="cyan" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="orange" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="gray" /> &nbsp;
                <x-bladewind::tag label="pending" shade="dark" color="purple" /> &nbsp;
            </p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.tag label="pending" shade="dark" color="red" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="yellow" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="green" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="blue" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="pink" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="cyan" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="orange" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="gray" /&gt;

                        &lt;x-bladewind.tag label="pending" shade="dark" color="purple" /&gt;
                    </code>
                </pre>
            <a name="closable"></a>
            </p>
            <br /><br />
            <p><h2>With Close Icons</h2></p>
            <p>
            Tags can also have close icons. That will be useful if you use tags to display user selections and want a way to remove a user’s selection from the list. By default tags do not show the close icon. 
            To activate close icons, set <code class="inline text-red-500">can_close="true"</code>. The default action when the close icon is clicked is to remove the tag that was clicked.
            </p>
            <p><x-bladewind::tag label="pending" can_close="true" />  &nbsp;  <x-bladewind::tag label="pending" can_close="true" color="pink" /></p>
            <p>
                <pre class="language-markup line-numbers" data-line="2,5">
                    <code>
                        &lt;x-bladewind.tag label="pending" 
                            can_close="true" /&gt;

                        &lt;x-bladewind.tag label="pending" 
                            can_close="true" 
                            color="pink" /&gt;
                    </code>
                </pre>
            </p>
            <p>
            The default action when the close icon is clicked is to remove the tag that was clicked.
            To run your own code when the close icon is clicked, provide a javascript function to the <code class="inline text-red-500">onclick</code> attribute. 
            You may need to use the <code class="inline text-red-500">id</code> attribute to provide unique identifiers for your tags. 
            By default each tag has a random generated <code class="inline text-red-500">id</code> prefixed with <code class="inline">bw-</code> to prevent numeric only IDs from breaking. 
            You can turn off the prefixing of IDs by setting <code class="inline text-red-500">add_id_prefix="false"</code>
            </p>
            <p>
                <x-bladewind::tag label="marketing" can_close="true" add_id_prefix="false" id="a1001" onclick="alert('you clicked on '+ dom_el('#a1001').innerText)" />  &nbsp;  
                <x-bladewind::tag label="accounting" can_close="true" color="pink" css="a1002"  onclick="alert('you clicked on '+ dom_el('.a1002').innerText)" />
            </p>
            
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.tag 
                        label="marketing" 
                        can_close="true" 
                        add_id_prefix="false"
                        id="a1001" 
                        onclick="alert('you clicked on '+ dom_el('#a1001').innerText)" /&gt;
                    
                    &lt;x-bladewind.tag 
                        label="accounting" 
                        can_close="true" 
                        color="pink" 
                        css="a1002" 
                        onclick="alert('you clicked on '+ dom_el('.a1002').innerText)" /&gt;
                </code>
            </pre>
            
           <a name="attributes"></a>
           <br /><br /><br />
            <p><h2>Full List Of Attributes</h2></p>
            <p>The table below shows a comprehensive list of all the attributes available for the Tag component.</p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>label</td>
                    <td><em>blank</em></td>
                    <td>The text to display on the tag.</td>
                </tr>
                <tr>
                    <td>color</td>
                    <td>blue</td>
                    <td>
                        There are nine colors to choose from. <br />
                        <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                        <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code>
                    </td>
                </tr>
                <tr>
                    <td>shade</td>
                    <td>faint</td>
                    <td>Determines if the tags should have a faint or darker color shade. <br /><code class="inline">faint</code> <code class="inline">dark</code></td>
                </tr>
                <tr>
                    <td>can_close</td>
                    <td>false</td>
                    <td>Determines if the tag should display a close icon or not. The value should be passed as a string, not boolean.<br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>uniqid()</td>
                    <td>Unique id for the tag. This id can then be accessed via javascript. By default tag IDs have a prefix of <code class="inline">bw-</code></td>
                </tr>
                <tr>
                    <td>add_id_prefix</td>
                    <td>true</td>
                    <td>Determines if the <code class="inline">bw-</code> prefix should be added to tag IDs. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>onclick</td>
                    <td><em>blank</em></td>
                    <td>Javascript function to execute when the close icon is clicked. </td>
                </tr>
                <tr>
                    <td>css</td>
                    <td>bw-tag</td>
                    <td>Any additional CSS you wish to add.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Tag with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.tag 
                        label="accounting" 
                        can_close="true" 
                        color="pink" 
                        css="a1002" 
                        id="a1002"
                        add_id_prefix="false" 
                        shade="dark"
                        onclick="alert('you clicked on '+ dom_el('.a1002').innerText)" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > tag.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#faint">Faint coloured</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#dark">Dark coloured</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#closable">With close icons</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-tag');
        </script>
    </x-slot>
</x-app>