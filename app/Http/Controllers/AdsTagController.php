<?php

namespace App\Http\Controllers;

use App\Models\AdsCategory;
use App\Models\AdsPost;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsTagController extends Controller
{
    public function index(){
        $tags = Tag::all();

        return view('tag.index',['tags'=>$tags]);
    }

    public function show($id){
        
        $ads = Tag::where('id',$id)->first()->ads;
        return view('tag.tagAds',['ads'=>$ads]);
    }

    public function create(){
        return view('tag.create');
    }

    public function store(Request $request){
       $request->validate([
            'name' => 'required|max:255',
           
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        return redirect('tags');
    }

    public function edit($id){
        $tag = Tag::where('id',$id)->first();
       
        return view('tag.update',['tag'=>$tag]);
    }

    public function update(Request $request,$id){
        $tag = Tag::where('id',$id)->first();
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $tag->name = $request->name;
        $tag->save();
        return redirect('tags');
    }

    public function destroy($id){
        $category = Tag::where('id',$id)->first();
       
        $category->delete();

        return redirect('tags');
    }
}
