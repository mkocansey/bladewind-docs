<x-app>
    <x-slot name="title">Centered Content Component</x-slot>
    <h1 class="page-title">Centered Content</h1>
    <div class="flex">
        <div class="grow w-3/4">
            <p>
                Center content within a container. This container could be any block level element, say a <code class="inline">div</code>
            </p>
            
            <x-bladewind::centered-content size="tiny">
                <x-bladewind::card>
                    this card is centered in this column
                </x-bladewind::card>
            </x-bladewind::centered-content>

            <p>
                <pre class="language-markup line-numbers" data-line="1">
                    <code>
                        &lt;x-bladewind::centered-content size="tiny"&gt;

                            &lt;x-bladewind::card&gt;
                                this content is centered in this column
                            &lt;/x-bladewind::card&gt;

                        &lt;/x-bladewind::centered-content&gt;
                    </code>
                </pre>
            </p>
            <br />
            <p>
                There are different sizes for the centered content component which are too wide for this documentation space. Try them out in your layouts to see how they look.
            </p>
            <x-bladewind::centered-content size="small">
                <x-bladewind::card>
                    this card is centered in this column
                </x-bladewind::card>
            </x-bladewind::centered-content>

            <p>
                <pre class="language-markup line-numbers" data-line="1">
                    <code>
                        &lt;x-bladewind::centered-content size="small"&gt;

                            &lt;x-bladewind::card&gt;
                                this content is centered in this column
                            &lt;/x-bladewind::card&gt;

                        &lt;/x-bladewind::centered-content&gt;
                    </code>
                </pre>
            </p>

           <a name="attributes"></a>
           <br />
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Centered Content component.</p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>size</td>
                    <td>default</td>
                    <td><code class="inline">tiny</code>  <code class="inline">small</code> <code class="inline">medium</code> <code class="inline">big</code> <code class="inline">xl</code> <code class="inline">xxl</code> <code class="inline">omg</code></td>
                </tr>
            </x-bladewind::table>
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
            selectNavigationItem('.component-centered-content');
        </script>
    </x-slot>
</x-app>