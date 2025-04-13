<x-app>
    <x-slot name="title">Chart Component</x-slot>
    <x-slot name="page_title">Chart</x-slot>

    <p>
        The chart component relies on the <a href="https://www.chartjs.org" target="_blank">Chart.js</a> library to display
        various aesthetically pleasing types of charts. The bar chart is the default but changing the type of chart is as simple as
        setting the <code class="inline text-red-500">type</code> attribute to any of the acceptable chart types provided by <a href="https://www.chartjs.org" target="_blank">Chart.js</a>.
    </p>

    <div class="text-center">
        @php
            $labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple'];
            $data = [12, 19, 13, 15, 9, 10];
        @endphp
        <x-bladewind::chart :labels="$labels" :data="$data" title="Colour ranks" />
    </div>

<pre class="language-php line-numbers">
<code>
    &lt;?php
        $labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple'];
        $data = [12, 19, 13, 15, 9, 10];
</code>
</pre>
<pre class="language-markup">
    <code>
        &lt;x-bladewind::chart :labels="$labels" :data="$data" title="Colour ranks" /&gt;
    </code>
</pre>
    <h2 id="options">Common Chart Options</h2>
    <p>
        There are four top level options in the <a href="https://www.chartjs.org/docs/latest/configuration/" target="_blank">Chart.js configuration</a>.
        These are <code class="inline">type</code>, <code class="inline">data</code>, <code class="inline">options</code> and <code class="inline">plugins</code>.
        BladewindUI offers attributes that correspond to each of the above mentioned options in the Chart.js top level.
        Passing each attribute expects you to have defined the data in a format Chart.js expects.
        For example, whatever array you pass into the <code class="inline">data</code> attribute will simply be formatted into JSON and passed to Chart.js as shown below.
    </p>
    <pre class="language-js line-numbers">
    <code>
    // chart.js configuration
    const config = {
        type: '&#123;&#123;$type}}',
        // $data was passed as an attribute to the chart component
        data: @@json($data),
        options: @@json($options),
        plugins: @@json($plugins)
    }
    </code>
</pre>
    <p>
        BladewindUI however, exposes a few common chart options that can be passed as attributes for convenience.
        The list is provided below.
    </p>
    <p>
        <x-bladewind::table divider="thin" has_border="true" striped="true">
            <x-slot:header>
                <th>attribute</th>
                <th>description</th>
            </x-slot:header>
            <tbody>
                <tr>
                    <td>show_axis_lines</td>
                    <td>show the lines on both the x and y axes</td>
                </tr>
                <tr>
                    <td>show_x_axis_lines</td>
                    <td>show the lines on the x axis</td>
                </tr>
                <tr>
                    <td>show_y_axis_lines</td>
                    <td>show the lines on the y axis</td>
                </tr>
                <tr>
                    <td>show_axis_labels</td>
                    <td>show the labels on both the x and y axes</td>
                </tr>
                <tr>
                    <td>show_x_axis_labels</td>
                    <td>show the labels on the x axis</td>
                </tr>
                <tr>
                    <td>show_y_axis_labels</td>
                    <td>show the labels on the y axis</td>
                </tr>
                <tr>
                    <td>show_borders</td>
                    <td>show the borders around the chart. These are the main x and y axes lines.</td>
                </tr>
                <tr>
                    <td>show_x_border</td>
                    <td>show the border on the x axis</td>
                </tr>
                <tr>
                    <td>show_y_border</td>
                    <td>show the border on the y axis</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>title of the chart</td>
                </tr>
                <tr>
                    <td>show_legend</td>
                    <td>display the chart legend</td>
                </tr>
                <tr>
                    <td>legend_position</td>
                    <td>where should the legend be placed</td>
                </tr>
                <tr>
                    <td>legend_alignment</td>
                    <td>how should the legend text be aligned</td>
                </tr>
                <tr>
                    <td>bg_color</td>
                    <td>where applicable, this defines the background colour of the charts not the canvas. For example when defined for bar charts, each bar picks this colour.</td>
                </tr>
                <tr>
                    <td>border_color</td>
                    <td>where applicable, this defines the border colour of the charts. For example when defined for bar charts, the border of each bar picks this colour.</td>
                </tr>
                <tr>
                    <td>border_width</td>
                    <td>where applicable, this defines how thick the border of each chart item should be.</td>
                </tr>
            </tbody>
        </x-bladewind::table>
    </p>
