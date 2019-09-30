<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::updateOrCreate([
            'id_usuario' => '1',
            'id_youtube' => 'M7lc1UVf-VE',
            'titulo' => 'Vídeo de teste',
            'descricao' => 'Este é apenas um vídeo para teste da plataforma.',
            'tags' => 'teste,ignorar',
            'inicio_hora' => '0',
            'inicio_minuto' => '6',
            'inicio_segundo' => '25',
            'fim_hora' => '0',
            'fim_minuto' => '7',
            'fim_segundo' => '6'
        ]);

        factory(Video::class, 12)->create();
    }
}
