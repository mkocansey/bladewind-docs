<x-app>
    <x-slot name="title">Checkbox Component</x-slot>
    <h1 class="page-title">Checkbox</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Display a checkbox with or without a label 
            </p>
            
            <x-bladewind::checkbox  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.checkbox  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            
            <x-bladewind::checkbox label="I agree to the terms and conditions"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.checkbox 
                        label="I agree to the terms and conditions"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-bladewind::checkbox label="I agree to the &nbsp;<a href='/terms'>terms and conditions</a>"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.checkbox 
                        label="I agree to the &lt;a href='/terms'&gt;terms and conditions&lt;/a&gt;"  /&gt;
                </code>
            </pre>

            <div class="py-2"></div><br/>
            <x-bladewind::checkbox label="I am checked by default" checked="true"  />
            <br/><br/>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    <code>
                    &lt;x-bladewind.checkbox 
                        label="I am checked by default"
                        checked="true"  /&gt;
                </code>
                </code>
            </pre>

            <div class="py-2"></div><br/>
            <x-bladewind::checkbox label="I am disabled" disabled="true"  /> &nbsp;&nbsp;
            <x-bladewind::checkbox label="I am checked and disabled" disabled="true" checked="true"  />
            <br/><br/>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    <code>
                    &lt;x-bladewind.checkbox 
                        label="I am disabled"
                        disabled="true"  /&gt;
                </code>
                </code>
            </pre>
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Checkbox component.</p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>checkbox</td>
                    <td>This name can be accessed when the checkbox is submitted in the form. The name is also available as part of the css classes.</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td><em>blank</em></td>
                    <td>Text to be displayed next to the checkbox.</td>
                </tr>
                <tr>
                    <td>value</td>
                    <td><em>blank</em></td>
                    <td>In case you are editing a form, the value passed will be set on the value attribute of the checkbox. 
                    <code class="inline text-red-500">&lt;input type="checkbox" <b>value=""</b> ../&gt;</code></td>
                </tr>
                <tr>
                    <td>checked</td>
                    <td>false</td>
                    <td>Determines if the checkbox is checked or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>false</td>
                    <td>Determines if the checkbox is disabled or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>css</td>
                    <td>bw-checkbox</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Checkbox with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.checkbox 
                        label="I agree to the terms and conditions" 
                        checked="false"
                        disabled="false"
                        name="tnc"
                        value="yes"
                        css="shadow-sm" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/checkbox.blade.php</code>
            </x-bladewind::alert>
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
            selectNavigationItem('.component-checkbox');
        </script>
    </x-slot>
</x-app>