<x-app>
    <x-slot name="title">Datepicker Component</x-slot>
    <h1 class="page-title">Datepicker</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Display a calendar so user can select a date. The calendar component is locale friendly. Months and days are translated.
            </p>
            <p>
                <x-bladewind::alert show_close_icon="false" type="info">
                    This component builds on the code by <a href="https://tailwindcomponents.com/u/mithicher" target="_blank">mithicher</a> available <a href="https://tailwindcomponents.com/component/datepicker-with-tailwindcss-and-alpinejs" target="_blank">here</a>
                </x-bladewind::alert>
            </p>
            
            <x-bladewind::datepicker  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker  /&gt;
                </code>
            </pre>
            <br/>
            <p>
                By default the datepicker fills up the width of its parent container. You can however specify a width of your choice using the datepicker's <code class="inline">css</code> attribute.
            </p>
            <p>You can also change the placeholder text from the default <code>Select a date</code>.</p>
            <div class="w-40">
                <x-bladewind::datepicker placeholder="Invoice Date" has_label="true"  />
            </div>
            <div class="py-2"></div>            
            <pre class="language-markup line-numbers" line-number="2">
                <code>
                    &lt;div class="w-40"&gt;
                        &lt;x-bladewind.datepicker placeholder="Invoice Date"  /&gt;
                    &lt;/div&gt;
                </code><a name="range"></a>
            </pre>
            <div class="pb-10"></div>
            
            <h2 class="pb-2 ">Range Datepicker</h2>
            <p>
                This range datepicker isn't your typical date range selection. This option simply saves you from manually embedding the datepicker two times. 
                Specifying <code class="inline text-red-500">type="range"</code> will create two separate datepicker boxes for start and end dates.
            </p>
            <x-bladewind::datepicker type="range"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker type="range"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <p>
                The default placeholder texts for the range datepicker are <b>From</b> and <b>To</b>. These can however, be modified using the <code class="inline text-red-500">date_from_label</code> and <code class="inline text-red-500">date_to_label</code> attributes. These attributes only work if <code class="inline text-red-500">type="range"</code>.
            </p>
            <x-bladewind::datepicker type="range" date_from_label="start date" date_to_label="end date"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker 
                        type="range" 
                        date_from_label="start date" 
                        date_to_label="end date" /&gt;
                </code>
            </pre>

            <div class="pb-10"></div>
            
            <h3 class="pb-2 ">Show As a Required Field</h3>
            <p>An asterisk is appended to the placeholder text when <code class="inline text-red-500">required="true"</code>.</p>
            <x-bladewind::datepicker css="!w-44" required="true"  />
            
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker required="true"  /&gt;
                </code><a name="defaults"></a>
            </pre>
            <br />
            <div class="pb-10"></div>
            
            <h2 class="pb-2 ">With Default Values</h2>
            <p>
                There are times you will want the datepicker to load prepopulated with a default value. This is useful when in edit mode or when using filters and you want to show the user what dates they filtered by.
            </p>
            <x-bladewind::datepicker css="!w-44" default_date="2021-12-03"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker default_date="2021-12-03"  /&gt;
                </code>
            </pre>
            <br />
            <p>
                It is possible to have default dates for a range datepicker also.
            </p>
            <x-bladewind::datepicker type="range" default_date_from="2021-12-03" default_date_to="2022-01-03"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker 
                        type="range" 
                        default_date_from="2021-12-03" 
                        default_date_to="2022-01-03"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Datepicker component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>bw-datepicker</td>
                    <td>This name can be accessed when the input is submitted in the form. The name is also available as part of the css classes.</td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>single</td>
                    <td><code class="inline">single</code> <code class="inline">range</code></td>
                </tr>
                <tr>
                    <td>default_date</td>
                    <td><em>blank</em></td>
                    <td>In case you are editing a form, the value passed will be set on the value attribute of the datepicker input. 
                    <code class="inline text-red-500">&lt;input type="text" <b>value=""</b> ../&gt;</code></td>
                </tr>
                <tr>
                    <td>default_date_from</td>
                    <td><em>blank</em></td>
                    <td>Default date to set for the <em>From</em> date when using the range datepicker.</td>
                </tr>
                <tr>
                    <td>default_date_to</td>
                    <td><em>blank</em></td>
                    <td>Default date to set for the <em>To</em> date when using the range datepicker.</td>
                </tr>
                <tr>
                    <td>date_from_label</td>
                    <td>From</td>
                    <td>Placeholder text to display for the <code>From</code> date. Applicable only to range datepickers.</td>
                </tr>
                <tr>
                    <td>date_to_label</td>
                    <td>To</td>
                    <td>Placeholder text to display for the <code>To</code> date. Applicable only to range datepickers.</td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>Select a date</td>
                    <td>Placeholder text to display</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>false</td>
                    <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>bw-datepicker</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Datepicker with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.datepicker 
                        name="invoice_date"
                        type="single"
                        required="false"
                        placeholder="Invoice Date" 
                        date_from=""
                        date_to=""
                        default_date=""
                        class="shadow-sm" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > datepicker.blade.php</code>
            </x-bladewind::alert><br/>
            <x-bladewind::alert show_close_icon="false">
                The source language (translation) files for this component are available in <code class="inline">lang/en/datepicker.php</code>, <code class="inline">lang/fr/datepicker.php</code> and <code class="inline">lang/it/datepicker.php</code>
            </x-bladewind::alert><br />
            <x-bladewind::alert show_close_icon="false">
                The source javascript file for this component is available in <code class="inline">public/bladewind/js/datepicker.js</code>
            </x-bladewind::alert><br />
            <x-bladewind::alert show_close_icon="false">
                This component includes AlpineJs from <code class="inline">https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#range">Range datepicker</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#defaults">With default values</a></div>
                    <div class="flex items-center hidden"><div class="dot"></div><a href="#timepicker">With Timepicker</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        {{-- <script src="{{ asset('bladewind/js/datepicker.js') }}"></script> --}}
        <script>
            selectNavigationItem('.component-datepicker');
        </script>
    </x-slot>
</x-app>