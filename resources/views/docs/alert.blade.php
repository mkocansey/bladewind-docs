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
        For each colour shade there are four prebuilt alert types, <code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code> and <code class="inline">success</code>.
        These four prebuilt alerts are the commonly used types and come with their default icons. It is however, possible to use other <a href="#colours">colours</a> and <a href="#icons">icons</a> in your alerts.
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
    <h2 id="colours">More Colours</h2>
    <p>
        Like most BladewindUI components, the Alert component can take on any of the <a href="/customize/colours">colours</a> defined in our palette. All colours work for both the
        <code class="inline">dark</code> and <code class="inline">faint</code> shades
    </p>
    <h3>Pink</h3>
    <x-bladewind::alert color="pink" >I am a pink alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="pink" shade="dark">I am a pink alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="pink"&gt;
                I am a pink alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="pink" shade="dark"&gt;
                I am a pink alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Cyan</h3>
    <x-bladewind::alert color="cyan" >I am a cyan alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="cyan" shade="dark">I am a cyan alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="cyan"&gt;
                I am a cyan alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="cyan" shade="dark"&gt;
                I am a cyan alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Purple</h3>
    <x-bladewind::alert color="purple" >I am a purple alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="purple" shade="dark">I am a purple alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="purple"&gt;
                I am a purple alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="purple" shade="dark"&gt;
                I am a purple alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Gray</h3>
    <x-bladewind::alert color="gray" >I am a gray alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="gray" shade="dark">I am a gray alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="gray"&gt;
                I am a gray alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="gray" shade="dark"&gt;
                I am a gray alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Violet</h3>
    <x-bladewind::alert color="violet" >I am a violet alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="violet" shade="dark">I am a violet alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="violet"&gt;
                I am a violet alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="violet" shade="dark"&gt;
                I am a violet alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Indigo</h3>
    <x-bladewind::alert color="indigo" >I am a indigo alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="indigo" shade="dark">I am a indigo alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="indigo"&gt;
                I am a indigo alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="indigo" shade="dark"&gt;
                I am a indigo alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Fuchsia</h3>
    <x-bladewind::alert color="fuchsia" >I am a fuchsia alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="fuchsia" shade="dark">I am a fuchsia alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="fuchsia"&gt;
                I am a fuchsia alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="fuchsia" shade="dark"&gt;
                I am a fuchsia alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Orange</h3>
    <x-bladewind::alert color="orange" >I am a orange alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="orange" shade="dark">I am a orange alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="orange"&gt;
                I am a orange alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="orange" shade="dark"&gt;
                I am a orange alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Transparent</h3>
    <x-bladewind::alert color="transparent" >I am a transparent alert. How do I look?</x-bladewind::alert>
    <p><x-bladewind::alert color="transparent" shade="dark">I am a transparent alert. Dark version. How do I look?</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="transparent"&gt;
                I am a transparent alert. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="transparent" shade="dark"&gt;
                I am a transparent alert. Dark version. How do I look?
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>

    <h2 id="icons">Other Icons & Avatars</h2>
    <h3>Icons</h3>
    <p>
        We saw earlier, the four prebuilt alerts had their corresponding icons. All other alerts do not have any prefxing icons.
        You can define an icon by setting the <code class="inline text-red-500">icon</code> attribute to any of the icon names on <a href="https://heroicons.com" target="_blank">Heroicons</a>.
    </p>

    <x-bladewind::alert color="indigo" icon="bell-alert">No more alarm snoozing. Wake up!</x-bladewind::alert>
    <p><x-bladewind::alert color="indigo" shade="dark" icon="currency-dollar">Your BladewindUI subscription is expiring soon. Pay up!</x-bladewind::alert></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="indigo" icon="bell-alert"&gt;
                No more alarm snoozing. Wake up
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="indigo" shade="dark"
                icon="currency-dollar"&gt;
                Your BladewindUI subscription is expiring soon. Pay up!
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <p>
        The icons come at a default size that might not suit your needs.
        To modify the css of the icon, set the <code class="inline text-red-500">icon_avatar_css</code> attribute to your preferred TailwindCSS classes.
    </p>
    <p>
        <x-bladewind::alert color="cyan" shade="dark" icon="currency-dollar" icon_avatar_css="!h-16 !w-16 opacity-60">
            <div><strong>Subscription overdue</strong></div>
            Your BladewindUI subscription is overdue by 3 months. Please pay before the 30th of this month to
            avoid losing your information.
        </x-bladewind::alert>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="cyan" shade="dark"
                icon="currency-dollar"
                 icon_avatar_css="!h-16 !w-16 opacity-60"&gt;
                &lt;div&gt;&lt;strong&gt;Subscription overdue&lt;/strong&gt;&lt;/div&gt;
                Your BladewindUI subscription is overdue by 3 months. Please pay
                before the 30th of this month to avoid losing your information.
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <h3>Avatars</h3>
    <p>
        It is possible to use avatars instead of icons to spice the alerts up a bit. The avatar is displayed using the BladewindUI <a href="/component/avatar">Avatar</a> component.
    </p>
    <p>
        <x-bladewind::alert color="violet" shade="dark" avatar="/assets/images/issah.jpg">
            Jane has been added to your friends list
        </x-bladewind::alert>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="violet" shade="dark"
                avatar="/assets/images/issah.jpg"&gt;
                Jane has been added to your friends list
            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <p>
        The default avatar size used in the alert is <code class="inline">tiny</code>. Other sizes are available <a href="/component/avatar">here</a> and can be changed by
        setting the <code class="inline text-red-500">size</code> attribute of the component. This attribute will only take effect when using an avatar. We can also add additional css
        by setting the <code class="inline text-red-500">icon_avatar_css</code> attribute.
    </p>
    <p>
        <x-bladewind::alert color="cyan" shade="dark" avatar="/assets/images/doc.png" size="regular" show_ring="true">
            <div><strong>New friend request</strong></div>
            Jane C. Doe wants to connect as a friend in your professional network.
            <div class="text-sm opacity-70">2 days ago</div>
        </x-bladewind::alert>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind.alert color="cyan"
                shade="dark"
                avatar="/images/...jpg"
                size="big"
                show_ring="true"&gt;

                &lt;div&gt;&lt;strong&gt;New friend request&lt;/strong&gt;&lt;/div&gt;
                Jane C. Doe wants to connect as a friend in
                your professional network.
                &lt;div class="text-sm opacity-70"&gt;2 days ago&lt;/div&gt;

            &lt;/x-bladewind.alert&gt;
        </code>
    </pre>
    <p>
    <div class="text-center">
        <x-bladewind::dropmenu trigger="bell-alert-icon" trigger_css="bg-cyan-500 rounded-full text-white p-2 !h-10 !w-10" hide_after_click="false">
            <x-bladewind::dropmenu-item header="true">
                <div class="space-y-0.5">
                    <div>You have 5 new notifications</div>
                    <div class="text-sm text-gray-400">Updated 4 days ago</div>
                    <div class="text-sm"><a href="#">Mark all as read</a></div>
                </div>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::alert color="transparent" icon="calendar" icon_avatar_css="bg-indigo-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5" show_close_icon="false">
                    <div><strong>Meeting starts in 5 minutes</strong></div>
                    Functional specification meeting
                    <div class="text-sm opacity-70">10 minutes ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::alert color="transparent" avatar="/assets/images/doc.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    Jane C. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::alert color="transparent" avatar="/assets/images/francis.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    John A. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::alert color="transparent" icon="server-stack" icon_avatar_css="bg-pink-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5">
                    <div><strong>Server not responding</strong></div>
                    Ping to <i>bladewind-data-23</i> <br /> is returning constant time outs
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu-item>
        </x-bladewind::dropmenu>
    </div>
    </p>
    <h2 id="customize-colours">Customizing Alert Colors</h2>
    <p>
        BladewindUI defines the colours used for the four prebuilt alert types in the <code class="inline">tailwind.config.js</code> file. The properties defined are specified below.
        To change the colours you will need to define the corresponding <code class="inline">colors</code> key and colour values in your project's <code class="inline">tailwind.config.js</code>.
    </p>
    <pre class="line-numbers language-js">
        <code>
