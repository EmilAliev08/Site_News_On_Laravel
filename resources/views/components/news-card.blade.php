<a href="/news/{{ $item->id }}" class="block h-64">

    <article class="h-full bg-white rounded-2xl border border-gray-200 p-6 hover:-translate-y-1 transition flex flex-col">

        <h2 class="text-xl font-semibold mt-2 mb-3">
            {{ $item->title }}
        </h2>

        <p class="text-gray-600 line-clamp-4">
            {{ $item->content }}
        </p>

        <span class="mt-auto pt-4 text-sm font-medium text-gray-900">
            Читать далее →
        </span>

    </article>

</a>