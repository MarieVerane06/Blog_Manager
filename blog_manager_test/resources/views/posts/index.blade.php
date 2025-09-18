@extends('layouts.app')
@section('content')
    <div class="justify-items-center px-4 my-18">
        <div class="flex justify-between mt-2 items-center mb-4">
            <h1>Mini post list</h1>
            <a class="h-10 bg-gray-300 w-25 flex items-center justify-center rounded-lg" href="{{ route('posts.create') }}"
                role="button">Add Post</a>
        </div>

        {{-- <main>
            {{ $slot }}
        </main> --}}
        <hr>
        <!-- Message if a post is posted successfully -->
        @if ($message = Session::get('success'))
            <div class="flex justify-center">
                <div class="alert alert-success w-full bg-green-200 h-12 rounded flex items-center">
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="w-full">
                    <div class="flex mt-4 w-full">
                        <div class="w-[100px] h-25">
                            <img class="mb-4" src="{{ asset('images/' . $post->image) }}" alt="">
                        </div>
                        <div class="w-full px-4 pt-2">
                            <h4>{{ $post->title }}</h4>
                            <h3>{{ $post->description }}</h3>
                        </div>
                    </div>
                    {{-- <p class="text-xs text-gray-500">{{$post->created_at}}</p> --}}
                    <hr>
                </div>
            @endforeach
        @else
            <p>No Posts found</p>
        @endif
    </div>
@endsection
