<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 print:col-span-4 bg-slate-400 py-6 px-4">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Historia periodontal</h2>
        <div>
            <h3>Historia buscal del paciente</h3>
            <form class="grid grid-cols-2 gap-2">
                <div>
                    <x-input-label for="frecuencia_cepillado" :value="__('Frecuencia del cepillado')"/>
                    <x-text-input wire:model="form.frecuencia_cepillado" :disabled="!$enabled" class="block mt-1 w-full" type="text"
                                  id="frecuencia_cepillado"/>
                    <x-input-error :messages="$errors->get('form.frecuencia_cepillado')" class="mt-2"/>
                </div>
                <div>
                    <x-input-label for="tipo_cepillo" :value="__('Tipo de cepillado')"/>
                    <x-text-input wire:model="form.tipo_cepillo" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="tipo_cepillo"/>
                    <x-input-error :messages="$errors->get('form.tipo_cepillo')" class="mt-2"/>
                </div>
                <div>
                    <x-input-label for="metodo_cepillado" :value="__('Método de cepillado')"/>
                    <x-text-input wire:model="form.metodo_cepillado" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="metodo_cepillado"/>
                    <x-input-error :messages="$errors->get('form.metodo_cepillado')" class="mt-2"/>
                </div>
                <div>
                    <x-input-label for="metodos_auxiliares" :value="__('Métodos auxiliares')"/>
                    <x-text-input wire:model="form.metodos_auxiliares" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="metodos_auxiliares"/>
                    <x-input-error :messages="$errors->get('form.metodos_auxiliares')" class="mt-2"/>
                </div>
                <div class="grid grid-cols-4 col-span-2 gap-2">
                    <div>
                        <x-input-label for="cepillado_lengua" :value="__('Cepillado de la lengua')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.cepillado_lengua">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.cepillado_lengua">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                    <div>
                        <x-input-label for="hemorragia_gingival" :value="__('Hemorragia gingival')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.hemorragia_gingival">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.hemorragia_gingival">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                    <div>
                        <x-input-label for="xerostomia" :value="__('Xerostomia')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.xerostomia">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.xerostomia">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                    <div>
                        <x-input-label for="sialorrea" :value="__('Sialorrea')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.sialorrea">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.sialorrea">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                </div>
                <div class="col-span-2">
                    <h3>Control Higiene Bucal</h3>
                </div>
                <div>
                    <x-input-label for="tecnica_cepillado" :value="__('Técnica de cepillado enseñada al paciente')"/>
                    <x-text-input wire:model="form.tecnica_cepillado" :disabled="!$enabled" class="block mt-1 w-full" type="text"
                                  id="tecnica_cepillado"/>
                    <x-input-error :messages="$errors->get('form.tecnica_cepillado')" class="mt-2"/>
                </div>
                <div>
                    <x-input-label for="cepillo_recomendado" :value="__('Cepillo dental recomendado')"/>
                    <x-text-input wire:model="form.cepillo_recomendado" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="cepillo_recomendado"/>
                    <x-input-error :messages="$errors->get('form.cepillo_recomendado')" class="mt-2"/>
                </div>
                <div>
                    <x-input-label for="metodos_auxiliares_requeridos" :value="__('Métodos auxiliares requeridos')"/>
                    <x-text-input wire:model="form.metodos_auxiliares_requeridos" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="metodos_auxiliares_requeridos"/>
                    <x-input-error :messages="$errors->get('form.metodos_auxiliares_requeridos')" class="mt-2"/>
                </div>
                <div>

                </div>
                <div class="grid grid-cols-4 col-span-2 gap-2">
                    <div>
                        <x-input-label for="placa_bacteriana_lengua" :value="__('Presencia de placa bacteriana en la lengua')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.placa_bacteriana_lengua">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.placa_bacteriana_lengua">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                    <div>
                        <x-input-label for="control_halitosis" :value="__('Control de halitosis')"/>
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" id="Sí" value="Sí"
                                       wire:model.blur="form.control_halitosis">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" id="No" value="No"
                                       wire:model.blur="form.control_halitosis">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                    </div>
                    <div class="col-span-4">
                        <x-input-label for="tratamiento" :value="__('Tratamiento')"/>
                        <x-text-input wire:model="form.tratamiento" :disabled="!$enabled" class="block mt-1 w-full" type="text" id="tratamiento"/>
                        <x-input-error :messages="$errors->get('form.tratamiento')" class="mt-2"/>
                    </div>
                    <div></div>
                </div>

            </form>
        </div>
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
