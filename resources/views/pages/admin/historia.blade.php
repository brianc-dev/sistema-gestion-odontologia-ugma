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
            <div class="flex flex-col space-y-4 w-full items-center justify-center">
                @foreach(App\Models\Historia::all() as $historia)
                    <div class="w-full flex justify-between bg-slate-200 p-2 rounded-lg items-baseline space-x-4">
                        <a href="{{ route('admin.historias.show', [ 'historia' => $historia->id ]) }}">
                            <div class="flex space-x-4 grow">
                                <h3 class="">Historia
                                    Nro. {{$historia->numero_historia != '' ? $historia->numero_historia : 'Por asignar' }}</h3>
                                <p>Alumno: {{$historia->estudiante->user->name}}</p>
                                <time class="justify-self-end">{{ date_format($historia->created_at, 'd/m/Y h:i:s A') }}</time>
                            </div>
                        </a>
                        <div class="flex justify-end space-x-4 shrink-0">
                            <button class="btn-primary">
                                Asignar Nro.
                            </button>
                            <button class="btn-alert">
                                Eliminar
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
