<script src="https://cdn.tailwindcss.com"></script>
  <?php include '../navbar.php'; ?>
  <?php include '../sidebar.php'; ?>
<div class=" ml-[450px] max-w-3xl mt-[64px] mx-auto  p-6 rounded shadow border">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Data Perorangan</h1>
    <form class="space-y-4">
      <div>
        <label class="block mb-1 font-medium text-gray-700">ID</label>
        <input type="text" name="user_id" value="2" class="w-full border px-4 py-2 rounded" />
      </div>
        <!-- NAMA LENGKAP -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Nama Lengkap</label>
            <input type="email" name="nama_lengkap" value="Firman" class="w-full border px-4 py-2 rounded" />
        </div>
        <!-- NO HP -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">No Hp</label>
            <input type="text" name="no_HP" value="019391999" class="w-full border px-4 py-2 rounded" />
        </div>
        <!-- ALAMAT -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Alamat</label>
            <input type="text" name="alamat" value="Tarik" class="w-full border px-4 py-2 rounded" />
        </div>
      <div class="flex justify-between">
        <a href="PeroranganList.php" 
           class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 shadow text-center">
          Batal
        </a>
        <button type="submit" 
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 shadow">
          Simpan
        </button>
      </div>
    </form>
  </div>
</body>
</html>
