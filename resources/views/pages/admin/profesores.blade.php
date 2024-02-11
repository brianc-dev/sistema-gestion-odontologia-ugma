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
            <h2 class="text-start font-bold text-lg">
                Profesores
            </h2>
            <div class="flex flex-col space-y-4 w-full">

                    @forelse(\App\Models\Profesor::all() as $profesor)
                        <div class="rounded-md flex w-full p-6 border space-x-4">
                            <div class="rounded-full bg-slate-300">
                            <img src="{{asset('img/user-icon.png')}}" alt="Icono de usuario"/>
                            </div>
                            <div class="flex flex-col grow">
                            <p class="text-xl font-bold">{{$profesor->nombre . ' ' . $profesor->apellido}}</p>
                            <p class="text-md">Estudiantes asignados: {{$profesor->estudiantes()->count()}}</p>

                            </div>
                            <div class="flex flex-col justify-center">
                                <a href="{{ route('admin.profesores.edit', ['profesor' => $profesor->id]) }}" class="btn-option">Asignar alumnos</a>
                            </div>
                        </div>
                    @empty
                        <div>No existen profesores registrados.</div>
                    @endforelse

            </div>
        </div>
    </section>
</x-app-layout>
