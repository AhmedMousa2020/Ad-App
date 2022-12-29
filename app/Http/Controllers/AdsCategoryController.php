<?php

namespace App\Http\Controllers;

use App\Models\AdsCategory;
use App\Models\AdsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsCategoryController extends Controller
{
    public function index(){
        $categories = AdsCategory::all();
        return view('category.index',['categories'=>$categories]);
    }

    public function show($id){
        $ads = AdsPost::where('category_id',$id)->get();
       
        return view('category.categoryAds',['ads'=>$ads]);
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
       $request->validate([
            'title' => 'required|max:255',
           
        ]);
        $ad = new AdsCategory();
        $ad->title = $request->title;
        $ad->save();

        return redirect('categories');
    }

    public function edit($id){
        $category = AdsCategory::where('id',$id)->first();
       
        return view('Category.update',['category'=>$category]);
    }

    public function update(Request $request,$id){
        $ad = AdsCategory::where('id',$id)->first();
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $ad->title = $request->title;
        $ad->save();

        return redirect('categories');
    }

    public function destroy($id){
        $category = AdsCategory::where('id',$id)->first();
       
        $category->delete();

        return redirect('categories');
    }
}
