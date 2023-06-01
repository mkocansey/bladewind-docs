<x-app>
    <x-slot:title>Dropmenu Component</x-slot:title>
    <x-slot:page_title>Dropmenu</x-slot:page_title>

    <p>
        This <a href="/component/dropdown">Dropdown component</a> can still do what this component is intended to achieve. A dropmenu for quickly performing page actions.
        These actions could be navigating other portions of a page, filtering content on dashboards or quickly performing actions like edits, deletes.
        The main difference between this and the BladewindUI <a href="/component/dropdown">Dropdown</a> component is aesthetics and maybe simplicity.
    </p>

    <x-bladewind::table hover_effect="false" divider="thin">
        <tr>
            <td>John C. Doe</td>
            <td>john@doe.com</td>
            <td>Sales</td>
            <td>
                <x-bladewind::dropmenu>
                    <x-bladewind::dropmenu-item>Edit </x-bladewind::dropmenu-item>
                    <x-bladewind::dropmenu-item>Invite John to Marketing</x-bladewind::dropmenu-item>
                </x-bladewind::dropmenu>
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="8,9,12">
        <code>
            &lt;x-bladewind.table hover_effect="false" divider="thin"&gt;
                &lt;tr&gt;
                    &lt;td&gt;John C. Doe&lt;/td&gt;
                    &lt;td&gt;john@doe.com&lt;/td&gt;
                    &lt;td&gt;Sales&lt;/td&gt;
                    &lt;td&gt;

                        &lt;x-bladewind.dropmenu&gt;
                            &lt;x-bladewind.dropmenu-item&gt;
                                Edit
                            &lt;/x-bladewind.dropmenu-item&gt;
                            &lt;x-bladewind.dropmenu-item&gt;
                                Invite John to Marketing
                            &lt;/x-bladewind.dropmenu-item&gt;
                        &lt;/x-bladewind.dropmenu&gt;

                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <p>
        By default the dropmenu is accessed via the <code class="inline">dots-circle-horizontal</code> icon found on <a href="https://heroicons.com/" target="_blank">Heroicons</a>.
        You can specify the default text or element to access your menu via, by specifying the <code class="inline text-red-500">trigger</code>.
        You can either specify trigger as an attribute on the component or as a slot.
    </p>
    <p>
        <code class="inline">&lt;x-bladewind.dropmenu trigger="FILTERS"&gt; ... &lt;/x-bladewind.dropmenu&gt;</code>
    </p>
    <pre class="language-markup line-numbers">
        <code>
        &lt;x-bladewind.dropmenu&gt;
        &nbsp;&nbsp;&lt;x-slot name="trigger"&gt;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;x-bladewind.button type="secondary"&gt;Actions&lt;/x-bladewind.button&gt;
        &nbsp;&nbsp;&lt;/x-slot&gt;
         ...
         &lt;/x-bladewind.dropmenu&gt;</code>
    </pre>

    <x-bladewind::table hover_effect="false" divider="thin">
        <tr>
            <td>John C. Doe</td>
            <td>john@doe.com</td>
            <td>Sales</td>
            <td class="text-right">
                <x-bladewind::dropmenu>
                    <x-slot name="trigger">
                        <x-bladewind::button type="secondary" size="tiny">Options</x-bladewind::button>
                    </x-slot>
                    <x-bladewind::dropmenu-item>Edit </x-bladewind::dropmenu-item>
                    <x-bladewind::dropmenu-item>Invite John to Marketing</x-bladewind::dropmenu-item>
                </x-bladewind::dropmenu>
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="8,9,12">
        <code>
            &lt;x-bladewind.table hover_effect="false" divider="thin"&gt;
                &lt;tr&gt;
                    &lt;td&gt;John C. Doe&lt;/td&gt;
                    &lt;td&gt;john@doe.com&lt;/td&gt;
                    &lt;td&gt;Sales&lt;/td&gt;
                    &lt;td&gt;
                        &lt;x-bladewind.dropmenu&gt;

                            &lt;x-slot name="trigger"&gt;
                                &lt;x-bladewind::button
                                    type="secondary" size="tiny"&gt;
                                    Options
                                &lt;/x-bladewind::button&gt;
                            &lt;/x-slot&gt;

                            &lt;x-bladewind.dropmenu-item&gt;
                                Edit
                            &lt;/x-bladewind.dropmenu-item&gt;
                            &lt;x-bladewind.dropmenu-item&gt;
                                Invite John to Marketing
                            &lt;/x-bladewind.dropmenu-item&gt;
                        &lt;/x-bladewind.dropmenu&gt;

                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-bladewind.table&gt;
        </code>
    </pre>

    <h3>With Icons</h3>
    <p>
        The <code class="inline">x-bladewind::dropmenu-item</code> component takes pretty much any HTML code so you are free to throw anything in there and style them as you want.
        The example below shows the dropmenu with icons in the dropmenu items.
    </p>
    <x-bladewind::table hover_effect="false" divider="thin">
        <tr>
            <td>John C. Doe</td>
            <td>john@doe.com</td>
            <td>Sales</td>
            <td class="text-right">
                <x-bladewind::dropmenu>
                    <x-bladewind::dropmenu-item>
                        <div class="flex align-middle w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-300 mr-2 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <span>Edit</span>
                        </div>
                    </x-bladewind::dropmenu-item>
                    <x-bladewind::dropmenu-item>
                        <div class="flex align-middle w-full whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-300 mr-2 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <span class="pr-4">Invite Other Team Members</span>
                        </div>
                    </x-bladewind::dropmenu-item>
                </x-bladewind::dropmenu>
            </td>
        </tr>
    </x-bladewind::table>

    <pre class="language-markup line-numbers" data-line="3">
        <code>
            &lt;x-bladewind::table hover_effect="false" divider="thin"&gt;
                &lt;tr&gt;
                    &lt;td&gt;John C. Doe&lt;/td&gt;
                    &lt;td&gt;john@doe.com&lt;/td&gt;
                    &lt;td&gt;Sales&lt;/td&gt;
                    &lt;td class="text-right"&gt;
                        &lt;x-bladewind::dropmenu&gt;
                            &lt;x-bladewind::dropmenu-item&gt;
                                &lt;div class="flex align-middle"&gt;
                                    &lt;svg...&gt;
                                    ...
                                    &lt;/svg&gt;
                                    &lt;span&gt;Edit&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/x-bladewind::dropmenu-item&gt;
                            &lt;x-bladewind::dropmenu-item&gt;
                                &lt;div class="flex align-middle whitespace-nowrap"&gt;
                                    &lt;svg...&gt;
                                    ...
                                    &lt;/svg&gt;
                                    &lt;span&gt;Invite Other Team Members&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/x-bladewind::dropmenu-item&gt;
                        &lt;/x-bladewind::dropmenu&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/x-bladewind::table&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Dropmenu component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>trigger</td>
            <td>an SVG</td>
            <td>The element that should trigger the dropmenu. This could be text or HTML elements.</td>
        </tr>
    </x-bladewind::table>

    <h3>Dropmenu with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.dropmenu
                trigger="Filters" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > dropmenu.blade.php</code>,
        <code class="inline">resources > views > components > bladewind > dropmenu-item.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-dropmenu');
        </script>
    </x-slot>
</x-app>
