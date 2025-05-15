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
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Event Kelompok</h1>
        <button onclick="toggleCreateForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">+ Create Event</button>
      </div>
      <?php include 'AddKelompok.php'; ?>
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
              <th class="text-left px-6 py-3 border-b">Nama Kelompok</th>
              <th class="text-left px-6 py-3 border-b">No Hp Ketua</th>
              <th class="text-left px-6 py-3 border-b">Alamat Ketua</th>
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
              <td class="px-6 py-4 border-b">
                <button onclick="openModal('modalAnggota1')" class="text-blue-600 hover:underline">Gardema</button>
              </td>
              <td class="px-6 py-4 border-b">081939039361</td>
              <td class="px-6 py-4 border-b">Ponokawan</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b">2025-05-10</td>
              <td class="px-6 py-4 border-b text-center">
              <form action="KelompokUpdate.php" method="POST">
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
    <div id="modalAnggota1" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white w-full max-w-md mx-auto rounded-lg shadow-lg p-6 relative">
      <h2 class="text-xl font-semibold mb-4 text-gray-800">Anggota Kelompok: Gardema</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-1 text-sm">
        <li>Agus</li>
        <li>Budi</li>
        <li>Citra</li>
        <li>Dina</li>
        <li>Elang</li>
        <li>Fajar</li>
        <li>Gita</li>
        <li>Hendra</li>
        <li>Ika</li>
        <li>Joko</li>
      </ul>
      <button onclick="closeModal('modalAnggota1')" class="absolute top-2 right-3 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
    </div>
  </div>

</body>
<script>
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.getElementById(id).classList.add('flex');
  }

  function closeModal(id) {
    document.getElementById(id).classList.remove('flex');
    document.getElementById(id).classList.add('hidden');
  }
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
