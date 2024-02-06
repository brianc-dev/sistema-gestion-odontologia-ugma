<div class="w-3/4 bg-slate-400 break-inside-avoid items-start py-6 px-4">
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </div>
    <div>
        <form wire:submit="save" class="">
            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="antecedentes_odontologicos_personales"
                                   :value="__('Antecedentes Odontologicos Personales')"/>
                    <textarea wire:model.live="form.antecedentes_odontologicos_personales"
                              id="antecedentes_odontologicos_personales"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="antecedentes_odontologicos_personales" rows="4" required autofocus
                              spellcheck="true">
                    </textarea>
                    <div> @error('form.antecedentes_odontologicos_personales')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>
            <div class="flex gap-4">
                <!-- ortodoncia -->
                <div class="mt-4">
                    <x-input-label for="ortodoncia" :value="__('Ortodoncia')" @class('text-nowrap')/>
                    <div class="mt-4 flex-shrink">
                        <fieldset>
                            <div>
                                <input type="radio" name="ortodoncia" id="Sí" value="Sí"
                                       wire:model.blur="form.ortodoncia">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="ortodoncia" id="No" value="No"
                                       wire:model.blur="form.ortodoncia">
                                <label for="No">No</label>
                            </div>
                        </fieldset>
                        <div> @error('form.ortodoncia')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
                <!-- protesis -->
                <div class="mt-4 w-full">
                    <x-input-label for="protesis" :value="__('Protesis')"/>
                    <div class="mt-4 flex-shrink">
                        <fieldset>
                            <div>
                                <input type="radio" name="protesis" id="Sí" value="Sí" wire:model.blur="form.protesis">
                                <label for="Sí">Sí</label>
                            </div>
                            <div>
                                <input type="radio" name="protesis" id="No" value="No" wire:model.blur="form.protesis">
                                <label for="No">No</label>
                            </div>
                        </fieldset>
                        <div> @error('form.protesis')
                            <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                    </div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="habitos" :value="__('Habitos')"/>
                    <textarea wire:model.live="form.habitos" id="habitos"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="habitos" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.habitos')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="descripcion_habitos" :value="__('Descripcion Habitos')"/>
                    <textarea wire:model.live="form.descripcion_habitos" id="descripcion_habitos"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="descripcion_habitos" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.descripcion_habitos')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="examen_fisico" :value="__('Examen Fisico')"/>
                    <textarea wire:model.live="form.examen_fisico" id="examen_fisico"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="examen_fisico" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.examen_fisico')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="examen_extrabucal" :value="__('Examen Extrabucal')"/>
                    <textarea wire:model.live="form.examen_extrabucal" id="examen_extrabucal"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="examen_extrabucal" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.examen_extrabucal')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>

            <div class="flex gap-4">
                <div class="mt-4 flex-1">
                    <x-input-label for="examen_intrabucal" :value="__('Examen Extrabucal')"/>
                    <textarea wire:model.live="form.examen_intrabucal" id="examen_intrabucal"
                              class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                              name="examen_intrabucal" rows="4" required autofocus spellcheck="true">
                    </textarea>
                    <div> @error('form.examen_intrabucal')
                        <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
                </div>
            </div>
        </form>
    </div>
</div>
