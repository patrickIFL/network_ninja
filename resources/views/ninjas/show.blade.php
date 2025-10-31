<x-layout>
    @if ($id == 1)
        <h2>Mario</h2>
    @elseif ($id == 2)
        <h2>Luigi</h2>
    @else
        <h2>Other User</h2>
    @endif

    <h2>Ninja ID: {{ $id }}</h2>
</x-layout>
