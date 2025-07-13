<div class="demo-jobs animate-slideInUp hidden">
    @php
        $jobs = [
            [
                'title' => 'Senior PHP Developer',
                'location' => 'Toronto, Canada',
                'salary' => '$95,000',
                'type' => 'remote',
                'schedule' => 'full-time',
                'days_to_expire' => 72,
                'status' => 'active',
            ],
            [
                'title' => 'Frontend Engineer',
                'location' => 'Vancouver, Canada',
                'salary' => '$85,000',
                'type' => 'in-person',
                'schedule' => 'full-time',
                'days_to_expire' => 63,
                'status' => 'active',
            ],
            [
                'title' => 'UI/UX Designer',
                'location' => 'Montreal, Canada',
                'salary' => '$75,000',
                'type' => 'remote',
                'schedule' => 'part-time',
                'days_to_expire' => 50,
                'status' => 'draft',
            ],
            [
                'title' => 'DevOps Engineer',
                'location' => 'Calgary, Canada',
                'salary' => '$100,000',
                'type' => 'in-person',
                'schedule' => 'full-time',
                'days_to_expire' => 89,
                'status' => 'active',
            ],
            [
                'title' => 'QA Analyst',
                'location' => 'Edmonton, Canada',
                'salary' => '$70,000',
                'type' => 'remote',
                'schedule' => 'part-time',
                'days_to_expire' => 54,
                'status' => 'expired',
            ],
            [
                'title' => 'Product Manager',
                'location' => 'Toronto, Canada',
                'salary' => '$110,000',
                'type' => 'remote',
                'schedule' => 'full-time',
                'days_to_expire' => 78,
                'status' => 'active',
            ],
            [
                'title' => 'Mobile App Developer',
                'location' => 'Halifax, Canada',
                'salary' => '$90,000',
                'type' => 'in-person',
                'schedule' => 'full-time',
                'days_to_expire' => 59,
                'status' => 'draft',
            ],
            [
                'title' => 'Data Scientist',
                'location' => 'Quebec City, Canada',
                'salary' => '$105,000',
                'type' => 'remote',
                'schedule' => 'full-time',
                'days_to_expire' => 83,
                'status' => 'active',
            ],
            [
                'title' => 'Business Analyst',
                'location' => 'Victoria, Canada',
                'salary' => '$80,000',
                'type' => 'in-person',
                'schedule' => 'full-time',
                'days_to_expire' => 67,
                'status' => 'expired',
            ],
            [
                'title' => 'HR Coordinator',
                'location' => 'Ottawa, Canada',
                'salary' => '$65,000',
                'type' => 'in-person',
                'schedule' => 'full-time',
                'days_to_expire' => 74,
                'status' => 'active',
            ],
        ];
        $applicants = [
            ['name' => 'Alice Johnson',       'email' => 'alice.johnson@example.com',       'education_level' => 'Bachelor', 'match' => '88%'],
            ['name' => 'Michael Smith',       'email' => 'michael.smith@example.com',       'education_level' => 'Master',   'match' => '92%'],
            ['name' => 'Sara Lee',            'email' => 'sara.lee@example.com',            'education_level' => 'PhD',      'match' => '97%'],
            ['name' => 'David Brown',         'email' => 'david.brown@example.com',         'education_level' => 'Diploma',  'match' => '65%'],
            ['name' => 'Emily Davis',         'email' => 'emily.davis@example.com',         'education_level' => 'Bachelor', 'match' => '78%'],
            ['name' => 'John Wilson',         'email' => 'john.wilson@example.com',         'education_level' => 'Master',   'match' => '83%'],
            ['name' => 'Grace Miller',        'email' => 'grace.miller@example.com',        'education_level' => 'Bachelor', 'match' => '55%'],
            ['name' => 'Daniel Martinez',     'email' => 'daniel.martinez@example.com',     'education_level' => 'PhD',      'match' => '99%'],
            ['name' => 'Olivia Anderson',     'email' => 'olivia.anderson@example.com',     'education_level' => 'Diploma',  'match' => '61%'],
            ['name' => 'James Thomas',        'email' => 'james.thomas@example.com',        'education_level' => 'Bachelor', 'match' => '73%'],
            ['name' => 'William Scott',       'email' => 'william.scott@example.com',       'education_level' => 'Master',   'match' => '89%'],
            ['name' => 'Natalie King',        'email' => 'natalie.king@example.com',        'education_level' => 'PhD',      'match' => '94%'],
            ['name' => 'Ethan Moore',         'email' => 'ethan.moore@example.com',         'education_level' => 'Diploma',  'match' => '66%'],
            ['name' => 'Lily Turner',         'email' => 'lily.turner@example.com',         'education_level' => 'Bachelor', 'match' => '84%'],
            ['name' => 'Benjamin Walker',     'email' => 'benjamin.walker@example.com',     'education_level' => 'Master',   'match' => '81%'],
            ['name' => 'Ava White',           'email' => 'ava.white@example.com',           'education_level' => 'Bachelor', 'match' => '57%'],
            ['name' => 'Lucas Hall',          'email' => 'lucas.hall@example.com',          'education_level' => 'PhD',      'match' => '96%'],
            ['name' => 'Sophie Allen',        'email' => 'sophie.allen@example.com',        'education_level' => 'Diploma',  'match' => '63%'],
            ['name' => 'Mason Young',         'email' => 'mason.young@example.com',         'education_level' => 'Bachelor', 'match' => '76%'],
            ['name' => 'Chloe Hernandez',     'email' => 'chloe.hernandez@example.com',     'education_level' => 'Master',   'match' => '85%'],
            ['name' => 'Logan Clark',         'email' => 'logan.clark@example.com',         'education_level' => 'PhD',      'match' => '91%'],
            ['name' => 'Zoe Lewis',           'email' => 'zoe.lewis@example.com',           'education_level' => 'Diploma',  'match' => '69%'],
            ['name' => 'Jack Robinson',       'email' => 'jack.robinson@example.com',       'education_level' => 'Bachelor', 'match' => '79%'],
            ['name' => 'Ella Lee',            'email' => 'ella.lee@example.com',            'education_level' => 'Master',   'match' => '87%'],
            ['name' => 'Henry Walker',        'email' => 'henry.walker@example.com',        'education_level' => 'PhD',      'match' => '93%'],
            ['name' => 'Amelia Wright',       'email' => 'amelia.wright@example.com',       'education_level' => 'Diploma',  'match' => '60%'],
            ['name' => 'Jacob Harris',        'email' => 'jacob.harris@example.com',        'education_level' => 'Bachelor', 'match' => '74%'],
            ['name' => 'Mia Nelson',          'email' => 'mia.nelson@example.com',          'education_level' => 'Master',   'match' => '90%'],
            ['name' => 'Noah Carter',         'email' => 'noah.carter@example.com',         'education_level' => 'PhD',      'match' => '98%'],
            ['name' => 'Harper Baker',        'email' => 'harper.baker@example.com',        'education_level' => 'Diploma',  'match' => '62%'],
        ];
    @endphp
    <div class="flex space-x-4">
        <div class="w-3/5">
            <x-bladewind::card has_shadow="true" no-padding="true">
                <div class="jobs-table">
                    <div class="flex justify-between p-4">
                        <div class="text-lg">10 jobs posted</div>
                        <div>
                            <x-bladewind::toggle label="Show only jobs with applications" />
                        </div>
                    </div>
                    <x-bladewind::table layout="custom" paginated="true" searchable="false" :page_size="$page_size=3" :data="$jobs" :default_page="$default_page=1">
                        @foreach($jobs as $job)
                        <tr {{pagination_row($loop->iteration, $page_size, $default_page)}}>
                            <td class="!w-1 whitespace-nowrap">
                                <div class="space-y-1">
                                    <div class="text-lg font-medium">{{$job['title']}} </div>
                                    <div><x-bladewind::icon name="map-pin" class="!size-4 opacity-50" />{{$job['location']}}</div>
                                    <div><x-bladewind::icon name="banknotes" class="!size-4 opacity-50" />{{$job['salary']}}</div>
                                </div>
                                <div class="pt-2">
                                    @if($job['status'] === 'active')
                                        <x-bladewind::tag color="green" label="active" />
                                    @elseif($job['status'] === 'draft')
                                        <x-bladewind::tag color="yellow" label="draft" />
                                    @else
                                        <x-bladewind::tag color="red" label="expired" />
                                    @endif
                                    @if($job['type'] === 'remote')
                                        <x-bladewind::tag color="orange" label="remote" />
                                    @else
                                        <x-bladewind::tag color="purple" label="in-person" />
                                    @endif
                                    @if($job['schedule'] === 'full-time')
                                        <x-bladewind::tag color="indigo" label="full time" />
                                    @else
                                        <x-bladewind::tag color="red" label="part-time" />
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="pl-6 pt-8">
                                    <div class="py-1.5 text-gray-500">{{100-$job['days_to_expire']}} days left</div>
                                    <x-bladewind::progress-bar percentage="{{$job['days_to_expire']}}" color="pink" />
                                </div>
                            </td>
                            <td class="!text-right">
                                <div class="pt-12">
                                    <x-bladewind::button outline="true" type="secondary" size="small" radius="full" icon="document-text" onclick="unhide('.candidates-table');hide('.jobs-table');">View</x-bladewind::button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </x-bladewind::table>
                </div>
                <div class="candidates-table hidden">
                    <x-bladewind::table paginated="true" searchable="true" checkable="true" selectable="true" page_size="10" :data="$applicants" />
                </div>
            </x-bladewind::card>
        </div>
        <div class="w-2/5">
            <x-bladewind::card title="post a new job">
                <div class="space-y-4 post-job-form">
                    <x-bladewind::input label="Title" required="true" />
                    <x-bladewind::textarea label="Description" rows="5" toolbar="true" except="align, indent, color, background" />
                    <x-bladewind::input label="Location" prefix-is-icon="true" prefix="map-pin" />
                    <x-bladewind::input label="Salary" numeric="true" suffix-is-icon="true" prefix="USD" suffix="banknotes" />
                    <div>Work type</div>
                    <x-bladewind::checkcards name="type-of-work" max="1">
                        <div class="grid grid-cols-2 gap-4">
                            <x-bladewind::checkcards.card value="full" title="Full Time">
                                Work 40 hours weekly
                            </x-bladewind::checkcards.card>
                            <x-bladewind::checkcards.card value="part" title="Part Time">
                                Work 20 hours weekly
                            </x-bladewind::checkcards.card>
                        </div>
                    </x-bladewind::checkcards>
                    <div class="grid grid-cols-2 gap-4">
                        <x-bladewind::datepicker label="Post Expires" />
                        <div><x-bladewind::timepicker /></div>
                    </div>
                    <div class="!-mt-1 pt-2.5">
                        <x-bladewind::button
                            name="post-job-button" has-spinner="true" size="medium" radius="full" class="w-full"
                            onclick="validateForm('.post-job-form');showButtonSpinner('.post-job-button'); setTimeout(()=>{
                                hideButtonSpinner('.post-job-button');
                                hide('.post-job-form');
                                unhide('.post-posted');
                            }, 3000);">
                            Post Job
                        </x-bladewind::button>
                    </div>
                </div>
                <div class="post-posted animate-slideInUp hidden py-20">
                    <x-bladewind::empty-state heading="Job Posted" button-label="Post another job" message="
                        Your job has been posted successfully. You can view it in the job list.
                        You will also be notified when applications are received."
                                              onclick="unhide('.post-job-form');hide('.post-posted');" />
                </div>
            </x-bladewind::card>
        </div>
    </div>
</div>
