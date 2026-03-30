<x-layout>
    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>
    <x-slot:category>{{ $category }}</x-slot:category>

    @foreach ($posts as $post)

    <article class="max-w-screen-md mt-5 py-6 px-6 border-t-gray-600 border-b-4 border-l-4 border-purple-200 rounded-md">

        <a class="hover:underline" href="/post/{{ $post["slug"] }}">
          <h2 class="text-3xl font-bold text-gray-600 tracking-tight">{{ $post["title"] }}</h2>
        </a>
      
        <div class="font-extralight text-sm">
          By. <a href="/author/{{ $post->author->id }}" class="hover:underline text-blue-600">{{ $post->author->name }}</a> in <a class="text-blue-600 hover:underline" href="/category/{{ $post->category->id }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-3 font-light">
         {{ Str::limit($post["body"], 150) }}
        </p> 
        <a class="font-medium text-blue-500 hover:underline" href="/post/{{ $post["slug"] }}">Read more &raquo;</a>
      </article>
      
      @endforeach
</x-layout>