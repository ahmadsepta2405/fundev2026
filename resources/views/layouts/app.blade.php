<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Service App</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100 text-slate-800 antialiased">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="hidden md:flex w-64 flex-col bg-white border-r border-slate-200">

        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-slate-200">
            <span class="text-xl font-bold tracking-tight text-slate-900">
                💻 LaptopService
            </span>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-1 text-sm font-medium">
            <a href="/" class="flex items-center gap-3 px-4 py-2 rounded-lg bg-slate-900 text-white shadow">
                <span>📊</span>
                Dashboard
            </a>

            <a href="/profile" class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition">
                <span>👤</span>
                Profile
            </a>

            <a href="/service" class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition">
                <span>🛠️</span>
                Service
            </a>

            <a href="/satisfaction" class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition">
                <span>⭐</span>
                Kepuasan
            </a>

            <a href="/spareparts" class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition">
                <span>📦</span>
                Spareparts
            </a>

        </nav>

        <!-- Sidebar Footer -->
        <div class="px-6 py-4 border-t border-slate-200 text-xs text-slate-400">
            © 2026 Laptop Service
        </div>
    </aside>

    <!-- Main Area -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 shadow-sm">
            <h1 class="text-lg font-semibold text-slate-900">
                @yield('title', 'Dashboard')
            </h1>

            <div class="flex items-center gap-4">
                <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium bg-slate-900 text-white rounded-lg hover:bg-slate-700 transition shadow">
                    ➕ New Service
                </button>

                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 shadow"></div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="text-center text-xs text-slate-500 py-4">
            Support: support@laptop.com
        </footer>

    </div>

</div>

</body>
</html>
