<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Ruang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('ruang.update', $ruang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kode Ruang</label>
                        <input type="text" name="kode_ruang"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            value="{{ $ruang->kode_ruang }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama Ruang</label>
                        <input type="text" name="nama_ruang"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            value="{{ $ruang->nama_ruang }}">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
