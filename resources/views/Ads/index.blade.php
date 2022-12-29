@extends('layouts.app')
<Style>
    .filter form {
        margin-left: 20px;
    }
</Style>
@section('content')
    <div Style="display: flex;flex-direction: column-reverse;justify-content: center;">

        <div class="filter" Style="display: flex;position: absolute;right: 123px;">

            {{ Form::open(['url' => '/']) }}
            <select class="form-control" onchange="this.form.submit()" name="category">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            {{ Form::close() }}

            {{ Form::open(['url' => '/']) }}
            <input type="text" placeholder="enter tag" name="tag" />
            <input type="submit" value="Filter" class="btn btn-info" />
            {{ Form::close() }}
        </div>
    </div>
    <div class="container">

        <div class="row justify-content-center">
            @foreach ($ads as $ad)
                <div class="col-md-6" Style="margin-top: 20px;">
                    @include('layouts.ad-box')
                </div>
            @endforeach
        </div>
    </div>
@endsection
