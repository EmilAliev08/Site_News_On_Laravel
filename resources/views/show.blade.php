@extends('layouts.app')

@section('content')

    <div class="max-w-4xl mx-auto px-6 py-10">

        {{-- Навигация назад --}}
        <a
            href="/"
            class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-900 transition mb-8"
        >
            <span class="text-lg">←</span>
            Все новости
        </a>

        {{-- Статья --}}
        <article class="bg-white border border-gray-200 rounded-3xl overflow-hidden shadow-sm">

            {{-- Шапка статьи --}}
            <div class="px-8 md:px-12 pt-10 pb-8 border-b border-gray-100">

                <div class="flex items-center gap-3 text-sm text-gray-500 mb-5">

                    <span class="px-3 py-1 bg-gray-100 rounded-full">
                        Новости
                    </span>

                    <span>•</span>

                    <time>
                        {{ $news->created_at->format('d.m.Y') }}
                    </time>

                </div>

                <h1 class="text-3xl md:text-5xl font-bold tracking-tight text-gray-900 leading-tight">
                    {{ $news->title }}
                </h1>

            </div>

            {{-- Содержимое --}}
            <div class="px-8 md:px-12 py-10">

                <div class="text-lg leading-8 text-gray-700 whitespace-pre-line">
                    {{ $news->content }}
                </div>

            </div>

            {{-- Нижняя часть --}}
            <div class="px-8 md:px-12 py-6 bg-gray-50 border-t border-gray-100">

                <a
                    href="/"
                    class="inline-flex items-center gap-2 px-5 py-3 bg-gray-900 text-white rounded-xl font-medium hover:bg-gray-700 transition"
                >
                    ← Вернуться к новостям
                </a>

            </div>

        </article>

    </div>

@endsection