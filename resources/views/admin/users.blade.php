@extends('layouts.app')

@section('title', 'Управление пользователями — NewsSite')

@section('content')

    <div class="max-w-5xl mx-auto px-6 py-12">

        <h1 class="text-4xl font-bold mb-8">
            Управление пользователями
        </h1>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="space-y-6">

            @foreach ($users as $user)

                <div class="bg-white border border-gray-200 rounded-2xl p-6">

                    <h2 class="text-xl font-semibold">
                        {{ $user->name }}
                    </h2>

                    <p class="text-gray-500 mb-5">
                        {{ $user->email }}
                    </p>

                    @if ($user->id === auth()->id())
                        <p class="text-gray-500">
                            Это ваш аккаунт. Изменение ролей недоступно.
                        </p>
                    @else

                    <form
                        action="/admin/users/{{ $user->id }}/roles"
                        method="POST"
                    >
                        @csrf

                        <div class="space-y-2 mb-6">

                            @foreach ($roles as $role)

                                <label class="flex items-center gap-2">
                                    <input
                                        type="checkbox"
                                        name="roles[]"
                                        value="{{ $role->id }}"
                                        @checked($user->roles->contains($role->id))
                                    >

                                    <span>
                                        {{ $role->name }}
                                    </span>
                                </label>

                            @endforeach

                        </div>

                        <button
                            type="submit"
                            class="bg-gray-900 text-white px-5 py-2 rounded-lg
                                   hover:bg-gray-700 transition"
                        >
                            Сохранить роли
                        </button>

                    </form>

                    @endif

                </div>

            @endforeach

        </div>

    </div>

@endsection