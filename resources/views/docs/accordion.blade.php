<x-app>
    <x-slot:title>Accordion Component</x-slot:title>
    <x-slot:page_title>Accordion</x-slot:page_title>
    <p>
        The accordion component allows content to be expanded or collapsed, providing a way to organize and display large amounts of information in a compact space. Users can click on a section header to reveal or hide the content associated with it, often used in FAQs or menus.
    </p>
    <h2 id="faint">Faint Coloured Alerts</h2>
    <h3 class="!mt-4">Info</h3>
    <x-bladewind::accordion class="mb-3">Your subscription is expiring in 19 days. <a href="#">Renew now</a></x-bladewind::accordion>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::accordion&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#"&gt;Renew now&lt;/a&gt;
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Error</h3>
    <x-bladewind::accordion type="error" class="mb-3">You do not have permission to upload files</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind::accordion
                type="error"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Warning</h3>
    <x-bladewind::accordion type="warning" class="mb-3">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind::accordion
                type="warning"&gt;
                Well, this is your first warning. Do that again and I'll wipe your hard disk
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h3>Success</h3>
    <x-bladewind::accordion type="success" class="mb-3">Files were successfully uploaded</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind::accordion
                type="success"&gt;
                Files were successfully uploaded
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h2 id="dark">Dark Coloured Alerts</h2>
    <p>You can set the <code class="inline text-red-500">shade="dark"</code> attribute on the accordion component to get darker colours.</p>
    <h3>Info</h3>
    <x-bladewind::accordion shade="dark">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind::accordion
                shade="dark"&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h3>Error</h3>
    <x-bladewind::accordion type="error" shade="dark">You do not have permission to upload files</x-bladewind::accordion>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::accordion type="error" shade="dark"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>


    <h3>Warning</h3>
    <x-bladewind::accordion type="warning" shade="dark">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::accordion>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::accordion type="warning" shade="dark"&gt;
                Well, this is your first warning. Do that again and I'll wipe your hard disk
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h3>Success</h3>
    <x-bladewind::accordion type="success" shade="dark">Files were successfully uploaded</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion type="success" shade="dark"&gt;
                Files were successfully uploaded
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h2 id="iconless">Without Icons</h2>
    <p>By default the accordion component shows a close icon and another icon that matches the type of accordion being displayed. Both icons can be turned off separately.</p>
    <h3>Info</h3>
    <x-bladewind::accordion shade="dark" show_icon="false" show_close_icon="false">Your subscription is expiring in 19 days. <a href="#" class="!text-white/70">Renew now</a></x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="3,4">
        <code>
            &lt;x-bladewind::accordion
                shade="dark"
                show_icon="false"
                show_close_icon="false"&gt;
                Your subscription is expiring in 19 days.
                &lt;a href="#" class="!text-white/70"&gt;Renew now&lt;/a&gt;
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Error</h3>
    <x-bladewind::accordion type="error" shade="dark" show_close_icon="false">You do not have permission to upload files</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::accordion
                type="error"
                shade="dark"
                show_close_icon="false"&gt;
                You do not have permission to upload files
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h3>Warning</h3>
    <x-bladewind::accordion type="warning" shade="dark" show_icon="false">Well, this is your first warning. Do that again and I'll wipe your hard disk</x-bladewind::accordion>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::accordion
                type="warning"
                shade="dark"
                show_icon="false"&gt;
                Well, this is your first warning.
                Do that again and I'll wipe your hard disk
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h2 id="colours">More Colours</h2>
    <p>
        Like most BladewindUI components, the Alert component can be displayed in any of the <a href="/customize/colours">colours</a> defined in our <a href="/customize/colours">palette</a>. All colours work for both the
        <code class="inline">dark</code> and <code class="inline">faint</code> shades.
    </p>
    <h3>Pink</h3>
    <x-bladewind::accordion color="pink" >I am a pink accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="pink" shade="dark">I am a pink accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="pink"&gt;
                I am a pink accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="pink" shade="dark"&gt;
                I am a pink accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Cyan</h3>
    <x-bladewind::accordion color="cyan" >I am a cyan accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="cyan" shade="dark">I am a cyan accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="cyan"&gt;
                I am a cyan accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="cyan" shade="dark"&gt;
                I am a cyan accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Purple</h3>
    <x-bladewind::accordion color="purple" >I am a purple accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="purple" shade="dark">I am a purple accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="purple"&gt;
                I am a purple accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="purple" shade="dark"&gt;
                I am a purple accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Gray</h3>
    <x-bladewind::accordion color="gray" >I am a gray accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="gray" shade="dark">I am a gray accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="gray"&gt;
                I am a gray accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="gray" shade="dark"&gt;
                I am a gray accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Violet</h3>
    <x-bladewind::accordion color="violet" >I am a violet accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="violet" shade="dark">I am a violet accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="violet"&gt;
                I am a violet accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="violet" shade="dark"&gt;
                I am a violet accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Indigo</h3>
    <x-bladewind::accordion color="indigo" >I am a indigo accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="indigo" shade="dark">I am a indigo accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="indigo"&gt;
                I am a indigo accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="indigo" shade="dark"&gt;
                I am a indigo accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Fuchsia</h3>
    <x-bladewind::accordion color="fuchsia" >I am a fuchsia accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="fuchsia" shade="dark">I am a fuchsia accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="fuchsia"&gt;
                I am a fuchsia accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="fuchsia" shade="dark"&gt;
                I am a fuchsia accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Orange</h3>
    <x-bladewind::accordion color="orange" >I am a orange accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="orange" shade="dark">I am a orange accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="orange"&gt;
                I am a orange accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="orange" shade="dark"&gt;
                I am a orange accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Transparent</h3>
    <x-bladewind::accordion color="transparent" >I am a transparent accordion. How do I look?</x-bladewind::accordion>
    <p><x-bladewind::accordion color="transparent" shade="dark">I am a transparent accordion. Dark version. How do I look?</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="transparent"&gt;
                I am a transparent accordion. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="transparent" shade="dark"&gt;
                I am a transparent accordion. Dark version. How do I look?
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <h2 id="icons">Other Icons & Avatars</h2>
    <h3>Icons</h3>
    <p>
        As seen above, the four prebuilt accordions (error, warning, info, success) have their corresponding icons. All other accordions do not have corresponding icons.
        You can display an icon by setting the <code class="inline text-red-500">icon</code> attribute to any of the icon names on <a href="https://heroicons.com" target="_blank">Heroicons</a>.
    </p>

    <x-bladewind::accordion color="indigo" icon="bell-accordion">No more alarm snoozing. Wake up!</x-bladewind::accordion>
    <p><x-bladewind::accordion color="indigo" shade="dark" icon="currency-dollar">Your BladewindUI subscription is expiring soon. Pay up!</x-bladewind::accordion></p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="indigo" icon="bell-accordion"&gt;
                No more alarm snoozing. Wake up
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="indigo" shade="dark"
                icon="currency-dollar"&gt;
                Your BladewindUI subscription is expiring soon. Pay up!
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <p>
        If the default icon size does not suit your needs, you can modify the css of the icon by setting
        the <code class="inline text-red-500">icon_avatar_css</code> attribute to your preferred TailwindCSS classes.
    </p>
    <p>
        <x-bladewind::accordion color="cyan" shade="dark" icon="currency-dollar" icon_avatar_css="!h-16 !w-16 opacity-60">
            <div><strong>Subscription overdue</strong></div>
            Your BladewindUI subscription is overdue by 3 months. Please pay before the 30th of this month to
            avoid losing your information.
        </x-bladewind::accordion>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="cyan" shade="dark"
                icon="currency-dollar"
                 icon_avatar_css="!h-16 !w-16 opacity-60"&gt;
                &lt;div&gt;&lt;strong&gt;Subscription overdue&lt;/strong&gt;&lt;/div&gt;
                Your BladewindUI subscription is overdue by 3 months. Please pay
                before the 30th of this month to avoid losing your information.
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <h3>Avatars</h3>
    <p>
        It is possible to use avatars instead of icons to spice the accordions up a bit. The avatar is displayed using the BladewindUI <a href="/component/avatar">Avatar</a> component.
    </p>
    <p>
        <x-bladewind::accordion color="violet" shade="dark" avatar="/assets/images/issah.jpg">
            Jane has been added to your friends list
        </x-bladewind::accordion>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="violet" shade="dark"
                avatar="/assets/images/issah.jpg"&gt;
                Jane has been added to your friends list
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <p>
        The default avatar size used in the accordion is <code class="inline">tiny</code>. Other sizes are available <a href="/component/avatar">here</a> and can be changed by
        setting the <code class="inline text-red-500">size</code> attribute of the component. This attribute will only take effect when using an avatar.
        You can also add additional css to the avatar by setting the <code class="inline text-red-500">icon_avatar_css</code> attribute.
    </p>
    <p>
        <x-bladewind::accordion color="cyan" shade="dark" avatar="/assets/images/doc.png" size="regular" show_ring="true">
            <div><strong>New friend request</strong></div>
            Jane C. Doe wants to connect as a friend in your professional network.
            <div class="text-sm opacity-70">2 days ago</div>
        </x-bladewind::accordion>
    </p>
    <pre class="language-markup line-numbers" data-lines="1">
        <code>
            &lt;x-bladewind::accordion color="cyan"
                shade="dark"
                avatar="/images/...jpg"
                size="big"
                show_ring="true"&gt;

                &lt;div&gt;&lt;strong&gt;New friend request&lt;/strong&gt;&lt;/div&gt;
                Jane C. Doe wants to connect as a friend in
                your professional network.
                &lt;div class="text-sm opacity-70"&gt;2 days ago&lt;/div&gt;

            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>
    <p>
    <div class="text-center">
        <x-bladewind::dropmenu trigger="bell-accordion-icon" trigger_css="bg-cyan-500 rounded-full text-white p-2 !h-10 !w-10" hide_after_click="false">
            <x-bladewind::dropmenu-item header="true">
                <div class="space-y-0.5">
                    <div>You have 5 new notifications</div>
                    <div class="text-sm text-gray-400">Updated 4 days ago</div>
                    <div class="text-sm"><a href="#">Mark all as read</a></div>
                </div>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::accordion color="transparent" icon="calendar" icon_avatar_css="bg-indigo-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5" show_close_icon="false">
                    <div><strong>Meeting starts in 5 minutes</strong></div>
                    Functional specification meeting
                    <div class="text-sm opacity-70">10 minutes ago</div>
                </x-bladewind::accordion>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::accordion color="transparent" avatar="/assets/images/doc.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    Jane C. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::accordion>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::accordion color="transparent" avatar="/assets/images/francis.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    John A. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::accordion>
            </x-bladewind::dropmenu-item>
            <x-bladewind::dropmenu-item hover="false">
                <x-bladewind::accordion color="transparent" icon="server-stack" icon_avatar_css="bg-pink-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5">
                    <div><strong>Server not responding</strong></div>
                    Ping to <i>bladewind-data-23</i> <br /> is returning constant time outs
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::accordion>
            </x-bladewind::dropmenu-item>
        </x-bladewind::dropmenu>
    </div>
    </p>

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
            <td>Specifies if the accordion type icon should be displayed. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>color</td>
            <td><em>blank</em></td>
            <td>Additional colours to pick from for the accordion background.. <br /><br><br /> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code>
                <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
                <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>icon</td>
            <td><em>blank</em></td>
            <td>Icon to display as a prefix to the accordion message. Can be any ico name from <a href="https://heroicons.com">Heroicons</a>.</td>
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
            <td>Any additonal css classes can be added using this attribute. For example to make your accordion rounded you can add <code class="inline">class="rounded-lg"</code> for example. The default is an empty string.</td>
        </tr>
    </x-bladewind::table>

    <h3>Alert with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::accordion
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
            &lt;/x-bladewind::accordion&gt;
        </code>
    </pre>

    <x-bladewind::accordion show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > accordion > [index.blade.php, item.blade.php]</code>
    </x-bladewind::accordion>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#faint">Faint coloured accordions</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#dark">Dark coloured accordions</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#iconless">Without icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">More colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">Other icons & avatars</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-accordion');
        </script>
    </x-slot:scripts>
</x-app>
