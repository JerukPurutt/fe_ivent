<script src="https://cdn.tailwindcss.com"></script>
<?php include'../navbar.php'?>
<?php include'../sidebar.php'?>
<div class=" ml-[450px] max-w-3xl mt-[64px] mx-auto  p-6 rounded shadow border">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit user</h1>
    <form action="UpdateUser.php" method="POST" class="space-y-6">
      <div class="grid gap-6 md:grid-cols-1">
        <div>
          <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">User ID</label>
          <input type="text" id="user_id" name="user_id" value="2" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div>
          <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
          <input type="text" id="username" name="username" value="habilatida@gmail.com" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
          <input type="password" id="password" name="password" value="Ponokawan" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>
      </div>

      <div class="flex justify-between">
        <a href="UserList.php" 
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

