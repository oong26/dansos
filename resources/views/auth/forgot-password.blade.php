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
        <div class="mb-4 text-muted">
            {{ __('Silahkan masukkan NIK anda dengan benar.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('check.nik') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="nik" :value="__('NIK')" />

                <x-input id="text" class="" name="nik" :value="old('nik')" required autofocus />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <x-button>
                    {{ __('Cek lupa password ') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
