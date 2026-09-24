@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto px-6 py-10">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($news as $item)

                <x-news-card :item="$item" />

            @endforeach

        </div>

    </div>

@endsection