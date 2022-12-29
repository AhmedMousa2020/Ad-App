@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-8" Style="margin-top: 20px;">
            <div class="card">
                <div class="card-header">
                  List Of Advertisers
                </div>

                <div class="card-body">
                <ul>
                    @foreach ($users as  $user)
                      <li><a href="{{ route('advertiserads', $user->id) }}">{{$user->name}}</a></li>
                    @endforeach
                </ul>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
