<div class="grid grid-cols-4 break-inside-avoid items-start">
    <div class="col-span-3 bg-slate-400 py-6 px-4">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Estudio de modelos
            </h2>
        </div>
        <div>
            <form wire:submit="save" class="grid grid-cols-3 gap-4 py-4">
                <div class="col-span-3 grid grid-rows-9 grid-flow-col gap-3">
                    {{--         Maxilar superior           --}}
                    <div>
                        <h3>Maxilar superior</h3>
                        {{--                Tipo arco--}}
                        <x-input-label for="maxsup_tipo_arco" :value="__('Tipo Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_tipo_arco"
                                    id="maxsup_tipo_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_tipo_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_tipo_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Tipo arco--}}
                        <x-input-label for="maxsup_forma_arco" :value="__('Forma Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_forma_arco"
                                    id="maxsup_forma_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_forma_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_forma_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Simetria arco--}}
                        <x-input-label for="maxsup_simetria_arco" :value="__('Simetría del Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_simetria_arco"
                                    id="maxsup_simetria_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_simetria_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_simetria_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Paladar--}}
                        <x-input-label for="maxsup_paladar" :value="__('Paladar')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_paladar"
                                    id="maxsup_paladar"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_paladar" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_paladar')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Malposiciones--}}
                        <x-input-label for="maxsup_malposiciones" :value="__('Malposiciones dentarias')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_malposiciones"
                                    id="maxsup_malposiciones"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_malposiciones" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_malposiciones')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Dientes ausentes--}}
                        <x-input-label for="maxsup_dientes-ausentes" :value="__('Dientes ausentes')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_dientes-ausentes"
                                    id="maxsup_dientes-ausentes"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_dientes-ausentes" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_dientes-ausentes')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Facetas desgaste--}}
                        <x-input-label for="maxsup_facetas_desgaste" :value="__('Facetas de desgastes')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_facetas_desgaste"
                                    id="maxsup_facetas_desgaste"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_facetas_desgaste" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_facetas_desgaste')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Diastemas--}}
                        <x-input-label for="maxsup_diastemas" :value="__('Diastemas')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_diastemas"
                                    id="maxsup_diastemas"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_diastemas" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_diastemas')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Anomalias de forma tamano y numero--}}
                        <x-input-label for="maxsup_anomalias_forma_tamano_numero"
                                       :value="__('Anomalías de forma tamaño y número')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxsup_anomalias_forma_tamano_numero"
                                    id="maxsup_anomalias_forma_tamano_numero"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxsup_anomalias_forma_tamano_numero" rows="4" required autofocus
                                    spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxsup_anomalias_forma_tamano_numero')"
                                       class="mt-2"/>
                    </div>

                    {{--         Maxilar inferior           --}}

                    <div>
                        <h3>Maxilar inferior</h3>
                        {{--                Tipo arco--}}
                        <x-input-label for="maxinf_tipo_arco" :value="__('Tipo Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_tipo_arco"
                                    id="maxinf_tipo_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_tipo_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_tipo_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Tipo arco--}}
                        <x-input-label for="maxinf_forma_arco" :value="__('Forma Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_forma_arco"
                                    id="maxinf_forma_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_forma_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_forma_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Simetria arco--}}
                        <x-input-label for="maxinf_simetria_arco" :value="__('Simetría del Arco')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_simetria_arco"
                                    id="maxinf_simetria_arco"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_simetria_arco" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_simetria_arco')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Piso de boca--}}
                        <x-input-label for="maxinf_piso_boca" :value="__('Piso de boca')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_piso_boca"
                                    id="maxinf_piso_boca"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_piso_boca" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_piso_boca')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Malposiciones--}}
                        <x-input-label for="maxinf_malposiciones" :value="__('Malposiciones dentarias')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_malposiciones"
                                    id="maxinf_malposiciones"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_malposiciones" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_malposiciones')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Dientes ausentes--}}
                        <x-input-label for="maxinf_dientes-ausentes" :value="__('Dientes ausentes')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_dientes-ausentes"
                                    id="maxinf_dientes-ausentes"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_dientes-ausentes" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_dientes-ausentes')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Facetas desgaste--}}
                        <x-input-label for="maxinf_facetas_desgaste" :value="__('Facetas de desgastes')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_facetas_desgaste"
                                    id="maxinf_facetas_desgaste"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_facetas_desgaste" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_facetas_desgaste')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Diastemas--}}
                        <x-input-label for="maxinf_diastemas" :value="__('Diastemas')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_diastemas"
                                    id="maxinf_diastemas"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_diastemas" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_diastemas')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Anomalias de forma tamano y numero--}}
                        <x-input-label for="maxinf_anomalias_forma_tamano_numero"
                                       :value="__('Anomalías de forma tamaño y número')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.maxinf_anomalias_forma_tamano_numero"
                                    id="maxinf_anomalias_forma_tamano_numero"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="maxinf_anomalias_forma_tamano_numero" rows="4" required autofocus
                                    spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.maxinf_anomalias_forma_tamano_numero')"
                                       class="mt-2"/>
                    </div>

                    {{--         Modelos en oclusion           --}}
                    <div>
                        <h3>Modelos en oclusión</h3>
                        {{--                Linea media--}}
                        <x-input-label for="oclusion_linea_media" :value="__('Linea media')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_linea_media"
                                    id="oclusion_linea_media"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_linea_media" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_linea_media')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Sobresalte--}}
                        <x-input-label for="oclusion_sobresalte" :value="__('Sobresalte')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_sobresalte"
                                    id="oclusion_sobresalte"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_sobresalte" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_sobresalte')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Sobrepase--}}
                        <x-input-label for="oclusion_sobrepase" :value="__('Sobrepase')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_sobrepase"
                                    id="oclusion_sobrepase"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_sobrepase" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_sobrepase')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Relacion canina--}}
                        <x-input-label for="oclusion_relacion_canina" :value="__('Relación canina')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_relacion_canina"
                                    id="oclusion_relacion_canina"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_relacion_canina" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_relacion_canina')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Relacion molar--}}
                        <x-input-label for="oclusion_relacion_molar" :value="__('Relación molar')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_relacion_molar"
                                    id="oclusion_relacion_molar"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_relacion_molar" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_relacion_molar')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Mordida anterior--}}
                        <x-input-label for="oclusion_mordida_anterior" :value="__('Mordida anterior')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_mordida_anterior"
                                    id="oclusion_mordida_anterior"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_mordida_anterior" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_mordida_anterior')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Mordida posterior--}}
                        <x-input-label for="oclusion_mordida_posterior" :value="__('Mordida posterior')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_mordida_posterior"
                                    id="oclusion_mordida_posterior"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_mordida_posterior" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_mordida_posterior')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Curvas de compensacion--}}
                        <x-input-label for="oclusion_curvas_compensacion" :value="__('Curvas de compensación')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_curvas_compensacion"
                                    id="oclusion_curvas_compensacion"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_curvas_compensacion" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_curvas_compensacion')" class="mt-2"/>
                    </div>

                    <div>
                        {{--                Plano oclusal--}}
                        <x-input-label for="oclusion_plano_oclusal"
                                       :value="__('Plano oclusal')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.oclusion_plano_oclusal"
                                    id="oclusion_plano_oclusal"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="oclusion_plano_oclusal" rows="4" required autofocus
                                    spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.oclusion_plano_oclusal')"
                                       class="mt-2"/>
                    </div>

                </div>
                <div class="col-span-2">
                    <div>
                        {{--                Descripcion amt--}}
                        <x-input-label for="examenes_complementarios" :value="__('Examen Complementarios')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.examenes_complementarios"
                                    id="examenes_complementarios"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="examenes_complementarios" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.examenes_complementarios')" class="mt-2"/>
                    </div>
                </div>
                <div class="col-span-2">
                    <div>
                        {{--                Interconsultas--}}
                        <x-input-label for="interconsultas" :value="__('Interconsultas')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.interconsultas"
                                    id="interconsultas"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="interconsultas" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.interconsultas')" class="mt-2"/>
                    </div>
                </div>
                <div class="col-span-2">
                    <div>
                        {{--                Diagnostico--}}
                        <x-input-label for="diagnostico" :value="__('Diagnóstico')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.diagnostico"
                                    id="diagnostico"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="diagnostico" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.diagnostico')" class="mt-2"/>
                    </div>
                </div>
                <div class="col-span-2">
                    <div>
                        {{--                Pronostico--}}
                        <x-input-label for="pronostico" :value="__('Pronóstico')"/>
                        <x-textarea :disabled="!$enabled" wire:model.live="form.pronostico"
                                    id="pronostico"
                                    class="block mt-1 w-full rounded-lg border-none resize-y" type="text"
                                    name="pronostico" rows="4" required autofocus spellcheck="true">
                        </x-textarea>
                        <x-input-error :messages="$errors->get('form.pronostico')" class="mt-2"/>
                    </div>
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
                        Profesor: {{ $historia->estudiante->profesor->nombre . ' ' . $historia->estudiante->profesor->apellido }}</p>
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
