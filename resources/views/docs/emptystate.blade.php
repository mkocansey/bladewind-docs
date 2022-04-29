<x-app>
    <x-slot name="title">Empty State Component</x-slot>
    <h1 class="page-title">Empty State</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Display this when there is nothing to display. This prevents your users from seeing boring blank pages with one liners like "no users to display". 
                Similar to all the other BladewindUI compnents, we have kept the empty state component very minimal, bearing in mind that different users have different empty state preferences. 
                In fact, each application will have its own specific empty state requirements.
            </p>
            <p>&nbsp;</p>
            <x-bladewind.empty-state 
                message="Awesome! You have no documents to approve."
                button_label="Go to Dashboard" 
                onclick="alert('you clicked me')"></x-bladewind.empty-state>
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.empty-state 
                        message="Awesome! You have no documents to approve."
                        button_label="Go to Dashboard" 
                        onclick="alert('you clicked me')"&gt;
                    &lt;/x-bladewind.empty-state&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            <p>
                The above example uses the default empty state image that comes bundled with BladewindUI. This image is available in the <code class="inline">public > bladewind > images > empty-state.svg</code> directory.
                The default image is used if you leave out the <code class="inline text-red-500">image=""</code> attribute of the Empty State component.
            </p>
            <x-bladewind.empty-state 
                message="You have not saved any gists yet to your GitHub account"
                image="/assets/images/no-code.svg"
                button_label="Create Gist" 
                onclick="alert('you clicked me')"></x-bladewind.empty-state>
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.empty-state 
                        message="You have not saved any gists yet to your GitHub account"
                        image="/assets/images/no-code.svg"
                        button_label="Create Gist" 
                        onclick="alert('you clicked me')"&gt;
                    &lt;/x-bladewind.empty-state&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            
            <p>
                The two examples above use the attributes of the empty state component to build the empty state content. It is also possible to ignore all attributes and dump your content right in to the empty state component. 
                In this case you will need to set <code class="inline text-red-500">show_image="false"</code>.
            </p>
            <x-bladewind.empty-state show_image="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
                <p class="pt-2">You have no biometric data available</p>
                <x-bladewind.button color="red" size="small">
                    Add biometric info
                </x-bladewind.button>
            </x-bladewind.empty-state>
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.empty-state show_image="false"&gt;
                        &lt;svg&gt;
                            ...
                        &lt;/svg&gt;
                        &lt;p class="pt-2"&gt;You have no biometric data available&lt;/p&gt;
                        &lt;x-bladewind.button color="red" size="small"&gt;
                            Add biometric info
                        &lt;/x-bladewind.button&gt;
                    &lt;/x-bladewind.empty-state&gt;
                </code>
            </pre>
           
            <div class="pb-10"></div>
            
            <p>
                You can also have empty states with no call to action buttons. For example, a "Recent Activities" section that fills up when users perform activities throughtout the app. An empty state for a case like that will necessarily need no action to be performed. 
                To achieve this, you should leave out the <code class="inline text-red-500">button_label</code> attribute or set it to an empty string.
            </p>
            <br />
            <x-bladewind.card title="Recent Activities" css="w-3/4 mx-auto">
                <br />
                <x-bladewind.empty-state 
                    image="/assets/images/no-activity.svg"
                    message="Your recent activites list will take shape as<br/> soon as your organization has some activty">
                </x-bladewind.empty-state>
            </x-bladewind.card>

            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.card title="Recent Activities" css="w-3/4 mx-auto"&gt;
                        &lt;br /&gt;
                        &lt;x-bladewind.empty-state 
                            image="/assets/images/no-activity.svg"
                            message="Your recent activites list will take shape as 
                                    &lt;br/&gt; soon as your organization has some activty"&gt;
                        &lt;/x-bladewind.empty-state&gt;
                    &lt;/x-bladewind.card&gt;
                </code>
            </pre>
           
            <br />
            
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Empty State component.</p>
            <x-bladewind.table>
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>image</td>
                    <td>bladewind/images/empty-state.svg</td>
                    <td>Image to display.</td>
                </tr>
                <tr>
                    <td>show_image</td>
                    <td>true</td>
                    <td>Determines if the image should be displayed or not. Set this to <code>false</code> if you intend to control the entire content of the empty state component. <code class="inline">true</code><code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>button_label</td>
                    <td><em>blank</em></td>
                    <td>Text to display on the call to action button.</td>
                </tr>
                <tr>
                    <td>onclick</td>
                    <td><em>blank</em></td>
                    <td>
                        Action to perform when the call to action button is clicked. This could be a block of javascript or a function call. Example: 
                        <code class="inline text-red-500">onclick="location.href='/dashboard'"</code> or if you have a javascript helper function for accessing URLs you can do 
                        <code class="inline text-red-500">onclick="goToRoute('dashboard')"</code>
                    </td>
                </tr>
                <tr>
                    <td>message</td>
                    <td><em>blank</em></td>
                    <td>Empty state message.</td>
                </tr>
                <tr>
                    <td>css</td>
                    <td>bw-empty-state</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Empty State with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.empty-state 
                        message="Hey!! You cleaned up your inbox nicely"
                        button_label="Compose a message"
                        onclick="goToRoute('new-message')"
                        image="/assets/images/empty-inbox.png"
                        show_image="true"
                        css="shadow-sm"&gt;
                    &lt;/x-bladewind.empty-state&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/empty-state.blade.php</code>
            </x-bladewind.alert><br/>
            <x-bladewind.alert show_close_icon="false">
                Illustrations used above were taken from <a href="https://undraw.co/" target="_blank">https://undraw.co/</a></code>
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
            selectNavigationItem('.component-empty-state');
        </script>
    </x-slot>
</x-app>