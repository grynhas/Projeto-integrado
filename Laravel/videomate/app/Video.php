<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Video extends Model
{
    protected $table = "videos";
    protected $primaryKey = "id";
    protected $fillable = ['id_youtube', 'titulo', 'descricao', 'tags', 'inicio_hora', 'inicio_minuto',
    'inicio_segundo', 'fim_hora', 'fim_munuto', 'fim_segundo'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
}
