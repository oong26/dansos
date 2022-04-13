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
            {{ __('Silahkan masukkan Password baru anda dengan benar.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('update.user') }}">
            @csrf

           <!-- password -->
            <div class="mt-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="" type="hidden" name="id_user" :value="old('id',Session::get('id'))" />
                <x-input id="password" class="" type="password" name="password" :value="old('password')" required autofocus />
            </div>
            <div class="mt-3">
                <x-label for="konfirmasi_password" :value="__('Konfirmasi Password')" />

                <x-input id="konfirmasi_password" class="" type="password" name="konfirmasi_password" :value="old('konfirmasi_password')" required autofocus />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <x-button>
                        {{ __('Cek lupa password ') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
