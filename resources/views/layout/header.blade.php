<div class="w-full bg-blue-400 py-12">
    <h1 class="text-center text-4xl text-white ">
        HAPPY BOOK STORE
        Selamat datang
        @if ($user->grade == "1")
        @elseif($user->grade == "2")
        @endif
        {{ $user->name }}
    </h1>
</div>

<div class="mb-12">
    <ul class="flex justify-center my-5 gap-20">
        <li>
            <a href="/{{ $user->id }}" class="text-blue-400 hover:text-blue-800">
                Home
            </a>
        </li>
        <li data-dropdown-toggle="dropdown">
            <a href="#" class="text-blue-400 hover:text-blue-800 text-center inline-flex items-center" >
                Category <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
        </li>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                @php
                    $categories = App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                    <li>
                        <a href="/{{ $user->id }}/category/{{ $category->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ $category->category }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <li>
            <a href="/contact" class="text-blue-400 hover:text-blue-800">
                Contact
            </a>
        </li>
    </ul>
</div>
