<x-app>
    <x-slot:title>Radio Button Component</x-slot:title>
    <x-slot:page_title>Radio Button</x-slot:page_title>

    <p>
        Display a radio button with or without a label.
        The default radio button colour is blue but there are nine colours available to choose from.
    </p>

    <x-bladewind::radio-button name="tnc" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::radio-button name="tnc"  /&gt;
        </code>
    </pre>

    <h3>What kind of movies do you like?</h3>
    <x-bladewind::radio-button label="Action" name="genre"  />
    <x-bladewind::radio-button label="Comedy" name="genre"  />
    <x-bladewind::radio-button label="Drama" name="genre"  />
    <x-bladewind::radio-button label="Thriller" name="genre" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::radio-button label="Action" name="genre"  /&gt;
            &lt;x-bladewind::radio-button label="Comedy" name="genre"  /&gt;
            &lt;x-bladewind::radio-button label="Drama" name="genre"  /&gt;
            &lt;x-bladewind::radio-button label="Thriller" name="genre" /&gt;
        </code>
    </pre>

    <x-bladewind::radio-button label="I am checked by default" checked="true" name="check_me"  />

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-bladewind::radio-button
                label="I am checked by default"
                checked="true"
                name="check_me"  /&gt;
        </code>
    </pre>

    <x-bladewind::radio-button label="I am disabled" disabled="true"  /> &nbsp;&nbsp;
    <x-bladewind::radio-button label="I am checked and disabled" disabled="true" checked="true"  />

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-bladewind::radio-button
                label="I am disabled"
                disabled="true"  /&gt;
        </code>
    </pre>

    <h2 id="coloured">Coloured Checkboxes</h2>
    <p>
        Like most of the BladewindUI components, radio-buttons also come in nine colours to enable the components sit better in most designs with various colour schemes.
    </p>
    <div class="grid grid-cols-3 gap-2">
        <x-bladewind::radio-button color="red" checked="true" label="I am a red radio-button" />
        <x-bladewind::radio-button color="yellow" label="I am a yellow radio-button" />
        <x-bladewind::radio-button color="green" label="I am a green radio-button" />
        <x-bladewind::radio-button color="pink" label="I am a pink radio-button" />
        <x-bladewind::radio-button color="cyan" label="I am a cyan radio-button" />
        <x-bladewind::radio-button color="black" label="I am a black radio-button" />
        <x-bladewind::radio-button color="purple" label="I am a purple radio-button" />
        <x-bladewind::radio-button color="orange" label="I am a orange radio-button" />
        <x-bladewind::radio-button color="blue" label="I am a blue radio-button" />
        <x-bladewind::radio-button color="violet" label="I am a violet radio-button" />
        <x-bladewind::radio-button color="indigo" label="I am a indigo radio-button" />
        <x-bladewind::radio-button color="fuchsia" label="I am a fuchsia radio-button" />
    </div>

    <pre class="language-markup line-numbers" data-line="2,7,12,17,23,28,33,38,43,49,54,59">
        <code>
            &lt;x-bladewind::radio-button
                color="red"
                checked="true"
                label="I am a red radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="yellow"
                checked="true"
                label="I am a yellow radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="green"
                checked="true"
                label="I am a green radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="pink"
                checked="true"
                label="I am a pink radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="cyan"
                checked="true"
                label="I am a cyan radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="black"
                checked="true"
                label="I am a black radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="purple"
                checked="true"
                label="I am a purple radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="orange"
                checked="true"
                label="I am a orange radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="blue"
                checked="true"
                label="I am a blue radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="violet"
                checked="true"
                label="I am a violet radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="indigo"
                checked="true"
                label="I am a indigo radio-button" /&gt;

            &lt;x-bladewind::radio-button
                color="fuchsia"
                checked="true"
                label="I am a fuchsia radio-button" /&gt;
        </code>
    </pre>

    <h3>Radio buttons and forms</h3>
    <p>
        When using radio buttons with forms, it is always good practice to give the radio button a name and value.
        That way, when the form is submitted, the value of the radio button can be retrieved from its name. It is important to
        note that, in some cases, if the user does not select the radio button, the name of the radio button will be ignored completely from your payload.
    </p>

    <x-bladewind::radio-button name="notify_me" value="1" label="Send me weekly newsletters" />
    <pre class="language-markup line-numbers">
        <code>
&lt;x-bladewind::radio-button
            name="notify_me"
            value="1"
            label="Send me weekly newsletters" /&gt;
        </code>
    </pre>
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Radio Button component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>radio</td>
            <td>This name can be accessed when the radio button is submitted in the form. The name is also available as part of the css classes.</td>
        </tr>
        <tr>
            <td>label</td>
            <td><em>blank</em></td>
            <td>Text to be displayed next to the radio button.</td>
        </tr>
        <tr>
            <td>value</td>
            <td><em>blank</em></td>
            <td>In case you are editing a form, the value passed will be set on the value attribute of the radio button.
            <code class="inline text-red-500">&lt;input type="radio" <b>value=""</b> ../&gt;</code></td>
        </tr>
        <tr>
            <td>checked</td>
            <td>false</td>
            <td>Determines if the radio button is checked or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>false</td>
            <td>Determines if the radio button is disabled or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>add_clearing</td>
            <td>true</td>
            <td>Adds a margin to the bottom of the radio button to separate it from the next form element. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-radio button</td>
            <td>Any additional css classes can be added using this attribute.</td>
        </tr>
        <tr>
            <td>color</td>
            <td>blue</td>
            <td>There are twelve colors to choose from. <br /><code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>label_css</td>
            <td>mr-6</td>
            <td>Applies styling to the radio button label.</td>
        </tr>
    </x-bladewind::table>

    <h3>Radio button with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::radio-button
                label="I agree to the terms and conditions"
                checked="false"
                disabled="false"
                color="pink"
                name="tnc"
                value="yes"
                class="shadow-sm" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > radio-button.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#coloured">Coloured Checkboxes</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-radio-button');
        </script>
    </x-slot:scripts>
</x-app>
