<x-app>
    <x-slot name="title">Filepicker Component</x-slot>
    <h1 class="page-title">Filepicker</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Select a file from your computer. If the selected file is an image you get to see a preview of the file. Heavy images will take a couple of seconds to render the preview.
            </p>
            <x-bladewind::filepicker name="dp" />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.filepicker name="dp" /&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            <p>It is possible to change the placeholder text</p>
            <x-bladewind::filepicker 
                name="proof_of_payment"
                placeholder="Upload proof of payment"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers" data-line="3">
                <code>
                    &lt;x-bladewind.filepicker 
                        name="proof_of_payment"
                        placeholder="Upload proof of payment"  /&gt;
                </code>
            </pre>
            <div class="pb-10"></div>
            
            <h3 class="pb-2 ">Accept Only Specific File Types</h3>
            <x-bladewind::filepicker placeholder="Upload a PDF" name="pdf_only" accepted_file_types=".pdf"  />
            <div class="py-2"></div>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind::filepicker 
                        name="pdf_only" 
                        placeholder="Upload a PDF"
                        accepted_file_types=".pdf"  /&gt;
                </code>
            </pre>
            <br />
            <p>
                <x-bladewind::alert type="warning" show_close_icon="false">
                    To prevent erratic behaviour when using the filepicker multiple times on the same page, you should give each filepicker a unique name. You can do this by setting the <code class="inline">name</code> attribute on the filepicker.
                </x-bladewind::alert>
            </p>
            <div class="py-2"></div>
            
           <a name="attributes"></a>
           <div>&nbsp;</div>
           
            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Filepicker component.</p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>bw-filepicker</td>
                    <td>Name for the filepicker. So if you named the filepicker <code>profile_pic</code>, the resulting html will be 
                    <code class="inline text-red-500">&lt;input type="file" class="bw-profile_pic" name="profile_pic" ../&gt;</code></td>
                </tr>
                <tr>
                    <td>accepted_file_types</td>
                    <td>audio/*, video/*, image/*, .pdf</td>
                    <td>One or a comma separated list of any of the mimetypes <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">available here</a>.</td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>Select a file</td>
                    <td>Placeholder text to display</td>
                </tr>
                <tr>
                    <td>required</td>
                    <td>false</td>
                    <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Filepicker with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.filepicker 
                        name="profile_pic"
                        required="false"
                        placeholder="Choose a profile picture" 
                        accepted_file_types=".jpg, .png" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources/views/components/bladewind/filepicker.blade.php</code>
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
            selectNavigationItem('.component-filepicker');
        </script>
    </x-slot>
</x-app>