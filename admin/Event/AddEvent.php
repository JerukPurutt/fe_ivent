<div id="createEventForm" class="hidden bg-white shadow-md rounded-lg p-6 mb-6">
  <h2 class="text-xl font-semibold mb-4 text-gray-800">Create New Admin</h2>
  <form action="storeUser.php" method="POST" enctype="multipart/form-data" class="space-y-4">
    
    <!-- ID -->
    <div>
      <label for="id" class="block mb-2 text-sm font-medium text-gray-900">ID</label>
      <input type="text" id="id" name="id" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- Nama Event -->
    <div>
      <label for="nama_event" class="block mb-2 text-sm font-medium text-gray-900">Nama Event</label>
      <select id="nama_event" name="nama_event" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        <option value="">-- Pilih Kategori --</option>
        <option value="1">Perorangan</option>
        <option value="2">Beregu</option>
      </select>
    </div>

    <!-- Tanggal -->
    <div>
      <label for="tgl" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
      <input type="text" id="tgl" name="tgl" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- Deskripsi -->
    <div>
      <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
      <input type="text" id="deskripsi" name="deskripsi" required
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
               focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
    </div>

    <!-- Upload Poster -->
    <div>
      <label for="poster" class="block mb-2 text-sm font-medium text-gray-900">Upload Poster</label>
      <input type="file" id="poster" name="poster" accept="image/*"
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-full cursor-pointer 
               bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 p-2.5 
               file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 
               file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" />
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
