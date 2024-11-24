/**
 * ----------------------------------------------
 * Helper functions for BladeWindUI components
 * ----------------------------------------------
 */

const currentModal = [];
let elName;

/**
 * Shortcut for document.querySelector.
 * @param {string} element - The element to find in the DOM.
 * @return {(Element|boolean)} The matching DOM element.
 * @see {@link https://bladewindui.com/extra/helper-functions#domel}
 */
const domEl = (element) => {
    return (document.querySelector(element) !== null) ? document.querySelector(element) : false;
};

/**
 * Alias for domEl(element)
 */
const dom_el = (element) => {
    return domEl(element);
};

/**
 * Shortcut for document.querySelectorAll.
 * @param {string} element - The element(s) to find in the DOM.
 * @param scope
 * @return {NodeListOf<*>|boolean} The collection of DOM elements.
 * @see {@link https://bladewindui.com/extra/helper-functions#domels}
 */
const domEls = (element, scope = null) => {
    if (scope) {
        if (typeof scope === 'string') {
            if (scope.indexOf('.') === -1 && scope.indexOf('#') === -1) {
                console.log(`${scope} needs to contain . or # to target it in the DOM`);
            }
            scope = document.querySelector(scope);
        }
        return scope.querySelectorAll(element);
    }
    return (document.querySelectorAll(element).length > 0) ? document.querySelectorAll(element) : false;
};

/**
 * Alias for domEls(element)
 */
const dom_els = (element) => {
    return domEls(element);
};

/**
 * Check to see if val is empty
 * @param {string} val - The string to test emptiness for
 * @return {boolean} True if string is empty
 */
const isEmpty = (val) => {
    let regex = /^\s*$/;
    return regex.test(val);
};

/**
 * Hide an element.
 * @param {string} element - The css class (name) of the element to hide.
 * @param {boolean} elementIsDomObject - If true, <element> will not be treated as a string but DOM element.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#hide}
 */
const hide = (element, elementIsDomObject = false) => {
    if ((!elementIsDomObject && domEl(element) != null) || (elementIsDomObject && element != null)) {
        changeCss(element, 'hidden', 'add', elementIsDomObject);
    }
};
/**
 * Display an element.
 * @param {Object|boolean} element - The css class (name) of the element to hide.
 * @param {boolean} elementIsDomObject - If true, <element> will not be treated as a string but DOM element.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#unhide}
 */
const unhide = (element, elementIsDomObject = false) => {
    if ((!elementIsDomObject && domEl(element) != null) || (elementIsDomObject && element != null)) {
        changeCss(element, 'hidden', 'remove', elementIsDomObject);
    }
};
/**
 * Clear validation errors. Used together with validateForm().
 * If the user provides a value for a form field, that was earlier marked as an error, clear it.
 * @param {Object} obj - The DOM element to target for clearing.
 * @return {void}
 */
const clearErrors = (obj) => {
    let el = obj.el;
    let elParent = obj.elParent;
    let elName = obj.elName;
    let showErrorInline = obj.showErrorInline;
    if (el.value !== '') {
        (elParent !== null) ?
            domEl(`.${elParent} .clickable`).classList.remove('!border-red-400') :
            el.classList.remove('!border-red-400');
        (showErrorInline) ? hide(`.${elName}-inline-error`) : '';
    } else {
        (elParent !== null) ?
            domEl(`.${elParent} .clickable`).classList.add('!border-red-400') :
            el.classList.add('!border-red-400');
        (showErrorInline) ? unhide(`.${elName}-inline-error`) : '';
    }
};
/**
 * Modify the css for a DOM element.
 * @param {Element|boolean} element - The class name of ID of the DOM element to modify.
 * @param {string} css - Comma separated list of css classes to apply to <element>.
 * @param {string} mode - Add|Remove. Determines if <css> should be added or removed from <element>.
 * @param {boolean} elementIsDomObject - If true, <element> will not be treated as a string but DOM element.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#changecss}
 * @example
 * changeCss('.email', 'border-2, border-red-500');
 * changeCss('.email', 'border-2, border-red-500', 'remove');
 * changeCss(domEl('.email'), 'border-2, border-red-500', 'remove', true);
 */
