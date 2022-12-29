@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-6" Style="margin-top: 20px;">
            <div class="card">
                <div class="card-header">
                  List Of Tags
                </div>

                <div class="card-body">
                <ul>
                    @foreach ($tags as  $tag)
                      <li Style="display:flex">
                      <div>
                        <a href="{{ route('tagads', $tag->id) }}">{{$tag->name}}</a>
                        </div>
                            <div class="action" Style="display:flex;position: absolute;right: 35px">
                                <a style="color:#5897fb" href="tag/edit/{{$tag->id}}">Edit</a>/
                                <a style="color:#dc3545" href="tag/delete/{{$tag->id}}">Delete</a>
                            </div> 
                      </li>
                    @endforeach
                </ul>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
