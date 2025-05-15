<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manajemen Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .transition-width {
      transition: width 0.3s;
    }
  </style>
</head>
<body class="flex h-screen bg-gray-100">
<?php include '../sidebar.php'; ?>
  <div class="flex-1 flex flex-col">
    <?php include '../navbar.php'; ?>
    <main class="flex-1 p-6">
      <!-- Header -->
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Admin</h1>
        <button onclick="window.location.href='AddAdmin.php'" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Create Admin</button>
      </div>
      <?php include 'AddAdmin.php'; ?>
      <!-- Filter and Search -->
      <div class="flex flex-wrap gap-4 mb-4">
        <select class="border-gray-300 rounded px-4 py-2 shadow text-gray-700">
          <option value="">Filter by...</option>
          <option value="admin">Admin</option>
          <option value="customer">Customer</option>
        </select>
        <input type="text" placeholder="Search by name..." class="flex-1 border border-gray-300 rounded px-4 py-2 shadow" />
      </div>
      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow rounded">
          <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
            <tr>
              <th class="text-left px-6 py-3 border-b">ID</th>
              <th class="text-left px-6 py-3 border-b">User id</th>
              <th class="text-left px-6 py-3 border-b">Emai</th>
              <th class="text-left px-6 py-3 border-b">Alamat</th>
              <th class="text-left px-6 py-3 border-b">Created At</th>
              <th class="text-left px-6 py-3 border-b">Updated At</th>
              <th class="text-center px-6 py-3 border-b">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Contoh data -->
            <tr class="hover:bg-gray-50 text-gray-700">
              <td class="px-6 py-4 border-b">1</td>
              <td class="px-6 py-4 border-b">2</td>
              <td class="px-6 py-4 border-b">habilatida@gmail.com</td>
              <td class="px-6 py-4 border-b">Ponokawan</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b text-center">
                <form action="UpdateAdmin.php" method="POST">
                  <input type="hidden" name="admin_id" value="1" />
                  <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-sm px-3 py-1 rounded mr-2">
                    Simpan
                  </button>
                </form>

                <button class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
