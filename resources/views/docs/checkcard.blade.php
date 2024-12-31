<x-app>
    <x-slot:title>CheckCard Component</x-slot:title>
    <x:slot:page_title>CheckCard</x:slot:page_title>
    <x-bladewind::notification />

    <p>
        This component is simply a prettier version of checkboxes. Define content in a card that needs to be checkable and give it a <code class="inline text-red-500">value</code>.
        This value is what will be passed when the form is selected. In its simplest form this is just a card with content you provide.
    </p>

    <x-bladewind::checkcards name="hosting">
        <x-bladewind::checkcards.card value="dOcean">
            DigitalOcean
        </x-bladewind::checkcards.card>
    </x-bladewind::checkcards>
    <br />
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::checkcards.card name="hosting" value="dOcean"&gt;
                DigitalOcean
            &lt;/x-bladewind::checkcards.card&gt;
        </code>
    </pre>
    <br />
    <p>
        For convenience the component provides a <code class="inline text-red-500">title</code> attribute that can also be passed in as a slot if you prefer some more customized styling of the title.
    </p>

    <x-bladewind::checkcards name="hosting-3">
        <div class="grid grid-cols-2 gap-4">
            <x-bladewind::checkcards.card name="hosting" value="AWS" title="Amazon Web Services">
                A subsidiary of Amazon that provides on-demand cloud computing platforms & APIs on a metered, pay-as-you-go basis
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card name="hosting" value="Azure" title="Microsoft Azure">
                The cloud computing platform developed by Microsoft. It has management, access and development of applications...
            </x-bladewind::checkcards.card>
        </div>
    </x-bladewind::checkcards>

    <br />
    <pre class="language-markup line-numbers" data-line="4">
        <code>
            &lt;x-bladewind::checkcards name="hosting-3" max="3"&gt;
                &lt;div class="grid grid-cols-2 gap-4"&gt;
                    &lt;x-bladewind::checkcards.card value="AWS"
                        title="Amazon Web Services"&gt;
                        A subsidiary of Amazon that provides on-demand ...
                    &lt;/x-bladewind::checkcards.card&gt;
                ...
                &lt;/div&gt;
            &lt;/x-bladewind::checkcards&gt;
        </code>
    </pre>

    <p>
        The selectable card takes up the width of its parent element. If you don't want the cards to take up the entire width you will need to restrict this using flex or grids.
    </p>

    <x-bladewind::checkcards name="hosting-small">
        <div class="grid grid-cols-3 gap-4">
            <x-bladewind::checkcards.card value="AWS">
                Amazon Web Services
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="Azure">
                Microsoft Azure
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="DO">
                DigitalOcean
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="GC">
                Google Cloud
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cloudy">
                Cloudinary
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cf">
                Cloudflare
            </x-bladewind::checkcards.card>
        </div>
    </x-bladewind::checkcards>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind::checkcards name="hosting-small" max="3"&gt;
                &lt;div class="grid grid-cols-3 gap-4"&gt;
                    &lt;x-bladewind::checkcards.card name="hosting" value="AWS"&gt;
                        Amazon Web Services
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="azure"&gt;
                        Microsoft Azure
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="dOcean"&gt;
                        DigitalOcean
                    &lt;/x-bladewind::checkcards.card&gt;
                ...
                &lt;/div&gt;
            &lt;/x-bladewind::checkcards&gt;
        </code>
    </pre>
    <h2 id="max">Max Selection</h2>
    <p>
        By default only one card can be selected at a time. You can increase this by setting the
        <code class="inline text-red-500">max</code> attribute to a positive integer greater than zero. The example below sets <code class="inline text-red-500">max="3"</code>,
        meaning only 3 cards can be selected.
    </p>

    <x-bladewind::checkcards name="hosting-max" max="3">
        <div class="grid grid-cols-3 gap-4">
            <x-bladewind::checkcards.card value="AWS">
                Amazon Web Services
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="Azure">
                Microsoft Azure
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="DO">
                DigitalOcean
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="GC">
                Google Cloud
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cloudy">
                Cloudinary
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cf">
                Cloudflare
            </x-bladewind::checkcards.card>
        </div>
    </x-bladewind::checkcards>
    <br />
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::checkcards name="hosting-small" max="3"&gt;
                &lt;div class="grid grid-cols-3 gap-4"&gt;
                    &lt;x-bladewind::checkcards.card name="hosting" value="AWS"&gt;
                        Amazon Web Services
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="azure"&gt;
                        Microsoft Azure
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="dOcean"&gt;
                        DigitalOcean
                    &lt;/x-bladewind::checkcards.card&gt;
                ...
                &lt;/div&gt;
            &lt;/x-bladewind::checkcards&gt;
        </code>
    </pre>

    <h3 id="max-errors">Max Selection Error Messages</h3>
    <p>
        If the user tries to select a card when the max has already been selected, you can either display an error message or say nothing. By default no error message is displayed.
        To display errors you will need to set <code class="inline text-red-500">show_error="true"</code>. The error message is displayed in the <a href="/component/notification">Notification</a> component.
        Ensure this component is included on any page where you want to use Checkable cards with errors. The actual error message to display can be defined by setting the
        <code class="inline text-red-500">error_heading</code> and <code class="inline text-red-500">error_message</code> attributes. If you don't specify these two attributes, the defaults will be used.
    </p>

    <x-bladewind::checkcards name="hosting-errors" max="3" show_error="true">
        <div class="grid grid-cols-3 gap-4">
            <x-bladewind::checkcards.card value="AWS">
                Amazon Web Services
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="Azure">
                Microsoft Azure
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="DO">
                DigitalOcean
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="GC">
                Google Cloud
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cloudy">
                Cloudinary
            </x-bladewind::checkcards.card>
            <x-bladewind::checkcards.card value="cf">
                Cloudflare
            </x-bladewind::checkcards.card>
        </div>
    </x-bladewind::checkcards>
    <br />
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::checkcards name="hosting-small" max="3"&gt;
                &lt;div class="grid grid-cols-3 gap-4"&gt;
                    &lt;x-bladewind::checkcards.card name="hosting" value="AWS"&gt;
                        Amazon Web Services
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="azure"&gt;
                        Microsoft Azure
                    &lt;/x-bladewind::checkcards.card&gt;

                    &lt;x-bladewind::checkcards.card name="hosting" value="dOcean"&gt;
                        DigitalOcean
                    &lt;/x-bladewind::checkcards.card&gt;
                ...
                &lt;/div&gt;
            &lt;/x-bladewind::checkcards&gt;
        </code>
    </pre>
    <br />
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Card component.</p>
    @include('docs/announcement')
    <h3 class="pb-2 ">Card Component Attributes</h3>
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>title</td>
            <td><em>blank</em></td>
            <td>Any title provided will become the card heading</td>
        </tr>
        <tr>
            <td>header</td>
            <td><em>blank</em></td>
            <td>Once a header slot is defined, the card splits into two uneven horizontal parts. The content of the header slot will be displayed first.</td>
        </tr>
        <tr>
            <td>footer</td>
            <td><em>blank</em></td>
            <td>Once a footer slot is defined, the content of the slot gets fixed to the base of the card as a footer.</td>
        </tr>
        <tr>
            <td>compact</td>
            <td>false</td>
            <td>This controls how much padding is in the card. Setting this attribute to <code class="inline">true</code> will reduce the padding in the card. This is useful for building cards like the contact list under <a href="#examples">practical examples</a> above.
            This attribute only works if header and footer are not set. <br /><code class="inline">true</code>  <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>has_shadow</td>
            <td>true</td>
            <td>This controls if the card should have a shadow effect. <br /><code class="inline">true</code>  <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>hover_effect</td>
            <td>false</td>
            <td>Displays an extra shadow on hover of the card.. <br /><code class="inline">true</code>  <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-card</td>
            <td>Any additional css classes can be added using this attribute. For example if you prefer to have non-rounded cards you can set <code class="inline">class="!rounded-none"</code>.</td>
        </tr>
    </x-bladewind::table>

    <h3 class="pb-2 ">Card with all attributes defined</h3>