<br />
    <x-bladewind::alert>
        When you define both the <coode class="inline text-red-500">labels</coode> and
        <code class="inline text-red-500">data</code> attributes, <code class="inline text-red-500">data</code> is treated as the chart data you want to display NOT the entire top level
        <code class="inline">data</code> object where you can define datasets, labels, border colours and many more options.
    </x-bladewind::alert>
<br />
    <p>
        <x-bladewind::chart
            type="bar"
            :labels="$labels"
            :data="$data"
            title=""
            show_legend="false"
            show_borders="false"
            show_axis_lines="false"
            show_axis_labels="false" />
    </p>
<pre class="language-markup line-numbers">
<code>
&lt;x-bladewind::chart
    type="bar"
    :labels="$labels"
    :data="$data"
    title=""
    show_legend="false"
    show_borders="false"
    show_axis_lines="false"
    show_axis_labels="false" /&gt;
</code>
</pre>
<h2 id="chart-types">Chart Types</h2>
<h3 id="area">Area Chart</h3>
<p>
    Set <code class="inline text-red-500">type="area"</code> to display an area chart.
</p>
<x-bladewind::chart
    type="area" show_legend="false"
    :labels="$labels"
    :data="$data" />

<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="area"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>
<h3 id="bar">Bar Chart</h3>
<p>
    Set <code class="inline text-red-500">type="bar"</code> to display a bar chart. This is the default.
</p>
<x-bladewind::chart
    type="bar" show_legend="false"
    :labels="$labels"
    :data="$data" />

<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="bar"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>
<h3 id="bubble">Bubble Chart</h3>
<p>
    Set <code class="inline text-red-500">type="bubble"</code> to display a bubble chart.
</p>
@php
    $bubble_labels = [];
    $bubble_data = [
        ['x' => 5, 'y' => 10, 'r' => 8],
        ['x' => 10, 'y' => 15, 'r' => 6],
        ['x' => 15, 'y' => 5, 'r' => 10],
        ['x' => 20, 'y' => 25, 'r' => 12],
        ['x' => 25, 'y' => 20, 'r' => 7],
        ['x' => 30, 'y' => 10, 'r' => 9],
        ['x' => 35, 'y' => 30, 'r' => 11],
        ['x' => 40, 'y' => 15, 'r' => 5],
        ['x' => 45, 'y' => 22, 'r' => 8],
        ['x' => 50, 'y' => 18, 'r' => 6],
        ['x' => 55, 'y' => 12, 'r' => 7],
        ['x' => 60, 'y' => 28, 'r' => 10],
        ['x' => 65, 'y' => 16, 'r' => 9],
        ['x' => 70, 'y' => 24, 'r' => 6],
        ['x' => 75, 'y' => 14, 'r' => 8],
        ['x' => 80, 'y' => 20, 'r' => 5],
        ['x' => 85, 'y' => 26, 'r' => 7],
        ['x' => 90, 'y' => 19, 'r' => 9],
        ['x' => 95, 'y' => 13, 'r' => 6],
        ['x' => 100, 'y' => 30, 'r' => 10],
    ];
@endphp
<x-bladewind::chart
    type="bubble" show_legend="false"
    bg_color="rgba(153, 102, 255, 0.5)"
    border_color="rgb(153, 102, 255)"
    :labels="$bubble_labels"
    :data="$bubble_data" />

