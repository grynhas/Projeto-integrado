<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag' => 'HTML'
        ]);

        Tag::create([
            'tag' => 'CSS'
        ]);

        Tag::create([
            'tag' => 'JavaScript'
        ]);

        Tag::create([
            'tag' => 'Laravel'
        ]);

        Tag::create([
            'tag' => 'Front-End'
        ]);
        
        Tag::create([
            'tag' => 'Back-End'
        ]);
    }
}