const changeCss = (element, css, mode = 'add', elementIsDomObject = false) => {
    // css can be comma separated
    // if !elementIsDomObject run it through domEl
    if (!elementIsDomObject) element = domEl(element);
    if (element) {
        if (css.indexOf(',') !== -1 || css.indexOf(' ') !== -1) {
            css = css.replace(/\s+/g, '').split(',');
            for (let classname of css) {
                (mode === 'add') ? element.classList.add(classname.trim()) : element.classList.remove(classname.trim());
            }
        } else {
            if (element.classList !== undefined) {
                (mode === 'add') ? element.classList.add(css) : element.classList.remove(css);
            }
        }
    }
};
/**
 * Validate a form and highlight each field that fails validation.
 *   element does not need to be a <form> tag. Can be any element containing form fields.
 * @param form
 * @return {boolean} True if validation passes and False if validation fails.
 * @see {@link https://bladewindui.com/extra/helper-functions#validateform}
 */
const validateForm = (form) => {
    let hasError = 0;
    let BreakException = {};
    let fieldToValidate = [];
    try {
        fieldToValidate = (typeof (form) === 'string') ? domEls(`${form} .required`) : form.querySelectorAll('.required');
        fieldToValidate.forEach((el) => {
            changeCss(el, '!border-red-500', 'remove', true);
            if (isEmpty(el.value)) {
                let elName = el.getAttribute('name');
                let elParent = el.getAttribute('data-parent');
                let errorMessage = el.getAttribute('data-error-message');
                let showErrorInline = el.getAttribute('data-error-inline');
                let errorHeading = el.getAttribute('data-error-heading');

                (elParent !== null) ?
                    changeCss(`.${elParent} .clickable`, '!border-red-400') :
                    changeCss(el, '!border-red-400', 'add', true);
                el.focus();
                if (errorMessage) {
                    (showErrorInline) ? unhide(`.${elName}-inline-error`) :
                        showNotification(errorHeading, errorMessage, 'error');
                }

                let listenerObj = {
                    'el': el,
                    'elParent': elParent,
                    'elName': elName,
                    'showErrorInline': showErrorInline
                };

                el.addEventListener('keyup', clearErrors.bind(null, listenerObj), false);

                hasError++;
                throw BreakException;
            }
        });
    } catch (e) {
    }
    return hasError === 0;
};


/**
 * Allow only numeric input in a text input field.
 * @param {event} event - The event object. Key events.
 * @param {boolean} with_dots - Should dots be allowed in the input. Useful when entering decimals.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#isnumberkey}
 * @example
 * onkeypress="return isNumberKey(event)"
 */
const isNumberKey = (event, with_dots = 1) => {
    let acceptedKeys = (with_dots === 1) ? /[\d\b\\.]/ : /\d\b/;
    if (!event.key.toString().match(acceptedKeys) && event.keyCode !== 8 && event.keyCode !== 9) {
        event.preventDefault();
    }
};

/**
 * Execute a user-defined function.
 * @param {string} func - The function to execute, with or without parameters.
 * @return {void}
 */
const callUserFunction = (func) => {
    if (func !== '' && func !== undefined) eval(func);
};

/**
 * Serialize a form into key/value pairs for ajax submission.
 * @param {string} form - The form to serialize.
 * @return {object} The serialized object.
 * @see {@link https://bladewindui.com/extra/helper-functions#serialize}
 */
const serialize = (form) => {
    let data = new FormData(domEl(form));
    let obj = {};
    for (let [key, value] of data) {
        /***
         ** in some cases the form field name and api parameter differ, and you want to
         ** display a more meaningful error message from Laravels $errors.. set an attr
         ** data-serialize-as on the form field. that value will be used instead of [key]
         ** example: input name="contact_name" data-serialize-as="contact_person"
         ** Laravel will display contact name field is required but contact_person : value
         ** will be sent to the API
         **/
        let thisElement = document.getElementsByName(key);
        let serializeAs = thisElement[0].getAttribute('data-serialize-as');
        obj[serializeAs ?? key] = value;
    }
    return obj;
};

