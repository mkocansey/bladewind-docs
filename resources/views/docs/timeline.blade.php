<x-app>
    <x-slot:title>Timeline Component</x-slot:title>
    <x-slot:page_title>Timeline</x-slot:page_title>
    <p>
        Display information in a chronological order using a feed-like view. The original design was for this to be a date + event component but, it turned out this component can also display any information as a feed.
       The date format you display is completely your choice. The timeline just expects a string in the optional <code class="inline text-red-500">date</code> attribute.
    </p>
    <p>
        <x-bladewind::timeline date="10 days ago" content="You signed up" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep called" />
        <x-bladewind::timeline content="Account is being reviewed" />
        <x-bladewind::timeline content="Account activated" />
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.timeline
                date="10 days ago"
                content="You signed up"/&gt;
            &lt;x-bladewind.timeline
                date="8 days ago"
                content="Customer rep assigned"/&gt;
            &lt;x-bladewind.timeline
                date="8 days ago"
                content="Customer rep called"/&gt;
            &lt;x-bladewind.timeline
                content="Account is being reviewed"/&gt;
            &lt;x-bladewind.timeline
                content="Account activated"/&gt;
        </code>
    </pre>
    <h3>Bigger Anchors</h3>
    <p>
        By default each timeline anchors itself on small transparent circles. We can set the anchors to use bigger circles instead, by setting <code class="inline text-red-500">anchor="big"</code>.
        For now there are only two anchor sizes. It is possible to have a mix of big and small anchors in the same timeline series.
    </p>

    <x-bladewind::timeline
            date="10 days ago" content="You signed up" anchor="big" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" anchor="big" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep called" anchor="big" />
    <x-bladewind::timeline content="Account is being reviewed" anchor="big" />
    <x-bladewind::timeline content="Account activated" anchor="big" />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.timeline
                anchor="big"
                date="10 days ago"
                content="You signed up"/&gt;
            ...
        </code>
    </pre>
    <h3>Completed</h3>
    <p>
        Setting the attribute <code class="inline text-red-500">completed="true"</code> will mark a timeline event as completed.
        Completed events in the BladewindUI Timeline show filled circles and a checkmark instead of transparent dots.
        The checkmark sign is only displayed when using <code>anchor="big"</code>, otherwise it is just a filled circle.
        You can also use an <a href="#icons">icon different</a> from the checkmark for your completed timeline anchors.
    </p>

    <x-bladewind::timeline date="10 days ago" content="You signed up" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep called" completed="true" />
    <x-bladewind::timeline content="Account is being reviewed"  />
    <x-bladewind::timeline content="Account activated"  />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.timeline
                completed="true"
                date="10 days ago"
                content="You signed up"/&gt;
            ...
        </code>
    </pre>

    <h4>Completed when anchor="big"</h4>
    <x-bladewind::timeline date="10 days ago" content="You signed up" anchor="big" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" anchor="big" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep called" anchor="big" completed="true" />
    <x-bladewind::timeline content="Account is being reviewed" anchor="big" />
    <x-bladewind::timeline content="Account activated" anchor="big" />

    <pre class="language-markup line-numbers" data-line="2,3">
        <code>
            &lt;x-bladewind.timeline
                completed="true"
                anchor="big"
                date="10 days ago"
                content="You signed up"/&gt;
            ...
        </code>
    </pre>

    <h2 id="stacked">Stacked Timelines</h2>
    <p>
        By default dates are displayed on the left and the corresponding events on the right.
        This behaviour can be changed to stack dates on top of events. This can be achieved by setting
        the attribute <code class="inline text-red-500">stacked="true"</code>. When timelines are stacked, all content is displayed to the right of the anchor.
    </p>

    <x-bladewind::timeline-group stacked="true">
        <x-bladewind::timeline date="just now" content="database server restarted" />
        <x-bladewind::timeline date="30 minutes ago">
            <x-slot:content>
                <a>2 endpoints</a> are failing on bladewindui-data EC2 bucket. You may want to login and check the logs
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="1 hour ago">
            <x-slot:content>
                There have been 200 failed log in attempts from <a>mike@bladewindui.com</a>. Possibly a DDos attack attempt. Secure the server.
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="Yesterday" content="Data recovery completed with 2 errors" />
    </x-bladewind::timeline-group>

