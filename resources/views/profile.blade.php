@extends('layouts.app')

@section('content')
<div class="animate-fade-in">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Profile Service</h2>
    
    <!-- Profile Info Card -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 mb-6">
        <div class="flex items-center space-x-4 mb-4">
            <img src="{{ asset('images/default-profile.jpg') }}" alt="Profile Picture" class="w-20 h-20 rounded-full border-2 border-blue-500">
            <div>
                <h3 class="text-xl font-semibold">Nama Pengguna</h3>
                <p class="text-gray-600">email@example.com</p>
            </div>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300" onclick="openModal()">Edit Profile</button>
    </div>

    <!-- Riwayat Servis -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-xl font-semibold mb-4">Riwayat Servis</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left">Tanggal</th>
                        <th class="px-4 py-2 text-left">Kategori</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-4 py-2">2023-10-01</td>
                        <td class="px-4 py-2">Laptop</td>
                        <td class="px-4 py-2 text-green-500">Selesai</td>
                        <td class="px-4 py-2">Perbaikan keyboard</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-4 py-2">2023-09-15</td>
                        <td class="px-4 py-2">HP</td>
                        <td class="px-4 py-2 text-yellow-500">Pending</td>
                        <td class="px-4 py-2">Upgrade RAM</td>
                    </tr>
                    <!-- Tambahkan lebih banyak baris jika perlu -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Edit Profile -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-4">
            <h3 class="text-xl font-semibold mb-4">Edit Profile</h3>
            <form action="/profile/update" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" value="Nama Pengguna" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="email@example.com" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>
                <div>
                    <label for="photo" class="block text-sm font-medium text-gray-700">Foto Profil</label>
                    <input type="file" id="photo" name="photo" accept="image/*" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition duration-300">Batal</button>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('editModal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>
@endsection