<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-[100%] flex flex-wrap align-middle justify-center gap-[10%]">
            @foreach ($usuarios as $usuario)
                <form method="post" action="update" class="mt-6 space-y-6 border border-black p-[20px]">
                    @csrf
                    <h1 class="text-4xl">{{$usuario->name}}</h1>
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $usuario->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $usuario->email)" required autofocus autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="w-full flex justify-around">
                        <button name="{{$usuario->id}}-update">Update</button>
                        <button name="{{$usuario->id}}-delete">Delete</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('/js/suscripcion.js') }}"></script>
</x-app-layout>
