<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow border">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Admin</h1>
    <form class="space-y-4">
      <div>
        <label class="block mb-1 font-medium text-gray-700">User ID</label>
        <input type="text" name="user_id" value="2" class="w-full border px-4 py-2 rounded" />
      </div>

      <div>
        <label class="block mb-1 font-medium text-gray-700">Email</label>
        <input type="email" name="email" value="habilatida@gmail.com" class="w-full border px-4 py-2 rounded" />
      </div>

      <div>
        <label class="block mb-1 font-medium text-gray-700">Alamat</label>
        <input type="text" name="alamat" value="Ponokawan" class="w-full border px-4 py-2 rounded" />
      </div>

      <div class="flex justify-between">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
        <a href="AdminList.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
      </div>
    </form>
  </div>
</body>
</html>
