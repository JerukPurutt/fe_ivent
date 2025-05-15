<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manajemen Event Kelompok</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

<?php include '../sidebar.php'; ?>

  <div class="flex-1 flex flex-col">
    
  <?php include '../navbar.php'; ?>

    <!-- Content -->
    <main class="flex-1 p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Event Perorangan</h1>
        <button onclick="toggleCreateForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">+ Create Perorangan</button>
      </div>
      <?php include 'AddPerorangan.php'; ?>
      <!-- Filter and Search -->
      <div class="flex flex-wrap gap-4 mb-4">
        <select class="border-gray-300 rounded px-4 py-2 shadow text-gray-700">
          <option value="">Filter by...</option>
          <option value="upcoming">Upcoming</option>
          <option value="past">Past</option>
        </select>
        <input type="text" placeholder="Search by name..." class="flex-1 border border-gray-300 rounded px-4 py-2 shadow" />
      </div>
      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow rounded">
          <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
            <tr>
              <th class="text-left px-6 py-3 border-b">ID</th>
              <th class="text-left px-6 py-3 border-b">Pendaftaran_id</th>
              <th class="text-left px-6 py-3 border-b">Nama Lengkap</th>
              <th class="text-left px-6 py-3 border-b">No Hp</th>
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
              <td class="px-6 py-4 border-b">12903</td>
              <td class="px-6 py-4 border-b">Gardema</td>
              <td class="px-6 py-4 border-b">081939039361</td>
              <td class="px-6 py-4 border-b">Ponokawan</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b text-center">
              <form action="PeroranganUpdate.php" method="POST">
                  <input type="hidden" name="admin_id" value="1" />
                  <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-sm px-3 py-1 rounded mr-2">
                    Update
                  </button>
                </form>
                <button class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">Delete</button>
              </td>
            </tr>
            <!-- Tambahkan baris lain sesuai data -->
          </tbody>
        </table>
      </div>
    </main>

  </div>

</body>
<script>
   function toggleCreateForm() {
    const form = document.getElementById('createEventForm');
    form.classList.toggle('hidden');
  }
    let collapsed = false;

    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const logoText = document.getElementById('logoText');
      const menuTexts = document.querySelectorAll('.menu-text');

      collapsed = !collapsed;

      if (collapsed) {
        sidebar.classList.remove('w-64');
        sidebar.classList.add('w-20');
        logoText.classList.add('hidden');
        menuTexts.forEach(text => text.classList.add('hidden'));
      } else {
        sidebar.classList.remove('w-20');
        sidebar.classList.add('w-64');
        logoText.classList.remove('hidden');
        menuTexts.forEach(text => text.classList.remove('hidden'));
      }
    }
  </script>
</html>
