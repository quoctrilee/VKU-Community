<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Trang chủ' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left Sidebar -->
        <div class="w-16 md:w-60 h-screen border-r flex-shrink-0 fixed">
            @include('components.left-sidebar')
        </div>
        <!-- Main Content -->
        <div class="flex-1 flex justify-center  overflow-y-auto h-screen">
            @yield('main')
        </div>
        <!-- Right Sidebar -->
        <div class="w-16 md:w-64 h-screen border-l flex-shrink-0 fixed right-2">
            @include('components.right-sidebar')
        </div>
    </div>
</body>
</html>