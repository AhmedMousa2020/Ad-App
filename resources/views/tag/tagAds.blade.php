@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($ads as $ad)
                <div class="col-md-4" Style="margin-top: 20px;">
                    @include('layouts.ad-box')
                </div>
            @endforeach
        </div>
    </div>
@endsection
