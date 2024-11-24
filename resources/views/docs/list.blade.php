<x-app>
    <x-slot:title>List View Component</x-slot:title>
    <x-slot:page_title>List View</x-slot:page_title>

    <p>
        Display a list of items. The list view component mimicks the <code class="inline">&lt;ul&gt;&lt;li&gt;...&lt;/li&gt;&lt;/ul&gt;</code> tags.
        The component makes use of two tags to render the list of items. Just like when using a <code class="inline">&lt;li&gt;&lt;/li&gt;</code>, the user is completely in charge of what content goes in there.
        All the list view component does is draw fine lines between your items. Every top level block element is flexed into its own column. The first top level block element has no left padding so you'll
        need to factor that into your design when using this component.
    </p>

    <x-bladewind::card reduce_padding="true">
        <x-bladewind::list-view compact="true">
            <x-bladewind::list-item>
                <x-bladewind::avatar size="small" image="/assets/images/me.jpeg" />
                <div class="ml-3">
                    <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Michael K. Ocansey</div>
                    <div class="text-sm text-slate-500 truncate">mike@bladewindui.com</div>
                </div>
            </x-bladewind::list-item>
            <x-bladewind::list-item>
                <x-bladewind::avatar size="small" image="" />
                <div class="ml-3">
                    <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Anonymous Jackson</div>
                    <div class="text-sm text-slate-500 truncate">fake@person.com</div>
                </div>
            </x-bladewind::list-item>
            <x-bladewind::list-item>
                <x-bladewind::avatar size="small" image="/assets/images/issah.jpg" />
                <div class="ml-3">
                    <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Catherine Gerald</div>
                    <div class="text-sm text-slate-500 truncate">kate.gee@gmail.com</div>
                </div>
            </x-bladewind::list-item>
            <x-bladewind::list-item>
                <x-bladewind::avatar size="small" image="/assets/images/audrey.jpeg" />
                <div class="ml-3">
                    <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Audrey Munyiva</div>
                    <div class="text-sm text-slate-500 truncate">audrey@munyiva.com</div>
                </div>
            </x-bladewind::list-item>
        </x-bladewind::list-view>
    </x-bladewind::card>

    <pre class="language-markup line-numbers" data-line="3,5,19">
        <code>
            &lt;x-bladewind::card&gt;

                &lt;x-bladewind::list-view&gt;

                    &lt;x-bladewind::list-item&gt;

                        &lt;x-bladewind::avatar
                            size="small"
                            image="/path/to/the/image/file" /&gt;
                        &lt;div class="ml-3"&gt;
                            &lt;div class="text-sm font-medium text-slate-900"&gt;
                                Michael K. Ocansey
                            &lt;/div&gt;
                            &lt;div class="text-sm text-slate-500 truncate"&gt;
                                kabutey@gmail.com
                            &lt;/div&gt;
                        &lt;/div&gt;

                    &lt;/x-bladewind::list-item&gt

                    &lt;x-bladewind::list-item&gt;
                        &lt;x-bladewind::avatar
                            size="small"
                            image="/path/to/the/image/file"
                        &lt;div class="ml-3"&gt;
                            &lt;div class="text-sm font-medium text-slate-900"&gt;
                                Michael K. Ocansey
                            &lt;/div&gt;
                            &lt;div class="text-sm text-slate-500 truncate"&gt;
                                kabutey@gmail.com
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/x-bladewind::list-item&gt;
                    ...
                &lt;/x-bladewind::list-view&gt;

            &lt;/x-bladewind::card&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The <code class="inline">&lt;x-bladewind::list-item&gt;</code> component creates a flex container.
    </x-bladewind::alert>
    <p>
        By default the list view component sits on a white background. You can remove this by setting the <code class="inline text-red-500">transparent="true"</code> attribute. You can then set a different background colour using the <code class="inline text-red-500">class</code> attribute.
    </p>

    <x-bladewind::list-view transparent="true">
        <x-bladewind::list-item>
            <x-bladewind::avatar size="small" image="/assets/images/me.jpeg" />
            <div class="ml-3">
                <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Michael K. Ocansey</div>
                <div class="text-sm text-slate-500 truncate">mike@bladewindui.com</div>
            </div>
        </x-bladewind::list-item>
        <x-bladewind::list-item>
            <x-bladewind::avatar size="small" image="" />
            <div class="ml-3">
                <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Anonymous Jackson</div>
                <div class="text-sm text-slate-500 truncate">fake@person.com</div>
            </div>
        </x-bladewind::list-item>
        <x-bladewind::list-item>
            <x-bladewind::avatar size="small" image="/assets/images/issah.jpg" />
            <div class="ml-3">
                <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Catherine Gerald</div>
                <div class="text-sm text-slate-500 truncate">kate.gee@gmail.com</div>
            </div>
        </x-bladewind::list-item>
        <x-bladewind::list-item>
            <x-bladewind::avatar size="small" image="/assets/images/audrey.jpeg" />
            <div class="ml-3">
                <div class="text-sm font-medium text-slate-900 dark:text-slate-200">Audrey Munyiva</div>
                <div class="text-sm text-slate-500 truncate">audrey@munyiva.com</div>
            </div>
        </x-bladewind::list-item>
    </x-bladewind::list-view>

    <pre class="language-markup line-numbers" data-line="1">
        <code>
            &lt;x-bladewind::list-view transparent="true"&gt;

                &lt;x-bladewind::list-item&gt;

                    &lt;x-bladewind::avatar
                        size="small"
                        image="/path/to/the/image/file" /&gt;
                    &lt;div class="ml-3"&gt;
                        &lt;div class="text-sm font-medium text-slate-900"&gt;
                            Michael K. Ocansey
                        &lt;/div&gt;
                        &lt;div class="text-sm text-slate-500 truncate"&gt;
                            kabutey@gmail.com
                        &lt;/div&gt;
                    &lt;/div&gt;

                &lt;/x-bladewind::list-item&gt;
                ...
            &lt;/x-bladewind::list-view&gt;
        </code><a name="attributes"></a>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the List View component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>transparent</td>
            <td>false</td>
            <td>Should the background of the component be transparent or placed on a white background.<br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>compact</td>
            <td>false</td>
            <td>If set to true, the spacing between the list items are reduced from 16px to 8px.<br /><code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>class</td>
            <td><em>blank</em></td>
            <td>Any additional css you wish to add.</td>
        </tr>
    </x-bladewind::table>

    <h3>List View with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::list-view compact="true" transparent="true" class="bg-yellow-50"&gt;

                &lt;x-bladewind::list-item&gt;

                    &lt;x-bladewind::avatar
                        size="small"
                        image="/path/to/the/image/file" /&gt;
                    &lt;div class="ml-3"&gt;
                        &lt;div class="text-sm font-medium text-slate-900"&gt;
                            Michael K. Ocansey
                        &lt;/div&gt;
                        &lt;div class="text-sm text-slate-500 truncate"&gt;
                            kabutey@gmail.com
                        &lt;/div&gt;
                    &lt;/div&gt;

                &lt;/x-bladewind::list-item&gt;
                ...
            &lt;/x-bladewind::list-view&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > list-view.blade.php</code> and
        <code class="inline">resources > views > components > bladewind > list-item.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-list');
        </script>
    </x-slot>
</x-app>
