<x-app>
    <x-slot name="title">Timepicker Component</x-slot>
    <h1 class="page-title">Timepicker</h1>
            <p>
                Display a timepicker.
            </p>
            <x-bladewind::timepicker name="event_time"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker  /&gt;
                </code>
            </pre>
            <h3>Time Formats</h3>
            <p>
                By default the timepicker displays time in the 12 hour format. This format has hours from 1 to 12 and an AM/PM suffix.
                To change this to a 24 hour format, set <code class="inline text-red-500">format="24"</code>. The 24 hour time format gets rid
                of AM/PM suffix and displays the hours from 01 to 00. Note how the hours in 24 hour format are double digits.
            </p>

            <x-bladewind::timepicker format="24" />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker format="24"  /&gt;
                </code>
            </pre>
            <h3>Required Fields</h3>
            <p>An asterisk is appended to the placeholder text when <code class="inline text-red-500">required="true"</code>.</p>
            <x-bladewind::timepicker required="true"  />

            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker required="true"  /&gt;
                </code>
            </pre>

            <h3>Default Values</h3>
            <p>
                There are times you will want the timepicker to be prepopulated with a default time. This is useful when in edit mode.
                To achieve this, set the <code class="text-red-500 inline">selected</code> attribute to the time you will like to display.
                The format of the time you set will depend on the <code class="text-red-500 inline">format</code> defined on the timepicker.
            </p>
            <x-bladewind::timepicker selected="3:25pm"  />
            <x-bladewind::timepicker required="true" selected="3:25pm"  />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker selected="3:25pm"  /&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker required="true" selected="3:25pm"  /&gt;
                </code>
            </pre>
            <br />
            <x-bladewind::timepicker format="24" selected="03:25"  />
            <x-bladewind::timepicker required="true" format="24" selected="03:25"  />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker format="24" selected="03:25"  /&gt;
                </code>
            </pre>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::timepicker required="true" format="24" selected="03:25"  /&gt;
                </code>
            </pre>

        <h3>Form Values</h3>
    <p>
        Typically in a form, you should specify a name for your timepicker component. A default random name is generated if no name is specified.
        The component is split into three form fields when using the 12 hour format and two form fields when using the 24 hour format. Let's assume in our
        form the timepicker is named <code class="inline">event_time</code>. A hidden input is created with the name specified. In this case
        <code class="inline">event_time</code>.
    </p>
    <p>
        When your form is submitted, you will be able to retrieve the time as shown below.
    </p>
    <pre class="language-php line-numbers">
        <code>
            // if format="12" (default)
            $request->event_time; // outputs 1:25PM

            // if format="24"
            $request->event_time; // outputs 01:25
        </code>
    </pre>

            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the timepicker component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>bw-timepicker</td>
                    <td>This name can be accessed when the input is submitted in the form.</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>12</td>
                    <td>The format time should be displayed in. <code class="inline">12</code> <code class="inline">24</code></td>
                </tr>
                <tr>
                    <td>selected</td>
                    <td><em>blank</em></td>
                    <td>In edit mode, the value passed will be set as the default time.</td>
                </tr>
                <tr>
                    <td>hour_label</td>
                    <td>HH</td>
                    <td>Label to display for the hour dropdown.</td>
                </tr>
                <tr>
                    <td>minute_label</td>
                    <td>MM</td>
                    <td>Label to display for the minute dropdown.</td>
                </tr>
                <tr>
                    <td>format_label</td>
                    <td>--</td>
                    <td>Label to display for the format dropdown.</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>false</td>
                    <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Timepicker with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.timepicker
                        name="start_time"
                        format="24"
                        required="false"
                        hour_label="hh"
                        minute_label="mm"
                        format_label="AM/PM"
                        selected="12:35AM" /&gt;
                </code>
            </pre>

    <p>&nbsp;</p>
    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > timepicker.blade.php</code>
    </x-bladewind::alert><br/>
    <x-bladewind::alert show_close_icon="false">
        The source language (translation) files for this component are available in <code class="inline">lang/[lang]/timepicker.php</code>
    </x-bladewind::alert><br />
    <p>&nbsp;</p>
    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-theme-switcher');
        </script>
    </x-slot>
</x-app>
