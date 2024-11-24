<x-app>
    <x-slot:title>Filepicker Component</x-slot:title>
    <x-slot:page_title>Filepicker</x-slot:page_title>

    <p>
        This component invokes the default HTML File input but adds a few aesthetic options. It allows users to select files from their computer. If the selected file is an image you get to see a preview of the file. Large images will take a couple of seconds to render a preview.
    </p>
    <x-bladewind::filepicker name="logo" />

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::filepicker name="logo" /&gt;
        </code>
    </pre>

    <p>It is possible to change the placeholder text and even mark the field as required.</p>
    <x-bladewind::filepicker
        name="proof_of_payment"
        required="true"
        placeholder="Upload proof of payment"  />

    <pre class="language-markup line-numbers" data-line="3">
<code>
&lt;x-bladewind::filepicker
    name="proof_of_payment"
    required="true"
    placeholder="Upload proof of payment"  /&gt;
</code>
    </pre>

    <h2 id="file-types">Accept Only Specific File Types</h2>
    <p>
        The component allows you to restrict the type of files users can upload by setting the <code class="inline text-red-500">accepted_file_types</code> attribute.
        You can either specify one or a comma separated list of any of the <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">MIME types available here</a>.
        You can either specify MIME types or file extensions. You can have a comma separated mixture of file extensions and MIME types. Note however, the file extensions need to have the dot prefix. Example:
        <code class="text-red-500 inline">accepted_file_types="image/*, .pdf, .xlsx"</code>
    </p>
    <x-bladewind::filepicker placeholder="Upload a PDF" name="pdf_only" accepted_file_types=".pdf"  />

    <pre class="language-markup line-numbers" data-line="4">
<code>
&lt;x-bladewind::filepicker
    name="pdf_only"
    placeholder="Upload a PDF"
    accepted_file_types=".pdf"  /&gt;
</code>
    </pre>

    <h2 id="file-sizes">Restrict File Sizes</h2>
    <p>
        You can restrict the size of files your users are allowed to upload by defining the <code class="inline text-red-500">max_file_size</code> attribute.
        The file size is measured in megabytes (mb) and you don't need to add the 'mb'. Just the number. The default max_file_size is 5 (5mb).
        The component will display an error if the user uploads a file larger than what is specified in <code class="inline">max_file_size</code>.
        If you expect your users to upload really huge files, remember to set this attribute so your users don't get restricted by the default of 5mb.
    </p>
    <x-bladewind::filepicker placeholder="Upload a PDF" name="pdf_only_1mb" accepted_file_types=".pdf" max_file_size="1"  />

    <pre class="language-markup line-numbers" data-line="4">
<code>
&lt;x-bladewind::filepicker
    name="pdf_only"
    placeholder="Upload a PDF"
    max_file_size="1"
    accepted_file_types=".pdf"  /&gt;
</code>
    </pre>

    <h2 id="edit-mode">Edit Mode</h2>
    <p>
        Getting the Filepicker to work in edit mode is a little tricky, especially since people save files differently in their projects.
        Let's take a look at three ways files are probably stored in projects at the database level.
    </p>
    <h3>Example 1</h3>
    <x-bladewind::table>
        <x-slot name="header">
            <th>id</th>
            <th>file_name</th>
            <th>date_created</th>
        </x-slot>
        <tr>
            <td>13</td>
            <td><code>user-profile-for-usr-13.jpg</code></td>
            <td>2023-08-26 15:11:12</td>
        </tr>
    </x-bladewind::table>

    <h3>Example 2</h3>
    <x-bladewind::table>
        <x-slot name="header">
            <th>id</th>
            <th>file_name</th>
            <th>date_created</th>
        </x-slot>
        <tr>
            <td>13</td>
            <td><code>/uploads/profiles/usr-13.jpg</code></td>
            <td>2023-08-26 15:11:12</td>
        </tr>
    </x-bladewind::table>

    <h3>Example 3</h3>
    <x-bladewind::table>
        <x-slot name="header">
            <th>id</th>
            <th>file_name</th>
            <th>date_created</th>
        </x-slot>
        <tr>
            <td>13</td>
            <td><code>https://cdn.bldw.io/images/usr-13.jpg</code></td>
            <td>2023-08-26 15:11:12</td>
        </tr>
    </x-bladewind::table>
    <br />
    <br />
    <p>
        You can tell from the examples above that <code class="inline">FILE_NAME</code> is saved in three different ways.
        Some save just the file name, others the file name and the directories they can be found in, others save the entire url to the file.
        These three variations make it difficult to display a preview in the Filepicker component when in edit mode. To solve this, when in edit mode,
        you will need to pass the <b>full URL</b> of the file in the <code class="inline text-red-500">url</code> attribute.
        If the file passed is an image, a preview will be displayed.
    </p>

    <pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::filepicker
    url="https://bladewindui.com/images/404.svg"
    placeholder="Profile Picture"
    name="dp" /&gt;
