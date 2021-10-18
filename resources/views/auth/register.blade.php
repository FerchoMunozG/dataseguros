<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="id_type" value="{{ __('ID Type') }}" />
                <select id="id_type"  class="block mt-1 w-full" name="id_type">
                    <option value="CC">Cédula de Ciudadanía</option>
                    <option value="CE">Cédula de Extranjería</option>
                    <option value="NIT">Número de Identificación Tributaria</option>
                    <option value="P">Pasaporte</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="id_doc" value="{{ __('ID Document') }}" />
                <x-jet-input id="id_doc" class="block mt-1 w-full" type="number" name="id_doc" :value="old('id_doc')" min=1 required autocomplete="id_doc" />
            </div>

            <div class="mt-4">
                <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
                <x-jet-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autocomplete="birthday" />
            </div>

            <div class="mt-4">
                <x-jet-label for="marital_status" value="{{ __('Marital Status') }}" />
                <select id="marital_status"  class="block mt-1 w-full" name="marital_status">
                    @foreach (['Soltero', 'Casado', 'Unión Marital de Hecho'] as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
