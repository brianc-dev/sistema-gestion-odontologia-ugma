<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 print:col-span-4 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Radiografias</h2>
        <form class="grid grid-cols-2 gap-2">
            <div>
                <x-input-label for="radiografia_inicial" :value="__('Radiografia inicial')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_inicial"/>
                <x-input-error :messages="$errors->get('form.radiografia_inicial')" class="mt-2"/>
                @if ($form->radiografia_inicial and gettype($form->radiografia_inicial) != 'string')
                    <img src="{{ $form->radiografia_inicial->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_inicial) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_inicial ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_inicial)) }}" />
                @else
                    <a href="{{$form->radiografia_inicial}}">
                        <img src="{{$form->radiografia_inicial}}"/>
                    </a>
                @endif
            </div>
            <div></div>
            <div>
                <x-input-label for="radiografia_penachos_1" :value="__('Radiografia penachos 1')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_penachos_1"/>
                <x-input-error :messages="$errors->get('form.radiografia_penachos_1')" class="mt-2"/>
                @if ($form->radiografia_penachos_1 and gettype($form->radiografia_penachos_1) != 'string')
                    <img src="{{ $form->radiografia_penachos_1->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_penachos_1) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_penachos_1 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_penachos_1)) }}" />
                @else
                    <a href="{{$form->radiografia_penachos_1}}">
                        <img src="{{$form->radiografia_penachos_1}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_penachos_2" :value="__('Radiografia penachos 2')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_penachos_2"/>
                <x-input-error :messages="$errors->get('form.radiografia_penachos_2')" class="mt-2"/>
                @if ($form->radiografia_penachos_2 and gettype($form->radiografia_penachos_2) != 'string')
                    <img src="{{ $form->radiografia_penachos_2->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_penachos_2) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_penachos_2 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_penachos_2)) }}" />
                @else
                    <a href="{{$form->radiografia_penachos_2}}">
                        <img src="{{$form->radiografia_penachos_2}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_final_1" :value="__('Radiografia final 1')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_final_1"/>
                <x-input-error :messages="$errors->get('form.radiografia_final_1')" class="mt-2"/>
                @if ($form->radiografia_final_1 and gettype($form->radiografia_final_1) != 'string')
                    <img src="{{ $form->radiografia_final_1->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_final_1) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_final_1 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_final_1)) }}" />
                @else
                    <a href="{{$form->radiografia_final_1}}">
                        <img src="{{$form->radiografia_final_1}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_final_2" :value="__('Radiografia final 2')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_final_2"/>
                <x-input-error :messages="$errors->get('form.radiografia_final_2')" class="mt-2"/>
                @if ($form->radiografia_final_2 and gettype($form->radiografia_final_2) != 'string')
                    <img src="{{ $form->radiografia_final_2->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_final_2) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_final_2 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_final_2)) }}" />
                @else
                    <a href="{{$form->radiografia_final_2}}">
                        <img src="{{$form->radiografia_final_2}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_final_3" :value="__('Radiografia final 3')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_final_3"/>
                <x-input-error :messages="$errors->get('form.radiografia_final_3')" class="mt-2"/>
                @if ($form->radiografia_final_3 and gettype($form->radiografia_final_3) != 'string')
                    <img src="{{ $form->radiografia_final_3->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_final_3) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_final_3 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_final_3)) }}" />
                @else
                    <a href="{{$form->radiografia_final_3}}">
                        <img src="{{$form->radiografia_final_3}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_final_4" :value="__('Radiografia final 4')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_final_4"/>
                <x-input-error :messages="$errors->get('form.radiografia_final_4')" class="mt-2"/>
                @if ($form->radiografia_final_4 and gettype($form->radiografia_final_4) != 'string')
                    <img src="{{ $form->radiografia_final_4->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_final_4) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_final_4 ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_final_4)) }}" />
                @else
                    <a href="{{$form->radiografia_final_4}}">
                        <img src="{{$form->radiografia_final_4}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_conductometria" :value="__('Radiografia de conductometría')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_conductometria"/>
                <x-input-error :messages="$errors->get('form.radiografia_conductometria')" class="mt-2"/>
                @if ($form->radiografia_conductometria and gettype($form->radiografia_conductometria) != 'string')
                    <img src="{{ $form->radiografia_conductometria->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_conductometria) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_conductometria ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_conductometria)) }}" />
                @else
                    <a href="{{$form->radiografia_conductometria}}">
                        <img src="{{$form->radiografia_conductometria}}"/>
                    </a>
                @endif
            </div>
            <div>
                <x-input-label for="radiografia_cono_patron" :value="__('Radiografia de cono patrón')"/>
                <x-input-file :disabled="!$enabled" wire:model="form.radiografia_cono_patron"/>
                <x-input-error :messages="$errors->get('form.radiografia_cono_patron')" class="mt-2"/>
                @if ($form->radiografia_cono_patron and gettype($form->radiografia_cono_patron) != 'string')
                    <img src="{{ $form->radiografia_cono_patron->temporaryUrl() }}" />
                @elseif(gettype($form->radiografia_cono_patron) == 'string' and \Illuminate\Support\Str::startsWith($form->radiografia_cono_patron ,'livewire-file:'))
                    <img src="{{url('storage/app/livewire-tmp/' . \Illuminate\Support\Str::remove('livewire-file:' ,$form->radiografia_cono_patron)) }}" />
                @else
                    <a href="{{$form->radiografia_cono_patron}}">
                        <img src="{{$form->radiografia_cono_patron}}"/>
                    </a>
                @endif
            </div>
        </form>
    </div>
    <div class="print:hidden">
        <div class="p-4 bg-white">
            <h3 class="font-bold text-lg">Correcciones</h3>
            <div class="flex flex-col space-y-2">
                @if($historia?->estudiante->profesor)
                    <p>
                        Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}
                    </p>
                @endif
                <x-textarea wire:model.blur="form.correcciones" rows="11"
                            :disabled="!Auth::user()->isProfesor()"></x-textarea>
                <x-input-error :messages="$errors->get('form.correcciones')" class="mt-2"/>
                @if(Auth::user()->isProfesor() and $historia->estudiante->profesor == Auth::user()->profesor)
                    <livewire:button text="Guardar" event="historia-update-correcciones"/>
                @endif
            </div>
        </div>
    </div>
</div>
