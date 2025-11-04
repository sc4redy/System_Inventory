<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 shadow rounded">
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700">Judul</label>
                        <input type="text" name="judul" value="{{ $post->judul }}" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Isi</label>
                        <textarea name="isi" class="w-full border rounded p-2" rows="5" required>{{ $post->isi }}</textarea>
                    </div>
                    <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded">Update</button>
                    <a href="{{ route('posts.index') }}" class="ml-2 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
