<x-app>
    <x-slot name="title">Avatar Component</x-slot>
    <h1 class="page-title">Avatar</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                The avatar component allows you to diplay a rounded picture at an avatar size. This size is of course customizable. 
                This component can be useful for displaying pictures of logged in users, a contacts list, employees directory etc.
                <a name="single"></a>
                The avatar component can either display a single image or a horizontal stack of images. Images are displayed as inline-block elements. 
            </p>
            
            <h2>Single Avatar</h2>
            <x-bladewind::avatar image="/assets/images/avatar1.jpg" class="mb-3" />
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.avatar image="/path/to/the/image/file" /&gt;
                </code><a name="sizes"></a>
            </pre>

            <p>&nbsp;</p>
            <h2>Different Sizes</h2>
            <p>You can specify a size for the avatar. See the full <a href="#attributes">list of attributes</a> for the available sizes. The default size is <code class="inline text-red-500">regular</code></p>
            <x-bladewind::avatar image="/assets/images/avatar5.png" size="tiny" />
            <x-bladewind::avatar image="/assets/images/avatar4.png" size="small" />
            <x-bladewind::avatar image="/assets/images/avatar3.jpg" size="medium" />
            <x-bladewind::avatar image="/assets/images/avatar2.jpg" />
            <x-bladewind::avatar image="/assets/images/avatar1.jpg" size="big" />
            <x-bladewind::avatar image="/assets/images/avatar2.jpg" size="huge" />
            <x-bladewind::avatar image="/assets/images/avatar3.jpg" size="omg" />
            <br />
            <br />
            <pre class="language-markup line-numbers" data-line="3,7,11,19,23,27">
                <code>
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="tiny" /&gt;

                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="small" /&gt;
                
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="medium" /&gt;
            
                 // this is the default
                 &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" /&gt;
            
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="big" /&gt;
            
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="huge" /&gt;

                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    size="omg" /&gt;
                </code><a name="stack"></a>
            </pre>
           
            <p>&nbsp;</p>
            <h2>Stacked Avatars</h2>
            <p>
                Stacked avatars have an overlapping effect. The component will not restrict you from stacking avatars of different sizes but, for a more appealing visual effect, stacking images of the same size is advised.
                You can achieve stackability by setting the <code class="inline text-red-500">stacked="true"</code> attribute on each avatar that you want as part of the stack.
            </p> 

            <x-bladewind::avatar stacked="true" image="/assets/images/avatar1.jpg" />
            <x-bladewind::avatar stacked="true" image="/assets/images/avatar2.jpg" />
            <x-bladewind::avatar stacked="true" image="/assets/images/avatar3.jpg" />
            <x-bladewind::avatar stacked="true" image="/assets/images/avatar5.png" />
            <br><br />
            <pre class="language-markup line-numbers" data-line="3,7,11,15">
                <code>
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    stacked="true" /&gt;

                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    stacked="true" /&gt;

                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    stacked="true" /&gt;
                
                &lt;x-bladewind.avatar 
                    image="/path/to/the/image/file" 
                    stacked="true" /&gt;
            
                </code><a name="attributes"></a>
            </pre>


            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Avatar component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>image</td>
                    <td><em class="text-xs">public/bladewind/images/avatar.png</em></td>
                    <td>The url to the image file. By default a generic headshot image is used if no url is passed.</td>
                </tr>
                <tr>
                    <td>alt</td>
                    <td>image</td>
                    <td>The text to display as the value for the image's alt attribute.</td>
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
                    <td>class</td>
                    <td>mr-2 mt-2</td>
                    <td>Any additonal css classes can be added using this attribute.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Avatar with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.avatar 
                        image="/path/to/the/image/file" 
                        alt="company logo"
                        size="big"
                        stacked="true"
                        class="ring-blue-200 ring-offset-2" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <p>
                <x-bladewind::alert show_close_icon="false">
                    The source file for this component is available in <code class="inline">resources > views > components > bladewind > avatar.blade.php</code>
                </x-bladewind::alert>
            </p>
            <p>
                The avatars above were taken from <br />
                <a href="https://pixabay.com/illustrations/man-afro-american-black-skin-young-7142125/" target="_blank">https://pixabay.com/illustrations/man-afro-american-black-skin-young-7142125/</a><br />
                <a href="https://pixabay.com/illustrations/woman-face-young-female-beauty-5924366/" target="_blank">https://pixabay.com/illustrations/woman-face-young-female-beauty-5924366/</a><br />
                <a href="https://pixabay.com/illustrations/woman-princess-fantasy-beautiful-7167023/" target="_blank">https://pixabay.com/illustrations/woman-princess-fantasy-beautiful-7167023/</a><br />
                <a href="https://pixabay.com/illustrations/woman-beautiful-beauty-girl-female-7167024/" target="_blank">https://pixabay.com/illustrations/woman-beautiful-beauty-girl-female-7167024/</a><br />
                <a href="https://pixabay.com/illustrations/woman-african-american-avatar-5963386/" target="_blank">https://pixabay.com/illustrations/woman-african-american-avatar-5963386/</a><br />
            </p>
            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#single">Single avatar</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#stack">Stacked avatars</a></div>
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