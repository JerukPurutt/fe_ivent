<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" />
<aside id="sidebar" style="background-color: rgb(33, 37, 41);" class="bg-white shadow-md transition-width duration-300 w-56 flex flex-col overflow-y-auto h-screen fixed ">
  <nav class="mt-0 flex-1 z-10" style="background-color: rgb(33, 37, 41);">
    <ul>
      <a href="../dashboard.php">
        <li class="flex items-center px-6 py-3 cursor-pointer">
        <span class="material-symbols-rounded mr-2" style="color: rgb(89, 92, 95);">home</span>
        <span class="menu-text text-gray-400 hover:text-white">Dashboard</span>
          </li>
        </a>
        <!-- User -->
        <a href="../../admin/User/UserList.php">
          <li class="flex items-center px-6 py-3  cursor-pointer">
            <span class="material-symbols-rounded mr-2" style="color: rgb(89, 92, 95);">person</span>
          <span class="menu-text text-gray-400 hover:text-white">Manajemen User</span>
        </li>
      </a>
      <!-- Admin -->
      <a href="../../admin/Admin/AdminList.php">
        <li class="flex items-center px-6 py-3 cursor-pointer">
          <span class="material-symbols-rounded mr-2" style="color: rgb(89, 92, 95);">manage_accounts</span>
          <span class="menu-text text-gray-400 hover:text-white">Manajemen Admin</span>
        </li>
      </a>
      <!-- Event -->
        <li class="px-6 py-35 mt-3 cursor-pointer" onclick="toggleEventSubmenu()">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <span class="material-symbols-rounded mr-2" style="color: rgb(89, 92, 95);">calendar_today</span>
              <span class="menu-text text-gray-400 hover:text-white">Manajemen Event</span>
            </div>
            <span id="arrow" class="menu-text text-gray-400 hover:text-white" >v</span>
          </div>
        </li>
        <ul id="event-submenu" class="pl-10 mt-3 hidden flex-col space-y-2 text-sm text-gray-700">
          <li  id="event-submenu"><a href="../../admin/Event/EventList.php" class="text-gray-400 hover:text-white" >Event</a></li>
          <li  id="event-submenu"><a href="../../admin/Event/KelompokList.php" class="text-gray-400 hover:text-white" >Event Kelompok</a></li>
          <li  id="event-submenu"><a href="../../admin/Event/PeroranganList.php" class="text-gray-400 hover:text-white" >Event Perorangan</a></li>
        </ul>
      </ul>
  </nav>
</aside>
<script>
  function toggleEventSubmenu() {
    const submenu = document.getElementById("event-submenu");
    const arrow = document.getElementById("arrow");

    submenu.classList.toggle("hidden");
    arrow.textContent = submenu.classList.contains("hidden") ? "v" : "^";
  }
</script>

