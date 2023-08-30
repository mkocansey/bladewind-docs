<x-app>
    <x-slot:title>Modal Component</x-slot:title>
    <x-slot:page_title>Modal</x-slot:page_title>
    <p>
        The modal component is useful for displaying content that is overlayed on the primary page content.
    </p>

    <h2 id="default">Default Modal</h2>
    <p>
         Modals are mostly displayed when an action is triggered, say when a button is clicked.
        All BladewindUI modals are invoked via a javascript helper function bundled with the component.
        <code class="inline text-red-500">showModal('name-of-modal');</code>. Like with all BladewindUI components,
        the syntax for cooking up a modal is very simple.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('tnc-agreement')">Basic modal</x-bladewind::button>
        <x-bladewind::button onclick="showModal('tnc-agreement-titled')" class="mt-2 sm:mt-0">Basic modal with a title</x-bladewind::button>
        <x-bladewind::modal name="tnc-agreement">
            Please agree to the terms and conditions of the agreement before proceeding. By clicking the OKAY button you agree to let your machine explode 💥
        </x-bladewind::modal>
        <x-bladewind::modal name="tnc-agreement-titled" title="Agree or Disagree">
            Please agree to the terms and conditions of the agreement before proceeding.
        </x-bladewind::modal>
    </p>

    <pre class="language-markup line-numbers" data-line="11,17">
        <code>
            &lt;x-bladewind.button
                onclick="showModal('tnc-agreement')"&gt;
                Basic modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.button
                onclick="showModal('tnc-agreement-titled')"&gt;
                Basic modal with a title
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                name="tnc-agreement"&gt;
                Please agree to the terms and conditions of
                the agreement before proceeding.
            &lt;/x-bladewind.modal&gt;

            &lt;x-bladewind.modal
                name="tnc-agreement-titled"
                title="Agree or Disagree"&gt;
                Please agree to the terms and conditions of
                the agreement before proceeding.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <p>
        <x-bladewind::alert show_close_icon="false">
            IMPORTANT: BladewindUI Modals are created, targetted and invoked using the <code class="inline text-red-500">name</code> attribute.
            You can have several modals on the same page but it is very important to provide unique names for each modal.
        </x-bladewind::alert>
    </p>
    <p>
        Clicking on the backdrop of the modal or on the cancel button will by default dismiss the modal. You probably guessed it. The <code class="inline text-red-500">hideModal('name-of-modal');</code> helper function is called to dismiss modals.
        It is possible to prevent the backdrop or the cancel button from closing the modal. See the <a href="#cant-dismiss">Non-dismissed modal</a> section below.
    </p>

    <h2 id="types">Different Types</h2>
    <p>
        The BladewindUI modal component comes prebuilt with some default types for the common use cases.
        This can be achieved by setting the <code class="inline text-red-500">type</code> attribute on the modal component. The default <code class="inline text-red-500">type=""</code>.
        All the type attribute does is append the appropriate icons that match the type of modal.
    </p>
    <h3>Info Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="info"</code> on the modal component. The default icon changes to a blue info icon.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('info')">Info Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('info')"&gt;
                Info Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                type="info"
                title="General Info"
                name="info"&gt;
                We really think you should buy some Bitcoin
                despite it's ups and dowms. What sayeth thou?
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Error Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="error"</code> on the modal component. The default icon changes to a red exclamation mark.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('error')">Error Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('error')"&gt;
                Error Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                type="error"
                title="Delete Not Allowed"
                name="error"&gt;
                You do not have permissions to delete this user.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Warning Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="warning"</code> on the modal component. The default icon changes to a yellow bell icon.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('warning')">Warning Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('warning')"&gt;
                Warning Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                type="warning"
                title="First warning"
                name="warning"&gt;
                Hmmm...This is your first warning. Two more warnings and you are off this platform.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Success Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">type="success"</code> on the modal component. The default icon changes to a green thumbs up icon.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('success')">Success Modal</x-bladewind::button>
    </p>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('success')"&gt;
                Success Modal
            &lt;/x-bladewind.button&gt;

           &lt;x-bladewind.modal
                type="success"
                title="User Deleted"
                name="success"&gt;
                Yayy.. User deleted successfully
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Stretched Action Buttons</h3>
    <p>
        Some users prefer to have their action buttons span the entire width of the modal. To achieve this simply set <code class="inline text-red-500">stretched_action_buttons="true"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('stretched')">Stretched Buttons Modal</x-bladewind::button>
    </p>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('stretched')"&gt;
                Success Modal
            &lt;/x-bladewind.button&gt;

           &lt;x-bladewind.modal
                title="Stretched Buttons"
                stretched-action_buttons="true"
                name="stretched"&gt;
                The action buttons in this modal have been stretched.
                This means each button gets its own line. Cool right?
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <x-bladewind::modal type="info" title="General Info" name="info">
        We really think you should buy some Bitcoin despite it's ups and dowms. What sayeth thou?
    </x-bladewind::modal>
    <x-bladewind::modal type="error" title="Delete Not Allowed" name="error">
        You do not have permissions to delete this user.
    </x-bladewind::modal>
    <x-bladewind::modal type="warning" title="First warning" name="warning">
        Hmmm...This is your first warning. Two more warnings and you are off this platform.
    </x-bladewind::modal>

    <x-bladewind::modal type="success" title="User Deleted" name="success">
        The user info is gone for good. Don't expect to see it in the archives.
    </x-bladewind::modal>

    <x-bladewind::modal title="Stretched Buttons" name="stretched" stretch_action_buttons="true">
        The action buttons in this modal have been stretched. This means each button gets its own line.
        Cool right?
    </x-bladewind::modal>

    <h2 id="sizes">Different Sizes</h2>
    <p>
        <x-bladewind::alert show_close_icon="false" show_icon="false">On mobile the modal has just one size</x-bladewind::alert>
    </p>
    <p>
        You could tell the above modals looked quite squashed. The BladewindUI modal component comes with a size option that allows your content to breath in the modals.
        This can be achieved by setting the <code class="inline text-red-500">size</code> attribute on the modal component. The default <code class="inline text-red-500">size="small"</code>.
        Below are all the available sizes. All sizes are the same on mobile.
    </p>
    <h3>Tiny Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="tiny"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('tiny-modal')">Tiny Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('tiny-modal')"&gt;
                Tiny Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                size="tiny"
                title="Tiny Modal"
                name="tiny-modal"&gt;
                I am the tiniest in the modal family. Don't hate.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Small Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="small"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('small-modal')">Small Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('small-modal')"&gt;
                Small Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                size="small"
                title="Small Modal"
                name="small-modal"&gt;
                I am the smallest in the modal family. Don't hate.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Medium Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="medium"</code> on the modal component.
        This is the default so it is not really necessary to set the attribute on the component if you want to use the medium modal size.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('medium-modal')">Medium Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.button onclick="showModal('medium-modal')"&gt;
                Medium Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                title="Medium Modal"
                name="medium-modal"&gt;
                I am the medium sized modal. Also the default if you do not set a size.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Big Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="big"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('big-modal')">Big Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('big-modal')"&gt;
                Big Modal
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                size="big"
                title="Big Modal"
                name="big-modal"&gt;
                English can be quite confusing. How is big different from large? You be the judge!
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Large Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="large"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('large-modal')">Large Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('large-modal')"&gt;
                Large Modal
            &lt;/x-bladewind.button&gt;

           &lt;x-bladewind.modal
                size="large"
                title="Large Modal"
                name="large-modal"&gt;
                I am the large modal. If I am not large enough to contain your needs, check out my xl brother.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>XL Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="xl"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('xl-modal')">xl Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('xl-modal')"&gt;
                Xl Modal
            &lt;/x-bladewind.button&gt;

           &lt;x-bladewind.modal
                size="xl"
                title="XL Modal"
                name="xl-modal"&gt;
                I am the extra large modal. How do you like my size now. You could fill me up with some much needed content.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>OMG Modal a.k.a Full Width Modal</h3>
    <p>
        This requires that you set <code class="inline text-red-500">size="omg"</code> on the modal component.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('omg-modal')">omg Modal</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('omg-modal')"&gt;
                OMG Modal
            &lt;/x-bladewind.button&gt;

           &lt;x-bladewind.modal
                size="omg"
                title="Full Width Modal"
                name="omg-modal"&gt;
                I am the full width modal. My nickname is OMG. I take up the entire screen. I do not know why you will need a modal like this but well,
                like they say, it is better to have and not use that need and not have.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <x-bladewind::modal size="tiny" title="Tiny Modal" name="tiny-modal">
        I am the tiniest in the modal family. I am probably rarely used.
    </x-bladewind::modal>
    <x-bladewind::modal size="small" title="Small Modal" name="small-modal">
        I am the smallest in the modal family. I am probably the second most used.
    </x-bladewind::modal>
    <x-bladewind::modal size="medium" title="Medium Modal" name="medium-modal">
        I am the medium sized modal. Also the default if you do not set a size.
    </x-bladewind::modal>
    <x-bladewind::modal size="big" title="Big Modal" name="big-modal">
        English can be quite confusing. How is big different from large? You be the judge!
    </x-bladewind::modal>
    <x-bladewind::modal size="large" title="Large Modal" name="large-modal">
        I am the large modal. If I am not large enough to contain your needs, check out my xl brother.
    </x-bladewind::modal>
    <x-bladewind::modal size="xl" title="XL Modal" name="xl-modal">
        I am the extra large modal. How do you like my size now. You could fill me up with some much needed content.
    </x-bladewind::modal>
    <x-bladewind::modal size="omg" title="Full Width Modal" name="omg-modal">
        I am the full width modal. My nickname is OMG. I take up the entire screen. I do not know why you will need a modal like this but well,
        like they say, it is better to have and not use that need and not have.
    </x-bladewind::modal>

    <h2 id="actions">Action Buttons</h2>
    <p>The modal component by default shows a <code class="inline text-red-500">Cancel</code> and <code class="inline text-red-500">Okay</code> button.
    Both buttons by default close the modal when clicked. It is possible to show either of the buttons or even none of the buttons.</p>
    <p>If you don't want your buttons to say <b>Cancel</b> and <b>Okay</b>, set the <code class="inline text-red-500">cancel_button_label</code> and
    <code class="inline text-red-500">ok_button_label</code> attributes to whatever text you want the buttons to display.</p>
    <p>
        To hide the <code class="inline text-red-500">cancel</code> button, simply set <code class="inline text-red-500">cancel_button_label=""</code>. When the button label is blank, the button won't be displayed.
        In the same way, to hide the primary button, the okay button in this case, simply set <code class="inline text-red-500">ok_button_label=""</code>. When the button label is blank, the button won't be displayed.
    </p>
    <x-bladewind::modal title="No Cancel Button" name="no-cancel" cancel_button_label="">
        I have no cancel button. Just okay and that is fine.
    </x-bladewind::modal>
    <x-bladewind::modal title="No Okay Button" name="no-okay" ok_button_label="">
        I have no okay button. Just cancel this thing and let's all go home.
    </x-bladewind::modal>
    <h3>No Cancel Button</h3>
    <p>
        <x-bladewind::button onclick="showModal('no-cancel')">No cancel button</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="8">
        <code>
            &lt;x-bladewind.button onclick="showModal('no-cancel')"&gt;
                No cancel button
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                title="No Cancel Button"
                name="no-cancel"
                cancel_button_label=""&gt;
                I have no cancel button. Just okay and that is fine.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>No Okay Button</h3>
    <p>
        <x-bladewind::button onclick="showModal('no-okay')" class="mt-2 sm:mt-0">No okay button</x-bladewind::button>
    </p>
    <pre class="language-markup line-numbers" data-line="8">
        <code>
            &lt;x-bladewind.button onclick="showModal('no-okay')"&gt;
                No okay button
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                title="No Okay Button"
                name="no-okay"
                ok_button_label=""&gt;
                I have no okay button. Just cancel this thing and let's all go home.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <h3>Hiding Both Action Buttons</h3>
    <p>
        Your guess is right. To hide both the okay and cancel buttons you can set
        <code class="inline text-red-500">cancel_button_label=""</code> and <code class="inline text-red-500">ok_button_label=""</code>. However, there is a shorter way to achieve this.
        Instead, set the <code class="inline text-red-500">show_action_buttons="false"</code> attribute. This will hide both action buttons.
        A no-action-buttons modal can be useful if you want to have a form in a modal with its own button that submits the form.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('no-action-buttons')">No action buttons</x-bladewind::button>
    </p>
    <x-bladewind::modal title="No Action Buttons" name="no-action-buttons" show_action_buttons="false">
        I have no action buttons. Only the backdrop can close me now.
    </x-bladewind::modal>

    <pre class="language-markup line-numbers" data-line="6">
        <code>
            &lt;x-bladewind.button onclick="showModal('no-action-buttons')"&gt;No action buttons&lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                title="No Action Buttons"
                name="no-action-buttons"
                show_action_buttons="false"&gt;
                I have no action buttons. Only the backdrop can close me now.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>
    <h3>Action Button Actions</h3>
    <p>
        By default both action buttons close the modal. It is possible to change these default actions. To achieve this you will need to
        set the <code class="inline text-red-500">cancel_button_action</code> and <code class="inline text-red-500">ok_button_action</code> attributes.
        The default values are <code class="inline text-red-500">cancel_button_action="close"</code> and <code class="inline text-red-500">ok_button_action="close"</code>.
        The attributes expect javascript functions as the values.
    </p>
    <p>
        <x-bladewind::button onclick="showModal('custom-actions')">CLick me for custom actions</x-bladewind::button>
    </p>
    <x-bladewind::modal
        size="big"
        center_action_buttons="true"
        type="warning"
        title="Confirm User Deletion"
        ok_button_action="alert('as you wish')"
        cancel_button_action="alert('good choice')" close_after_action="false"
        name="custom-actions" ok_button_label="Yes, delete" cancel_button_label="don't delete">
        Are you sure you want to delete this user? This action cannot be undone.
    </x-bladewind::modal>
    <pre class="language-markup line-numbers" data-line="7,10,11">
        <code>
            &lt;x-bladewind.button onclick="showModal('custom-actions')"&gt;
                CLick me for custom actions
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                size="big"
                center_action_buttons="true"
                type="warning"
                title="Confirm User Deletion"
                ok_button_action="alert('as you wish')"
                cancel_button_action="alert('good choice')"
                close_after_action="false"
                name="custom-actions"
                ok_button_label="Yes, delete"
                cancel_button_label="don't delete"&gt;
                Are you sure you want to delete this user? This action cannot be undone.
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <p>
        You will notice from the custom actions example above that we introduced a new attribute, <code class="inline text-red-500">center_action_buttons="true"</code>. This centres the action buttons in the action bar.
        By default they are right aligned and might look off when using the small or medium modal sizes.
    </p>
    <p>
        We also introduced the attribute <code class="inline text-red-500">close_after_action="false"</code>.
        By default, the modal is dismissed after clicking any of the action buttons. Setting this attribute to <code class="inline text-red-500">false</code> will ensure the modal stays open after clicking any of the action buttons.
    </p>

    <h2 id="cant-dismiss">Non-Dismissible Modal</h2>
    <p>By default the modal component can be closed using the backdrop or any of the action buttons. There are cases when you really don't want the user to dismiss the modal until a choice has been made or an action has been performed.</p>
    <p>Getting this result is simple. Just set <code class="inline text-red-500">backdrop_can_close="false"</code>. If you are using the modals with the action buttons you will also need to set the actions of each button. See <a href="#actions">Action Buttons</a> above.</p>
    <p>In this example, we assume your app is very data sensitive and you want users to be able to lock their screens when stepping away from their computers.</p>
    <p>
        <x-bladewind::alert type="warning" show_close_icon="false" show_icon="false">Refresh the page to get out of locked mode</x-bladewind::alert>
    </p>
    <p>
        <x-bladewind::button onclick="showModal('lock-screen')" icon="lock" class="text-white">lock the screen</x-bladewind::button>
    </p>
    <x-bladewind::modal show_action_buttons="false" backdrop_can_close="false" name="lock-screen">
            <div class="flex mx-auto justify-center my-2">
                <x-bladewind::avatar class=""
                    image="https://lh3.googleusercontent.com/a-/AOh14GhSotQTt_njzqqq-265MKM5z5iPP9m-_A2myyrGXQ=s288-p-rw-no" />
            </div>
            <div class="my-4">
                You will need to unlock the screen to continue using this application.
            </div>
            <x-bladewind::input placeholder="Enter your password to unlock" type="password" />
            <x-bladewind::button class="w-full">Check password</x-bladewind::button>

    </x-bladewind::modal>

    <pre class="language-markup line-numbers" data-line="7">
        <code>
            &lt;x-bladewind.button onclick="showModal('lock-screen')"&gt;
                &lt;svg&gt;...&lt;/svg&gt; lock the screen
            &lt;/x-bladewind.button&gt;

            &lt;x-bladewind.modal
                show_action_buttons="false"
                backdrop_can_close="false"
                name="lock-screen"&gt;

                    &lt;div class="flex mx-auto justify-center my-2"&gt;
                        &lt;x-bladewind.avatar class="" image="/path/to/the/image/file" /&gt;
                    &lt;/div&gt;
                    &lt;div class="my-4"&gt;
                        You will need to unlock the screen to continue using this application.
                    &lt;/div&gt;

                    &lt;x-bladewind.input
                        placeholder="Enter your password to unlock"
                        type="password" /&gt;

                    &lt;x-bladewind.button class="w-full"&gt;Check password&lt;/x-bladewind.button&gt;

            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Modal component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>type</td>
            <td><em>blank</em></td>
            <td><code class="inline">info</code> <code class="inline">error</code> <code class="inline">warning</code> <code class="inline">success</code></td>
        </tr>
        <tr>
            <td>title</td>
            <td><em>blank</em></td>
            <td>String. Defines the title of the modal.</td>
        </tr>
        <tr>
            <td>name</td>
            <td>bw-modal</td>
            <td>Uniquely identifies a modal. This attribute is very important if you want to prevent erratic behaviour of modals.</td>
        </tr>
        <tr>
            <td>ok_button_label</td>
            <td>okay</td>
            <td>Specify the label to be displayed on the primary action button.</td>
        </tr>
        <tr>
            <td>cancel_button_label</td>
            <td>cancel</td>
            <td>Specify the label to be displayed on the secondary action button.</td>
        </tr>
        <tr>
            <td>ok_button_action</td>
            <td>close</td>
            <td>Expects a javascript function that will be called when the primary action button is clicked.</td>
        </tr>
        <tr>
            <td>cancel_button_action</td>
            <td>close</td>
            <td>Expects a javascript function that will be called when the secondary action button is clicked.</td>
        </tr>
        <tr>
            <td>close_after_action</td>
            <td>true</td>
            <td>Specifies whether the modal stays open after any of the action buttons are clicked.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>backdrop_can_close</td>
            <td>true</td>
            <td>Specifies whether clicking on the modal backdrop should close the modal.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>show_action_buttons</td>
            <td>true</td>
            <td>Specifies whether the action buttons should be displayed.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>center_action_buttons</td>
            <td>true</td>
            <td>Specifies whether the action buttons should be centered in the action bar.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>stretch_action_buttons</td>
            <td>false</td>
            <td>Specifies whether the action buttons should stretch the entire width of the modal. Each button will be on its own line.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>size</td>
            <td>big</td>
            <td>Defines the size of the modal. Arranged from smallest to largest. <br> <code class="inline">tiny</code> <code class="inline">small</code> <code class="inline">medium</code>
            <code class="inline">big</code> <code class="inline">large</code> <code class="inline">xl</code> <code class="inline">omg</code></td>
        </tr>
        <tr>
            <td>class</td>
            <td><em>blank</em></td>
            <td>Any additonal css classes can be added using this attribute.</td>
        </tr>
    </x-bladewind::table>

    <h3>Modal with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind.modal
                type="warning"
                title="Modal with all features"
                name="full-modal"
                ok_button_label="yes"
                cancel_button_label="no"
                close_after_action="false"
                ok_button_action="alert('say ok')"
                cancel_button_action="alert('say nay')"
                backdrop_can_close="false"
                show_action_buttons="false"
                center_action_buttons="true"
                size="medium"
                class="shadow-sm"&gt;
                ...
            &lt;/x-bladewind.modal&gt;
        </code>
    </pre>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > modal.blade.php</code> and
        <code class="inline">resources > views > components > bladewind > modal-icons.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#default">Default modal</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#types">Different types</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#sizes">Different sizes</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#actions">Action buttons</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#cant-dismiss">Non-dismissible modal</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-modal');
        </script>
    </x-slot>
</x-app>
