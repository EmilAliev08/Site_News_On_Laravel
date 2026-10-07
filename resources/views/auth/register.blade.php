<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">

    <form
        method="POST"
        action="/register"
        class="bg-white p-8 w-full max-w-md rounded-xl shadow-md"
    >

        @csrf

        <h1 class="text-3xl font-bold text-center mb-6">
            Регистрация
        </h1>

        @if ($errors->any()) 
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg"> 
                <ul class="list-disc list-inside"> 
                    @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                    @endforeach 
                </ul> 
            </div>
        @endif

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Имя
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="border border-gray-300 rounded-lg w-full px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="border border-gray-300 rounded-lg w-full px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Пароль
            </label>

            <input
                type="password"
                name="password"
                class="border border-gray-300 rounded-lg w-full px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">
                Подтверждение пароля
            </label>

            <input
                type="password"
                name="password_confirmation"
                class="border border-gray-300 rounded-lg w-full px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg mt-4 hover:bg-blue-700 transition"
        >
            Зарегистрироваться
        </button>

    </form>

</body>

</html>