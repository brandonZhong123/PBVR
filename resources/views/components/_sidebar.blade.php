
<div id="sidebar" class="w-64 bg-blue-500 text-white flex flex-col transition-all duration-300">
    <button 
      class="p-4 focus:outline-none hover:bg-blue-600" 
      onclick="toggleSidebar()">
      ☰
    </button>
    <nav class="flex-1">
      <ul>
        <li class="p-4 flex items-center hover:bg-blue-600">
          <span class="material-icons">dashboard</span>
          <span class="ml-4 sidebar-item-text">Dashboard</span>
        </li>
        <li class="p-4 flex items-center hover:bg-blue-600">
          <span class="material-icons">person</span>
          <span class="ml-4 sidebar-item-text">Profile</span>
        </li>
        <li class="p-4 flex items-center hover:bg-blue-600">
          <span class="material-icons">settings</span>
          <span class="ml-4 sidebar-item-text">Settings</span>
        </li>
      </ul>
    </nav>
  </div>