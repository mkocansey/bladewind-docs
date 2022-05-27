<x-app>
    <x-slot name="title">Laravel 8 Users</x-slot>
    <h1 class="page-title">Laravel 8 Users</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                If you are using BladewindUI in a Laravel 8 project you will need to define the component attributes using <strong class="text-red-500">camelCase</strong> instead of the default <strong class="text-red-500">snake_case</strong> style used throughout the documentation. 
                For some reason component props defined using snake_case style do not work consistently across different Laravel 8 versions. 
            </p>
            <p>
                We used the BladewindUI components in a <code class="inline"> "laravel/framework": "^8.75"</code> project and snake_case attributes worked fine. 
                Other users using Laravel 8 did not get the desired results when they applied snake_case attributes on some components. If you experience such a behaviour, please default to using the camelCase versions of the components attributes. See example below.
            </p>
            <br />
            <h2>Button Example</h2>
            <p>BladewindUI Buttons can have spinners that are enabled by setting the <code class="inline text-red-500">has_spinner="true"</code>. 
            <span class="bg-yellow-200 p-1">Laravel 8 users will instead do <strong>hasSpinner="true"</strong></span>. 
            If you want the spinner to be visible by default you can set the 
            attribute <code class="inline text-red-500">showSpinner="true"</code>.</p>
            <br />
            <p>
                <x-bladewind::button has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button> &nbsp;&nbsp;
                <x-bladewind::button type="secondary" has_spinner="true" show_spinner="true">Saving ...</x-bladewind::button>
            </p><br />
            <pre class="language-markup line-numbers" data-line="2,3">
                <code>
                    &lt;x-bladewind.button
                        hasSpinner="true" 
                        showSpinner="true"&gt;
                        Saving...
                    &lt;/x-bladewind.button&gt;
                </code>
            </pre>
            <br />
            <br />
            <p>
                This principle is applicable for ALL component attributes that are more than one word. Single word attributes like 
                <em>name, type, size, color</em> are not affected. Any multi word attribute will need to be camelCased. A few examples are: 
                <em>hasSpinner, showSpinner, canSubmit, showIcon, hasShadow, acceptedFileTypes, showCloseIcon</em> etc.
            </p>
        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <div class="space-y-2">
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.laravel-8');
        </script>
    </x-slot>
</x-app>