/**
 * Check if string contains a keyword.
 * @param {string} str - The string to check for keyword existence.
 * @param {string} keyword - The keyword to check for.
 * @return {boolean} True if string contains keyword. False if it does not.
 * @see {@link https://bladewindui.com/extra/helper-functions#stringcontains}
 */
const stringContains = (str, keyword) => {
    if (typeof str !== 'string') return false;
    return (str.indexOf(keyword) !== -1);
};

var doNothing = () => {
}

/**
 * Modify the css for DOM elements of the same type.
 * @param {string} elements - The class name of ID of the DOM elements to modify.
 * @param {string} css - Comma separated list of css classes to apply to <elements>.
 * @param {string} mode - Add|Remove. Determines if <css> should be added or removed from <elements>.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#changecssfordomarray}
 */
const changeCssForDomArray = (elements, css, mode = 'add') => {
    if (domEls(elements).length > 0) {
        domEls(elements).forEach((el) => {
            changeCss(el, css, mode, true);
        });
    }
};


/**
 * Animate an element.
 * @param {string} element - The css class (name) of the element to animate.
 * @param {string} animation - The css animation class to be applied.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#animatecss}
 */
const animateCSS = (element, animation) =>
    new Promise((resolve, reject) => {
        const animationName = `animate__${animation}`;
        const node = domEl(element);
        if (node) {
            node.classList.remove('hidden');
            node.classList.add('animate__animated', animationName);
            document.documentElement.style.setProperty('--animate-duration', '.5s');

            function handleAnimationEnd(event) {
                node.classList.remove('animate__animated', animationName);
                event.stopPropagation();
                resolve('Animation ended');
            }

            node.addEventListener('animationend', handleAnimationEnd, {once: true});
        }
    });
/**
 * Display a modal.
 * @param {string} element - The css class (name) of the modal.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#showmodal}
 */
const showModal = (element) => {
    unhide(`.bw-${element}-modal`);
    document.body.classList.add('overflow-hidden');
    domEl(`.bw-${element}-modal`).focus();
    let index = (currentModal.length === 0) ? 0 : currentModal.length + 1;
    animateCSS(`.bw-${element}`, 'zoomIn').then(() => {
        currentModal[index] = element;
    });
};

/**
 * Trap focus within an open modal to prevent scrolling behind the modal.
 * @param {Event} event - The event object.
 * @return {void}
 */
const trapFocusInModal = (event) => {
    let modal_name = currentModal[(currentModal.length - 1)];
    if (modal_name !== undefined) {
        const focusableElements = domEls(`.bw-${modal_name}-modal input:not([type='hidden']):not([class*='hidden']), .bw-${modal_name}-modal button:not([class*="hidden"]),  .bw-${modal_name}-modal a:not([class*="hidden"])`);
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];
        if (event.key === 'Tab') {
            if (event.shiftKey && document.activeElement === firstElement) {
                event.preventDefault();
                lastElement.focus();
            } else if (!event.shiftKey && document.activeElement === lastElement) {
                event.preventDefault();
                firstElement.focus();
            }
        }
    }
};
/**
 * Hide a modal.
 * @param {string} element - The css class (name) of the modal.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#hidemodal}
 */
const hideModal = (element) => {
    animateCSS(`.bw-${element}`, 'zoomOut').then(() => {
        hide(`.bw-${element}-modal`);
        currentModal.pop();
        document.body.classList.remove('overflow-hidden');
        domEl(`.bw-${element}-modal`).removeEventListener('keydown', trapFocusInModal);
    });
};

/**
 * Display the spinning icon on a button.
 * @param {string} element - The css class (name) of the button.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#showbuttonspinner}
 */
const showButtonSpinner = (element) => {
    unhide(`${element} .bw-spinner`);
};

/**
 * Hide the spinning icon on a button.
 * @param {string} element - The css class (name) of the button.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#hidebuttonspinner}
 */
