<div class="w-3/4 bg-slate-400 break-inside-avoid items-start py-6 px-4">
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </div>
    <div>
        <form wire:submit="save" class="">
            <div class="flex gap-4">
                <!-- Trastorno cardiovascular -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_cardiovascular" :value="__('Trastorno cardiovascular')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_cardiovascular" id="Sí" value="Sí" wire:model.blur="form.trastorno_cardiovascular">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_cardiovascular" id="No" value="No" wire:model.blur="form.trastorno_cardiovascular">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_cardiovascular')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>

                <!-- Trastorno respiratorio -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_respiratorio" :value="__('Trastorno Respiratorio')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_respiratorio" id="Sí" value="Sí" wire:model.blur="form.trastorno_respiratorio">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_respiratorio" id="No" value="No" wire:model.blur="form.trastorno_respiratorio">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_respiratorio')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <!-- Trastorno gastrointestinal -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_gastrointestinal" :value="__('Trastorno Gastrointestinal')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_gastrointestinal" id="Sí" value="Sí" wire:model.blur="form.trastorno_gastrointestinal">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_gastrointestinal" id="No" value="No" wire:model.blur="form.trastorno_gastrointestinal">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_gastrointestinal')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>

                <!-- Trastorno oseo -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_oseo" :value="__('Trastorno Oseo')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_oseo" id="Sí" value="Sí" wire:model.blur="form.trastorno_oseo">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_oseo" id="No" value="No" wire:model.blur="form.trastorno_oseo">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_oseo')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
            </div>
{{--            Second line--}}
            <div class="flex gap-4">
                <!-- Trastorno urologico -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_urologico" :value="__('Trastorno Urológico')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_urologico" id="Sí" value="Sí" wire:model.blur="form.trastorno_urologico">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_urologico" id="No" value="No" wire:model.blur="form.trastorno_urologico">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_urologico')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>

                <!-- trastorno_hematologico -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_hematologico" :value="__('Trastorno Hematologico')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_hematologico" id="Sí" value="Sí" wire:model.blur="form.trastorno_hematologico">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_hematologico" id="No" value="No" wire:model.blur="form.trastorno_hematologico">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_hematologico')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <!-- trastorno_endocrino -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_endocrino" :value="__('Trastorno Endocrino')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_endocrino" id="Sí" value="Sí" wire:model.blur="form.trastorno_endocrino">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_endocrino" id="No" value="No" wire:model.blur="form.trastorno_endocrino">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_endocrino')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>

                <!-- trastorno_neurologico -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_neurologico" :value="__('Trastorno Neurologico')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_neurologico" id="Sí" value="Sí" wire:model.blur="form.trastorno_neurologico">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_neurologico" id="No" value="No" wire:model.blur="form.trastorno_neurologico">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_neurologico')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
            </div>
            <div class="flex gap-4 justify-start">
                <!-- trastorno_ginecologico -->
                <div class="mt-4 w-full">
                    <x-input-label for="trastorno_ginecologico" :value="__('Trastorno Ginecologico')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="trastorno_ginecologico" id="Sí" value="Sí" wire:model.blur="form.trastorno_ginecologico">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="trastorno_ginecologico" id="No" value="No" wire:model.blur="form.trastorno_ginecologico">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.trastorno_ginecologico')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>

                <!-- enfermedad_infectocontagiosa -->
                <div class="mt-4 w-full">
                    <x-input-label for="enfermedad_infectocontagiosa" :value="__('Enfermedad Infectocontagiosa')"/>
                    <div class="mt-4 flex-shrink">
                        <x-fieldset :disabled="!$enabled">
                            <div>
                                <input type="radio" name="enfermedad_infectocontagiosa" id="Sí" value="Sí" wire:model.blur="form.enfermedad_infectocontagiosa">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="enfermedad_infectocontagiosa" id="No" value="No" wire:model.blur="form.enfermedad_infectocontagiosa">
                                <label for="No">No</label>
                            </div>
                        </x-fieldset>
                        <div> @error('form.enfermedad_infectocontagiosa')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
            </div>
            <div class="flex gap-4">
{{--                Descripcion amt--}}
                <div class="mt-4 flex-1">
                    <x-input-label for="descripcion_amt" :value="__('Descripcion')"/>
                    <x-textarea :disabled="!$enabled" wire:model.live="form.descripcion_amt" id="descripcion_amt"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="descripcion_amt" rows="4" required autofocus spellcheck="true">
                    </x-textarea>
                    <div> @error('form.descripcion_amt')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

        </form>
    </div>
</div>
