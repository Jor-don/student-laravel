<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your's Glow Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons CDN -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Optional custom CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-gray-50">

    <!-- Sidebar Component -->
    <custom-sidebar></custom-sidebar>

    <!-- Page content -->
    <main class="ml-64 p-8">
        @yield('content')
    </main>

    <!-- Sidebar JS (no Vite, no npm) -->
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script>feather.replace();</script>

</body>
</html>