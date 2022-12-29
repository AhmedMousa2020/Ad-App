<?php

namespace App\Http\Controllers;

use App\Models\AdsPost;
use App\Models\User;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('advertiser.index',['users'=>$users]);
    }

    public function show($id){
        $ads = AdsPost::where('user_id',$id)->get();
       
        return view('advertiser.advertiserAds',['ads'=>$ads]);
    }
}
