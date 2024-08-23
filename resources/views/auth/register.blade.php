<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="mt-1">
        @csrf
        <!-- Name -->
        <div>
            <x-br-input :messages="$errors->get('name')" />
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input type="text"
                              name="name"
                              id="name"
                              value="{{ old('name') }}"
                              required
                />
                <button class="br-button" type="button">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-br-input :messages="$errors->get('email')" />
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input type="email"
                              name="email"
                              id="email"
                              value="{{ old('email') }}"
                              required
                />
                <button class="br-button" type="button" aria-label="Buscar">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 mr-1 text-sm" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-br-input :messages="$errors->get('password')" />
                <x-input-label for="password" :value="__('Password')"/>
                <x-text-input type="password"
                              name="password"
                              id="password"
                              required
                              autocomplete="current-password"
                />
                <button class="br-button" type="button"
                        aria-label="Exibir senha"
                        role="switch"
                        aria-checked="false"
                >
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-br-input :messages="$errors->get('password')" />
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                <x-text-input type="password"
                              name="password_confirmation"
                              id="password_confirmation"
                              required
                />
                <button class="br-button" type="button"
                        aria-label="Exibir senha"
                        role="switch"
                        aria-checked="false"
                >
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 mr-1 text-sm" />
        </div>



        <div class="mt-6 mb-16 d-flex justify-content-center">
            <x-primary-button>
                <i class="fas fa-user" aria-hidden="true"></i>
                <span class="d-sm-inline">
                    {{ __('Register') }}
                </span>
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
