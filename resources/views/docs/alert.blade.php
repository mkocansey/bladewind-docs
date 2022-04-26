<x-app>
    <x-slot name="title">Alert Component</x-slot>
    <h1 class="page-title">Alert</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                The alert component is useful for displaying messages intended to get the attention of your end users. 
                BladewindUI alerts are in two variants. Dark alerts and faint alerts. Dark here is not to be confused with dark mode. 
                This just provides a darker shade of the colour used, depending on what type of alert is displayed. 
            </p>
            <a name="faint"></a>
            <p>
                BladewindUI alerts are displayed inline by default. You may want to check out the <a href="/component/notification">Notification</a> component if you want something more intrusive.
            </p>

            <h2>Faint Coloured Alerts</h2>
            <h3 class="pb-2 ">Info</h3>
            <x-bladewind.alert css="mb-3">Your subscription is expiring in 19 days. <a href="#">Renew now</a></x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert&gt;
                        Your subscription is expiring in 19 days. 
                        &lt;a href="#"&gt;Renew now&lt;/a&gt;
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>
            <div>&nbsp;</div>
            <h3 class="pb-2 ">Error</h3>
            <x-bladewind.alert type="error" css="mb-3">You do not have permission to upload files</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert type="error"&gt;
                        You do not have permission to upload files
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <div>&nbsp;</div>
            <h3 class="pb-2 ">Warning</h3>
            <x-bladewind.alert type="warning" css="mb-3">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert type="warning"&gt;
                        Well, this is your first warning. Do that again and I'll wipe your hard disk
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <div>&nbsp;</div>
            <h3 class="pb-2 ">Success</h3>
            <x-bladewind.alert type="success" css="mb-3">Files were successfully uploaded</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert type="success"&gt;
                        Files were successfully uploaded
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <a name="dark"><h2>Dark Coloured Alerts</h2></a>
            <p>If you are into darker shades of alerts like myself, this attribute is for you.</p>
            <h3 class="pb-2 ">Info</h3>
            <x-bladewind.alert shade="dark">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert shade="dark"&gt;
                        Your subscription is expiring in 19 days. 
                        &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>
            <div>&nbsp;</div>
            <h3 class="pb-2 ">Error</h3>
            <x-bladewind.alert type="error" shade="dark">You do not have permission to upload files</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert type="error" shade="dark"&gt;
                        You do not have permission to upload files
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <div>&nbsp;</div>
            <h3 class="pb-2 ">Warning</h3>
            <x-bladewind.alert type="warning" shade="dark">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert type="warning" shade="dark"&gt;
                        Well, this is your first warning. Do that again and I'll wipe your hard disk
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <div>&nbsp;</div>
            <h3 class="pb-2 ">Success</h3>
            <x-bladewind.alert type="success" shade="dark">Files were successfully uploaded</x-bladewind.alert>
            <pre class="language-markup line-numbers" data-lines="1">
                <code>
                    &lt;x-bladewind.alert type="success" shade="dark"&gt;
                        Files were successfully uploaded
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>
            
            <p>&nbsp;</p>
            <a name="iconless"><h2>Without Icons</h2></a>
            <p>By default the alert component shows a close icon and another icon matching the type of alert. Both icons can be turned off separately.</p>
            <h3 class="pb-2 ">Info</h3>
            <x-bladewind.alert shade="dark" show_icon="false" show_close_icon="false">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert 
                        shade="dark"
                        show_icon="false"
                        show_close_icon="false"&gt;
                        Your subscription is expiring in 19 days. 
                        &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>
            <div>&nbsp;</div>
            <h3 class="pb-2 ">Error</h3>
            <x-bladewind.alert type="error" shade="dark" show_close_icon="false">You do not have permission to upload files</x-bladewind.alert>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.alert 
                        type="error" 
                        shade="dark"
                        show_close_icon="false"&gt;
                        You do not have permission to upload files
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <div>&nbsp;</div>
            <h3 class="pb-2 ">Warning</h3>
            <x-bladewind.alert type="warning" shade="dark" show_icon="false">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind.alert>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.alert 
                        type="warning" 
                        shade="dark"
                        show_icon="false"&gt;
                        Well, this is your first warning. Do that again and I'll wipe your hard disk
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <a name="attributes"><h2>Full List Of Attributes</h2></a>
            <p>The table below shows a comprehensive list of all the attributes available for the Alert component.</p>
            <x-bladewind.table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>type</td>
                    <td>info</td>
                    <td><code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code> <code class="inline">success</code></td>
                </tr>
                <tr>
                    <td>shade</td>
                    <td>info</td>
                    <td><code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code> <code class="inline">success</code></td>
                </tr>
                <tr>
                    <td>show_close_icon</td>
                    <td>true</td>
                    <td>Determines if the close icon should be shown. Value needs to be set as a string not boolean. <br><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>show_icon</td>
                    <td>true</td>
                    <td>Determines if the alert type icon should be displayed. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>css</td>
                    <td><em>blank</em></td>
                    <td>Any additonal css classes can be added using this attribute. For example to make your alert rounded you can add <code class="inline">css="rounded-lg"</code> for example. The default is an empty string.</td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Alert with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.alert 
                        type="warning" 
                        shade="dark"
                        show_close_icon="false"
                        show_icon="false"
                        css="rounded-lg shadow-sm"&gt;
                        Stay safe. Wash your hands for 20 seconds
                    &lt;/x-bladewind.alert&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/alert.blade.php</code>
            </x-bladewind.alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#faint">Faint coloured alerts</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#dark">Dark coloured alerts</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#iconless">Without icons</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-alert');
        </script>
    </x-slot>
</x-app>