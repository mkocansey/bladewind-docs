<div class="demo-employees animate-slideInUp hidden">
@php
    $employees = [
        [ 'name' => 'Michael Ocansey', 'email' => 'mike@demo.com', 'position' => 'CTO', 'department' => 'tech', 'dp' => 'me.jpeg', 'mobile' => '+233244123456' ],
        [ 'name' => 'Aaron Mensah', 'email' => 'amenline@demo.com', 'position' => 'Developer', 'department' => 'tech', 'dp' => 'rowe.jpeg', 'mobile' => '+233244123456' ],
        [ 'name' => 'Deborah Mawusi', 'email' => 'deborah@demo.com', 'position' => 'Intern', 'department' => 'tech', 'dp' => 'audrey.jpeg', 'mobile' => '+233244123456' ],
        [ 'name' => 'Stella Asamoah', 'email' => 'stella@demo.com', 'position' => 'Intern', 'department' => 'tech', 'dp' => 'female.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Samuel Osei-Antwi', 'email' => 'sam@demo.com', 'position' => 'Operations Officer', 'department' => 'operations', 'dp' => 'francis.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Abigail Aminah', 'email' => 'bertrand@demo.com', 'position' => 'Warehouse Manager', 'department' => 'operations', 'dp' => 'edwin.jpeg', 'mobile' => '+233244123456' ],
        [ 'name' => 'Catherine Gerald', 'email' => 'cathy@demo.com', 'position' => 'Field Supervisor', 'department' => 'field', 'dp' => 'issah.jpg', 'mobile' => '+233244123456' ],
        [ 'name' => 'Blaise Konlan', 'email' => 'blaise@demo.com', 'position' => 'M & E Officer', 'department' => 'field', 'dp' => 'male.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Francis Asomani', 'email' => 'francis@demo.com', 'position' => 'Finance Manager', 'department' => 'finance', 'dp' => 'male.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Alfred Armah', 'email' => 'alfred@demo.com', 'position' => 'Finance Officer', 'department' => 'finance', 'dp' => 'male.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Rembert Annankrah', 'email' => 'rembert@demo.com', 'position' => 'Cash Officer', 'department' => 'finance', 'dp' => 'male.png', 'mobile' => '+233244123456' ],
        [ 'name' => 'Priscilla Mills', 'email' => 'priscilla@demo.com', 'position' => 'Marketing Manager', 'department' => 'marketing', 'dp' => 'female.png', 'mobile' => '+233244123456' ],
    ];
    $action_icons = [
        "icon:chat | tip:send message | color:green | click:sendMessage('{first_name}')",
        "icon:pencil | click:redirect('/user/{id}')",
        "icon:trash | color:red | click:deleteUser({id}, '{first_name}')",
    ];
 @endphp
    <div class="employee-grid">
        <div class="grid grid-cols-2 gap-2 p-2 bg-gray-300/50 rounded-md mb-4 shadow-sm">
            <div>
                <x-bladewind::input placeholder="Search Employees" class="w-full" prefix="magnifying-glass" prefix-is-icon="true" :add-clearing="false" />
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div>
                <x-bladewind::select name="department" placeholder="filter by department" data="manual" onselect="filterEmployees" add_clearing="false">
                    <x-bladewind::select.item label="Field Workers" value="field" />
                    <x-bladewind::select.item label="Tech" value="tech" />
                    <x-bladewind::select.item label="Operations" value="operations" />
                </x-bladewind::select>
                </div>
                <div class="text-right pt-2 pr-2">
                    <a href="javascript:void(0)" onclick="unhide('.employee-table');hide('.employee-grid')">
                        <x-bladewind::icon name="queue-list" class="!size-7 bg-gray-400/70 text-gray-100 hover:bg-gray-500 p-1 rounded-md"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-4 gap-4">
            @foreach($employees as $employee)
                @php $dp =  ($employee['dp']!=='') ? "/assets/images/".$employee['dp'] : ''; @endphp
                @if($loop->index < 8)
                    <x-bladewind::contact-card
                        :centered="true"
                        :name="$employee['name']"
                        position="{{ ucfirst($employee['department']) }} > {{ $employee['position'] }}"
                        :mobile="$employee['mobile']"
                        :image="$dp" />
                @endif
            @endforeach
        </div>
    </div>
    <div class="employee-table hidden relative">
        <x-bladewind::card has_shadow="true">
            <div class="text-right absolute top-10 right-10 z-50">
                <a href="javascript:void(0)" onclick="hide('.employee-table');unhide('.employee-grid')">
                    <x-bladewind::icon name="squares-2x2" class="!size-7 bg-gray-400 text-gray-100 hover:bg-gray-500 p-1 rounded-md"/>
                </a>
            </div>
            <x-bladewind::table
                :searchable="true"
                :paginated="true"
                :sortable="true"
                :page_size="$page_size=5"
                :default_page="$default_page=1"
                :action_icons="$action_icons"
                layout="custom"
                divider="thin"
                :data="$employees"
                search-placeholder="Find employees by name or other details">
                <x-slot:header>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th></th>
                </x-slot:header>
                @foreach($employees as $employee)
                    @php $dp =  ($employee['dp']!=='') ? "/assets/images/".$employee['dp'] : ''; @endphp
                    <tr {{pagination_row($loop->iteration, $page_size, $default_page)}}>
                        <td>
                            <div class="flex space-x-4">
                                <div><x-bladewind::avatar :image="$dp" size="medium" /></div>
                                <div>
                                    <div class="font-semibold dark:text-dark-300 text-slate-600">{{ $employee['name'] }}</div>
                                    <div class="text-sm text-gray-500 dark:text-dark-400">
                                        {{ $employee['position'] }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><div class="pt-3">{{ ucfirst($employee['department']) }}</div></td>
                        <td><div class="pt-3">{{ $employee['mobile'] }}</div></td>
                        <td><div class="pt-3">{{ $employee['email'] }}</div></td>
                        <td class="text-right">
                            <div class="space-x-1 pt-2">
                                <x-bladewind::button.circle icon="chat-bubble-bottom-center-text" size="tiny" type="secondary" outline="true" onclick="communicate('message','Abigail A. Edwin')" />
                                <x-bladewind::button.circle icon="phone" size="tiny" type="secondary" outline="true" onclick="communicate('call', 'Abigail A. Edwin')" class="ml-3" />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </x-bladewind::table>
        </x-bladewind::card>
    </div>
</div>
<script>
    filterEmployees = (value, label, all_values) => {
        let employee_cards = dom_els('.bw-contact-card');
        let keywords = all_values.replaceAll(',','|');
        let regex = new RegExp( `(${keywords})`, 'ig' );
        employee_cards.forEach((el) => {
            (! el.innerText.match(regex) ) ? hide(el, true) : unhide(el, true);
        });
    }
</script>
