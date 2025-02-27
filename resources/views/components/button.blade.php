@props([
    'href'=>null,
    'block'=>null,
    'outline'=>null,
    'info'=>null,
    'ghost'=>null,
    'disabled'=>null,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{$tag}} {{$href ? "href=$href" : ''}}
{{$attributes->class([
    'btn btn-primary',
    'btn-wide' => $block,
    'btn-outline' => $outline,
    'btn-info' => $info,
    'btn-ghost' => $ghost,
    'cursor-not-allowed opacity-50' => $disabled,
])}}
>
{{$slot}}
</{{$tag}}>
