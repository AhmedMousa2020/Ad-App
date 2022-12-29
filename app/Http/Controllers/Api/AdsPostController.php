<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdsCategory;
use App\Models\AdsPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdsPostController extends Controller
{
    public function index()
    {
        $result=array();
        $ads = AdsPost::all();
        foreach($ads as $ad){
            $tags = '';
            foreach(AdsPost::find($ad->id)->tags()->pluck('name') as $tag){
                $tags .=$tag.',';
            }
            $tags = rtrim($tags, ",");  
             $result[] = array('type'=> $ad->type,
             'title'=> $ad->title,
             'description'=> $ad->description,
             'category'=>AdsPost::find($ad->id)->adsCategory()->pluck('title')[0],
             'tags'=> $tags,
             'advertiser'=>AdsPost::find($ad->id)->Advertiser()->pluck('name')[0],
             'start_date'=> $ad->start_date
        );
        }
        return response()->json($result);
    }
}
