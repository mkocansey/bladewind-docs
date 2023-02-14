<x-app>
    <x-slot name="title">Textbox Component</x-slot>
    <h1 class="page-title">Textbox</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Displays a textbox or text input element. This component in fact works for all the possible values of <code class="inline text-red-500">&lt;input type="" .../&gt;</code>.
                The default type is <code class="inline text-red-500">text</code>.
            </p>
            <p><x-bladewind::input name="fnaln" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.input  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Password Textbox</h3>
            <p><x-bladewind::input type="password" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.input type="password"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Numeric Textbox</h3>
            <p><x-bladewind::input numeric="true" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.input numeric="true"  /&gt;
                    </code>
                </pre>
            </p><br />
            <h3>Add Placeholder Text</h3>
            <p><x-bladewind::input placeholder="Full name" /></p>
            <p>
                <pre class="language-markup">
                    <code>
                        &lt;x-bladewind.input placeholder="Full name"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>With Labels</h3><br />
            <p>
                You can display the BladewindUI textbox with labels. Labels present themselves as placeholders but jump to the top border of the textbox when that field has focus.
                This is a nice way to build compact looking forms without having form labels in the way. If you prefer to create and style your own form labels, simply ignore the <code class="inline text-red-500">label</code> attribute and use the <code class="inline text-red-500">placeholder</code> attribute instead.
            </p>
            <p><x-bladewind::input label="Full name" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input label="Full name"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>What Happens When Both Placeholder and Label are Set</h3><br />
            <p>
                The <code class="inline">label</code> attribute actually replaces <code class="inline">placeholder</code>. In most common cases input labels are displayed above
                the input box and don't interfere with the input's placeholder text. However, the label for Bladewind's Textbox component is designed to sit in the same spot where the placeholder text is displayed and covers it up.
                Having a placeholder text that is longer than your label text results in some parts of the placeholder text sticking out under the label. If you want the placeholder to still be shown even when there is a label, set <code class="inline text-red-500">show_placeholder_always="true"</code>
            </p>
            <p><x-bladewind::input name="mobile" label="Mobile" placeholder="000.0000.000" show_placeholder_always="true"  /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input
                            name="mobile" label="Mobile" placeholder="000.0000.000" /&gt;
                    </code>
                </pre>
            </p>
            <p>
                From the example above you will notice the placeholder is sticking out under the label. This is because the placeholder text is longer than the label.
                See why we hide the placeholder when the label is set. One way to fix this is by appending non breaking spaces to your label till the placeholder text is covered.
                This is an ugly solution.
            </p>
            <p><x-bladewind::input name="mobile" label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" placeholder="000.0000.000" show_placeholder_always="true" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input name="mobile"
                            label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                            placeholder="000.0000.000"
                            show_placeholder_always="true" /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Required Fields</h3><br />
            <p>
                This either adds a red asterisk sign to the placeholder text or a red star to the label of the input field.
            </p>
            <p><x-bladewind::input label="Full name" required="true" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input required="true" label="Full name"  /&gt;
                    </code>
                </pre>
            </p>
            <br /><h3>Events</h3><br />
            <p>
                You can append any of the available HTML event attributes (<em>onclick, onblur, onfocus, onmouseover, onmouseout, onkeyup, onkeydown</em> etc) to the component, just like you would to a regular <code class="inline">&lt;input ...</code> tag.
                The border of the textbox below turns red onfocus and to gray onblur.
            </p>
            <p><x-bladewind::input name="events" label="Full name" required="true"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')" /></p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind.input
                            name="events"
                            label="Full name"
                            required="true"
                            onfocus="changeCss('.events', '!border-2,!border-red-400')"
                            onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"  /&gt;
                    </code><a name="validate"></a>
                </pre>
            </p>
            <br /><h2>Validating Required Fields</h2>
            <p>
                Bladewind comes with a very handy helper function for validating input and textarea fields that have the attribute <code class="inline text-red-500">required='true"</code> set.
                The best way to explain this is to look at an actual sign up form example.
            </p>
            <p>
                <x-bladewind::card>
                    <form method="get" class="signup-form">
                        <h1 class="my-2 text-2xl font-light text-blue-900/80">Create Account</h1>
                        <p class="mt-3 mb-6 text-blue-900/80 text-sm">
                            This is a sign up form example to demonstrate how to validate forms using Bladewind.
                        </p>
                        <x-bladewind::input name="fname" required="true" label="Full Name" error_message="You will need to enter your full name" />
                        <div class="flex gap-4">
                            <x-bladewind::input name="email" required="true"  label="Email" />
                            <x-bladewind::input name="mobile"  label="Mobile" numeric="true" />
                        </div>
                        <x-bladewind::textarea required="true" name="bio"
                            error_message="Yoh! write something nice about yourself"
                            label="Describe yourself" show_error_inline="true"></x-bladewind::textarea>
                        <div class="text-center">
                            <x-bladewind::button name="btn-save" has_spinner="true" type="primary" can_submit="true" class="mt-3">Sign Up Today</x-bladewind::button>
                        </div>
                    </form>
                </x-bladewind::card>
            </p>
            <p>
                Let's take a look at the code for the form and then proceed to break it down.
            </p>
            <p>
                <pre class="language-markup line-numbers" data-line="1,5,16,22,33,35, 36">
                    <code>
                        &lt;x-bladewind::notification /&gt;

                        &lt;x-bladewind::card&gt;

                            &lt;form method="get" class="signup-form"&gt;

                                &lt;h1 class="my-2 text-2xl font-light text-blue-900/80"&gt;Create Account&lt;/h1&gt;
                                &lt;p class="mt-3 mb-6 text-blue-900/80 text-sm"&gt;
                                    This is a sign up form example to demonstrate how to validate forms using Bladewind.
                                &lt;/p&gt;

                                &lt;x-bladewind::input
                                    name="fname"
                                    required="true"
                                    label="Full Name"
                                    error_message="You will need to enter your full name" /&gt;

                                &lt;div class="flex gap-4"&gt;

                                    &lt;x-bladewind::input
                                        name="email"
                                        required="true"
                                        label="Email" /&gt;

                                    &lt;x-bladewind::input
                                        name="mobile"
                                        label="Mobile"
                                        numeric="true" /&gt;

                                &lt;/div&gt;

                                &lt;x-bladewind::textarea
                                    required="true"
                                    name="bio"
                                    error_message="Yoh! write something nice about yourself"
                                    show_error_inline="true"
                                    label="Describe yourself"&gt;&lt;/x-bladewind::textarea&gt;

                                &lt;div class="text-center"&gt;

                                    &lt;x-bladewind::button
                                        name="btn-save"
                                        has_spinner="true"
                                        type="primary"
                                        can_submit="true"
                                        class="mt-3"&gt;
                                        Sign Up Today
                                    &lt;/x-bladewind::button&gt;

                                &lt;/div&gt;

                            &lt;/form&gt;

                        &lt;/x-bladewind::card&gt;
                    </code>
                </pre>
            </p>
            <p>
                Error messages can either be displayed inline or using the <a href="/component/notification">Bladewind notification</a> component.
                You will notice we included the Notification component on line 1. On line 5 we have a form with a class of <code class="inline">signup-form</code>.
                This class will be used to set up an event listener on the form. On line 16 out input component defines an <code class="inline text-red-500">error_message</code> attribute.
                This message is what will be displayed if we validate the form and find that field to be empty. The <code class="inline">error_message</code> attribute will
                only be used if the <code class="inline text-red-500">required="true"</code> attribute has been set on the input component.
            </p>
            <p>
                Our email input has set <code class="inline text-red-500">required="true"</code> but has no <code class="inline text-red-500">error_message</code> attribute defined. You will notice
                when we submit the form with no email value, the field is highlighted with a red border but no message is displayed.
            </p>
            <p>
                Lastly, our textarea component defines a new attribute on line 36. The <code class="inline text-red-500">show_error_inline="true"</code> attribute will display the
                error message beneath the field the attribute was set on.
            </p>
            <p>Below is the javascript that triggers the validation of the form. <code class="inline">dom_el</code>, <code class="inline">unhide</code> and <code class="inline">validateForm</code> are helper functions in the package.</p>
            <p>
                <pre class="language-js line-numbers" data-line="">
                    <code>
                        // dom_el(),
                        // validateForm() and
                        // unhide() are helper functions in BladewindUI

                        dom_el('.signup-form').addEventListener('submit', function (e){
                            e.preventDefault();
                            signUp();
                        });

                        signUp = () => {
                            if (validateForm('.signup-form')) {

                                // do this if form is validated
                                unhide('.btn-save .bw-spinner')
                            }
                        }
                    </code><a name="attributes"></a>
                </pre>
            </p>

           <p>&nbsp;</p>
            <p><h2>Full List Of Attributes</h2></p>
            <p>The table below shows a comprehensive list of all the attributes available for the Input component.</p>
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
                    <td>show_placeholder_always</td>
                    <td>false</td>
                    <td>
                        Placeholder text is hidden when the label attribute has a value. Setting this to true always shows the placeholder.<br />
                        <code class="inline">true</code> <code class="inline">false</code>
                     </td>
                </tr>
                <tr>
                    <td>error_message</td>
                    <td><em>blank</em></td>
                    <td>The message to display when the form is validated and field happens to be blank.</td>
                </tr>
                <tr>
                    <td>show_error_inline</td>
                    <td>false</td>
                    <td>Error messages can either be displayed inline or using the Notification component (default).<br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>error_heading</td>
                    <td>Error</td>
                    <td>Only used when displaying validation errors using the Notification component. Because the validation errors are triggered from javascript, it may not be easy to translate the heading of the notification message. This provides a way to specify a translatable heading for the error.</td>
                </tr>
                <tr>
                    <td>selected_value</td>
                    <td><em>blank</em></td>
                    <td>Default value to display in the input element. Useful when in edit mode.</td>
                </tr>
                <tr>
                    <td>with_dots</td>
                    <td>true</td>
                    <td>
                        Mostly relevant if <code class="inline">numeric="true"</code>. Determines if numeric values can contain dots or not.<br />
                        <code class="inline">true</code> <code class="inline">false</code>
                    </td>
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
                        error_message="PIN can only be 4 digits"
                        show_error_inline="true"
                        error_heading="Bugged"
                        with_dots="true"
                        show_placeholder_always="true"
                        selected_value="" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > input.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>
            <x-bladewind::notification />

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#validate">Validating input fields</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-textbox');

            dom_el('.signup-form').addEventListener('submit', function (e){
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                if (validateForm('.signup-form')) {
                    unhide('.btn-save .bw-spinner')
                }
            }
        </script>
    </x-slot>
</x-app>
