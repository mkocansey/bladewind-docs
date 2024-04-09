<x-app>
    <x-slot:title>Textarea Component</x-slot:title>
    <x-slot:page_title>Textarea</x-slot:page_title>

    <p>
        Displays a textarea. By default the textarea is displayed with three rows.
        You can increase the number of rows by setting the <code class="inline text-red-500">rows</code> attribute.
        Example, <code class="inline text-red-500">rows="5"</code>.
    </p>
    <p><x-bladewind::textarea name="comment" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::textarea  /&gt;
        </code>
    </pre>
    <h3>Add Placeholder Text</h3>
    <p><x-bladewind::textarea placeholder="Comment" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::textarea placeholder="Comment"  /&gt;
        </code>
    </pre>
    <h3>With Labels</h3>
    <p>
        You can display the BladewindUI textarea with labels. Labels present themselves as placeholders but jump to the top border of the textarea when that field has focus.
        This is a nice way to build compact looking forms without having form labels in the way. If you prefer to create and style your own form labels, simply ignore the <code class="inline text-red-500">label</code> attribute and use the <code class="inline text-red-500">placeholder</code> attribute instead.
    </p>
    <p><x-bladewind::textarea label="Comment" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::textarea label="Comment"  /&gt;
        </code>
    </pre>
    <h3>Required Fields</h3>
    <p>
        This either adds a red asterisk sign to the placeholder text or a red star to the label of the textarea field.
    </p>
    <p><x-bladewind::textarea label="Comment" required="true" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::textarea required="true" label="Comment"  /&gt;
        </code>
    </pre>
    <p>
        See component/textarea documentation on <a href="https://bladewindui.com/component/textbox#validate">Validating Required Fields</a>.
    </p>

    <h3>Events</h3>
    <p>
        You can append any of the available HTML event attributes (<em>onclick, onblur, onfocus, onmouseover, onmouseout, onkeyup, onkeydown</em> etc) to the component, just like you would to a regular <code class="inline">&lt;textarea ...</code> tag.
        The border of the textarea below turns red onfocus and to gray onblur.
    </p>
    <p><x-bladewind::textarea name="events" label="Comment" required="true"
        onfocus="changeCss('.events', '!border-2,!border-red-400')"
        onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"></x-bladewind::textarea>
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::textarea
                name="events"
                label="Comment"
                required="true"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"&gt;
            &lt;/x-bladewind::textarea&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
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
            <td>textarea-uniqid()</td>
            <td>Unique name to identify the textarea element by. Useful for retrieving value from the textarea when it is submitted in a form. The component by default uses a random name prefixed with 'textarea-'.</td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Label that describes the textarea element. Example: Full name</td>
        </tr>
        <tr>
            <td>error_message</td>
            <td><em>blank</em></td>
            <td>Error message to display when field is required but blank.</td>
        </tr>
        <tr>
            <td>error_heading</td>
            <td>Error</td>
            <td>Error heading to display in notification component when field is required but blank. This is used when *show_error_inline=true*.</td>
        </tr>
        <tr>
            <td>show_error_inline</td>
            <td>false</td>
            <td>
                Specifies if the error message is displayed inline (beneath the field) or in a notification component.
                <br /><br /> <code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>required</td>
            <td>false</td>
            <td>Specifies if the textarea element is required or not. When required, a red asterisk is displayed next to the placeholder or label.<br /><br /> <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>add_clearing</td>
            <td>true</td>
            <td>Specifies if an 8px margin should be added to the bottom of the element. This ensures your form fields are evenly spaced by default. <br /><br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>placeholder</td>
            <td><em>blank</em></td>
            <td>Placeholder text to display in the textarea element. </td>
        </tr>
        <tr>
            <td>rows</td>
            <td>3</td>
            <td>Specifies the height of the textarea in rows. Can be any positive whole number. </td>
        </tr>
        <tr>
            <td>selected_value</td>
            <td><em>blank</em></td>
            <td>Default value to display in the textarea element. Useful when in edit mode.</td>
        </tr>
    </x-bladewind::table>
    <p>&nbsp;</p>
    <h3 class="pb-2 ">Textarea with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::textarea
                name="message"
                label="Enter message"
                placeholder=""
                add_clearing="false"
                required="true"
                show_error_inline="false"
                error_heading="Error"
                error_message="A comment is required"
                rows="5"
                selected_value="" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > textarea.blade.php</code>
    </x-bladewind::alert>
    <p>&nbsp;</p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-textarea');
        </script>
    </x-slot>
</x-app>
