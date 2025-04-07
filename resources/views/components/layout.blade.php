
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
      function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const items = document.querySelectorAll('.sidebar-item-text');
        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-16');
        items.forEach(item => item.classList.toggle('hidden'));
      }
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    @include('components/_sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
      @include('components/_topbar')

      <!-- Page Content -->
      <main class="flex-1 p-6">
        {{$slot}}
      </main>
    </div>
  </body>
</html>