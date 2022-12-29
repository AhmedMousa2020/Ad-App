<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    Protected $table = 'tags';
    public function ads(){
        return $this->BelongsToMany(AdsPost::class,'adsTagsRelations');
    }
}
