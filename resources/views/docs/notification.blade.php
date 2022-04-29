<x-app>
    <x-slot name="title">Notification Component</x-slot>
    <h1 class="page-title">Notification</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Unlike the <a href="/component/alert">Alert</a> component, the notification component is purely triggered via javascript. This is an intrusive way of displaying messages to your end users.  
                The notification component comes with a helper function to trigger the notification. Notifications are usually triggered after a user action is performed. 
                That said, it means most of the time content of notifications are built on the fly, so, it will not make sense to have a notification pre-filled with content waiting to be triggered.
            </p>
            <p>Include the notification component anywhere on your page. This component does not allow for much dynamic customization.</p>
            <x-bladewind.notification />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.notification /&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            <p>
                Now you can trigger a notification using the javascript helper function. The function accepts four parameters listed below.
            </p>

            <pre class="language-javascript line-numbers">
                <code>
                    &lt;script&gt;
                        showNotification(title, message, type, dismiss_in);
                    &lt;/script&gt;
                </code>
            </pre>
            <br />
            <x-bladewind.table>
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
                    <td>Numeric. In how many seconds should the notification be dismissed if the user does not explicitly click on the close button. Default is 10 seconds. Note the value is in seconds and <b>not</b> milliseconds. So 20 will mean 20 seconds.</td>
                </tr>
            </x-bladewind.table>
            <br/>
            <pre class="language-javascript line-numbers">
                <code>
                    &lt;script&gt;
                        showNotification('Delete Successful', 'Your downloaded file was deleted successfully');
                    &lt;/script&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            
            <p>
                <x-bladewind.button 
                    onclick="showNotification(
                        'Download Successful', 
                        'Your download completed successfully')">success</x-bladewind.button> &nbsp;
                <x-bladewind.button 
                    onclick="showNotification(
                        'Delete Failed', 
                        'Your message could not be deleted. Try again', 'error')">error</x-bladewind.button> &nbsp;
                <x-bladewind.button 
                    onclick="showNotification(
                        'Low Disk Space', 
                        `You have used 20gb of your 25gb storage space. <a href='#'>Upgrade soon</a>`, 'warning')">warning</x-bladewind.button> &nbsp;
                <x-bladewind.button 
                    onclick="showNotification(
                        'Invitation Accepted', 
                        `Samuel just accepted your invitation to join BladewindUI Inc. <a href='#'>Say Hello</a>`, 'info')">info</x-bladewind.button>
            </p>
            

            <div class="py-2"></div>
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
                            'Your message could not be deleted. Try again', 'error')"&gt;
                        error
                    &lt;/x-bladewind.button&gt; &nbsp;

                    &lt;x-bladewind.button 
                        onclick="showNotification(
                            'Low Disk Space', 
                            `You have used 20gb of your 25gb storage space. &lt;a href='#'&gt;Upgrade soon&lt;/a&gt;`, 'warning')"&gt;
                        warning
                    &lt;/x-bladewind.button&gt; &nbsp;

                    &lt;x-bladewind.button 
                        onclick="showNotification(
                            'Invitation Accepted', 
                            `Samuel just accepted your invitation to join BladewindUI Inc. &lt;a href='#'&gt;Say Hello&lt;/a&gt;`, 'info')"&gt;
                        info
                    &lt;/x-bladewind.button&gt;
                </code>
            </pre>
           
            <p>
                <x-bladewind.alert type="warning" show_close_icon="false">
                    Only a single instance of the notification component is available per page. Notifications are not stacked. 
                    Triggering a new notification  when one is already shown will overwrite the earlier notification.
                </x-bladewind.alert>
            </p>
            
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Notification component.</p>
            <x-bladewind.table>
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>postion</td>
                    <td>top right</td>
                    <td>
                        Defines where the notification should be displayed. Available values are
                        <code class="inline">top right</code> <code class="inline">bottom right</code>
                        <code class="inline">top left</code> <code class="inline">bottom left</code>
                    </td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Notification with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.notification position="top right" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/notification.blade.php</code>
            </x-bladewind.alert>
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
            selectNavigationItem('.component-notification');
        </script>
    </x-slot>
</x-app>