<x-app>
    <x-slot name="title">Dropdown Component</x-slot>
    <h1 class="page-title">Dropdown</h1>
    <div class="flex">
        <div class="grow w-3/4">
        <a name="primary"></a>
            <p>
                The default primary colour theme for BladewindUI dropdowns is blue. 
                It is possible to set a colour attribute to display our dropdown in different colours. These are however a definite list of colours.
                You can check out our customization notes on how to use a different primary theme colour if you'd prefer a colour not defined in our list.
            </p>
            <br /><br />
            <a name="primary"><h2>Primary dropdown</h2></a>
            
            <div class="h-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown&gt;subscribe now&lt;/x-bladewind.dropdown/&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <h3 class="pb-4">Different Sizes</h3>
            
            
            <br /><br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown size="tiny"&gt;Save&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown size="small"&gt;Subscribe&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown size="regular"&gt;Subscribe&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <a name="secondary"></a>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown size="big"&gt;Save User&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
           
            <p>&nbsp;</p>
            <h2>Secondary dropdown</h2>
           
            <div class="h-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown&gt;subscribe now&lt;/x-bladewind.dropdown/&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <h3 class="pb-4">Different Sizes</h3>
            
            
            <br /><br />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                         type="secondary" 
                         size="tiny"&gt;Save&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                         type="secondary" 
                         size="small"&gt;Subscribe&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                         type="secondary" 
                         size="regular"&gt;Subscribe&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <a name="spinning"></a>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                         type="secondary" 
                         size="big"&gt;Save User&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <a name="stacked"><h2>With Spinners</h2></a>
            <p>dropdowns can have spinners. This is useful if you are indicating progress of a form submission or any other progress. 
            The dropdown spinners use the BladewindUI <a href="/component/spinner">Spinner</a> component.</p>
            <p>Spinners can be activated on dropdowns by setting the <code class="inline text-red-500">has_spinner="true"</code> 
            attribute. This creates a dropdown with a spinner but, the spinners are hidden by default. The assumption is, you want a dropdown 
            with a spinner but you want to show the spinner when the dropdown is clicked. If you want the spinner to be visible by default you need to also set the 
            <code class="inline text-red-500">show_spinner="true"</code> attribute.</p>
            <p>
                
            </p>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                        has_spinner="true" 
                        show_spinner="true"&gt;Saving...&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <br />
            <p>
                It is possible to trigger the spinning effect when the dropdown is clicked. This can be achieved using the helper functions bundled with BladewindUI. 
                In this case you will need to set the <code class="inline text-red-500">name</code> and <code class="inline text-red-500">onclick</code> attributes of the dropdown.
            </p>
            <p>
                
            </p>
            <a name="submittable"></a>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                        has_spinner="true" 
                        name="save-user" 
                        onclick="unhide('.save-user .bw-spinner')"&gt;
                        Click for my spinner
                    &lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            
            <p>&nbsp;</p>
            <h2>Form Submission</h2>
            <p>
                By default the dropdown component is rendered as <code class="inline text-red-500">&lt;dropdown type="dropdown"...</code>. 
                This default behavior will not work for submitting forms. To enable form submission, set this attribute on the dropdown, 
                <code class="inline">can_submit="true"</code>. The resulting html for the dropdown will be 
                <code class="inline text-red-500">&lt;dropdown type="submit"...</code>.
            </p>
            <p>
                <form action="" method="get" class="p-7 bg-slate-200/50 shadow-md shadow-slate-400/20">
                    <div class="flex space-x-3">
                    <x-bladewind.input placeholder="First name" name="first_name" required="true" />
                    <x-bladewind.input placeholder="Last name" name="last_name" />
                    </div>
                    <x-bladewind.input name="email" placeholder="Email" type="email" />
                    <x-bladewind.textarea placeholder="Comment"></x-bladewind.textarea>
                    
                </form>
            </p>

            <a name="coloured"></a>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown
                        can_submit="true"
                        css="mx-auto block"&gt;click me to submit&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
           
            <p>&nbsp;</p>
            <h2>Colored dropdown</h2>
            <p>
                Only primary dropdowns can take on different colors. If the default blue color doesn't do it for you, we have eight other colour options to pick from. 
            </p>
            <p>
                
            </p>

            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown 
                        color="red"&gt;look ma! i am red&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="yellow"&gt;look ma! i am yellow&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="green"&gt;look ma! i am green&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="pink"&gt;look ma! i am pink&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="cyan"&gt;look ma! i am cyan&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="black"&gt;look ma! i am black&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="purple"&gt;look ma! i am purple&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown 
                        color="orange"&gt;look ma! i am orange&lt;/x-bladewind.dropdown&gt;

                    &lt;x-bladewind.dropdown&gt;look ma! i am blue&lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>
            <br />
            
            <p>
                Assuming you decide to use a different primary dropdown colour throughout your application, say purple, specifying 
                <code class="inline text-red-500">color="purple"</code> everytime you create a dropdown can get quite tedious. We advise you instead open up the 
                <code class="inline">resources > views > components > bladewind > dropdown.blade.php</code> file and change the blue value on the line that says
                <code class="inline">'color' => 'blue',</code>.<a name="attributes"></a>
            </p>

            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the dropdown component.</p>
            <x-bladewind.table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td><em>blank</em></td>
                    <td>This name is added to the dropdown's <code class="inline">class</code> attribute just for convenience. This name can then be used to access the dropdown via javascript or css.</td>
                </tr>
                <tr>
                    <td>caption</td>
                    <td>secondary</td>
                    <td><code class="inline">primary</code> <code class="inline">secondary</code></td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>regular</td>
                    <td><code class="inline">tiny</code> <code class="inline">small</code> <code class="inline">regular</code> <code class="inline">big</code></td>
                </tr>
                <tr>
                    <td>onselect</td>
                    <td>false</td>
                    <td>Defines if the dropdown should include a spinner. The value must be a string and not boolean. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>data</td>
                    <td>false</td>
                    <td>This only applies if <code class="inline text-red-500">has_spinner="true"</code>. By default the spinner, even if enabled is hidden. This attribute sets the default visibility of the spinner. The value must be a string and not boolean. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>value_key</td>
                    <td>blue</td>
                    <td>Set the color of the dropdown. <br> <code class="inline">blue</code> <code class="inline">red</code>
                    <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code> 
                    <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code></td>
                </tr>
                <tr>
                    <td>label_key</td>
                    <td>false</td>
                    <td>By default the dropdown component is rendered as <code class="inline text-red-500">&lt;dropdown type="dropdown"...</code>. 
                    This default behavior will not work for submitting forms. To enable form submission, set <code class="inline">can_submit="true"</code>. The resulting html for the dropdown will be <code class="inline text-red-500">&lt;dropdown type="submit"...</code>. . <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>icon_key</td>
                    <td>false</td>
                    <td>Defines if the dropdown should be disabled or enabled. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>url_key</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>append_value_to_url</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>append_value_to_url_as</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>data_serialize_as</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>selected_value</td>
                    <td><em>blank</em></td>
                    <td>Any javascript actions you wish to perform when the dropdown is clicked can be defined via this attribute. Example, <code class="inline">onclick="validateForm()"</code> where validateForm() is a javascript function available on the page.</td>
                </tr>
                <tr>
                    <td>searchable</td>
                    <td>bw-dropdown</td>
                    <td>Any additonal css classes can be added using this attribute. For example if you prefer to have non-rounded dropdowns you can set <code class="inline">css="!rounded-none"</code>.</td>
                </tr>
                <tr>
                    <td>show_filter_icon</td>
                    <td>bw-dropdown</td>
                    <td>Any additonal css classes can be added using this attribute. For example if you prefer to have non-rounded dropdowns you can set <code class="inline">css="!rounded-none"</code>.</td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Dropdown with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.dropdown 
                        type="secondary"
                        size="big"
                        name="btn-subscribe"
                        has_spinner="true"
                        show_spinner="false"
                        disabled="false"
                        can_submit="false"
                        onclick="alert('you clicked me')"
                        css="!rounded-none"&gt;
                        ...
                    &lt;/x-bladewind.dropdown&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/dropdown.blade.php</code>
            </x-bladewind.alert> <br />
            <x-bladewind.alert show_close_icon="false">
                The javascript source file for this component is available in <code class="inline">public/bladewind/assets/js/dropdown.js</code>
            </x-bladewind.alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#primary">Basic dropdown</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#secondary">Searchable dropdown</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#spinning">Onselect action</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#submittable">Form submission</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-dropdown');
        </script>
    </x-slot>
</x-app>