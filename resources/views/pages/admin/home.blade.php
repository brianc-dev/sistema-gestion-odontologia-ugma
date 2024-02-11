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
        <div class="max-w-7xl mx-auto h-screen flex justify-start flex-col items-center bg-white">
            <h2 class="text-md font-bold p-4">
                Opciones de administración
            </h2>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 border p-4">
                <div>
                    <a href="{{ route('admin.historias') }}">
                        <div class="flex w-full items-center border rounded-md p-4 space-x-2">
                            <div class="size-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-full">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
                                </svg>
                            </div>
                            <span class="text-lg font-bold uppercase">Historias</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('admin.estudiantes') }}">
                        <div class="flex w-full items-center border rounded-md p-4 space-x-2">
                            <div class="size-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-full">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>
                                </svg>
                            </div>
                            <span class="text-lg font-bold uppercase">Estudiantes</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('admin.profesores') }}">
                        <div class="flex w-full items-center border rounded-md p-4 space-x-2">
                            <div class="size-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-full">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z"/>
                                </svg>
                            </div>
                            <span class="text-lg font-bold uppercase">Profesores</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('admin.usuarios') }}">
                        <div class="flex w-full items-center border rounded-md p-4 space-x-2">
                            <div class="size-16 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="size-full">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                                </svg>
                            </div>
                            <span class="text-lg font-bold uppercase">Usuarios</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        </div>
    </section>
</x-app-layout>
