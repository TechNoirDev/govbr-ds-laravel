<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <form method="POST" action="{{ route('login') }}" class="mt-1">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-br-input :messages="$errors->get('email')" />
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input type="email"
                                      name="email"
                                      id="email"
                                      value="{{ old('email') }}"
                                      required
                        />
                        <button class="br-button" type="button">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>


                <!-- Password -->
                <div class="mt-4">
                    <x-br-input :messages="$errors->get('email')" />
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
                    <x-input-error :messages="$errors->get('email')" class="mt-1 mr-2 text-sm" />
                </div>

                <div class="flex justify-between mt-4">
                    <!-- Remember Me -->
                    <div>
                        <div class="br-checkbox p-1 mb-2">
                            <input id="remember" name="remember" type="checkbox" />
                            <label for="remember" class="govbr-azul">{{ __('Remember me') }}</label>
                        </div>
                    </div>
                    <!--div class="ml-1 mb-6">
                        @if (Route::has('password.request'))
                            <a class="block text-sm text-govbr-azul"
                               href="{{ route('password.request') }} ">
                               {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div-->
                </div>

                <div class="mt-4 mb-16 d-flex justify-content-center">
                    <x-primary-button>
                        <i class="fas fa-user" aria-hidden="true"></i>
                        <span class="d-sm-inline">
                            {{ __('Log in') }}
                        </span>
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
