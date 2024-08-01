<x-layout>
     <x-slot:slotTitlePage>{{ $titlePage }}</x-slot:slotTitlePage>
   
<article class="py-8 max-w-screen-md ">
     <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post['title'] }}</h2>
     <div>
          By
          <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
          In
          <a class="text-base text-gray-500 hover:underline" href="#">WebProggraming</a>
          | {{ $post->created_at->diffForHumans() }}
     </div>
     <p class="my-4 font-light">{{ $post['body'] }}</p>

     <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back To Posts;</a>
</article>
</x-layout>