<x-app>
    <x-slot name="title">Tab Component</x-slot>
    <h1 class="page-title">Tab</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Organize and display data in tabs. The BladewindUI tab component is broken down into two parts. 
                The tab headings and the tab content. To prevent erratic behaviour of tabs it is very important to 
                provide a value for the <code class="inline text-red-500">name</code> attribute. In fact, the tabs won't be rendered without you specifying a name. 
                There isn't much customization available with the tab component.
            </p>
            <p>
                <x-bladewind::tab-group name="staff-loans">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="loans" active="true" label="Pending Loans" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="loans" active="true"> 
                            this is content for pending loans                    
                        </x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <pre class="language-markup line-numbers" data-line="1,3,5,12,14">
                    <code>
                        &lt;x-bladewind.tab-group name="staff-loans"&gt;

                            &lt;x-slot name="headings"&gt;

                                &lt;x-bladewind.tab-heading 
                                    name="loans" 
                                    active="true" 
                                    label="Pending Loans" /&gt;
                                    
                            &lt;/x-slot&gt;

                            &lt;x-bladewind.tab-body&gt;

                                &lt;x-bladewind.tab-content name="loans" active="true"&gt; 
                                    this is content for pending loans                    
                                &lt;/x-bladewind.tab-content&gt;

                            &lt;/x-bladewind.tab-body&gt;

                        &lt;/x-bladewind.tab-group&gt;
                    </code>
                </pre>
            </p>
            <br />
            <p>
                Let us breakdown what is happening with the tab component. We first define a tab group that will hold all the tab headings 
                and tab content. As stated earlier, it is very important to give this tab group a name. 
                <code class="inline text-red-500">&lt;x-bladewind.tab-group name="staff-loans"&gt;</code>.</p> 
            <p>
                Next, we need to define the tab headings we will click on to access the tab content. The tab headings are wrapped in a 
                <code class="inline">slot</code> named <code class="inline">headings</code>. <code class="inline text-red-500">&lt;x-slot name="headings"&gt;</code>. 
                The next step is to add the individual tab headings using the <code class="inline text-red-500">&lt;x-bladewind.tab-heading /&gt;</code>. 
                The individual tab headings also need to be named uniquely. The tab heading you want selected by default should have <code class="inline text-red-500">active="true"</code>. 
                This necessarily does not need to be the first tab. If you have four tab headings and the third needs to be selected by default, set <code class="inline text-red-500">active="true"</code> on the third tab heading.
            </p>
            <p>
                The final bit that ties the tab component all together is the <code class="inline text-red-500">&lt;x-bladewind.tab-body&gt;</code>. 
                This is the parent component that holds all the content for each corresponding tab heading. Content for each tab heading needs to be 
                defined in the <code class="inline text-red-500">&lt;x-bladewind.tab-content&gt;</code> tag that has the <b><em>same name</em></b> as it's corresponding tab heading. 
                The tab content that needs to be visible by default also needs to have <code class="inline text-red-500">active="true"</code> set. Let's look at an example of displaying four pictures from <a href="https://unsplash.com" target="_blank">Unsplash</a>.
            </p>
            <p>
                <x-bladewind::tab-group name="free-pics">

                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="unsplash-1" label="Lissete Laverde" />
                        <x-bladewind::tab-heading name="unsplash-2" label="Marko Pavlichenko" />
                        <x-bladewind::tab-heading name="unsplash-3" active="true" label="Yoonbae Cho" />
                        <x-bladewind::tab-heading name="unsplash-4" label="Sam Carter" />
                    </x-slot>

                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="unsplash-1"> 
                            <img src="/assets/images/lissete-laverde-z9Ropm8edsw-unsplash.jpg" 
                                alt="Picture by Lissete Laverde" />
                        </x-bladewind::tab-content>
                        <x-bladewind::tab-content name="unsplash-2"> 
                            <img src="/assets/images/marko-pavlichenko-WiBfaVKtbXo-unsplash.jpg" 
                                alt="Picture by Marko Pavlichenko" />
                        </x-bladewind::tab-content>
                        <x-bladewind::tab-content name="unsplash-3" active="true"> 
                            <img src="/assets/images/yoonbae-cho-Fes4eLW4mg0-unsplash.jpg" alt="Picture by Yoonbae Cho" />
                        </x-bladewind::tab-content>
                        <x-bladewind::tab-content name="unsplash-4"> 
                            <img src="/assets/images/sam-carter-JU1SVl4smHM-unsplash.jpg" alt="Picture by Sam Carter" />
                        </x-bladewind::tab-content>
                    </x-bladewind::tab-body>

                </x-bladewind::tab-group>
            </p>
            <p>
                <pre class="language-markup line-numbers" data-line="3,17">
                    <code>
                        &lt;x-bladewind.tab-group name="free-pics"&gt;

                            &lt;x-slot name="headings"&gt;
                                &lt;x-bladewind.tab-heading 
                                    name="unsplash-1" label="Lissete Laverde" /&gt;

                                &lt;x-bladewind.tab-heading 
                                    name="unsplash-2" label="Marko Pavlichenko" /&gt;

                                &lt;x-bladewind.tab-heading 
                                    name="unsplash-3" active="true" label="Yoonbae Cho" /&gt;

                                &lt;x-bladewind.tab-heading 
                                    name="unsplash-4" label="Sam Carter" /&gt;
                            &lt;/x-slot&gt;

                            &lt;x-bladewind.tab-body&gt;

                                &lt;x-bladewind.tab-content name="unsplash-1"&gt; 
                                    &lt;img src="/path/to/the/image/file" 
                                        alt="Picture by Lissete Laverde" /&gt;
                                &lt;/x-bladewind.tab-content&gt;

                                &lt;x-bladewind.tab-content name="unsplash-2"&gt; 
                                    &lt;img src="/path/to/the/image/file" 
                                        alt="Picture by Marko Pavlichenko" /&gt;
                                &lt;/x-bladewind.tab-content&gt;

                                &lt;x-bladewind.tab-content name="unsplash-3" active="true"&gt; 
                                    &lt;img src="/path/to/the/image/file" 
                                        alt="Picture by Yoonbae Cho" /&gt;
                                &lt;/x-bladewind.tab-content&gt;

                                &lt;x-bladewind.tab-content name="unsplash-4"&gt; 
                                    &lt;img src="/path/to/the/image/file" 
                                        alt="Picture by Sam Carter" /&gt;
                                &lt;/x-bladewind.tab-content&gt;

                            &lt;/x-bladewind.tab-body&gt;
                            
                        &lt;/x-bladewind.tab-group&gt;
                    </code>
                </pre><a name="colours"></a>
            </p><br />
            <p>&nbsp;</p>
            <p><h2>Different Colours</h2></p>
            <p>
                The tab component by default displays the active tab heading and its underline bar as blue. There are nine colours in total to pick from. To set your preferred colour set the <code class="inline text-red-500">color</code> attribute on the <code class="inline text-red-500">&lt;x-bladewind.tab-group&gt;</code> component.
            </p>
            <p>
                <x-bladewind::tab-group name="red-tab" color="red">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="red" active="true" label="Active Red Tab" />
                        <x-bladewind::tab-heading name="inactive-red" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="red" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-red"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="yellow-tab" color="yellow">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="yellow" active="true" label="Active Yellow Tab" />
                        <x-bladewind::tab-heading name="inactive-yellow" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="yellow" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-yellow"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="green-tab" color="green">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="green" active="true" label="Active Green Tab" />
                        <x-bladewind::tab-heading name="inactive-green" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="green" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-green"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="pink-tab" color="pink">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="pink" active="true" label="Active Pink Tab" />
                        <x-bladewind::tab-heading name="inactive-pink" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="pink" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-pink"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="cyan-tab" color="cyan">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="cyan" active="true" label="Active Cyan Tab" />
                        <x-bladewind::tab-heading name="inactive-cyan" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="cyan" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-cyan"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="gray-tab" color="gray">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="gray" active="true" label="Active Gray Tab" />
                        <x-bladewind::tab-heading name="inactive-gray" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="gray" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-gray"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="purple-tab" color="purple">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="purple" active="true" label="Active Purple Tab" />
                        <x-bladewind::tab-heading name="inactive-purple" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="purple" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-purple"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="orange-tab" color="orange">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="orange" active="true" label="Active Orange Tab" />
                        <x-bladewind::tab-heading name="inactive-orange" label="Inactive Tab" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="orange" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-orange"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <x-bladewind::tab-group name="blue-tab" color="blue">
                    <x-slot name="headings">
                        <x-bladewind::tab-heading name="blue" active="true" label="Active Blue Tab" />
                        <x-bladewind::tab-heading name="inactive-blue" label="Disabled Tab" disabled="true" />
                    </x-slot>
                    <x-bladewind::tab-body>
                        <x-bladewind::tab-content name="blue" active="true"></x-bladewind::tab-content>
                        <x-bladewind::tab-content name="inactive-blue"></x-bladewind::tab-content>
                    </x-bladewind::tab-body>
                </x-bladewind::tab-group>
            </p>
            <p>
                <pre class="language-markup line-numbers">
                    <code>
                        &lt;x-bladewind::tab-group name="red-tab" color="red"&gt;
                            &lt;x-slot name="headings"&gt;

                                &lt;x-bladewind::tab-heading 
                                    name="red" 
                                    active="true" 
                                    label="Active Red Tab" /&gt;

                                &lt;x-bladewind::tab-heading 
                                    name="inactive-red" 
                                    label="Inactive Tab" /&gt;

                            &lt;/x-slot&gt;

                            &lt;x-bladewind::tab-body&gt;

                                &lt;x-bladewind::tab-content 
                                    name="red" 
                                    active="true"&gt;&lt;/x-bladewind::tab-content&gt;

                                &lt;x-bladewind::tab-content 
                                    name="inactive-red"&gt;&lt;/x-bladewind::tab-content&gt;

                            &lt;/x-bladewind::tab-body&gt;

                        &lt;/x-bladewind::tab-group&gt;
                    </code>
                </pre><a name="attributes"></a>
            </p>
            
            <br />
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Tab component.</p>
            <p><h3>Tab Group Component Attributes</h3></p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td><em>blank</em></td>
                    <td>Unique name to identify the tab component by in case there are multiple tab groups on the same page.</td>
                </tr>
                <tr>
                    <td>headings</td>
                    <td><em>blank</em></td>
                    <td>This is a slot that accepts one or more <code class="inline">&lt;x-bladewind.tab-heading&gt;</code> components</td>
                </tr>
                <tr>
                    <td>color</td>
                    <td>blue</td>
                    <td>
                        There are nine colors to choose from. <br />
                        <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">blue</code> <code class="inline">pink</code>
                        <code class="inline">cyan</code> <code class="inline">purple</code> <code class="inline">gray</code> <code class="inline">orange</code>
                    </td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <p><h3>Tab Heading Component Attributes</h3></p>

            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>tab</td>
                    <td>Unique name to identify the tab heading.</td>
                </tr>
                <tr>
                    <td>label</td>
                    <td>tab</td>
                    <td>Text to display as the tab heading. This is what the user clicks on to switch tabs.</td>
                </tr>
                <tr>
                    <td>active</td>
                    <td>false</td>
                    <td>Specifies if the tab should be selected by default. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>disabled</td>
                    <td>false</td>
                    <td>Specifies if the tab should be disabled by default. Disabled tabs are faded out and do nothing when clicked on. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>url</td>
                    <td>default</td>
                    <td>By default tabs switch to their respective content. If you prefer your tab headings to load other urls when clicked on, set this attribute.
                    This url is called using <code class="inline">location.href</code></td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><h3>Tab Content Component Attributes</h3></p>

            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>tab</td>
                    <td>This name must be the same as name given to this content's tab heading.</td>
                </tr>
                <tr>
                    <td>active</td>
                    <td>false</td>
                    <td>Specifies if the tab should be selected by default. If this content's corresponding tab heading is active, this must also be set to active. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Tab with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind::tab-group name="red-tab" color="red"&gt;
                        &lt;x-slot name="headings"&gt;

                            &lt;x-bladewind::tab-heading 
                                name="red" 
                                active="true" 
                                label="Active Red Tab" /&gt;

                            &lt;x-bladewind::tab-heading 
                                name="inactive-red" 
                                disabled="true"
                                active="false"
                                url="/profile/settings"
                                label="Inactive Tab" /&gt;

                        &lt;/x-slot&gt;

                        &lt;x-bladewind::tab-body&gt;

                            &lt;x-bladewind::tab-content 
                                name="red" 
                                active="true"&gt;&lt;/x-bladewind::tab-content&gt;

                            &lt;x-bladewind::tab-content 
                                name="inactive-red"&gt;&lt;/x-bladewind::tab-content&gt;

                        &lt;/x-bladewind::tab-body&gt;

                    &lt;/x-bladewind::tab-group&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source files for this component are available in <code class="inline">resources/views/components/bladewind/tab-group.blade.php</code>, 
                <code class="inline">resources/views/components/bladewind/tab-heading.blade.php</code>, 
                <code class="inline">resources/views/components/bladewind/tab-body.blade.php</code> and 
                <code class="inline">resources/views/components/bladewind/tab-content.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-tab');
        </script>
    </x-slot>
</x-app>