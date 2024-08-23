<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <p>
        Login realizado com sucesso!
    </p>
    <p>
        Parágrafo exemplo com link do
        <a href="{{ route('base') }}">Template Base</a> completo.
    </p>
</x-app-layout>
