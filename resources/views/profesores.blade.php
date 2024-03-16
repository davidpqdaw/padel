<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profesores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full flex flex-row flex-wrap">
            @foreach ($profesors as $profesor)
            <div class="bg-white overflow-hidden shadow-sm w-[30%] mb-8 mx-auto flex flex-row flex-wrap items-center">
                <div class="text-gray-900 w-[100px]">
                    <img src="{{asset("images/profesores/paquitoNavarro.png")}}" alt="imagen profesor" class="w-[100%]">
                </div>
                <div class="w-[100%] text-center">
                    <h2 class="text-[32px]">{{$profesor->name}}</h2>
                    <h3 class="text-[24px]">Años Jugando: {{$profesor->tiempo_jugando}} Años</h3>
                    <ul>
                        @foreach ($alumnos as $alumno)
                            @if ($profesor->id==$alumno->profesor_id)
                                <li>{{$alumno->name}}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