</code>
    </pre>

    <p>
        <x-bladewind::filepicker
            placeholder="Profile Picture"
            name="dp"
            selected_value="404.svg"
            url="/assets/images/sam-carter-JU1SVl4smHM-unsplash.jpg"  />
    </p>
    <br />
    <p>
        Let us assume you have the filepicker as part of a longer form.
        In edit mode, the user can either select a new file, keep the current file or remove the file that was saved earlier.
        If the user decides to keep the current file, and edits other fields in the form, you will probably need to write
        the FILE_NAME value (from the examples above) back to your API or database. But mind you, the Filepicker does not
        know what your FILE_NAME is since the <code class="inline text-red-500">url</code> attribute has the full http url to your file.
        In order for the Filepicker to send you back just the file name you intend to save to your API or database, pass just the FILE_NAME in the <code class="text-red-500 inline">selected_value</code> attribute.
        FILE_NAME here refers to the exact value of the file as received from your API or database.
    </p>
    <pre class="language-markup line-numbers" data-line="3">
<code>
&lt;x-bladewind::filepicker
    url="https://bladewindui.com/images/404.svg"
    selected_value="404.svg"
    placeholder="Profile Picture"
    name="dp" /&gt;
</code>
    </pre>
    <p>
        From the example above, if the user does not select a new file and submits the form, BladewindUI will send back "404.svg" as the value of the file since that was what it received in edit mode and the user made no changes.
    </p>
    <p>
        In this case, the Filepicker creates a hidden input field with the value of <code class="text-red-500 inline">selected_value</code>
        as shown below.
    </p>
    <pre class="language-markup line-numbers">
        <code>
            // note the name of the hidden field takes the name of the Filepicker and
            // prefixes it with selected_

            &lt;input type="hidden" value="404.svg" name="selected_dp" /&gt;
        </code>
    </pre>

    <p>
        We named our filepicker <code class="inline">dp</code>. When the form is submitted you will be able to access the file name using any of the ways below.
    </p>
    <pre class="language-js">
        <code>
            $request-&gt;get('selected_dp');
            $request-&gt;input('selected_dp');
            $request-&gt;selected_dp;
        </code>
    </pre>
<h3>Non Image Files</h3>
<p>The preview below is displayed when the <code class="inline text-red-500">url</code> passed in edit mode is not an image.
    <pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::filepicker
    url="https://bladewindui.com/files/2023-Financials.pdf"
    selected_value="2023-Financials.pdf"
    placeholder="Select Report"
    name="report" /&gt;
