<x-layout>
  <x-slot:title>{{ $title }}</x-slot>


  <article class="py-8 max-w-screen-md border-b">
    <h2 class="mb-1 text-3xl track-tight font-bold text-gray-900">{{ $article ['title'] }}</h2>
    
    <div class="text-base text-gray-500">
      <a href="#">{{ $article ['author'] }}</a> | 1 januari 2024
    </div>
    <p class="my-4 font-light">{{ $article ['body'] }}</p>
      <a href="/articles" class="font-medium text-blue-500 hover:underline">&laquo; Back to articles</a>
  </article>

</x-layout>