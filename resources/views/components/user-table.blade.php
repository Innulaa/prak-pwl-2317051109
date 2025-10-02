@props(['users'])

<table class="min-w-full border-collapse bg-white shadow-md rounded-xl overflow-hidden">
    <thead class="bg-pink-200 text-pink-700 uppercase text-sm font-semibold">
        <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">Nama</th>
            <th class="px-6 py-3 text-left">NPM</th>
            <th class="px-6 py-3 text-left">Kelas</th>
            <th class="px-6 py-3 text-center">Aksi</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach ($users as $user)
            <tr class="hover:bg-pink-50 transition-colors duration-300">
                <td class="px-6 py-4">{{ $user->id }}</td>
                <td class="px-6 py-4">{{ $user->nama }}</td>
                <td class="px-6 py-4">{{ $user->npm }}</td>
                <td class="px-6 py-4">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                <td class="px-6 py-4 text-center flex justify-center gap-2">
                    <a href="{{ route('user.edit', $user->id) }}" class="bg-pink-300 hover:bg-pink-400 text-white font-semibold px-4 py-2 rounded-lg transition-colors duration-300">
                        Edit
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-300 hover:bg-red-400 text-white font-semibold px-4 py-2 rounded-lg transition-colors duration-300">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
