<x-app>
    <x-slot:title>Input Component</x-slot:title>
    <x-slot:page_title>Input</x-slot:page_title>

    <p>
        Displays a text input element. This is also commonly known as a text box. This component in fact works for all the possible values of <code class="inline text-red-500">&lt;input type="" .../&gt;</code>.
        The default is <code class="inline text-red-500">input type="text"</code>. This Bladewind component simply wraps the HTML input so you are free to use all the various 
        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attributes" target="_blank">input attributes</a> available in HTML. 
    </p>
    <p><x-bladewind::input name="fnaln" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input  /&gt;
        </code>
    </pre>
    <h2 id="password">Password Input</h2>
    <p>This behaves just like the regular HTML password input. Nothing fancy. Any values entered into this field are masked.</p>
    <p><x-bladewind::input type="password" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input type="password"  /&gt;
        </code>
    </pre>
    <h3>Show Password With The Eye</h3>
    <p>
        The component allows you to specify if the user should be able to view the password they entered by clicking on an eye. This can be achieved by setting 
        <code class="inline text-red-500">viewable="true"</code>. 
        The eye is appended as a <a href="#prefix-siffix">suffix</a> to the input. Clicking on the eye when the password is revealed, hides the pasword. 
        The eye icon will be displayed ONLY if the input <code class="inline text-red-500">type="password"</code>. It will be ignored in all other cases.
    </p>
    <p><x-bladewind::input type="password" name="passwed" viewable="true" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input type="password" suffix="eye"  /&gt;
        </code>
    </pre>
    <h2 id="numeric">Numeric Input</h2>
    <p>This accepts only numeric values. Useful when entering phone numbers, age or amounts. 
    By default the decimal point is not allowed as it is technically not a number. In cases where you need decimals, use the attribute <code class="inline text-red-500">with_dots="true"</code></p>
    <p><x-bladewind::input numeric="true" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input numeric="true"  /&gt;
        </code>
    </pre>
    <h2 id="labels-placeholders">Inputs With Labels</h2>
    <p>
        You can display the BladewindUI textbox with labels. Labels present themselves as placeholders but jump to the top border of the textbox when that field has focus.
        This is a nice way to build compact looking forms without having form labels in the way. If you prefer to create and style your own form labels, simply ignore the <code class="inline text-red-500">label</code> attribute and use the <code class="inline text-red-500">placeholder</code> attribute instead.
    </p>
    <p><x-bladewind::input label="Full name" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.input label="Full name"  /&gt;
        </code>
    </pre>
    <h3>Placeholder Text</h3>
    <p><x-bladewind::input placeholder="Full name" /></p>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input placeholder="Full name"  /&gt;
        </code>
    </pre>
    <h3>What Happens When Both Placeholder and Label are Set</h3>
    <p>
        The <code class="inline">label</code> attribute actually replaces <code class="inline">placeholder</code>. In most common cases input labels are displayed above
        the input box and don't interfere with the input's placeholder text. However, the label for Bladewind's Textbox component is designed to sit in the same spot where the placeholder text is displayed and covers it up.
        Having a placeholder text that is longer than your label text results in some parts of the placeholder text sticking out under the label. If you want the placeholder to still be shown even when there is a label, set <code class="inline text-red-500">show_placeholder_always="true"</code>
    </p>
    <p><x-bladewind::input name="mobile" label="Mobile" placeholder="000.0000.000" show_placeholder_always="true"  /></p>
        <pre class="language-markup line-numbers">
            <code>
                &lt;x-bladewind.input
                    name="mobile" label="Mobile" placeholder="000.0000.000" /&gt;
            </code>
        </pre>
    <p>
        From the example above you will notice the placeholder is sticking out under the label. This is because the placeholder text is longer than the label.
        This is why Bladewind hides the placeholder when the label is set. One way to fix this is by appending non breaking spaces to your label till the placeholder text is covered.
        This is an ugly solution.
    </p>
    <p><x-bladewind::input name="mobile" label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" placeholder="000.0000.000" show_placeholder_always="true" /></p>
        <pre class="language-markup line-numbers">
            <code>
                &lt;x-bladewind.input name="mobile"
                    label="Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                    placeholder="000.0000.000"
                    show_placeholder_always="true" /&gt;
            </code>
        </pre>
    <h2 id="required">Required Fields</h2>
    <p>
        This either adds a red asterisk sign to the placeholder text or a red star to the label of the input field.
    </p>
    <p><x-bladewind::input label="Full name" required="true" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.input required="true" label="Full name"  /&gt;
        </code>
    </pre>
    <h2 id="events-validations">Events</h2>
    <p>
        You can append any of the available HTML event attributes (<em>onclick, onblur, onfocus, onmouseover, onmouseout, onkeyup, onkeydown</em> etc) to the component, just like you would to a regular <code class="inline">&lt;input ...</code> tag.
        The border of the textbox below turns red onfocus and to gray onblur.
    </p>
    <p><x-bladewind::input name="events" label="Full name" required="true"
        onfocus="changeCss('.events', '!border-2,!border-red-400')"
        onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')" /></p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.input
                name="events"
                label="Full name"
                required="true"
                onfocus="changeCss('.events', '!border-2,!border-red-400')"
                onblur="changeCss('.events', '!border-2,!border-red-400', 'remove')"  /&gt;
        </code>
    </pre>
    <h3>Validating Required Fields</h3>
    <p>
        Bladewind comes with a very handy Javascript helper function (<code class="inline text-red-500">validateForm(element)</code>) for validating input and textarea fields that have the attribute <code class="inline text-red-500">required='true"</code> set.
        The best way to explain this is to look at an actual sign up form example.
    </p>
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
    <br />
    <p>
        Let's take a look at the code for the form and then proceed to break it down.
    </p>
    <pre class="language-markup line-numbers" data-line="1,5,16,22,33,35, 36">
        <code>
            &lt;x-bladewind.notification /&gt;

            &lt;x-bladewind.card&gt;

                &lt;form method="get" class="signup-form"&gt;

                    &lt;h1 class="my-2 text-2xl font-light text-blue-900/80"&gt;Create Account&lt;/h1&gt;
                    &lt;p class="mt-3 mb-6 text-blue-900/80 text-sm"&gt;
                        This is a sign up form example to demonstrate how to validate forms using Bladewind.
                    &lt;/p&gt;

                    &lt;x-bladewind.input
                        name="fname"
                        required="true"
                        label="Full Name"
                        error_message="You will need to enter your full name" /&gt;

                    &lt;div class="flex gap-4"&gt;

                        &lt;x-bladewind.input
                            name="email"
                            required="true"
                            label="Email" /&gt;

                        &lt;x-bladewind.input
                            name="mobile"
                            label="Mobile"
                            numeric="true" /&gt;

                    &lt;/div&gt;

                    &lt;x-bladewind.textarea
                        required="true"
                        name="bio"
                        error_message="Yoh! write something nice about yourself"
                        show_error_inline="true"
                        label="Describe yourself"&gt;&lt;/x-bladewind.textarea&gt;

                    &lt;div class="text-center"&gt;

                        &lt;x-bladewind.button
                            name="btn-save"
                            has_spinner="true"
                            type="primary"
                            can_submit="true"
                            class="mt-3"&gt;
                            Sign Up Today
                        &lt;/x-bladewind.button&gt;

                    &lt;/div&gt;

                &lt;/form&gt;

            &lt;/x-bladewind.card&gt;
        </code>
    </pre>
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
    <pre class="language-js line-numbers" data-line="">
        <code>
            /** 
            dom_el(), validateForm(), hide() and unhide()
            are helper functions available in BladewindUI
            **/

            dom_el('.signup-form').addEventListener('submit', function (e){
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                (validateForm('.signup-form')) ?
                    unhide('.btn-save .bw-spinner') : // do this is validated
                    hide('.btn-save .bw-spinner'); // do this if not validated
            }
        </code>
    </pre>

    <h2 id="prefix-suffix">Prefixes and Suffixes</h2>
    <p>
        There are cases where you need to prefix or append something to an input field. For example, you want to prefix a URL input field with 'https://' so your users wouldn't need to type that in everytime. 
        Or, when asking your app users for their social media handles you may want to always have the '@' prefix. For now prefixes and suffixes support only text and <a href="/component/icon">icons</a>. 
    </p>
    <h3>Prefixes</h3>
    <p class="!mb-4">You can use prefixes even when your input has a label.</p>
    <x-bladewind::input name="site" label="website address" prefix="https://" />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="site" label="website address" prefix="https://" /&gt;
        </code>
    </pre>
    <p class="!mb-3 !pt-8">You can drop the label and use a placeholder instead.</p>
    <x-bladewind::input name="site2" placeholder="website address" prefix="https://" />
    <x-bladewind::input name="usd" placeholder="0.00" prefix="USD" numeric />
    <x-bladewind::input name="twitter" placeholder="Twitter handle" prefix="@" />
    <x-bladewind::input name="gh" placeholder="username" prefix="https://github.com/" />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="site2" placeholder="website address" prefix="https://" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="usd" placeholder="0.00" prefix="USD" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="twitter" placeholder="Twitter handle" prefix="@" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="gh" placeholder="username" prefix="https://github.com/" /&gt;
        </code>
    </pre>
    <h3>Suffixes</h3>
    <p class="!mb-4">Suffixes get appended to the end of the input field</p>
    <x-bladewind::input name="space" placeholder="workspace-name" suffix=".slack.com" />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input name="space" placeholder="workspace-name" suffix=".slack.com" /&gt;
        </code>
    </pre>
    <x-bladewind::input name="tnc" placeholder="Your bio. Keep it brief and nice" suffix='<a href="#">See some good examples</a>' />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.input 
                name="tnc" 
                placeholder="Your bio. Keep it brief and nice" 
                suffix='&lt;a href="#"&gt;See some good examples&lt;/a&gt;' /&gt;
        </code>
    </pre>
    
<h3>Prefix and Suffix Transparency</h3>
    <p>
        You can opt for non-transparent prefixes and suffixes by setting the attribute <code class="inline text-red-500">transparent_prefix="false"</code> and/or <code class="inline text-red-500">transparent_suffix="false"</code>.
        You can specify both a prefix and suffix on your input fields.
    </p>
    <x-bladewind::input name="usdbg" placeholder="0.00" prefix="USD" numeric transparent_prefix="false" />
    <pre class="language-markup line-numbers" data-line="5">
        <code>
            &lt;x-bladewind.input 
                name="usdbg" 
                placeholder="0.00" 
                prefix="USD" 
                transparent_prefix="false" 
                numeric /&gt;
        </code>
    </pre>
    <br/>
    <x-bladewind::input name="spacex" placeholder="workspace-name" suffix=".slack.com" transparent_suffix="false" />
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::input 
                name="spacex" 
                placeholder="workspace-name" 
                transparent_suffix="false" 
                suffix=".slack.com" /&gt;
        </code>
    </pre>
    <br/>
    <x-bladewind::input name="spacexx" placeholder="workspace-name" prefix="https://" suffix=".slack.com" transparent_prefix="false" transparent_suffix="false" />
    <pre class="language-markup line-numbers" data-line="3,4,6,7">
        <code>
            &lt;x-bladewind.input
                name="spacexx" 
                prefix="https://" 
                transparent_prefix="false" 
                placeholder="workspace-name" 
                suffix=".slack.com" 
                transparent_suffix="false" /&gt;
        </code>
    </pre>
    <h2 id="icons">With Icons</h2>
    <p>
        The BladewindUI input field can have an icon for those moments where you want a simple icon to describe the field. 
        This is not a different kind of input field. We simply make use of prefixes and suffixes to achieve this effect. All <a href="https://heroicons.com">Heroicons</a> names are supported out of the box. 
        You can also specify an SVG tag to be used as an icon.
    </p>
    <p>
        Since input icons are achieved using prefixes, it is important to add the attribute <code class="inline text-red-500">prefix_is_icon="true"</code> if you are using icons as prefixes or <code class="inline text-red-500">suffix_is_icon="true"</code> if you are using icons as suffixes. 
        This way Bladewind forces your prefix or suffix to be an icon and not text. For example: if you specify the prefix <b>"phone"</b>, by default Bladewind will just display the text <b>"phone"</b> as your prefix. However, if you specify 
        <code class="inline text-red-500">prefix_is_icon="true"</code>, Bladewind will look for the icon with the name <b>"phone"</b> and display that instead.
    </p>
    <br />
    <x-bladewind::centered-content size="small">
        <x-bladewind::input name="fullname" placeholder="John T. Doe" prefix="user" prefix_is_icon="true" />
        <x-bladewind::input name="emailic" placeholder="me@bladewindui.com" prefix="envelope" prefix_is_icon="true" />
        <div class="flex gap-4">
            <x-bladewind::input name="fon" placeholder="0000.000.00" prefix="phone" prefix_is_icon="true" />
            <x-bladewind::input name="passw" type="password" placeholder="Password" prefix="key" prefix_is_icon="true" prefix_icon_css="text-orange-500" viewable="true" />
        </div>
        <x-bladewind::button class="w-full">Sign Up</x-bladewind::button>
    </x-bladewind::centered-content>
<br /><br />
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.centered-content size="small"&gt;

                &lt;x-bladewind.input 
                    name="fullname" 
                    placeholder="John T. Doe" 
                    prefix="user" 
                    prefix_is_icon="true" /&gt;

                &lt;x-bladewind.input 
                    name="emailic" 
                    placeholder="me@bladewindui.com" 
                    prefix="envelope" 
                    prefix_is_icon="true" /&gt;

                &lt;div class="flex gap-4"&gt;
                    &lt;x-bladewind.input 
                        name="fon" 
                        placeholder="0000.000.00" 
                        prefix="phone" 
                        prefix_is_icon="true" /&gt;

                    &lt;x-bladewind.input 
                        name="passw" type="password" 
                        placeholder="Password" 
                        prefix="key" 
                        prefix_is_icon="true" 
                        prefix_icon_css="text-orange-500"
                        viewable="true" /&gt;

                &lt;/div&gt;

                &lt;x-bladewind.button class="w-full"&gt;Sign Up&lt;/x-bladewind.button&gt;
                
            &lt;/x-bladewind.centered-content&gt;
        </code>
    </pre>
    <br />
    <p>
        As explained on the BladewindUI <a href="/component/icon">Icon component</a> page, it is possible to use SVG tags and custom SVG files as the input icons.
    </p>
    <x-bladewind::input name="www" placeholder="website address" prefix='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
</svg>' prefix_is_icon="true" />

    <pre class="language-markup line-numbers">
    <code>
    &lt;x-bladewind.input 
    name="www" 
    placeholder="website address" 
    prefix_is_icon="true"
    prefix='&lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"&gt;
&lt;path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /&gt;
&lt;/svg&gt;' /&gt;
    </code>
    </pre>
    <br />
    <x-bladewind::input name="www2" placeholder="website address" transparent_prefix="false" prefix='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
</svg>' prefix_is_icon="true" />

    <pre class="language-markup line-numbers">
    <code>
    &lt;x-bladewind.input 
    name="www" 
    placeholder="website address" 
    prefix_is_icon="true"
    transparent_prefix="false"
    prefix='&lt;svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"&gt;
&lt;path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /&gt;
&lt;/svg&gt;' /&gt;
    </code>
    </pre>


    <p><h2 id="attributes">Full List Of Attributes</h2></p>
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
    <h3>Input with all attributes defined</h3>
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
                selected_value="" 
                prefix="Email" 
                transparent_prefix="false" 
                prefix_is_icon="false" 
                prefix_icon_type="solid" 
                prefix_icon_css=""
                suffix="@gmail.com" 
                transparent_suffix="false" 
                suffix_is_icon="false" 
                suffix_icon_type="solid" 
                suffix_icon_css=""
                viewable="false" 
            /&gt;
        </code>
    </pre>

    <p>&nbsp;</p>
    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > input.blade.php</code>
    </x-bladewind::alert>
    <p>&nbsp;</p>
    <x-bladewind::notification />

        <x-slot:side_nav>
            <div class="flex items-center"><div class="dot"></div><a href="#password">Password Input</a></div>
            <div class="flex items-center"><div class="dot"></div><a href="#numeric">Numeric Input</a></div>
            <div class="flex items-center"><div class="dot"></div><a href="#labels-placeholders">Labels & Placeholders</a></div>
            <div class="flex items-center"><div class="dot"></div><a href="#required">Required Input Fields</a></div>
            <div class="flex items-center"><div class="dot"></div><a href="#events-validations">Events & Validations</a></div>
           <div class="flex items-center"><div class="dot"></div><a href="#prefix-suffix">Prefixes and suffixes</a></div>
           <div class="flex items-center"><div class="dot"></div><a href="#icons">With Icons</a></div>
            <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
        </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-input');

            dom_el('.signup-form').addEventListener('submit', function (e){
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                (validateForm('.signup-form')) ?
                    unhide('.btn-save .bw-spinner') :
                    hide('.btn-save .bw-spinner');
            }
        </script>
    </x-slot>
</x-app>
