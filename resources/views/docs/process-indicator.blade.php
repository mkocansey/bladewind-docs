<x-app>
    <x-slot name="title">Process Indicator Component</x-slot>
    <h1 class="page-title">Process Indicator</h1>
    <div class="flex flex-col-reverse sm:flex-row">
        <div class="grow sm:w-3/4">
            <p>
                Show that a process is in progress. A process can have two possible outcomes. It could either pass or fail. The process indicator can be used within the page but looks cooler when used in a <a href="/component/modal">Modal component</a>.
                There are three parts to using the process indicator component.
            </p><br />
            <p>
                <div class="grid grid-cols-3">
                    <div class="text-center">
                        <code class="inline">processing</code><br />
                        <x-bladewind::processing name="processing" message="Deleting pending payment" hide="false" />
                    </div>
                    <div class="text-center">
                        <code class="inline">process passed</code><br />
                        <x-bladewind::process-complete name="delete-yes" process_completed_as="passed" button_label="Done"
                            button_action="alert('i passed')" message="Pending payment was deleted successfully" hide="false" />
                    </div>
                    <div class="text-center">
                        <code class="inline">process failed</code><br />
                        <x-bladewind::process-complete name="delete-no" process_completed_as="failed" button_label="Done"
                        button_action="alert('i failed')" message="Pending payment could not be deleted" hide="false" />
                    </div>
                </div>
            </p><br />
            <p>
                Now that we have seen all three parts that make this component, let's build a flow that makes use of all three parts. This is heavily dependent on Javascript but nothing scary.
                Let's simulate deleting of a pending payment.
            </p>

            <x-bladewind::button
                onclick="deletePayment('pass')"
                size="small">Delete Payment and Pass</x-bladewind::button> &nbsp;&nbsp;&nbsp;
            <x-bladewind::button onclick="deletePayment('fail')" size="small">Delete Payment and Fail</x-bladewind::button>

            <x-bladewind::modal title="" name="delete-paymentz" show_action_buttons="false">
                <x-bladewind::processing name="processing-delete" message="Deleting pending payment" hide="false" />

                <x-bladewind::process-complete name="delete-payment-yes" process_completed_as="passed" button_label="Done"
                    button_action="alert('i passed... closing modal now'); hideModal('delete-paymentz')" message="Pending payment was deleted successfully" />

                <x-bladewind::process-complete name="delete-payment-no" process_completed_as="failed" button_label="Done"
                    button_action="alert('i failed... closing modal now'); hideModal('delete-paymentz')" message="Pending payment could not be deleted" />
            </x-bladewind::modal>
            <script>
                var m;
                deletePayment = function(mode) {
                    m = mode;
                    hide('.processing-delete');
                    hide('.delete-payment-yes');
                    hide('.delete-payment-no');
                    showModal('delete-paymentz');
                    unhide('.processing-delete');
                    setTimeout(function() {
                        hide('.processing-delete');
                        hide('.delete-payment-yes');
                        hide('.delete-payment-no');
                        (m == 'pass') ? unhide('.delete-payment-yes'): unhide('.delete-payment-no');
                    }, 3000);
                }
            </script>
            <p>&nbsp;</p>
            <p>
                Let's break down what is happening by first looking at the buttons that triggered the modal.
            </p>
            <p>
                <pre class="language-markup line-numbers" data-line="2,8">
                    <code>
                        &lt;x-bladewind.button
                            onclick="deletePayment('pass')"
                            size="small"&gt;
                            Delete Payment and Pass
                        &lt;/x-bladewind.button&gt;

                        &lt;x-bladewind.button
                            onclick="deletePayment('fail')"
                            size="small"&gt;
                            Delete Payment and Fail
                        &lt;/x-bladewind.button&gt;
                    </code>
                </pre>
            </p>
            <p>
                Next, let's look at the modal element and the two possible process outcomes
            </p>
            <p>
                <pre class="language-markup line-numbers" data-line="1,6,12,14,20,22">
                    <code>
                        &lt;x-bladewind.modal
                            name="delete-paymentz"
                            show_action_buttons="false"&gt;

                            // this shows that process is in progress
                            &lt;x-bladewind.processing
                                name="processing-delete"
                                message="Deleting pending payment"
                                hide="false" /&gt;

                            // this is shown when process completes with a pass
                            &lt;x-bladewind.process-complete
                                name="delete-payment-yes"
                                process_completed_as="passed"
                                button_label="Done"
                                button_action="alert('i passed... closing modal now'); hideModal('delete-paymentz')"
                                message="Pending payment was deleted successfully" /&gt;

                            // this is shown when process completes with a failure
                            &lt;x-bladewind.process-complete
                                name="delete-payment-no"
                                process_completed_as="failed"
                                button_label="Done"
                                button_action="alert('i failed... closing modal now'); hideModal('delete-paymentz')"
                                message="Pending payment could not be deleted" /&gt;

                        &lt;/x-bladewind.modal&gt;
                    </code>
                </pre>
            </p>
            <p>
                Now let's take a look at the Javascript function both buttons are calling.
            </p>
            <p>
                <pre class="language-js line-numbers">
                    <code>
                        &lt;script&gt;
                            deletePayment = (mode) => {
                                // it is preferred to hide all three elements
                                // and show only the element that needs to be shown
                                // hide the processing delete element
                                hideHideables();

                                // show the modal and the processing delete element
                                // showModal() and unhide() are helper functions
                                // available in BladewindUI
                                showModal('delete-paymentz');
                                unhide('.processing-delete');

                                // this example only shows a specific outcome
                                // after 3 seconds based on which button was clicked.
                                // In your apps you will typically display an outcome
                                // based on some API return value or something similar
                                setTimeout(function() {

                                    hideHideables();

                                    // determine which process outcome to show
                                    (mode == 'pass') ?
                                        unhide('.delete-payment-yes') :
                                        unhide('.delete-payment-no');
                                }, 3000);
                            }

                            hideHideables = () => {
                                // hide() is a helper function available in BladewindUI
                                hide('.processing-delete');
                                hide('.delete-payment-yes');
                                hide('.delete-payment-no');
                            }
                        &lt;/script&gt;
                    </code>
                </pre>
            </p>

           <a name="attributes"></a>
           <br />

            <p>&nbsp;</p>
            <h2>Full List Of Attributes</h2>
            <p>The table below shows a comprehensive list of all the attributes available for the Process Indicator component.</p>
            @include('docs/announcement')
            <p><h3>Processing Component Attributes</h3></p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>processing</td>
                    <td>Unique name for the processing component. Usually useful to prevent erratic behaviour if there are multiple Process Indicators on the same page.</td>
                </tr>
                <tr>
                    <td>hide</td>
                    <td>true</td>
                    <td>The processing component is hidden by default. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
                <tr>
                    <td>message</td>
                    <td><em>blank</em></td>
                    <td>Message to display below the spinning icon.</td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <p><h3>Process Complete Component Attributes</h3></p>
            <x-bladewind::table striped="true">
                <x-slot name="header">
                    <th>Option</th>
                    <th>Default</th>
                    <th>Available Values</th>
                </x-slot>
                <tr>
                    <td>name</td>
                    <td>process-complete</td>
                    <td>Unique name for the process complete component. Usually useful to prevent erratic behaviour if there are multiple Process Complete components on the same page.</td>
                </tr>
                <tr>
                    <td>process_completed_as</td>
                    <td>passed</td>
                    <td>There are two possible values. This attribute determines which icon to display based on the outcome. A pass will display a green thumbs up icon. A fail will display a red thumbs down icon. <br /><code class="inline">passed</code> <code class="inline">failed</code></td>
                </tr>
                <tr>
                    <td>message</td>
                    <td><em>blank</em></td>
                    <td>Message to display below the thumbs up or down icon.</td>
                </tr>
                <tr>
                    <td>button_label</td>
                    <td><em>blank</em></td>
                    <td>Label to display on the call to action button when process is complete.</td>
                </tr>
                <tr>
                    <td>button_action</td>
                    <td><em>blank</em></td>
                    <td>Javascript function to call when the call to action button is clicked.</td>
                </tr>
                <tr>
                    <td>hide</td>
                    <td>true</td>
                    <td>The process complete component is hidden by default. <br /><code class="inline">true</code> <code class="inline">false</code></td>
                </tr>
            </x-bladewind::table>
            <p>&nbsp;</p>
            <h3 class="pb-2 ">Process Indicator with all attributes defined</h3>
            <pre class="language-markup line-numbers">
                <code>
                    &lt;x-bladewind.processing
                        name="processing-delete"
                        message="Deleting pending payment"
                        hide="false" /&gt;

                    // this is shown when process completes with a pass
                    &lt;x-bladewind.process-complete
                        name="delete-payment-yes"
                        process_completed_as="passed"
                        hide="false"
                        button_label="Done"
                        button_action="hideModal('delete-paymentz')"
                        message="Pending payment was deleted successfully" /&gt;

                    // this is shown when process completes with a failure
                    &lt;x-bladewind.process-complete
                        name="delete-payment-no"
                        process_completed_as="failed"
                        hide="false"
                        button_label="Done"
                        button_action="hideModal('delete-paymentz')"
                        message="Pending payment could not be deleted" /&gt;
                </code>
            </pre>

            <p>&nbsp;</p>
            <x-bladewind::alert show_close_icon="false">
                The source file for this component is available in <code class="inline">resources > views > components > bladewind > processing.blade.php</code>
                and <code class="inline">resources > views > components > bladewind > process-complete.blade.php</code>
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
            selectNavigationItem('.component-process-indicator');
        </script>
    </x-slot>
</x-app>
