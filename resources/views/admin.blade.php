@extends('layouts.app')

@section('title', 'Админ — NewsSite')

@section('content')

```
<div class="max-w-6xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold mb-8">
        Панель администратора
    </h1>

    <div class="bg-white border border-gray-200 rounded-2xl p-6">

        <h2 class="text-xl font-semibold mb-2">
            Управление пользователями
        </h2>

        <p class="text-gray-600 mb-6">
            Назначение и изменение ролей пользователей.
        </p>

        <a
            href="/admin/users"
            class="inline-block bg-gray-900 text-white px-5 py-3 rounded-lg
                   hover:bg-gray-700 transition"
        >
            Управление пользователями
        </a>

    </div>

</div>
```

@endsection
