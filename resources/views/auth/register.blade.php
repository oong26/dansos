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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NIK -->
            <div class="mt-4">
                <x-label for="nik" :value="__('NIK')" />

                <x-input id="nik" class="" type="text" name="nik" :value="old('nik')" required />
            </div>

            <!-- Nama -->
            <div class="mt-3">
                <x-label for="nama" :value="__('Nama')" />

                <x-input id="nama" class="" type="text" name="nama" :value="old('nama')" required autofocus />
            </div>
             <!-- password -->
            <div class="mt-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="" type="password" name="password" :value="old('password')" required autofocus />
            </div>
            <div class="mt-3">
                <x-label for="konfirmasi_password" :value="__('Konfirmasi Password')" />

                <x-input id="konfirmasi_password" class="" type="password" name="konfirmasi_password" :value="old('konfirmasi_password')" required autofocus />
            </div>

            <!-- Alamat -->
            <div class="mt-3">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" class="" type="text" name="alamat" :value="old('alamat')" required autofocus />
            </div>

            <!-- Jenis kelamin -->
            <div class="mt-3">
                <x-label for="nama" :value="__('Jenis kelamin')" />
                <br>
                <input type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required>&nbsp;<label for="laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>&nbsp;<label for="perempuan">Perempuan</label>
            </div>

            <!-- Tanggal lahir -->
            <div class="mt-3">
                <x-label for="tgl_lahir" :value="__('Tanggal lahir')" />

                <x-input id="tgl_lahir" class="" type="date" name="tgl_lahir" :value="old('tgl_lahir')" required autofocus />
            </div>

            <!-- No HP -->
            <div class="mt-3">
                <x-label for="no_hp" :value="__('No. HP')" />

                <x-input id="no_hp" class="" type="text" name="no_hp" :value="old('no_hp')" required autofocus />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a class="text-muted" href="{{ route('login') }}" style="margin-right: 15px; margin-top: 15px;">
                    {{ __('Sudah mendaftar?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