...
  theme: {
    extend: {
      colors: {
        ...
        success: colors.emerald,
        error: colors.red,
        warning: colors.amber,
        info: colors.blue
      }
    },
  }
...
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
            <td>Specifies if the close icon should be shown. Value needs to be set as a string not boolean. <br><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>show_icon</td>
            <td>true</td>
            <td>Specifies if the alert type icon should be displayed. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>color</td>
            <td><em>blank</em></td>
            <td>Additional colours to pick from for the alert background.. <br /><br><br /> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code>
                <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
                <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>icon</td>
            <td><em>blank</em></td>
            <td>Icon to display as a prefix to the alert message. Can be any ico name from <a href="https://heroicons.com">Heroicons</a>.</td>
        </tr>
        <tr>
            <td>avatar</td>
            <td><em>blank</em></td>
            <td>Specify the url to an avatar. Uses the <a href="/component/avatar">Avatar</a> component to display an image as a prefix in the component..</td>
        </tr>
        <tr>
            <td>icon_avatar_css</td>
            <td><em>blank</em></td>
            <td>Specify additional css to be applied to the avatar or icon prefix. Can be any TailwindCSS styles.</td>
        </tr>
        <tr>
            <td>size</td>
            <td>tiny</td>
            <td>The size of the avatar. Sizes are inherited from the <a href="/component/avatar#sizes">Avatar</a> component.</td>
        </tr>
        <tr>
            <td>show_ring</td>
            <td>false</td>
            <td>Determines if the avatar should display a ring around it. <br /><br /><code class="inline">true</code> <code class="inline">false</code></td>
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
                color="pink"
                icon="briefcase"
                icon_avatar_css="bg-slate-800"
                show_ring="true"
                avatar="/assets/images/me.jpg"
                size="small"
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
        <div class="flex items-center"><div class="dot"></div><a href="#colours">More colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">Other icons & avatars</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-alert');
        </script>
    </x-slot:scripts>
</x-app>
