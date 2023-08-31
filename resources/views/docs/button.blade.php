<x-app>
    <x-slot:title>Button Component</x-slot:title>
    <x-slot:page_title>Button</x-slot:page_title>

    <p>
        The default primary colour theme for BladewindUI buttons is blue.
        It is possible to set a colour attribute to display our button in different colours. These are however a definite list of colours.
        You can check out our customization notes on how to use a different primary <a name="primary"></a> theme colour if you'd prefer a colour not defined in our list.
    </p>
    <p>
        By default the component uses the <code class="inline">&lt;button&gt;</code> tag to build the button. If you find yourself in the category of developers who prefer to use the <code class="inline">&lt;a&gt;</code> tag for their buttons, you will need to specify
        the attribute <code class="inline text-red-500">tag="a"</code>.
    </p>
    <h2 id="primary">Primary Button</h2>
    <div class="text-center p-4">
        <x-bladewind::button>Subscribe Now</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button&gt;subscribe now&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <br />
    <div class="text-center p-4">
        <x-bladewind::button tag="a">Subscribe Now</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            // this button is created using the &lt;a&gt; tag
            // you can inspect element on the above button to check

            &lt;x-bladewind.button tag="a"&gt;subscribe now&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h3>Disabled Button</h3>
    <div class="text-center p-4">
        <x-bladewind::button disabled="true">Disabled Button</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button disabled="true"&gt;disabled button&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h3>Different Sizes</h3>
    <div class="text-center p-4 space-x-3 space-y-3">
        <x-bladewind::button size="tiny">Save</x-bladewind::button>
        <x-bladewind::button size="small">Subscribe</x-bladewind::button>
        <x-bladewind::button size="regular">Subscribe</x-bladewind::button>
        <x-bladewind::button size="big">Save User</x-bladewind::button>
    </div>

    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button size="tiny"&gt;Save&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button size="small"&gt;Subscribe&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button size="regular"&gt;Subscribe&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button size="big"&gt;Save User&lt;/x-bladewind.button&gt;
        </code><a name="secondary"></a>
    </pre>

    <h2 id="secondary">Secondary Button</h2>
    <div class="text-center p-4">
    <x-bladewind::button type="secondary">Subscribe Now</x-bladewind::button>
   </div>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.button
                type="secondary"&gt;
                subscribe now
            &lt;/x-bladewind.button/&gt;
        </code>
    </pre>
    <h3>Different Sizes</h3>
    <div class="text-center p-4 space-x-3 space-y-3">
        <x-bladewind::button type="secondary" size="tiny">Save</x-bladewind::button>
        <x-bladewind::button type="secondary" size="small">Subscribe</x-bladewind::button>
        <x-bladewind::button type="secondary" size="regular">Subscribe</x-bladewind::button>
        <x-bladewind::button type="secondary" size="big">Save User</x-bladewind::button>
    </div>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                 type="secondary"
                 size="tiny"&gt;Save&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                 type="secondary"
                 size="small"&gt;Subscribe&lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                 type="secondary"
                 size="regular"&gt;Subscribe&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                 type="secondary"
                 size="big"&gt;Save User&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h3>Different Radius</h3>
    <div class="text-center p-4 space-x-3 space-y-3">
        <x-bladewind::button radius="none">No Radius</x-bladewind::button>
        <x-bladewind::button radius="small">Small Radius</x-bladewind::button>
        <x-bladewind::button radius="medium">Medium Radius</x-bladewind::button>
        <x-bladewind::button radius="full">Full Radius</x-bladewind::button>
    </div>
    <div class="text-center p-4 space-x-3 space-y-3">
        <x-bladewind::button type="secondary" radius="none">No Radius</x-bladewind::button>
        <x-bladewind::button type="secondary" radius="small">Small Radius</x-bladewind::button>
        <x-bladewind::button type="secondary" radius="medium">Medium Radius</x-bladewind::button>
        <x-bladewind::button type="secondary" radius="full">Full Radius</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::button radius="none">No Radius&lt;/x-bladewind::button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::button radius="small">Small Radius&lt;/x-bladewind::button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind::button radius="medium">Medium Radius&lt;/x-bladewind::button&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            // this is the default so radius="full" can be omitted
            &lt;x-bladewind::button radius="full">Full Radius&lt;/x-bladewind::button&gt;
        </code>
    </pre>

    <h2 id="spinning">With Spinners</h2>
    <p>Buttons can have spinners. This is useful when indicating progress of a form submission or progress of any other action.
    The button spinners use the BladewindUI <a href="/component/spinner">Spinner</a> component.</p>
    <p>Spinners can be activated on buttons by setting the <code class="inline text-red-500">has_spinner="true"</code>
    attribute. This creates a button with a spinner but, the spinners are hidden by default. The assumption is, you want a button
    with a spinner but you want to show the spinner when the button is clicked. If you want the spinner to be visible by default you can set the
    attribute <code class="inline text-red-500">show_spinner="true"</code>.</p>
    <div class="text-center p-4">
        <x-bladewind::button has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button> &nbsp;&nbsp;
        <x-bladewind::button type="secondary" has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button>
    </div>
    <pre class="language-markup line-numbers" data-line="2,3">
        <code>
            &lt;x-bladewind.button
                has_spinner="true"
                show_spinner="true"&gt;
                Saving...
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <p>
        It is possible to trigger the spinning effect when the button is clicked. This can be achieved using the helper functions bundled with BladewindUI.
        In this case you will need to set the <code class="inline text-red-500">name</code> and <code class="inline text-red-500">onclick</code> attributes of the button.
    </p>
    <div class="text-center p-4">
        <x-bladewind::button has_spinner="true" name="save-user" onclick="unhide('.save-user .bw-spinner')">Click for my spinner</x-bladewind::button> &nbsp;&nbsp;
    </div>

    <pre class="language-markup line-numbers" data-line="2-4">
        <code>
            &lt;x-bladewind.button
                has_spinner="true"
                name="save-user"
                onclick="unhide('.save-user .bw-spinner')"&gt;
                Click for my spinner
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <h2 id="icons">With Icons</h2>
    <p>Buttons can have <a href="/component/icon">icons</a>.
    To add an icon simply specify the icon name in the <code class="inline text-red-500">icon</code> attribute. Refer to our <a href="/component/icon">Icon</a> component page for details on icon names.
    Icons by default are positioned to the left of the button. You can set <code class="inline text-red-500">icon_right="true"</code> to position the icon to the right of the button.</p>
    <p>
        <x-bladewind::alert show_close_icon="false">If you specify <b>icon_right="true"</b> and <b>has_spinner="true"</b>, your icon will be ignored because the spinner is positioned to the right of the button.</x-bladewind::alert>
    </p>
    <br />
    <div class="text-center">
        <x-bladewind::button icon="arrow-path">Refresh page</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button icon="arrow-path"&gt;
                Refresh Page
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>
    <br />
    <div class="text-center space-x-4">
        <x-bladewind::button type="secondary" icon="arrow-small-right" icon_right="true">Next Chapter</x-bladewind::button>
    </div>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.button
                type="secondary"
                icon="arrow-small-right"
                icon_right="true""&gt;
                Next Chapter
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h2 id="submittable">Form Submission</h2>
    <p>
        By default the button component is rendered as <code class="inline text-red-500">&lt;button type="button"...</code>.
        This default button behavior will not submit forms. To enable form submission, set this attribute on the button,
        <code class="inline text-red-500">can_submit="true"</code>. The resulting html for the button will be
        <code class="inline text-red-500">&lt;button type="submit"...</code>.
    </p>
    <p>
        <x-bladewind::card size="big">
            <form action="" method="get">
                <div class="sm:flex sm:space-x-3">
                    <x-bladewind::input placeholder="First name" name="first_name" required="true" />
                    <x-bladewind::input placeholder="Last name" name="last_name" />
                </div>
                <x-bladewind::input name="email" placeholder="Email" type="email" />
                <x-bladewind::textarea placeholder="Comment"></x-bladewind::textarea>
                <x-bladewind::button can_submit="true" class="mx-auto block mt-2 w-full">click me to submit</x-bladewind::button>
            </form>
        </x-bladewind::card>
    </p>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.button
                can_submit="true"
                class="mx-auto block"&gt;click me to submit&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h2 id="coloured">Coloured Button</h2>
    <p>
        Only primary buttons can take on different colors. If the default blue color doesn't do it for you, there are eight other colour options to pick from.
    </p>
    <p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <x-bladewind::button color="red">Red is a colour no?</x-bladewind::button>
        <x-bladewind::button color="yellow">Is gold yellow?</x-bladewind::button>
        <x-bladewind::button color="green">Let's go green</x-bladewind::button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
        <x-bladewind::button color="pink">Babies love Pink</x-bladewind::button>
        <x-bladewind::button color="cyan">Cyan oh Cyan!</x-bladewind::button>
        <x-bladewind::button color="black">Black is Bae</x-bladewind::button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
        <x-bladewind::button color="purple">Purple Wheels</x-bladewind::button>
        <x-bladewind::button color="orange">Get me an Orange</x-bladewind::button>
        <x-bladewind::button>Feeling Blue</x-bladewind::button>
    </div>
    </p>

    <pre class="language-markup line-numbers" data-line="1,5,9,13,17,21,25,29">
        <code>
            &lt;x-bladewind.button color="red"&gt;
                look ma! i am red
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="yellow"&gt;
                look ma! i am yellow
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="green"&gt;
                look ma! i am green
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="pink"&gt;
                look ma! i am pink
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="cyan"&gt;
                look ma! i am cyan
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="black"&gt;
                look ma! i am black
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="purple"&gt;
                look ma! i am purple
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button color="orange"&gt;
                look ma! i am orange
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button&gt;look ma! i am blue&lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <p>
        Assuming you decide to use a different primary button colour throughout your application, say purple, specifying
        <code class="inline text-red-500">color="purple"</code> everytime you create a button can get quite tedious. We advise you instead open up the
        <code class="inline">resources > views > components > bladewind > button.blade.php</code> file and change the blue value on the line that says
        <code class="inline">'color' => 'blue',</code>.
    </p>

    <h2 id="events">Button Events</h2>
    <p>
        The Bladewind button component translates to a regular HTML <code class="inline text-red-500">&lt;button...</code> tag.
        This means you can literally append any HTML button event attribute (<em>onclick, onblur, onmouseover, onmouseout</em> etc) to the component and it will be fired.
    </p>
    <div class="text-center p-4">
        <x-bladewind::button onclick="alert('you clicked me')">I have an onclick</x-bladewind::button>
    </div>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.button
                onclick="alert('you clicked me')"&gt;
                click me to submit
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <h2 id="circular">Circular Buttons</h2>
    <p>
        The Bladewind button component provides a circular option that accepts ONLY icons. The <a href="/component/icon">Icon component page</a> describes how to use icon names.
        Just like the non-circular buttons, these can exist as primary or secondary and in all colour flavours.
    </p>
    <div class="text-center p-4 space-x-4">
        <x-bladewind::button.circle icon="pencil" />
        <x-bladewind::button.circle icon="trash" color="red"/>
        <x-bladewind::button.circle icon="cloud-arrow-down" type="secondary" show_ring="false" />
    </div>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button.circle icon="pencil" /&gt;

            &lt;x-bladewind.button.circle icon="trash" color="red" /&gt;

            &lt;x-bladewind.button.circle icon="refresh" type="secondary" show_ring="false" /&gt;
        </code>
    </pre>
    <p>
        Circular buttons come in the same sizes as non-circular buttons. Both button shapes are equal in height.
    </p>
    <div class="text-center p-4 space-x-4">
        <x-bladewind::button.circle icon="pencil" size="tiny" />
        <x-bladewind::button size="tiny">Hello World</x-bladewind::button>
    </div>
    <div class="text-center p-4 space-x-4">
        <x-bladewind::button.circle icon="pencil" size="small" />
        <x-bladewind::button size="small">Hello World</x-bladewind::button>
    </div>
    <div class="text-center p-4 space-x-4">
        <x-bladewind::button.circle icon="pencil" size="regular" />
        <x-bladewind::button size="regular">Hello World</x-bladewind::button>
    </div>
    <div class="text-center p-4 space-x-4">
        <x-bladewind::button.circle icon="pencil" size="big" />
        <x-bladewind::button size="big">Hello World</x-bladewind::button>
    </div>

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
            <td>type</td>
            <td>primary</td>
            <td><code class="inline">primary</code> <code class="inline">secondary</code></td>
        </tr>
        <tr>
            <td>size</td>
            <td>regular</td>
            <td><code class="inline">tiny</code> <code class="inline">small</code> <code class="inline">regular</code> <code class="inline">big</code></td>
        </tr>
        <tr>
            <td>name</td>
            <td><em>blank</em></td>
            <td>This name is added to the button's <code class="inline">class</code> attribute just for convenience. This name can then be used to access the button via javascript or css.</td>
        </tr>
        <tr>
            <td>has_spinner</td>
            <td>false</td>
            <td>Defines if the button should include a spinner. The value must be a string and not boolean. <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>show_spinner</td>
            <td>false</td>
            <td>This only applies if <code class="inline text-red-500">has_spinner="true"</code>. By default the spinner, even if enabled is hidden. This attribute sets the default visibility of the spinner. The value must be a string and not boolean. <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>color</td>
            <td>primary</td>
            <td>Set the colour of the button. The default is picked from what has been defined as the primary colour in your tailwind.config.js file. BladewindUI sets the default to blue. <br /><br><br /> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code>
            <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
            <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code></td>
        </tr>
        <tr>
            <td>can_submit</td>
            <td>false</td>
            <td>By default the button component is rendered as <code class="inline text-red-500">&lt;button type="button"...</code>.
            This default behavior will not work for submitting forms. To enable form submission, set <code class="inline">can_submit="true"</code>. The resulting html for the button will be <code class="inline text-red-500">&lt;button type="submit"...</code>. . <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>false</td>
            <td>Defines if the button should be disabled or enabled. <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>show_focus_ring</td>
            <td>true</td>
            <td>By default buttons are displayed with a ring around them when they have focus. This attribute can disable that. <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>icon</td>
            <td><em>blank</em></td>
            <td>Defines if the button should have an icon. All Heroicons icon names can be specified.</td>
        </tr>
        <tr>
            <td>icon_right</td>
            <td>false</td>
            <td>Defines if the icon should be positioned to the right of the button. Takes effect only is <em>icon</em> is not blank. <br><br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>tag</td>
            <td>button</td>
            <td>Specifies which html tag to use in creating the button. <br><br /> <code class="inline">button</code> <code class="inline">a</code> </td>
        </tr>
        <tr>
            <td>radius</td>
            <td>full</td>
            <td>Specifies how round the button should look. <br><br /> <code class="inline">none</code> <code class="inline">small</code> <code class="inline">medium</code> <code class="inline">full</code> </td>
        </tr>
        <tr>
            <td>button_text_css</td>
            <td><em>blank</em></td>
            <td>The button text colour has been predetermined by the button colour and respective shades. It is however possible to overwrite the colour of the button text.
                If the css you specify has already been precompiled into the BladewindUI css file, it will be used.
                If not, you need to ensure the css you specify exists in your project's css file <br><br /> <code class="inline">any of the TailwindCss styles</code> </td>
        </tr>
    </x-bladewind::table>

    <h3>Button with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                type="secondary"
                size="big"
                name="btn-subscribe"
                has_spinner="true"
                show_spinner="false"
                disabled="false"
                class="mt-0"
                tag="a"
                show_focus_ring="false"
                radius="medium"
                icon="lock-closed"
                icon_right="false"
                button_text_css="font-bold text-black
                can_submit="false"&gt;
                ...
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > button.blade.php</code>
    </x-bladewind::alert>


    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#primary">Primary button</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#secondary">Secondary button</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#spinning">With spinners</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">With icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#submittable">Form submission</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#coloured">Coloured button</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#events">Button events</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#circular">Circular buttons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-button');
        </script>
    </x-slot:scripts>
</x-app>
