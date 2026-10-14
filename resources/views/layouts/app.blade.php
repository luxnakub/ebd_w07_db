<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ระบบจัดการข้อมูล ebd w05')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-indigo-700 text-white shadow-lg mb-8">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <span class="font-bold text-xl tracking-wide">EBD Project (w05)</span>
            <div class="space-x-4">
                <a href="/title" class="hover:bg-indigo-600 px-3 py-2 rounded-md font-medium">Title</a>
                <a href="/organization" class="hover:bg-indigo-600 px-3 py-2 rounded-md font-medium">Organization</a>
                <a href="/community" class="hover:bg-indigo-600 px-3 py-2 rounded-md font-medium">Community</a>
                <a href="/staff" class="hover:bg-indigo-600 px-3 py-2 rounded-md font-medium">Staff</a>
                <a href="/activities" class="hover:bg-indigo-600 px-3 py-2 rounded-md font-medium">Activity</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6">
        <header class="mb-6">
            @yield('header')
        </header>
        <main class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            @yield('content')
        </main>
    </div>
</body>
</html>