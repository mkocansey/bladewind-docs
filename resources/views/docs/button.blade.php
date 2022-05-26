<x-app>
    <x-slot name="title">Button Component</x-slot>
    <h1 class="page-title">Button</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                The default primary colour theme for BladewindUI buttons is blue. 
                It is possible to set a colour attribute to display our button in different colours. These are however a definite list of colours.
                You can check out our customization notes on how to use a different primary <a name="primary"></a> theme colour if you'd prefer a colour not defined in our list.
            </p>
            <br />
            <h2>Primary Button</h2>
            <x-bladewind::button>Subscribe Now</x-bladewind::button>
            <div class="h-2"></div>
            <pre class="language-markup">
                <code>
                    &lt;x-bladewind.button&gt;subscribe now&lt;/x-bladewind.button/&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <h3 class="pb-4">Different Sizes</h3>
            <x-bladewind::button size="tiny">Save</x-bladewind::button> &nbsp;&nbsp;
            <x-bladewind::button size="small">Subscribe</x-bladewind::button>&nbsp;&nbsp;
            <x-bladewind::button size="regular">Subscribe</x-bladewind::button>&nbsp;&nbsp;
            <x-bladewind::button size="big">Save User</x-bladewind::button>
            
            <br /><br />
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
           
            <p>&nbsp;</p>
            <h2>Secondary Button</h2>
           <x-bladewind::button type="secondary">Subscribe Now</x-bladewind::button>
            <div class="h-2"></div>
            <pre class="language-markup line-numbers" data-line="2">
                <code>
                    &lt;x-bladewind.button 
                        type="secondary"&gt;
                        subscribe now
                    &lt;/x-bladewind.button/&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <h3 class="pb-4">Different Sizes</h3>
            <x-bladewind::button type="secondary" size="tiny">Save</x-bladewind::button>
            <x-bladewind::button type="secondary" size="small">Subscribe</x-bladewind::button>
            <x-bladewind::button type="secondary" size="regular">Subscribe</x-bladewind::button>
            <x-bladewind::button type="secondary" size="big">Save User</x-bladewind::button>
            
            <br /><br />
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
                </code><a name="spinning"></a>
            </pre>

            <p>&nbsp;</p>
            <h2>With Spinners</h2>
            <p>Buttons can have spinners. This is useful when indicating progress of a form submission or progress of any other action. 
            The button spinners use the BladewindUI <a href="/component/spinner">Spinner</a> component.</p>
            <p>Spinners can be activated on buttons by setting the <code class="inline text-red-500">has_spinner="true"</code> 
            attribute. This creates a button with a spinner but, the spinners are hidden by default. The assumption is, you want a button 
            with a spinner but you want to show the spinner when the button is clicked. If you want the spinner to be visible by default you can set the 
            attribute <code class="inline text-red-500">show_spinner="true"</code>.</p>
            <p>
                <x-bladewind::button has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button> &nbsp;&nbsp;
                <x-bladewind::button type="secondary" has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button>
            </p>
            <pre class="language-markup line-numbers" data-line="2,3">
                <code>
                    &lt;x-bladewind.button
                        has_spinner="true" 
                        show_spinner="true"&gt;
                        Saving...
                    &lt;/x-bladewind.button&gt;
                </code>
            </pre>
            <br />
            <p>
                It is possible to trigger the spinning effect when the button is clicked. This can be achieved using the helper functions bundled with BladewindUI. 
                In this case you will need to set the <code class="inline text-red-500">name</code> and <code class="inline text-red-500">onclick</code> attributes of the button.
            </p>
            <p>
                <x-bladewind::button has_spinner="true" name="save-user" onclick="unhide('.save-user .bw-spinner')">Click for my spinner</x-bladewind::button> &nbsp;&nbsp;
            </p>

            <pre class="language-markup line-numbers" data-line="2-4">
                <code>
                    &lt;x-bladewind.button
                        has_spinner="true" 
                        name="save-user" 
                        onclick="unhide('.save-user .bw-spinner')"&gt;
                        Click for my spinner
                    &lt;/x-bladewind.button&gt;
                </code><a name="submittable"></a>
            </pre>
            
            <p>&nbsp;</p>
            <h2>Form Submission</h2>
            <p>
                By default the button component is rendered as <code class="inline text-red-500">&lt;button type="button"...</code>. 
                This default button behavior will not submit forms. To enable form submission, set this attribute on the button, 
                <code class="inline text-red-500">can_submit="true"</code>. The resulting html for the button will be 
                <code class="inline text-red-500">&lt;button type="submit"...</code>.
            </p>
            <p>
                <form action="" method="get" class="p-7 bg-slate-200/50 shadow-md shadow-slate-400/20">
                    <div class="flex space-x-3">
                    <x-bladewind::input placeholder="First name" name="first_name" required="true" />
                    <x-bladewind::input placeholder="Last name" name="last_name" />
                    </div>
                    <x-bladewind::input name="email" placeholder="Email" type="email" />
                    <x-bladewind::textarea placeholder="Comment"></x-bladewind::textarea>
                    <x-bladewind::button can_submit="true" class="mx-auto block mt-2">click me to submit</x-bladewind::button>
                </form>
            </p>

            <pre class="language-markup line-numbers" data-line="2">
                <code>
                    &lt;x-bladewind.button
                        can_submit="true"
                        class="mx-auto block"&gt;click me to submit&lt;/x-bladewind.button&gt;
                </code><a name="coloured"></a>
            </pre>
           
            <p>&nbsp;</p>
            <h2>Colored Button</h2>
            <p>
                Only primary buttons can take on different colors. If the default blue color doesn't do it for you, there are eight other colour options to pick from. 
            </p>
            <p>
                <x-bladewind::button color="red">Look Ma! I am red</x-bladewind::button>&nbsp;
                <x-bladewind::button color="yellow">Look Ma! I am yellow</x-bladewind::button>
                <x-bladewind::button color="green">Look Ma! I am green</x-bladewind::button>
                
                <x-bladewind::button color="pink" class="my-4">Look Ma! I am pink</x-bladewind::button>
                <x-bladewind::button color="cyan" class="my-4">Look Ma! I am cyan</x-bladewind::button>
                <x-bladewind::button color="black" class="my-4">Look Ma! I am black</x-bladewind::button>

                <x-bladewind::button color="purple">Look Ma! I am purple</x-bladewind::button>
                <x-bladewind::button color="orange">Look Ma! I am orange</x-bladewind::button>
                <x-bladewind::button>Look Ma! I am blue</x-bladewind::button>
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
            <br />
            
            <p>
                Assuming you decide to use a different primary button colour throughout your application, say purple, specifying 
                <code class="inline text-red-500">color="purple"</code> everytime you create a button can get quite tedious. We advise you instead open up the 
                <code class="inline">resources > views > components > bladewind > button.blade.php</code> file and change the blue value on the line that says
                <code class="inline">'color' => 'blue',</code>.<a name="events"></a>
            </p>
            
            <p>&nbsp;</p>
            <h2>Button Events</h2>
            <p>
                The Bladewind button component translates to a regular HTML <code class="inline text-red-500">&lt;button...</code> tag. 
                This means you can literally append any HTML button event attribute (<em>onclick, onblur, onmouseover, onmouseout</em> etc) to the component and it will be fired. 
            </p>
            <p>
                <x-bladewind::button onclick="alert('you clicked me')">I have an onclick</x-bladewind::button>
            </p>

            <pre class="language-markup line-numbers" data-line="2">
                <code>
                    &lt;x-bladewind.button
                        onclick="alert('you clicked me')"&gt;
                        click me to submit
                    &lt;/x-bladewind.button&gt;
                </code><a name="coloured"></a>
            </pre>
           
            <p>&nbsp;</p>
            <h2>Colored Button</h2>
            <p>
                Only primary buttons can take on different colors. If the default blue color doesn't do it for you, there are eight other colour options to pick from. 
            </p>
            <p>
                <x-bladewind::button color="red">Look Ma! I am red</x-bladewind::button>&nbsp;
                <x-bladewind::button color="yellow">Look Ma! I am yellow</x-bladewind::button>
                <x-bladewind::button color="green">Look Ma! I am green</x-bladewind::button>
                
                <x-bladewind::button color="pink" class="my-4">Look Ma! I am pink</x-bladewind::button>
                <x-bladewind::button color="cyan" class="my-4">Look Ma! I am cyan</x-bladewind::button>
                <x-bladewind::button color="black" class="my-4">Look Ma! I am black</x-bladewind::button>

                <x-bladewind::button color="purple">Look Ma! I am purple</x-bladewind::button>
                <x-bladewind::button color="orange">Look Ma! I am orange</x-bladewind::button>
                <x-bladewind::button>Look Ma! I am blue</x-bladewind::button>
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
            <br />
            
            <p>
                Assuming you decide to use a different primary button colour throughout your application, say purple, specifying 
                <code class="inline text-red-500">color="purple"</code> everytime you create a button can get quite tedious. We advise you instead open up the 
                <code class="inline">resources > views > components > bladewind > button.blade.php</code> file and change the blue value on the line that says
                <code class="inline">'color' => 'blue',</code>.<a name="attributes"></a>
            </p>

            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Button component.</p>
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
                    <td>Defines if the button should include a spinner. The value must be a string and not boolean. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>show_spinner</td>
                    <td>false</td>
                    <td>This only applies if <code class="inline text-red-500">has_spinner="true"</code>. By default the spinner, even if enabled is hidden. This attribute sets the default visibility of the spinner. The value must be a string and not boolean. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>color</td>
                    <td>blue</td>
                    <td>Set the color of the button. <br> <code class="inline">blue</code> <code class="inline">red</code>
                    <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code> 
                    <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code></td>
                </tr>
                <tr>
                    <td>can_submit</td>
                    <td>false</td>
                    <td>By default the button component is rendered as <code class="inline text-red-500">&lt;button type="button"...</code>. 
                    This default behavior will not work for submitting forms. To enable form submission, set <code class="inline">can_submit="true"</code>. The resulting html for the button will be <code class="inline text-red-500">&lt;button type="submit"...</code>. . <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>false</td>
                    <td>Defines if the button should be disabled or enabled. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Button with all attributes defined</h3>
            <pre class="language-markup">
                <code>
                    &lt;x-bladewind.button 
                        type="secondary"
                        size="big"
                        name="btn-subscribe"
                        has_spinner="true"
                        show_spinner="false"
                        disabled="false"
                        class="mt-0"
                        can_submit="false"&gt;
                        ...
                    &lt;/x-bladewind.button&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > button.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#primary">Primary button</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#secondary">Secondary button</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#spinning">Spinning button</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#submittable">Form submission</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#coloured">Coloured button</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#events">Button events</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-button');
        </script>
    </x-slot>
</x-app>