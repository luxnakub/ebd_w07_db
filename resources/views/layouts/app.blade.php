<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Thai Esports & Gaming Hub - w11')</title>

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Tailwind CSS & Bootstrap CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Prompt', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header Navigation Bar สีม่วงหลักของโปรเจกต์ -->
    <nav class="bg-indigo-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <!-- Brand Logo -->
            <a href="{{ route('gaming.chart') }}" class="text-xl font-bold tracking-wide text-white no-underline flex items-center gap-2 hover:text-indigo-200">
                <span class="material-symbols-outlined">sports_esports</span>
                <span>Thai Gaming & Esports Hub (w11)</span>
            </a>

            <!-- Navigation Links -->
            <div class="flex space-x-6 text-sm font-semibold">
                <a href="{{ route('gaming.chart') }}" class="text-white no-underline hover:text-indigo-200 transition flex items-center gap-1">
                    <span class="material-symbols-outlined text-base">bar_chart</span>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('title.index') }}" class="text-white no-underline hover:text-indigo-200 transition">Title</a>
                <a href="{{ route('organization.index') }}" class="text-white no-underline hover:text-indigo-200 transition">Organization</a>
                <a href="{{ route('staff.index') }}" class="text-white no-underline hover:text-indigo-200 transition">Staff</a>
            </div>
        </div>
    </nav>

    <!-- Sub-header -->
    @hasSection('header')
        <header class="bg-white shadow-sm py-4 mb-4">
            <div class="max-w-7xl mx-auto px-6">
                @yield('header')
            </div>
        </header>
    @endif

    <!-- Main Content Area -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-6 my-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-4 text-center text-xs mt-auto">
        <p>© 2026 Thai Gaming & Esports Community System — Information Technology Project (w11)</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>