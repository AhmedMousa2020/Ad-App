@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" Style="margin-top: 20px;">
                <form action="{{ route('tag.update',$tag->id) }}" method="Post">
                    @csrf
                    <div class="border-t border-b border-gray-300 py-8">
                    
                        <div class="md:w-2/3 w-full mb-6">
                            <label for="name" class="block text-sm font-bold text-gray-700">
                                tag Name
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="name" id="name" value="{{$tag->name}}" class="form-control"
                                    placeholder="tag Name">
                            </div>
                        </div>
                       
                    <div class="mt-6 sm:mt-4">
                        <button type="submit" class="btn btn-primary mt-4">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
