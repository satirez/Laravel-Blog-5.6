<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      // each es para darle
       factory(App\Post::class, 300 )->create()->each(function(App\Post $post){

       	$post->tags()->attach([

          // acá son cuantas etiquetas por post 

       		rand(1,5),
       		rand(6,14),
       		rand(15,20),

       	]);

       });    
    }
}