<pre class="language-php line-numbers">
<code>
$bubble_labels = [];
$bubble_data = [
    ['x' => 5, 'y' => 10, 'r' => 8],
    ['x' => 10, 'y' => 15, 'r' => 6],
    ...
    ['x' => 85, 'y' => 26, 'r' => 7],
    ['x' => 100, 'y' => 30, 'r' => 10],
];
</code>
</pre>
<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="bubble"
    bg_color="rgba(153, 102, 255, 0.5)"
    border_color="rgb(153, 102, 255)"
    :labels="$bubble_labels" :data="$bubble_data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="doughnut">Doughnut Chart</h3>
<p>
    Set <code class="inline text-red-500">type="doughnut"</code> to display a doughnut chart.
</p>
    <div class="h-[400px]">
<x-bladewind::chart
    type="doughnut" show_legend="false" class="m-auto h-[100%]"
    :labels="$labels"
    :data="$data" />
    </div>
<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="doughnut"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="line">Line Chart</h3>
<p>
    Set <code class="inline text-red-500">type="line"</code> to display a line chart.
</p>
<x-bladewind::chart
    type="line" show_legend="false"
    :labels="$labels" border_width="5"
    :data="$data" />

<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="line" border_width="5"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="pie">Pie Chart</h3>
<p>
    Set <code class="inline text-red-500">type="pie"</code> to display a pie chart.
</p>
<div class="h-[400px]">
<x-bladewind::chart
    type="pie" show_legend="false" class="m-auto h-[100%]"
    :labels="$labels"
    :data="$data" />
</div>
<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="pie"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="polar">Polar Chart</h3>
<p>
    Set <code class="inline text-red-500">type="polar"</code> to display a polar chart.
</p>
<x-bladewind::chart
    type="polar" show_legend="false"
    :labels="$labels"
    :data="$data" />

<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="polar"
    :labels="$labels" :data="$data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="radar">Radar Chart</h3>
<p>
    Set <code class="inline text-red-500">type="radar"</code> to display a radar chart.
</p>
@php
    $radar_labels = ['Speed', 'Strength', 'Agility', 'Endurance', 'Skill'];
    $radar_data = [65, 59, 90, 81, 56]
@endphp
<x-bladewind::chart
    type="radar" show_legend="false"
    :labels="$radar_labels"
    bg_color="rgba(54, 162, 235, 0.3)"
    border_color="#36A2EB" border_width="2"
    :data="$radar_data" />

<pre class="language-php line-numbers">
<code>
$radar_labels = ['Speed', 'Strength', 'Agility', 'Endurance', 'Skill'];
$radar_data = [65, 59, 90, 81, 56]
</code>
</pre>
<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="radar"
    bg_color="rgba(54, 162, 235, 0.3)"
    border_color="#36A2EB" border_width="2"
    :labels="$radar_labels" :data="$radar_data" show_legend="false" /&gt;
</code>
</pre>

<h3 id="scatter">Scatter Chart</h3>
<p>
    Set <code class="inline text-red-500">type="scatter"</code> to display a scatter chart.
</p>
@php
    $scatter_labels = [];
    $scatter_data = [
        ['x' => -15, 'y' => 10],
        ['x' => -10, 'y' => 8],
        ['x' => -5, 'y' => 5],
        ['x' => 0, 'y' => 12],
        ['x' => 2, 'y' => 7],
        ['x' => 4, 'y' => 14],
        ['x' => 6, 'y' => 9],
        ['x' => 8, 'y' => 11],
        ['x' => 10, 'y' => 6],
        ['x' => 12, 'y' => 13],
        ['x' => 14, 'y' => 8],
        ['x' => 16, 'y' => 15],
        ['x' => 18, 'y' => 10],
        ['x' => 20, 'y' => 7],
        ['x' => 22, 'y' => 9],
        ['x' => 24, 'y' => 14],
        ['x' => 26, 'y' => 12],
        ['x' => 28, 'y' => 11],
        ['x' => 30, 'y' => 13],
        ['x' => 32, 'y' => 10],
    ];
