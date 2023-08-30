<x-app>
    <x-slot:title>Avatar Component</x-slot:title>
    <x-slot:page_title>Avatar</x-slot:page_title>

    <p>
        The avatar component allows you to display a rounded picture at the usual avatar size. This size is of course customizable.
        This component can be useful for displaying pictures of logged-in users, a contacts list, directory of employees etc.
        The avatar component can either display a single image or a horizontal stack of images. Images are displayed as inline-block elements.
        A default image is used when the <code class="inline">image</code> attribute is either blank or not specified.
    </p>

    <h2 id="single">Single Avatar</h2>
    <x-bladewind::avatar image="/assets/images/issah.jpg" class="mb-3" />
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.avatar image="/path/to/the/image/file" /&gt;
        </code>
    </pre>
    <br />
    <p>
        The avatar component expects a value for its <code class="inline">image</code> attribute. A default image is however, used if the attribute is either blank or not specified.
    </p>
    <h2 id="sizes">Different Sizes</h2>
    <p>You can specify a size for the avatar. See the full <a href="#attributes">list of attributes</a> for the available sizes. The default size is <code class="inline text-red-500">regular</code></p>
    <x-bladewind::avatar image="/assets/images/edwin.jpeg" size="tiny" />
    <x-bladewind::avatar image="/assets/images/me.jpeg" size="small" />
    <x-bladewind::avatar image="/assets/images/audrey.jpeg" size="medium" />
    <x-bladewind::avatar image="/assets/images/francis.png" />
    <x-bladewind::avatar image="/assets/images/doc.png" size="big" />
    <x-bladewind::avatar image="/assets/images/rowe.jpeg" size="huge" />
    <x-bladewind::avatar image="/assets/images/issah.jpg" size="omg" />
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

    <h2 id="stack">Stacked Avatars</h2>
    <p>
        Stacked avatars have an overlapping effect. The component will not restrict you from stacking avatars of different sizes but, for a more appealing visual effect, stacking images of the same size is advised.
        You can achieve stackability by setting the <code class="inline text-red-500">stacked="true"</code> attribute on each avatar that you want as part of the stack.
    </p>

    <x-bladewind::avatar stacked="true" image="/assets/images/francis.png" />
    <x-bladewind::avatar stacked="true" image="/assets/images/rowe.jpeg" />
    <x-bladewind::avatar stacked="true" image="/assets/images/doc.png" />
    <x-bladewind::avatar stacked="true" image="/assets/images/issah.jpg" />
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

    <h2 id="attributes">Full List Of Attributes</h2>
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
            <td><em class="text-xs">public/vendor/bladewind/images/avatar.png</em></td>
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
            <td>Specifies the size of the avatar. <br><code class="inline">tiny</code> <code class="inline">small</code> <code class="inline">medium</code><code class="inline">regular</code> <code class="inline">big</code><code class="inline">huge</code> <code class="inline">omg</code></td>
        </tr>
        <tr>
            <td>stacked</td>
            <td>false</td>
            <td>Specifies if the avatar images are displayed as a stack. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>show_dot</td>
            <td>false</td>
            <td>Specifies if the avatar images have dot indicators. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>dot_color</td>
            <td>green</td>
            <td>Specifies what colour to use as the dot indicator. Only relevant if <em>show_dot=true</em>.<br><br>
                <code class="inline">primary</code>
                <code class="inline">blue</code> <code class="inline">red</code>
                <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
                <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code>
            </td>
        </tr>
        <tr>
            <td>dot_placement</td>
            <td>bottom</td>
            <td>Specifies where the dot indicator should be placed. Only relevant if <em>show_dot=true</em>.<br> <code class="inline">top</code> <code class="inline">bottom</code> </td>
        </tr>
        <tr>
            <td>show_ring</td>
            <td>true</td>
            <td>By default avatars show a ring around them. Setting this can turn it off or back on. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>class</td>
            <td>mr-2 mt-2</td>
            <td>Any additional css classes can be added using this attribute.</td>
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
                show_dot="true"
                show_ring="false",
                dot_color="red",
                dot_placement="top"
                class="ring-blue-200 ring-offset-2" /&gt;
        </code>
    </pre>

    <p>&nbsp;</p>
    <p>
        <x-bladewind::alert show_close_icon="false">
            The source file for this component is available in <code class="inline">resources > views > components > bladewind > avatar.blade.php</code>.
            The default image displayed when no image is passed is <code class="inline">public > vendor > bladewind > images > avatar.png</code>
        </x-bladewind::alert>
    </p>
    <p>&nbsp;</p>
    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#single">Single avatar</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#stack">Stacked avatars</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-avatar');
        </script>
    </x-slot:scripts>
</x-app>
