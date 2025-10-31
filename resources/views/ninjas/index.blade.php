<x-layout >
    <h2 class="text-3xl text-center font-bold">Ninja List</h2>

    <ul class="text-center">
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href='/ninjas/{{ $ninja["id"] }}'>
                    {{ $ninja["name"] }}, {{ $ninja["skill"] }}
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
