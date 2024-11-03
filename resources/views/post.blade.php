<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<article class="py-8 max-w-screen-md ">
  <a href="/post/{{ $post['id'] }}" class="hover:underline">
  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post ['title'] }}</h2>
  </a>
  <div>
    <a href="#">{{ $post['author'] }}</a> | 8 Mei 2024
  </div class="text-base text-gray-500">
  <p class="my-4 font-light">{{ Str::limit ($post ['body'], 150) }}</p>
  <a href="/posts" class="font-medium text-blue-500 hover:underline">&raquo;Back to posts</a>
</article>

</x-layout>