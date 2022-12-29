@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" Style="margin-top: 20px;">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="border-t border-b border-gray-300 py-8">
                   
                        <div class="md:w-2/3 w-full mb-6">
                            <label for="title" class="block text-sm font-bold text-gray-700">
                                 Category Title
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Category Title">
                            </div>
                        </div>
                       
                    <div class="mt-6 sm:mt-4">
                        <button type="submit" class="btn btn-primary mt-4">
                            {{ __('Create') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
