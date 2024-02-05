<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administración') }}
            </h2>

            {{--            Opciones para el administrador--}}
            <div class="flex space-x-4 justify-end">

            </div>
        </div>
    </x-slot>

    <section class="mx-auto max-w-7xl bg-white">
        <div class="flex justify-center flex-col items-center">
            <h2>
                Historias
            </h2>
            <div class="flex flex-col space-y-4">
                @foreach(App\Models\Historia::all() as $historia)
                    <div class="flex space-between">
                        <h3>Historia Nro. {{$historia}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
