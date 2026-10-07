@extends('layouts.app')

@section('title', 'Журналист — NewsSite')

@section('content')

    <div class="max-w-3xl mx-auto px-6 py-12">

        <h1 class="text-4xl font-bold mb-8">
            Создать статью
        </h1>

        <form action="/news" method="POST" class="bg-white border border-gray-200 rounded-2xl p-8 space-y-6">
            @csrf

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <label class="block text-sm font-medium mb-2">
                    Заголовок
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="Введите заголовок статьи"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-gray-900"
                >
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-3">
                    Категории
                </label>

                <div class="space-y-2">
                    @foreach($categories as $category)
                        <label class="flex items-center gap-2">
                            <input
                                type="checkbox"
                                name="categories[]"
                                value="{{ $category->id }}"
                                class="rounded border-gray-300"
                            >

                            <span>{{ $category->name }}</span>
                        </label>
                    @endforeach
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">
                    Текст статьи
                </label>

                <textarea
                    rows="8"
                    name="content"
                    placeholder="Введите текст статьи"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-gray-900"
                >{{ old('content') }}</textarea>
            </div>

            <button
                type="submit"
                class="bg-gray-900 text-white px-6 py-3 rounded-lg
                       hover:bg-gray-700 transition"
            >
                Опубликовать
            </button>

        </form>

    </div>
    

@endsection