<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{__("Update Informasi Siswa Anemone")}}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('siswa.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap', $user->profile->nama)" required autofocus autocomplete="nama_lengkap" />
            <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="Tempat Lahir" :value="__('Tempat Lahir')" />
            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('nama_lengkap', $user->profile->tempat_lahir)" required autofocus autocomplete="tempat_lahir" />
            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('nama_lengkap', $user->profile->tanggal_lahir)" required autofocus autocomplete="tanggal_lahir" />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="sekolah" :value="__('Sekolah')" />
            <x-text-input id="sekolah" class="block mt-1 w-full" type="text" name="sekolah" :value="old('nama_lengkap', $user->profile->sekolah)" autofocus autocomplete="sekolah" />
            <x-input-error :messages="$errors->get('sekolah')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="nama_ortu" :value="__('Nama Orang Tua')" />
            <x-text-input id="nama_ortu" class="block mt-1 w-full" type="text" name="nama_ortu" :value="old('nama_ortu', $user->profile->nama_ortu)" required autofocus autocomplete="nama_ortu" />
            <x-input-error :messages="$errors->get('nama_ortu')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="alamat" :value="__('Alamat Tinggal')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat', $user->profile->alamat)" required autofocus autocomplete="alamat" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Updated.') }}</p>
            @endif
        </div>
    </form>
</section>
