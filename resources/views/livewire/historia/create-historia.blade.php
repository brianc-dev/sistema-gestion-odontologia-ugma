<div class="container flex h-fit">
    <div class="w-1/3 pe-2 break-inside-avoid">
        <div class="bg-white pe-2 py-6">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-4 px-4 block text-right">Secciones</h2>
            <div class="flex flex-col gap-2">
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Datos personales del
                    paciente
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Historia Médica</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Historia Odontológica
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Antecedentes Médicos
                    Personales
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Antecedentes Médicos
                    Familiares
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Examen radiográfico</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Periodontograma</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Estudio de modelos</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Plan de tratamiento</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Modificaciones del plan de
                    tratamiento
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Presupuesto</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Secuencia de tratamiento
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Historia periodontal
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Ficha endodontica</button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Pruebas diagnosticas
                </button>
                <button class="bg-slate-200 rounded-r-lg p-2 hover:bg-slate-300 text-right">Ficha endodontica</button>
            </div>
        </div>
    </div>
    <div class="w-full bg-slate-400 break-inside-avoid items-start py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Datos personales del paciente
            </h2>
        </div>

        <form wire:submit="save" class="">
            <div class="flex gap-4">
                <!-- Nombre -->
                <div class="mt-4 w-full">
                    <x-input-label for="nombre" :value="__('Nombre')"/>
                    <x-text-input wire:model.live="form.nombre" id="nombre" class="block mt-1 w-full" type="text"
                                  name="nombre" required autofocus/>
                    <div> @error('form.nombre')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>

                <!-- Apellido -->
                <div class="mt-4 w-full">
                    <x-input-label for="apellido" :value="__('Apellido')"/>
                    <x-text-input wire:model.live="form.apellido" id="apellido" class="block mt-1 w-full" type="text"
                                  name="apellido" required autofocus/>
                    <div> @error('form.apellido')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>

                <!-- Cedula -->
                <div class="mt-4 w-full">
                    <x-input-label for="cedula" :value="__('Cédula')"/>
                    <div class="flex space-between">
                        <select wire:model.live="form.letra_cedula" value="-" class="me-2">
                            <option value="">-</option>
                            <option value="V">V</option>
                            <option value="E">E</option>
                        </select>
                        <x-text-input wire:model.live="form.numero_cedula" id="numero_cedula"
                                      class="block mt-1 w-full" type="tel"
                                      name="numero_cedula" required autofocus/>
                    </div>
                    <div> @error('form.numero_cedula')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <!-- Edad -->
                <div class="mt-4 flex-shrink">
                    <x-input-label for="edad" :value="__('Edad')"/>
                    <x-text-input wire:model.live="form.edad" id="edad" class="block mt-1 w-full" type="text"
                                  name="edad" required autofocus/>
                    <x-input-error :messages="$errors->get('form.edad')" class="mt-2"/>
                </div>

                <!-- Sexo -->
                <div class="mt-4 flex-shrink">
                    <x-input-label for="sexo" :value="__('Sexo')"/>
                    <fieldset>
                        <div>

                            <input type="radio" name="sexo" id="male" value="M" wire:model.live="form.sexo">
                            <label for="male">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" name="sexo" id="female" value="F" wire:model.live="form.sexo">
                            <label for="female">Femenino</label>
                        </div>
                    </fieldset>
                    <div> @error('form.sexo')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    <x-input-error :messages="$errors->get('form.edad')" class="mt-2"/>
                </div>

                <!-- Edad -->
                <div class="mt-4 flex-1">
                    <x-input-label for="lugar_nacimiento" :value="__('Lugar de nacimiento')"/>
                    <x-text-input wire:model.live="form.lugar_nacimiento" id="lugar_nacimiento"
                                  class="block mt-1 w-full" type="text"
                                  name="lugar_nacimiento" required autofocus/>
                    <div> @error('form.lugar_nacimiento')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <!-- Fecha nacimiendo -->
                <div class="mt-4 flex-1">
                    <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')"/>
                    <x-text-input wire:model.live="form.fecha_nacimiento" id="fecha_nacimiento"
                                  class="block mt-1 w-full" type="date"
                                  name="fecha_nacimiento" required autofocus/>
                    <div> @error('form.fecha_nacimiento')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>

                <!-- Ocupación -->
                <div class="mt-4 flex-1">
                    <x-input-label for="ocupacion" :value="__('Ocupación')"/>
                    <x-text-input wire:model.live="form.ocupacion" id="ocupacion"
                                  class="block mt-1 w-full" type="text"
                                  name="ocupacion" required autofocus/>
                    <div> @error('form.ocupacion')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>


            <div class="flex gap-4">
                <!-- Dirección -->
                <div class="mt-4 flex-1">
                    <x-input-label for="direccion" :value="__('Dirección')"/>
                    <x-text-input wire:model.live="form.direccion" id="direccion"
                                  class="block mt-1 w-full" type="text"
                                  name="direccion" required autofocus/>
                    <div> @error('form.direccion')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <!-- Telefono -->
                <div class="mt-4">
                    <x-input-label for="telefono" :value="__('Teléfono')"/>
                    <x-text-input wire:model.live="form.telefono" id="telefono"
                                  class="block mt-1" type="tel"
                                  name="telefono" required autofocus/>
                    <div> @error('form.telefono')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
                <!-- Contacto emergencia -->
                <div class="mt-4">
                    <x-input-label for="contacto_emergencia" :value="__('Contacto de emergencia')"/>
                    <x-text-input wire:model.live="form.contacto_emergencia" id="contacto_emergencia"
                                  class="block mt-1" type="text"
                                  name="contacto_emergencia" required autofocus/>
                    <div> @error('form.contacto_emergencia')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>

                <!-- Telefono -->
                <div class="mt-4">
                    <x-input-label for="telefono_emergencia" :value="__('Teléfono de emergencia')"/>
                    <x-text-input wire:model.live="form.telefono_emergencia" id="telefono_emergencia"
                                  class="block mt-1" type="tel"
                                  name="telefono_emergencia" required autofocus/>
                    <div> @error('form.telefono_emergencia')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <!-- Motivo consulta -->
                <div class="mt-4 flex-1">
                    <x-input-label for="motivo_consulta" :value="__('Motivo de consulta')"/>
                    <textarea wire:model.live="form.motivo_consulta" id="motivo_consulta"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="motivo_consulta" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.motivo_consulta')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>

            </div>

            <div class="flex gap-4">
                <!-- Enfermedad actual -->
                <div class="mt-4 flex-1">
                    <x-input-label for="enfermedad_actual" :value="__('Enfermedad actual')"/>
                    <textarea wire:model.live="form.enfermedad_actual" id="enfermedad_actual"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="enfermedad_actual" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.enfermedad_actual')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="button" class="btn-secondary">{{ __('Cancelar') }}</button>
                <x-primary-button class="ms-4 btn-primary">
                    {{ __('Guardar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
