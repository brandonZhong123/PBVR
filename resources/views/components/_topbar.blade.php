
<header class="bg-blue-500 text-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Topbar</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            Logout
        </button>
    </form>
</header>