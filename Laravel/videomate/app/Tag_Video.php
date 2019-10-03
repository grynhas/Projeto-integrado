<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_Video extends Model
{
    protected $table = "tags_videos";
    protected $primaryKey = "id";
    protected $fillable = ["tag", "id_video"];

    public function video()
    {
        return $this->hasMany(videos::class, 'id', 'id_video');
    }
}
