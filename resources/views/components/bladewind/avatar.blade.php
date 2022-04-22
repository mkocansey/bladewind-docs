@props([ 
    'url' => '',
    'alt' => 'image',
    'size' => '12',
    'css' => 'mr-2 mt-2',
    'stacked' => 'false',
])
@php  $avatar = ($url === '') ? asset('bladewind/images/avatar.png') : $url; @endphp

<span class="w-6 w-8 w-10 w-12 w-14 w-16 w-20 w-24 w-28 h-6 h-8 h-10 h-12 h-14 h-16 h-20 h-24 h-28"></span>
<div class="w-{{ $size }} h-{{ $size }} inline-block rounded-full ring-2 ring-gray-200 ring-offset-2 overflow-hidden bg-gray-50 {{$css}}@if($stacked=='true') -ml-5 @endif">
    <img src="{{ $avatar }}" alt="{{ $alt }}" class="object-cover object-top" />
</div>