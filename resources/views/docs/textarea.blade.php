<x-app>
    <x-slot name="title">Textarea Component</x-slot>
    <h1 class="page-title">Textarea</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Displays a textarea. By default the textarea is displayed with three rows. 
                You can increase the number of rows by setting the <code class="inline text-red-500">rows</code> attribute. 
                Example, <code class="inline text-red-500">rows="5"</code>.
            </p>
            <p><x-bladewind::input name="comment" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.textarea  /&gt;
                    </code>
                </pre>
            </p><br />
            <h3>Add Placeholder Text</h3>
            <p><x-bladewind::textarea placeholder="Comment" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.textarea placeholder="Comment"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>With Labels</h3><br />
            <p>
                You can display the BladewindUI textarea with labels. Labels present themselves as placeholders but jump to the top border of the textarea when that field has focus. 
                This is a nice way to build compact looking forms without having form labels in the way. If you prefer to create and style your own form labels, simply ignore the <code class="inline text-red-500">label</code> attribute and use the <code class="inline text-red-500">placeholder</code> attribute instead.
            </p>
            <p><x-bladewind::textarea label="Comment" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.textarea label="Comment"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Required Fields</h3><br />
            <p>
                This either adds a red asterisk sign to the placeholder text or a red star to the label of the textarea field.
            </p>
            <p><x-bladewind::textarea label="Comment" required="true" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.textarea required="true" label="Comment"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Events</h3><br />
            <p>
                You can append any of the available HTML event attributes (<em>onclick, onblur, onfocus, onmouseover, onmouseout, onkeyup, onkeydown</em> etc) to the component, just like you would to a regular <code class="inline">&lt;textarea ...</code> tag. 
                The border of the textarea below turns red onfocus and to gray onblur.
            </p>
            <p><x-bladewind::textarea name="events" label="Comment" required="true" 
                onfocus="changeCss('.events', '!border-2,!border-red-400')" 
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"></x-bladewind::textarea>
            </p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.texarea 
                            name="events" 
                            label="Comment" 
                            required="true" 
                            onfocus="changeCss('.events', '!border-2,!border-red-400')" 
                            onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"&gt;
                        &lt;/x-bladewind.textarea&gt;
                    </code><a name="attributes"></a>
                </pre>
            </p>
           <p>&nbsp;</p>
            <p><h2>Full List Of Attributes</h2></p>
            <p>The table below shows a comprehensive list of all the attributes available for the Textarea component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>input-uniqid()</td>
                    <td>Unique name to identify the input element by. Useful for retrieving value from the input when it is submitted in a form. The component by default uses a random name prefixed with 'input-'.</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>text</td>
                    <td>
                        Accepts list of valid HTML input element types. <br />
                        <code class="inline">text</code> <code class="inline">email</code> <code class="inline">password</code> <code class="inline">search</code> <code class="inline">tel</code>
                    </td>
                </tr>
                <tr>
                    <td>label</td>
                    <td><em>blank</em></td>
                    <td>Label that describes the input element. Example: Full name</td>
                </tr>
                <tr>
                    <td>numeric</td>
                    <td>false</td>
                    <td>Sepcifies if the input element should accept only numeric characters. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>false</td>
                    <td>Specifies if the input element is required or not. When required, a red asterisk is displayed next to the placeholder or label.<br /> <code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>add_clearing</td>
                    <td>true</td>
                    <td>Specifies if an 8px margin should be added to the bottom of the element. This ensures your form fields are evenly spaced by default. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td><em>blank</em></td>
                    <td>Placeholder text to display in the input element. </td>
                </tr>
                <tr>
                    <td>selected_value</td>
                    <td><em>blank</em></td>
                    <td>Default value to display in the input element. Useful when in edit mode.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Input with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.input 
                        name="pin"
                        label="Enter PIN" 
                        placeholder=""
                        type="password"
                        numeric="false" 
                        add_clearing="false" 
                        required="true"
                        selected_value="" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > input.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-textarea');
        </script>
    </x-slot>
</x-app>