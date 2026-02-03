<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Service App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Laptop Service</h1>
            <nav>
                <a href="/" class="hover:text-gray-200 transition duration-300">Dashboard</a>
                <!-- Tambahkan dropdown untuk service -->
            </nav>
        </div>
    </header>

    <!-- Sidebar dan Content -->
    <div class="flex">
        <aside class="w-64 bg-white shadow-md min-h-screen p-4">
            <ul class="space-y-2">
                <li><a href="/" class="block p-2 hover:bg-blue-100 rounded transition">Dashboard</a></li>
                <li><a href="/profile" class="block p-2 hover:bg-blue-100 rounded transition">Profile</a></li>
                <li><a href="/service" class="block p-2 hover:bg-blue-100 rounded transition">Service</a></li>
                <li><a href="/satisfaction" class="block p-2 hover:bg-blue-100 rounded transition">Kepuasan</a></li>
                <li><a href="/spareparts" class="block p-2 hover:bg-blue-100 rounded transition">Spareparts</a></li>
                <li><a href="/payment" class="block p-2 hover:bg-blue-100 rounded transition">Pembayaran</a></li>
            </ul>
        </aside>
        <main class="flex-1 p-6 animate-fade-in">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2023 Laptop Service. Kontak: support@laptop.com</p>
    </footer>
</body>
</html>