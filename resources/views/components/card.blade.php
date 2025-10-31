@props(['highlight' => false])

<div @class(['!bg-red-300' => $highlight,
"card"])>
    {{ $slot }}
    {{-- <a href={{ $attributes->get('href') }}> --}}
    <a {{ $attributes }} class="btn hover:underline">
        View Details
    </a>
</div>
