<div id="createEventForm" class="hidden bg-white shadow-md rounded-lg p-6 mb-6">
  <h2 class="text-xl font-semibold mb-4 text-gray-800">Create New Admin</h2>
  <form action="storeUser.php" method="POST" class="space-y-4">
    <div>
      <label class="block text-gray-700 font-medium mb-1">ID</label>
      <input type="text" name="id" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <!-- NAMA LENGKAP -->
    <div>
      <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <!-- NO HP -->
    <div>
      <label class="block text-gray-700 font-medium mb-1">No Hp</label>
      <input type="text" name="no_hp_p" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <!-- ALAMAT -->
    <div>
      <label class="block text-gray-700 font-medium mb-1">Alamat</label>
      <input type="text" name="alamat_p" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    
    <div class="flex justify-end">
      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Simpan</button>
    </div>
  </form>
</div>
