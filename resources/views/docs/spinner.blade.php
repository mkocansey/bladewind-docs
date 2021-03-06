<x-app>
    <x-slot name="title">Spinner Component</x-slot>
    <h1 class="page-title">Spinner</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Display a spinning icon
            </p>
            
            <x-bladewind::spinner  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            
            <x-bladewind::spinner size="medium"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner size="medium"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-bladewind::spinner size="big"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner size="big"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-bladewind::spinner size="xl"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner size="xl"  /&gt;
                </code>
            </pre>
            <div class="py-2"></div>
            <br />
            <x-bladewind::spinner size="omg"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner size="omg"  /&gt;
                </code>
            </pre>
           <a name="attributes"></a>
           <br />
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Spinner component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>size</td>
                    <td>small</td>
                    <td><code class="inline">small</code> <code class="inline">medium</code> <code class="inline">big</code> <code class="inline">xl</code> <code class="inline">omg</code></td>
                </tr>
                <tr>
                    <td>class</td>
                    <td>bw-spinner</td>
                    <td>Any additional css you wish to add.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Spinner with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.spinner 
                        size="medium"
                        class="m-0" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > spinner.blade.php</code>
            </x-bladewind::alert>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-spinner');
        </script>
    </x-slot>
</x-app>