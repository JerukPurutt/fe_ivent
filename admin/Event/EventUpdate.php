<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow border">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Event</h1>
    <form class="space-y-4">
      <div>
        <label class="block mb-1 font-medium text-gray-700">ID</label>
        <input type="text" name="user_id" value="2" class="w-full border px-4 py-2 rounded" />
      </div>
        <!-- NAMA EVENT -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Nama Event</label>
            <input type="nama_event" name="nama_event" value="habilatida@gmail.com" class="w-full border px-4 py-2 rounded" />
        </div>
        <!-- TANGGAL -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Tanggal</label>
            <input type="text" name="tgl_e" value="Ponokawan" class="w-full border px-4 py-2 rounded" />
        </div>
        <!-- DESKRIPSI -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Deskripsi</label>
            <input type="text" name="deskripsi_e" value="Ponokawan" class="w-full border px-4 py-2 rounded" />
        </div>
        <!-- POSTER -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Upload Poster</label>
            <input type="file" name="poster" accept="image/*" class="w-full border border-gray-300 rounded px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
        </div>
      <div class="flex justify-between">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
        <a href="EventList.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</a>
      </div>
    </form>
  </div>
</body>
</html>
