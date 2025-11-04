<x-app-layout>
    <x-slot name="header">
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <h2 style="font-weight:bold; font-size:1.5rem; color:#1F2937;">
                Daftar Barang
            </h2>
            <a href="{{ route('posts.create') }}"
               style="background-color:#2563EB; color:white; font-weight:600; padding:0.5rem 1.25rem; border-radius:0.5rem; text-decoration:none; display:inline-block;">
                + Tambah Barang
            </a>
        </div>
    </x-slot>

    <div style="padding-top:2rem; padding-bottom:2rem;">
        <div style="max-width:1120px; margin:0 auto; padding-left:1.5rem; padding-right:1.5rem;">

            {{-- Notifikasi sukses --}}
            @if (session('success'))
                <div style="background-color:#D1FAE5; border-left:4px solid #10B981; color:#065F46; padding:1rem; margin-bottom:1.5rem; border-radius:0.375rem;">
                    <p style="font-weight:500;">{{ session('success') }}</p>
                </div>
            @endif

            {{-- Table container --}}
            <div style="background-color:white; box-shadow:0 1px 3px rgba(0,0,0,0.1); border-radius:0.5rem; overflow:hidden;">
                <table style="width:100%; border-collapse:collapse;">
                    <thead style="background-color:#F3F4F6; color:#374151; text-transform:uppercase; font-weight:600; font-size:0.875rem;">
                        <tr>
                            <th style="padding:0.75rem 1.5rem; text-align:left; border-bottom:1px solid #E5E7EB;">Nama Barang</th>
                            <th style="padding:0.75rem 1.5rem; text-align:left; border-bottom:1px solid #E5E7EB;">Deskripsi Barang</th>
                            <th style="padding:0.75rem 1.5rem; text-align:center; border-bottom:1px solid #E5E7EB; width:10rem;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr style="transition: background-color 0.15s;">
                                <td style="padding:0.75rem 1.5rem; font-weight:500; color:#1F2937;">{{ $post->judul }}</td>
                                <td style="padding:0.75rem 1.5rem; color:#4B5563;">{{ Str::limit($post->isi, 60) }}</td>
                                <td style="padding:0.75rem 1.5rem; text-align:center;">
    <span style="display:inline-flex; gap:0.5rem; justify-content:center;">
        <a href="{{ route('posts.edit', $post) }}"
           style="background-color:#3B82F6; color:white; font-size:0.875rem; padding:0.25rem 0.75rem; border-radius:0.375rem; text-decoration:none;">
            Edit
        </a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus post ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="background-color:#EF4444; color:white; font-size:0.875rem; padding:0.25rem 0.75rem; border-radius:0.375rem; border:none; cursor:pointer;">
                Hapus
            </button>
        </form>
    </span>
</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align:center; padding:1.5rem; color:#6B7280;">
                                    Belum ada data barang
                                </tkd>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
