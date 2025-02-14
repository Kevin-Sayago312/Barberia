<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Fecha
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hora
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Usuario
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>

                        <!--  -->
                        <tbody>
                            @foreach ($citas as $cita)
                            <tr class="bg-white dark:bg-gray-800">

                                <td class="px-6 py-4">
                                    {{$cita -> fecha}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$cita -> hora}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$cita -> userid}}
                                </td>
                            </tr>
                            @endforeach 
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
