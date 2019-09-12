<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags_videos";
    protected $primaryKey = "id";
    protected $fillable = ["tag"];

    public function video()
    {
        return $this->hasMany(videos::class, 'id', 'id_video');
    }
}
