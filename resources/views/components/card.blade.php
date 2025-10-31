<div class="card">
    {{ $slot }}
    {{-- <a href={{ $attributes->get('href') }}> --}}
    <a {{ $attributes }} class="btn">
        View Details
    </a>
</div>
