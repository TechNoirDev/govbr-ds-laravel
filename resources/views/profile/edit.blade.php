<x-app-layout>
    <x-slot name="header">
        <h1>
            {{ __('') }}
        </h1>
    </x-slot>
    <div class="rol">
        <div class="col-md-7 mb-3">
            <div class="br-divider mb-n1"></div>
                @include('profile.partials.update-profile-information-form')
            <span class="br-divider mt-12"></span>
        </div>
    </div>
    <div class="rol">
        <div class="col-md-7 mb-3">
            @include('profile.partials.update-password-form')
            <span class="br-divider mt-12"></span>
        </div>
    </div>
{{--
    <div class="rol">
        <div class="col-sm-8 col-md-5 col-lg-4">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
--}}
</x-app-layout>
