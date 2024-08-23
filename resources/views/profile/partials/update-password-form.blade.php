<section>
    <header>
        <h2 class="mb-0">
            {{ __('Update Password') }}
        </h2>
        <p>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mt-6">
            <x-br-input :messages="$errors->updatePassword->get('current_password')" />
                <x-input-label for="current_password" :value="__('Current Password')" />
                <x-text-input id="current_password" name="current_password" type="password"
                    autocomplete="current-password" />
                <button class="br-button" type="button"
                        aria-label="Exibir senha"
                        role="switch"
                        aria-checked="false"
                >
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div class="mt-4">
            <x-br-input :messages="$errors->updatePassword->get('password')" />
                <x-input-label for="password" :value="__('New Password')" />
                <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
                <button class="br-button" type="button"
                        aria-label="Exibir senha"
                        role="switch"
                        aria-checked="false"
                >
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="mt-4 mb-2">
            <x-br-input :messages="$errors->updatePassword->get('password')" />
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                    autocomplete="new-password" />
                <button class="br-button" type="button"
                        aria-label="Exibir senha"
                        role="switch"
                        aria-checked="false"
                >
                    <i class="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>
        <x-input-error :messages="$errors->updatePassword->get('password')" />
        <div class="mt-6x d-flex justify-content-end">
            @if (session('status') === 'password-updated')
                <x-form-success value="{{  ('Atualizado com sucesso! ') }}" />
            @endif
            <x-primary-button>
                <i class="fas fa-user" aria-hidden="true"></i>
                <span class="d-sm-inline">
                    {{ __('Save') }}
                </span>
            </x-primary-button>
        </div>

    </form>
</section>