<pre class="language-markup line-numbers" data-line="1">
    <code>
            &lt;x-bladewind.timeline-group stacked="true"&gt;

                &lt;x-bladewind.timeline
                    date="just now"
                    content="database server restarted" /&gt;

                &lt;x-bladewind.timeline date="30 minutes ago"&gt;
                    &lt;x-slot:content&gt;
                        &lt;a&gt;2 endpoints&lt;/a&gt; are failing on bladewindui-data EC2
                        bucket. You may want to login and check the logs
                    &lt;/x-slot:content&gt;
                &lt;/x-bladewind.timeline&gt;

                &lt;x-bladewind.timeline date="1 hour ago"&gt;
                    &lt;x-slot:content&gt;
                        There have been 200 failed log in attempts from
                        &lt;a&gt;mike@bladewindui.com&lt;/a&gt;. Possibly a DDos attack
                        attempt. Secure the server.
                    &lt;/x-slot:content&gt;
                &lt;/x-bladewind.timeline&gt;

                &lt;x-bladewind.timeline date="Yesterday"
                    content="Data recovery completed with 2 errors" /&gt;

            &lt;/x-bladewind.timeline-group&gt;
    </code>
</pre>
<p>
    Notice we introduced a <code class="inline">x-bladewind::timeline-group</code> component in the above example. This is completely optional but saves us from
    writing <code class="inline text-red-500">stacked="true"</code> on each tag component. The alternative is to have
    <code class="inline">&lt;x-bladewind::timeline stacked="true" .../&gt;</code> for every timeline we want to stack.
</p>
<h3>Stacked and all completed</h3>
    <br />
<x-bladewind::timeline-group stacked="true" completed="true">
    <x-bladewind::timeline date="just now" content="database server restarted" />
    <x-bladewind::timeline date="30 minutes ago">
        <x-slot:content>
            <a>2 endpoints</a> are failing on bladewindui-data EC2 bucket. You may want to login and check the logs
        </x-slot:content>
    </x-bladewind::timeline>
    <x-bladewind::timeline date="1 hour ago">
        <x-slot:content>
            There have been 200 failed log in attempts from <a>mike@bladewindui.com</a>. Possibly a DDos attack attempt. Secure the server.
        </x-slot:content>
    </x-bladewind::timeline>
    <x-bladewind::timeline date="Yesterday" content="Data recovery completed with 2 errors" />
</x-bladewind::timeline-group>
<br />
<pre class="language-markup line-numbers" data-line="2">
    <code>
            &lt;x-bladewind.timeline-group
                completed="true"
                stacked="true"&gt;

                &lt;x-bladewind.timeline
                    date="just now"
                    content="database server restarted" /&gt;

                ...

            &lt;/x-bladewind.timeline-group&gt;
    </code>
</pre>

<h3>Stacked and completed with anchor="big"</h3>
    <br />
<x-bladewind::timeline-group
    stacked="true" completed="true" anchor="big">
    <x-bladewind::timeline date="just now" content="database server restarted" />
    <x-bladewind::timeline date="30 minutes ago">
        <x-slot:content>
            <a>2 endpoints</a> are failing on bladewindui-data EC2 bucket. You may want to login and check the logs
        </x-slot:content>
    </x-bladewind::timeline>
    <x-bladewind::timeline date="1 hour ago">
        <x-slot:content>
            There have been 200 failed log in attempts from <a>mike@bladewindui.com</a>. Possibly a DDos attack attempt. Secure the server.
        </x-slot:content>
    </x-bladewind::timeline>
    <x-bladewind::timeline date="Yesterday" content="Data recovery completed with 2 errors" completed="false" />
</x-bladewind::timeline-group>
<br />
<pre class="language-markup line-numbers" data-line="2">
    <code>
            &lt;x-bladewind.timeline-group
                completed="true"
                anchor="big"
                stacked="true"&gt;

                &lt;x-bladewind.timeline
                    date="just now"
                    content="database server restarted" /&gt;

                ...

            &lt;x-bladewind.timeline
                date="Yesterday"
                content="Data recovery completed with 2 errors"
                completed="false" /&gt;

            &lt;/x-bladewind.timeline-group&gt;
    </code>
