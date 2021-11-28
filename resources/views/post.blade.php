<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
            @if(session()->has('status'))
                {{session('status')}}
            @endif

        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-4 mt-5">
                    <div class="mb-5">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-5">
                        <label for="body">Body</label>
                        <textarea type="text" class="form-control" id="body" name="body"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4 mt-5">
                <button Class="btn btn-primary" type="submit" name="submit">Post</button>
            </div>
        </div>
        </form>
        

</x-app-layout>
