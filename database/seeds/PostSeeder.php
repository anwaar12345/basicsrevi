<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
$posts = [
['title'=>'post no 1', 'author' => 'Syed Anwar Ahmed Shah', 'user_id' => 1],
['title'=>'post no 2', 'author' => 'Syed Anwar Ahmed Shah', 'user_id' => 1],
['title'=>'post no 3', 'author' => 'Syed Anwar Ahmed Shah', 'user_id' => 1],
['title'=>'post no 4', 'author' => 'Syed Anwar Ahmed Shah', 'user_id' => 1]

];

foreach($posts as $post){
    DB::table('posts')->insert($post);
}


    }
}