</pre>

    <h2 id="icons">Anchor Icons and Avatars</h2>
    <h3>Anchor Icons</h3>
    <p>
        Thanks to the BladewindUI <a href="/component/icon">Icon component</a>, embedding icons in the Timeline is easy.
        By default, completed events are displayed with a checkmark if <code class="inline text-red-500">anchor="big"</code>.
        It is possible to use any <a href="https://heroicons.com" target="_blank">Heroicons</a> icon as your timeline's anchor.
        Just set the attribute <code class="inline text-red-500">icon="name-of-icon"</code>.
        You can use different icons for every timeline. If you intend to use the same icons for all anchors in your timeline, consider
        wrapping your timelines in a <code class="inline">x-bladewind.timeline-group</code> component and setting
        <code class="inline text-red-500">icon="name-of-icon"</code> on that instead.
    </p>
    <p>
        <x-bladewind::alert type="warning" show_icon="false" show_close_icon="false">
            Icons and avatars only work when <code class="inline text-red-500">anchor="big"</code>
        </x-bladewind::alert>
    </p>

    <x-bladewind::timeline-group anchor="big" completed="true" color="red">
        <x-bladewind::timeline date="10 days ago" content="You signed up" icon="bell-alert" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" icon="bolt" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep called" icon="chat-bubble-bottom-center-text" />
        <x-bladewind::timeline content="Account is being reviewed" icon="key" completed="false" />
        <x-bladewind::timeline content="Account activated" icon="map-pin" completed="false" />
    </x-bladewind::timeline-group>
    <pre class="language-markup line-numbers" data-line="5,9,13,17,21">
        <code>
            &lt;x-bladewind.timeline-group anchor="big" completed="true"&gt;

                &lt;x-bladewind.timeline
                    date="10 days ago"
                    content="You signed up"
                    icon="bell-alert" /&gt;

                &lt;x-bladewind.timeline
                    date="8 days ago"
                    content="Customer rep assigned"
                    icon="bolt" /&gt;

                &lt;x-bladewind.timeline
                    date="8 days ago"
                    content="Customer rep called"
                    icon="chat-bubble-bottom-center-text" /&gt;

                &lt;x-bladewind.timeline
                    content="Account is being reviewed"
                    icon="key"
                    completed="false" /&gt;

                &lt;x-bladewind.timeline
                    content="Account activated"
                    icon="map-pin"
                    completed="false" /&gt;

            &lt;/x-bladewind.timeline-group&gt;
        </code>
    </pre>
    <h3>Anchor Avatars</h3>
    <p>
        Thanks to the BladewindUI <a href="/component/avatar">Avatar component</a>, using avatars as Timeline anchors is easy.
        Just set the attribute <code class="inline text-red-500">avatar="url-to-image"</code>. By default avatars use the <code class="inline text-red-500">size="small"</code> attribute of the Avatar component do display small images.
    </p>

    <x-bladewind::timeline-group anchor="big">
        <x-bladewind::timeline date="10 days ago" content="You signed up" avatar="/assets/images/doc.png" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" avatar="/assets/images/francis.png" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep called" avatar="/assets/images/me.jpeg" />
        <x-bladewind::timeline content="Account is being reviewed" avatar="/assets/images/issah.jpg" />
        <x-bladewind::timeline content="Account activated" avatar="/assets/images/rowe.jpeg" />
    </x-bladewind::timeline-group>
    <pre class="language-markup line-numbers" data-line="6,11">
        <code>
            &lt;x-bladewind.timeline-group&gt;

                &lt;x-bladewind.timeline
                    date="10 days ago"
                    content="You signed up"
                    avatar="/assets/images/pic1.jpg" /&gt;

                &lt;x-bladewind.timeline
                    date="8 days ago"
                    content="Customer rep assigned"
                    avatar="/assets/images/pic2.jpg" /&gt;
            ...
            &lt;/x-bladewind.timeline-group&gt;
        </code>
    </pre>

    <h2 id="positioning">Positioning and Aligning Timelines</h2>
    <p>
        The Timeline component fills (full width) and centres itself in the parent container you define it in.
        By default, dates are displayed on the left and events on the right of the timeline anchor.
        When timelines are stacked however, all content is displayed to the right of the anchor.
    </p>
    <p>
        Positioning and aligning can get confusing so lets break it down. You can <strong>only</strong> position a
        <code class="inline">x-bladewind::timeline-group</code> component. By default it is centre aligned. We can position the component
        to the <code class="inline">left</code> or to the <code class="inline">center</code>.
    </p>
    <p>
        <x-bladewind::alert show_close_icon="false">
            Positioning looks nicer when timelines are stacked
        </x-bladewind::alert>
    </p>

    <h3>Left Positioning</h3>
    <p>Note how the entire timeline group is moved to the left of the page.</p><br />
    <x-bladewind::timeline-group anchor="big" position="left">
        <x-bladewind::timeline date="10 days ago" content="You signed up" avatar="/assets/images/doc.png" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" avatar="/assets/images/francis.png" />
        <x-bladewind::timeline date="8 days ago" content="Customer rep called" avatar="/assets/images/me.jpeg" />
        <x-bladewind::timeline content="Account is being reviewed" avatar="/assets/images/issah.jpg" />
        <x-bladewind::timeline content="Account activated" avatar="/assets/images/rowe.jpeg" />
    </x-bladewind::timeline-group>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.timeline-group
                position="left"
                anchor="big"&gt;

                &lt;x-bladewind.timeline
                    date="10 days ago"
                    content="You signed up"
                    avatar="/assets/images/pic1.jpg" /&gt;
            ...
            &lt;/x-bladewind.timeline-group&gt;
        </code>
    </pre>
