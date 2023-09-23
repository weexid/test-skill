<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-5">
                <a href="/profile">
                    <div class="mt-10 bg-white overflow-hidden shadow-md sm:rounded-lg">
                        <div class="p-6 text-gray-900 ">
                            <div class="w-50">
                                <img width="50" class="mx-auto" src="https://png.pngtree.com/png-clipart/20220711/ourmid/pngtree-handsome-boy-for-profile-picture-png-image_5866037.png" alt="profile">
                                Profil Siswa <span class="font-semibold">{{Auth::user()->profile->nama}}</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="mt-10 bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-6 text-gray-900 ">
                        <div class="w-50">
                            <div class="mb-5">
                                <div class="text-sm font-semibold">50%</div>
                                <div class="bg-gray-200 h-2 w-64 rounded-full">
                                    <div class="bg-primary h-full rounded-full" style="width: 50%;"></div>
                                </div>
                            </div>
                            Progres Belajar Siswa <span class="font-semibold">{{Auth::user()->profile->nama}}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-10 bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-6 text-gray-900 ">
                        <div class="w-50 flex items-center justify-center">
                            <div>
                                Comming soon...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
