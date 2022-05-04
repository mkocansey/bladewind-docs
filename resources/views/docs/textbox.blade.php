<x-app>
    <x-slot name="title">Textbox Component</x-slot>
    <h1 class="page-title">Textbox</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Displays a textbox or text input element. This component in fact works for all the possible values of <code class="inline text-red-500">&lt;input type="" .../&gt;</code>.
                The default type is <code class="inline text-red-500">text</code>.
            </p>
            <p><x-bladewind::input name="first name-and last name" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Password Textbox</h3>
            <p><x-bladewind::input type="password" /></p>
            <p>
                <pre class="language-markup line-numbers" data-line="2">
                    <code>
                        &lt;x-bladewind.input 
                            type="password"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Numeric Textbox</h3>
            <p><x-bladewind::input numeric="true" /></p>
            <p>
                <pre class="language-markup line-numbers" data-line="2">
                    <code>
                        &lt;x-bladewind.input 
                            numeric="true"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Add Placeholder Text</h3>
            <p><x-bladewind::input placeholder="Full name" /></p>
            <p>
                <pre class="language-markup line-numbers" data-line="2">
                    <code>
                        &lt;x-bladewind.input numeric="true"
                            placeholder="Full name"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>With Labels</h3>
            <p><x-bladewind::input placeholder="Full name" label="Full name" has_label="true" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input numeric="true"  /&gt;
                    </code>
                </pre>
            </p>
           <a name="attributes"></a>
           <br /><br /><br />
            <p><h2>Full List Of Attributes</h2></p>
            <p>The table below shows a comprehensive list of all the attributes available for the Input component.</p>
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
            <h3 class="pb-2 ">Input with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
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
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/tag.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
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
            selectNavigationItem('.component-textbox');
        </script>
    </x-slot>
</x-app>