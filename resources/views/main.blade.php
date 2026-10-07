@extends('layouts.app')

@section('title', 'Главная — NewsSite')

@section('content')

    <div class="max-w-6xl mx-auto px-6 py-12">

        @if (session('error')) 
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                {{ session('error') }} 
            </div> 
        @endif

        <h1 class="text-4xl font-bold mb-8">
            Последние новости
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $item)
                <x-news-card :item=$item />
            @endforeach
        </div>

    </div>

@endsection