<?php

namespace App\Livewire\Profesor;

use App\Models\Estudiante;
use App\Models\Profesor;
use Livewire\Component;

class AsignarEstudiantes extends Component
{

    public Profesor $profesor;

    public function asignarEstudiante(Estudiante $estudiante)
    {
        $estudiante->profesor_id = $this->profesor->id;
        $estudiante->save();
    }

    public function removerAlumno(Estudiante $estudiante)
    {
        $estudiante->profesor_id = null;
        $estudiante->save();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="mx-auto max-w-7xl bg-white">
        <div class="flex justify-center flex-col items-center">
            <h2 class="text-start text-lmd font-bold w-full p-4 uppercase">
                Asignar estudiantes a profesor
            </h2>


            <div class="w-full grid grid-cols-3">
                <div class="col-span-3">
                    <div class="rounded-md flex w-full p-6 border space-x-4">
                        <div class="rounded-full bg-slate-300">
                            <img src="{{asset('img/user-icon.png')}}" alt="Icono de usuario"/>
                        </div>
                        <div class="flex flex-col grow">
                            <p class="text-xl font-bold">Profesor: {{$profesor->nombre . ' ' . $profesor->apellido}}</p>
                            <p class="text-md">Estudiantes asignados: {{$profesor->estudiantes()->count()}}</p>

                        </div>
                        <div class="flex flex-col justify-center">

                        </div>
                    </div>

                </div>
                <div class="col-span-2 p-4">
                    <div class="p-4">
                        <p class="text-lg font-bold pb-4">Estudiantes por asignar</p>
                        <div class="flex flex-col space-y-2">
                            @forelse(\App\Models\Estudiante::where('profesor_id', null)->get() as $estudiante)
                                <div wire:key="{{ $estudiante->id}}" class="flex p-4 border rounded-md space-x-4">
                                    <div class="rounded-full bg-slate-300">
                                        <img src="{{ asset('img/user-icon.png') }}" class="h-12">
                                    </div>
                                    <div class="flex flex-col grow ">
                                        <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                        <div class="flex space-x-4">
                                        <p>Historias creadas: {{ $estudiante->historias->count() }}</p>
                                        <p>Lapso: {{  ($estudiante->lapso_id) ? $estudiante->lapso->codigo : 'Sin asignar'}}</p>

                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center items-center">
                                        <button class="btn-primary " wire:click="asignarEstudiante({{ $estudiante->id}})">Asignar</button>
                                    </div>
                                </div>

                            @empty
                            <div>No existen estudiantes por asignar</div>
                            @endforelse
                        </div>
                    </div>

                </div>
                <div class="p-4 border">
                    <div class="p-4">
                        <p class="text-lg font-bold pb-4">Alumnos asignados</p>
                        <div class="flex flex-col">
                            @forelse(\App\Models\Estudiante::where('profesor_id', $profesor->id)->get() as $estudiante)
                            <div class="flex p-4 border rounded-md">
                                <div class="flex flex-col grow">
                                    <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                        <p>Historias creadas: {{ $estudiante->historias->count() }}</p>
                                </div>
                                <div class="flex flex-col">
                                <button wire:click="removerAlumno({{ $estudiante->id }})" class="btn-alert">Remover</button>

                                </div>

                            </div>
                            @empty
                                <p>No posee alumnos asignados</p>
                            @endforelse


                        </div>

                    </div>

                </div>


            </div>
        </div>
        </div>
        HTML;
    }
}