const hideButtonSpinner = (element) => {
    hide(`${element} .bw-spinner`);
};

/**
 * Show the action buttons on a modal.
 * @param {string} element - The css class (name) of the modal.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#showmodalactionbuttons}
 */
const showModalActionButtons = (element) => {
    unhide(`.bw-${element} .modal-footer`);
};

/**
 * Hide the action buttons on a modal.
 * @param {string} element - The css class (name) of the modal.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#hidemodalactionbuttons}
 */
const hideModalActionButtons = (element) => {
    hide(`.bw-${element} .modal-footer`);
};


/**
 * Alias for unhide().
 * @see {@link https://bladewindui.com/extra/helper-functions#show}
 */
const show = (element, elementIsDomObject = false) => {
    unhide(element, elementIsDomObject);
};


/**
 * Add a key/value pair to client's storage.
 * @param {string} key - The key.
 * @param {string} val - The value corresponding to key.
 * @param {string} storageType - The storage key/val should be added to. sessionStorage | localStorage.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#addtostorage}
 */
const addToStorage = (key, val, storageType = 'localStorage') => {
    if (window.localStorage || window.sessionStorage) {
        (storageType === 'localStorage') ?
            localStorage.setItem(key, val) : sessionStorage.setItem(key, val);
    }
};

/**
 * Retrieve a value from client's storage based on its key.
 * @param {string} key - The key.
 * @param {string} storageType - The storage to retrieve value from. sessionStorage | localStorage.
 * @return {string} The value of <key>
 * @see {@link https://bladewindui.com/extra/helper-functions#getfromstorage}
 */
const getFromStorage = (key, storageType = 'localStorage') => {
    if (window.localStorage || window.sessionStorage) {
        return (storageType === 'localStorage') ?
            localStorage.getItem(key) : sessionStorage.getItem(key);
    }
};
/**
 * Delete a key/value pair from client's storage.
 * @param {string} key - The key.
 * @param {string} storageType - The storage to remove key/val from. sessionStorage | localStorage.
 * @return {void}
 * @see {@link https://bladewindui.com/extra/helper-functions#removefromstorage}
 */
const removeFromStorage = (key, storageType = 'localStorage') => {
    if (window.localStorage || window.sessionStorage) {
        (storageType === 'localStorage') ?
            localStorage.removeItem(key) : sessionStorage.removeItem(key);
    }
};

/**
 * Navigate to a tab.
 * @param {string} element - The css class (name) of the tab to navigate to.
 * @param {string} colour - The colour of the tab.
 * @param {string} scope - The scope within which to find <element>. More like a parent element.
 * @return {(void|boolean)}
 */
const goToTab = (element, colour, scope) => {
    let scope_ = scope.replace(/-/g, '_');
    let tabContent = domEl('.bw-tc-' + element);
    if (tabContent === null) return false;

    changeCssForDomArray(`.${scope}-headings li.atab span`, `${colour}, is-active`, 'remove');
    changeCssForDomArray(`.${scope}-headings li.atab span`, 'is-inactive');
    changeCss(`.atab-${element} span`, 'is-inactive', 'remove');
    changeCss(`.atab-${element} span`, `is-active, ${colour}`);
    domEls(`.${scope_}-tab-contents > div.atab-content`).forEach((element) => {
        hide(element, true);
    });
    unhide(tabContent, true);
};

/**
 * Get the offsetWidth of a prefix/suffix label
 * @param {string} element - The css class (name) of the prefix/suffix field.
 * @return {int}
 */
const getPrefixSuffixOffsetWidth = (element) => {
    let ps_element = domEl(element);
    const clone = ps_element.cloneNode(true);
    clone.style.visibility = 'hidden';
    clone.style.position = 'absolute';
    clone.style.display = 'block';
    document.body.appendChild(clone);
    let offsetWidth = clone.offsetWidth;
    document.body.removeChild(clone);
    return offsetWidth;
};
/**
 * Position a prefix in an input field.
 * @param {string} element - The css class (name) of the input field.
 * @param {string} mode - Event to trigger the positioning.
 * @return {void}
 */
