<x-app>
    <x-slot:title>Credit Card Component</x-slot:title>
    <x-slot:page_title>Credit Card</x-slot:page_title>

    <p>
        <code class="inline">x-bladewind::credit-card</code> is a flippable credit card input. The front holds the
        card number, cardholder name, and expiry; a small round button on the card's right edge flips it to the
        back to enter the security code. The network name is detected live from the number as it is typed, and
        capped and grouped the way that network actually formats its numbers, four digits at a time for most
        networks, four-six-five for American Express.
    </p>
    <p>
        This component is not form-associated on purpose. Card data is sensitive and normally belongs with a
        payment provider's own tokenization SDK, not a plain form submission. Read the current value with
        <code class="inline">window.yourCardName.value</code>, or set <code class="inline">on_change</code> to a
        JavaScript function called with the same value whenever it changes.
    </p>

    <h2 id="basic">Basic Usage</h2>
    <x-bladewind::credit-card cardholder_name="Emma Reid"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card cardholder_name="Emma Reid"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="flip">Flipping To The CVC</h2>
    <p>
        Click the round button on the card's edge to flip to the back and enter the security code. The same button
        flips back, and so does the Escape key while flipped.
    </p>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card flipped="true"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="prefill">Pre-Filling Fields</h2>
    <p>
        <code class="inline">number</code>, <code class="inline">cardholder_name</code>,
        <code class="inline">expiry_month</code>, <code class="inline">expiry_year</code>, and
        <code class="inline">cvc</code> are all plain attributes. <code class="inline">number</code> accepts either
        raw digits or a masked saved-card value such as <code class="inline">•••• •••• •••• 4242</code>, preserved
        as-is for an edit screen rather than reformatted.
    </p>
    <x-bladewind::credit-card
        cardholder_name="Emma Reid"
        number="4242424242424242"
        expiry_month="07"
        expiry_year="28"
    ></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card
                cardholder_name="Emma Reid"
                number="4242424242424242"
                expiry_month="07"
                expiry_year="28"&gt;
            &lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="brand">Forcing A Network</h2>
    <p>
        Leave <code class="inline">brand</code> unset to auto-detect from the number. Set it explicitly to
        override, for example a saved card where the network is already known but the full number is not shown.
    </p>
    <x-bladewind::credit-card brand="visa" number="•••• •••• •••• 4242"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card brand="visa" number="•••• •••• •••• 4242"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="theming">Theming</h2>
    <p>Set <code class="inline">color</code> to any colour in the palette to change the gradient.</p>
    <x-bladewind::credit-card color="green" cardholder_name="Emma Reid"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card color="green"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <p>Set <code class="inline">variant="outline"</code> for a bare card silhouette instead of the full-colour gradient face.</p>
    <x-bladewind::credit-card variant="outline" cardholder_name="Emma Reid"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card variant="outline" cardholder_name="Emma Reid"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="inline">Inline Card Information</h2>
    <p>
        Set <code class="inline">variant="inline"</code> for the compact layout: card number on one row, expiry and
        CVC on the next, with no cardholder name field or flip animation.
    </p>
    <x-bladewind::credit-card variant="inline"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card variant="inline"&gt;&lt;/x-bladewind::credit-card&gt;
        </code>
    </pre>

    <h2 id="validation">Validation</h2>
    <p>
        With <code class="inline">required="true"</code>, <code class="inline">window.yourCardName.validate()</code>
        checks that every field is complete: a full-length number for the detected network, a non-blank name, a
        non-expired month/year, and a full-length security code. Add
        <code class="inline">show_error_inline="true"</code> and <code class="inline">error_message</code> to show
        a message beneath the card when it fails.
    </p>
    <x-bladewind::credit-card name="checkout_card" required="true" show_error_inline="true" error_message="Complete the card details to continue"></x-bladewind::credit-card>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::credit-card
                name="checkout_card"
                required="true"
                show_error_inline="true"
                error_message="Complete the card details to continue"&gt;
            &lt;/x-bladewind::credit-card&gt;

            &lt;script&gt;
                payButton.addEventListener('click', () => {
                    if (!window.checkout_card.validate()) return;
                    // proceed
                });
            &lt;/script&gt;
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>name</td>
            <td>auto-generated</td>
            <td>Used as the JS variable the component is exposed on (<code class="inline">window.{name}</code>) and to scope its script tags. Not a form field: this component does not submit.</td>
        </tr>
        <tr>
            <td>cardholder_name</td>
            <td><em>blank</em></td>
            <td>Name printed on the card.</td>
        </tr>
        <tr>
            <td>number</td>
            <td><em>blank</em></td>
            <td>Card number, auto-grouped per network as the user types. A masked value like <code class="inline">•••• •••• •••• 4242</code> is preserved as-is.</td>
        </tr>
        <tr>
            <td>expiry_month / expiry_year</td>
            <td><em>blank</em></td>
            <td>Two-digit month (<code class="inline">01</code>-<code class="inline">12</code>) and year.</td>
        </tr>
        <tr>
            <td>cvc</td>
            <td><em>blank</em></td>
            <td>Security code (3 digits, 4 for American Express).</td>
        </tr>
        <tr>
            <td>brand</td>
            <td>auto-detected</td>
            <td><code class="inline">visa</code> <code class="inline">mastercard</code> <code class="inline">amex</code> <code class="inline">discover</code> <code class="inline">diners</code> <code class="inline">jcb</code> <code class="inline">unionpay</code> <code class="inline">maestro</code></td>
        </tr>
        <tr>
            <td>color</td>
            <td>primary</td>
            <td>Gradient colour, from the shared <a href="/customize/colours">palette</a>. Ignored in the outline variant.</td>
        </tr>
        <tr>
            <td>variant</td>
            <td>gradient</td>
            <td><code class="inline">gradient</code> for the full-colour face, <code class="inline">outline</code> for a bare silhouette, or <code class="inline">inline</code> for number/expiry/CVC fields only.</td>
        </tr>
        <tr>
            <td>flipped</td>
            <td>false</td>
            <td>Shows the back face. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>disabled</td>
            <td>false</td>
            <td>Disables every field and hides the flip button. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>readonly</td>
            <td>false</td>
            <td>Makes every field read-only. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>required</td>
            <td>false</td>
            <td>Whether <code class="inline">validate()</code> fails while any field is incomplete. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>error_message</td>
            <td><em>blank</em></td>
            <td>Message shown when validation fails and <code class="inline">show_error_inline</code> is set.</td>
        </tr>
        <tr>
            <td>show_error_inline</td>
            <td>false</td>
            <td>Renders the error message beneath the card. <code class="inline">true</code> <code class="inline">false</code></td>
        </tr>
        <tr>
            <td>on_change</td>
            <td><em>blank</em></td>
            <td>Name of a JavaScript function called with the structured value whenever it changes.</td>
        </tr>
        <tr>
            <td>class</td>
            <td><em>blank</em></td>
            <td>Additional CSS classes for the wrapper element.</td>
        </tr>
    </x-bladewind::table>

    <x-bladewind::alert show_close_icon="false">
        The source file for this component is available in <code class="inline">resources > views > components > bladewind > credit-card.blade.php</code>
    </x-bladewind::alert>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#basic">Basic usage</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#flip">Flipping to the CVC</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#prefill">Pre-filling fields</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#brand">Forcing a network</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#theming">Theming</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#inline">Inline card information</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#validation">Validation</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>

    <x-slot:scripts>
        <script>
            selectNavigationItem('.component-credit-card');
        </script>
    </x-slot:scripts>
</x-app>
