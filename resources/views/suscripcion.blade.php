<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Suscripcion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full flex flex-row flex-wrap">
            <div class="bg-white overflow-hidden shadow-sm w-[48%] mb-8 mx-auto flex flex-row flex-wrap items-center">
                <div class="w-[100%] text-center">
                    <h2 class="text-[32px]">1 dia de clase a la semana</h2>
                    <h3>Precio: 25€/mes</h3>
                    <form action="gracias" id="f1" method="POST">
                        @csrf
                        <select name="dia1" id="dia1" class="border-none">
                            <option value="Dia semana">Dia semana</option>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                        </select>
                        <button id="btn1">Añadir Pago</button>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm w-[48%] mb-8 mx-auto flex flex-row flex-wrap items-center">
                <div class="w-[100%] text-center">
                    <h2 class="text-[32px]">2 dias de clase a la semana</h2>
                    <h3>Precio: 40€/mes</h3>
                    <form action="gracias" id="f2" method="POST">
                        @csrf
                        <select name="dia1" class="border-none">
                            <option value="Dia semana">Dia semana</option>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                        </select>
                        <select name="dia2" class="border-none">
                            <option value="Dia semana">Dia semana</option>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miercoles">Miercoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                            <option value="Sabado">Sabado</option>
                            <option value="Domingo">Domingo</option>
                        </select>
                        <button id="btn2">Añadir pago</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/suscripcion.js') }}"></script>
</x-app-layout>
