<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdsPost extends Model
{
    use HasFactory;
    Protected $table = 'ads_posts'; 
    public function adsCategory()
    {
        return $this->belongsTo(AdsCategory::class,'category_id');
    }

    public function Advertiser()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags(){
        return $this->BelongsToMany(Tag::class,'adsTagsRelations');
    }
}
