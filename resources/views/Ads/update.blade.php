@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8" Style="margin-top: 20px;">
                <form action="{{ route('ad.update',$ad->id) }}" method="Post">
                    @csrf
                    <div class="border-t border-b border-gray-300 py-8">
                    <div class="mt-4">
                        <label for="assigned" class="mt-1 block text-sm font-bold text-gray-700">
                            Select Type
                        </label>
                        <div class="mt-1">
                            <select id="type" class="form-control" placeholder="Select type" name="type">
                                    <option value="paid">Paid</option>
                                    <option value="free">Free</option>
                            </select>
                        </div>
                    </div>
                        <div class="md:w-2/3 w-full mb-6">
                            <label for="title" class="block text-sm font-bold text-gray-700">
                                ad Title
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="title" id="title" value="{{$ad->title}}" class="form-control"
                                    placeholder="ad Title">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="description" class="block text-sm font-bold text-gray-700">
                                Description <span class="text-xs text-gray-500">(Optional)</span>
                            </label>
                            <div class="mt-1">
                                <textarea id="description"  name="description" rows="7" class="form-control">{{$ad->description}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mt-4">
                        <label for="assigned" class="mt-1 block text-sm font-bold text-gray-700">
                            Select Category
                        </label>
                        <div class="mt-1">
                            <select id="category" class="form-control" placeholder="Select Category" name="category">
                                @foreach (\App\Models\AdsCategory::get() as $category)
                                    @if($category->id == $ad->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endif    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="assigned" class="mt-1 block text-sm font-bold text-gray-700">
                            Select Start Date
                        </label>
                        <div class="mt-1">
                            <input name="start_date" value="{{$ad->start_date}}" class="form-control" type="datetime-local" required>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="assigned" class="mt-1 block text-sm font-bold text-gray-700">
                            Pleasr Enter Tags With Seorated Comma
                        </label>
                        <input class="form-control" value="{{$tags}}" type="text" data-role="tagsinput" name="tags">
                        @if ($errors->has('tags'))
                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                        @endif
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
