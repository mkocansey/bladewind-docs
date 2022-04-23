<x-app>
    <x-slot name="title">Avatar Component</x-slot>
    <h1 class="page-title">Avatar</h1>
    <div class="flex">
        <div class="grow w-3/4">
        <a name="single"></a>
            <p>
                The avatar component allows you to diplay a rounded picture at an avatar size. Of course, the size is customizable. 
                This component can be useful for displayed pictures of logged in users, a contacts list, employees directory etc.
                The avatar component can either display a single image or a horizontal stack of images. Images are displayed as inline-block elements. 
            </p>
            
            <a name="sizes"><h2>Single Image</h2></a>
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" css="mb-3" />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.avatar url="/path/to/the/image/file" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <h2>Different Sizes</h2>
            <p>You can specify a size for the avatar. See the full <a href="#attributes">list of attributes</a> for the available sizes. The default is <code class="inline text-red-500">size="regular"</code></p>
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="tiny" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="small" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="medium" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="big" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="huge" />
            <x-bladewind.avatar url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" size="omg" />
            <br />
            <br />
            <pre class="language-markup line-numbers">
                <code>
                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="tiny" /&gt;

                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="small" /&gt;
                
                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="medium" /&gt;
            
                 // this is the default
                 &lt;x-bladewind.avatar url="/path/to/the/image/file" /&gt;
            
                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="big" /&gt;
            
                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="huge" /&gt;

                &lt;x-bladewind.avatar url="/path/to/the/image/file" size="omg" /&gt;
                </code>
            </pre>
           
            <p>&nbsp;</p>
            <a name="stacked"><h2>Stacked Images</h2></a>
            <p>Stacked avatars have an overlapping effect. The component will not restrict you from stacking avatars of different sizes but, for a more appealing visual effect, stacking images of the same size is advised.</p>

            <x-bladewind.avatar stacked="true" url="data:image/jpeg;base64,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" />
            <x-bladewind.avatar stacked="true" url="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" />
            <x-bladewind.avatar stacked="true" url="data:image/jpeg;base64,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" />
            <x-bladewind.avatar stacked="true" url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7n9_1gR1PQc9MSg7ss7CSF2SV_Flmv11aDg&usqp=CAU" />
            <br><br />
            <pre class="language-markup line-numbers">
                <code>
                &lt;x-bladewind.avatar url="/path/to/the/image/file" stacked="true" /&gt;

                &lt;x-bladewind.avatar url="/path/to/the/image/file" stacked="true" /&gt;

                &lt;x-bladewind.avatar url="/path/to/the/image/file" stacked="true" /&gt;
                
                &lt;x-bladewind.avatar url="/path/to/the/image/file" stacked="true" /&gt;
            
                </code>
            </pre>


            <p>&nbsp;</p>
            <a name="attributes"><h2>Full List Of Attributes</h2></a>
            <p>The table below shows a comprehensive list of all the attributes available for the Avatar component.</p>
            <x-bladewind.table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>url</td>
                    <td><em class="text-xs">public/bladewind/images/avatar.png</em></td>
                    <td>The url to the image. By default a generic headshot image is used if no url is passed.</td>
                </tr>
                <tr>
                    <td>alt</td>
                    <td>image</td>
                    <td>The text to display as the alt attribute value of the image.</td>
                </tr>
                <tr>
                    <td>size</td>
                    <td>regular</td>
                    <td>Defines the size of the avatar. <br><code class="inline">tiny</code> <code class="inline">small</code> <code class="inline">medium</code><code class="inline">regular</code> <code class="inline">big</code><code class="inline">huge</code> <code class="inline">omg</code></td>
                </tr>
                <tr>
                    <td>stacked</td>
                    <td>false</td>
                    <td>Defines if the avatar images are displayed as a stack. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
                <tr>
                    <td>css</td>
                    <td>mr-2 mt-2</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind.table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Avatar with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind.avatar 
                        url="/path/to/the/image/file" 
                        alt="company logo"
                        size="big"
                        stacked="true"
                        css="ring-blue-200 ring-offset-2" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind.alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/avatar.blade.php</code>
            </x-bladewind.alert>
            <p>&nbsp;</p>

        </div>
        <div class="w-1/4 grow-0">
            <nav class="pl-8 fixed h-screen overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#single">Single image</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#stack">Stack of images</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-avatar');
        </script>
    </x-slot>
</x-app>