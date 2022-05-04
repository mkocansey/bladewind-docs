@props([ 'name' => '' ])
@php 
    $name = preg_replace('/[\s-]/', '_', $name);
@endphp
<div class="border-b border-gray-200 dark:border-gray-700 ag-tab-{{ $name }}">
    <ul class="flex flex-wrap -mb-px tab">
        @if($name != '') {{ $slot }} @else you need to specify the name property of the tab @endif
    </ul>
</div>