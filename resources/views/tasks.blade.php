<x-layout>
    <x-slot:heading>
        Deine Aufgaben:
    </x-slot:heading>

    <x-slot:leadtext>
        (hier alle Tasks als Liste)
    </x-slot:leadtext>

    <x-slot>

        @foreach ($tasks as $task)
            <p>{{ $task->id }} - {{ $task->bezeichnung }}</p>
        @endforeach

    </x-slot>
</x-layout>