@endphp
<x-bladewind::chart
    type="scatter" show_legend="false"
    :labels="$scatter_labels"
    :data="$scatter_data" />

<pre class="language-php line-numbers">
<code>
$scatter_labels = [];
$scatter_data = [
    ['x' => -15, 'y' => 10],
    ['x' => -5, 'y' => 5],
    ...
    ['x' => 30, 'y' => 13],
    ['x' => 32, 'y' => 10],
]
</code>
</pre>
<pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="scatter"
    :labels="$scatter_labels" :data="$scatter_data" show_legend="false" /&gt;
</code>
</pre>
<br />
    <p>Scatter charts can have lines connecting the dots. This is turned off by default and can be displayed by setting
    <code class="inline text-red-500">show_line="true"</code>. This attribute only applies to scatter charts.
    </p>
    <x-bladewind::chart
        type="scatter" show_legend="false" show_line="true"
        :labels="$scatter_labels"
        :data="$scatter_data" />
    <pre class="language-markup line-numbers" data-line="2">
<code>
&lt;x-bladewind::chart
    type="scatter" show_line="true"
    :labels="$scatter_labels" :data="$scatter_data" show_legend="false" /&gt;
</code>
</pre>
    <h3 id="mixed">Mixed Charts</h3>
    <p>
        To define a mixture of chart types, you need to create your own chart data array that includes data for all the chart types you want to display.
        You then pass this array to the <code class="inline text-red-500">data</code> attribute.
        <a href="https://www.chartjs.org/docs/latest/charts/mixed.html" target="_blank">See this page for more details.</a>
    </p>
    @php
        $data = [
            "labels" => ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            "datasets" => [
                [
                    'type' => 'bar',
                    'label' => 'Sales',
                    'data' => [10, 20, 30, 25, 15],
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgb(75, 192, 192)',
                ],
                [
                    'type' => 'line',
                    'label' => 'Trend',
                    'data' => [12, 18, 28, 22, 17],
                    'borderColor' => '#FF6384',
                    'borderWidth' => 2,
                    'fill' => false,
                ]
            ]
        ];
    @endphp
    <x-bladewind::chart :data="$data" />
<pre class="language-php line-numbers">
<code>
$data = [
    "labels" => ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    "datasets" => [
        [
            'type' => 'bar',
            'label' => 'Sales',
            'data' => [10, 20, 30, 25, 15],
            'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
            'borderColor' => 'rgb(75, 192, 192)',
        ],
        [
            'type' => 'line',
            'label' => 'Trend',
            'data' => [12, 18, 28, 22, 17],
            'borderColor' => '#FF6384',
            'borderWidth' => 2,
            'fill' => false,
        ]
    ]
];
</code>
</pre>
<pre class="language-markup line-numbers">
<code>
&lt;x-bladewind::chart :data="$data"  /&gt;
</code>
</pre>
    <h2 id="data">Chart Data</h2>
    <p>
        All data is passed to the chart via the <code class="inline text-red-500">data</code> attribute, but there are two ways to define this data.
    </p>
    <h3>Option 1</h3>
    <p>
        This requires you to set values for both the <code class="inline text-red-500">labels</code> and <code class="inline text-red-500">data</code> attributes.
        The data in this case should only be the data points to be displayed in the chart. Each data point is matched against a corresponding label depending on the type of chart being displayed.
    </p>
    <pre class="language-php line-numbers">
<code>
    &lt;?php
        $labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple'];
        $data = [12, 19, 13, 15, 9, 10];
</code>
</pre>
    <pre class="language-markup">
    <code>
        &lt;x-bladewind::chart :labels="$labels" :data="$data" /&gt;
    </code>
