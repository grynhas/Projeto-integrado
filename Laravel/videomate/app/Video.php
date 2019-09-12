<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Video extends Model
{
    protected $table = "videos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_youtube', 'titulo', 'descricao', 'tags', 'inicio_hora', 'inicio_minuto',
        'inicio_segundo', 'fim_hora', 'fim_munuto', 'fim_segundo'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }

    //----------------------------  INICIO -----------------------------// 
    //VERIFICAR NECESSIDADE DE INSERIR O RELACIONAMENTO                 //
    // public function playlist()
    // {
    //     return $this->hasOne(playlist::class, 'id', 'id_playlist');
    // }

    // public function tag()
    // {
    //     return $this->hasMany(tag::class, 'id', 'id_tag'); 
    // }
    //----------------------------  FIM  ------------------------------//
    

    // public $id;
    // public $id_usuario;
    // public $id_youtube;
    // public $titulo;
    // public $descricao;
    // public $tags;
    // public $inicio_hora;
    // public $inicio_minuto;
    // public $inicio_segundo;
    // public $fim_hora;
    // public $fim_minuto;
    // public $fim_segundo;

    public function inicio()
    {
        return $this->inicio_hora * 3600 + $this->inicio_minuto * 60 + $this->inicio_segundo;
    }

    public function fim()
    {
        return $this->fim_hora * 3600 + $this->fim_minuto * 60 + $this->fim_segundo;
    }

    public function urlPlay()
    {
        return "http://www.youtube.com/embed/" . $this->id_youtube .
            "?autoplay=1&origin=http://videomate.com.br&modestbranding=1&rel=0&hl=pt&loop=0&showinfo=1" .
            "&mute=0&start=" . $this->inicio() . "&end=" . $this->fim();
    }
}
