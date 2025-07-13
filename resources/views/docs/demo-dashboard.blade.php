@php
    $data = [
        "labels" => ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        "datasets" => [
            [
                'type' => 'bar',
                'label' => 'Hires',
                'data' => [10, 20, 30, 25, 15],
                'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                'borderColor' => 'rgb(75, 192, 192)',
            ],
            [
                'type' => 'line',
                'label' => 'Exits',
                'data' => [12, 18, 28, 22, 17],
                'borderColor' => '#FF6384',
                'borderWidth' => 2,
                'fill' => false,
            ]
        ]
    ];
 @endphp
<div class="demo-dashboard animate-slideInDown">
    <x-bladewind::alert type="warning" class="mb-4">
        You have 10 pending leave requests that need your attention. <a href="#" class="text-indigo-500">View all</a>
    </x-bladewind::alert>
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2 space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <x-bladewind::statistic number="3,450"  label="Total Employees">
                    <x-slot name="icon">
                        <x-bladewind::icon name="users" class="!size-16 p-3 text-white rounded-full bg-indigo-500" />
                    </x-slot>
                </x-bladewind::statistic>
                <x-bladewind::statistic number="11,395"  label="Total Leave Requests">
                    <x-slot name="icon">
                        <x-bladewind::icon name="calendar-date-range" class="!size-16 p-3 text-white rounded-full bg-indigo-500" />
                    </x-slot>
                </x-bladewind::statistic>
            </div>
            <x-bladewind::card title="Hires & Exits" class="relative">
                <div class="hires-graph">
                    <div class="absolute right-4 top-4 cursor-pointer dashes"
                         onclick="hide('.hires-graph');unhide('.hires-table')"><x-bladewind::icon name="bars-3" /></div>
                    <x-bladewind::chart :data="$data"  />
                </div>
                <div class="hires-table hidden pb-36">
                    <div class="absolute right-4 top-4 cursor-pointer close"
                         onclick="unhide('.hires-graph');hide('.hires-table')"><x-bladewind::icon name="x-mark" /></div>
                    <div class="w-24 float-right">
                        <x-bladewind::select name="year" placeholder="Filter" data="manual" size="small" selected_value="2025" required="true">
                            <x-bladewind::select.item label="2025" value="2025" />
                            <x-bladewind::select.item label="2024" value="2024" />
                            <x-bladewind::select.item label="2023" value="2023" />
                        </x-bladewind::select>
                    </div>
                    <x-bladewind::table divider="thin" class="clear-both">
                        <x-slot:header>
                            <th></th>
                            @foreach($data['labels'] as $label)
                                <th>{{$label}}</th>
                            @endforeach
                        </x-slot:header>
                        @foreach($data['datasets'] as $value)
                            <tr>
                                <td class="!text-right !font-bold">{{$value['label']}}</td>
                                @foreach($value['data'] as $data)
                                    <td>{{$data}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </x-bladewind::table>
                </div>
            </x-bladewind::card>
        </div>
        <div>
            <x-bladewind::card title="Birthdays this month">
                <x-bladewind::listview>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar dotted="true" dot_color="green" image="/assets/images/male.png" />
                        <div class="flex flex-col">
                            <span class="text-gray-800 dark:text-dark-200">Michael K. Ocansey</span>
                            <span class="text-sm text-gray-500 dark:text-dark-400">Finance > Accounts Officer</span>
                            <div class="flex items-center align-middle space-x-2 mt-2.5">
                                <x-bladewind::button type="secondary" outline="true" radius="full" size="tiny" onclick="communicate('wishes','Michael K. Ocansey')">Send Wishes</x-bladewind::button>
                                <x-bladewind::button.circle icon="chat-bubble-bottom-center-text" size="tiny" type="secondary" outline="true" onclick="communicate('message','Michael K. Ocansey')" />
                                <x-bladewind::button.circle icon="phone" size="tiny" type="secondary" outline="true" onclick="communicate('call', 'Michael K. Ocansey')" />
                            </div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar dotted="true" dot_color="green" image="/assets/images/doc.png" />
                        <div class="flex flex-col">
                            <span class="text-gray-800 dark:text-dark-200">Jane C. Doe</span>
                            <span class="text-sm text-gray-500 dark:text-dark-400">Legal > Senior Contracting</span>
                            <div class="flex items-center align-middle space-x-2 mt-2.5">
                                <x-bladewind::button type="secondary" outline="true" radius="full" size="tiny" onclick="communicate('wishes','Jane C. Doe')">Send Wishes</x-bladewind::button>
                                <x-bladewind::button.circle icon="chat-bubble-bottom-center-text" size="tiny" type="secondary" outline="true" onclick="communicate('message','Jane C. Doe')" />
                                <x-bladewind::button.circle icon="phone" size="tiny" type="secondary" outline="true" onclick="communicate('call', 'Jane C. Doe')" />
                            </div>
                        </div>
                    </x-bladewind::listview.item>
                    <x-bladewind::listview.item>
                        <x-bladewind::avatar dotted="true" dot_color="green" image="/assets/images/edwin.jpeg" />
                        <div class="flex flex-col">
                            <span class="text-gray-800 dark:text-dark-200">Abigail A. Edwin</span>
                            <span class="text-sm text-gray-500 dark:text-dark-400">Tech > Mobile Developer</span>
                            <div class="flex items-center align-middle space-x-2 mt-2.5">
                                <x-bladewind::button type="secondary" outline="true" radius="full" size="tiny" onclick="communicate('wishes','Abigail A. Edwin')">Send Wishes</x-bladewind::button>
                                <x-bladewind::button.circle icon="chat-bubble-bottom-center-text" size="tiny" type="secondary" outline="true" onclick="communicate('message','Abigail A. Edwin')" />
                                <x-bladewind::button.circle icon="phone" size="tiny" type="secondary" outline="true" onclick="communicate('call', 'Abigail A. Edwin')" />
                            </div>
                        </div>
                    </x-bladewind::listview.item>
                </x-bladewind::listview>
                <div class="text-center mt-2 pt-3 border-t border-dashed border-gray-200 dark:border-dark-700">
                    <div class="text-xs py-3">More birthdays</div>
                    <x-bladewind::avatars plus="10" plus_action="alert('show more avatars')">
                        <x-bladewind::avatar image="/assets/images/male.png" />
                        <x-bladewind::avatar image="/assets/images/female.png" />
                        <x-bladewind::avatar image="/assets/images/sarpong.png" />
                        <x-bladewind::avatar image="/assets/images/issah.jpg" />
                        <x-bladewind::avatar image="/assets/images/audrey.jpeg" />
                    </x-bladewind::avatars>
                </div>
            </x-bladewind::card>
        </div>
    </div>
    <script>
        communicate = (action, name) => {
            if(action === 'wishes') {
                showModal('birthday-wishes-modal', { name: name });
            } else if(action === 'message') {
                showModal('chat-modal', { name: name });
            } else if(action === 'call') {
                showModal('phone-modal');
            }
        }
        showPage = (page) => {
            domEls('.demo-nav a').forEach((el) => {
                el.classList.remove('font-bold');
                hide('.'+el.getAttribute('data-page'));
            });
            domEl('.demo-nav a[data-page="'+page+'"]').classList.add('font-bold');
            unhide('.'+page);
        }
    </script>
</div>
