<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="assets/img/logoo.png" style="width: 50px; height: 50px" alt="">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="Username" :value="__('Username')" />

                <x-input id="Username" class="block mt-1 w-full" type="text" name="Username" :value="old('Username')" required autofocus />
            </div>

             <!-- Password -->
             <div class="mt-4">
                <x-label for="Password" :value="__('Password')" />

                <x-input id="Password" class="block mt-1 w-full"
                                type="Password"
                                name="Password"
                                required autocomplete="new-Password" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="Email" :value="__('Email')" />

                <x-input id="Email" class="block mt-1 w-full" type="Email" name="Email" :value="old('Email')" required />
            </div>

              <!-- Nama Lengkap -->
              <div class="mt-4">
                <x-label for="NamaLengkap" :value="__('NamaLengkap')" />

                <x-input id="NamaLengkap" class="block mt-1 w-full" type="text" name="NamaLengkap" :value="old('NamaLengkap')" required autofocus />
            </div>

             <!-- Alamat -->
             <div class="mt-4">
                <x-label for="Alamat" :value="__('Alamat')" />

                <x-input id="Alamat" class="block mt-1 w-full" type="text" name="Alamat" :value="old('Alamat')" required autofocus />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
