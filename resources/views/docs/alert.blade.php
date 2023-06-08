<x-app>
    <x-slot:title>Alert Component</x-slot:title>
    <x-slot:page_title>Alert</x-slot:page_title>
    <p>
        The alert component is useful for displaying messages intended to get the attention of your end users.
        BladewindUI alerts are in two variants. Dark alerts and faint alerts. Dark here is not to be confused with dark mode.
        This just provides a darker shade of the colour used, depending on what type of alert is displayed.
    </p>
    <p>
        BladewindUI alerts are displayed inline by default. You may want to check out the <a href="/component/notification">Notification</a> component if you want something more intrusive.
        For each colour shade there are four alert types, <code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code> and <code class="inline">success</code>.
    </p>

    <h2 id="faint">Faint Coloured Alerts</h2>
    <h3 class="!mt-4">Info</h3>
    <x-bladewind::alert class="mb-3">Your subscription is expiring in 19 days. <a href="#">Renew now</a></x-bladewind::alert>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.alert&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#"&gt;Renew now&lt;/a&gt;
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Error</h3>
    <x-bladewind::alert type="error" class="mb-3">You do not have permission to upload files</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.alert
                type="error"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Warning</h3>
    <x-bladewind::alert type="warning" class="mb-3">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.alert
                type="warning"&gt;
                Well, this is your first warning. Do that again and I'll wipe your hard disk
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h3>Success</h3>
    <x-bladewind::alert type="success" class="mb-3">Files were successfully uploaded</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.alert
                type="success"&gt;
                Files were successfully uploaded
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h2 id="dark">Dark Coloured Alerts</h2>
    <p>If you are into darker colours, you can set the <code class="inline text-red-500">shade="dark"</code> attribute on the alert component to get darker colours.</p>
    <h3>Info</h3>
    <x-bladewind::alert shade="dark">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.alert
                shade="dark"&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h3>Error</h3>
    <x-bladewind::alert type="error" shade="dark">You do not have permission to upload files</x-bladewind::alert>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.alert type="error" shade="dark"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>


    <h3>Warning</h3>
    <x-bladewind::alert type="warning" shade="dark">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::alert>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.alert type="warning" shade="dark"&gt;
                Well, this is your first warning. Do that again and I'll wipe your hard disk
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h3>Success</h3>
    <x-bladewind::alert type="success" shade="dark">Files were successfully uploaded</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert type="success" shade="dark"&gt;
                Files were successfully uploaded
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h2 id="iconless">Without Icons</h2>
    <p>By default the alert component shows a close icon and another icon that matches the type of alert being displayed. Both icons can be turned off separately.</p>
    <h3>Info</h3>
    <x-bladewind::alert shade="dark" show_icon="false" show_close_icon="false">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="3,4">
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
    <h3>Error</h3>
    <x-bladewind::alert type="error" shade="dark" show_close_icon="false">You do not have permission to upload files</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.alert
                type="error"
                shade="dark"
                show_close_icon="false"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h3>Warning</h3>
    <x-bladewind::alert type="warning" shade="dark" show_icon="false">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::alert>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind.alert
                type="warning"
                shade="dark"
                show_icon="false"&gt;
                Well, this is your first warning.
                Do that again and I'll wipe your hard disk
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Alert component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
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
            <td>faint</td>
            <td><code class="inline">faint</code> <code class="inline">dark</code></td>
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
            <td>class</td>
            <td><em>blank</em></td>
            <td>Any additonal css classes can be added using this attribute. For example to make your alert rounded you can add <code class="inline">class="rounded-lg"</code> for example. The default is an empty string.</td>
        </tr>
    </x-bladewind::table>

    <h3>Alert with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.alert
                type="warning"
                shade="dark"
                show_close_icon="false"
                show_icon="false"
                class="rounded-lg shadow-sm"&gt;
                Stay safe. Wash your hands for 20 seconds
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > alert.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#faint">Faint coloured alerts</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#dark">Dark coloured alerts</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#iconless">Without icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-alert');
        </script>
    </x-slot:scripts>
</x-app>