</pre>
    <h3>Option 2</h3>
    <p>
        This requires you to define the entire chart datasets in an array and pass that to the <code class="inline text-red-500">data</code> attribute.
        This option is recommended if you require more flexibility with the properties you want to define in the <a href="https://www.chartjs.org/docs/latest/configuration/" target="_blank">Chart.js configurations</a>.
        When using this option, the only attributes available to the chart component are
        <code class="inline text-red-500">data</code>,
        <code class="inline text-red-500">options</code> and
        <code class="inline text-red-500">plugins</code>. All other attributes are ignored since they will need to be defined in your data array.
    </p>
    <pre class="language-php line-numbers">
<code>
&lt;?php
$data = [
    "labels" => ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    "datasets" => [
        [
            'type' => 'bar',
            'label' => 'Sales',
            'data' => [10, 20, 30, 25, 15],
            'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
            'borderColor' => 'rgb(75, 192, 192)',
        ],
        [
            'type' => 'line',
            'label' => 'Trend',
            'data' => [12, 18, 28, 22, 17],
            'borderColor' => '#FF6384',
            'borderWidth' => 2,
            'fill' => false,
        ]
    ]
];
</code>
</pre>
    <pre class="language-markup line-numbers">
<code>
&lt;x-bladewind::chart :data="$data"  /&gt;
</code>
</pre>
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Chart component.</p>
    @include('docs/announcement')
    <x-bladewind::table striped="true">
        <x-slot name="header">
            <th>Option</th>
            <th>Default</th>
            <th>Available Values</th>
        </x-slot>
        <tr>
            <td>color</td>
            <td><em>blue</em></td>
            <td>The colour of the dot indicator.
                <br> <code class="inline">primary</code> <code class="inline">blue</code> <code class="inline">red</code> <code class="inline">yellow</code> <code class="inline">green</code> <code class="inline">pink</code> <code class="inline">cyan</code> <code class="inline">black</code> <code class="inline">purple</code> <code class="inline">orange</code>
                <code class="inline">violet</code> <code class="inline">indigo</code> <code class="inline">fuchsia</code></td>
        </tr>
        <tr>
            <td>animate_dot</td>
            <td>false</td>
            <td>Determines if the dot should be animated or not.</td>
        </tr>
        <tr>
            <td>size</td>
            <td>small</td>
            <td>Defines the size of the bell. <br><code class="inline">small</code> <code class="inline">big</code></td>
        </tr>
        <tr>
            <td>show_dot</td>
            <td>true</td>
            <td>Defines if the dot indicator should be displayed by default.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
        <tr>
            <td>invert</td>
            <td>false</td>
            <td>Defines if the bell should be displayed as white.<br> <code class="inline">true</code> <code class="inline">false</code> </td>
        </tr>
    </x-bladewind::table>

    <h3>Chart with all attributes defined</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-bladewind::bell
                color="pink"
                show_dot="false"
                animate_dot="true"
                invert="true"
                size="big" /&gt;
        </code>
    </pre>

    <p>
        <x-bladewind::alert show_close_icon="false">
            The source file for this component is available in <code class="inline">resources > views > components > bladewind > chart.blade.php</code>
        </x-bladewind::alert>
    </p>

    <x-slot:side_nav>
        <div class="flex items-center"><div class="dot"></div><a href="#options">Common options</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#chart-types">Chart Types</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#area">Area</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#bar">Bar</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#bubble">Bubble</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#doughnut">Doughnut</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#line">Line</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#pie">Pie</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#polar">Polar Area</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#radar">Radar</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#scatter">Scatter</a></div>
        <div class="flex items-center pl-4"><div class="dot"></div><a href="#mixed">Mixed types</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#data">Chart data</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Full list of attributes</a></div>
    </x-slot:side_nav>
    <x-slot name="scripts">
        <script>
            selectNavigationItem('.component-chart');
        </script>
    </x-slot>
</x-app>
