<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

@foreach ($posts as $posts)
<article class="py-8 max-w-screen-md border-b border-gray-300">
  <a href="/post/{{ $post['id'] }}" class="hover:underline">
  <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post ['title'] }}</h2>
  </a>
  <div>
    <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans()}}
  </div class="text-base text-gray-500">
  <p class="my-4 font-light">{{ Str::limit ($post ['body'], 150) }}</p>
  <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
</article>
@endforeach

</x-layout>