<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker=Faker::create('zh_TW');
        foreach(range(1,20)as$number){
            $total=20;
            Post::create([
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'is_feature'=>rand(0,1),
                'created_at'=>Carbon::now()->subDays($total - $number),
                'updated_at'=>Carbon::now()->subDays($total - $number),
            ]);
        }
    }
}
