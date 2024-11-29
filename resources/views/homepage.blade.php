<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>

@include('navbar')

<body class="bg-gray-50 mt-12">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">
                From the blog
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Learn how to grow your business with our expert advice.
            </p>
        </div>

        <div class="mt-12 grid gap-8 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            @foreach ($posts as $post)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="relative aspect-square w-full">
                        <img alt={{ $post->title }} class="absolute inset-0 w-full h-full object-cover"
                            src="{{ $post->thumbnailUrl }}" />
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                {{ $post->category->name }}
                            </p>
                            <a class="block mt-2" href="/posts/{{ $post->slug }}">
                                <p class="text-xl font-semibold text-gray-900">
                                    {{ $post->title }}
                                </p>
                            </a>
                            <p class="mt-3 text-base text-gray-500 text-left">
                                {!! Str::words(strip_tags($post->content), 10, '...') !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('footer')
</body>

</html>
