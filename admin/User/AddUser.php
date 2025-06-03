<div id="createUserForm" class="hidden bg-white shadow-md rounded-lg p-6 mb-6 max-w-xl mx-auto">
  <h2 class="text-xl font-semibold mb-6 text-gray-900">Create New User</h2>
  <form action="storeUser.php" method="POST" class="space-y-6">
    <div>
      <label for="id" class="block mb-2 text-sm font-medium text-gray-900">ID</label>
      <input type="text" id="id" name="id" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>
    <div>
      <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900">Role ID</label>
      <select id="role_id" name="role_id" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        <option value="">-- Pilih Role --</option>
        <option value="1">Admin</option>
        <option value="2">User</option>
      </select>
    </div>
    <div>
      <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
      <input type="text" id="username" name="username" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>
    <div>
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
      <input type="password" id="password" name="password" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>
    <div class="flex justify-between">
      <button type="submit"  onclick="window.history.back()"
      class="bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 shadow">Batal</button>
      <button type="submit"
        class="bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 shadow">Simpan</button>
    </div>
  </form>
</div>
