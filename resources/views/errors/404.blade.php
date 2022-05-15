<x-frameless title="404 | Page not found">
    <x-bladewind::error 
        heading="Page not found"
        description="The page you requested does not exist. We have a caffeine-induced bot working overtime to find it for you"
        button_text="Back to docs"
        button_url="/extra/error-pages">
        <x-slot name="image">
            <img src="/assets/images/404.svg" alt="404 image" />
        </x-slot>
    </x-bladewind::error>
</x-frameless>