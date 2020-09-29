<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dd('run in seeder');
        DB::table('contents')->insert([
            [
                'content_type' => '1',
                'img' => 'fas fa-desktop',
                'title' => 'Development',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
            [
                'content_type' => '1',
                'img' => 'far fa-edit', 
                'title' => 'Design', 
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
            [
                'content_type' => '1', 
                'img' => 'fas fa-cogs', 
                'title' => 'Creativity', 
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa debitis perferendis quam ea reprehenderit ipsum fuga earum ipsa consequuntur magni!', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
            [
                'content_type' => '2', 
                'img' => 'img/project1.jpg', 
                'title' => 'Project 1', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => ''
            ],
            [
                'content_type' => '2', 
                'img' => 'img/project2.jpg', 
                'title' => 'Project 2', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => ''
            ],
            [
                'content_type' => '2', 
                'img' => 'img/project3.jpg', 
                'title' => 'Project 3', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => ''
            ],
            [
                'content_type' => '3', 
                'img' => 'img/kid1.jpg', 
                'title' => 'Jack', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
            [
                'content_type' => '3', 
                'img' => 'img/kid2.jpg', 
                'title' => 'Queen', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
            [
                'content_type' => '3', 
                'img' => 'img/kid3.jpg', 
                'title' => 'King', 
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti.', 
                'link' => json_encode(['external' => 'https://vnexpress.net/', 'facebook' => 'https://www.facebook.com/', 'twitter'=>'https://twitter.com/?lang=en', 'youtube'=>'https://www.youtube.com/'])
            ],
        ]);
    }
}
