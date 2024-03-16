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
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $usuario->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($usuario instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $usuario->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="w-full flex justify-around">
                        <button name="update" value="{{$usuario->id}}">Update</button>
                        <button name="delete" value="{{$usuario->id}}">Delete</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('/js/suscripcion.js') }}"></script>
</x-app-layout>