<pre class="language-markup line-numbers">
<code>
    &lt;x-bladewind::card
        title="recent updates"
        has_shadow="true"
        hover_effect="false"
        compact="false"
        class="!rounded-none"&gt;

        &lt;x-slot:header&gt;...&lt;/x-slot:header&gt;
        &lt;x-slot:footer&gt;...&lt;/x-slot:footer&gt;

        ...

    &lt;/x-bladewind::card&gt;
</code>
</pre>

    <h3 class="pb-2 ">Selectable Card Component Attributes</h3>
    <p>The table below shows a comprehensive list of all the attributes available for the Contact Card component.</p>
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td><em>blank</em></td>
            <td>Name of the contact</td>
        </tr>
        <tr>
            <td>department</td>
            <td><em>blank</em></td>
            <td>Department of the contact.</td>
        </tr>
        <tr>
            <td>position</td>
            <td><em>blank</em></td>
            <td>Designation or position of the contact.</td>
        </tr>
        <tr>
            <td>image</td>
            <td><em>bladewind/images/avatar.png</em></td>
            <td>Picture of the contact.</td>
        </tr>
        <tr>
            <td>email</td>
            <td><em>blank</em></td>
            <td>Email of the contact.</td>
        </tr>
        <tr>
            <td>birthday</td>
            <td><em>blank</em></td>
            <td>Birthday of the contact.</td>
        </tr>
        <tr>
            <td>mobile</td>
            <td><em>blank</em></td>
            <td>Mobile of the contact.</td>
        </tr>
        <tr>
            <td>has_shadow</td>
            <td>true</td>
            <td>This controls if the card should have a shadow effect. <br /><code class="inline">true</code>  <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>hover_effect</td>
            <td>false</td>
            <td>Displays an extra shadow on hover of the card.. <br /><code class="inline">true</code>  <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>class</td>
            <td>bw-contact-card</td>
            <td>Any additional css classes can be added using this attribute. For example if you prefer to have non-rounded cards you can set <code class="inline">class="!rounded-none"</code>.</td>
        </tr>
    </x-bladewind::table>

    <h3>Contact Card with all attributes defined</h3>
<pre class="language-markup line-numbers">
<code>
    &lt;x-bladewind.contact-card
        name="Michael K. Ocansey"
        mobile="+233.123.456.789"
        image="/path/to/the/image/file"
        position="Senior Copywriter"
        email="mike@bladewindui.com"
        department="Tech"
        birthday="01-May-2000"
        hover_effect="true"
        class="!rounded-none"&gt;

        // you can define additional content here
        ...

    &lt;/x-bladewind.contact-card&gt;
</code>
</pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for the card component is available in <code class="inline">resources > views > components > bladewind > card.blade.php</code>
    </x-bladewind::alert><br />
    <x-bladewind::alert show_close_icon="false">
        The source file for the contact card component is available in <code class="inline">resources > views > components > bladewind > contact-card.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#max">Max selection</a></div>
        <div class="flex items-center ml-5"><div class="dot"></div><a href="#max-errors">Display errors</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#auto">Auto select new</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">Icons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#avatars">Avatars</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#forms">Form submission</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-checkcard');
        </script>
    </x-slot:scripts>
</x-app>
