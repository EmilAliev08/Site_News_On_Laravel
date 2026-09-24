@extends('layouts.app')

@section('title', 'Каталог — NewsSite')

@section('content')

    <div class="max-w-6xl mx-auto px-6 py-12">

        <h1 class="text-4xl font-bold mb-8">
            Каталог новостей
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="/catalog/technology" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        💻
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Технологии
                    </h2>

                    <p class="text-gray-600">
                        Новости о технологиях, устройствах и новых разработках.
                    </p>

                </article>
            </a>


            <a href="/catalog/programming" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        👨‍💻
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Программирование
                    </h2>

                    <p class="text-gray-600">
                        Новости мира программирования, языков и разработки.
                    </p>

                </article>
            </a>


            <a href="/catalog/science" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        🔬
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Наука
                    </h2>

                    <p class="text-gray-600">
                        Новые открытия, исследования и научные события.
                    </p>

                </article>
            </a>


            <a href="/catalog/sport" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        ⚽
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Спорт
                    </h2>

                    <p class="text-gray-600">
                        Последние новости из мира спорта.
                    </p>

                </article>
            </a>


            <a href="/catalog/world" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        🌍
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Мир
                    </h2>

                    <p class="text-gray-600">
                        Важные события и новости со всего мира.
                    </p>

                </article>
            </a>


            <a href="/catalog/economy" class="block">
                <article class="bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition">

                    <span class="text-3xl">
                        💰
                    </span>

                    <h2 class="text-xl font-semibold mt-4 mb-2">
                        Экономика
                    </h2>

                    <p class="text-gray-600">
                        Новости экономики, бизнеса и финансов.
                    </p>

                </article>
            </a>

        </div>

    </div>

@endsection