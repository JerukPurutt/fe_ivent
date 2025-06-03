<div id="createEventForm" class="hidden bg-white shadow-md rounded-lg p-6 mb-6">
  <h2 class="text-xl font-semibold mb-4 text-gray-800">Create New Admin</h2>
  <form action="storeUser.php" method="POST" class="space-y-4">
    <!-- ID -->
    <div>
      <label for="id" class="block mb-2 text-sm font-medium text-gray-900">ID</label>
      <input type="text" id="id" name="id" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>
    <!-- Nama Lengkap -->
    <div>
      <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
      <input type="text" id="nama_lengkap" name="nama_lengkap" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- No HP -->
    <div>
      <label for="no_hp_p" class="block mb-2 text-sm font-medium text-gray-900">No Hp</label>
      <input type="text" id="no_hp_p" name="no_hp_p" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- Alamat -->
    <div>
      <label for="alamat_p" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
      <input type="text" id="alamat_p" name="alamat_p" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- Tombol Simpan -->
    <div class="flex justify-between">
      <button type="submit"  onclick="window.history.back()"
      class="bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 shadow">Batal</button>
     <button type="submit"
        class="bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 shadow">Simpan</button>
    </div>
  </form>
</div>
