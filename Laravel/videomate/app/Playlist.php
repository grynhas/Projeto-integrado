<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "Playlists";
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'categoria'];

    public function video()
    {
        return $this->hasMany(videos::class, 'id', 'id_video');
    }
}
