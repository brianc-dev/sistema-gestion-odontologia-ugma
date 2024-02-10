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

    <section>
        <div class="mx-auto max-w-7xl bg-white grid grid-cols-3">
            <div class="col-span-3 p-4">
                <h2 class="font-bold text-lg">Alumnos registrados en el sistema</h2>
            </div>
            <div class="col-span-2 ">
                <div>
                    @forelse(\App\Models\Estudiante::all() as $estudiante)
                        <div wire:key="{{ $estudiante->id}}" class="flex p-4 border rounded-md space-x-4">
                            <div class="rounded-full bg-slate-300">
                                <img src="{{ asset('img/user-icon.png') }}" class="h-12">
                            </div>
                            <div class="flex flex-col grow ">
                                <p class="font-semibold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                <div class="flex space-x-4">
                                    <p>Historias creadas: {{ $estudiante->historias->count() }}</p>
                                    <p>Lapso: {{  ($estudiante->lapso_id) ? $estudiante->lapso->codigo : 'Sin asignar'}}</p>

                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="p-4">
                <p>Lapso</p>
                <div>
                    <x-select>
                        @forelse(\App\Models\Lapso::all() as $lapso)
                            <option value="{{ $lapso->codigo }}">{{ $lapso->codigo  }}</option>
                        @empty
                        @endforelse
                    </x-select>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