<h3>Left Positioning for Stacked Timelines</h3>
    <p>Note how the timeline fills the entire width of the page. If you do not want this, you can place the timeline group in a parent element that has a fixed width.</p>
    <x-bladewind::timeline-group color="pink"  stacked="true" position="left">
        <x-bladewind::timeline date="just now" content="database server restarted" />
        <x-bladewind::timeline date="30 minutes ago">
            <x-slot:content>
                <a>2 endpoints</a> are failing on bladewindui-data EC2 bucket. You may want to login and check the logs
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="1 hour ago">
            <x-slot:content>
                There have been 200 failed log in attempts from <a>mike@bladewindui.com</a>. Possibly a DDos attack attempt. Secure the server.
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="Yesterday" content="Data recovery completed with 2 errors" completed="false" />
    </x-bladewind::timeline-group>
    <br />
    <pre class="language-markup line-numbers" data-line="2,3">
        <code>
            &lt;x-bladewind.timeline-group
                position="left"
                stacked="true"
                color="pink"&gt;

                &lt;x-bladewind.timeline
                    date="30 minutes ago"&gt;
                     &lt;x-slot:content&gt;
                        &lt;a&gt;2 endpoints&lt;/a&gt; are failing on
                        bladewindui-data EC2 bucket.
                        You may want to login and check the logs
                    &lt;/x-slot:content&gt;
                &lt;x-bladewind.timeline/&gt;
            ...
            &lt;/x-bladewind.timeline-group&gt;
        </code>
    </pre>
    <h3>Left Alignment</h3>
    <p>
        Alignments only work for stacked timelines and only for the <code>x-bladewind.timeline</code> component.
        By default, stacked timeline content is aligned to the right of the anchor.
        If you wish to flip a stacked timeline to the left, set the <code class="inline text-red-500">align_left="true"</code> attribute on that specific timeline.
    </p>
    <p>
        <x-bladewind::alert show_close_icon="false">
            Left alignment works only when the timeline group has position="center"
        </x-bladewind::alert>
    </p>
    <br />
    <x-bladewind::timeline-group color="indigo" stacked="true">
        <x-bladewind::timeline date="just now" content="database server restarted" align_left="true" />
        <x-bladewind::timeline date="30 minutes ago">
            <x-slot:content>
                <a>2 endpoints</a> are failing on bladewindui-data EC2 bucket. You may want to login and check the logs
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="1 hour ago" align_left="true">
            <x-slot:content>
                There have been 200 failed log in attempts from <a>mike@bladewindui.com</a>. Possibly a DDos attack attempt. Secure the server.
            </x-slot:content>
        </x-bladewind::timeline>
        <x-bladewind::timeline date="Yesterday" content="Data recovery completed with 2 errors" />
    </x-bladewind::timeline-group>
    <br />
    <pre class="language-markup line-numbers" data-line="2">
        <code>
            &lt;x-bladewind.timeline-group
                position="right"
                anchor="big"&gt;

                &lt;x-bladewind::timeline
                        date="just now"
                        content="database server restarted"
                        align_left="true" /&gt;

                &lt;x-bladewind::timeline d
                    ate="30 minutes ago"&gt;
                    &lt;x-slot:content&gt;
                        &lt;a&gt;2 endpoints&lt;/a&gt; are failing on
                        bladewindui-data EC2 bucket. You may want to login
                        and check the logs
                    &lt;/x-slot:content&gt;
                &lt;/x-bladewind::timeline&gt;

                &lt;x-bladewind::timeline
                    date="1 hour ago"
                    align_left="true"&gt;
                    &lt;x-slot:content&gt;
                        There have been 200 failed log in attempts from
                        &lt;a&gt;mike@bladewindui.com&lt;/a&gt;.
                        Possibly a DDos attack attempt.
                        Secure the server.
                    &lt;/x-slot:content&gt;
                &lt;/x-bladewind::timeline&gt;

                &lt;x-bladewind::timeline
                    date="Yesterday"
                    content="Data recovery completed with 2 errors" /&gt;

            &lt;/x-bladewind.timeline-group&gt;
        </code>
    </pre>

    <h2 id="notail">No Trailing Line</h2>
    <p>
        You may have noticed from the the examples above there is a trailing line after the last timeline. Some may find it cool. Others may not. For those who cannot stand that trailing line,
        you can get rid of it by applying this atribute to the last timeline.
        <code class="inline text-red-500">last="true"</code>. This tells the timeline component that this is the last item in the timeline list.
    </p>

    <x-bladewind::timeline date="10 days ago" content="You signed up" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep called" completed="true" />
    <x-bladewind::timeline content="Account is being reviewed"  />
    <x-bladewind::timeline content="Account activated" last="true"  />

    <pre class="language-markup line-numbers" data-line="7">
        <code>
        &lt;x-bladewind::timeline
                date="10 days ago"
                content="You signed up" /&gt;
        ...
        &lt;x-bladewind::timeline
            content="Account activated"
            last="true"  /&gt;
        </code>
    </pre>

    <h2 id="colours">Different Colours</h2>
    <p>
        Like with most of our other components, the timeline component can be displayed in all the different colours we support.
        The nice thing about the timeline is, colours are actually applied to each timeline so your timelines can have a colour cocktail., though you will typically want to use one colour for a timeline group.
    </p>
    <x-bladewind::timeline date="10 days ago" content="You signed up" color="pink" completed="true" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep assigned" color="orange" />
    <x-bladewind::timeline date="8 days ago" content="Customer rep called" color="green" />
    <x-bladewind::timeline content="Account is being reviewed"  color="purple" />
    <x-bladewind::timeline content="Account activated" color="gray" />

    <pre class="language-markup line-numbers" data-line="4,10,15,20">
        <code>
            &lt;x-bladewind::timeline
                date="10 days ago"
                content="You signed up"
                color="pink"
                completed="true" /&gt;

            &lt;x-bladewind::timeline
                date="8 days ago"
                content="Customer rep assigned"
                color="orange" /&gt;

            &lt;x-bladewind::timeline
                date="8 days ago"
                content="Customer rep called"
                color="green" /&gt;

            &lt;x-bladewind::timeline
                content="Account is being reviewed"
                color="purple" /&gt;

            &lt;x-bladewind::timeline
                content="Account activated"
                color="gray" /&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Button component.</p>
    @include('docs/announcement')
    <h3>Timeline Group Component</h3>
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>completed</td>
            <td>false</td>
            <td>Specify if all timelines in the group are completed or not. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>stacked</td>
            <td>false</td>
            <td>Defines if the date is stacked on top of the content. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>anchor</td>
            <td>small</td>
            <td>Should the anchor be big or small.  <br> <code class="inline">small</code> <code class="inline">big</code></td>
        </tr>
        <tr>
            <td>anchor_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the anchor</td>
        </tr>
        <tr>
            <td>icon</td>
            <td><em>blank</em></td>
            <td>Accepts any icon name from <a href="https://heroicons.com" target="_blank">Heroicons</a>. This icon will be used for all timelines in the group.</td>
        </tr>
        <tr>
            <td>icon_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the icon.</td>
        </tr>
        <tr>
            <td>date_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the date</td>
        </tr>
        <tr>
            <td>position</td>
            <td>center</td>
            <td>Specifies how the timeline group should be positioned in its parent element. <br> <code class="inline">left</code> <code class="inline">center</code> </td>
        </tr>
        <tr>
            <td>color</td>
            <td>blue</td>
            <td>Set the color of the timeline. <br> <code class="inline">blue</code> <code class="inline">red</code>
            <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
            <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
    </x-bladewind::table>
    <h3>Timeline Component</h3>
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>date</td>
            <td><em>blank</em></td>
            <td>String. Date to be displayed to either the left of the anchor or on top of the content when stacked.</td>
        </tr>
        <tr>
            <td>date_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the date</td>
        </tr>
        <tr>
            <td>avatar</td>
            <td><em>blank</em></td>
            <td>Path to an image to display in the anchor.</td>
        </tr>
        <tr>
            <td>avatar_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the avatar.</td>
        </tr>
        <tr>
            <td>content</td>
            <td><em>blank</em></td>
            <td>Also <strong>label</strong>. The correspondning content to display for the <code class="inline">date</code></td>
        </tr>
        <tr>
            <td>last</td>
            <td>false</td>
            <td>Defines if the timeline is the last in the group.<br /> <code class="inline">true</code><code class="inline">false</code></td>
        </tr>
        <tr>
            <td>align_left</td>
            <td>false</td>
            <td>Defines if the timeline should be left aligned. Works only if <code class="inline text-red-500">stacked="true"</code>.<br /> <code class="inline">true</code><code class="inline">false</code></td>
        </tr>
        <tr>
            <td>completed</td>
            <td>false</td>
            <td>Specify if all timelines in the group are completed or not. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>stacked</td>
            <td>false</td>
            <td>Defines if the date is stacked on top of the content. <br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>anchor</td>
            <td>small</td>
            <td>Should the anchor be big or small.  <br> <code class="inline">small</code> <code class="inline">big</code></td>
        </tr>
        <tr>
            <td>anchor_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the anchor</td>
        </tr>
        <tr>
            <td>icon</td>
            <td><em>blank</em></td>
            <td>Accepts any icon name from <a href="https://heroicons.com" target="_blank">Heroicons</a>. This icon will be used for all timelines in the group.</td>
        </tr>
        <tr>
            <td>icon_css</td>
            <td><em>blank</em></td>
            <td>Any additional TailwindCSS classes to apply to the icon.</td>
        </tr>
        <tr>
            <td>color</td>
            <td>blue</td>
            <td>Set the color of the timeline. <br> <code class="inline">blue</code> <code class="inline">red</code>
                <code class="inline">yellow</code> <code class="inline">green</code><code class="inline">purple</code> <code class="inline">pink</code>
                <code class="inline">orange</code> <code class="inline">black</code> <code class="inline">cyan</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
    </x-bladewind::table>

    <h3>Timeline with all attributes defined</h3>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.timeline-group
                stacked="true"
                anchor="big"
                anchor_css="pl-9"
                color="pink"
                icon="briefcase"
                icon_css="pl-9"
                date_css="tracking-wider"
                position="left"
                completed="true" /&gt;
        </code>
    </pre>
    <pre class="language-markup">
        <code>
            &lt;x-bladewind.timeline
                stacked="true"
                anchor="big"
                anchor_css="pl-9"
                color="pink"
                icon="briefcase"
                icon_css="pl-9"
                date="9 days ago"
                date_css="tracking-wider"
                align_left="true"
                avatar="/assets/images/me.jpg"
                avatar_css="rounded-0"
                content="I am a timeline"
                completed="true" /&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > timeline-group.blade.php</code>,
        <code class="inline">resources > views > components > bladewind > timeline.blade.php</code>
    </x-bladewind::alert>
    <p>&nbsp;</p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#stacked">Stacked timelines</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#icons">Using icons & avatars</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#positioning">Positioning & alignment</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#notail">No trailing line</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#colours">Different colours</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-timeline');
        </script>
    </x-slot>
</x-app>
