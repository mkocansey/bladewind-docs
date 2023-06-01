<x-app>
    <x-slot:title>Table Component</x-slot:title>
    <x-slot:page_title>Table</x-slot:page_title>

    <p>Display tabular data beautifully in a simple way. </p>
    <p>This component like all other BladewindUI components is simple to use with a few options to customise the component to suit your app needs. A BladewindUI table consists of two parts. The table header and the table body. </p>
    <p>
        <x-bladewind::table>
            <x-slot name="header">
                <th>Name</th>
                <th>Department</th>
                <th>Email</th>
            </x-slot>
            <tr>
                <td>Alfred Rowe</td>
                <td>Outsourcing</td>
                <td>
                    alfred@therowe.com
                </td>
            </tr>
            <tr>
                <td>Michael K. Ocansey</td>
                <td>Tech</td>
                <td>
                    kabutey@gmail.com
                </td>
            </tr>
        </x-bladewind::table>
    </p>

    <pre class="language-markup line-numbers">
        <code>
             &lt;x-bladewind.table&gt;
                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    &lt;th&gt;Department&lt;/th&gt;
                    &lt;th&gt;Email&lt;/th&gt;
                &lt;/x-slot&gt;
                &lt;tr&gt;
                    &lt;td&gt;Alfred Rowe&lt;/td&gt;
                    &lt;td&gt;Outsourcing&lt;/td&gt;
                    &lt;td&gt;alfred@therowe.com&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;Michael K. Ocansey&lt;/td&gt;
                    &lt;td&gt;Tech&lt;/td&gt;
                    &lt;td&gt;kabutey@gmail.com&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="nogaps">No Gaps</h2>
    <p>By default the BladewindUI table  rows are displayed with wide gaps to place more emphasis on each row and it’s content. Each row also has a default hover effect that highlights the left and right borders of the row. These can both be turned off. </p>
    <p>To remove the wide gaps between the table rows you need to set the divider attribute to thin, like this, <code class="inline text-red-500">divider="thin"</code>. </p>

    <x-bladewind::table divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
             &lt;x-bladewind.table
                divider="thin"&gt;
                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="nodivider">No Divider</h2>
    <p>It is also possible to completely turn off the divider lines.</p>
    <p>To remove the divider completely, set the divided attribute to false, like this, <code class="inline text-red-500">divided="false"</code>. </p>
    <p>
    <x-bladewind::table divided="false">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
             &lt;x-bladewind.table
                divided="false"&gt;
                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="nohover">No Hover Effect</h2>
    <p>To remove the beautiful green side border effect when users hover on each row, set the hover attribute to false, like this, <code class="inline text-red-500">hover_effect="false"</code>. </p>
    <x-bladewind::table hover_effect="false" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
                &lt;x-bladewind.table
                    hover_effect="false"
                    divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>
    <h2 id="striped">Striped Table</h2>
    <p>Design experts argue that it is sometimes easier for users to visually scan tabular data if the table has striped rows. We are not challenging the experts. We’ve however made it possible for you to make your BladewindUI tables have striped rows. Set <code class="inline text-red-500">striped="true"</code> on the table component  to get a striped table. </p>

    <x-bladewind::table striped="true" divider="thin">
        <x-slot name="header">
            <th>Name</th>
            <th>Department</th>
            <th>Email</th>
        </x-slot>
        <tr>
            <td>Alfred Rowe</td>
            <td>Outsourcing</td>
            <td>
                alfred@therowe.com
            </td>
        </tr>
        <tr>
            <td>Arsone Gandote</td>
            <td>Outsourcing</td>
            <td>
                arson@outsourcing.com
            </td>
        </tr>
        <tr>
            <td>Michael K. Ocansey</td>
            <td>Tech</td>
            <td>
                kabutey@gmail.com
            </td>
        </tr>
        <tr>
            <td>Michel Lellatom</td>
            <td>Animations</td>
            <td>
                wecolossal@gmail.com
            </td>
        </tr>
        <tr>
            <td>Nora Abena Dankwa</td>
            <td>Animations</td>
            <td>
                norabenashine@gmail.com
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.table
                striped="true"
                divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="totals">Cells for Totals</h2>
    <p>Accountants have this interesting habit of double underlining their totals. If that’s something that interests you, apply the class <code class="inline">double-underline</code> to the <code class="inline">td</code> that holds the total value you want double underlined. </p>

    <x-bladewind::table striped="true" divider="thin">
        <x-slot name="header">
            <th>Item</th>
            <th class="text-center">Quantity</th>
            <th class="text-right">Price (GHS)</th>
        </x-slot>
        <tr>
            <td>Office furniture</td>
            <td class="text-center">2</td>
            <td class="text-right">4,300.00</td>
        </tr>
        <tr>
            <td>HP Laser Jet Printer</td>
            <td class="text-center">1</td>
            <td class="text-right">3,000.00</td>
        </tr>
        <tr>
            <td colspan="2" class="text-right"></td>
            <td class="double-underline text-right">
                7,300.00
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="10">
        <code>
            &lt;x-bladewind.table striped="true" divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
                &lt;tr&gt;
                    &lt;td colspan="2" class="text-right"&gt;&lt;/td&gt;
                    &lt;td class="double-underline text-right"&gt;
                        7,300.00
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="shadow">Table With Drop Shadow</h2>
    <p>You can add a subtle shadow effect to your BladewindUI tables by setting <code class="inline text-red-500">has_shadow="true"</code>. </p>

    <x-bladewind::table striped="true" divider="thin" has_shadow="true">
        <x-slot name="header">
            <th>Item</th>
            <th class="text-center">Quantity</th>
            <th class="text-right">Price (GHS)</th>
        </x-slot>
        <tr>
            <td>Office furniture</td>
            <td class="text-center">2</td>
            <td class="text-right">4,300.00</td>
        </tr>
        <tr>
            <td>HP Laser Jet Printer</td>
            <td class="text-center">1</td>
            <td class="text-right">3,000.00</td>
        </tr>
        <tr>
            <td colspan="2" class="text-right"></td>
            <td class="text-right">
                7,300.00
            </td>
        </tr>
    </x-bladewind::table>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.table
                has_shadow="true"
                striped="true"
                divider="thin"&gt;

                &lt;x-slot name="header"&gt;
                    &lt;th&gt;Name&lt;/th&gt;
                    ...
                &lt;/x-slot&gt;
                ...
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Table component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>striped</td>
            <td>false</td>
            <td>Determines if the table rows are striped. Even rows get the stripes. The value should be passed as a string, not boolean. <br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>divided</td>
            <td>true</td>
            <td>
                Determines if the table rows show the lines that divide them. The value should be passed as a string, not boolean. <br /><code class="inline">true</code> <code class="inline">false</code>
            </td>
        </tr>
        <tr>
            <td>divider</td>
            <td>regular</td>
            <td>Determines how wide the gaps are between table rows. <br /><code class="inline">regular</code> <code class="inline">thin</code></td>
        </tr>
        <tr>
            <td>hover_effect</td>
            <td>false</td>
            <td>Determines if the borders of the table rows light up when hovered over. The value should be passed as a string, not boolean.<br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>has_shadow</td>
            <td>true</td>
            <td>Determines if the table has a drop shadow effect. The value should be passed as a string, not boolean.<br /> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>compact</td>
            <td>false</td>
            <td>If set to true, the spacing between the TRs are reduced.<br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>header</td>
            <td><em>blank</em></td>
            <td>This slot holds your table header information.</td>
        </tr>
    </x-bladewind::table>

    <h3>Table with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.table
                striped="true"
                divided="true"
                divider="thin"
                has_shadow="true"
                compact="true"
                hover_effect="true"&gt;

                &lt;x-slot name="header"&gt;
                    ...
                &lt/x-slot&gt;

                &lt;tr&gt;
                ...
                &lt;/tr&gt;

            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > table.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#nogaps">No Gaps</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#nodivider">No divider</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#nohover">No hover effect</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#striped">Striped table</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#totals">Cells for totals</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#shadow">With drop shadow</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-table');
        </script>
    </x-slot>
</x-app>
