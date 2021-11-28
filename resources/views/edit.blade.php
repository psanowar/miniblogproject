<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
            @if(session()->has('status'))
                {{session('status')}}
            @endif
            <div class="form-group col-md-4 mt-5">Edit Post</div>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-4 mt-5">
                    <div class="mb-5">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    </div>
                    <div class="mb-5">
                        <label for="body">Body</label>
                        <textarea type="text" class="form-control" id="body" name="body">{{$post->body}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 mt-5">
                <button Class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
        </div>
        </form>
        

</x-app-layout>
