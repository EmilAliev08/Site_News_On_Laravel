<header class="sticky top-0 z-50 bg-white border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4 md:px-6 py-4">

        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

            <a href="/" class="text-2xl font-bold">
                NewsSite
            </a>

            <nav class="flex flex-wrap gap-x-5 gap-y-2">
                <a href="/" class="text-gray-600 hover:text-gray-900">
                    Главная
                </a>

                <a href="/catalog" class="text-gray-600 hover:text-gray-900">
                    Каталог
                </a>

                <a href="/journalist" class="text-gray-600 hover:text-gray-900">
                    Журналист
                </a>

                <a href="/admin" class="text-gray-600 hover:text-gray-900">
                    Админ
                </a>
            </nav>

            @guest
                <div class="flex gap-3">
                    <a href="/login"
                    class="text-gray-600 hover:text-gray-900">
                        Войти
                    </a>

                    <a href="/register"
                    class="text-gray-600 hover:text-gray-900">
                        Зарегистрироваться
                    </a>
                </div>
            @endguest

            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                            class="text-gray-600 hover:text-gray-900">
                        Выйти
                    </button>
                </form>
            @endauth

        </div>

    </div>
</header>