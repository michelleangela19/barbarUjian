@extends('layout.master')
@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto grid grid-cols-3 mb-24">
        @foreach ($books as $book)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $book->Detail->description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        Genre: {{ $book->Category->category }}
                    </span>
                </div>
                <form action="/buyBooks" method="POST">
                    {{-- POST = supaya gak keliatan info ttg transaksinya di routenya --}}
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">

                    <button type="submit" class="bg-red-500 px-4 radius-4">
                        BUY
                    </button>
                </form>
            </div>
        @endforeach
    </div>
@endsection

