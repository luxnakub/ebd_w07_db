<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EBD Project (w10)')</title>

    <!-- Tailwind CSS & Bootstrap CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Header Navigation Bar สีม่วงแบบดั้งเดิม -->
    <nav class="bg-indigo-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <!-- Brand / Title ฝั่งซ้าย -->
            <a href="{{ route('staff.index') }}" class="text-xl font-bold tracking-wide text-white no-underline hover:text-gray-200">
                EBD Project (w10)
            </a>

            <!-- Navigation Links ฝั่งขวา -->
            <div class="flex space-x-8 text-sm font-semibold">
                <a href="{{ route('title.index') }}" class="text-white no-underline hover:text-gray-200 transition">Title</a>
                <a href="{{ route('organization.index') }}" class="text-white no-underline hover:text-gray-200 transition">Organization</a>
                <a href="{{ route('staff.index') }}" class="text-white no-underline hover:text-gray-200 transition">Staff</a>
                <a href="{{ route('gaming.chart') }}" class="text-white no-underline hover:text-gray-200 transition">Gaming Chart (w10)</a>
            </div>
        </div>
    </nav>

    <!-- Content Area ตรงกลาง -->
    <main class="flex-grow my-8">
        <div class="max-w-7xl mx-auto px-6">
            @yield('content')
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>