<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsCategory extends Model
{
    use HasFactory;

    public function adsPost(){
        return $this->hasMany(AdsPost::class,'category_id','id');
    }
}
