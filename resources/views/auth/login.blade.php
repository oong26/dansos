<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="d-flex justify-content-center mb-4">
                <x-application-logo width=64 height=64 />
            </a>
            <div class="mb-3">
                <a href="{{ route('beranda') }}" class="btn btn-primary text-white"><i class="fas fa-arrow-left"></i> Halaman Utama</a>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="nik" :value="__('NIK')" />

                <x-input id="nik" class="" type="nik"  name="nik" :value="old('nik')" required autofocus />
            </div>

            <div class="d-flex justify-content-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="text-muted" href="{{ route('password.request') }}" style="margin-right: 15px; margin-top: 15px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="ml-3">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    <div class="mt-4 text-center d-flex justify-content-center">
        <p>Belum memiliki akun ? </p><a href="{{ route('register') }}"> Register</a>
    </div>
</x-guest-layout>
