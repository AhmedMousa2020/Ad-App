<?php

namespace App\Http\Controllers;

use App\Models\AdsCategory;
use App\Models\AdsPost;
use App\Models\AdsTags;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsPostController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index(Request $request)
    {
        
        if($request['tag']){
            $ads = Tag::where('name',$request['tag'])->first()->ads;
        }elseif($request['category']){
            $ads = AdsPost::where('category_id',$request['category'])->get();
        }else{
            $ads = AdsPost::all();
        }
        $categories = AdsCategory::all();
        return view('Ads.index',['ads'=>$ads,'categories'=>$categories]);
    }

    public function create(){
        return view('Ads.create');
    }

    public function store(Request $request){
        
        $ad = $this->AdPost('add',$request);
       
        $tags = explode(',', $request->tags);
        foreach($tags as $tag){
            //check old tag
            $old_tag = Tag::where('name',$tag)->first();
            if(!$old_tag){
                $new_tag = $this->Addtag($tag);
                $this-> AdsTagsRelation($ad,$new_tag);
            }else{
                $this-> AdsTagsRelation($ad,$old_tag);
            }  
        }
        return redirect('/');
    }


    public function edit($id){
        $ad = AdsPost::where('id',$id)->first();
        $tags = '';
        foreach($ad->tags as $tag){
            $tags .=$tag['name'].',';
        }
        $tags =  rtrim($tags, ",");
        return view('Ads.update',['ad'=>$ad,'tags'=>$tags]);
    }

    public function update(Request $request,$id){
        
        $ad = $this->AdPost('edit',$request,$id);
        $tags = explode(',', $request->tags);
        foreach($tags as $tag){
            //check old tag
            $old_tag = Tag::where('name',$tag)->first();
            if(!$old_tag){
                $new_tag = $this->Addtag($tag);
                $this-> AdsTagsRelation($ad,$new_tag);
            }else{
                $old_relation = AdsTags::where('ads_post_id',$ad->id)->where('tag_id',$old_tag['id'])->first();
                if(!$old_relation){
                    $this-> AdsTagsRelation($ad,$old_tag);
                }
                
            }  
        }
        return redirect('/');
    }

    public function destroy($id){
        $ad = AdsPost::where('id',$id)->first();
        $ad->delete();

        return redirect('/');
    }


    public function AdPost($action,$request,$id = null){
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'max:255',
            'category' => 'required',
            'start_date' => 'required',
        ]);
        if($action == 'add'){
            $ad = new AdsPost();
        }elseif('edit'){
            $ad = AdsPost::where('id',$id)->first();
        }
        $ad->type = $request->type;
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->category_id = $request->category;
        $ad->user_id = Auth::id();
        $ad->start_date = $request->start_date;
        $ad->save();

        return $ad;
    }
    public function Addtag($tag){
        $new_tag = new Tag();
        $new_tag->name = $tag;
        $new_tag->save();

        return $new_tag;
    }

    public function AdsTagsRelation($ad,$tag){
        $PostTag = new AdsTags();
        $PostTag->ads_post_id = $ad->id;
        $PostTag->tag_id = $tag->id;
        $PostTag->save();
    }
}
