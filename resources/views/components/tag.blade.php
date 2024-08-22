@props(['tag', 'size' => 'base'])

@php
$classes = 'bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-300 font-bold';
if ($size === 'base') {
$classes .= ' px-5 py-1 text-sm';
}
if ($size === 'small') {
$classes .= ' px-3 py-1 text-2xs';
}
@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>