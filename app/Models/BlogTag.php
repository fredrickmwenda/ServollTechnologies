<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    // public function tag(){
    //     return $this->belongsTo(Tag::class, 'id', 'tag_id');
    // }
}
