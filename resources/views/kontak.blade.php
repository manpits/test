<x-layout>
  <x-slot:header>Contact</x-slot>
  <div>
    @foreach ($kontaks as $kontak)        
        <a href="#" class=" my-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://picsum.photos/200/300?random={{ rand() }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kontak['name'] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $kontak['email'] }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $kontak['phone'] }}</p>

                <div class="inline-flex rounded-md shadow-sm" role="group">
                <button onclick="location.href='{{ route('kontak.show',$kontak['id']) }}'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                    Details
                </button>
                <button onclick="location.href='{{ route('kontak.edit',$kontak['id']) }}'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                    Edit
                </button>
                <form action="{{ route('kontak.destroy',$kontak['id']) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                        Delete
                    </button>
                </form>
                </div>

            </div>
        </a>        
    @endforeach
  </div>

</x-layout>