const positionPrefix = (element, mode = 'blur') => {
    let transparency = domEl(`.dv-${element} .prefix`).getAttribute('data-transparency');
    let offset = (transparency === '1') ? -5 : 7;
    let prefixWidth = ((getPrefixSuffixOffsetWidth(`.dv-${element} .prefix`)) + offset) * 1;
    let defaultLabelLeftPos = '0.875rem';
    let inputField = domEl(`input.${element}`);
    let labelField = domEl(`.dv-${element} label`);

    if (mode === 'blur') {
        if (labelField) {
            labelField.style.left = (inputField.value === '') ? `${prefixWidth}px` : defaultLabelLeftPos;
        }
        domEl(`input.${element}`).style.paddingLeft = `${prefixWidth}px`;
        inputField.addEventListener('focus', (event) => {
            positionPrefix(element, event.type);
            // for backward compatibility where {once:true} is not supported
            inputField.removeEventListener('focus', positionPrefix);
        }, {once: true});
    } else if (mode === 'focus') {
        if (labelField) labelField.style.left = defaultLabelLeftPos;
        inputField.addEventListener('blur', (event) => {
            positionPrefix(element, event.type);
            // for backward compatibility where {once:true} is not supported
            inputField.removeEventListener('blur', positionPrefix);
        }, {once: true});
    }
};


/**
 * Position a suffix in an input field.
 * @param {string} element - The css class (name) of the input field.
 * @param {string} mode - Event to trigger the positioning.
 * @return {void}
 */
const positionSuffix = (element) => {
    let transparency = domEl(`.dv-${element} .suffix`).getAttribute('data-transparency');
    let offset = (transparency === '1') ? -5 : 7;
    let suffixWidth = ((getPrefixSuffixOffsetWidth(`.dv-${element} .suffix`)) + offset) * 1;
    domEl(`input.${element}`).style.paddingRight = `${suffixWidth}px`;
};

/**
 * Show or hide password in a password input fiield.
 * @param {string} element - The css class (name) of the input field.
 * @param {string} mode - Show or hide.
 * @return {void}
 */
const togglePassword = (element, mode) => {
    let inputField = domEl(`input.${element}`);
    if (mode === 'show') {
        inputField.setAttribute('type', 'text');
        unhide(`.dv-${element} .suffix svg.hide-pwd`);
        hide(`.dv-${element} .suffix svg.show-pwd`);
    } else {
        inputField.setAttribute('type', 'password')
        unhide(`.dv-${element} .suffix svg.show-pwd`);
        hide(`.dv-${element} .suffix svg.hide-pwd`);
    }
};

/**
 * Partition an array into two separate arrays.
 * @param {array} arr - The array to be split.
 * @param {function} fn - The evaluation function to run on each element > should return true/false for each element
 * @return {[array, array]}
 */
const partition = (arr, fn) => {
    return arr.reduce(
        (acc, val, i, arr) => {
            acc[fn(val, i, arr) ? 0 : 1].push(val);
            return acc;
        },
        [[], []]
    );
}

/**
 * Filter a table based on keyword.
 * @param {string} keyword - The keyword to filter table by.
 * @param {string} table - The css class (name) of the table to filter.
 * @param {null} field - The field to search.
 * @param {array} tableData - The data to filter
 * @return {void}
 */
const filterTable = (keyword, table, field, tableData) => {
    const [showList, hideList] = partition(tableData, (row) => {
        if (field) {
            return row[field].toLowerCase().match(keyword.toLowerCase());
        } else {
            return Object.values(row).toString().toLowerCase().match(keyword.toLowerCase());
        }
    });

    hideList.forEach((row) => {
        hide(domEl(`${table} tbody tr[data-id='${row.id}']`), true);
    });
    showList.forEach((row) => {
        const elem = domEl(`${table} tbody tr[data-id='${row.id}']`);
        if (elem) {
            unhide(elem, true);
        }
    });
};

