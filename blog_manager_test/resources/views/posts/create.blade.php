@extends('layouts.app')
@section('content')
    <div class="container my-18">
        <h1>Add Post</h1>
        <section class="mt-3 flex justify-center w-full">
            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Error message when data is not inputted -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="p-3 w-full">
                    <label for="floatingInput" class="text-2xl">Title :</label><br>
                    <input class="border w-full h-8 rounded" type="text" name="title"><br>
                    <label for="floatingTextArea" class="text-2xl">Description :</label><br>
                    <textarea class="border w-full max-h-80 rounded" name="description" id="floatingTextarea"></textarea><br>
                    <label for="formFile" class="form-label text-2xl">Add Image :</label><br>
                    {{-- <img src="" alt="" class="img-blog"> --}}
                    <input class="border h-8 rounded" type="file" name="image">
                </div>
                <button class="w-20 h-8 rounded-md bg-gray-400 m-3">Save</button>
            </form>
        </section>

    </div>
@endsection
