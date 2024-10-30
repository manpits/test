<x-layout>
  <x-slot:header>Welcome Page</x-slot>
  <div class=" mx-50 ">
  @foreach ($contacts as $contact)
    <ul role="list" class="divide-y divide-gray-100">
      <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
          <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://picsum.photos/200/300?random={{ rand() }}" alt="">
          <div class="min-w-0 flex-auto">
            <p class="text-sm/6 font-semibold text-gray-900">{{ $contact['name'] }}</p>
            <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $contact['email'] }}</p>
          </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
          <p class="text-sm/6 text-gray-900">{{ $contact['jabatan'] }}</p>
          <p class="mt-1 text-xs/5 text-gray-500">{{ $contact['birth'] }}</p>
        </div>
      </li>
    </ul>    
  @endforeach
  </div>

</x-layout>

