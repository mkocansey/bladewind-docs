<x-app>
    <x-slot name="title">Dropdown Component</x-slot>
    <h1 class="page-title">Dropdown</h1>
    
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                This component tried killing two birds with one code by acting as both a form 
                <code class="inline text-red-500">&lt;select&gt;...&lt;/select&gt;</code> and well, a dropdown menu. 
                <a name="basic"></a>
                Arguably this component has the most attributes for a reason. A lot is happening but let's dive right in 
                and display a basic dropdown.
            </p>
            <p>
                @php
                    $countries = [
                        [ 'label' => 'Benin', 'value' => 'bj' ],
                        [ 'label' => 'Burkina Faso', 'value' => 'bf' ],
                        [ 'label' => 'Ghana', 'value' => 'gh' ],
                        [ 'label' => 'Nigeria', 'value' => 'ng' ],
                        [ 'label' => 'Kenya', 'value' => 'ke' ]
                    ];
                    $staff = [
                        [
                            'id' => '1001',
                            'name' => 'Adam Nsiah',
                            'picture' => 'https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no',
                        ],
                        [
                            'id' => '1005',
                            'name' => 'Alfred Rowe',
                            'picture' => 'data:image/jpeg;base64,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',
                        ],
                        [
                            'id' => '1002',
                            'name' => 'Abdul Razak Ibrahim',
                            'picture' => 'data:image/jpeg;base64,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',
                        ],
                        [
                            'id' => '1003',
                            'name' => 'Michael K. Ocansey',
                            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7n9_1gR1PQc9MSg7ss7CSF2SV_Flmv11aDg&usqp=CAU',
                        ],
                        [
                            'id' => '1004',
                            'name' => 'Michael Sarpong',
                            'picture' => 'data:image/jpeg;base64,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',
                        ],
                    ]
                @endphp
            </p>
            <a name="basic"></a><br />
            <h2>Basic dropdown</h2>
            
            <p>
                The <code class="inline text-red-500">data</code> attribute is what really drives the BladewindUI dropdown component.
                This attribute expects an <code class="inline text-red-500">array</code> to be passed to it. Let's look at the basic structure of such an array using a list of five countries. 
                We will build on this array structure as we go further in this documentation.
            </p>
            <p>
            <pre class="language-js line-numbers">
                <code>
                &lt;?php
                    $countries = [
                        [ 'label' => 'Benin',         'value' => 'bj' ],
                        [ 'label' => 'Burkina Faso',  'value' => 'bf' ],
                        [ 'label' => 'Ghana',         'value' => 'gh' ],
                        [ 'label' => 'Nigeria',       'value' => 'ng' ],
                        [ 'label' => 'Kenya',         'value' => 'ke' ]
                    ];
                </code>
            </pre>
            </p>
            <p>
                This structure is all you need to render a BladewindUI dropdown. 
                The default array keys used to render the dropdown are <code class="inline text-red-500">label</code> and <code class="inline text-red-500">value</code>.
            </p>
            <p>
                <x-bladewind::dropdown name="country" data="{{json_encode($countries)}}" />
            </p>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="country"
                        data="&#123;&#123; json_encode($countries) }}" /&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <h3>Change Placeholder Text</h3>
            <p>
                <x-bladewind::dropdown name="country2" placeholder="What is your nationality" data="{{json_encode($countries)}}" />
            </p>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="country2"
                        placeholder="What is your nationality"
                        data="&#123;&#123; json_encode($countries) }}" /&gt;
                </code>
            </pre>
            <p>&nbsp</p>
            <p>
                Of course it is not feasible to always rewrite your arrays to use the <code class="inline">value</code> and <code class="inline">label</code> keys expected by the component. There is a solution. 
                Assuming we changed our array to the structure below.
            </p>
            <p>
            <pre class="language-js line-numbers">
                <code>
                &lt;?php
                    $countries = [
                        [ 'country' => 'Benin',         'code' => 'bj' ],
                        [ 'country' => 'Burkina Faso',  'code' => 'bf' ],
                        [ 'country' => 'Ghana',         'code' => 'gh' ],
                        [ 'country' => 'Nigeria',       'code' => 'ng' ],
                        [ 'country' => 'Kenya',         'code' => 'ke' ]
                    ];
                </code>
            </pre>
            </p>
            <p>
                We changed our array keys from <code class="inline">label</code> and <code class="inline">value</code> to <code class="inline">country</code> and <code class="inline">code</code>. To render the dropdown now, you just need to set the <code class="inline text-red-500">label_key</code> and <code class="inline text-red-500">value_key</code> attributes. 
                Using our array above we will end up with <code class="inline text-red-500">label_key="country"</code> and <code class="inline text-red-500">value_key="code"</code>.
            </p>
            <br/>
            <pre class="language-markup line-numbers" data-line="3,4">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="country"
                        label_key="country" 
                        value_key="code"
                        data="&#123;&#123; json_encode($countries) }}" /&gt;
                </code>
            </pre>
            <br />
            <p>
                Just for some perspective, what we are trying to mimick here is the html implementation of a <code class="inline text-red-500">select</code> form element.
            </p>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;select name="country"...&gt;
                        &lt;option value="gh"&gt;Ghana&lt;/option&gt;
                    &lt;/select&gt;
                </code><a name="flags"></a>
            </pre>
            <p>&nbsp;</p>
            <h2>With Country Flags</h2>
            <div class="h-2"></div>
            <p>
                This is just a simple way for users who are displaying list of countries to display flags next to each country name. 
                This implementation was ported from <a href="https://semantic-ui.com/elements/flag.html" target="_blank">Semantic UI library's flags</a> feature. 
                Flags are rendered using the country's ISO code. Example: Ghana has an ISO code of GH. Nigeria has an ISO code of NG. 
                You will need to specify the <code class="inline text-red-500">flag_key</code> attribute on the dropdown. This should be the name of the key in your array that has the country codes.
            </p>
            <p>
                Still working with our <code class="inline text-red-500">$countries</code> array from above, our dropdown code will now be
            </p>
            <link href="{{ asset('bladewind/css/flags.css') }}" rel="stylesheet" />
            <pre class="language-markup line-numbers" data-line="5">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="country"
                        label_key="country" 
                        value_key="code"
                        flag_key="code"
                        data="&#123;&#123; json_encode($countries) }}" /&gt;
                </code>
            </pre>
            <p>
                <x-bladewind::dropdown name="country3" data="{{json_encode($countries)}}" flag_key="value" />
            </p>
            <br />
            <x-bladewind::alert show_close_icon="false">
                For flags to work you will need to include the following stylesheet. It is deliberately not compiled into the core BladewindUI css because not everyone needs flags. 
                <code class="inline">&lt;link href="&#123;&#123; asset('bladewind/css/flags.css') }}" rel="stylesheet" /&gt;</code><a name="images"></a>
            </x-bladewind::alert>
            
            <p>&nbsp;</p><br />
            <h2>With Images</h2>
            <div class="h-2"></div>
            <p>
                You may wish to include images in your dropdown list. For example, your app allows you to assign tasks to employees. You may want your employee list to have the pictures of each person next to their name. 
                You will need to specify the <code class="inline text-red-500">image_key</code> attribute on the dropdown. This should be the name of the key in your array that has the image urls.
            </p>
            <p>
                Let us create a new array of employees with the needed information. 
            </p>
                        <p>
            <pre class="language-js line-numbers" data-line="7,12,17,22,27">
                <code>
                &lt;?php
                    $staff = 
                    [
                        [ 
                            'id' => '1001',   
                            'name' => 'Adam Nsiah',             
                            'picture' => '/path/to/the/image/file' 
                        ],
                        [ 
                            'id' => '1005',   
                            'name' => 'Alfred Rowe', 
                            'picture' => '/path/to/the/image/file' 
                        ],
                        [ 
                            'id' => '1002',   
                            'name' => 'Abdul Razak Ibrahim',    
                            'picture' => '/path/to/the/image/file' 
                        ],
                        [ 
                            'id' => '1003',   
                            'name' => 'Michael K. Ocansey',     
                            'picture' => '/path/to/the/image/file' 
                        ],
                        [
                            'id' => '1004',
                            'name' => 'Michael Sarpong',            
                            'picture' => '/path/to/the/image/file' 
                        ],
                    ]
                </code>
            </pre>
            </p>
            <pre class="language-markup line-numbers" data-line="5">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="staff"
                        label_key="name" 
                        value_key="id"
                        image_key="picture"
                        data="&#123;&#123; json_encode($staff) }}" /&gt;
                </code>
            </pre>
            <p>
                <x-bladewind::dropdown 
                    name="staff" 
                    data="{{json_encode($staff)}}" 
                    label_key="name" 
                    value_key="id"
                    image_key="picture" />
            </p>
            <a name="searchable"></a>
            <br />
            <p>&nbsp;</p>
            <h2>Searchable Dropdown</h2>
            <div class="h-2"></div>
            <p>
                Assuming we had a very long list of items in our dropdown, say all countries of the world, or list of employees, it will be tedious to scroll down the list to find what you are looking for.
                The BladewindUI dropdown has an attribute that makes the component searchable. 
                <code class="inline text-red-500">searchable="true"</code>. By default this is turned off.
            </p>
            <p>
                Let's now increase our list of countries from five to ten. The new array will be
            </p>
            <p>
                @php
                    $countries = [
                        [ 'label' => 'Benin', 'value' => 'bj', 'url' => 'https://en.wikipedia.org/wiki/Benin' ],
                        [ 'label' => 'Burkina Faso', 'value' => 'bf', 'url' => 'https://en.wikipedia.org/wiki/Burkina_Faso' ],
                        [ 'label' => 'Cameroon', 'value' => 'cm', 'url' => 'https://en.wikipedia.org/wiki/Cameroon' ],
                        [ 'label' => 'Congo', 'value' => 'cd', 'url' => 'https://en.wikipedia.org/wiki/Congo' ],
                        [ 'label' => 'Gambia', 'value' => 'gm', 'url' => 'https://en.wikipedia.org/wiki/Gambia' ],
                        [ 'label' => 'Ghana', 'value' => 'gh', 'url' => 'https://en.wikipedia.org/wiki/Ghana' ],
                        [ 'label' => 'Ivory Coast', 'value' => 'ci', 'url' => 'https://en.wikipedia.org/wiki/Ivory_Coast' ],
                        [ 'label' => 'Nigeria', 'value' => 'ng', 'url' => '#basic' ],
                        [ 'label' => 'Kenya', 'value' => 'ke', 'url' => 'https://en.wikipedia.org/wiki/Kenya' ],
                        [ 'label' => 'Togo', 'value' => 'tg', 'url' => 'https://en.wikipedia.org/wiki/Togo' ],
                    ];
                @endphp
            <pre class="language-js line-numbers">
                <code>
                &lt;?php
                    $countries = [
                        [ 'country' => 'Benin',         'code' => 'bj' ],
                        [ 'country' => 'Burkina Faso',  'code' => 'bf' ],
                        [ 'country' => 'Cameroon',      'code' => 'cm' ],
                        [ 'country' => 'Congo',         'code' => 'cd' ],
                        [ 'country' => 'Gambia',        'code' => 'gm' ],
                        [ 'country' => 'Ghana',         'code' => 'gh' ],
                        [ 'country' => 'Ivory Coast',   'code' => 'ci' ],
                        [ 'country' => 'Nigeria',       'code' => 'ng' ],
                        [ 'country' => 'Kenya',         'code' => 'ke' ]
                        [ 'country' => 'Togo',          'code' => 'tg' ],
                    ];
                </code>
            </pre>
            </p>

            <p>
                <x-bladewind::dropdown name="country4" searchable="true" data="{{json_encode($countries)}}" flag_key="value" />
            </p>
            
            
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind.dropdown
                         name="country4" 
                         searchable="true" 
                         label_key="country" 
                         value_key="code" 
                         flag_key="code" 
                         data="&#123;&#123; json_encode($countries)}}" /&gt;
                </code>
            </pre>
            
            <a name="onselect"></a>
            <br/>
            <p>&nbsp;</p>
            <a name="stacked"><h2>Onselect Action</h2></a>
            <p>
            Every BladewindUI dropdown component you display creates as part of the dropdown html the following hidden form field 
            <code class="inline text-red-500">&lt;input type="hidden" name="the-input-name-you-provide" /&gt;</code>. When you select an item from the dropdown, the hidden input field is updated with the value of what you selected. The value will be whatever you specified as your <code class="inline">value_key</code>. When you submit a form that has any BladewindUI dropdown, you can access the value of the dropdown by specifying the name you used on the dropdown. Consider the example below. 
            </p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;form ...&gt;
                        ...
                        &lt;x-bladewind.dropdown name="country" ... /&gt;
                        &lt;/form&gt;
                    </code>
                </pre>
            </p>
            <p>
            After submitting the form the value of the country dropdown can be accessed using any of the following regular ways Laravel allows you to access data from the request class. 
            </p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        $request->get('country');
                        $request->input('country');
                        $request->country;
                    </code>
                </pre>
            </p>
            <br />
            <p><h3>Redirecting to URLs</h3></p>
            <p>As stated earlier on in this document, the BladewindUI dropdown component is killing two birds with one code. You may not always need the dropdown for collecting user input. You could use the dropdown as a menu or navigation. In this case you will want the user to be sent to a url when a dropdown item is selected. To achieve this you will need to specify the <code class="inline text-red-500">url_key</code> attribute. This key will need to exist in your data array. When a dropdown item is selected, the url specified for that item will be called. By default urls that point within your app will open in the same browser window. External links will open in a new window. </p>
            <p>Our <code class="inline text-red-500">$countries</code> array has been updated with urls to the Wikipedia pages for each country. We then set the <code class="inline text-red-500">url_key</code> attribute on the dropdown. This has automatically turned our dropdown component into a menu and not form <code class="inline">&lt;select&gt;</code>. </p>
            <p>
                <pre class="language-js line-numbers" data-line="6,11,16,21,26,31,36,41,46,51">
                    <code>
                    &lt;?php
                        $countries = [
                            [ 
                                'country' => 'Benin',         
                                'code' => 'bj',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Burkina Faso',  
                                'code' => 'bf',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Cameroon',      
                                'code' => 'cm',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Congo',         
                                'code' => 'cd',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Gambia',        
                                'code' => 'gm',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Ghana',         
                                'code' => 'gh',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Ivory Coast',   
                                'code' => 'ci',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Nigeria',       
                                'code' => 'ng',     
                                'url' => '#basic' 
                            ],
                            [ 
                                'country' => 'Kenya',         
                                'code' => 'ke',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                            [ 
                                'country' => 'Togo',          
                                'code' => 'tg',     
                                'url' => 'https://url-to-wikipedia-page' 
                            ],
                        ];
                    </code>
                </pre>
            </p>
            <p><x-bladewind::dropdown name="country5" data="{{ json_encode($countries) }}" flag_key="value" url_key="url" /></p>
            <p>
                <pre class="language-markup line-numbers" data-line="4">
                    <code>
                        &lt;x-bladewind.dropdown
                            name="country5" 
                            data="&#123;{ json_encode($countries) }}"
                            url_key="url" 
                            flag_key="value" /&gt;
                    </code>
                </pre>
            </p>
            <br />
            <p>
                <h3>Appending Selected Value to URL</h3>
            </p>
            <p>
                You can also append the value that was selected by the user to the URL when using the dropdown as a menu by setting <code class="inline text-red-500">append_value_to_url="true"</code>. By default this is turned off.
            </p>
            <a name="submittable"></a>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind.dropdown
                        ...
                        append_value_to_url="true" /&gt;
                </code>
            </pre>
            <p><x-bladewind::dropdown name="country6" data="{{ json_encode($countries) }}" flag_key="value" url_key="url" append_value_to_url="true" /></p>
            <p>
                If you select a country, say Ghana, from the dropdown above you will notice it appends <code class="inline text-red-500">value=gh</code> in the URL. 
                By default we use the key <code class="inline text-red-500">value</code>. To change this to your preferred key, set the attribute <code class="inline text-red-500">append_value_to_url_as</code>.
            </p>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.dropdown
                        ...
                        append_value_to_url="true"
                        append_value_to_url_as="code" /&gt;
                </code>
            </pre>
            <p><x-bladewind::dropdown name="country7" data="{{ json_encode($countries) }}" flag_key="value" url_key="url" append_value_to_url="true" append_value_to_url_as="code" /></p>
<a name="attributes"></a>
            <p>
                Selecting any country from the dropdown above, say Ghana, will now pass <code class="inline text-red-500">code=gh</code> in the URL. 
            </p>
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Dropdown component.</p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>bw-dropdown</td>
                    <td>This name is assigned to the hidden input created for the dropdown. The name is then accessed when the dropdown is submitted in a form.</td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>Select One</td>
                    <td>Default text displayed on the dropdown</td>
                </tr>
                <tr>
                    <td>onselect</td>
                    <td><em>blank</em></td>
                    <td>Custom function to call when an item in the dropdown is selected. <b>This should just be the name of the custom function, without parenthesis</b>. For example <code class="inline text-red-500">assignToProject</code>. 
                    The component appends the selected <em>value</em> and <em>label</em> to the function call as <code class="inline text-red-500">assignToProject(value, label)</code></td>
                </tr>
                <tr>
                    <td>data</td>
                    <td>[]</td>
                    <td>This should be a json encoded array. See above examples. <code class="inline text-red-500">json_encode($your_array)</code>.</td>
                </tr>
                <tr>
                    <td>value_key</td>
                    <td>value</td>
                    <td>Which key in your array should the dropdown pick its values from.</td>
                </tr>
                <tr>
                    <td>label_key</td>
                    <td>label</td>
                    <td>Which key in your array should the dropdown pick its values from.</td>
                </tr>
                <tr>
                    <td>flag_key</td>
                    <td><em>blank</em></td>
                    <td>When using the dropdown with flags, which key in your array should the dropdown pick the country ISO codes from. Flags are only rendered using the countries ISO codes.</td>
                </tr>
                <tr>
                    <td>image_key</td>
                    <td><em>blank</em></td>
                    <td>When using the dropdown with images, which key in your array should the dropdown pick its images from.</td>
                </tr>
                <tr>
                    <td>url_key</td>
                    <td><em>blank</em></td>
                    <td>When using the dropdown as a menu, which key in your array should the dropdown pick the URLs from. Internal URLs will open in the same browser window. External URLs will open in a new window.</td>
                </tr>
                <tr>
                    <td>append_value_to_url</td>
                    <td>false</td>
                    <td>When using the dropdown as a menu you can opt to append selected values to the URL. This is turned off by default. <br /><code class="inline">true</code> <code class="inline">false</code>.</td>
                </tr>
                <tr>
                    <td>append_value_to_url_as</td>
                    <td>value</td>
                    <td>When <code class="inline text-red-500">append_value_to_url="true"</code>, selected values are appended to the URL by default as <code class="inline text-red-500">value=value</code>. 
                    To append selected values to the URL as a different variable name, set <code class="inline text-red-500">append_value_to_url_as</code> to any string with no spaces.</td>
                </tr>
                <tr>
                    <td>data_serialize_as</td>
                    <td><em>blank</em></td>
                    <td>This is better explained with an example. In a form your dropdown has <code class="inline text-red-500">name="country"</code>. When the form is submitted the dropdown's value can be accessed as <code class="inline text-red-500">$request->country</code>. 
                    If for some reason you want your dropdown to have its name but pass its value with a different name, set <code class="inline text-red-500">data_serialize_as</code>. Picking up on the example, if we set, <code class="inline text-red-500">data_serialize_as="country_name"</code>, when the form is submitted 
                    we can access the value of the dropdown as <code class="inline text-red-500">$request->country_name</code>.
                    </td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>false</td>
                    <td>Determines if an asterisk should be appended to the placeholder text to indicate the field is required. <br > <code class="inline">true</code> <code class="inline">false</code>.</td>
                </tr>
                <tr>
                    <td>selected_value</td>
                    <td><em>blank</em></td>
                    <td>Determines which value from the array should be selected by default when the dropdown loads. Useful when editing content. If you want an item in your array whose value=13 to be selected, set <code class="inline text-red-500">selected_value="13"</code>.</td>
                </tr>
                <tr>
                    <td>searchable</td>
                    <td>false</td>
                    <td>Makes the dropdown either searchable or not. A search box is placed above the dropdown items when set to <code class="inline">true</code>. <br /><code class="inline">true</code> <code class="inline">false</code>.</td>
                </tr>
                <tr>
                    <td>show_filter_icon</td>
                    <td>false</td>
                    <td>This is just a nifty addition that prepends a filter icon to the placeholder text when set to <code>true</code>.<br /> <code class="inline">true</code> <code class="inline">false</code>.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Dropdown with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.dropdown 
                        name="country"
                        placeholder="What is your nationality"
                        onselect="confirmSelection"
                        data="&#123;&#123; json_encode($countries)}} "
                        value_key="code"
                        label_key="country"
                        flag_key="code"
                        image_key=""
                        url_key=""
                        append_value_to_url=""
                        append_value_to_url_as=""
                        data_serialize_as="country_id"
                        required="true"
                        selected_value="1001"
                        searchable="true"
                        show_filter_icon="false" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/dropdown.blade.php</code>
            </x-bladewind::alert> <br />
            <x-bladewind::alert show_close_icon="false">
                The javascript source file for this component is available in <code class="inline">public/bladewind/assets/js/dropdown.js</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#basic">Basic dropdown</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#flags">With country flags</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#images">With images</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#searchable">Searchable dropdown</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#onselect">Onselect action</a></div>
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