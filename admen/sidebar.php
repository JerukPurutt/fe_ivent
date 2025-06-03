<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- Tombol toggle sidebar untuk tampilan mobile -->
<button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
   <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zM2 15.25a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75z" clip-rule="evenodd"/>
   </svg>
</button>

<aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-white border-r border-gray-200">
  <div class="h-16 flex items-center justify-between px-4 border-b">
    <span class="text-xl font-bold">Ivent</span>
    <button onclick="toggleSidebar()" class="text-gray-600 hover:text-gray-900 sm:hidden">
      x
    </button>
  </div>
  <div class="overflow-y-auto h-full px-3 py-4">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="../dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <span class="material-icons">dashboard</span>
          <span class="ml-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../../admin/User/UserList.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <span class="material-icons">people</span>
          <span class="ml-3">Manajemen User</span>
        </a>
      </li>
      <li>
        <a href="../../admin/Admin/AdminList.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <span class="material-icons">admin_panel_settings</span>
          <span class="ml-3">Manajemen Admin</span>
        </a>
      </li>
      <li>
        <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg hover:bg-gray-100 group" onclick="toggleSubmenu()">
          <span class="material-icons">event</span>
          <span class="ml-3 flex-1 text-left">Manajemen Event</span>
          <svg class="w-3 h-3 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
          </svg>
        </button>
        <ul id="event-submenu" class="hidden pl-8 mt-2 space-y-2">
          <li><a href="../../admin/Event/EventList.php" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Event</a></li>
          <li><a href="../../admin/Event/KelompokList.php" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Event Kelompok</a></li>
          <li><a href="../../admin/Event/PeroranganList.php" class="block p-2 text-gray-700 hover:bg-gray-200 rounded">Event Perorangan</a></li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("-translate-x-full");
  }

  function toggleSubmenu() {
    const submenu = document.getElementById("event-submenu");
    submenu.classList.toggle("hidden");
  }
</script>
