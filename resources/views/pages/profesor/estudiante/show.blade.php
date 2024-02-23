<x-app-layout>
    <div class="flex bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-4 space-x-4 items-center">
        <div class=""><img class="bg-slate-200 aspect-square rounded-full" src="{{ asset('img/user-icon.png') }}"/>
        </div>
        <div class="flex flex-col ">
            <h3 class="text-xl font-bold">Alumno: {{ $estudiante->nombre . $estudiante->apellido }}</h3>
            <p>Profesor: <span>{{ $estudiante->profesor }}</span></p>
            <p>Lapso: <span>{{ $estudiante->lapso }}</span></p>
        </div>

    </div>

    <section class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white py-4">
            <div class="flex flex-col">
                <div class="w-2/3 grow rounded-md bg-white">
                    <h2 class="text-lg font-bold">Historias</h2>

                </div>
                <div>
                    @forelse($estudiante->historias as $historia)
                        <div wire:key="{{ $historia->id }}" class="rounded-lg bg-white p-4">
                            <a href="{{ route('historias.show', $historia->id) }}">
                                <div class="flex justify-between items-center space-x-4">
                                    <p>Nro. {{$historia->numero_historia}}</p>
                                    <div class="grow">
                                        <p>Paciente: {{$historia->paciente->nombre}}</p>
                                    </div>
                                    <p class="text-slate-400 text-sm">{{ $historia->created_at->format('d-n-Y h:i A') }}</p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="p-4">
                            <p>Aún no posee historias creadas!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
