<x-layout >
    <h2 class="text-3xl text-center font-bold">Ninja List</h2>

    <ul class="text-center grid grid-cols-3 gap-5 mt-5">
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href='/ninjas/{{ $ninja["id"] }}' :highlight="$ninja['skill'] > 70">
                    {{ $ninja["name"] }}, {{ $ninja["skill"] }}
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
