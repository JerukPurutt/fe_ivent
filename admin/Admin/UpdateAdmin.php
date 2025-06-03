<script src="https://cdn.tailwindcss.com"></script>
  <?php include '../navbar.php'; ?>
  <?php include '../sidebar.php'; ?>
  <div class=" ml-[450px] max-w-3xl mt-[64px] mx-auto  p-6 rounded shadow border">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Admin</h1>
    <form action="UpdateUser.php" method="POST" class="space-y-4">
      <div>
        <label for="user_id" class="block mb-1 font-medium text-gray-700">User ID</label>
        <input type="text" id="user_id" name="user_id" value="2" class="w-full border px-4 py-2 rounded" required />
      </div>

      <div>
        <label for="username" class="block mb-1 font-medium text-gray-700">Email</label>
        <input type="email" id="username" name="username" value="habilatida@gmail.com" class="w-full border px-4 py-2 rounded" required />
      </div>

      <div>
        <label for="password" class="block mb-1 font-medium text-gray-700">Alamat</label>
        <input type="text" id="password" name="password" value="Ponokawan" class="w-full border px-4 py-2 rounded" required />
      </div>

      <div class="flex justify-between">
        <a href="AdminList.php" 
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
