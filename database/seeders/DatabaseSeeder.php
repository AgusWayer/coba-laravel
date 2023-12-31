<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      User::create([
        'name'=> 'Agus Wira',
        'email' => 'guswir@gmail.com',
        'password' => bcrypt('12345')
      ]);
      Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
      ]);
      Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
      ]);
      Post::create([
        'title'=> 'Judul Pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ',
        'body' => 'Laboriosam obcaecati eum dicta repellendus commodi dignissimos expedita, a tempora eos. Reiciendis, rem soluta. Expedita quisquam placeat, enim est, ducimus vitae ipsa tenetur, qui nihil magnam amet magni nisi! Tempora quasi ipsa autem dicta! Temporibus excepturi aut aliquam tenetur quos harum repudiandae quod totam exercitationem ad dolorum beatae quisquam at saepe debitis pariatur, ab quidem expedita natus reprehenderit! Praesentium dignissimos laudantium ratione quia animi! Modi beatae delectus ducimus minima ex odit rerum sint quae amet, sequi consequatur repellendus non, repellat dicta autem cumque eaque maiores. Praesentium, laboriosam! Fuga, modi. Reiciendis, id consequuntur!',
        'category_id' => 1,
        'user_id' => 1
      ]);
      Post::create([
        'title'=> 'Judul Ke Dua',
        'slug' => 'judul-ke-dua',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ',
        'body' => 'Laboriosam obcaecati eum dicta repellendus commodi dignissimos expedita, a tempora eos. Reiciendis, rem soluta. Expedita quisquam placeat, enim est, ducimus vitae ipsa tenetur, qui nihil magnam amet magni nisi! Tempora quasi ipsa autem dicta! Temporibus excepturi aut aliquam tenetur quos harum repudiandae quod totam exercitationem ad dolorum beatae quisquam at saepe debitis pariatur, ab quidem expedita natus reprehenderit! Praesentium dignissimos laudantium ratione quia animi! Modi beatae delectus ducimus minima ex odit rerum sint quae amet, sequi consequatur repellendus non, repellat dicta autem cumque eaque maiores. Praesentium, laboriosam! Fuga, modi. Reiciendis, id consequuntur!',
        'category_id' => 1,
        'user_id' => 1
      ]);
      Post::create([
        'title'=> 'Judul Ke Tiga',
        'slug' => 'judul-ke-tiga',
        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ',
        'body' => 'Laboriosam obcaecati eum dicta repellendus commodi dignissimos expedita, a tempora eos. Reiciendis, rem soluta. Expedita quisquam placeat, enim est, ducimus vitae ipsa tenetur, qui nihil magnam amet magni nisi! Tempora quasi ipsa autem dicta! Temporibus excepturi aut aliquam tenetur quos harum repudiandae quod totam exercitationem ad dolorum beatae quisquam at saepe debitis pariatur, ab quidem expedita natus reprehenderit! Praesentium dignissimos laudantium ratione quia animi! Modi beatae delectus ducimus minima ex odit rerum sint quae amet, sequi consequatur repellendus non, repellat dicta autem cumque eaque maiores. Praesentium, laboriosam! Fuga, modi. Reiciendis, id consequuntur!',
        'category_id' => 3,
        'user_id' => 1
      ]);
    }
}
