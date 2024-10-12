<x-layout>
  <x-slot:title>{{ $title }}</x-slot>


  @foreach ($articles as $article)
  <article class="py-8 max-w-screen-md border-b border-gray-500">
    <a href="/articles/{{ $article['slug'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl track-tight font-bold text-gray-900">{{ $article ['title'] }}</h2>
    </a>
    <div class="text-base text-gray-500">
      <a href="#">{{ $article ['author'] }}</a> | {{ $article->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($article ['body'], 100) }}</p>
      <a href="/articles/{{ $article['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach

</x-layout>