/**
 * Filter a table based on keyword, .
 * @param {string} keyword - The keyword to filter table by.
 * @param {string} table - The css class (name) of the table to filter.
 * @param {string} field - The field to search.
 * @param {int} delay - Number of milliseconds to debouce the search.
 * @return {function} - The debounced search function to be run
 */
let debounceTimerId;
const filterTableDebounced = (keyword, table, field = null, delay = 0, minLength = 0, tableData = {}) => {
    if (keyword.length >= minLength) {
        return (...args) => {
            clearTimeout(debounceTimerId);
            debounceTimerId = setTimeout(() => filterTable(keyword, table, field, tableData), delay);
        };
    } else {
        return (...args) => {
            clearTimeout(debounceTimerId);
            debounceTimerId = setTimeout(() => {
                document.querySelectorAll(`${table} tbody tr.hidden`).forEach((tr) => {
                    unhide(tr, true);
                });
            }, delay);
        };
    }
};


/**
 * Remove trailing comma from string.
 * @param {string} element - The input field to remove trailing comma from.
 * @return {void}
 */
const stripComma = (element) => {
    if (element.value.startsWith(',')) {
        element.value = element.value.replace(/^,/, '');
    }
    const event = new Event('change', {
        bubbles: true,
        cancelable: true
    });
    element.dispatchEvent(event);
};
/**
 * Select a tag.
 * @param {string} value - The value or uuid to pass when tag is selected.
 * @param {string} name - The name of the tag.
 * @return {void}
 */
const selectTag = (value, name) => {
    let input = domEl(`input[name="${name}"]`);
    let max_selection = input.getAttribute('data-max-selection');
    let tag = domEl(`.bw-${name}-${value}`);
    let css = tag.getAttribute('class');
    if (input.value.includes(value)) { // remove
        let keyword = `(,?)${value}`;
        input.value = input.value.replace(input.value.match(keyword)[0], '');
        changeCss(tag, css.match(/bg-[\w]+-500/)[0], 'remove', true);
        changeCss(tag, (css.match(/bg-[\w]+-500/)[0]).replace('500', '200/80'), 'add', true);
        changeCss(tag, css.match(/text-[\w]+-50/)[0], 'remove', true);
        changeCss(tag, (css.match(/text-[\w]+-50/)[0]).replace('50', '600'), 'add', true);
    } else { // add
        let total_selected = (input.value === '') ? 0 : input.value.split(',').length;
        if (total_selected < max_selection) {
            input.value += `,${value}`;
            changeCss(tag, css.match(/bg-[\w]+-200\/80/)[0], 'remove', true);
            changeCss(tag, (css.match(/bg-[\w]+-200\/80/)[0]).replace('200/80', '500'), 'add', true);
            changeCss(tag, css.match(/text-[\w]+-600/)[0], 'remove', true);
            changeCss(tag, (css.match(/text-[\w]+-600/)[0]).replace('600', '50'), 'add', true);
        } else {
            showNotification(input.getAttribute('data-error-heading'), input.getAttribute('data-error-message'), 'error');
        }
    }
    stripComma(input)
};


/**
 * Highlight selected tags.
 * @param {string} values - Comma separated list of values corresponding to tags to highlight.
 * @param {string} name - The name of the tags.
 * @return {void}
 */
const highlightSelectedTags = (values, name) => {
    if (values !== '') {
        let valuesArray = values.split(',');
        for (let x = 0; x < valuesArray.length; x++) {
            selectTag(valuesArray[x].trim(), name);
        }
    }
};

/**
 * Compare two dates and display an error if second date is less than first date.
 * This is used in the range Datepicker component to ensure dates make sense.
 * @param {string} element1 - The first date input field.
 * @param {string} element2 - The second date input field.
 * @param {string} message - Error message to display if validation fails.
 * @param {boolean} inline - Display error inline or in a notification component.
 * @return {boolean} True if date 2 is greater than date 1.
 * @see {@link https://bladewindui.com/extra/helper-functions#comparedates}
 */
