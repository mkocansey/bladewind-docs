<x-app>
    <x-slot:title>Roadmap</x-slot:title>
    <x-slot:page_title>Roadmap</x-slot:page_title>
    <p>
        There's a heap of goodies yet to be added to BladewindUI.
        The timeline focuses more on releases instead of release dates. Users are encouraged to <a href="/contribute">contribute</a> to move us closer to releases quicker.
    </p>
    <p>
        <x-bladewind::alert show_close_icon="false" type="warning">
            The roadmap below does not include integration of Livewire into the current library. That decision will be based on the results of <a href="https://github.com/mkocansey/bladewind/discussions/185" target="_blank">this poll</a>.
        </x-bladewind::alert>
        <div class="pt-4"></div>
        <x-bladewind::alert show_close_icon="false" type="info">
            The roadmap below is very flexible and not cast in stone. Contributors can pick and work now on features scheduled for later releases.
        </x-bladewind::alert>
    </p>
    <div>
        <x-bladewind::timeline date="2.4.6" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add alignment option to <a href="/component/timeline">Timeline</a>.</li>
                    <li>Fix UI inconsistencies across all components.</li>
                    <li>Stacked <a href="/component/avatar">Avatars</a> should display number of pictures not displayed (eg. +22).</li>
                    <li>Allow minimum and maximum values for numeric input. Example: an input collecting age for adult content should allow a minimum of 16.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.5.0" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add drag-n-drop to <a href="/component/filepicker">File Picker</a> with ability to upload multiple files.</li>
                    <li>Add Livewire support to the <a href="/component/input">Input</a>, <a href="/component/textarea">Textarea</a> and <a href="/component/select">Select</a> components</li>
                    <li>Add Feed component.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.5.x" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Fix any issues from 2.5.0 release.</li>
                    <li>Add a basic toolbar to the <a href="/component/textarea">Textarea</a> component.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.6.0" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add a Range Slider component.</li>
                    <li>Add a Time Picker component.</li>
                    <li>Add an Accordion component.</li>
                    <li>Add a Pagination component.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.6.x" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Fix any issues from 2.6.0 release.</li>
                    <li><a href="/component/progress-bar">Progress Bar</a> component should have an animated progression.</li>
                    <li>Add GitHub tab style to the <a href="/component/tab">Tab</a> component.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.7.0" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add Vertical and Horizontal step components.</li>
                    <li>The <a href="/component/avatar">Avatar</a> component borders/rings should be customizable.</li>
                    <li>The <a href="/component/avatar">Avatar</a> component should alternatively show labels (if image is missing).</li>
                    <li>The <a href="/component/tag">Tag</a> component should have smaller versions.</li>
                    <li>Refactor the <a href="/component/tab">Dropmenu</a> component and make it more user friendly.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.7.x" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Fix any issues from 2.7.0 release.</li>
                    <li>The <a href="/component/verification-code">Verification Code</a> or OTP component should allow masking of input.</li>
                    <li>Provide more options for how much blur should be behind a <a href="/component/modal">Modal</a> component.</li>
                    <li><a href="/component/tag">Tag</a> component should have smaller versions.</li>
                    <li>Refactor the <a href="/component/tab">Dropmenu</a> component and make it more user friendly.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.8.0" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add Color picker component.</li>
                    <li>Refactor the <a href="/component/datepicker">Datepicker</a> component.</li>
                    <li>Refactor the <a href="/component/timepicker">Timepicker</a> component.</li>
                    <li>Add Number (increment/decrement) component.</li>
                    <li>Items in the <a href="/component/select">Select</a> component should accept a second line. A label and its description.</li>
                    <li>The <a href="/component/select">Select</a> component should provide an optional default state (with an action) if there are no items to select.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="2.8.x" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Fix any issues from 2.8.0 release.</li>
                    <li>The <a href="/component/verification-code">Verification Code</a> or OTP component should allow masking of input.</li>
                    <li>Provide more options for how much blur should be behind a <a href="/component/modal">Modal</a> component.</li>
                    <li><a href="/component/tag">Tag</a> component should have smaller versions.</li>
                    <li>Refactor the <a href="/component/tab">Dropmenu</a> component and make it more user friendly.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

        <x-bladewind::timeline date="3.0.0" stacked="true">
            <x-slot:label>
                <ul class="list-outside list-disc leading-8 ml-3 text-base">
                    <li>Add Livewire support. <x-bladewind::tag label="tentative" color="orange" /></li>
                    <li>Introduce ready to use layouts.</li>
                    <li>Remove support for Laravel 8 users.</li>
                    <li>The Select component will completely replace the Dropdown component.</li>
                </ul>
            </x-slot:label>
        </x-bladewind::timeline>

    </div>

    <x-slot:side_nav>

    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.roadmap');
        </script>
    </x-slot>
</x-app>