</code>
    </pre>
    <p>
        <x-bladewind::filepicker
            placeholder="Select Report"
            name="report"
            selected_value="2023-Financials.pdf"
            url="https://bladewindui.com/files/2023-Financials.pdf"  />
    </p>

    <h2 id="acessing-values">Accessing Filepicker Values</h2>
    <p>
        The Filepicker component by default creates a regular HTML file input field using the name you pass to the component. Let us assume our filepicker is named "report", the following HTML file input is generated.
    </p>

    <pre class="language-markup">
        <code>
            &lt;input type="file" name="report" class="bw-report " id="bw_report" accept=".pdf" /&gt;
        </code>
    </pre>
    <p>
        You can retrieve the value of the above field when the form is submitted using any of the methods below:
    </p>
    <pre class="language-js line-numbers">
        <code>
            // vanilla PHP
            $file = $_FILES["report"];

            // the Laravel way
            $file = $request-&gt;file('report');
        </code>
    </pre>
    <h3>File As Base64</h3>
    <p>
        The BladewindUI Filepicker also generates a base64 version of the selected file and stores it in a hidden HTML textarea field. Still using our report example, the below textarea will be created.
    </p>
    <x-bladewind::alert type="info" show_close_icon="false">
        Note the <b>b64_</b> prefix used in the name of the textarea field. Also note, if a <code class="inline">selected_value</code> is passed in edit mode, there will be no base64 version generated unless the user
        explicitly selects a new file. The field will exist but be empty.
    </x-bladewind::alert>
    <pre class="language-markup">
        <code>
            &lt;textarea class="b64-report" name="b64_report"&gt;&lt;/textarea&gt;
        </code>
    </pre>
    <p>
        You can retrieve the value of the above field when the form is submitted using any of the methods below:
    </p>
    <pre class="language-js line-numbers">
        <code>
            $file_b64 = $request-&gt;get('b64_report');
            $file_b64 = $request-&gt;input('b64_report');
            $file_b64 = $request-&gt;b64_report;
        </code>
    </pre>
    <br />
    <p>
        In some hosting cases where you have no control over <code class="inline">post_max_size</code> and <code class="inline">upload_max_filesize</code>, you may want to set <code class="inline text-red-500">base64="false"</code>.
        This will ensure the base64 version of the uploaded file is not submitted with the posted form data.
    </p>
    <h3>Value While In Edit Mode</h3>
    <p>
        The <a href="#edit-mode">Edit Mode</a> section has extensively highlighted this but in summary, if a <code class="inline">selected_value</code> is passed to the Filepicker
        in edit mode and the user makes no changes to the field (user does not select a new file), the following HTML hidden input field is generated.
    </p>
    <x-bladewind::alert type="info" show_close_icon="false">
        Note the <b>selected_</b> prefix used in the name of the input field.
    </x-bladewind::alert>
    <pre class="language-markup">
        <code>
            &lt;input type="hidden" name="selected_report" class="selected_report" /&gt;
        </code>
    </pre>
    <p>
        You can retrieve the value of the above field when the form is submitted using any of the methods below:
    </p>
    <pre class="language-js line-numbers">
        <code>
            $file = $request-&gt;get('selected_report');
            $file = $request-&gt;input('selected_report');
            $file = $request-&gt;selected_report;
        </code>
    </pre>
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Filepicker component.</p>
    @include('docs/announcement')
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
            <td>selected_value</td>
            <td><em>blank</em></td>
            <td>File name when in edit mode</td>
        </tr>
        <tr>
            <td>selected_value_class</td>
            <td><em>blank</em></td>
            <td>Relevant only when in edit mode and <code class="inline">url</code> is an image. This is CSS applied to the image preview.</td>
        </tr>
        <tr>
            <td>url</td>
            <td><em>blank</em></td>
            <td>Useful in edit mode. Full path to the file to be displayed in the filepicker. If the url ends with an image file a preview is displayed, otherwise the <code class="inline">selected_value</code> will be displayed.</td>
        </tr>
        <tr>
            <td>base64</td>
            <td>true</td>
            <td>Determines if the generated base64 data should be submitted with the form. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>required</td>
            <td>false</td>
            <td>Determines if the placeholder text should have an asterisk appended to it or not. Value needs to be set as a string not boolean.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
    </x-bladewind::table>

    <h3>Filepicker with all attributes defined</h3>
    <pre class="language-markup line-numbers">
<code>
&lt;x-bladewind::filepicker
    name="profile_pic"
    required="false"
    placeholder="Choose a profile picture"
    accepted_file_types=".jpg, .png"
    selected_value="404.svg"
    selected_value_class="h-72"
    base64="false"
    url="https://bladewindui.com/images/404.svg" /&gt;
</code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > filepicker.blade.php</code>
    </x-bladewind::alert>
    <p>
        <x-bladewind::alert type="info" show_close_icon="false">
            To prevent erratic behaviour when using multiple Filepickers on the same page, you should give each Filepicker a unique name. You can do this by setting the <code class="inline">name</code> attribute on the filepicker.
        </x-bladewind::alert>
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#file-types">Restrict file types</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#file-sizes">Restrict file sizes</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#edit-mode">Edit mode</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#acessing-values">Access filepicker values</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-filepicker');
        </script>
    </x-slot>
</x-app>