const compareDates = (element1, element2, message, inline) => {
    let date1El = domEl(`.${element1}`);
    let date2El = domEl(`.${element2}`);

    setTimeout(() => {
        let startDate = new Date(date1El.value).getTime();
        let endDate = new Date(date2El.value).getTime();

        if (startDate !== '' && endDate !== '') {
            if (startDate > endDate) {
                changeCss(date2El, '!border-red-400', 'add', true);
                (inline !== 1) ? showNotification('', message, 'error') : domEl(`.error-${element1}${element2}`).innerHTML = message;
                return false;
            } else {
                changeCss(date2El, '!border-red-400', 'remove', true);
                return true;
            }
        }
    }, 100);
};


/**
 * Validate for minimum and maximum values of an input field
 * @param {number} min - The minimum value.
 * @param {number} max - The maximum value.
 * @param {string} element - The input field to validate.
 * @param {boolean} enforce_limits - Ensure input does not exceed maximum or go below minimum
 * @return {void}
 */
const checkMinMax = (min, max, element, enforce_limits = false) => {
    let field = domEl(`.${element}`);
    let minimum = parseInt(min);
    let maximum = parseInt(max);
    let errorMessage = field.getAttribute('data-error-message');
    let showErrorInline = field.getAttribute('data-error-inline');
    let errorHeading = field.getAttribute('data-error-heading');

    if (field.value !== '' && ((!isNaN(minimum) && field.value < minimum) || (!isNaN(maximum) && field.value > maximum))) {
        if (enforce_limits) {
            if (field.value < minimum) field.value = minimum;
            if (field.value > maximum) field.value = maximum;
        } else {
            changeCss(field, '!border-red-400', 'add', true);
            if (errorMessage) {
                (showErrorInline) ? unhide(`.${element}-inline-error`) :
                    showNotification(errorHeading, errorMessage, 'error');
            }
        }
    } else {
        if (errorMessage) hide(`.${element}-inline-error`);
        changeCss(field, '!border-red-400', 'remove', true);
    }
};

/**
 * Display a clear button in an input field that has text.
 * @param {string} element - The css class (name) of the input field.
 * @return {void}
 */
const makeClearable = (element) => {
    let field = domEl(`.${element}`);
    let suffixElement = domEl(`.${element}-suffix svg`);
    let tableElement = element.replace('bw_search_', 'table.').replace('_', '-');
    let clearingFunction = (domEl(tableElement)) ? ` filterTable('',\'${tableElement}\')` : '';
    if (!suffixElement.getAttribute('onclick')) {
        suffixElement.setAttribute('onclick', `domEl(\'.${element}\').value=''; hide(this, true); ${clearingFunction}`);
    }
    (field.value !== '') ? unhide(suffixElement, true) : hide(suffixElement, true);
};

/**
 * Convert a selected file to base64.
 * @param {string} file - Url of selected file.
 * @param {string} element - The input field to write the base64 string to.
 * @return {void}
 */
const convertToBase64 = (file, element) => {
    const reader = new FileReader();
    reader.onloadend = () => {
        const base64String = reader.result;//.replace('data:', '').replace(/^.+,/, '');
        domEl(element).value = base64String;
    };
    reader.readAsDataURL(file);
};

/**
 * Check if selected file size falls within allowed file size.
 * @param {number} fileSize - The selected file size.
 * @param {number} maxSize - THe maximum file size.
 * @return {boolean} True if <fileSize> if less than <maxSize>
 */
const allowedFileSize = (fileSize, maxSize) => {
    return (fileSize <= maxSize * 1000000);
};

/**
 * Set the value of a datepicker
 * @return {void}
 * @param {string} elName - name of the input field to update
 * @param {string} date - new value to set
 */
const setDatepickerValue = (elName, date) => {
    let input = domEl(`.${elName}`);
    if (!input) {
        console.error(`No datepicker found with the name ${elName}`);
        return;
    }
    // let alpineComponent = document.querySelector('[x-data]').__x.$data;
    if (!input._x_model) {
        console.error(`Alpine.js component not found for element ${elName}`);
        return;
    }
    input._x_model.set(date);
};
