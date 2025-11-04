<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Post') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 shadow rounded">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Judul</label>
                        <input type="text" name="judul" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Isi</label>
                        <textarea name="isi" class="w-full border rounded p-2" rows="5" required></textarea>
                    </div>
                    <div style="display:inline-flex; gap:0.5rem;">
                        <button type="submit"
                                style="background-color:#3B82F6; color:white; font-weight:500; padding:0.5rem 1.25rem; border-radius:0.375rem; border:none; cursor:pointer;">
                            Simpan
                        </button>

                        <a href="{{ route('posts.index') }}"
                           style="color:#374151; text-decoration:underline; display:inline-flex; align-items:center; padding:0.5rem 0;">
                           Batal
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
