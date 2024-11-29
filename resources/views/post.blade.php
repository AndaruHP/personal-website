<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('navbar')

    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 mt-12">
        <article class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">
                {{ $post->title }}
            </h2>
            <p class="text-gray-600 mb-4">
                Published on
                <time datetime="{{ $post->created_at->toDateString() }}">
                    {{ $post->formatted_date }}
                </time>
            </p>
            <img alt="{{ $post->title }}" class="block mx-auto mb-6 rounded-lg max-w-full h-auto" height="400"
                src="{{ $post->thumbnailUrl }}" width="400" />
            {!! $post->content !!}
        </article>
    </main>

    @include('footer')
</body>

</html>
