<div class="flex p-4 border-b border-slate-300 dark:border-dark-700 justify-between items-center demo-topbar">
    <div class="flex items-center space-x-4">
        <img src="/assets/images/icon.png" class="h-5" />
        <div class="border-l border-dashed border-slate-500 dark:border-dark-700 pl-4 flex space-x-4 demo-nav tracking-wide">
            <a href="javascript:showPage('demo-dashboard')" class="font-bold text-slate-600 dark:text-dark-400 hover:text-slate-800 dark:hover:text-dark-200" data-page="demo-dashboard">Dashboard</a>
            <a href="javascript:showPage('demo-employees')" class="text-slate-600 dark:text-dark-400 hover:text-slate-800 dark:hover:text-dark-200" data-page="demo-employees">Employees</a>
            <a href="javascript:showPage('demo-jobs')" class="text-slate-600 dark:text-dark-400 hover:text-slate-800 dark:hover:text-dark-200" data-page="demo-jobs">Jobs</a>
            <a href="javascript:showPage('demo-signup')" class="text-slate-600 dark:text-dark-400 hover:text-slate-800 dark:hover:text-dark-200 hidden" data-page="demo-signup">Sign Up</a>
            <a href="javascript:showPage('demo-signin')" class="text-slate-600 dark:text-dark-400 hover:text-slate-800 dark:hover:text-dark-200 hidden" data-page="demo-signin">Sign In</a>
        </div>
    </div>
    <div class="flex justify-between space-x-6 items-center">
        <x-bladewind::icon name="magnifying-glass" class="size-5" />
        <x-bladewind::dropmenu hide_after_click="false">
            <x-slot:trigger>
                <x-bladewind::bell animate_dot="true" />
            </x-slot:trigger>
            <x-bladewind::dropmenu.item header="true">
                <div class="space-y-0.5">
                    <div>You have 5 new notifications</div>
                    <div class="text-sm text-gray-400">Updated 4 days ago</div>
                    <div class="text-sm"><a href="#">Mark all as read</a></div>
                </div>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item hover="false">
                <x-bladewind::alert color="transparent" icon="calendar" icon_avatar_css="bg-indigo-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5" show_close_icon="false">
                    <div><strong>Meeting starts in 5 minutes</strong></div>
                    Functional specification meeting
                    <div class="text-sm opacity-70">10 minutes ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item hover="false">
                <x-bladewind::alert color="transparent" avatar="/assets/images/doc.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    Jane C. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item hover="false">
                <x-bladewind::alert color="transparent" avatar="/assets/images/francis.png" size="regular">
                    <div><strong>New friend request</strong></div>
                    John A. Doe wants to be your friend.
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item hover="false">
                <x-bladewind::alert color="transparent" icon="server-stack" icon_avatar_css="bg-pink-500 text-white p-2 !w-12 !h-12 rounded-full mt-0.5">
                    <div><strong>Server not responding</strong></div>
                    Ping to <i>bladewind-data-23</i> <br /> is returning constant time outs
                    <div class="text-sm opacity-70">2 days ago</div>
                </x-bladewind::alert>
            </x-bladewind::dropmenu.item>
        </x-bladewind::dropmenu>

        <x-bladewind::dropmenu>
            <x-slot:trigger>
                <div class="flex space-x-2 items-center rounded-md">
                    <div class="grow">
                        <x-bladewind::avatar image="/assets/images/doc.png" size="small" />
                    </div>
                    <div>
                        <x-bladewind::icon name="chevron-down" class="!h-4 !w-4" />
                    </div>
                </div>
            </x-slot:trigger>
            <x-bladewind::dropmenu.item header="true">
                <div class="grow">
                    <div><strong>Jane C. Doe</strong></div>
                    <div class="text-sm">@jane-the-coder</div>
                    <div class="text-sm">jane@bladewindui.com</div>
                </div>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item icon="lock-closed" onclick="showPage('demo-signup');">
                Sign Up Flow
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item icon="lock-open" onclick="showPage('demo-signin');">
                Sign In Flow
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item divider />
            <x-bladewind::dropmenu.item icon="cog-6-tooth">
                Profile Settings
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item icon="trash" icon_css="!text-red-300">
                <span class="text-red-500">Delete Profile</span>
            </x-bladewind::dropmenu.item>
            <x-bladewind::dropmenu.item divider />
            <x-bladewind::dropmenu.item hover="false">
                <x-bladewind::button color="indigo" radius="small" size="small" class="w-full">Sign Out</x-bladewind::button>
            </x-bladewind::dropmenu.item>
        </x-bladewind::dropmenu>
    </div>
</div>
<script>
    showPage = (page) => {
        domEls('.demo-nav a').forEach((el) => {
            el.classList.remove('font-bold');
            hide('.'+el.getAttribute('data-page'));
            (page.indexOf('sign') != -1) ? hide('.demo-topbar') : unhide('.demo-topbar');
        });
        domEl('.demo-nav a[data-page="'+page+'"]').classList.add('font-bold');
        unhide('.'+page);
    }
</script>
