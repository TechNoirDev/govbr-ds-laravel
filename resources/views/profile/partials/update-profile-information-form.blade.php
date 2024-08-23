<section>
    <header>
        <h2 class="mb-0">
            {{ __('Profile Information') }}
        </h2>
        <p>
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mt-6">
            <x-br-input :messages="$errors->get('name')" />
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)"
                              required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" />
                <button class="br-button" type="button">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="mt-4">
            <x-br-input :messages="$errors->get('email')" />
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)"
                              required autocomplete="username"
                />
                <button class="br-button" type="button" aria-label="Buscar">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </button>
                <x-input-error :messages="$errors->get('email')" />

                @if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail
                    && ! $user->hasVerifiedEmail())
                    <div>
                        <p>
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if(session('status') === 'verification-link-sent')
                            <p>
                                {{ __(
                                'A new verification link has been sent to your email address.'
                                ) }}
                            </p>
                        @endif
                    </div>
                @endif

            </div>
        </div>
        <div class="mt-6x d-flex justify-content-end">
            @if (session('status') === 'profile-updated')
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
