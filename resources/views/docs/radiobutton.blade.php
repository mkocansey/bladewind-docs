<x-app>
    <x-slot name="title">Radio Button Component</x-slot>
    <h1 class="page-title">Radio Button</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Display a radio button with or without a label 
            </p>
            
            <x-bladewind.radio-button name="tnc"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.radio-button name="tnc"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <h3>What kind of movies do you like?</h3><br/>
            <x-bladewind.radio-button label="Action" name="genre"  />
            <x-bladewind.radio-button label="Comedy" name="genre"  />
            <x-bladewind.radio-button label="Drama" name="genre"  />
            <x-bladewind.radio-button label="Thriller" name="genre" />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.radio-button label="Action" name="genre"  /&gt;
                    &lt;x-bladewind.radio-button label="Comedy" name="genre"  /&gt;
                    &lt;x-bladewind.radio-button label="Drama" name="genre"  /&gt;
                    &lt;x-bladewind.radio-button label="Thriller" name="genre" /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />

            <div class="py-2"></div><br/>
            <x-bladewind.radio-button label="I am checked by default" checked="true" name="check_me"  />
            <br/><br/>
            <pre class="language-markup line-numbers">
                <code>
                    <code>
                    &lt;x-bladewind.radio-button 
                        label="I am checked by default"
                        checked="true"
                        name="check_me"  /&gt;
                </code>
                </code>
            </pre>

            <div class="py-2"></div><br/>
            <x-bladewind.radio-button label="I am disabled" disabled="true"  /> &nbsp;&nbsp;
            <x-bladewind.radio-button label="I am checked and disabled" disabled="true" checked="true"  />
            <br/><br/>
            <pre class="language-markup line-numbers">
                <code>
                    <code>
                    &lt;x-bladewind.radio-button 
                        label="I am disabled"
                        disabled="true"  /&gt;
                </code>
                </code>
            </pre>
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Radio Button component.</p>
            <x-bladewind.table striped="true">
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
                    <td>css</td>
                    <td>bw-radio button</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Radio button with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.radio-button 
                        label="I agree to the terms and conditions" 
                        checked="false"
                        disabled="false"
                        name="tnc"
                        value="yes"
                        css="shadow-sm" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/radio-button.blade.php</code>
            </x-bladewind.alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-radio-button');
        </script>
    </x-slot>
</x-app>