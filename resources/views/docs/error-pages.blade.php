<x-app>
    <x-slot name="title">Error Pages</x-slot>
    <h1 class="page-title">Error Pages</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Laravel comes with some default error pages that show up when you hit various errors. The most popular being the 404.
                BladewindUI provides an error component that lets you have error pages looking consistent. By default the Laravel error pages
                are stashed away in <code class="inline">/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views</code>. To use the Bladewind error pages component you will first need to
                <a href="https://laravel.com/docs/9.x/errors#custom-http-error-pages" target="_blank">publish the Laravel error pages</a> to your working resources directory by running the command below from your terminal.
            </p>
            <p>
                <pre class="lang-bash command-line"><code>php artisan vendor:publish --tag=laravel-errors</code></pre>
            </p>
            <p>
                You will get a message similar to <em><span class="text-green-600">Copied Directory</span> <span class="text-yellow-600">[/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/views] <span class="text-green-600">To</span> [/resources/views/errors]</span></em>
            </p>
            <p>
                The Laravel error pages should now be available in <code class="inline">resources/views/errors</code>. You can now edit any of the error pages that correspond to an http status code. <em>401.blade.php, 403.blade.php, 404.blade.php, 419.blade.php, 429.blade.php, 500.blade.php, 503.blade.php</em>.
            </p>
            <p>
                Let's take for example the default <code class="inline">resources/views/erros/404.blade.php</code>, the code in there looks like this:
            </p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        &#64;extends('errors::minimal')

                        &#64;section('title', __('Not Found'))
                        &#64;section('code', '404')
                        &#64;section('message', __('Not Found'))
                    </code>
                </pre>
            </p><br />
            <p>
                You can replace everything in the file with the BladewindUI error component. <a href="/404">Click here to view an example 404 page</a> using the BladewindUI error component. This just points to a url that has no matching route.
                The default 404 illustration used is from <a href="https://storyset.com/illustration/404-error-page-not-found-with-people-connecting-a-plug/bro" target="_blank">Storyset.com</a>
            </p>

            <p>
                <pre class="language-markup line-numbers" data-line="6, 12">
                    <code>
                        // this is a layout file specific to the documentation that
                        // just gets rid of the left navigation
                        // it is not available as a component
                        &lt;x-frameless title="404 | Page not found"&gt;

                            &lt;x-bladewind::error
                                heading="Page not found"
                                description="The page you requested does not exist. We have a caffeine-induced bot working overtime to find it for you"
                                button_text="Back to docs"
                                button_url="/extra/error-pages"&gt;

                                &lt;x-slot name="image"&gt;
                                    &lt;img src="/assets/images/404.svg" alt="404 image" /&gt;
                                &lt;/x-slot&gt;

                            &lt;/x-bladewind::error&gt;

                        &lt;/x-frameless&gt;
                    </code>
                </pre>
            </p>

            <p>
                The image to be displayed on the error page has been setup as a slot so you can decide if you want to use
                <code class="inline"">&lt;img&gt;</code> or <code class="inline"">&lt;svg&gt;</code>
                <a name="attributes"></a>
            </p>

           <p>&nbsp;</p>
            <p><h2>Full List Of Attributes</h2></p>
            <p>The table below shows a comprehensive list of all the attributes available for the Error component.</p>
            @include('docs/announcement')
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>heading</td>
                    <td>Error!</td>
                    <td>Heading of the error being displayed. Example: Page not found.</td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>Something went wrong</td>
                    <td>
                        Full description of the error. Should make sense to the end user.
                    </td>
                </tr>
                <tr>
                    <td>button_text</td>
                    <td>Go to homepage</td>
                    <td>Text to display on the call to action button</td>
                </tr>
                <tr>
                    <td>button_url</td>
                    <td>/</td>
                    <td>Url to visit when the call to action button is clicked</td>
                </tr>
                <tr>
                    <td>image</td>
                    <td>404.svg</td>
                    <td>The image to display</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Error with all attributes defined</h3>
            <pre class="language-markup line-numbers" data-line="4">
                <code>
                    &lt;x-bladewind::error
                        heading="Page not found"
                        description="The page you requested does not exist. We have a caffeine-induced bot working overtime to find it for you"
                        button_text="Back to docs"
                        button_url="/extra/error-pages"&gt;

                        &lt;x-slot name="image"&gt;
                            &lt;img src="/assets/images/404.svg" alt="404 image" /&gt;
                        &lt;/x-slot&gt;

                    &lt;/x-bladewind::error&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > error.blade.php</code>
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
            selectNavigationItem('.extra-errors');
        </script>
    </x-slot>
</x-app>
