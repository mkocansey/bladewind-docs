<x-app>
    <x-slot name="title">Helper Functions</x-slot>
    <h1 class="page-title">Helper Functions</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                The BladewindUI library comes with a couple of Javascript helper functions used by the library itself. 
                These functions can also be used in your projects if you have need for them.
            </p>
            <h2>addToStorage</h2>
            <p>Adds a key/value pair to either localStorage or sessionStorage. The documentation website uses this to set the dark/light mode settings of the user.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* -----------------------------------------------------------
                            key:            label of key to store
                            val:            value to store for key
                            storageType:    where to store key/val pair. 
                                            localStorage or sessionStorage
                        -----------------------------------------------------------*/
                        addToStorage(key, val, storageType = 'localStorage');
                        
                        // example
                        addToStorage('theme', 'dark');

                    </code><a name="animatecss"></a>
                </pre>
            </p>
            <br />
            <h2>animateCSS</h2>
            <p>Animates any element in the DOM. Works with any of the <a href="https://animate.style/" target="_blank">animation classes</a> from animate.css by Daniel Eden. 
            The animation class names should be used without the <code class="inline">animate__</code> prefix.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:     css class that identifies the element to animate
                            animation:   animation class to be applied to element
                        -----------------------------------------------------------------*/
                        animateCSS(element, animation);
                        
                        // example
                        animateCSS('.navigation','slideInRight');

                    </code><a name="changecss"></a>
                </pre>
            </p>
            <br />
            <h2>changeCss</h2>
            <p>Add to or remove CSS classes from a single element in the DOM.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:    css class that identifies the element to change
                            css:        comma separated list of css class names to apply
                            mode:       should the css be added or removed
                            elementIsDomObject: is the element a dom Object
                        -----------------------------------------------------------------*/
                        changeCss(element, css, mode = 'add', elementIsDomObject = false);
                        
                        // example 1: elementIsDomObject = true
                        current_theme = getFromStorage('theme');
                        changeCss(document.documentElement, current_theme, 'add', true);

                        // example 2: remove list of css from an element
                        changeCss('.nav a.active', 'selected, active', 'remove');
                    </code><a name="changecssfordomarray"></a>
                </pre>
            </p>
            <br />
            <h2>changeCssForDomArray</h2>
            <p>
                Very similar to <code class="inline">changeCss</code> but this adds or removes CSS classes from an array of CSS elements in the DOM.
                This targets elements with the same class name or tag name.
            </p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            elements:   css class that identifies the element to change
                            css:        comma separated list of css class names to apply
                            mode:       should the css be added or removed.
                        -----------------------------------------------------------------*/
                        changeCssForDomArray(elements, css, mode = 'add');
                        
                        // example 1: add list of css classes
                        changeCssForDomArray('li', 'underline, my-2');

                        // example 2: remove list of css classes
                        changeCssForDomArray('.nav a', 'selected, active', 'remove');
                    </code><a name="domel"></a>
                </pre>
            </p>
            <br />
            <h2>domEl</h2>
            <p>Shortcut for writing Javascript's <code class="inline">document.querySelector</code>. This function has an alias <code class="inline">dom_el</code> that does exactly the same thing.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:   css class that identifies the element to target 
                        -----------------------------------------------------------------*/
                        domEl(element);
                        
                        // examples
                        domEl('input.fname').getAttribute('disabled');
                        let data = new FormData(dom_el(form));
                    </code><a name="domels"></a>
                </pre>
            </p>
            <br />
            <h2>domEls</h2>
            <p>Shortcut for writing Javascript's <code class="inline">document.querySelectorAll</code>. This function has an alias <code class="inline">dom_els</code> that does exactly the same thing.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            elements:   css class that identifies the elements to target
                        -----------------------------------------------------------------*/
                        domEls(elements);
                        
                        // example
                        domEls('input.required').forEach((el) => {
                            console.log(el.value);
                        });
                    </code><a name="getfromstorage"></a>
                </pre>
            </p>
            <br />
            <h2>getFromStorage</h2>
            <p>Retrieve a value from the enduser's localStorage or sessionStorage based on key that is passed.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            key:            key to get value for
                            storageType:    storage to fetch the value from
                        -----------------------------------------------------------------*/
                        getFromStorage(key, storageType = 'localStorage');
                        
                        // example
                        getFromStorage('theme');
                    </code><a name="hide"></a>
                </pre>
            </p>
            <br />
            <h2>hide</h2>
            <p>Hide an element from/in the DOM .</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:    css class that identifies the element to hide
                            elementIsDomObject: is the element a dom Object
                        -----------------------------------------------------------------*/
                        hide(element, elementIsDomObject = false);
                        
                        // example
                        hide('.top-bar');
                        hide(domEl('.top-bar'), true);
                    </code><a name="hidemodal"></a>
                </pre>
            </p>
            <br />
            <h2>hideModal</h2>
            <p>Specifically hides a Bladewind <a href="/component/modal">Modal</a> component.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:    css class that identifies the modal to hide
                        -----------------------------------------------------------------*/
                        hideModal(element);
                        
                        // example
                        hideModal('.make-payment');
                    </code><a name="isNumberKey"></a>
                </pre>
            </p>
            <br />
            <h2>isNumberKey</h2>
            <p>Used by the Bladewind <a href="/component/textbox">Textbox</a> component to restrict user input to only numeric values. You can however use this helper function in your own non-Bladewind textboxes.
            For example to enter verification codes.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            evt:    javascript keypress events
                        -----------------------------------------------------------------*/
                        isNumberKey(evt);
                        
                        // example
                        &lt;input type="text" onkeypress="return isNumberKey(event)" /&gt;
                    </code><a name="removefromstorage"></a>
                </pre>
            </p>
            <br />
            <h2>removeFromStorage</h2>
            <p>Remove a key from the enduser's localStorage or sessionStorage.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            key:            key to remove
                            storageType:    which storage to remove the  key from
                        -----------------------------------------------------------------*/
                        removeFromStorage(key, storageType = 'localStorage');
                        
                        // example
                        removeFromStorage('theme');
                    </code><a name="serialize"></a>
                </pre>
            </p>
            <br />
            <h2>serialize</h2>
            <p>Prepares form data as key/value pairs to send via Ajax posts or requests..</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            form:  css class that identifies the form to serialize
                        -----------------------------------------------------------------*/
                        serialize(form);
                        
                        // example
                        &lt;form class="signup-form"&gt;...&lt;/form&gt;

                        serialize('.signup-form');
                    </code><a name="showmodal"></a>
                </pre>
            </p>
            <br />
            <h2>showModal</h2>
            <p>Specifically unhides a Bladewind <a href="/component/modal">Modal</a> component.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:    css class that identifies the modal to unhide
                        -----------------------------------------------------------------*/
                        showModal(element);
                        
                        // example
                        showModal('.make-payment');
                    </code><a name="stringcontains"></a>
                </pre>
            </p>
            <br />
            <h2>stringContains</h2>
            <p>Checks to see if a string contains the specified keyword. Returns true if string contains the keyword and 
            false if string does not contain the keyword.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            str:        main string to check keyword against
                            keyword:    keyword to check if it's contained in str
                        -----------------------------------------------------------------*/
                        stringContains(str, keyword);
                        
                        // example
                        stringContains(location.href, '/admin');
                    </code><a name="unhide"></a>
                </pre>
            </p>
            <br />
            <h2>unhide</h2>
            <p>Unhides any DOM element.</p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        /* ---------------------------------------------------------------
                            element:    css class that identifies the element to unhide
                            elementIsDomObject: is the element a dom Object
                        -----------------------------------------------------------------*/
                        unhide(element, elementIsDomObject = false);
                        
                        // example
                        unhide('.top-bar');
                        unhide(domEl('.top-bar'), true);
                    </code><a name="validateform"></a>
                </pre>
            </p>
            <br />
            <h2>validateForm</h2>
            <p>
                Performs a very basic not empty validation on a form that has input fields marked as <code class="inline">required</code>. 
                This won't work if the input fields have not been marked as required. If you're using the Bladewind <a href="/component/textbox">Textbox</a> component, 
                you will need to set the attribute <code class="inline text-red-500">required="true"</code>. If you want to validate non-Bladewind input fields, add <code class="inline text-red-500">class="required"</code> to your input field. 
                At the moment, this function only works on text-based input fields and the textarea field. See the <a href="/component/textbox#validate">Validating Input Fields</a> section of the Textbox component documentation.
            </p>
            <p>
                <pre class="language-js line-numbers" data-line="19">
                    <code>
                        /* ---------------------------------------------------------------
                            form:    css class that identifies the form to validate
                        -----------------------------------------------------------------*/
                        validateForm(form);
                        
                        // example
                        &lt;form class="signup-form"&gt;
                            &lt;x-bladewind.input required="true" name="fullname" label="Name" /&gt;
                            &lt;x-bladewind.input required="true" name="email" label="Email" /&gt;
                            &lt;x-bladewind.input required="true" name="mobile" label="Mobile" numeric="true" /&gt;
                        &lt;/form&gt;

                        domEl('.signup-form').addEventListener('submit', function (e){
                            e.preventDefault();
                            signUp();
                        });

                        signUp = () => {
                            if ( validateForm('.signup-form') ) {
                                // form is valid.. do this
                                unhide('.btn-signup .bw-spinner');
                                ajaxCall('/user/signup', 'signUpCallback', serialize('.signup-form'));
                            }
                        }
                    </code>
                </pre>
            </p>







            <p>&nbsp;</p>

        </div>
        <div class="sm:w-1/4 grow-0 mb-8">
            <nav class="sm:pl-8 sm:fixed sm:h-screen sm:overflow-y-scroll -mt-6">
                <h5 class="mb-3 my-7 font-semibold text-slate-900 dark:text-slate-200">Sections</h5></li>
                <div class="space-y-2">
                    <div class="flex items-center"><div class="dot"></div><a href="#top">addToStorage</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#animatecss">animateCSS</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#changecss">changeCss</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#changecssfordomarray">changeCssForDomArray</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#domel">domEl</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#domels">domEls</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#getfromstorage">getFromStorage</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#hide">hide</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#hidemodal">hideModal</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#isnumberkey">isNumberKey</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#removefromstorage">removeFromStorage</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#serialize">serialize</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#showmodal">showModal</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#stringcontains">stringContains</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#unhide">unhide</a></div>
                    <div class="flex items-center"><div class="dot"></div><a href="#validateform">validateForm</a></div>
                </div>
            </nav>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.extra-helpers');
        </script>
    </x-slot>
</x-app>