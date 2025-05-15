<div id="createAdminForm" class="hidden bg-white shadow-md rounded-lg p-6 mb-6">
  <h2 class="text-xl font-semibold mb-4 text-gray-800">Create New Admin</h2>
  <form action="storeUser.php" method="POST" class="space-y-4">
    <div>
      <label class="block text-gray-700 font-medium mb-1">ID</label>
      <input type="text" name="id" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <div>
      <label class="block text-gray-700 font-medium mb-1">Role ID</label>
      <select name="role_id" class="w-full border border-gray-300 rounded px-4 py-2" required>
        <option value="">-- Pilih Role --</option>
        <option value="1">Admin</option>
        <option value="2">User</option>
      </select>
    </div>
    <div>
      <label class="block text-gray-700 font-medium mb-1">Email</label>
      <input type="text" name="Email" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <div>
      <label class="block text-gray-700 font-medium mb-1">Alamat</label>
      <input type="text" name="alamat" class="w-full border border-gray-300 rounded px-4 py-2" required>
    </div>
    <div class="flex justify-end">
      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Simpan</button>
    </div>
  </form>
</div>
