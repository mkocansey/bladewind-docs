<x-app>
    <x-slot:title>Contribution Guide</x-slot:title>
    <x-slot:page_title>Contribution Guide</x-slot:page_title>
    <p>
        Contributions to BladewindUI are very much welcome. A good place to find something to contribute will be our
        <a href="https://github.com/mkocansey/bladewind/issues" target="_blank">GitHub issues page</a> or our development <a href="/roadmap">roadmap</a>. Any discussion that contains anything feature-worthy will already have a corresponding issue.
    </p>
    <h2 id="bugs">Bug Reports and Questions</h2>
    <p>
        To help us keep all bug reports and questions consolidated, and to also serve as a reference for others who might have the same questions or reports, we encourage you to post all questions and bug reports on our <a href="https://github.com/mkocansey/bladewind/issues" target="_blank">GitHub issues page</a>.
        Bug reports should be descriptive enough to be reproducible. It is good practice to include the following in your bug report.
    </p>
    <ul class="list-disc list-inside leading-9 mb-6">
        <li>BladewindUI version number</li>
        <li>PHP version</li>
        <li>OS</li>
        <li>Browser type and version</li>
    </ul>
    <h2 id="prs-branching">Pull Requests and Branching</h2>
    <p>Before working on a feature or issue, we encourage you to take a look at our <a href="https://github.com/mkocansey/bladewind/issues">GitHub issues page</a> to ensure you are not planning to work on something already in progress or that has already been closed and probably awaiting a merge into <code class="inline">main</code>. Every issue or feature being worked on will have an assignee. Any issue without an assignee can be picked up and worked on by anyone.</p>
    <p>To work on an issue that is not listed, kindly create the issue on our <a href="https://github.com/mkocansey/bladewind/issues">GitHub issues page</a> and assign to yourself. In fact, the rule of thumb is to assign any issue you decide to work on to yourself. That is how the community knows what is in progress.</p>
    <p>For changes that address core functionality or would require breaking changes (e.g. a major release), it is best to <a href="https://github.com/mkocansey/bladewind/issues">open an Issue</a> to discuss your proposal first. This is not a must but can save time creating and reviewing changes down the line.</p>
    <p>In general, BladewindUI follows the &quot;<a href="https://github.com/susam/gitpr">fork-and-pull</a>&quot; Git workflow</p>
    <ul class="list-disc list-inside leading-9 mb-6">
        <li>Fork the repository to your own Github account.</li>
        <li>Clone the project to your machine.</li>
        <li>Create a branch locally with an <code class="inline">issue</code> prefix followed by issue number.</li>
        <li>Commit changes to the branch following the formatting guidelines specific to this repo (yet to implement <a href="https://styleci.io/" target="_blank">StyleCI</a>).</li>
        <li>Push changes to your fork.</li>
        <li>Open a PR in our repository.</li>
    </ul>
    <x-bladewind::alert>Every issue or feature to be worked on must be in its own branch with the branch name being the issue number prefixed with 'issue'. For example: if you decide to work on issue #13, your branch name should be <code class="inline">issue-13</code>.</x-bladewind::alert>
    <h2 class="assets">Compiled Assets</h2>
    <p>There are a couple of CSS and JavaScript assets available in the BladewindUI codebase. We encourage contributors to make changes to the source css file but not submit a compiled css file. This makes it easier to review what has been added as css.</p>
    <p>If you are working on a new component from <a href="/roadmap"> our roadmap</a> that requires some CSS, you can either define these inline or have a dedicated CSS file in the  <code class="inline">resources/assets/css</code> directory, where all the other component styles live.</p>
    <h2 id="code-style">Coding Style</h2>
    <p>BladewindUI adheres to the <a href="https://www.php-fig.org/psr/psr-2/">PSR-2</a> coding standards as well as the <a href="https://www.php-fig.org/psr/psr-4">PSR-4</a> autoloading standards.</p>
    <p>
        All props should be at top of the page and variables should be of the right type.
    </p>
    <pre class="language-js">
        <code>
        props([
        'size'       => 'small',
        'show_dot'   => true,       // correct
        'show_dot'   => 'true',     // wrong
        ...
        </code>
    </pre>
    <h3>Attribute Names</h3>
    <p>
        As much as possible, try to use single words for attribute names where possible. Where you need to use more than one word, the attribute names should read like spoken English.
        Especially if the attribute values will be boolean. Below are a couple of examples.
    </p>
    <pre class="language-js">
        <code>
        props([
        'show_dot'   => true,
        'has_shadow' => true,
        'accepted_file_types' => '',
        'is_numeric' => true,   // this can just be 'numeric' => true,
        'show_close_icon' => true,

        // the above attribute can be replaced with the one word
        'closable' => true,
        ...
        </code>
    </pre>

<h2 id="conduct">Code of Conduct</h2>
<p>BladewindUI derives its code of conduct from <a href="https://www.ruby-lang.org/en/conduct/">The Ruby Community Conduct Guideline</a> and we advise contributors to be respectful of these.</p>
<ul class="list-disc list-inside leading-9 mb-6">
<li>Participants will be tolerant of opposing views.</li>
<li>Participants must ensure that their language and actions are free of personal attacks and disparaging personal remarks.</li>
<li>When interpreting the words and actions of others, participants should always assume good intentions.</li>
<li>Behaviour which can be reasonably considered harassment will not be tolerated.</li>
</ul>

<x-slot:side_nav>
<div class="flex items-center"><div class="dot"></div><a href="#bugs">Bug Reports & Questions</a></div>
<div class="flex items-center"><div class="dot"></div><a href="#prs-branching">Pull Requests & Branching</a></div>
<div class="flex items-center"><div class="dot"></div><a href="#assets">Compiled Assets</a></div>
<div class="flex items-center"><div class="dot"></div><a href="#code-style">Coding Style</a></div>
<div class="flex items-center"><div class="dot"></div><a href="#conduct">Code of Conduct</a></div>
</x-slot:side_nav>

<x-slot name="scripts">
<script>
selectNavigationItem('.contribute');
</script>
</x-slot>
</x-app>
