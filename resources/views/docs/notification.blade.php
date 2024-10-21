<x-app>
    <x-slot:title>Notification Component</x-slot:title>
    <x-slot:page_title>Notification</x-slot:page_title>
    <p>
        Unlike the <a href="/component/alert">Alert</a> component, the notification component is not permanently visible on the screen and is useful when you want to provide feedback to your users.
        The BladewindUI Notification component is solely triggered via Javascript.
    </p>
    <p>To use this component simply include it anywhere on your page. If you intend to use this throughout your app it will be best to include the component in say your header page.</p>
    <x-bladewind::notification />

    <pre class="language-markup">
        <code>
            &lt;x-bladewind::notification /&gt;
        </code>
    </pre>
    <p>
        Now you can trigger a notification using the javascript helper function. The function accepts four parameters listed below.
    </p>

    <pre class="language-javascript">
        <code>
            &lt;script&gt;
                showNotification(title, message, type, dismiss_in);
            &lt;/script&gt;
        </code>
    </pre>

    <x-bladewind::table>
        <x-slot name="header">
            <th>Parameter</th>
            <th>Required?</th>
            <th>Description</th>
        </x-slot>
        <tr>
            <td>title</td>
            <td>optional</td>
            <td>Title of the notification. This should usually be very brief</td>
        </tr>
        <tr>
            <td>message</td>
            <td>required</td>
            <td>Meesage to display to the user in the body of the notification. This can either be brief or descriptive.</td>
        </tr>
        <tr>
            <td>type</td>
            <td>optional</td>
            <td>Type of notification to be displayed. Default is success. Available values are
            <code class="inline">success</code> <code class="inline">info</code> <code class="inline">warning</code> <code class="inline">error</code>.
            The type determines the color of the notification and the icon to be displayed.
            </td>
        </tr>
        <tr>
            <td>dismiss_in</td>
            <td>optional</td>
            <td>Numeric. In how many seconds should the notification be dismissed if the user does not explicitly click on the close button. Default is 15 seconds. Note the value is in seconds and <b>not</b> milliseconds. So 20 will mean 20 seconds.</td>
        </tr>
    </x-bladewind::table>

    <pre class="language-javascript line-numbers">
        <code>
            &lt;script&gt;
                showNotification('Delete Successful', 'Your file was deleted successfully');
            &lt;/script&gt;
        </code>
    </pre>
<br />
<br />
    <p>
        <x-bladewind::button
            onclick="showNotification(
                'Download Successful',
                'Your download completed successfully')">success</x-bladewind::button> &nbsp;
        <x-bladewind::button
            onclick="showNotification(
                'Delete Failed',
                'Your message could not be deleted. Try again')">error</x-bladewind::button> &nbsp;
        <x-bladewind::button class="mt-2 sm:mt-0"
            onclick="showNotification(
                'Low Disk Space',
                `You have used 20gb of your 25gb storage space. <a href='#'>Upgrade soon</a>`, 'warning')">warning</x-bladewind::button> &nbsp;
        <x-bladewind::button class="mt-2 sm:mt-0"
            onclick="showNotification(
                'Invitation Accepted',
                `Samuel just accepted your invitation to join BladewindUI Inc. <a href='#'>Say Hello</a>`, 'info')">info</x-bladewind::button>
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                onclick="showNotification(
                    'Download Successful',
                    'Your download completed successfully')"&gt;
                success
            &lt;/x-bladewind.button&gt; &nbsp;

            &lt;x-bladewind.button
                onclick="showNotification(
                    'Delete Failed',
                    'Your message could not be deleted. Try again',
                    'error')"&gt;
                error
            &lt;/x-bladewind.button&gt; &nbsp;

            &lt;x-bladewind.button
                onclick="showNotification(
                    'Low Disk Space',
                    `You have used 20gb of your 25gb storage space. &lt;a href='#'&gt;Upgrade soon&lt;/a&gt;`,
                    'warning')"&gt;
                warning
            &lt;/x-bladewind.button&gt; &nbsp;

            &lt;x-bladewind.button
                onclick="showNotification(
                    'Invitation Accepted',
                    `Samuel just accepted your invitation to join BladewindUI Inc. &lt;a href='#'&gt;Say Hello&lt;/a&gt;`,
                    'info')"&gt;
                info
            &lt;/x-bladewind.button&gt;
        </code>
    </pre>

    <p>
        <x-bladewind::alert show_close_icon="false">
            Multiple notifications can be triggered. In this case, they are displayed as a stack in chronological order. The latest notification is always on top.
        </x-bladewind::alert>
    </p>
    <h3>Targeting Existing Notifications</h3>
    <p>
        By default, the BladewindUI notification components creates a new notification every time the <code class="inline">showNotification()</code> function is called.
        Let's take for example, you have a file picker that triggers an error an time the user selects the wrong file type. Typically a notification takes 15 seconds to
        be hidden. If your user selects the wrong file quickly 3 times, the same error message will be displayed three times. </p>
    <p>To prevent that behaviour, you can
        give the notification a <code class="inline">name</code>. BladewindUI will check if a notification with that name already exists. If it does, it will re-render the
        existing notification. If it does not, it will create a new notification.
    </p>
    <p>
        <x-bladewind::button
            onclick="showNotification(
                'Delete Failed',
                'Your message could not be deleted. Try again', 'error', 15, 'regular', 'same_one')">Same Notification</x-bladewind::button> &nbsp;
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button
                onclick="showNotification(
                    'Delete Failed',
                    'Your message could not be deleted. Try again',
                    'error',
                    15,
                    'regular',
                    'same_one')"&gt;
                Same Notification
            &lt;/x-bladewind.button&gt; &nbsp;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Notification component.</p>
    @include('docs/announcement')
    <x-bladewind::table>
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>position</td>
            <td>top-right</td>
            <td>
                Defines where the notification should be displayed. Available values are
                <code class="inline">top-right</code> <code class="inline">bottom-right</code>
                <code class="inline">top-left</code> <code class="inline">bottom-left</code>
            </td>
        </tr>
    </x-bladewind::table>

    <h3>Notification with all attributes defined</h3>
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::notification position="top-right" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > notification.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-notification');
        </script>
    </x-slot>
</x-app>
