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
            'tags' => 'teste',
            'inicio_hora' => '0',
            'inicio_minuto' => '6',
            'inicio_segundo' => '25',
            'fim_hora' => '0',
            'fim_minuto' => '7',
            'fim_segundo' => '6'
        ]);
        Video::updateOrCreate([
            'id_usuario' => '1',
            'id_youtube' => 'qPYCnebQQ6U&t=1442s',
            'titulo' => 'Altura HTML',
            'descricao' => 'colocando altura no HTML',
            'tags' => '#html #css',
            'inicio_hora' => '0',
            'inicio_minuto' => '24',
            'inicio_segundo' => '7',
            'fim_hora' => '0',
            'fim_minuto' => '24',
            'fim_segundo' => '50'
        ]);
        Video::updateOrCreate([
            'id_usuario' => '1',
            'id_youtube' => 'A3mlsAk4G2k',
            'titulo' => 'sombra Css',
            'descricao' => 'colocando sombra no css',
            'tags' => '#html #css',
            'inicio_hora' => '0',
            'inicio_minuto' => '8',
            'inicio_segundo' => '20',
            'fim_hora' => '0',
            'fim_minuto' => '8',
            'fim_segundo' => '50'
        ]);
        Video::updateOrCreate([
            'id_usuario' => '1',
            'id_youtube' => '4Gq3WW6FwVA',
            'titulo' => ' HTML e CSS',
            'descricao' => 'Arrumando Html css',
            'tags' => '#html #css',
            'inicio_hora' => '0',
            'inicio_minuto' => '6',
            'inicio_segundo' => '20',
            'fim_hora' => '0',
            'fim_minuto' => '7',
            'fim_segundo' => '50'
        ]);
        Video::updateOrCreate([
            'id_usuario' => '1',
            'id_youtube' => 'kn8zYcpIjO4&t=23s',
            'titulo' => 'React Native',
            'descricao' => 'Arrumando Html css',
            'tags' => '#html #css',
            'inicio_hora' => '0',
            'inicio_minuto' => '6',
            'inicio_segundo' => '15',
            'fim_hora' => '0',
            'fim_minuto' => '7',
            'fim_segundo' => '10'
        ]);
    }
}
