<x-layout>
  <x-slot:header>My Homepage</x-slot>
  @foreach ($articles as $article)
    <article class=" py-8 max-w-screen-md border-b border-gray-200">
      <h2 class=" mb-1 text-3xl font-bold text-gray-900 ">{{ $article['judul'] }}</h2>
      <div class=" mt-1 mb-4 font-light  text-gray-400">{{ $article['author'] }}</div>
      <p class=" mb-5">{{ $article['isi'] }}</p>
      <a href="" class=" hover:underline ">Read more</a>
    </article>    
  @endforeach

</x-layout>