<x-layout>
    
  <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>
  
  <article class="max-w-screen-md mt-5 py-6 px-6 border-t-gray-600 border-b-4 border-l-4 border-purple-200 rounded-md">
      <h2 class="text-3xl font-bold text-gray-600 tracking-tight">{{ $post["title"] }}</h2>
    <div class="font-extralight text-sm">
      <a href="">By. {{ $post->author->name }} | {{ $post->created_at->format('d F x') }}</a>
    </div>
    <p class="my-3 font-light">
     {{ $post["body"] }}
    </p> 
    <a class="font-medium text-blue-500 hover:underline" href="/posts">Back &laquo;</a>
  </article>
  
    
  
  </x-layout>

