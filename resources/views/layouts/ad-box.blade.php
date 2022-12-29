<div class="card">
                <div class="card-header"  Style="display:flex">
                  <p>{{$ad->title}}</p>
                    <div Style="display:flex;right: 15px;position: absolute;">
                        <a href="{{route('ad.edit',$ad->id)}}">Edit</a>/
                        <a href="{{route('ad.delete',$ad->id)}}" style="color: #dc3545;">Delete</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>{{$ad->description}}</h4>
                        <hr/>
                        <div style="display: flex;justify-content: space-between;">
                            <div style="display: block;">
                        <span>{{ \App\Models\AdsCategory::where(['id' => $ad->category_id])->pluck('title')->first()}}</span>
                        <br>
                        @if(!count($ad->tags)<1)
                        <i class="fas fa-tags" style="font-size: 14px;font-weight:700"></i>
                        @endif
                        @foreach ($ad->tags as $tag)
                            
                        <a href="/?tag={{$tag->name}}"> {{$tag->name}}</a>
                        @endforeach
                        </div>
                        <div style="display: inline-grid;">
                            <span>({{$ad->start_date}})</span>
                            <span>({{ \App\Models\User::where(['id' => $ad->user_id])->pluck('name')->first()}})  ({{$ad->type}})</span>
                        </div>
                    </div>
                </div>
            </div>